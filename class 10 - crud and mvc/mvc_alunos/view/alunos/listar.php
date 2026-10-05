<?php 
//testar se a conexao ta funcionando
include_once(__DIR__ . "/../../util/Connection.php"); //DIR caminho completo até chegar no diretório onde a pagina está aberta

$conn = Connection::getConnection();

include_once(__DIR__ . "/../../controller/AlunoController.php");

$alunoCont = new AlunoController();
$alunos = $alunoCont->listar();

//print_r($alunos);   

//print_r($conn);
include_once(__DIR__ . "/../include/header.php");

?>

<h3>Listagem de alunos </h3>


<table border="2">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Idade</td>
        <td>Estrangeiro</td>
        <td>Curso</td>
    </tr>
    

    <?php foreach ($alunos as $al): ?>
    <tr>
        <td style ="text-align: center"><?=$al->getId()?></td>
        <td style ="text-align: center"><?=$al->getNome()?></td>
        <td style ="text-align: center"><?=$al->getIdade()?></td>
        <td style ="text-align: center"><?=$al->getEstrangeiroDesc()?></td>
        <td style ="text-align: center"><?=$al->getCurso()->getId()?></td> <!--the getId is from type course, so we need to take the object-->
    </tr>
    <?php endforeach; ?>


</table>
<?php

include_once(__DIR__ . "/../include/footer.php");

?>
