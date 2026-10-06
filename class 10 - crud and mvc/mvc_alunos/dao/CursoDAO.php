<?php

include_once(__DIR__ . "/../util/Connection.php");
include (__DIR__ . "/../model/Curso.php");


class CursoDAO {

    public function listar(){

        $sql = "SELECT * FROM cursos";
        $conn = Connection::getConnection();
        $stmt = $conn->prepare();
        $stmt = $conn->execute();
        $result = $stmt->fetchAll();
    
        $cursos = $this->map($result);
        return $cursos;    
    
    }

    private function map (array $dados): array {
        $cursos = array();

        foreach ($dados as $d) {
            $curso = newCurso();
            $curso->setId(["id"]); 
            $curso->setNome(["nome"]); 
            $curso->setTurno(["turno"]); 
            array_push($cursos, $curso);
        }

        return $cursos;
    }
}