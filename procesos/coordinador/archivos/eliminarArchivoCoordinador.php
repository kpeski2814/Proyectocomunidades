<?php

require_once "../../../clases/Coordinador.php";
$obj = new Coordinador();


$id = $_POST['idArchivo'];
echo $idCoordinador = $obj->obtenerIdCoordinador($id);

if ($obj->eliminarArchivo($id)) {
  if ($obj->eliminarDatosArchivo($id)) {
    echo $idCoordinador;
  }
} else {
  echo 0;
}
?>