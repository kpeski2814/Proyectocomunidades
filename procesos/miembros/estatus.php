<?php

session_start();

require_once "../../clases/Miembros.php";
$Miembros = new Miembros();
echo $Miembros->estatus($_POST['idMiembro'],$_POST['estatus']);
