<?php

require_once "../../../clases/Investigador.php";
$obj = new Investigador();


$id = $_POST['id'];
$investigador = 1;
echo $obj->obtenerArchivoInvestigador($id,$investigador); //creo mi nueva instancia
  
 ?>