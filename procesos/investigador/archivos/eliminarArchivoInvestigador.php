<?php

require_once "../../../clases/Investigador.php";
$obj = new Investigador();


$id = $_POST['idArchivo'];
echo $idInvestigador = $obj->obtenerIdInvestigador($id);

if ($obj->eliminarArchivo($id)) {
  if ($obj->eliminarDatosArchivo($id)) {
    echo $idInvestigador;
  }
} else {
  echo 0;
}
?>