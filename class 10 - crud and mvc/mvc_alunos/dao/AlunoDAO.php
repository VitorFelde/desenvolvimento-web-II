<?php

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Aluno.php");

    class AlunoDAO {

        public function listar(){

            $sql = "SELECT a.*, c.nome nome_curso, c.turno turno_curso
            FROM alunos a
            JOIN cursos c ON (c.id = a.id_curso)"; //criando sql
            //we used a stragegy to give a nickname to our variables to write less
            $conn = Connection::getConnection(); //pegando conexao do sql

            $stmt = $conn->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetchAll();

            $alunos = $this->map($result);

            return $alunos;
        }

        public function buscarPorId(int $id) {
        
        $sql = "SELECT a.*, 
                    c.nome nome_curso, c.turno turno_curso  
                FROM alunos a
                JOIN cursos c ON (c.id = a.id_curso)
                WHERE a.id = ?";
        $conn = Connection::getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll();

        //Criar o objeto Aluno
        $alunos = $this->map($result);

        if(count($alunos) == 1)
            return $alunos[0]; //if we find the aluno in the id, we return the only value returned for us in the array
        elseif(count($alunos) == 0) //if its empty, returns null 
            return null;

        die("AlunoDAO.buscarPorId - Erro: mais de um aluno".
                " encontrado para o ID " . $id); //die finished the request, and show the error to the user
    }


        public function inserir (Aluno $aluno) {
            $sql = "INSERT INTO alunos (nome, idade, estrangeiro, id_curso) VALUES (?, ?, ?, ?)";
            
            try { //were using this to give a treatment if this function cant add the aluno on table
            $conn = Connection::getConnection(); 
            
            $stmt = $conn->prepare($sql);

            $stmt->execute(array($aluno->getNome(), $aluno->getIdade(), $aluno->getEstrangeiro(), $aluno->getCurso()->getId()));


            } catch (PDOException $e) {
                return "Erro ao inserir o aluno" . $e->getMessage();
            }
      
            return "";

            }

        
            public function excluir (int $id){
            $sql = "DELETE FROM alunos WHERE id = ?";
            
            try { 
            $conn = Connection::getConnection(); 
            
            $stmt = $conn->prepare($sql);

            $stmt->execute(array($id));

            } catch (PDOException $e) {
                return "Erro ao excluir o aluno" . $e->getMessage();
            }
        }

        public function map(array $dados){
            $alunos = array();

            foreach ($dados as $d) {
                $aluno = new Aluno(); //convertendo os dados de array associativo para tabela associativa
                $aluno->setId($d["id"]);
                $aluno->setNome($d["nome"]);
                $aluno->setEstrangeiro($d["estrangeiro"]);
                $aluno->setIdade($d["idade"]);

                $curso = new Curso();
                $curso->setId($d["id_curso"]);
                $curso->setNome($d["nome_curso"]);
                $curso->setTurno($d["turno_curso"]);
                $aluno->setCurso($curso);



                array_push($alunos, $aluno);
           }


            return $alunos;
        }
}