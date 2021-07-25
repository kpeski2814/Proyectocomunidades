<?php

require_once "../../../clases/Comunidades.php";
$obj = new Comunidades();


$id = $_POST['id'];
$res_decanal = 1;
echo $obj->obtenerArchivoResolucionDecanal($id,$res_decanal); //creo mi nueva instancia
  
 ?>