<?php

namespace App\Form;

use App\Entity\UserManagement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserManagementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('first_name', TextType::class)
        ->add('last_name', TextType::class)
        ->add('email', EmailType::class, [

        ])
        ->add('age', null)
        ->add('hobby', ChoiceType::class, [
            'choices' => [
                'Volleyball' => 'volleyball',
                'Cricket' => 'cricket',
                'Football' => 'football'
            ],
            'expanded' => true,
            'multiple' => true,
        ])
        ->add('gender', ChoiceType::class, [
            'choices' => [
                'Male' => 'male',
                'Female' => 'female'
            ],
            'placeholder' => 'Choose Gender'
        ])
         ->add('role', ChoiceType::class, [
            'choices' => [
                'Admin' => 'admin',
                'User' => 'user',
                'Manager' => 'manager'
            ],
            'placeholder' => 'Select Role'
        ])
        ->add('status', null)
        ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserManagement::class,
        ]);
    }
}
