<?php

session_start();

require_once "../../clases/Egresados.php";
$Egresados = new Egresados();
// falta verificar dni repetido
$datos = array(
	"idUsuario" => $_POST['id_user'],
	"dni"       => $_POST['dni'],
	"nombre"    => $_POST['nombre'],
	"apellidos" => $_POST['apellidos'],
	"telefono"  => $_POST['telefono'],
	"correo"    => $_POST['correo'],
	"facultad"  => $_POST['facultad'],
);
//print_r($datos);
echo $Egresados->agregarEgresados($datos);
