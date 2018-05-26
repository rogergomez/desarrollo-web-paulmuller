<?php 
$marca = $_POST["marca"];
$condicion = $_POST["condicion"];

$precioAuto = 0;
switch ($marca) {
	case 'kia':
		$precioAuto = 10000;
		break;
	case 'toyota':
		$precioAuto = 15000;
		break;
	case 'mazda':
		$precioAuto = 25000;
		break;
	case 'honda':
		$precioAuto = 35000;
		break;
	default:
		$precioAuto = "No definido";
		break;
}

if ($condicion == "usado") {
	$precioAuto = $precioAuto/2;
}

?> 

<!-- Comentario: ahi termina el php e iniciamos con html -->

<!DOCTYPE html>
<html>
<head>
	<title>Precio del auto</title>
</head>
<body>
	<center>
		<h2>
			<?php 
				echo "Auto ".$marca." cuyo precio es $ ".$precioAuto. " porque es ".$condicion;
			?>
		</h2>
		<button onclick="window.history.back()">REGRESAR</button>
	</center>
</body>
</html>
