<?php

require_once "../../../clases/Comunidades.php";
$obj = new Comunidades();


$id = $_POST['idArchivo'];
$idComunidad = $obj->obtenerIdComunidad($id);

if ($obj->eliminarArchivo($id)) {
  if ($obj->eliminarDatosArchivo($id)) {
    echo $idComunidad;
  }
} else {
  echo 0;
}
?>