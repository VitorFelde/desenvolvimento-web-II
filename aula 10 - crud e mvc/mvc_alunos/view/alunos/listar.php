<?php 
//testar se a conexao ta funcionando
include_once(__DIR__ . "/../../util/Connection.php"); //DIR caminho completo até chegar no diretório onde a pagina está aberta

$conn = Connection::getConnection();

//print_r($conn);
include_once(__DIR__ . "/../include/header.php");

?>

<h3>Listagem de alunos </h3>


<table border="1">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Idade</td>
        <td>Estrangeiro</td>
        <td>Curso</td>
    </tr>



</table>
<?php

include_once(__DIR__ . "/../include/footer.php");

?>
