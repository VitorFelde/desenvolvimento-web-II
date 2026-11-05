<?php

class CategoriaDAO {
    public function listar (){
        $sql = "SELECT * from categoria";
        
        $conn = Connection::getConnection();
        
        $stmt = $conn->prepare($sql);
        
        $stmt = execute();
        
        $saida = $stmt->fetchAll();
    }
}