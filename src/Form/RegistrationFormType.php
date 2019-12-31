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
                'label' => false,
                'attr'=> [
                    'class'=> "form-control",
                    'placeholder' => 'Email'
                ]
            ])
            
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit faire au minimum {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],  'label' => false,
                    'attr' => [
                        'class' => "form-control",
                        'placeholder' => 'Mot de passe',
                        
                    ]
                
            ])
            ->add('name', TextType::class,[
                'label' => false,
                'attr' => [
                    'class' => "form-control ",
                    'placeholder' => 'Nom'
                ]
            ])
            ->add('first_name', TextType::class,[
                'label' => false,
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Prénom'
                ]
            ])
            ->add('adresse', TextType::class,[
                'label' => false,
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Adresse'
                ]
            ])
            ->add('ville', TextType::class,[
                'label' => false,
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Ville'
                ]
            ])
            ->add('pays', TextType::class,[
                'label' => false,
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Pays'
                ]
            ])
            ->add('codePostal', TextType::class,[
                'label' => false,
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Code postal'
                ]
            ])
            ->add('formeJuridique', ChoiceType::class,[
                'label' => false,
                'attr' => [
                    'class' => "form-control browser-default custom-select"
                    
                ],
                'choices' => [
                    'Choisissez une option' => null,
                    'Particulier' => 'Particulier',
                    'Entreprise' => 'Entreprise'
                ]
            ])
                
            ->add('societyName', TextType::class , [
                'label' => false ,
                'required' =>false,
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Nom de la Société'
                ]
            ])
            ->add('numero_tel',TextType::class , [
                'label' => false ,
                'required' =>false,
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Numéro de téléphone'
                ]
            ])
            ->add('num_siret',TextType::class , [
                'label' => false ,
                'required' =>false,
                'attr' => [
                    'class' => "form-control",
                    'placeholder' => 'Numéro de Siret'
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
