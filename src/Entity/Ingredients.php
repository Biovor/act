<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IngredientsRepository")
 */
class Ingredients
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * Many Ingedients have one QualiteIngredients.
     * @ORM\ManyToOne(targetEntity="QualiteIngredients", inversedBy="ingedients")
     * @ORM\JoinColumn(name="qualite_ingredients_id", referencedColumnName="id")
     */
    private $qualite;

    /**
     * Many Ingedients have one CategorieIngredients.
     * @ORM\ManyToOne(targetEntity="CategorieIngredients", inversedBy="ingedients")
     * @ORM\JoinColumn(name="categorie_ingredients_id", referencedColumnName="id")
     */
    private $categorie;

    /**
     * Many Ingedients have one SousCategorieIngredients.
     * @ORM\ManyToOne(targetEntity="SousCategorieIngredients", inversedBy="ingedients")
     * @ORM\JoinColumn(name="sous_categorie_ingredients_id", referencedColumnName="id")
     */
    private $sousCategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     * @return Ingredients
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSousCategorie()
    {
        return $this->sousCategorie;
    }

    /**
     * @param mixed $sousCategorie
     * @return Ingredients
     */
    public function setSousCategorie($sousCategorie)
    {
        $this->sousCategorie = $sousCategorie;
        return $this;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQualite()
    {
        return $this->qualite;
    }

    /**
     * @param mixed $qualite
     * @return Ingredients
     */
    public function setQualite($qualite)
    {
        $this->qualite = $qualite;
        return $this;
    }

}
