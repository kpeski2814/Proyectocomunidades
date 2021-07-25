<?php

require_once "../../../clases/Egresados.php";
$obj = new Egresados();


$id = $_POST['idArchivo'];
echo $idEgresado = $obj->obtenerIdEgresado($id);

if ($obj->eliminarArchivo($id)) {
  if ($obj->eliminarDatosArchivo($id)) {
    echo $idEgresado;
  }
} else {
  echo 0;
}
?>