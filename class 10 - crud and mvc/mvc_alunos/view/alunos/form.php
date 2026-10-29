<?php 

include_once(__DIR__ . "/../../controller/CursoController.php");

$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
//print_r($cursos);

include_once(__DIR__ . "/../include/header.php");

?>

<h3><?= $aluno && $aluno->getId() > 0 ? "Alterar" : "Inserir"?></h3>

<form action="" method ="POST">

    <div>
        <label for="name">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Informe o nome" value="<?= $aluno ? $aluno->getNome() : ""?>">
    </div>
    <div>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" placeholder="Informe a idade" value="<?= $aluno ? $aluno->getIdade() : ""?>">
    </div>
    <div>
        <label for="estrang">Estrangeiro:</label>
        <select name="estrang" id="estrang">
            <option value="" name="">---Selecione---</option>
            <option value="S" <?= $aluno && $aluno->getEstrangeiro() == "S" ? "selected" : "" ?>>Sim</option>
            <option value="N" <?= $aluno && $aluno->getEstrangeiro() == "N" ? "selected" : "" ?>>Não</option>
        </select>
    </div>
    <div>
        <label for="curso">Curso:</label>
        <select name="curso" id="curso">

            <option value="" name="">---Selecione---</option>
            <?php foreach ($cursos as $c): ?>
            <option value="<?=$c->getId()?>" <?php if($aluno && $aluno->getCurso()->getId() == $c->getId()) echo "selected"; ?>><?= $c ?></option>
            <!--options will be generated in dinamic way-->
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <input type="hidden" name="id" value="<?= $aluno ? $aluno->getId() : 0 ?>">
    </div>

    <div>
        <button>Enviar</button>
    </div>
</form>

<div>
    <?= $msgErro ?>
</div>


<a href="listar.php">Voltar</a>

<?php 

include_once(__DIR__ . "/../include/footer.php");


?>