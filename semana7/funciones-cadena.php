<?php 
//FUNCIÓN STR_REPLACE
echo $nombre = "Roger Angel Gomez";
echo "<br>";
echo str_replace ("e", "<b>E</b>", $nombre);
 ?>

 <hr>

 <?php 
//MAYÚSCULAS Y MINÚSCULAS
 $mensaje = "Este es un texto de mayusculas y MINUSCULAS";
 echo strtolower($mensaje);
 echo "<br>";
 echo strtoupper($mensaje);
  ?>

 <hr>

 <?php  
 //Logintud y eliminar espacios o caracteresa
 $texto = "Hola amigo.";
 echo strlen($texto);
 echo "<br>";
 echo trim($texto,".");
 ?>

 <hr>

 <?php 
 //Extracción específica
 echo substr("Hola mundo",1,4);
 echo "<br>";
 echo substr("Hola mundo",0,-2);
  ?>