<?php 
if(!isset($_POST["nom"]) || !isset($_POST["apPat"]) || !isset($_POST["apMat"]) || !isset($_POST["edad"])){
	exit();
}

//print_r($_POST);
//exit();

include_once "model/conexion.php";
$nombre = $_POST["nom"];
$apePaterno = $_POST["apPat"];
$apeMaterno = $_POST["apMat"];
$edad = $_POST["edad"];
$sentencia = $bd->prepare("INSERT INTO alumno(nombre, ap_paterno, ap_materno, edad) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $apePaterno, $apeMaterno, $edad]);

if($resultado === TRUE) echo "Insertado correctamente";
else echo "Algo salió mal. Por favor verifica que la tabla exista";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="listado.php">Ir a listado</a>
</body>
</html>