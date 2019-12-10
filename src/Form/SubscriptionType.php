<?php

namespace App\Form;

use App\Entity\Subscription;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SubscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('cpu', RangeType::class,[
            'attr' => [
                'class' => "custom-range",
                'min' => 1,
                'max' => 8,
                'data-target' => 'cpuVal',
                'value' => 1
            ]
        ])
        ->add('ram', RangeType::class,[
            'attr' => [
                'class' => "custom-range",
                'min' => 1,
                'max' => 16,
                'data-target' => 'ramVal',
                'value' => 1
            ]
        ])
        ->add('disk_space', RangeType::class,[
            'label' => 'Espace disque',
            'attr' => [
                'class' => "custom-range",
                'min' => 5,
                'max' => 500,
                'data-target' => 'diskVal',
                'step' => 5,
                'value' => 1
            ]
        ])
        ->add('high_availability', ChoiceType::class, [
            'label' => "Haute disponibilité",
            'attr' => [
                    'class' => "form-check",
                    
            ],
            'choices'  => [
                'Protection par HA' => 'protectionHA',
                'Replication du service' => 'replicationServ',
                
                ],
            'expanded'  => true,
            'multiple'  => true,
            
        ])
        ->add('IP', ChoiceType::class,[
            'required' => false,
            'attr' => [
                'class' => "form-group ml-2",
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
                'class' => 'form-group ml-2'
            ],
        ]);
    ;
        $builder->get('high_availability')
                ->addModelTransformer(new CallbackTransformer(
               
                function($tagAsString) {
                    return explode(',' , $tagAsString);
                },
                function($tagAsArray){
                    return implode(',',$tagAsArray);
                }
                ));

    }

    public function configureOptions(OptionsResolver $resolver)

    {
        $resolver->setDefaults([
            'data_class' => Subscription::class,
        ]);
    }
}
