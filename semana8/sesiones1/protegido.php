<?php 
session_start();

if (isset($_SESSION["usuario"])) {
	echo "Bienvenido ".$_SESSION["usuario"];
}else{
	//header("Location: inicio.php");
	echo "No hay sesiones";
}

?>
