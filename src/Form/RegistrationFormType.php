<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', TextType::class, [
                'attr'=> [
                    
                    'class'=> "input--style-4"
                ]
            ])
            
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],  'label' => 'Mot de passe',
                    'attr' => [
                        
                        'class' => "input--style-4"
                    ]
                
            ])
            ->add('name', TextType::class,[
                'label' => 'Nom',
                'attr' => [
                    'class' => "input--style-4"
                ]
            ])
            ->add('first_name', TextType::class,[
                'label' => 'Prénom',
                'attr' => [
                    'class' => "input--style-4"
                ]
            ])
            ->add('adresse', TextType::class,[
                'attr' => [
                    'class' => "input--style-4"
                ]
            ])
            ->add('ville', TextType::class,[
                'attr' => [
                    'class' => "input--style-4"
                ]
            ])
            ->add('pays', TextType::class,[
                'attr' => [
                    'class' => "input--style-4"
                ]
            ])
            ->add('codePostal', IntegerType::class,[
                'attr' => [
                    'class' => "input--style-4"
                ]
            ])
            ->add('formeJuridique', ChoiceType::class,[
                'attr' => [
                    'class' => "input--style-4"
                    
                ],
                'choices' => [
                    'Choisissez une option' => null,
                    'Particulier' => 'particulier',
                    'Entreprise' => 'entreprise'
                ]
            ])
                
            ->add('societyName', TextType::class , [
                'label' => 'Nom de la société' ,
                'attr' => [
                    'class' => "input--style-4"
                ]
            ])
            ->add('numero_tel',TextType::class , [
                'label' => 'Numéro de téléphone' ,
                'attr' => [
                    'class' => "input--style-4"
                ]
            ])
            ->add('num_siret',TextType::class , [
                'label' => 'Numéro de SIRET' ,
                'attr' => [
                    'class' => "input--style-4"
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                  
                ],'label' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
