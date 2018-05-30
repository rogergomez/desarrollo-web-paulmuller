<?php 
//Verificamos si existe mensaje y si viaja por GET:
if (isset($_GET["mensaje"])) {
	echo $alerta = "Debe ingresar solo números";
}
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Suma de números</title>
	<meta charset="utf-8">
</head>
<body>

	<h2>Suma de 2 números con PHP</h2>

	<form name="Calculadora" method="post" action="procesar.php">
		<label>Numero 1: </label>
		<input type="text" name="numero1" required>
		<br>
		<label>Numero 2: </label>
		<input type="number" name="numero2" required>
		<input type="submit" name="" value="Sumar">
	</form>

</body>
</html>