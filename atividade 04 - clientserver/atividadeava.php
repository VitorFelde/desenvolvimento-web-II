<?php

/*1. Escreva um programa em PHP que exiba uma progressão aritmética. Ele deve receber pelo
método GET os seguintes parâmetros:
inicio = número do início da progressão aritmética
razao = razão da progressão aritmética
quantidade = quantidade de números (termos) da progressão aritmética.
Caso os 3 parâmetros tenham sido enviados, exiba a progressão aritmética requisitada. Caso
contrário, exiba um mensagem informando qual ou quais parâmetros não foram informados.
Dica: o próximo termo da progressão aritmética é calculado pela soma do termo anterior e da razão*/

$ini = $_GET["inicio"];
$raz = $_GET["razao"];
$qtd = $_GET["quantidade"];
$som = 0;

if (isset($_GET["inicio"]) && ($_GET["razao"]) && ($_GET["quantidade"])) {
	for ($i = 0; $i < $qtd; $i++) {
		$som = $ini + $som + $raz; 
	}
}

echo $som;
