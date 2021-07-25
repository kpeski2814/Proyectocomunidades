<?php 

    require_once "../../../clases/Usuario.php";

    $datos = array(
        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'usuario' => $_POST['usuario'],
        'password' => $_POST['password'],
        "rolUsuario" => $_POST['rolUsuario']
    );

    $Usuario = new Usuario();

    echo $Usuario->agregarNuevoUsuario($datos);
    