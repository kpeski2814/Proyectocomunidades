<?php

session_start();

require_once "../../clases/Miembros.php";
$Miembro = new Miembros();

$datos = array(
	"idMiembro"          => $_POST['idMiembro'],
	"tipo_doc_identidad" => $_POST['tipo_doc_identidadU'],
	"no_doc"             => $_POST['no_docU'],
	"nombre"             => $_POST['nombreU'],
	"apellidos"          => $_POST['apellidosU'],
	"telefono"           => $_POST['telefonoU'],
	"correo"             => $_POST['correoU'],
	"afiliacion"         => $_POST['afiliacionU'],
	"tipo_miembro"       => $_POST['tipo_miembroU'],
	"facultad"           => $_POST['facultadU'],
	"codigo_estudiante"  => $_POST['codigo_estudianteU'],
	"condicion"          => $_POST['condicionU'],
	"id_comunidad"       => $_POST['comunidadU'],
);
//print_r($datos);
echo $Miembro->actualizarMiembro($datos);
