<?php 
 function Saludar()
 {
 	$mensaje = "Buenas tardes, es Miércoles";
 	echo $mensaje;
 }

 function SaludarPersona($nombre)
 {
 	$mensaje = "Buenas tardes ".$nombre;
 	echo $mensaje;
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo con Funciones</title>
	<meta charset="utf-8">
</head>
<body>
	<h2><?php Saludar(); ?></h2>
	<h2><?php SaludarPersona('Roger Gómez'); ?></h2>
</body>
</html>