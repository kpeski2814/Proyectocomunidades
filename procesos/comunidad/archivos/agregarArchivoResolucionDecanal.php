<?php

require_once "../../../clases/Comunidades.php";
$obj = new Comunidades();

$idComunidad = $_POST['idComunidad'];
$res_decanal    = 1;
$existe      = $obj->existeArchivoResolucionDecanal($idComunidad, $res_decanal);
if ($existe == "existeA") {
  echo "E";
} else {
  $nombre             = $_FILES['res_decanal']['name'];
  $nombreOriginal     = $_FILES['res_decanal']['name'];
  $rutaAlmacenamiento = $_FILES['res_decanal']['tmp_name'];
  $carpeta            = '../../../archivos/comunidad/';
  $rutaFinal          = $carpeta . $nombre;
  if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
    $ext1        = explode(".", $_FILES['res_decanal']['name']);
    $extension   = end($ext1);
    $hora        = date('His');
    $fechaInsert = date("Y-m-d");
    rename($rutaFinal, $carpeta . $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension);
    $nombre    = $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension;
    $rutaFinal = $carpeta . $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension;
    $res_decanal  = 1;
    $datos     = array(
      'id_comunidad'    => $idComunidad,
      'nombre'          => $nombre,
      'ruta'            => $rutaFinal,
      'tipo'            => "archivo",
      'ext'             => $extension,
      'nombre_original' => $nombreOriginal,
      'res_decanal'        => $res_decanal,
    );
    $idComunidad = $obj->agregarDatosArchivosResolucionDecanal($datos);
    if ($idComunidad > 0) {
      echo $idComunidad;
    } else {
      echo 0;
    }
  }
}