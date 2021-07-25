<?php

require_once "../../../clases/Miembros.php";
$obj = new Miembros();


$id = $_POST['idArchivo'];
echo $idMiembro = $obj->obtenerIdMiembro($id);

if ($obj->eliminarArchivo($id)) {
  if ($obj->eliminarDatosArchivo($id)) {
    echo $idMiembro;
  }
} else {
  echo 0;
}
?>