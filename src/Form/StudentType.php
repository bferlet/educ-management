<?php

namespace App\Form;

use App\Entity\Classroom;
use App\Entity\Student;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, ['label' => "Nom"])
            ->add('lastName', TextType::class, ['label' => "Prénom"])
            ->add('birthDate',BirthdayType::class, ['label' => "Date de naissance", 'input' => 'datetime_immutable'])
            ->add('gender',ChoiceType::class, ['label' => "Sexe", 'expanded' => true, 'multiple' => false, 'choices' => ['Homme' => true,'Femme' => false]])
            ->add('firstMark', IntegerType::class, ['label' => "Première note"])
            ->add('secondMark', IntegerType::class, ['label' => "Seconde Note"])
            ->add('classroom', EntityType::class, ['class' => Classroom::class, 'label' => "Classe"])
            ->add('average', TextType::class, ['label' => "Moyenne"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
