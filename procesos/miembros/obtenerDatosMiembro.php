<?php

session_start();

require_once "../../clases/Miembros.php";
$Miembro = new Miembros();
echo json_encode($Miembro->obtenerDatosMiembro($_POST['idMiembro']));
