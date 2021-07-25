<?php

require_once "../../../clases/Estudiantes.php";
$obj = new Estudiantes();


$id = $_POST['idArchivo'];
echo $idEstudiante = $obj->obtenerIdEstudiante($id);

if ($obj->eliminarArchivo($id)) {
  if ($obj->eliminarDatosArchivo($id)) {
    echo $idEstudiante;
  }
} else {
  echo 0;
}
?>