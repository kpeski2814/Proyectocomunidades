<?php

session_start();

require_once "../../clases/Coordinador.php";
$Coordinador = new Coordinador();
echo json_encode($Coordinador->obtenerDatosCoordinador($_POST['idCoordinador']));
