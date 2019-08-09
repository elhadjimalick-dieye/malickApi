<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\EnvoiRepository")
 */
class Envoi
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
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomRecepteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PrenomRecepteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NumeroRecepteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroTransaction;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getNomRecepteur(): ?string
    {
        return $this->NomRecepteur;
    }

    public function setNomRecepteur(string $NomRecepteur): self
    {
        $this->NomRecepteur = $NomRecepteur;

        return $this;
    }

    public function getPrenomRecepteur(): ?string
    {
        return $this->PrenomRecepteur;
    }

    public function setPrenomRecepteur(string $PrenomRecepteur): self
    {
        $this->PrenomRecepteur = $PrenomRecepteur;

        return $this;
    }

    public function getNumeroRecepteur(): ?string
    {
        return $this->NumeroRecepteur;
    }

    public function setNumeroRecepteur(string $NumeroRecepteur): self
    {
        $this->NumeroRecepteur = $NumeroRecepteur;

        return $this;
    }

    public function getNumeroTransaction(): ?string
    {
        return $this->numeroTransaction;
    }

    public function setNumeroTransaction(string $numeroTransaction): self
    {
        $this->numeroTransaction = $numeroTransaction;

        return $this;
    }
}
