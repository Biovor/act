<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 09/06/19
 * Time: 03:08
 */

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin ;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper ;
use Sonata\AdminBundle\Form\FormMapper ;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class MarquesAdmin extends AbstractAdmin
{
    protected function configureFormFields ( FormMapper $formMapper )
    {
        $formMapper
            ->add('nom', TextType::class, [
                'label'=> "Nom de la marque"
            ]);

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom', null, [
                'label' => "Nom de la marque",
                'show_filter' => true,
            ]);
    }

    protected function configureListFields ( ListMapper $listMapper )
    {
        $listMapper
            ->add('nom', null, [
                'label' => "Nom de la marque"])
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ]
            ]);
    }
}