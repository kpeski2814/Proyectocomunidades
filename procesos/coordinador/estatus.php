<?php

session_start();

require_once "../../clases/Coordinador.php";
$Coordinador = new Coordinador();
echo $Coordinador->estatus($_POST['idCoordinador'],$_POST['estatus']);
