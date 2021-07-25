<?php

require_once "../../clases/PlanDeTrabajo.php";
$obj = new PlanDeTrabajo();

$idUser      = $_POST['id_user'];
$idComunidad = $_POST['comunidad'];
$fecha       = $_POST['fecha'];

$datos = array(
  'id_user'      => $idUser,
  'id_comunidad' => $idComunidad,
  'fecha'        => $fecha,
);

$lastID = $obj->agregarDatosPlanDeTrabajo($datos);

if ($lastID > 0) {
  $nombre             = $_FILES['plan_trabajo']['name'];
  $nombreOriginal     = $_FILES['plan_trabajo']['name'];
  $rutaAlmacenamiento = $_FILES['plan_trabajo']['tmp_name'];
  $carpeta            = '../../archivos/planDeTrabajo/';
  $rutaFinal          = $carpeta . $nombre;
  if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
    $ext1        = explode(".", $_FILES['plan_trabajo']['name']);
    $extension   = end($ext1);
    $hora        = date('His');
    $fechaInsert = date("Y-m-d");
    rename($rutaFinal, $carpeta . $fechaInsert . "-" . $hora . "-" . $idUser . "." . $extension);
    $nombre       = $fechaInsert . "-" . $hora . "-" . $idUser . "." . $extension;
    $rutaFinal    = $carpeta . $fechaInsert . "-" . $hora . "-" . $idUser . "." . $extension;
    $plan_trabajo = 1;
    $datos        = array(
      'id_plan_trabajo' => $lastID,
      'nombre'          => $nombre,
      'ruta'            => $rutaFinal,
      'tipo'            => "archivo",
      'ext'             => $extension,
      'nombre_original' => $nombreOriginal,
      'plan_trabajo'    => $plan_trabajo,
    );
    $respuesta = $obj->agregarDatosArchivosPlanDeTrabajo($datos);
    if ($respuesta > 0) {
      echo $respuesta;
    } else {
      echo 0;
    }
  } else {
    echo 0;
  }

}