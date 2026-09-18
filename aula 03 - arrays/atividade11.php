<?php

$media = array(1,2,3,4,5,6,7,8,9,10);

$soma = 0;

$res = 0;

for ($c = 0; $c <= count($media); $c++) {


$soma = $soma + $media[$c];


}

$res = $soma / count($media);

echo $res;