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

<a href="inserir.php" class="btn btn-primary">Inserir</a>
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
    

    <?php foreach ($alunos as $al): ?>
    <tr>
        <td style ="text-align: center"><?=$al->getId()?></td>
        <td style ="text-align: center"><?=$al->getNome()?></td>
        <td style ="text-align: center"><?=$al->getIdade()?></td>
        <td style ="text-align: center"><?=$al->getEstrangeiroDesc()?></td>
        <td style ="text-align: center"><?=$al->getCurso()?></td> <!--the getId is from type course, so we need to take the object-->
        <td><a href="alterar.php?id=<?= $al->getId()?>"><img src="../../img/btn_editar.png" alt=""></a></td>
        <td><a href="excluir.php?id=<?= $al->getId()?>"><img src="../../img/btn_excluir.png" alt="" onclick="return confirm('Confirmar exclusão?')"></a></td>
    </tr>
    <?php endforeach; ?>


</table>
<?php

include_once(__DIR__ . "/../include/footer.php");

?>
