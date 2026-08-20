<?php 

$ini = 1;
$fim = 100;

if (isset($_GET["numIni"])) {
$ini = $_GET["numIni"];
}

if(isset($_GET["numFim"])&& $_GET["numFim"] < 100) {
$fim = $_GET["numFim"];
}

for ($i = $ini; $i <= $fim; $i++) {

echo $i . "<br>";
}