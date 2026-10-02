<?php

class Curso {
    private ?int $id; //o ponto de interrogacao permite atribuir nulo ou inteiro
    private ?string $nome;
    private ?string $turno;


   
    public function getId(): ?int
    {
        return $this->id;
    }

    
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    
    public function getNome(): ?string
    {
        return $this->nome;
    }

    
    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    
    public function getTurno(): ?string
    {
        return $this->turno;
    }

    
    public function setTurno(?string $turno): self
    {
        $this->turno = $turno;

        return $this;
    }
}