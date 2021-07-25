<?php

session_start();

require_once "../../clases/Comunidades.php";
$Comunidades = new Comunidades();

echo $Comunidades->estatus($_POST['idComunidad'],$_POST['estatus']);
