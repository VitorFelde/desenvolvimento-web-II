<?php

$array1 = array ("Joao", "Maria", "Pedro", "Ana", "Claudio");
$array2 = array ();

foreach ($array1 as $i) {

    array_push($array2, $i);
}

foreach ($array2 as $a) {

    echo $a . ", ";

}

