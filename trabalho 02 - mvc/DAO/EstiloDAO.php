<?php

include_once (__DIR__ . "/../util/Connection.php");
include_once (__DIR__ . "/../util/Estilo.php");

class EstiloDAO {
    public function listar (){
        $sql = "SELECT * from estilo";
        
        $conn = Connection::getConnection();
        
        $stmt = $conn->prepare($sql);
        
        $stmt = execute();
        
        $saida = $stmt->fetchAll();
    }

    
}