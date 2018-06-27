<?php  
session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
	echo "Bienvenido ".$_SESSION["user"];
	echo "<br>";
    echo "<a href='cerrar.php'>CERRAR SESION</a>";
} else {
   echo "Debes iniciar sesion.<br>";
   echo "<br><a href='inicio.php'>Ir a inicio</a>";
}
?>
