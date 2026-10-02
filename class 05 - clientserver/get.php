<?php

$nome = $_GET["nome"];
$idade = $_GET["idade"]; 

//usando a superglobal get, o que colocarmos no link obedecendo as regras sera colocado na pagina

echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";




/*get.php?nome=Leandro&idade=19*/