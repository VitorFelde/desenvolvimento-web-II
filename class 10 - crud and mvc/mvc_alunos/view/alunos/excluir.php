<?php 

//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once(__DIR__ . "/../../controller/AlunoController.php");

$id = 0;
if (isset($_GET["id"]))
    $id = $_GET["id"];

if (! $id) {
    echo "id inválido<br>";
    echo "<a href='listar.php'>Voltar</a>";
    exit();
}

$alunoCont = new AlunoController();
$alunoCont->excluir($id);

header("location: listar.php");