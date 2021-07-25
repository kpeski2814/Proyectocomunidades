<?php

session_start();

require_once "../../clases/Investigador.php";
$Investigador = new Investigador();

$datos = array(
	"idInvestigador"      => $_POST['idInvestigador'],
	"dni"                 => $_POST['dniUIn'],
	"nombre"              => $_POST['nombreUIn'],
	"apellidos"           => $_POST['apellidosUIn'],
	"telefono"            => $_POST['telefonoUIn'],
	"cargo"               => $_POST['cargoUIn'],
	"correo"              => $_POST['correoUIn'],
	"enlace_cti_vitae"    => $_POST['enlace_cti_vitaeUIn'],
	"calif_renacyt"       => $_POST['calif_renacytUIn'],
	"grupo"               => $_POST['grupoUIn'],
	"nivel"               => $_POST['nivelUIn'],
	"codigo_orcid"        => $_POST['codigo_orcidUIn'],
	"scopusId"            => $_POST['scopusIdUIn'],
	"clase"               => $_POST['claseUIn'],
	"tipo_investigador"   => $_POST['tipo_investigadorUIn'],
	"titulo_especialidad" => $_POST['titulo_especialidadUIn'],
	"grado_academico"     => $_POST['grado_academicoUIn'],
	"area"                => $_POST['areaUIn'],
	"notas"               => $_POST['notasUIn'],
	"especificacion"      => $_POST['especificacionUIn'],
	"id_comunidad"    	  => $_POST['comunidadUIn'],
);
//print_r($datos);
echo $Investigador->actualizarInvestigador($datos);
