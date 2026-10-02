<?php 


//functions
function soma(int $n1, int $n2 = 10): int {  //saying that this function returns int { //defining a local value, it cant be attributed only to the first parameter
//it needs to be on the second, or on both
    $soma = $n1 + $n2;
    return $soma;

}

//main program
$s = soma(2, 3); //returning the function
echo "Soma = " . $s;

echo "<br>";

$s2 = soma(3);

echo "<br>";    

echo "Soma = " . $s2;