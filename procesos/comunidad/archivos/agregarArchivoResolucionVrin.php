<?php

require_once "../../../clases/Comunidades.php";
$obj = new Comunidades();

$idComunidad = $_POST['idComunidad'];
$res_vrin    = 1;
$existe      = $obj->existeArchivoResolucionVrin($idComunidad, $res_vrin);
if ($existe == "existeA") {
  echo "E";
} else {
  $nombre             = $_FILES['res_vrin']['name'];
  $nombreOriginal     = $_FILES['res_vrin']['name'];
  $rutaAlmacenamiento = $_FILES['res_vrin']['tmp_name'];
  $carpeta            = '../../../archivos/comunidad/';
  $rutaFinal          = $carpeta . $nombre;
  if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
    $ext1        = explode(".", $_FILES['res_vrin']['name']);
    $extension   = end($ext1);
    $hora        = date('His');
    $fechaInsert = date("Y-m-d");
    rename($rutaFinal, $carpeta . $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension);
    $nombre    = $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension;
    $rutaFinal = $carpeta . $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension;
    $res_vrin  = 1;
    $datos     = array(
      'id_comunidad'    => $idComunidad,
      'nombre'          => $nombre,
      'ruta'            => $rutaFinal,
      'tipo'            => "archivo",
      'ext'             => $extension,
      'nombre_original' => $nombreOriginal,
      'res_vrin'        => $res_vrin,
    );
    $idComunidad = $obj->agregarDatosArchivosResolucionVrin($datos);
    if ($idComunidad > 0) {
      echo $idComunidad;
    } else {
      echo 0;
    }
  }
}