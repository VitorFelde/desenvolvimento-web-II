<?php

include_once("persistencia.php");

// 1 - receive the book id

if (!isset($_GET["id"])) { // if the user tries to exclude an id that doesn't exist
    echo "Parametro ID nao informado";
    exit; // stop executing this script right here
}

$id = $_GET["id"];

// 2 - search for the existing books in the JSON file

$livros = buscarDados("livros.json"); // search all books to find the correct id

// 3 - find the index of the book in the array

$i = 0;
// we create i to have the position; foreach just goes through the array, but doesn't give the position
foreach ($livros as $s) {

    if ($s["id"] == $id) {
        break;
    }

    $i++;
}

// 4 - execute the delete function

array_splice($livros, $i, 1); // remove one element from livros, at position i

// 5 - save the data in the JSON file

salvarDados($livros, "livros.json"); // save the changes

// 6 - redirect to livros.php

header("location: livros.php");
