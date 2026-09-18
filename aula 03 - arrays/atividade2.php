<?php 

/*Faça um programa em PHP que organize os dados da tabela abaixo na forma de um array associativo.
Depois, percorra esse array e mostre seus dados em uma tabela utilizando PHP e HTML."*/

$vet1 = array("Nome" => "Manuel de Medeiros", "Endereço" => "Rua das acácias", "Cidade" => "Foz do Iguaçu", "UF" => "PR"); 

$vet2 = array("Nome" => "Juliana de Amaral", "Endereço" => "Rua dos pinheiros", "Cidade" => "Florianópolis", "UF" => "SC"); 

$vet3 = array("Nome" => "Rodrigo Baidek", "Endereço" => "Rua Dom Pedro I", "Cidade" => "Petrópolis", "UF" => "RJ"); 

$vet4 = array("Nome" => "Fabíola da Silva", "Endereço" => "Rua Chile", "Cidade" => "Guarulhos", "UF" => "SP"); 

$pessoas = array($vet1, $vet2, $vet3, $vet4);

echo "<table border = 1>";


echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Endereço</th>";
echo "<th>Cidade</th>";
echo "<th>UF</th>";
echo "<tr>";

foreach ($pessoas as $i) {  

echo "<tr>";
echo "<td>" . $i["Nome"] . "</td>";
echo "<td>" . $i["Endereço"] . "</td>";
echo "<td>" . $i["Cidade"] . "</td>";
echo "<td>" . $i["UF"] . "</td>";
echo "<tr>";

}

echo "</table>";











