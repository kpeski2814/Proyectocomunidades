<?php 

require_once "../../../clases/Usuario.php";
$Usuario = new Usuario();

$nombre = $_POST['nombre'];
$password = $_POST['password'];

echo $Usuario->cambiarPassword($nombre, $password);

