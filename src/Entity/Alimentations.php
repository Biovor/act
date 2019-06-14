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
     * Many Alimentations have one Marques.
     * @ORM\ManyToOne(targetEntity="Marques", inversedBy="alimentations")
     * @ORM\JoinColumn(name="marque_id", referencedColumnName="id")
     */
    private $marque;

    /**
     * Many Alimentations have one Gammes.
     * @ORM\ManyToOne(targetEntity="Gammes", inversedBy="alimentations")
     * @ORM\JoinColumn(name="gamme_id", referencedColumnName="id")
     */
    private $gamme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cereales;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $vegetarien;


    /**
     * Many Alimentations have one AlimentationsType.
     * @ORM\ManyToOne(targetEntity="AlimentationsType", inversedBy="alimentations")
     * @ORM\JoinColumn(name="aliment_type_id", referencedColumnName="id")
     */
    private $alimentType;

    /**
     * Many Alimentations have one Animal.
     * @ORM\ManyToOne(targetEntity="Animal", inversedBy="alimentations")
     * @ORM\JoinColumn(name="animal_id", referencedColumnName="id")
     */
    private $animal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bio;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $glucides;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $proteines;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lipides;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $fibres;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cendres;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $humidite;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $calcium;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $phosphore;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $rapportPhosphocalcique;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $calories;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $ratioProtidoCalorique;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $taurine;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $omega6;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $omega3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ingredientsListe;

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
    public function getCereales()
    {
        return $this->cereales;
    }

    /**
     * @param mixed $cereales
     * @return Alimentations
     */
    public function setCereales($cereales)
    {
        $this->cereales = $cereales;
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
    public function getProteines()
    {
        return $this->proteines;
    }

    /**
     * @param mixed $proteines
     * @return Alimentations
     */
    public function setProteines($proteines)
    {
        $this->proteines = $proteines;
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
    public function getHumidite()
    {
        return $this->humidite;
    }

    /**
     * @param mixed $humidite
     * @return Alimentations
     */
    public function setHumidite($humidite)
    {
        $this->humidite = $humidite;
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
    public function getIngredientsListe()
    {
        return $this->ingredientsListe;
    }

    /**
     * @param mixed $ingredients
     * @return Alimentations
     */
    public function setIngredientsListe($ingredientsListe)
    {
        $this->ingredientsListe = $ingredientsListe;
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

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     * @return Alimentations
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getVegetarien()
    {
        return $this->vegetarien;
    }

    /**
     * @param mixed $vegetarien
     * @return Alimentations
     */
    public function setVegetarien($vegetarien)
    {
        $this->vegetarien = $vegetarien;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaurine()
    {
        return $this->taurine;
    }

    /**
     * @param mixed $taurine
     * @return Alimentations
     */
    public function setTaurine($taurine)
    {
        $this->taurine = $taurine;
        return $this;
    }

}
