<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CatequizandoRepository")
 */
class Catequizando
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
    private $nome;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $sexo;

    /**
     * @ORM\Column(type="date")
     */
    private $dataNascimento;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $naturalidade;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $endereco;

    /**
     * @ORM\Column(type="string")
     */
    private $telefone;

    /**
     * @ORM\Column(type="boolean")
     */
    private $batizado;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comprovanteBatizado;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomePai;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomeMae;

    /**
     * @ORM\Column(type="boolean")
     */
    private $casado;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comprovanteCasamento;

    /**
     * @ORM\Column(type="boolean")
     */
    private $eucaristia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $comprovanteEucaristia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $documento;

    /**
     * @ORM\Column(type="string")
     */
    private $telefonePai;

    /**
     * @ORM\Column(type="string")
     */
    private $telefoneMae;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomePadrinhoCrisma;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $telPadrinho;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $enderecoPadrinho;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cidadeCatequizando;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cidadePadrinho;

    /**
     * @ORM\ManyToOne(targetEntity="Turma", inversedBy="catequizandos")
     */
    private $turma;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $pendencias;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getDataNascimento(): ?\DateTimeInterface
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(\DateTimeInterface $dataNascimento): self
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    public function getNaturalidade(): ?string
    {
        return $this->naturalidade;
    }

    public function setNaturalidade(string $naturalidade): self
    {
        $this->naturalidade = $naturalidade;

        return $this;
    }

    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getBatizado(): ?bool
    {
        return $this->batizado;
    }

    public function setBatizado(bool $batizado): self
    {
        $this->batizado = $batizado;

        return $this;
    }

    public function getComprovanteBatizado()
    {
        return $this->comprovanteBatizado;
    }

    public function setComprovanteBatizado($comprovanteBatizado)
    {
        $this->comprovanteBatizado = $comprovanteBatizado;

        return $this;
    }

    public function getNomePai(): ?string
    {
        return $this->nomePai;
    }

    public function setNomePai(string $nomePai): self
    {
        $this->nomePai = $nomePai;

        return $this;
    }

    public function getNomeMae(): ?string
    {
        return $this->nomeMae;
    }

    public function setNomeMae(string $nomeMae): self
    {
        $this->nomeMae = $nomeMae;

        return $this;
    }

    public function getCasado(): ?bool
    {
        return $this->casado;
    }

    public function setCasado(bool $casado): self
    {
        $this->casado = $casado;

        return $this;
    }

    public function getComprovanteCasamento()
    {
        return $this->comprovanteCasamento;
    }

    public function setComprovanteCasamento($comprovanteCasamento)
    {
        $this->comprovanteCasamento = $comprovanteCasamento;

        return $this;
    }

    public function getTelefonePai()
    {
        return $this->telefonePai;
    }

    public function setTelefonePai($telefonePai)
    {
        $this->telefonePai = $telefonePai;

        return $this;
    }

    public function getTelefoneMae()
    {
        return $this->telefoneMae;
    }

    public function setTelefoneMae($telefoneMae)
    {
        $this->telefoneMae = $telefoneMae;

        return $this;
    }

    public function getNomePadrinhoCrisma(): ?string
    {
        return $this->nomePadrinhoCrisma;
    }

    public function setNomePadrinhoCrisma(?string $nomePadrinhoCrisma): self
    {
        $this->nomePadrinhoCrisma = $nomePadrinhoCrisma;

        return $this;
    }

    public function getTelPadrinho()
    {
        return $this->telPadrinho;
    }

    public function setTelPadrinho($telPadrinho)
    {
        $this->telPadrinho = $telPadrinho;

        return $this;
    }

    public function getEnderecoPadrinho(): ?string
    {
        return $this->enderecoPadrinho;
    }

    public function setEnderecoPadrinho(?string $enderecoPadrinho): self
    {
        $this->enderecoPadrinho = $enderecoPadrinho;

        return $this;
    }

    public function getCidadeCatequizando(): ?string
    {
        return $this->cidadeCatequizando;
    }

    public function setCidadeCatequizando(string $cidadeCatequizando): self
    {
        $this->cidadeCatequizando = $cidadeCatequizando;

        return $this;
    }

    public function getCidadePadrinho(): ?string
    {
        return $this->cidadePadrinho;
    }

    public function setCidadePadrinho(?string $cidadePadrinho): self
    {
        $this->cidadePadrinho = $cidadePadrinho;

        return $this;
    }

    public function getTurma(): ?Turma
    {
        return $this->turma;
    }

    public function setTurma(?Turma $turma): self
    {
        $this->turma = $turma;

        return $this;
    }

    public function getPendencias()
    {
        return !$this->pendencias ? [] : explode(',', $this->pendencias);
    }

    public function setPendencias($pendencias): self
    {
        $this->pendencias = implode(',' , $pendencias);

        return $this;
    }

    public function getEucaristia()
    {
        return $this->eucaristia;
    }

    public function setEucaristia($eucaristia): self
    {
        $this->eucaristia = $eucaristia;

        return $this;
    }

    public function getComprovanteEucaristia()
    {
        return $this->comprovanteEucaristia;
    }


    public function setComprovanteEucaristia($comprovanteEucaristia)
    {
        $this->comprovanteEucaristia = $comprovanteEucaristia;

        return $this;
    }

    public function getDocumento()
    {
        return $this->documento;
    }

    public function setDocumento($documento)
    {
        $this->documento = $documento;
        return $this;
    }


}
