<?php
    include_once(__DIR__ . "/Categoria.php");
    include_once(__DIR__ . "/Estilo.php");

    class Lutador{
        private int $id;
        private string  $nome;
        private string $apelido;
        private string $titulo;
        private Categoria $categoria;
        private Estilo $estilo;

        public function getId(){
            return $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function getApelido(){
            return $this->apelido;
        }

        public function setApelido(string $apelido){
            $this->apelido = $apelido;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo(string $titulo){
            $this->titulo = $titulo;
        }   

        public function getCategoria(){
            return $this->categoria;
        }

        public function setCategoria(Categoria $categoria){
            $this->categoria = $categoria;
        }

        public function getEstilo(){
            return $this->estilo;
        }   

        public function setEstilo(Estilo $estilo){
            $this->estilo = $estilo;
        }
    }