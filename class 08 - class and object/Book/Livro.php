<?php

class Livro {

    private string $titulo;
    private string $autor;
    private string $genero;
    private int $qtdPaginas;


    public function __construct($t, $a, $g, $qtdPag){//método construtor
        $this->titulo = $t;
        $this->autor = $a;
        $this->genero = $g;
        $this->qtdPaginas = $qtdPag;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }

   
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    
    public function getAutor()
    {
        return $this->autor;
    }

   
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

  
    public function getGenero()
    {
        return $this->genero;
    }

   
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

  
    public function getQtdPaginas()
    {
        return $this->qtdPaginas;
    }

    
    public function setQtdPaginas($qtdPaginas): self
    {
        $this->qtdPaginas = $qtdPaginas;

        return $this;
    }
}
