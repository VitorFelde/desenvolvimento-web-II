<?php 

include_once("Connection.php");

//receber o nome e cidade por get
$nome = "";
if (isset ($_GET['nome']))
    $nome = $_GET['nome'];

$cidade = "";
if (isset ($_GET['cidade'])) {
    $cidade = $_GET['cidade'];
}



//validar os dados

if ($nome == ''  || $cidade == '' ){
    echo "Informe o nome e a cidade do time";
    echo "<a href='listar.php'>Voltar</a>";
    exit;

}

//inserir o time no banco de dados

$sql = "INSERT INTO times (nome, cidade) VALUES ('" . $nome . "', '" . $cidade . "')";

$conn = Connection::getConnection();

    $stmt = $conn->prepare($sql); 

    $stmt->execute();


//redirecionar para a listagem

header("location: listar.php");
