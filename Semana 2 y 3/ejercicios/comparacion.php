<?php 

$num1 = 130;
$num2 = 27;

//igual: $num1 == $num2 
//idéntico: $num1 === $num2 
//diferente: $num1 != $num2 
//diferente: $num1 <> $num2 
//menor: $num1 < $num2 
//mayor: $num1 > $num2 
//menor o igual: $num1 <= $num2 

if ($num1 == $num2) {
	echo "Son iguales";
}

if ($num1 > $num2) {
	echo $num1." es mayor que ".$num2;
} 
else {
	echo $num1." es menor que ".$num2;
}

 ?>