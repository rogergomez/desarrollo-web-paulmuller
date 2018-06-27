<?php 
session_start();
$_SESSION["usuario"] = "Roger G";

echo "Se ha creado la sesion usuario: ".$_SESSION["usuario"];
?>