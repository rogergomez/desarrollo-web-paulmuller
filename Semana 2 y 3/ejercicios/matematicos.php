<?php 

//operadores matemáticos con PHP

$numero1 = 29;
$numero2 = 4;

//suma
echo "La suma de ".$numero1." y ".$numero2." es: ".($suma = $numero1 + $numero2). "<br>";

//resta
$resta = $numero1 - $numero2;
echo "La resta de ".$numero1." y ".$numero2." es: ".$resta. "<br>";

//producto
$producto = $numero1 * $numero2;
echo "El producto de ".$numero1." y ".$numero2." es: ".$producto;
echo "<br>";

//division
$division = $numero1 / $numero2;
echo "La division de ".$numero1." y ".$numero2." es: ".$division;
echo "<br>";

//residuo
echo "El residuo de ".$numero1." y ".$numero2." es: ".($mod = $numero1 % $numero2). "<br>";
 ?>