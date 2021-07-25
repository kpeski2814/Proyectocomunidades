<?php

session_start();

require_once "../../clases/Coordinador.php";
$Coordinador = new Coordinador();
// falta verificar dni repetido
$datos = array(
	"idUsuario"        => $_POST['id_user'],
	"dni"              => $_POST['dni'],
	"nombre"           => $_POST['nombre'],
	"apellidos"        => $_POST['apellidos'],
	"telefono"         => $_POST['telefono'],
	"cargo"            => $_POST['cargo'],
	"correo"           => $_POST['correo'],
	"enlace_cti_vitae" => $_POST['enlace_cti_vitae'],
	"calif_renacyt"    => $_POST['calif_renacyt'],
	"grupo"            => $_POST['grupo'],
	"nivel"            => $_POST['nivel'],
	"codigo_orcid"     => $_POST['codigo_orcid'],
	"scopusId"         => $_POST['scopusId'],
	"tematicas"        => $_POST['tematicas'],
	"categoria"        => $_POST['categoria'],
	"dedicacion"       => $_POST['dedicacion'],
	"estatus"          => 1, // por default lleva 1
	"id_comunidad"     => $_POST['comunidad'],
);
//print_r($datos);
echo $Coordinador->agregarCoordinador($datos);
