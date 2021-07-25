<?php

session_start();

require_once "../../clases/Comunidades.php";
$Comunidades = new Comunidades();
echo json_encode($Comunidades->obtenerDatosComunidad($_POST['idComunidad']));
