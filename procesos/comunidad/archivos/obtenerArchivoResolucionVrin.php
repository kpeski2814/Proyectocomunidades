<?php

require_once "../../../clases/Comunidades.php";
$obj = new Comunidades();


$id = $_POST['id'];
$ResolucionVrin = 1;
echo $obj->obtenerArchivoResolucionVrin($id,$ResolucionVrin); //creo mi nueva instancia
  
 ?>