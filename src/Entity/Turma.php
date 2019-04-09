<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TurmaRepository")
 */
class Turma
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Catequista", inversedBy="turma")
     * @ORM\JoinColumn(nullable=false)
     */
    private $catequista;

    /**
     * @ORM\OneToMany(targetEntity="Catequizando", mappedBy="turma")
     */
    private $catequizandos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etapa;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroEtapa;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Escola", inversedBy="turmas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $escola;

    public function __construct()
    {
        $this->catequista = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return ArrayCollection|Catequista[]
     */
    public function getCatequista()
    {
        return $this->catequista;
    }

    public function setCategoryCollection(Catequista $catequista): Turma
    {
        if($this->catequista->contains($catequista)) {
            return $this;
        }
        $this->catequista[] = $catequista;
        return $this;
    }

    public function getCatequizandos(): ?string
    {
        return $this->catequizandos;
    }

    public function setCatequizandos(string $catequizandos): self
    {
        $this->catequizandos = $catequizandos;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEtapa(): ?string
    {
        return $this->etapa;
    }

    public function setEtapa(string $etapa): self
    {
        $this->etapa = $etapa;

        return $this;
    }

    public function getNumeroEtapa(): ?int
    {
        return $this->numeroEtapa;
    }

    public function setNumeroEtapa(int $numeroEtapa): self
    {
        $this->numeroEtapa = $numeroEtapa;

        return $this;
    }

    public function getEscola(): ?Escola
    {
        return $this->escola;
    }

    public function setEscola(?Escola $escola): self
    {
        $this->escola = $escola;

        return $this;
    }

    public function __toString()
    {
        return $this->etapa.' '.$this->numeroEtapa.' '.$this->escola;
    }

}
