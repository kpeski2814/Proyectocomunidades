<?php

session_start();

require_once "../../clases/Comunidades.php";
$Comunidades = new Comunidades();

$datos = array(
	"idUsuario"            => $_POST['id_user'],
	"id_facultad"		   => $_POST['id_facultad'],
	"denominacion"         => $_POST['denominacion'],
	"tipo_comunidad_id"    => $_POST['tipo_comunidad_id'],
	"num_registro"         => $_POST['num_registro'],
	"cod_reg"              => $_POST['cod_reg'],
	// "evaluacion_inicial"   => $_POST['evaluacion_inicial'],
	// "nivel"                => $_POST['nivel'],
	"linea_inv"            => $_POST['linea_inv'],
	"dani"                 => $_POST['dani'],
	"fin_no_institucional" => $_POST['fin_no_institucional'],
	"facebook"             => $_POST['facebook'],
	"pag_web"              => $_POST['pag_web'],
	"date_created"         => $_POST['date_created'],
	"estatus"              => 1, // por default lleva 1
);

echo $Comunidades->agregarComunidad($datos);
