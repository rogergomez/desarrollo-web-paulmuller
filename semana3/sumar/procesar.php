<?php 
//Con isset se pregunta si existe numero1 y si viaja por POST:
if (isset($_POST["numero1"]) and is_numeric($_POST["numero1"])) {
	$num1 = $_POST["numero1"];
}else {
	//Location sirve para redireccionar, enviamos el valor de 0 dentro de mensaje:
	header('Location: index.php?mensaje=0'); 
}

if (isset($_POST["numero2"]) and is_numeric($_POST["numero2"])) {
	$num2 = $_POST["numero2"];
}else {
	header('Location: index.php?mensaje=0');
}

$suma = $num1 + $num2; 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Proceso</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Resultado: </h2>
	<p>La suma de <?php echo $num1; ?> y <?php echo $num2; ?> es <?php echo $suma; ?> </p>
	<hr>
	<a href="index.php">Regresar</a>
</body>
</html>
