<?php 
session_start();

if (isset($_POST["usu"])) {
	$usuario = $_POST["usu"];
} else {
	$usuario = "No ha enviado usuario";
}

if (isset($_POST["pass"])) {
	$password = $_POST["pass"];
} else {
	$password = "No ha enviado password";
}

if ($usuario == "roger" and $password == "gomez") {
	$_SESSION['login'] = true;
    $_SESSION['user'] = $usuario;
    echo "Datos correctos, bienvenido ".$_SESSION["user"]."<br>";
    echo "<a href='intranet.php'>IR A INTRANET</a>";
} else {
	echo "Datos incorrectos";
}

?>
