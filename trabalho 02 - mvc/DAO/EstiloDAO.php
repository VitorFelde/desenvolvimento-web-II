<?php

include_once (__DIR__ . "/../util/Connection.php");
include_once (__DIR__ . "/../model/Estilo.php");

class EstiloDAO {
    public function listar (){
        $sql = "SELECT * from estilo";
        
        $conn = Connection::getConnection();
        
        $stmt = $conn->prepare($sql);
        
        $stmt->execute();
        
        $saida = $stmt->fetchAll();

        return $this->map($saida);
    }

    private function map($saida){
    $estilos = array();

    foreach($saida as $e){
        $estilo = new Estilo();

        $estilo->setIdEstilo($e["id"]);
        $estilo->setEstilo($e["est"]);

        array_push($estilos, $estilo);
    }

    return $estilos; 
    }
}

    