<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 09/06/19
 * Time: 17:21
 */

namespace App\Admin;

use App\Entity\Marques;
use Sonata\AdminBundle\Admin\AbstractAdmin ;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper ;
use Sonata\AdminBundle\Form\FormMapper ;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class GammesAdmin extends AbstractAdmin
{
    protected function configureFormFields ( FormMapper $formMapper )
    {
        $formMapper
            ->add('nom', TextType::class)
            ->add('marques', ModelType::class, [
                'class'=> Marques::class,
                'property'=> 'nom',
            ]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('marques.nom', null, [
                'label' => "Marque",
                'show_filter' => true,
                ])
            ->add('nom', null, [
                'label' => "Nom de la gamme",
                'show_filter' => true,
                ]);
    }

    protected function configureListFields ( ListMapper $listMapper )
    {
        $listMapper
            ->add('marques.nom', null, [
                'label' => "Marque"])
            ->add('nom', null, [
                'label' => "Nom de la gamme"])
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ]
            ]);
    }
}