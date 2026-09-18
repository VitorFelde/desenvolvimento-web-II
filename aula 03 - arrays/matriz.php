<?php 

$pessoa1 = array("nome" => "Vitor", "idade" => 18, "naturalidade" => "Foz do Iguaçu");

$pessoa2 = array("nome" => "Amanda", "idade" => 19, "naturalidade" => "Guarapuava");

$matriz = array($pessoa1, $pessoa2); //matriz top

echo $matriz[0]["naturalidade"]; //matriz pega uma info de cada vetor que tem dentro