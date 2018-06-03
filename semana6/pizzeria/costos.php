<?php 
if (isset($_POST["oculto"]) and is_numeric($_POST["oculto"])) {
	$sabor = $_POST["sabor"];
	$cantidad = $_POST["cantidad"];
	$distrito = $_POST["distrito"];
	$direccion = $_POST["direccion"];
	$cliente = $_POST["nombre"];
	$referencia = $_POST["referencia"];
} else {
	header("Location: index.php");
}

$subtotal = 0;
$precioU = 0;

switch ($sabor) {
	case 'Americana':
		$precioU = 40;
		$subtotal = $precioU * $cantidad;
		break;
	case 'Mexicana':
		$precioU = 40;
		$subtotal = $precioU * $cantidad;
		break;
	case 'Vegetariana':
		$precioU = 40;
		$subtotal = $precioU * $cantidad;
		break;
	case 'Continental':
		$precioU = 60;
		$subtotal = $precioU * $cantidad;
		break;
}

// Método de pago:
if (isset($_POST["efectivo"]) and isset($_POST["tarjeta"])) {
	$mensaje = "Paga con tarjeta y efectivo";
} elseif (isset($_POST["efectivo"])) {
	$mensaje = "Paga con efectivo";
} elseif (isset($_POST["tarjeta"])) {
	$mensaje = "Paga con tarjeta";
} else{
	$mensaje = "No ha indicado forma de pago";
}

// Costo del delivery:
if ($distrito == "San Miguel" or $distrito == "Magdalena") {
	$delivery = 0;
}else{
	$delivery = 6;
}

// Impuesto IGV
$igv = $subtotal * 0.18;

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Reporte de pedido</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h2>Resultado de pedido:</h2>
		<table border=1>
			<tr>
				<td>Sabor: </td>
				<td> <?php echo $sabor; ?> (S/. <?php echo $precioU; ?> c/u) </td>
			</tr>
			<tr>
				<td>Cantidad: </td>
				<td> <?php echo $cantidad; ?> </td>
			</tr>
			<tr>
				<td>SubTotal:</td> 
				<td>S/. <?php echo $subtotal; ?> </td>
			</tr>
			<tr>
				<td>Impuesto IGV:</td> 
				<td>S/. <?php echo $igv; ?> </td>
			</tr>
			<tr>
				<td>Costo del delivery:</td> 
				<td>S/. <?php echo $delivery." - ".$distrito; ?> </td>
			</tr>
			<tr>
				<td>TOTAL A PAGAR:</td> 
				<td><b> S/. <?php echo $subtotal+$igv+$delivery; ?> </b></td>
			</tr>
		</table>
		<p> Cliente: <b><?php echo $cliente; ?></b> - <?php echo $mensaje; ?> </p>
		<p> Dirección exacta: <?php echo $direccion." - ".$referencia; ?> </p>
	</center>
</body>
</html>

