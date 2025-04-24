<?php

namespace App\Controller;

use App\Entity\UserManagement;
use App\Form\UserManagementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserManagementController extends AbstractController
{
    #[Route('/user/management', name: 'app_user_management')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $userM = new UserManagement();

        $form = $this->createForm(UserManagementType::class, $userM);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                // dd("hre");
                $userM = $form->getData();
                $em->persist($userM);
                $em->flush();
                return $this->redirectToRoute('user_list');
            }


        return $this->render('user_management/index.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/user/management/list', name: 'user_list')]
    public function show(Request $request, EntityManagerInterface $em)
    {
        if($request->isXmlHttpRequest())
        {
            $role = $request->request->get('role');
            $status = $request->request->get('status');
            $dates = $request->request->get('date');
            $string = explode('-',$dates);

            $date1 = explode('/',$string[0]);
            $date2 = explode('/',$string[1]);

            $startDate = $date1[2].'-'.$date1[1].'-'.$date1[0];
            $endDate = $date2[2].'-'.$date2[1].'-'.$date2[0];

            $startDate = str_replace(" ", "", $startDate);
            $endDate = str_replace(" ", "", $endDate);

            $start = \DateTime::createFromFormat('Y-m-d',$startDate);
            $end = \DateTime::createFromFormat('Y-m-d', $endDate);
            // dd( $start, $end);

            // dd($dates, $string[0], $string[1]);


            $data = [];
            $counter = 1;
            // $userData = $em->getRepository(UserManagement::class)->findAll();
            $qb = $em->createQueryBuilder();
            $qb = $qb->select('e');
            $qb = $qb->from(UserManagement::class,'e');
            if($role && $role != "") 
            {                
                $qb = $qb->andWhere('e.role=:role')->setParameter('role', $role);             
            }

            if($status != "") 
            {                
                // dd($status);
                $qb = $qb->andWhere("e.status=:status")->setParameter('status', $status);
            }

            if($start && $end)
            {
                $qb = $qb->andWhere("e.created_at BETWEEN :startDate AND :endDate")
                ->setParameter("startDate", $start)
                ->setParameter("endDate", $end);
            }
            $qb = $qb->getQuery();
            $userData = $qb->getResult();    

            foreach($userData as $u)
            {   
                $editPath = $this->generateUrl('user_edit', ['id'=> $u->getId()]);
                $deletePath = '<button data-id="'. $u->getId() .'" class="btn btn-sm btn-danger user_delete">Delete</button>';
                $data[] = [
                    'id' => $counter++,
                    'first_name' => $u->getFirstName(),
                    'last_name' => $u->getLastName(),
                    'email' => $u->getEmail(),
                    'age' => $u->getAge(),
                    'hobby' => $u->getHobby(),
                    'gender' => $u->getGender(),
                    'role' => $u->getRole(),
                    'status' => ($u->getStatus() == true) ? 'Active' : 'In-active',
                    'edit' => '<a href="'. $editPath .'" class="btn btn-primary btn-sm">Edit</a>',
                    'delete' => $deletePath,
                ];
            }

            return new JsonResponse(['data' => $data]);
        }
        return $this->render('user_management/list.html.twig');
    }

    #[Route('/user/management/edit/{id}', name:'user_edit')]
    public function edit(UserManagement $user, EntityManagerInterface $em, Request $request) 
    {        
        $form = $this->createForm(UserManagementType::class, $user);


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('user_list');
        }

        return $this->render('user_management/index.html.twig', [
            'form'=> $form
        ]);
    }

    #[Route("/user/management/delete", name:"user_delete")]
    public function delete(EntityManagerInterface $em, Request $request)
    {
        $id = $request->request->get('id');
        $user = $em->getRepository(UserManagement::class)->find($id);
        if (!$user) {
            return new JsonResponse(['error'=> 'Use not found']);
        }
        $em->remove($user);
        $em->flush();

        return new JsonResponse(['success'=> 'User Deleted Successfully']);
    }
}
