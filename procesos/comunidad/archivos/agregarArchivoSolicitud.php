<?php

require_once "../../../clases/Comunidades.php";
$obj = new Comunidades();


$idComunidad = $_POST['idComunidad'];
$solicitud           = 1;
$existe       = $obj->existeArchivoSolicitud($idComunidad, $solicitud);
if ($existe == "existeA") {
  echo "E";
} else {
  $nombre = $_FILES['solicitud']['name'];
  $nombreOriginal     = $_FILES['solicitud']['name'];
  $rutaAlmacenamiento = $_FILES['solicitud']['tmp_name'];
  $carpeta            = '../../../archivos/comunidad/';
  $rutaFinal          = $carpeta . $nombre;
  if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
    $ext1        = explode(".", $_FILES['solicitud']['name']);
    $extension   = end($ext1);
    $hora        = date('His');
    $fechaInsert = date("Y-m-d");
    rename($rutaFinal, $carpeta . $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension);
    $nombre    = $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension;
    $rutaFinal = $carpeta . $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension;
    $solicitud = 1;
    $datos     = array(
      'id_comunidad'      => $idComunidad,
      'nombre'            => $nombre,
      'ruta'              => $rutaFinal,
      'tipo'              => "archivo",
      'ext'               => $extension,
      'nombre_original'   => $nombreOriginal,
      'solicitud'         => $solicitud,
    );
    $idCom = $obj->agregarDatosArchivosSolicitud($datos);
    if ($idCom > 0) {
      echo $idCom;
    } else {
      echo 0;
    }
  }
}