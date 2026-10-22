<?php 

include_once(__DIR__ . "/../model/Aluno.php");

class AlunoService{

    public function validar(Aluno $aluno){
        $erros = array();

        if ($aluno->getNome() == NULL)
            array_push($erros, "Informe o nome!");

        if ($aluno->getIdade() == NULL)
            array_push($erros, "Informe a idade!");

        if ($aluno->getEstrangeiro() == NULL)
            array_push($erros, "Informe se é estrangeiro ou não!");

        if ($aluno->getCurso()->getId() == NULL)
            array_push($erros, "Informe o curso!");

        return $erros;
    }
}