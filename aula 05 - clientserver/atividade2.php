<?php

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];

$res = $n1 + $n2 + $n3;

$media = $res / 3;

echo $media;

/*-------------------------------*/

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

$res = $n1 + $n2 + $n3;

$media = $res / 3;

echo $media;