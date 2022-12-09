<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $serie;

    /**
     * @ORM\Column(type="date")
     */
    private $date_mise_en_marche;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_jour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modele;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSerie(): ?string
    {
        return $this->serie;
    }

    public function setSerie(string $serie): self
    {
        $this->serie = $serie;

        return $this;
    }

    public function getDateMiseEnMarche(): ?\DateTimeInterface
    {
        return $this->date_mise_en_marche;
    }

    public function setDateMiseEnMarche(\DateTimeInterface $date_mise_en_marche): self
    {
        $this->date_mise_en_marche = $date_mise_en_marche;

        return $this;
    }

    public function getPrixJour(): ?int
    {
        return $this->prix_jour;
    }

    public function setPrixJour(int $prix_jour): self
    {
        $this->prix_jour = $prix_jour;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }
}
