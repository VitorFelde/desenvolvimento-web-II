<?php

class Livro {

    private $titulo;
    private $autor;
    private $genero;
    private $qtdPaginas;



    
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