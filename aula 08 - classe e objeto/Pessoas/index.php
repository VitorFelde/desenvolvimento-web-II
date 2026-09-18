<?php

include_once("Pessoas.php");

$nomeCompleto = new Pessoas();

$nomeCompleto->setNome("Vitor");
$nomeCompleto->setSobrenome("Felde");

echo $nomeCompleto->mostrarNome(); 