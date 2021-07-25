<?php

require_once "../../../clases/Estudiantes.php";
$obj = new Estudiantes();


$id = $_POST['id'];
$estudiante = 1;
echo $obj->obtenerArchivoEstudiante($id,$estudiante); //creo mi nueva instancia
  
 ?>