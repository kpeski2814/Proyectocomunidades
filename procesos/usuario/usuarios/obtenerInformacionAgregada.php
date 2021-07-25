<?php

    require_once "../../../clases/Usuario.php";

    $idUsuario = $_POST['idUsuario'];
    $Usuario = new Usuario();
    
    echo json_encode($Usuario->obtenerDatosAgregadosDeUsuario($idUsuario));
    
?>