<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AlimentationsRepository")
 */
class Alimentations
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
    private $marque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gamme;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $céréales;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $alimentType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $animal;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $bio;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $glucides;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $protéines;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lipides;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fibres;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cendres;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $humidité;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $calcium;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $phosphore;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rapportPhosphocalcique;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $calories;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ratioProtidoCalorique;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $omega6;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $omega3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ingrédients;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $lienSource;

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     * @return Alimentations
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGamme()
    {
        return $this->gamme;
    }

    /**
     * @param mixed $gamme
     * @return Alimentations
     */
    public function setGamme($gamme)
    {
        $this->gamme = $gamme;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCéréales()
    {
        return $this->céréales;
    }

    /**
     * @param mixed $céréales
     * @return Alimentations
     */
    public function setCéréales($céréales)
    {
        $this->céréales = $céréales;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlimentType()
    {
        return $this->alimentType;
    }

    /**
     * @param mixed $alimentType
     * @return Alimentations
     */
    public function setAlimentType($alimentType)
    {
        $this->alimentType = $alimentType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * @param mixed $animal
     * @return Alimentations
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     * @return Alimentations
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGlucides()
    {
        return $this->glucides;
    }

    /**
     * @param mixed $glucides
     * @return Alimentations
     */
    public function setGlucides($glucides)
    {
        $this->glucides = $glucides;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProtéines()
    {
        return $this->protéines;
    }

    /**
     * @param mixed $protéines
     * @return Alimentations
     */
    public function setProtéines($protéines)
    {
        $this->protéines = $protéines;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLipides()
    {
        return $this->lipides;
    }

    /**
     * @param mixed $lipides
     * @return Alimentations
     */
    public function setLipides($lipides)
    {
        $this->lipides = $lipides;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFibres()
    {
        return $this->fibres;
    }

    /**
     * @param mixed $fibres
     * @return Alimentations
     */
    public function setFibres($fibres)
    {
        $this->fibres = $fibres;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCendres()
    {
        return $this->cendres;
    }

    /**
     * @param mixed $cendres
     * @return Alimentations
     */
    public function setCendres($cendres)
    {
        $this->cendres = $cendres;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHumidité()
    {
        return $this->humidité;
    }

    /**
     * @param mixed $humidité
     * @return Alimentations
     */
    public function setHumidité($humidité)
    {
        $this->humidité = $humidité;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCalcium()
    {
        return $this->calcium;
    }

    /**
     * @param mixed $calcium
     * @return Alimentations
     */
    public function setCalcium($calcium)
    {
        $this->calcium = $calcium;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhosphore()
    {
        return $this->phosphore;
    }

    /**
     * @param mixed $phosphore
     * @return Alimentations
     */
    public function setPhosphore($phosphore)
    {
        $this->phosphore = $phosphore;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRapportPhosphocalcique()
    {
        return $this->rapportPhosphocalcique;
    }

    /**
     * @param mixed $rapportPhosphocalcique
     * @return Alimentations
     */
    public function setRapportPhosphocalcique($rapportPhosphocalcique)
    {
        $this->rapportPhosphocalcique = $rapportPhosphocalcique;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * @param mixed $calories
     * @return Alimentations
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRatioProtidoCalorique()
    {
        return $this->ratioProtidoCalorique;
    }

    /**
     * @param mixed $ratioProtidoCalorique
     * @return Alimentations
     */
    public function setRatioProtidoCalorique($ratioProtidoCalorique)
    {
        $this->ratioProtidoCalorique = $ratioProtidoCalorique;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOmega6()
    {
        return $this->omega6;
    }

    /**
     * @param mixed $omega6
     * @return Alimentations
     */
    public function setOmega6($omega6)
    {
        $this->omega6 = $omega6;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOmega3()
    {
        return $this->omega3;
    }

    /**
     * @param mixed $omega3
     * @return Alimentations
     */
    public function setOmega3($omega3)
    {
        $this->omega3 = $omega3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIngrédients()
    {
        return $this->ingrédients;
    }

    /**
     * @param mixed $ingrédients
     * @return Alimentations
     */
    public function setIngrédients($ingrédients)
    {
        $this->ingrédients = $ingrédients;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLienSource()
    {
        return $this->lienSource;
    }

    /**
     * @param mixed $lienSource
     * @return Alimentations
     */
    public function setLienSource($lienSource)
    {
        $this->lienSource = $lienSource;
        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }
}
