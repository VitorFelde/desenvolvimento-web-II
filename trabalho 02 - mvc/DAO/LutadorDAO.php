<?php

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Lutador.php");
include_once(__DIR__ . "/../model/Categoria.php");
include_once(__DIR__ . "/../model/Estilo.php");

class LutadorDAO {
    //funcao para listar os alunos que serao inseridos 
    public function listar(){
    $sql = "SELECT
                lutador.id,
                lutador.nome,
                lutador.apelido,
                lutador.titulo,
                categoria.id AS id_categoria,
                categoria.cat AS categoria,
                estilo.id AS id_estilo,
                estilo.est AS estilo
            FROM lutador
            INNER JOIN categoria ON lutador.id_categoria = categoria.id 
            /*aqui entramos dentro da tabela categoria, atraves do id categoria que criamos relacionado na tabela lutador, e selecionamos pelo id*/
            INNER JOIN estilo ON lutador.id_estilo = estilo.id";
            /*mesma coisa aqui, mas estamos fazendo para o estilo*/

    $conn = Connection::getConnection();

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $saida = $stmt->fetchAll();

    return $this->map($saida);
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
    public function map ($saida){
        $lutadores = array();

        foreach($saida as $l){
            
            /*LUTADOR*/

            $lutador = new Lutador();

            $lutador->setId($l["id"]);
            $lutador->setNome($l["nome"]);
            $lutador->setApelido($l["apelido"]);
            $lutador->setTitulo($l["titulo"]);

            /*CATEGORIA*/

            $categoria = new Categoria();
            
            $categoria->setIdCategoria($l["id_categoria"]);
            $categoria->setCategoria($l["categoria"]);
            $lutador->setCategoria($categoria);

            /*ESTILO*/

            $estilo = new Estilo();

            $estilo->setIdEstilo($l["id_estilo"]);
            $estilo->setEstilo($l["estilo"]);
            $lutador->setEstilo($estilo);

            array_push($lutadores, $lutador);
        }

    return $lutadores; 
    }

}