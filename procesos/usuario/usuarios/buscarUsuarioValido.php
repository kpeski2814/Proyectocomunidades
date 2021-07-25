<?php 
    require_once "../../../clases/Usuario.php";
    $Usuario = new Usuario();
    $user = $_POST['usuario'];

    echo $Usuario->usuarioValido($user);


