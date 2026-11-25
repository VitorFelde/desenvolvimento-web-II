<?php

include_once(__DIR__ . "/../../model/Lutador.php");
include_once(__DIR__ . "/../../model/Categoria.php");
include_once(__DIR__ . "/../../model/Estilo.php");
include_once(__DIR__ . "/../../controller/LutadorController.php");

$erros = array();
$lutador = NULL;
$lutadorCont = new LutadorController();

if (isset($_POST["nome"])) {

    $id = is_numeric($_POST["id"]) ? $_POST["id"] : NULL;
    $nome = trim($_POST["nome"]) ? trim($_POST["nome"]) : NULL;
    $apelido = trim($_POST["apelido"]) ? trim($_POST["apelido"]) : NULL;
    $titulo = trim($_POST["titulo"]) ? trim($_POST["titulo"]) : NULL;

    $idCategoria = is_numeric($_POST["categoria"]) ? $_POST["categoria"] : NULL;
    $idEstilo = is_numeric($_POST["estilo"]) ? $_POST["estilo"] : NULL;

    $lutador = new Lutador();

    $lutador->setId($id);
    $lutador->setNome($nome);
    $lutador->setApelido($apelido);
    $lutador->setTitulo($titulo);

    $categoria = new Categoria();
    $categoria->setIdCategoria($idCategoria);
    $lutador->setCategoria($categoria);

    $estilo = new Estilo();
    $estilo->setIdEstilo($idEstilo);
    $lutador->setEstilo($estilo);

    $erros = $lutadorCont->editar($lutador);

    if (empty($erros)) {
        header("location: listar.php");
        exit;
    }

} else {

    $id = 0;
    if (isset($_GET["id"]))
        $id = $_GET["id"];

    if (!is_numeric($id) || $id <= 0) {
        echo "ID inválido!<br>";
        echo "<a href='listar.php'>Voltar</a>";
        exit;
    }

    $lutador = $lutadorCont->buscarId($id);

    if (!$lutador) {
        echo "Nenhum lutador encontrado para o ID!<br>";
        echo "<a href='listar.php'>Voltar</a>";
        exit;
    }
}

include_once(__DIR__ . "/form.php");

?>
