<?php

session_start();

require_once "../../clases/Investigador.php";
$Investigador = new Investigador();
// falta verificar dni repetido
$datos = array(
	"idUsuario"           => $_POST['id_user'],
	"dni"                 => $_POST['dni'],
	"nombre"              => $_POST['nombre'],
	"apellidos"           => $_POST['apellidos'],
	"telefono"            => $_POST['telefono'],
	"cargo"               => $_POST['cargo'],
	"correo"              => $_POST['correo'],
	"enlace_cti_vitae"    => $_POST['enlace_cti_vitae'],
	"calif_renacyt"       => $_POST['calif_renacyt'],
	"grupo"               => $_POST['grupo'],
	"nivel"               => $_POST['nivel'],
	"codigo_orcid"        => $_POST['codigo_orcid'],
	"scopusId"            => $_POST['scopusId'],
	"clase"               => $_POST['clase'],
	"tipo_investigador"   => $_POST['tipo_investigador'],
	"titulo_especialidad" => $_POST['titulo_especialidad'],
	"grado_academico"     => $_POST['grado_academico'],
	"area"                => $_POST['area'],
	"notas"               => $_POST['notas'],
	"especificacion"      => $_POST['especificacion'],
	"estatus"             => 1, // por default lleva 1
	"id_comunidad"        => $_POST['comunidadIn'],
);
//print_r($datos);
echo $Investigador->agregarInvestigador($datos);
