<?php
include_once "model/conexion.php";
$sentencia = $bd -> query("select * from alumno");
$alumno = $sentencia->fetchAll(PDO::FETCH_OBJ);

//print_r($alumno);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<table>
			<tr>
				<td>Código</td>
				<td>Nombre</td>
				<td>Apellido Paterno</td>
				<td>Apellido Materno</td>
				<td>Edad</td>
				<td>Foto</td>
			</tr>

			<?php 
				foreach ($alumno as $dato) {
					
			?>
			<tr>
				<td><?php echo $dato->codigo; ?></td>
				<td><?php echo $dato->nombre; ?></td>
				<td><?php echo $dato->ap_paterno; ?></td>
				<td><?php echo $dato->ap_materno; ?></td>
				<td><?php echo $dato->edad; ?></td>
				<td></td>
			</tr>
			<?php
			}
			?>

		</table>
		<hr>
		<a href="ingresar-alumno.php">Ingresar alumno</a>
	</center>

</body>
</html>