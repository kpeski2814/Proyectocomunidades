<?php

session_start();

require_once "../../clases/Estudiantes.php";
$Estudiante = new Estudiantes();

$datos = array(
	"idEstudiante" => $_POST['idEstudiante'],
	"dni"            => $_POST['dniU'],
	"nombre"         => $_POST['nombreU'],
	"apellidos"      => $_POST['apellidosU'],
	"telefono"       => $_POST['telefonoU'],
	"correo"         => $_POST['correoU'],
	"facultad"       => $_POST['facultadU'],
);
//print_r($datos);
echo $Estudiante->actualizarEstudiante($datos);
