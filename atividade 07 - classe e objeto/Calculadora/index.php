<?php

include_once("Calculadora.php");

$calculadora = new Calculadora(); //método construtor

$calculadora->setNum1(10);
$calculadora->setNum2(85);

echo $calculadora->getNum1() . " + " . $calculadora->getNum2() . " = " . $calculadora->somar();