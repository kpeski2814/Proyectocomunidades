<?php

session_start();

require_once "../../clases/Investigador.php";
$Investigador = new Investigador();
echo json_encode($Investigador->obtenerDatosInvestigador($_POST['idInvestigador']));
