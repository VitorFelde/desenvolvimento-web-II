<?php

include_once(__DIR__ . "/../controller/LutadorController.php");

$lutadorCont = new LutadorController();
$lutadores = $lutadorCont->listar();

include_once(__DIR__ . "/../include/header.php");

?>

<h3>Listagem de lutadores(as)</h3>

<a href="inserir.php">Inserir</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Apelido</th>
        <th>Categoria</th>
        <th>Estilo</th>
        <th>Título</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php foreach ($lutadores as $l): ?>
        <tr>
            <td><?= $l->getId() ?></td>
            <td><?= $l->getNome() ?></td>
            <td><?= $l->getApelido() ?></td>
            <td><?= $l->getCategoria()->getCategoria() ?></td>
            <td><?= $l->getEstilo()->getEstilo() ?></td>
            <td><?= $l->getTitulo() == "S" ? "Sim" : "Não" ?></td>
            <td><a href="alterar.php?id=<?= $l->getId() ?>">Editar</a></td>
            <td><a href="excluir.php?id=<?= $l->getId() ?>" onclick="return confirm('Confirmar exclusão?')">Excluir</a></td>
        </tr>
    <?php endforeach; ?>

</table>

<?php

include_once(__DIR__ . "/../include/footer.php");

?>
