<?php 

// Imprimir los números desde el 1 al 10
for ($i=1; $i <= 10; $i++) { 
	echo "Numero: ".$i."<br>";
}

echo "<hr>";

// Sumar los primeros 10 números positivos
$suma = 0;
for ($i=1; $i <= 10; $i++) { 
	$suma = $suma + $i;
	//echo $suma."<br>";
}
echo $suma;

echo "<hr>";

// Sumar los primeros 10 números positivos impares y pares
$sumaPares = 0;
$sumaImpares = 0;
for ($i=1; $i <= 10; $i++) { 
	if ($i % 2 == 0) {
		$sumaPares = $sumaPares + $i;
	} else{
		$sumaImpares = $sumaImpares + $i;
	}
}
echo "La suma de impares es: ".$sumaImpares." y la de pares es: ".$sumaPares;

echo "<hr>";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Aplicando For</title>
 </head>
 <body>
 	<h2>Utilizar for para mostrar un listado desordenado</h2>
 	
 	<ul>
	 	<?php 
	 		for ($i=0; $i < 10; $i++) { 
	 		# Fíjate como se cierran las llaves
	 	?>
	 		<li>Listado li</li>
	 	<?php 
	 		}
	 	?>
 	</ul>

 </body>
 </html>