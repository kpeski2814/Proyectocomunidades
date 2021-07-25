<?php

require_once "../../../clases/Estudiantes.php";
$obj = new Estudiantes();

$idEstudiante         = $_POST['idEstudiante'];
$cti_vitae_estudiante = 1;
$existe               = $obj->existeArchivoEstudiante($idEstudiante, $cti_vitae_estudiante);
if ($existe == "existeA") {
  echo "E";
} else {
  $nombre             = $_FILES['cti_vitae_estudiante']['name'];
  $nombreOriginal     = $_FILES['cti_vitae_estudiante']['name'];
  $rutaAlmacenamiento = $_FILES['cti_vitae_estudiante']['tmp_name'];
  $carpeta            = '../../../archivos/estudiante/';
  $rutaFinal          = $carpeta . $nombre;
  if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
    $ext1        = explode(".", $_FILES['cti_vitae_estudiante']['name']);
    $extension   = end($ext1);
    $hora        = date('His');
    $fechaInsert = date("Y-m-d");
    rename($rutaFinal, $carpeta . $fechaInsert . "-" . $hora . "-" . $idEstudiante . "." . $extension);
    $nombre               = $fechaInsert . "-" . $hora . "-" . $idEstudiante . "." . $extension;
    $rutaFinal            = $carpeta . $fechaInsert . "-" . $hora . "-" . $idEstudiante . "." . $extension;
    $cti_vitae_estudiante = 1;
    $datos                = array(
      'idEstudiante'         => $idEstudiante,
      'nombre'               => $nombre,
      'ruta'                 => $rutaFinal,
      'tipo'                 => "archivo",
      'ext'                  => $extension,
      'nombre_original'      => $nombreOriginal,
      'cti_vitae_estudiante' => $cti_vitae_estudiante,
    );
    $idEstudiante = $obj->agregarDatosArchivosEstudiante($datos);
    if ($idEstudiante > 0) {
      echo $idEstudiante;
    } else {
      echo 0;
    }
  }
}