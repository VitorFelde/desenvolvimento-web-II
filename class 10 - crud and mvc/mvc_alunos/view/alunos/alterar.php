<?php

include_once(__DIR__ . "/../../model/Aluno.php");
include_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = "";
$aluno = NULL;
$alunoCont = new AlunoController();


if(isset($_POST['nome'])) {
    $nome = trim ($_POST["nome"]) ? trim($_POST["nome"]) : NULL;
    $idade = is_numeric ($_POST["idade"]) ? ($_POST["idade"]) : NULL;
    $estrang = trim ($_POST["estrang"]) ? trim($_POST["estrang"]) : NULL;
    $idCurso = is_numeric ($_POST["curso"]) ? ($_POST["curso"]) : NULL;

    $aluno = new Aluno();
    //$aluno->setId($id);
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrang);
    
    $curso = new Curso();
    $curso->setId($idCurso);
    $aluno->setCurso($curso);

    $erros = $alunoCont->alterar($aluno);

    if (empty ($erros)) {
        header("location: listar.php");
        exit;
    }
    else {
        $msgErro = implode("<br>", $erros);
    }
} else {

    $id = 0;
    if(isset($_GET["id"]))
        $id = $_GET["id"];

    if(! $id) {
        echo "ID inválido!<br>";
        echo "<a href='listar.php'>Voltar</a>";
        exit;
    }

    $aluno = $alunoCont->buscarPorId($id);

    if (! $aluno) {
        echo "Nenhum aluno encontrado para o ID!<br>";
        echo "<a href='listar.php'>Voltar</a>";
        exit;
    }

}

include_once(__DIR__ . "/form.php");