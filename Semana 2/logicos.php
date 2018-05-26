<?php 

$num1 = "";
$num2 = "";
$num3 = 34;

// y: $num1 and $num2
// o: $num1 or $num2 
// no: !$num1
// Investigar: $num1 || $num2  , $num1 && $num2

if (($num1<$num2) and is_numeric($num3)) {
	echo "Se cumple la condicion";
}else{
	echo "No se cumple";
}

echo "<hr>";

if (empty($num1) or empty($num2)) {
	echo "Variables sin contenido";
}else{
	echo "Variables con contenido";
}

echo "<br>";

if (!is_numeric($num1)) {
	echo $num1." No es un número";
}
 ?>