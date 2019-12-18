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

            ->add('codePostal', TextType::class, [
                'label' => false])

            ->add('adresse', TextType::class, [
                'label' => false])

            ->add('ville', TextType::class, [
                'label' => false])
                
            ->add('numero_tel', TextType::class, [
                'label' => false])

            ->add('num_siret', TextType::class, [
                'label' => false,
                'disabled' => 'disabled',
                'attr' =>[
                    'title' => false
                    ]])

            ->add('forme_juridique', TextType::class, [
                'label' => false,
                'disabled' => 'disabled',
                'attr' =>[
                    'title' => false
                    ]])
                
            ->add('society_name', TextType::class, [
                'label' => false,
                'disabled' => 'disabled',
                'attr' =>[
                    'title' => false
                    ]])
        
                ;}

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
