<?php

require_once "../../../clases/Comunidades.php";
$obj = new Comunidades();


$id = $_POST['id'];
$solicitud = 1;
echo $obj->obtenerArchivoSolicitud($id,$solicitud); //creo mi nueva instancia
  
 ?>