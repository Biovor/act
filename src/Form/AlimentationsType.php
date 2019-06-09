<?php

namespace App\Form;

use App\Entity\Alimentations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlimentationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marque')
            ->add('gamme')
            ->add('céréales')
            ->add('alimentType')
            ->add('animal')
            ->add('bio')
            ->add('glucides')
            ->add('protéines')
            ->add('lipides')
            ->add('fibres')
            ->add('cendres')
            ->add('humidité')
            ->add('calcium')
            ->add('phosphore')
            ->add('rapportPhosphocalcique')
            ->add('calories')
            ->add('ratioProtidoCalorique')
            ->add('omega6')
            ->add('omega3')
            ->add('ingrédients')
            ->add('lienSource')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Alimentations::class,
        ]);
    }
}
