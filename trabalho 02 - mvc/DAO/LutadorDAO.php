<?php

include_once(__DIR__ . "/../util/Connection.php");

class LutadorDAO {
    //funcao para listar os alunos que serao inseridos 
    public function listar (){
        $sql = "SELECT nome, apelido, titulo from lutador";

        $conn = Connection::getConnection();

        $stmt = $conn->prepare($sql); //isso é usado para evitar que o programa recebe sql injection, entao usamos parametros para maior seguranca

        $stmt = execute();

        $saida = $stmt->fetchAll(); //isso é usado para pegar todas as informações encontradas pelas linhas acima e salvar em $saida

        $lutadores = $this->map($saida); //entao pegamos os dados do banco, que sao arrays, e atribuimos a variavel
        //lutadores, que sera usada mais tarde para pegar valor no listar e etc 
    }

    //funcao para buscar pelo id, que sera usada para editarmos baseado no id 
    public function buscarId (){

    }

    //funcao para inserir lutadores na lista
    public function inserir (){

    }

    //funcao para editar dados de um lutador na lista
    public function editar(){

    }

    //funcao para excluir um lutador da lista
    public function excluir (){

    }

    //funcao usada para pegar os dados do banco que vem em formato de array, e transformamos em valores do tipo categoria, genero e lutador
    public function map (){

    }

}