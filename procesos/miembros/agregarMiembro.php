<?php

session_start();

require_once "../../clases/Miembros.php";
$Miembro = new Miembros();

$datos = array(
	"idUsuario"          => $_POST['id_user'],
	"tipo_doc_identidad" => $_POST['tipo_doc_identidad'],
	"no_doc"             => $_POST['no_doc'],
	"nombre"             => $_POST['nombre'],
	"apellidos"          => $_POST['apellidos'],
	"telefono"           => $_POST['telefono'],
	"correo"             => $_POST['correo'],
	"afiliacion"         => $_POST['afiliacion'],
	"tipo_miembro"       => $_POST['tipo_miembro'],
	"facultad"           => $_POST['facultad'],
	"codigo_estudiante"  => $_POST['codigo_estudiante'],
	"condicion"          => $_POST['condicion'],
	"estatus"            => 1, // por default lleva 1
	"id_comunidad"       => $_POST['comunidad'],
);
//print_r($datos);
echo $Miembro->agregarMiembros($datos);
