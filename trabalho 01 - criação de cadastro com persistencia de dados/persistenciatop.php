<?php

define ("DIR_ARQUIVOS", "arquivos");

function salvarDados(array $dados, string $nomeArquivo){
    $json = json_encode ($dados, JSON_PRETTY_PRINT);

    file_put_contents (DIR_ARQUIVOS . "/" . $nomeArquivo,
                        $json);
}

/*function salvarDados(array $dados, string $nomeArquivo){
    $json = json_encode($dados, JSON_PRETTY_PRINT);
    
    // Tenta salvar e força o PHP a mostrar se der erro de permissão
    $resultado = file_put_contents(DIR_ARQUIVOS . "/" . $nomeArquivo, $json);
    
    if ($resultado === false) {
        echo "ERRO GRAVE: O PHP não conseguiu salvar o arquivo. Verifique as permissões da pasta 'arquivos'.";
        exit;
    }
}
    
tivemos que fazer isso pq nao estava sendo incluido na table, dai vimos que deu permission denied, e fizemos os comandos do slides no terminal, dai deu certo
*/
function buscaDados (string $nomeArquivo) : array  {
    $dados = array();

    
    if (file_exists(DIR_ARQUIVOS . "/" . $nomeArquivo)) {
        $json = file_get_contents(DIR_ARQUIVOS . "/" . $nomeArquivo);
        $dados = json_decode($json, true);
    
    }

    return $dados;

}
