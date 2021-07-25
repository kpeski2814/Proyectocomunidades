<?php

session_start();

require_once "../../clases/Coordinador.php";
$Coordinador = new Coordinador();

$datos = array(
	"idCoordinador"    => $_POST['idCoordinador'],
	"dni"              => $_POST['dniU'],
	"nombre"           => $_POST['nombreU'],
	"apellidos"        => $_POST['apellidosU'],
	"telefono"         => $_POST['telefonoU'],
	"cargo"            => $_POST['cargoU'],
	"correo"           => $_POST['correoU'],
	"enlace_cti_vitae" => $_POST['enlace_cti_vitaeU'],
	"calif_renacyt"    => $_POST['calif_renacytU'],
	"grupo"            => $_POST['grupoU'],
	"nivel"            => $_POST['nivelU'],
	"codigo_orcid"     => $_POST['codigo_orcidU'],
	"scopusId"         => $_POST['scopusIdU'],
	"tematicas"        => $_POST['tematicasU'],
	"categoria"        => $_POST['categoriaU'],
	"dedicacion"       => $_POST['dedicacionU'],
	"id_comunidad"     => $_POST['comunidadU'],
);
//print_r($datos);
echo $Coordinador->actualizarCoordinador($datos);
