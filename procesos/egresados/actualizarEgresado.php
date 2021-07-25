<?php

session_start();

require_once "../../clases/Egresados.php";
$Egresado = new Egresados();

$datos = array(
	"idEgresado" => $_POST['idEgresado'],
	"dni"            => $_POST['dniU'],
	"nombre"         => $_POST['nombreU'],
	"apellidos"      => $_POST['apellidosU'],
	"telefono"       => $_POST['telefonoU'],
	"correo"         => $_POST['correoU'],
	"facultad"       => $_POST['facultadU'],
);
//print_r($datos);
echo $Egresado->actualizarEgresados($datos);
