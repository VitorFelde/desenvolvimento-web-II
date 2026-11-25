<?php

include_once(__DIR__ . "/../controller/LutadorController.php");

$id = 0;
if (isset($_GET["id"]))
    $id = $_GET["id"];

if (!is_numeric($id) || $id <= 0) {
    echo "ID inválido!<br>";
    echo "<a href='listar.php'>Voltar</a>";
    exit;
}

$lutadorCont = new LutadorController();
$msgErro = $lutadorCont->excluir($id);

if ($msgErro) {
    echo $msgErro . "<br>";
    echo "<a href='listar.php'>Voltar</a>";
    exit;
}

header("location: listar.php");
exit;

?>
