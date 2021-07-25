<?php

require_once "../../../clases/Investigador.php";
$obj = new Investigador();

$idInvestigador         = $_POST['idInvestigador'];
$cti_vitae_investigador = 1;
$existe                 = $obj->existeArchivoInvestigador($idInvestigador, $cti_vitae_investigador);
if ($existe == "existeA") {
  echo "E";
} else {
  $nombre             = $_FILES['cti_vitae_investigador']['name'];
  $nombreOriginal     = $_FILES['cti_vitae_investigador']['name'];
  $rutaAlmacenamiento = $_FILES['cti_vitae_investigador']['tmp_name'];
  $carpeta            = '../../../archivos/investigador/';
  $rutaFinal          = $carpeta . $nombre;
  if (move_uploaded_file($rutaAlmacenamiento, $rutaFinal)) {
    $ext1        = explode(".", $_FILES['cti_vitae_investigador']['name']);
    $extension   = end($ext1);
    $hora        = date('His');
    $fechaInsert = date("Y-m-d");
    rename($rutaFinal, $carpeta . $fechaInsert . "-" . $hora . "-" . $idInvestigador . "." . $extension);
    $nombre                 = $fechaInsert . "-" . $hora . "-" . $idInvestigador . "." . $extension;
    $rutaFinal              = $carpeta . $fechaInsert . "-" . $hora . "-" . $idInvestigador . "." . $extension;
    $cti_vitae_investigador = 1;
    $datos                  = array(
      'idInvestigador'         => $idInvestigador,
      'nombre'                 => $nombre,
      'ruta'                   => $rutaFinal,
      'tipo'                   => "archivo",
      'ext'                    => $extension,
      'nombre_original'        => $nombreOriginal,
      'cti_vitae_investigador' => $cti_vitae_investigador,
    );
    $idInvestigador = $obj->agregarDatosArchivosInvestigador($datos);
    if ($idInvestigador > 0) {
      echo $idInvestigador;
    } else {
      echo 0;
    }
  }
}