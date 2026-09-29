<?php 

include_once("persistenciatop.php");


if (!isset($_GET["id"])){
    echo "Parametro ID nao informado";
    exit; //serve para fechar a paradinha
}

$id = $_GET["id"];

$jogador = buscaDados("jogadores.json");

$i = 0;
foreach ($jogador as $s) {
    if ($s["id"] == $id) {
        break;
    }

    $i++;

}

array_splice ($jogador, $i, 1);

salvarDados($jogador, "jogadores.json");


header("location: jogador.php");
