<?php

$pessoa = array("nome" => "Vitor", "idade" => 18, "naturalidade" => "Foz do Iguaçu"); 

//dessa forma atribuimo os valores da posicao com os nomes que colocamos

echo "Idade: " .  $pessoa["idade"];

echo "<br><br>";

foreach ($pessoa as $i) {

echo $i . "<br>";

}

print_r ($pessoa); //imprime de um jeito top pra identificar os erros