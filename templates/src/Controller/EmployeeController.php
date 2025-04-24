<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Form\EmployeeType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;

final class EmployeeController extends AbstractController
{
    #[Route('/employee', name: 'employee')]
    public function index(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger, UrlGeneratorInterface $urlGenerator): Response
    {
        //Ajax
        if($request->isXmlHttpRequest())
        {
            // dd($request->getContent());
            $repository = $doctrine->getRepository(Employee::class);
            // dd($request->query->getParame('salary'));
            $salary = $request->request->get('salary');
            $comparison = $request->request->get('comparison');

            $qb = $repository->createQueryBuilder('e');

            if ($salary) 
            {            
                $qb->andWhere("e.salary $comparison :salary")->setParameter('salary', $salary)->orderBy('e.id', 'DESC');                  
            }   

            $employees = $qb->getQuery()->getResult();
            
            // $employees = $repository->findAll();

            $data = [];
            $counter = 1;
            $package = new Package(new EmptyVersionStrategy());

            foreach($employees as $emp)
            {
                $editUrl = $urlGenerator->generate('employee_edit', ['id' => $emp->getId()]);

                $data[] = [
                    'id' => $counter++,
                    'first_name' => $emp->getFirstName(),
                    'last_name' => $emp->getLastName(),
                    'age' => $emp->getAge(),
                    'hobbies' => $emp->getHobby(),
                    'salary' => $emp->getSalary(),
                    'role' => $emp->getRoles(),
                    // 'profile_image' => $emp->getProfileImage(),
                    'profile_image' => '<img src="'. $package->getUrl('/uploads/'). $emp->getProfileImage() .'" height="60" widht="100"/>',
                    'edit' => '<a href="'. $editUrl .'" class="btn btn-info">Edit</a>',
                    'delete' => '<button data-id="'. $emp->getId() .'" class="btn btn-danger employee_delete">Delete</button>',
                ];
            }

            return new JSONResponse(['data' => $data]);
        }

        $employee = new Employee();     
        
        $form = $this->createForm(EmployeeType::class, $employee, [            
            'method' => 'POST',
        ]);
    
        //FormRequest
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {            
            $employee = $form->getData();

            $profileImageFile = $form->get('profile_image_file')->getData();
            if($profileImageFile)
            {
                $originalFile = pathinfo($profileImageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFileName = $slugger->slug($originalFile);
                $newFileName = uniqid() . '.' . $profileImageFile->guessExtension();

                try
                {
                    $profileImageFile->move($this->getParameter('uploads_directory'), $newFileName);
                }
                catch(\Exception $e)
                {
                    $this->addFlash('error', $e->getMessage());
                }
                $employee->setProfileImage($newFileName);
            }


            $entityManager = $doctrine->getManager();
            $entityManager->persist($employee);
            $entityManager->flush();

            return $this->redirectToRoute('employee_list');
        }

        return $this->render('employee/index.html.twig', [
            'controller_name' => 'EmployeeController',
            'form' => $form,
            'employee' => $employee
        ]);
    }

   #[Route('/employee-list', name:'employee_list')]
   public function show(ManagerRegistry $doctrine)
   {
    $repository = $doctrine->getRepository(Employee::class);
    
    $employee = $repository->findAll();
    // dd($employee);
    return $this->render('employee/list.html.twig', [
        'employee' => $employee,
    ]);
   }

   #[Route('/edit/{id}', name: 'employee_edit')]
   public function edit(EntityManagerInterface $entityManager, Request $request, Employee $employee)
   {
        if($employee->getProfileImage() !== null)
        {
            $employee->setProfileImageFile(new File($this->getParameter('uploads_directory') . '/' . $employee->getProfileImage()));
        }
        $form = $this->createForm(EmployeeType::class, $employee, ['is_edit' => false]);

        $form->handleRequest($request); 
        if($form->isSubmitted() && $form->isValid())
        {            
            //Updating Image File
            $profileImageFile = $form->get('profile_image_file')->getData();
            if($profileImageFile)
            {

                //Deleting the Old File
                $fileSystem = new FileSystem();
                $file = $employee->getProfileImage();

                $imagePath = $this->getParameter('uploads_directory') . $file;

                if($fileSystem->exists($imagePath))
                {
                    $fileSystem->remove($imagePath);
                }

                $originalFile = pathinfo($profileImageFile->getClientOriginalName(), PATHINFO_FILENAME);                
                $newFileName = uniqid() . '.' . $profileImageFile->guessExtension();

                try
                {
                    $profileImageFile->move($this->getParameter('uploads_directory'), $newFileName);
                }
                catch(\Exception $e)
                {
                    $this->addFlash('error', $e->getMessage());
                }
                $employee->setProfileImage($newFileName);
            }


            $entityManager->persist($employee);
            $entityManager->flush();
            return $this->redirectToRoute('employee_list');
        }

        return $this->render('employee/index.html.twig', [
            'form' => $form->createView(),
            'employee' => $employee,
            'is_edit' => true
        ]);
   }

   #[Route('/employee-delete', name:'employee_delete', methods: ['POST'])]
   public function delete(EntityManagerInterface $entityManager, Request $request)
   {
       $id = $request->request->get('id');
        if (!$id) {
            return new JsonResponse(['error' => 'Missing ID'], 400);
        }

        $employee = $entityManager->getRepository(Employee::class)->find($id);   

        if (!$employee) {
            return new JsonResponse(['error' => 'Employee not found'], 404);
        }

        //FileSystem
        $filesystem = new Filesystem(); 
        $file = $employee->getProfileImage();

        $imagePath = $this->getParameter('uploads_directory') . $file;

        //Checking for existence of File
        if($filesystem->exists($imagePath));       
        {
            //Removing File
            $filesystem->remove($imagePath);
        }

        $entityManager->remove($employee);
        $entityManager->flush();

        return new JsonResponse(['success' => true]);
    }
}
