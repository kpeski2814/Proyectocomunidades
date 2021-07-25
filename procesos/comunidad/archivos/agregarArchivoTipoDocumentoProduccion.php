<?php

require_once "../../../clases/Comunidades.php";
$obj = new Comunidades();

$idComunidad       = $_POST['idComunidad'];
$tipo              = $_POST['tipo'];
$url               = $_POST['url'];
$tipo_archivo_prod = 1;

$nombre             = $_FILES['tipo_archivo_prod']['name'];
$nombreOriginal     = $_FILES['tipo_archivo_prod']['name'];
$rutaAlmacenamiento = $_FILES['tipo_archivo_prod']['tmp_name'];
$carpeta            = '../../../archivos/comunidad/';
$rutaFinal          = $carpeta . $nombre;
if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
  $ext1        = explode(".", $_FILES['tipo_archivo_prod']['name']);
  $extension   = end($ext1);
  $hora        = date('His');
  $fechaInsert = date("Y-m-d");
  rename($rutaFinal, $carpeta . $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension);
  $nombre            = $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension;
  $rutaFinal         = $carpeta . $fechaInsert . "-" . $hora . "-" . $idComunidad . "." . $extension;
  $tipo_archivo_prod = 1;
  $datos             = array(
    'id_comunidad'      => $idComunidad,
    'nombre'            => $nombre,
    'ruta'              => $rutaFinal,
    'tipo'              => $tipo,
    'ext'               => $extension,
    'nombre_original'   => $nombreOriginal,
    'tipo_archivo_prod' => $tipo_archivo_prod,
    'url'               => $url,
  );
  $idComunidad = $obj->agregarDatosArchivosTipoDocumentoProduccion($datos);
  if ($idComunidad > 0) {
    echo $idComunidad;
  } else {
    echo 0;
  }
}
