<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DocumentRepository")
 */
class Document
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
    private $idHal;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $resume;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typedocument;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $doi;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orcid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdHal(): ?string
    {
        return $this->idHal;
    }

    public function setIdHal(string $idHal): self
    {
        $this->idHal = $idHal;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(?string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getTypedocument(): ?string
    {
        return $this->typedocument;
    }

    public function setTypedocument(string $typedocument): self
    {
        $this->typedocument = $typedocument;

        return $this;
    }

    public function getDoi(): ?string
    {
        return $this->doi;
    }

    public function setDoi(?string $doi): self
    {
        $this->doi = $doi;

        return $this;
    }

    public function getOrcid(): ?string
    {
        return $this->orcid;
    }

    public function setOrcid(string $orcid): self
    {
        $this->orcid = $orcid;

        return $this;
    }
}
