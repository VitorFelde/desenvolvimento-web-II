<?php

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Categoria.php");

class CategoriaDAO {
    public function listar (){
        $sql = "SELECT * from categoria";
        
        $conn = Connection::getConnection();
        
        $stmt = $conn->prepare($sql);
        
        $stmt->execute();
        
        $saida = $stmt->fetchAll();

        return $this->map($saida);
        }

    //map to transform the array format in table one
    private function map($saida){
    $categorias = array();

    foreach($saida as $d){
        $categoria = new Categoria();

        $categoria->setIdCategoria($d["id"]);
        $categoria->setCategoria($d["cat"]);

        array_push($categorias, $categoria); //putting in our array the elements we just got
    }

    return $categorias; //returning the categorias with the elements pushed
    }
}