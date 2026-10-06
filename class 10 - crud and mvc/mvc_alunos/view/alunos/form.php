<?php 

include_once(__DIR__ . "/../../controller/CursoController.php");

$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
print_r($cursos);

include_once(__DIR__ . "/../include/header.php");

?>

<h3>Inserir aluno</h3>

<form action="" method ="POST">

    <div>
        <label for="name">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Informe o nome">
    </div>
    <div>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" placeholder="Informe a idade">
    </div>
    <div>
        <label for="estrang">Estrangeiro:</label>
        <select name="estrang" id="estrang">
            <option value="" name="">---Selecione---</option>
            <option value="S">Sim</option>
            <option value="N">Não</option>
        </select>
    </div>
    <div>
        <label for="curso">Curso:</label>
        <select name="curso" id="curso">

            <?php //foreach () ?>
            <option value="" name="">---Selecione---</option>
            
            <!--options will be generated in dinamic way-->

        </select>
    </div>


</form>

<?php 

include_once(__DIR__ . "/../include/footer.php");


?>