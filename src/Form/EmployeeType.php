<?php

namespace App\Form;

use App\Entity\Employee;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

class EmployeeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options["is_edit"] ?? true;
        $builder
        ->add('first_name', TextType::class, [
            'required' => true,
            'constraints' => [
                new Length(['min' => 3, 'max' => 15]),
                new NotBlank(['message'=> 'Fist Name is required']),
            ],
            ])
        ->add('last_name', TextType::class, [
            'required' => true,
            'constraints' => [
                new Length(['min' => 3, 'max' => 15]),
            ],
            ])
        ->add('age', null, [
            'required' => true,       
            'constraints' => [
                    new Assert\Type([
                        'type' => 'number',
                        'message' => 'Age must be whole number'
                    ]),
                    new Assert\Positive([
                        'message' => 'Age cannot be less than zero'
                    ]),
                ]     
            ])
        ->add('Hobby', ChoiceType::class, array(
            'choices' => ['Volleyball' => 'volleyball', 'Football' => 'football', 'Cricket' => 'cricket', 'Tennis' => 'tennis'],
            'multiple' => true,
            'placeholder' => 'Select a Hobby',
            'expanded' => true
        ))
        ->add('gender', ChoiceType::class, array(
            'choices' => array(
                'Male' => 'male',
                'Female' => 'female',
            ),
            'placeholder' => 'Choose Gender',
            'required' => true,
        ))
        ->add('about_me', null, [
            'required'=> true,
        ])
        ->add('salary', null, [
            'constraints' => [
                new NotBlank(),
                new Assert\Type([
                    'type' => 'float',
                    'message' => 'Salary must be number'
                ]),
                new Assert\Positive([
                    'message' => 'Salary must be greater than zero'
                ])
            ],
            'scale' => 2,
        ])
        ->add('roles', ChoiceType::class, array(
            'choices' => array(
                'Admin' => 'admin',
                'User' => 'user',
                'Guest' => 'guest'
            ),
            'placeholder'=> 'Choose Role',
            'multiple' => false,
        ))
        ->add('city', TextType::class)
        ->add('profile_image_file', FileType::class, ['required'=> $isEdit, 'mapped' => true])
        ->add('save', SubmitType::class, ['label' => 'Submit'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
            'is_edit' => true, 
        ]);
    }
}
