<?php

namespace App\Form;

use App\Entity\Subscription;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SubscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cpu', IntegerType::class,[
                'attr' => [
                    'class' => "form-control ",
                    'min' => 1,
                    'max' => 8,
                ]
            ])
            ->add('ram', IntegerType::class,[
                'attr' => [
                    'class' => "form-control ",
                    'min' => 1,
                    'max' => 16,
                ]
            ])
            ->add('disk_space', IntegerType::class,[
                'label' => 'Espace disque',
                'attr' => [
                    'class' => "form-control ",
                    'min' => 1,
                    'max' => 500,
                ]
            ])
            ->add('high_availability', ChoiceType::class,[
                'label' => 'Haute disponibilité',
                'required' => false,
                'attr' => [
                    'class' => "form-control browser-default custom-select",
                ],
                'choices' => [
                    'Protection par HA ' => 'Protection par HA',
                    'Replication du service' => 'Replication du service'
                ]
            ])
            ->add('IP', ChoiceType::class,[
                'required' => false,
                'attr' => [
                    'class' => "form-control browser-default custom-select",
                ],
                'choices' => [
                    'WAN' => 'WAN',
                    'LAN' => 'LAN'
                ]
            ])
            ->add('backup', IntegerType::class,[
                'label' => 'Rétention des données (en jours, par défaut 7 jours)',
                'required' => false,
                'attr' => [
                    'class' => 'js-datepicker'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Subscription::class,
        ]);
    }
}
