<?php 
/* FUNCIONES MATEMÁTICAS 
   max(): retorna el valor más alto
   min(): retorna el valor más bajo
   rand(): devuelve un número entero aleatorio
   sqrt(): devuelve la raíz cuadrada
   pow(): devuelve el valor de número elevado a un determinado expontente
   count(): cuenta los elementos
   round(): Redondea un float
   floor(): Redondear fracciones hacia abajo
   ceil(): Redondear fracciones hacia arriba
   
   EXISTEN MÁS FUNCIONES, SE RECOMIENDA REVISAR LA DOCUMENTACIÓN OFICIAL
*/

$mi_array = array(21,12,14,5,-4,50/2); // Arreglo de números
echo max($mi_array); //imprime 25 que es la division de 50/2

echo "<br>";

echo min($mi_array); // imprime -4

echo "<br>";

echo "El arreglo tiene ".count($mi_array)." valores guardados";

echo "<br>";

echo pow(2, 5); // imprime 32 porque 2 a la 5 es 32

echo "<br>";

echo sqrt(81); // imprime la raiz cuadrada de 81 que es 9

echo "<br>";

echo "Un numero aleatorio: ".rand();
echo "<br>Un numero aleatorio entre 2 y 10 es ".rand(2,10);

echo "<br><br>";

echo "El valor de 12.4 redondeado es ".round(12.4);
echo "<br>El valor de 12.5 redondeado es ".round(12.5);

echo "<br><br>";

echo "El valor de 12.4 redondeado con floor es ".floor(12.4);
echo "<br>El valor de 12.5 redondeado con floor es ".floor(12.5);
echo "<br>El valor de 12.9 redondeado con floor es ".floor(12.9);

echo "<br><br>";

echo "El valor de 12.4 redondeado con ceil es ".ceil(12.4);
echo "<br>El valor de 12.5 redondeado con ceil es ".ceil(12.5);
echo "<br>El valor de 12.9 redondeado con ceil es ".ceil(12.9);
?>