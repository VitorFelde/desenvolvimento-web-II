<?php

/*1. Escreva um programa em PHP que exiba uma progressão aritmética. Ele deve receber pelo
método GET os seguintes parâmetros:
inicio = número do início da progressão aritmética
razao = razão da progressão aritmética
quantidade = quantidade de números (termos) da progressão aritmética.
Caso os 3 parâmetros tenham sido enviados, exiba a progressão aritmética requisitada. Caso
contrário, exiba um mensagem informando qual ou quais parâmetros não foram informados.
Dica: o próximo termo da progressão aritmética é calculado pela soma do termo anterior e da razão*/

if (isset($_GET["inicio"]) && isset($_GET["razao"]) && isset($_GET["quantidade"])) {
	$ini = $_GET["inicio"];
	$raz = $_GET["razao"];
	$qtd = $_GET["quantidade"];
	for ($i = 0; $i < $qtd; $i++) {
		echo $ini . " ";
		$ini = $ini + $raz; 
	}
}

	if (!isset ($_GET["inicio"])) { //se for diferente do que o isset quer (receber algum valor), passara a mensagem mto top
	echo "Você esqueceu de passar o inicio" . "<br>";
}

	if (!isset ($_GET["razao"])) {
	echo "Você esqueceu de passar a razão" . "<br>";
}

	if (!isset ($_GET["quantidade"])) {
	echo "Você esqueceu de passar a quantidade" . "<br>";
}
