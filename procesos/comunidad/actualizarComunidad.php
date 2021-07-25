<?php

session_start();

require_once "../../clases/Comunidades.php";
$Comunidades = new Comunidades();

$datos = array(
	"idComunidad"          => $_POST['idComunidad'],
	"id_facultad"		   => $_POST['id_facultadU'],
	"denominacion"         => $_POST['denominacionU'],
	"tipo_comunidad_id"    => $_POST['tipo_comunidad_idU'],
	"num_registro"         => $_POST['num_registroU'],
	"cod_reg"              => $_POST['cod_regU'],
	// "evaluacion_inicial"   => $_POST['evaluacion_inicialU'],
	// "nivel"                => $_POST['nivelU'],
	"linea_inv"            => $_POST['linea_invU'],
	"dani"                 => $_POST['daniU'],
	"fin_no_institucional" => $_POST['fin_no_institucionalU'],
	"facebook"             => $_POST['facebookU'],
	"pag_web"              => $_POST['pag_webU'],
	"date_created"         => $_POST['date_createdU'],
);
//print_r($datos);
echo $Comunidades->actualizarComunidad($datos);
