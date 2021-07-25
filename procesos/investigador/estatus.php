<?php

session_start();

require_once "../../clases/Investigador.php";
$Investigador = new Investigador();
echo $Investigador->estatus($_POST['idInvestigador'],$_POST['estatus']);
