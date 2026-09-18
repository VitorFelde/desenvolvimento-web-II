<?php

include_once("Livro.php");

$livro1 = new Livro();
$livro2 = new Livro();
$livro3 = new Livro();

$livro1->setTitulo("Noites Brancas");
$livro1->setAutor("Dostoievski");
$livro1->setGenero("Romance");
$livro1->setQtdPaginas("110");

$livro2->setTitulo("Dom Casmurro");
$livro2->setAutor("Machado de Assis");
$livro2->setGenero("Ficção");
$livro2->setQtdPaginas("300");

$livro3->setTitulo("Pequeno Principe");
$livro3->setAutor("Saint-Exupéry");
$livro3->setGenero("Ficção");
$livro3->setQtdPaginas("100");

$grupo = array ($livro1, $livro2, $livro3);

foreach ($grupo as $l) {
    echo "Titulo: " . $l->getTitulo() . "   Autor: " . $l->getAutor() . " Genero: " . $l->getGenero() . " Quantidade de paginas: " . $l->getQtdPaginas() . "<br>" . "<br>";
}