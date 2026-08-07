<?php
//arrumar a ordem pra ficar top
$vet1 = array("Orquidea", "Margarida", "Petúnia");
$vet2 = array("Laranja", "Maçã", "Limão");
$vet3 = array("Foz do Iguaçu", "Cascavel", "Toledo");
$vet4 = array("Itaipu", "Cataratas", "Parque das aves");

$vetop = array ($vet1, $vet2, $vet3, $vet4);

$vet5 = array();

foreach ($vetop as $i) {

    array_push($vet5, $i);

}
echo "<table>";
echo "<tr>";
echo "<th>Planta</th>";
echo "<th>Fruta</th>";
echo "<th>Cidade</th>";
echo "<th>Ponto Turístico</th>";
echo "<tr>";

foreach ($vet5 as $c) {  

echo "<tr>";
echo "<td>" . $c[0] . "</td>";
echo "<td>" . $c[1] . "</td>";
echo "<td>" . $c[2] . "</td>";
echo "<tr>";

}

echo "</table>";