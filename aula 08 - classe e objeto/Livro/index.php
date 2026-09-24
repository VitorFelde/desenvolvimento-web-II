<?php

include_once("Livro.php");

$livro1 = new Livro("Noites Brancas", "Dostoievski", "Romance", "110");
$livro2 = new Livro("Dom Casmurro", "Machado de Assis", "Ficção", "300");
$livro3 = new Livro("Pequeno Principe", "Saint-Exupéry", "Ficção", "100");

$grupo = array ($livro1, $livro2, $livro3);

//print_r ($grupo);

/*foreach ($grupo as $l) {
    echo "Titulo: " . $l->getTitulo() . "   Autor: " . $l->getAutor() . " Genero: " . $l->getGenero() . " Quantidade de paginas: " . $l->getQtdPaginas() . "<br>" . "<br>";
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de livros</title>
</head>
<body>

    <table border="1">
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Genero</th>
            <th>Páginas</th>
        </tr>


    <?php foreach ($grupo as $livros):?>
        <tr>
            <td><?= $livros->getTitulo()?></td>
            <td><?= $livros->getAutor()?></td>
            <td><?= $livros->getGenero()?></td>
            <td><?= $livros->getQtdPaginas()?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>
