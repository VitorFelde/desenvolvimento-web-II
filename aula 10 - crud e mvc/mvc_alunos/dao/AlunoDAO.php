<?php

include_once(__DIR__ . "/../util/Connection.php");


    class AlunoDAO {

        public function listar(){

            $sql = "SELECT * FROM alunos"; //criando sql
            $conn = Connection::getConnection(); //pegando conexao do sql

            $stmt = $conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetchAll();

            return $result;
        }
}