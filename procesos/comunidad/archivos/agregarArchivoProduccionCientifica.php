<?php

require_once "../../../clases/Comunidades.php";
$obj = new Comunidades();

$idComunidad = $_POST['idComunidad'];
$prod_cientifica    = 1;
$existe      = $obj->existeArchivoProduccionCientifica($idComunidad, $prod_cientifica);
if ($existe == "existeA") {
  echo "E";
} else {
  $nombre             = $_FILES['prod_cientifica']['name'];
  $nombreOriginal     = $_FILES['prod_cientifica']['name'];
  $rutaAlmacenamiento = $_FILES['prod_cientifica']['tmp_name'];
  $carpeta            = '../../../archivos/comunidad/';
  $rutaFinal          = $carpeta . $nombre;
  if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
    $ext1        = explode(".", $_FILES['prod_cientifica']['name']);
    $extension   = end($ext1);
    $hora        = date('His');
    $fechaInsert = date("Y-m-d");
    rename($rutaFinal, $carpeta . $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension);
    $nombre    = $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension;
    $rutaFinal = $carpeta . $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension;
    $prod_cientifica  = 1;
    $datos     = array(
      'id_comunidad'    => $idComunidad,
      'nombre'          => $nombre,
      'ruta'            => $rutaFinal,
      'tipo'            => "archivo",
      'ext'             => $extension,
      'nombre_original' => $nombreOriginal,
      'prod_cientifica' => $prod_cientifica,
    );
    $idComunidad = $obj->agregarDatosArchivosProduccionCientifica($datos);
    if ($idComunidad > 0) {
      echo $idComunidad;
    } else {
      echo 0;
    }
  }
}