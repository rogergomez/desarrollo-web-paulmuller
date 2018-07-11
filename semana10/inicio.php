<?php  
$alumno = array
  (
  array("A001",20,20502010),
  array("A002",15,40303013),
  array("A003",25,10293452),
  array("A004",21,34323415)
  );

//print_r($alumno);
  //echo $alumno[0][1];

  for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Alumno $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$alumno[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>