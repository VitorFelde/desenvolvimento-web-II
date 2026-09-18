<?php 

/*1- Crie 4 arrays indexados em PHP, cada um deles com 5 posições.
Após isso, faça um laço sobre cada um dos arrays mostrando 
seus valores em uma lista ordenada. Utilize PHP e HTML para desenhá-la."
*/

$vet1 = array(0,1,2,3,4);

$vet2 = array(5,6,7,8,9);

$vet3 = array(10,11,12,13,14);

$vet4 = array(15,16,17,18,19);

$contador = 0;

echo "<ol>"; //ol vai fora para nao repetir os numeros da lista orndenada
foreach ($vet1 as $o) {

   echo "<li>" . $o . "</li>"; //apenas esse vai dentro pra poder rodar pelos elementos legais
   
}
echo "</ol>";

/*-----------------*/

echo "<ol>";
foreach ($vet2 as $p) {

   echo "<li>" . $p . "</li>";
   
}
echo "</ol>";

/*-----------------*/

echo "<ol>";
foreach ($vet3 as $q) { //esses foreach sao top

   echo "<li>" . $q . "</li>";
   
}
echo "</ol>";

/*-----------------*/

echo "<ol>";
foreach ($vet4 as $r) {

   echo "<li>" . $r . "</li>";
   
}
echo "</ol>";

