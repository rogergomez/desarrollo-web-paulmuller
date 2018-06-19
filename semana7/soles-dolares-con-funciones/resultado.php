<?php 
include 'funciones/operaciones.php';
if (isset($_POST["oculto"]) and is_numeric($_POST["oculto"])) {
	$cantidad = $_POST["monto"];
} else {
	header("Location: repaso.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>
	<h3><?php echo $cantidad; ?> soles equivale a <?php echo calcularEuros($cantidad); ?> euros.</h3>
</body>
</html>