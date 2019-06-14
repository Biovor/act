<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 13/06/18
 * Time: 10:05
 */

namespace App\Admin;


use App\Entity\AlimentationsType;
use App\Entity\Animal;
use App\Entity\Gammes;
use App\Entity\Marques;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


final class AlimentationsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Référence du produit', ['class' => 'col-md-9'])
                ->add('alimentType', ModelType::class, [
                    'class'=> AlimentationsType::class,
                    'property'=> 'nom',
                    'label' => "Type d'aliment",
                ])
                ->add('animal', ModelType::class, [
                    'class'=> Animal::class,
                    'property'=> 'nom',
                    'label' => "Pour",
                ])
                ->add('marque', ModelType::class, [
                    'class'=> Marques::class,
                    'property'=> 'nom',
                    'label' => "Marque",
                ])
                ->add('gamme', ModelType::class, [
                    'class'=> Gammes::class,
                    'property'=> 'nom',
                    'label' => "Gamme",
                ])
                ->add('reference', TextType::class, [
                    'label' => "Référence",
                ])
            ->end()
            ->with('Classe du produit', ['class' => 'col-md-3'])
                ->add('bio', ChoiceType::class, [
                    'choices' => [
                        'Non' => 0,
                        'Oui' => 1,
                        ],
                    'label' => "Bio",
                ])
                ->add('cereales', ChoiceType::class, [
                    'choices' => [
                        'Oui' => 1,
                        'Non' => 0,
                    ],
                    'label' => "Sans céréales",
                ])
                ->add('vegetarien', ChoiceType::class, [
                    'choices' => [
                        'Non' => 0,
                        'Oui' => 1,
                    ],
                    'label' => "Végétarienne",
                ])
            ->end()
            ->with('Composition analytique', ['class' => 'col-md-6'])
            ->add('proteines', NumberType::class, [
                'label' => "Protéines",
                'required' => false,
            ])
            ->add('lipides', NumberType::class, [
                'label' => "Graisses - Lipides",
                'required' => false,
            ])
            ->add('glucides', NumberType::class, [
                'label' => "Glucides",
                'required' => false,
            ])
            ->add('fibres', NumberType::class, [
                'label' => "Fibres",
                'required' => false,
            ])
            ->add('cendres', NumberType::class, [
                'label' => "Cendres",
                'required' => false,
            ])
            ->add('humidite', NumberType::class, [
                'label' => "Humidité",
                'required' => false,
            ])
            ->add('calcium', NumberType::class, [
                'label' => "Calcium",
                'required' => false,
            ])
            ->add('phosphore', NumberType::class, [
                'label' => "Phosphore",
                'required' => false,
            ])
            ->add('taurine', NumberType::class, [
                'label' => "Taurine",
                'required' => false,
            ])
            ->add('omega3', NumberType::class, [
                'label' => "Omega 3",
                'required' => false,
            ])
            ->add('omega6', NumberType::class, [
                'label' => "Omega 6",
                'required' => false,
            ])
            ->end()
            ->with('Ingrédients', ['class' => 'col-md-6'])
            ->add('ingredientsListe', TextareaType::class, [
                'label' => "Liste des ingrédients sous forme de liste",
                'required' => false,
            ])
            ->end();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('alimentType.nom', null, [
                'label' => "Type d'aliment",
                'show_filter' => true,
                ])
            ->add('animal.nom', null, [
                'label' => "Pour",
                'show_filter' => true,
                ])
            ->add('marque.nom', null, [
                'label' => "Marque",
                'show_filter' => true,
                ])
            ->add('gamme.nom', null, [
                'label' => "Gamme",
                'show_filter' => true,
                ])
            ->add('reference', null, [
                'label' => "Ref",
                'show_filter' => true,
                ]);
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('alimentType.nom', null, [
                'label' => "Type d'aliment"
                ])
            ->add('animal.nom', null, [
                'label' => "Pour"])
            ->add('marque.nom', null, [
                'label' => "Marque"])
            ->add('gamme.nom', null, [
                'label' => "Gamme"])
            ->add('reference', null, [
                'label' => "Ref"])
            ->add('_action', 'actions', [
                'actions' => [
                    'edit' => [],
                    'delete' => [],
                ]

            ]);
    }
}