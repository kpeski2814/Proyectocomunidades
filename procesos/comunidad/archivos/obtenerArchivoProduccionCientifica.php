<?php

require_once "../../../clases/Comunidades.php";
$obj = new Comunidades();


$id = $_POST['id'];
$prodCientifica = 1;
echo $obj->obtenerArchivoProduccionCientifica($id,$prodCientifica); //creo mi nueva instancia
  
 ?>