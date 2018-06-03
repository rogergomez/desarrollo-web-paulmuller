<!DOCTYPE html>
<html lang="es">
<head>
	<title>Pizzería Paul</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h2>Pide tu Pizza y la LLevamos:</h2>
		<form method="post" action="costos.php">
			<table>
				<tr>
					<td>Mi nombre es: </td>
					<td><input type="text" name="nombre" placeholder="Roger Gómez" required></td>
				</tr>
				<tr>
					<td>Qué sabor te gustaría: </td>
					<td>
						<select name="sabor" required>
							<option value="">Seleccionar</option>
							<option value="Americana" selected>Americana</option>
							<option value="Mexicana">Mexicana</option>
							<option value="Vegetariana">Vegetariana</option>
							<option value="Continental">Continental</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Cantidad: </td>
					<td><input type="number" name="cantidad" placeholder="2" required></td>
				</tr>
				<tr>
					<td>Método de pago: </td>
					<td>
						<input type="checkbox" name="tarjeta"> Tarjeta
						<input type="checkbox" name="efectivo" checked> Efectivo
					</td>
				</tr>
				<tr>
					<td>Dirección: </td>
					<td><input type="text" name="direccion" placeholder="Av. Los Héroes 2039" required></td>
				</tr>
				<tr>
					<td>Distrito: </td>
					<td>
						<select name="distrito" required>
							<option value="">Seleccionar</option>
							<option value="San Miguel">San Miguel</option>
							<option value="Magdalena">Magdalena</option>
							<option value="Los olivos">Los olivos</option>
							<option value="Chorrillos">Chorrillos</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Referencia:</td>
					<td>
						<textarea name="referencia" placeholder="Cómo puedo llegar?"></textarea>
					</td>
				</tr>
				<input type="hidden" name="oculto" value="1">
			</table>	
			<input type="reset" name="">	
			<button>Hacer pedido</button>	
		</form>
	</center>
</body>
</html>