<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 13/06/18
 * Time: 10:05
 */

namespace App\Admin;


use App\Entity\CategorieIngredients;
use App\Entity\QualiteIngredients;
use App\Entity\SousCategorieIngredients;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


final class IngredientsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('categorie', ModelType::class, [
                'class'=> CategorieIngredients::class,
                'property'=> 'nom',
                'label' => "Catégorie",
            ])
            ->add('sousCategorie', ModelType::class, [
                'class'=> SousCategorieIngredients::class,
                'property'=> 'nom',
                'label' => "Sous catégorie",
            ])
            ->add('nom', TextType::class, [
                'label' => "Nom de l'ingrédient",
            ])
            ->add('qualite', ModelType::class, [
                'class'=> QualiteIngredients::class,
                'property'=> 'nom',
                'label' => "Label de qualité",
            ]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('categorie.nom', null, [
                'label' => "Catégorie",
                'show_filter' => true,
                ])
            ->add('sousCategorie.nom', null, [
                'label' => "Sous catégorie",
                'show_filter' => true,
                ])
            ->add('nom', null, [
                'label' => "Ingrédient",
                'show_filter' => true,
                ])
            ->add('qualite.nom', null, [
                'label' => "Label de qualité",
                'show_filter' => true,
                ]);
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('categorie.nom', null, [
                'label' => "Catégorie"
            ])
            ->add('sousCategorie.nom', null, [
                'label' => "Sous catégorie"])
            ->add('nom', null, [
                'label' => "Ingrédient"])
            ->add('qualite.nom', null, [
                'label' => "Label de qualité"])
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ]
            ]);
    }
}