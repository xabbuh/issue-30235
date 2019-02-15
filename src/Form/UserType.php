<?php

declare(strict_types = 1);

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $constraints = [new NotBlank(["message"=> "le champs ne doit pas être null"])];
        $builder
            ->add('firstname',TextType::class, [
                "required" => true,
                "constraints" => $constraints
            ])
            ->add('lastname',TextType::class, [
                "required" => true,
                "constraints" => $constraints
            ])
            ->add('username',TextType::class, [
                "required" => true,
                "constraints" => $constraints
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class
        ]);
    }
}
