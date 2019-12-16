<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, [
                'label' => false])
            ->add('name', TextType::class, [
                'label' => false])
            ->add('first_name', TextType::class, [
                'label' => false])
            ->add('pays', TextType::class, [
                'label' => false])
            ->add('code_postal', TextType::class, [
                'label' => false])
            ->add('adresse', TextType::class, [
                'label' => false])
            ->add('ville', TextType::class, [
                'label' => false])
            ->add('numero_tel', TextType::class, [
                'label' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
