<!DOCTYPE html>
<html lang="es">
<head>
	<title>Repaso de formularios</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Calcular el tipo de cambio de soles a Euros</h3>
		<form method="POST" action="resultado.php">
			<table>
				<tr>
					<td>Ingrese monto: </td>
					<td><input type="number" name="monto" placeholder="S/. " required autofocus></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="reset"></td>
					<td><input type="submit"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>