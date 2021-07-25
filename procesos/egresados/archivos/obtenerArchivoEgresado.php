<?php

require_once "../../../clases/Egresados.php";
$obj = new Egresados();


$id = $_POST['id'];
$egresado = 1;
echo $obj->obtenerArchivoEgresado($id,$egresado); //creo mi nueva instancia
  
 ?>