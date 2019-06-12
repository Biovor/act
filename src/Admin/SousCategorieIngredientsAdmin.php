<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 09/06/19
 * Time: 17:21
 */

namespace App\Admin;

use App\Entity\CategorieIngredients;
use Sonata\AdminBundle\Admin\AbstractAdmin ;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper ;
use Sonata\AdminBundle\Form\FormMapper ;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class SousCategorieIngredientsAdmin extends AbstractAdmin
{
    protected function configureFormFields ( FormMapper $formMapper )
    {
        $formMapper
            ->add('nom', TextType::class)
            ->add('categorie', ModelType::class, [
                'class'=> CategorieIngredients::class,
                'property'=> 'nom',
            ]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('categorie.nom', null, [
                'label' => "Catégorie",
                'show_filter' => true,
                ])
            ->add('nom', null, [
                'label' => "Nom de la sous catégories",
                'show_filter' => true,
                ]);
    }

    protected function configureListFields ( ListMapper $listMapper )
    {
        $listMapper
            ->add('categorie.nom', null, [
                'label' => "Catégorie"])
            ->add('nom', null, [
                'label' => "Nom de la sous catégories"])
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ]
            ]);
    }
}