<!-- 
Un cliente desea comprar un auto, las marcas disponibles son kia (nuevo a $ 10000), honda (nuevo a $ 35000), toyota (nuevo a $ 15000) y mazda (nuevo a $ 25000). Se puede decidir entre vehículos nuevos y de segunda. Un auto usado (de segunda) vale la mitad que uno nuevo. Crear una aplicación que permita seleccionar la marca de auto, 
seleccionar nuevo o de segunda, y calcular el precio del vehículo.
-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style>
		table{
			border: solid 1px;
		}
	</style>
</head>
<body>
	<center>
	<form method="post" action="calcular.php">
		<h2>Calcular el Precio de un Auto</h2>
		<table>
			<tr>
				<td><label>Marca de auto</label></td>
				<td>
					<select name="marca" required="">
						<option value="">Seleccione</option>
						<option value="kia">Kia</option>
						<option value="toyota">Toyota</option>
						<option value="mazda">Mazda</option>
						<option value="honda">Honda</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Condición</label></td>
				<td>
					<input type="radio" name="condicion" value="nuevo" checked> Nuevo
					<input type="radio" name="condicion" value="usado"> De segunda
				</td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Calcular Precio</button></td>
			</tr>
		</table>  	
  	</form>
	</center>
</body>
</html>