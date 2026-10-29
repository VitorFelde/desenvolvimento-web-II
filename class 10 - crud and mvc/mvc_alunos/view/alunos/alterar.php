<?php

include_once(__DIR__ . "/../../model/Aluno.php");
include_once(__DIR__ . "/../../controller/AlunoController.php");

$msgErro = "";
$aluno = NULL;

if(isset($_POST['nome'])) {
    

} else {

    $id = 0;
    if(isset($_GET["id"]))
        $id = $_GET["id"];

    if(! $id) {
        echo "ID inválido!<br>";
        echo "<a href='listar.php'>Voltar</a>";
        exit;
    }

}

include_once(__DIR__ . "/form.php");