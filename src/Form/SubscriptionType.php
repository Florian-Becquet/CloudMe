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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class SubscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('cpu', RangeType::class,[
            'attr' => [
                
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
                'value' => 50
            ]
        ])
        ->add('high_availability', ChoiceType::class, [
            'attr' => [
            ],
            'label_attr' => ['class' => 'checkbox-inline'],
            'choices'  => [
                'Protection par HA' => 'protectionHA',
                'Replication du service' => 'replicationServ',
                ],
            'expanded'  => true,
            'multiple'  => true,
        ])
        ->add('IP', CheckboxType::class,[
            'required' => false,
            'label_attr' => ['class' => 'checkbox-inline'],
            'label' => 'WAN',
            'value' => 'WAN',
            'attr' => ['title' => 'par défaut LAN']
        ])
        ->add('backup', IntegerType::class,[
            'label' => 'Rétention des données (en jours, par défaut 7 jours)',
            'required' => false,
            'attr' => [
                'class' => 'form-group ml-2',
                'min' => 7,
                'max' => 180,
                'value' => 7,
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
