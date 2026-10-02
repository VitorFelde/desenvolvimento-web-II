<?php

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Aluno.php");

    class AlunoDAO {

        public function listar(){

            $sql = "SELECT * FROM alunos"; //criando sql
            $conn = Connection::getConnection(); //pegando conexao do sql

            $stmt = $conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetchAll();

            

            return $result;
        }

        public function map(array $dados){
            $alunos = array();

            foreach ($dados as $d) {
                $aluno = new Aluno();
                $aluno->setId($d["id"]);
                $aluno->setNome($d["nome"]);
                $aluno->setEstrangeiro($d["estrangeiros"]);
                $aluno->setIdade($d["idade"]);

                $curso = new Curso();
                $curso->setId($d["id_curso"]);
                $curso->setCurso($curso);
           }


            return $alunos;
        }
}