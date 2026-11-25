<?php

include_once(__DIR__ . "/../../model/Lutador.php");
include_once(__DIR__ . "/../../model/Categoria.php");
include_once(__DIR__ . "/../../model/Estilo.php");
include_once(__DIR__ . "/../../controller/LutadorController.php");

$erros = array();
$lutador = NULL;

if (isset($_POST["nome"])) {

    $nome = trim($_POST["nome"]) ? trim($_POST["nome"]) : NULL;
    $apelido = trim($_POST["apelido"]) ? trim($_POST["apelido"]) : NULL;
    $titulo = trim($_POST["titulo"]) ? trim($_POST["titulo"]) : NULL;

    $idCategoria = is_numeric($_POST["categoria"]) ? $_POST["categoria"] : NULL;
    $idEstilo = is_numeric($_POST["estilo"]) ? $_POST["estilo"] : NULL;

    $lutador = new Lutador();

    $lutador->setId(0);
    $lutador->setNome($nome);
    $lutador->setApelido($apelido);
    $lutador->setTitulo($titulo);

    $categoria = new Categoria();
    $categoria->setIdCategoria($idCategoria);
    $lutador->setCategoria($categoria);

    $estilo = new Estilo();
    $estilo->setIdEstilo($idEstilo);
    $lutador->setEstilo($estilo);

    $lutadorCont = new LutadorController();
    $erros = $lutadorCont->inserir($lutador);

    if (empty($erros)) {
        header("location: listar.php");
        exit;
    }
}

include_once(__DIR__ . "/form.php");

?>
