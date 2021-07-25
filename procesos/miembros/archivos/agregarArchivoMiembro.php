<?php

require_once "../../../clases/Miembros.php";
$obj = new Miembros();

$idMiembro         = $_POST['idMiembro'];
$cti_vitae_miembro = 1;
$existe            = $obj->existeArchivoMiembro($idMiembro, $cti_vitae_miembro);
if ($existe == "existeA") {
  echo "E";
} else {
  $nombre             = $_FILES['cti_vitae_miembro']['name'];
  $nombreOriginal     = $_FILES['cti_vitae_miembro']['name'];
  $rutaAlmacenamiento = $_FILES['cti_vitae_miembro']['tmp_name'];
  $carpeta            = '../../../archivos/miembro/';
  $rutaFinal          = $carpeta . $nombre;
  if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
    $ext1        = explode(".", $_FILES['cti_vitae_miembro']['name']);
    $extension   = end($ext1);
    $hora        = date('His');
    $fechaInsert = date("Y-m-d");
    rename($rutaFinal, $carpeta . $fechaInsert . "-" . $hora . "-" . $idMiembro . "." . $extension);
    $nombre            = $fechaInsert . "-" . $hora . "-" . $idMiembro . "." . $extension;
    $rutaFinal         = $carpeta . $fechaInsert . "-" . $hora . "-" . $idMiembro . "." . $extension;
    $cti_vitae_miembro = 1;
    $datos             = array(
      'idMiembro'         => $idMiembro,
      'nombre'            => $nombre,
      'ruta'              => $rutaFinal,
      'tipo'              => "archivo",
      'ext'               => $extension,
      'nombre_original'   => $nombreOriginal,
      'cti_vitae_miembro' => $cti_vitae_miembro,
    );
    $idMiembro = $obj->agregarDatosArchivosMiembro($datos);
    if ($idMiembro > 0) {
      echo $idMiembro;
    } else {
      echo 0;
    }
  }
}