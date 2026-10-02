<?php
include_once("persistencia.php");

//1 - receber o id do livro

if (!isset($_GET["id"])){
    echo "Parametro ID nao informado";
    exit; //serve para fechar a paradinha
}

$id = $_GET["id"];

//2 - buscar os livros existentes no arquivo JSON

$livros = buscarDados("livros.json");


//3 - encontrar o indice do livro no array 
$i = 0;
foreach ($livros as $s) {
    if ($s["id"] == $id) {
        break;
    }

    $i++;

}

//4 - executar a funcao excluir
//array_splice ( , )

array_splice ($livros, $i, 1);


//5 - salvar os dados no arquico JSON

salvarDados($livros, "livros.json");

//6 - redirecionar para os livros.php

header("location: livros.php");      
<?php

//1 - receber o id do livro

//2 - buscar os livros existentes no arquivo JSON

//3 - encontrar o indice do livro no array 

//4 - executar a funcao excluir

//array_splice ( , )

//5 - salvar os dados no arquico JSON

//6 - redirecionar para os livros.php
