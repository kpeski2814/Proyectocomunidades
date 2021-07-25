<?php 

    require_once "../../../clases/Usuario.php";

    $idUsuario = $_POST['idUsuario'];
    $Usuario = new Usuario();

    echo $Usuario->eliminarUsuario($idUsuario);
    