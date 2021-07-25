<?php

require_once "../../../clases/Egresados.php";
$obj = new Egresados();

$idEgresado         = $_POST['idEgresado'];
$cti_vitae_egresado = 1;
$existe             = $obj->existeArchivoEgresado($idEgresado, $cti_vitae_egresado);
if ($existe == "existeA") {
  echo "E";
} else {
  $nombre             = $_FILES['cti_vitae_egresado']['name'];
  $nombreOriginal     = $_FILES['cti_vitae_egresado']['name'];
  $rutaAlmacenamiento = $_FILES['cti_vitae_egresado']['tmp_name'];
  $carpeta            = '../../../archivos/egresado/';
  $rutaFinal          = $carpeta . $nombre;
  if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
    $ext1        = explode(".", $_FILES['cti_vitae_egresado']['name']);
    $extension   = end($ext1);
    $hora        = date('His');
    $fechaInsert = date("Y-m-d");
    rename($rutaFinal, $carpeta . $fechaInsert . "-" . $hora . "-" . $idEgresado . "." . $extension);
    $nombre             = $fechaInsert . "-" . $hora . "-" . $idEgresado . "." . $extension;
    $rutaFinal          = $carpeta . $fechaInsert . "-" . $hora . "-" . $idEgresado . "." . $extension;
    $cti_vitae_egresado = 1;
    $datos              = array(
      'idEgresado'         => $idEgresado,
      'nombre'             => $nombre,
      'ruta'               => $rutaFinal,
      'tipo'               => "archivo",
      'ext'                => $extension,
      'nombre_original'    => $nombreOriginal,
      'cti_vitae_egresado' => $cti_vitae_egresado,
    );
    $idEgresado = $obj->agregarDatosArchivosEgresado($datos);
    if ($idEgresado > 0) {
      echo $idEgresado;
    } else {
      echo 0;
    }
  }
}