<?php 

include_once("Connection.php");
//include_once("excluir.php");

$conn = Connection::getConnection();
//teste da conexao com o banco feito no inicio fera demais
//print_r($conn);

$sql = "SELECT * FROM times";

$stmt = $conn->prepare($sql); //PREPARA A INSTRUÇÃO

$stmt->execute(); //EXECUTA A INSTRUÇÃO

$dados = $stmt->fetchAll();
//print_r($dados);        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times</title>
</head>
<body>
    <h1>Fera demais</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Excluir</th>
        </tr>

        <?php foreach ($dados as $time): ?>
        <tr>
            <td><?= $time["id"]?></td>
            <td><?= $time["nome"]?></td>
            <td><?= $time["cidade"]?></td>
            <td><a href="excluir.php?id=<?= $time["id"] ?>" onclick="return confirm('Confirma a exclusão?')">Excluir</a></td>   
        <?php endforeach; ?>
    </table>

    <a href="   ">Inserir novo time</a>
</body>
</html>