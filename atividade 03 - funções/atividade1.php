<?php

function fatorial(int $n1)
{

    $calculo = 1;

    for ($i = 1; $i <= $n1; $i++) {

        $calculo = $calculo * $i;

    }

    return $calculo;

}

for($i=5; $i<=12; $i++) {

echo fatorial ($i) . "<br>";

}



