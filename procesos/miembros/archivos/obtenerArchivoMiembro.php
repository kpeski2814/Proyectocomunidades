<?php

require_once "../../../clases/Miembros.php";
$obj = new Miembros();


$id = $_POST['id'];
$miembro = 1;
echo $obj->obtenerArchivoMiembro($id,$miembro); //creo mi nueva instancia
  
 ?>