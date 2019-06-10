<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GammesRepository")
 */
class Gammes
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
     * Many Gammes have one Marque.
     * @ORM\ManyToOne(targetEntity="Marques", inversedBy="gamme")
     * @ORM\JoinColumn(name="marques_id", referencedColumnName="id")
     */
    private $marques;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getMarques()
    {
        return $this->marques;
    }

    /**
     * @param mixed $marques
     * @return Gammes
     */
    public function setMarques($marques)
    {
        $this->marques = $marques;
        return $this;
    }


    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}
