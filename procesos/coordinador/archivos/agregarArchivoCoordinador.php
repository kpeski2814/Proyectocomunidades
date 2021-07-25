<?php

require_once "../../../clases/Coordinador.php";
$obj = new Coordinador();

$idCoordinador         = $_POST['idCoordinador'];
$cti_vitae_coordinador = 1;
$existe                = $obj->existeArchivoCoordinador($idCoordinador, $cti_vitae_coordinador);
if ($existe == "existeA") {
  echo "E";
} else {
  $nombre             = $_FILES['cti_vitae_coordinador']['name'];
  $nombreOriginal     = $_FILES['cti_vitae_coordinador']['name'];
  $rutaAlmacenamiento = $_FILES['cti_vitae_coordinador']['tmp_name'];
  $carpeta            = '../../../archivos/coordinador/';
  $rutaFinal          = $carpeta . $nombre;
  if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
    $ext1        = explode(".", $_FILES['cti_vitae_coordinador']['name']);
    $extension   = end($ext1);
    $hora        = date('His');
    $fechaInsert = date("Y-m-d");
    rename($rutaFinal, $carpeta . $fechaInsert . "-" . $hora . "-" . $idCoordinador . "." . $extension);
    $nombre                = $fechaInsert . "-" . $hora . "-" . $idCoordinador . "." . $extension;
    $rutaFinal             = $carpeta . $fechaInsert . "-" . $hora . "-" . $idCoordinador . "." . $extension;
    $cti_vitae_coordinador = 1;
    $datos                 = array(
      'idCoordinador'         => $idCoordinador,
      'nombre'                => $nombre,
      'ruta'                  => $rutaFinal,
      'tipo'                  => "archivo",
      'ext'                   => $extension,
      'nombre_original'       => $nombreOriginal,
      'cti_vitae_coordinador' => $cti_vitae_coordinador,
    );
    $idCoordinador = $obj->agregarDatosArchivosCoordinador($datos);
    if ($idCoordinador > 0) {
      echo $idCoordinador;
    } else {
      echo 0;
    }
  }
}