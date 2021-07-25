<?php

session_start();

require_once "../../clases/Egresados.php";
$Egresado = new Egresados();
echo json_encode($Egresado->obtenerDatosEgresado($_POST['idEgresado']));
