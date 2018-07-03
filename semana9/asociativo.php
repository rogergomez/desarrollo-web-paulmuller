<?php
$moneda = array('peru' => 'nuevo sol', 'eeuu' => 'dolar', 'italia' => 'euro');
//print_r($moneda);
//echo $moneda["eeuu"];
foreach ($moneda as $indicador => $valor) {
	echo "Indicador es ".$indicador." y su valor es ".$valor;
	echo "<br>";
}

echo "<hr>";
$intercambio = array_flip($moneda);
//print_r($intercambio);
//echo "<br>";
//print_r($moneda);
?>