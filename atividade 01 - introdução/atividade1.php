<?php


$n1 = 10;

$n2 = 0;

echo "<h1>While</h1>";

while ($n2 < $n1){

$n2++;

echo "<br>" . $n2;

}

echo "<h1>Do-While</h1>";

$n2 = 0;

do {

$n2++;

echo "<br>" . $n2;
    
}

while ($n2 < $n1);

$n2 = 1;

echo "<h1>For</h1>";

for (; $n2 <= $n1; $n2++) {

echo "<br>" . $n2;

}




?>
