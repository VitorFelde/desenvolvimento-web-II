<?php

define("DIR_ARQUIVOS", "arquivos"); // define creates a constant, so we can't change it
// in this case, the constant is called DIR_ARQUIVOS and receives the folder "arquivos"

function salvarDados(array $dados, string $nomeArquivo){
    // json_encode transforms the array into JSON
    $json = json_encode($dados, JSON_PRETTY_PRINT); // JSON_PRETTY_PRINT formats the JSON to make it easier to read
    // take the dados, transform them into JSON, and put the result inside the variable $json

    file_put_contents( // put the content into the file
        DIR_ARQUIVOS . "/" . $nomeArquivo, // DIR_ARQUIVOS has the value "arquivos", which is our folder
        // $nomeArquivo has the value "livros.json", so together they create the path to the file
        $json // write the JSON content stored in $json into the file
    );
}

function buscarDados(string $nomeArquivo): array { // : array means the function returns an array, even though it receives a string

    $dados = array();

    if (file_exists(DIR_ARQUIVOS . "/" . $nomeArquivo)) { // checks if the file exists

        $json = file_get_contents(
            DIR_ARQUIVOS . "/" . $nomeArquivo
        );
        // reads the JSON file and gets its content so we can convert it back into a PHP array
        $dados = json_decode($json, true); // transforms the JSON content into a PHP associative array
    }

    return $dados; // returns the array to the PHP program
}
