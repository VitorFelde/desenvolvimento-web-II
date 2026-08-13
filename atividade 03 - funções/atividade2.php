<?php

function area(int $raio)
{

    $pi = 3.14;

    $calculo = $raio * $raio * $pi;

    return $calculo;
}

function circun(int $raio1)
{

    $pi = 3.14;

    $calculo1 = $raio1 * 2 * $pi;

    return $calculo1;
}

for ($i = 4; $i < 7; $i++) {

    echo "Área do circulo raio " . $i . " =" . area($i) . "<br>";
    echo "Circunferência do circulo raio " . $i . " =" . circun ($i) . "<br>" . "<br>";

}
