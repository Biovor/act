<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MarquesRepository")
 */
class Marques
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomDuGroupe;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dateCréation;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNomDuGroupe(): ?string
    {
        return $this->nomDuGroupe;
    }

    public function setNomDuGroupe(?string $nomDuGroupe): self
    {
        $this->nomDuGroupe = $nomDuGroupe;

        return $this;
    }

    public function getDateCréation(): ?int
    {
        return $this->dateCréation;
    }

    public function setDateCréation(?int $dateCréation): self
    {
        $this->dateCréation = $dateCréation;

        return $this;
    }
}
