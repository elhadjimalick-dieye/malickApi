<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $frais;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroTransaction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commissionSysetme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commissionEtat;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commissionPartenaiexpediteur;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commissionPartenaireceveur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getFrais(): ?string
    {
        return $this->frais;
    }

    public function setFrais(string $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

 

   

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get the value of numeroTransaction
     */ 
    public function getNumeroTransaction()
    {
        return $this->numeroTransaction;
    }

    /**
     * Set the value of numeroTransaction
     *
     * @return  self
     */ 
    public function setNumeroTransaction($numeroTransaction)
    {
        $this->numeroTransaction = $numeroTransaction;

        return $this;
    }

    /**
     * Get the value of commissionSysetme
     */ 
    public function getCommissionSysetme()
    {
        return $this->commissionSysetme;
    }

    /**
     * Set the value of commissionSysetme
     *
     * @return  self
     */ 
    public function setCommissionSysetme($commissionSysetme)
    {
        $this->commissionSysetme = $commissionSysetme;

        return $this;
    }

    /**
     * Get the value of commissionEtat
     */ 
    public function getCommissionEtat()
    {
        return $this->commissionEtat;
    }

    /**
     * Set the value of commissionEtat
     *
     * @return  self
     */ 
    public function setCommissionEtat($commissionEtat)
    {
        $this->commissionEtat = $commissionEtat;

        return $this;
    }

    /**
     * Get the value of commissionPartenaiexpediteur
     */ 
    public function getCommissionPartenaiexpediteur()
    {
        return $this->commissionPartenaiexpediteur;
    }

    /**
     * Set the value of commissionPartenaiexpediteur
     *
     * @return  self
     */ 
    public function setCommissionPartenaiexpediteur($commissionPartenaiexpediteur)
    {
        $this->commissionPartenaiexpediteur = $commissionPartenaiexpediteur;

        return $this;
    }

    /**
     * Get the value of commissionPartenaireceveur
     */ 
    public function getCommissionPartenaireceveur()
    {
        return $this->commissionPartenaireceveur;
    }

    /**
     * Set the value of commissionPartenaireceveur
     *
     * @return  self
     */ 
    public function setCommissionPartenaireceveur($commissionPartenaireceveur)
    {
        $this->commissionPartenaireceveur = $commissionPartenaireceveur;

        return $this;
    }
}
