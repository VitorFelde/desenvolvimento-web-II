<?php 

include_once(__DIR__ . "/Curso.php");

    class Aluno {
    private ?int $id; //liberando valores nulos ou inteiros
    private ?string $nome;
    private ?int $idade;
    private ?string $estrangeiro;
    private ?Curso $idCurso;



    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade(): ?int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(?int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of estrangeiro
     */
    public function getEstrangeiro(): ?string
    {
        return $this->estrangeiro;
    }

    /**
     * Set the value of estrangeiro
     */
    public function setEstrangeiro(?string $estrangeiro): self
    {
        $this->estrangeiro = $estrangeiro;

        return $this;
    }

    /**
     * Get the value of idCurso
     */
    public function getIdCurso(): ?Curso
    {
        return $this->idCurso;
    }

    /**
     * Set the value of idCurso
     */
    public function setIdCurso(?Curso $idCurso): self
    {
        $this->idCurso = $idCurso;

        return $this;
    }
}