<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 13/06/18
 * Time: 10:05
 */

namespace App\Admin;


use App\Entity\AlimentationsType;
use App\Entity\Gammes;
use App\Entity\Marques;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


final class AlimentationsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('marque', ModelType::class, [
                'class'=> Marques::class,
                'property'=> 'nom',
            ])
            ->add('gamme', ModelType::class, [
                'class'=> Gammes::class,
                'property'=> 'nom',
            ])

            ->add('referance', TextType::class, [
            ])

            ->add('cereales', ChoiceType::class, [
                'choices' => [
                    'Oui' => 1,
                    'Non' => 0,
                ],
            ])

            ->add('alimentType', ModelType::class, [
                'class'=> AlimentationsType::class,
                'property'=> 'nom',
            ]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('marque');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('marque')
            ->add('cereales', 'choice',[


            ]);
    }
}