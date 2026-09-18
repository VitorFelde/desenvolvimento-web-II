<?php

$vet = array(10, 20, 18, 5, 7, 67, 68);

array_push($vet, 69); //inclui mais uma posicao no vetor

for ($i = 0; $i < count($vet); $i++) { //count é usado para acessar a posição do vetor

echo $vet[$i] . "<br>";

}


foreach ($vet as $v) { //criando no foreach uma nova variavel, serve pra imprimir tbm

    echo $v . "<br>";

}
