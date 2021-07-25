<?php

require_once "../../../clases/Coordinador.php";
$obj = new Coordinador();


$id = $_POST['id'];
$coordinador = 1;
echo $obj->obtenerArchivoCoordinador($id,$coordinador); //creo mi nueva instancia
  
 ?>