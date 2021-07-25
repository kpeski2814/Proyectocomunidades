<?php

session_start();

require_once "../../clases/Estudiantes.php";
$Estudiante = new Estudiantes();
echo json_encode($Estudiante->obtenerDatosEstudiante($_POST['idEstudiante']));
