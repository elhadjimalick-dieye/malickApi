<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TarifRepository")
 */
class Tarif
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $BorneInferieur;

    /**
     * @ORM\Column(type="integer")
     */
    private $valeur;

    /**
     * @ORM\Column(type="integer")
     */
    private $BorneSuperieur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBorneInferieur(): ?int
    {
        return $this->BorneInferieur;
    }

    public function setBorneInferieur(int $BorneInferieur): self
    {
        $this->BorneInferieur = $BorneInferieur;

        return $this;
    }

    public function getValeur(): ?int
    {
        return $this->valeur;
    }

    public function setValeur(int $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getBorneSuperieur(): ?int
    {
        return $this->BorneSuperieur;
    }

    public function setBorneSuperieur(int $BorneSuperieur): self
    {
        $this->BorneSuperieur = $BorneSuperieur;

        return $this;
    }
}
