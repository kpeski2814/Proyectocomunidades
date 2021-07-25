<!DOCTYPE html>
<html>
<head>
	<title>Cambiar password</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="d-flex align-items-center">
	<div class="wrapper fadeInDown">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Cambiar mi contraseña.
                    </div>
                    <div class="card-body">
                    
                        <label for="nombreUsuario">Ingresa tu nombre de usuario</label>
                        <input type="text" id="nombreUsuario" name="nombreUsuario">
                        <section id="seccionNuevoPassword">
                        <label for="nuevoPassword">Escribe tu nuevo password</label>
                        <input type="text" id="nuevoPassword" name="nuevoPassword">
                        <br>
                        <span class="btn btn-danger" id="btnCambiarPassword">Cambiar password</span>
                        </section>
                        
                    
                    </div>

                    <div class="card-footer text-muted">
                        <a href="index.php">Login de usuario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>

  <script src="librerias/jquery-3.4.1.min.js"></script>
  <script src="librerias/sweetalert.min.js"></script>
  
  
  <script>
      $(document).ready(function(){

        $('#seccionNuevoPassword').hide();

        $('#nombreUsuario').change(function(){
            let nombreUsuario = $('#nombreUsuario').val();
            nombreUsuario = nombreUsuario.trim();
            $.ajax({
                type:"POST",
                data:"usuario=" + nombreUsuario,
                url:"procesos/usuario/usuarios/buscarUsuarioValido.php",
                success:function(respuesta) {
                    if (respuesta == 1) {
                        swal("Usuario encontrado con exito!");
                        $('#seccionNuevoPassword').show();
                    } else {
                        swal("Usuario invalido!");
                    }
                }
            });
        });

        $('#btnCambiarPassword').click(function(){

            let nombre = $('#nombreUsuario').val();
            let passwordNuevo = $('#nuevoPassword').val();

            if (nombre == "") {
                swal("Debes escribir el nombre de usuario!");
                return false;
            } else if (passwordNuevo == "") {
                swal("Debes escribir tu nueva contraseña!");
                return false;
            }

            $.ajax({
                type:"POST",
                data:"nombre=" + nombre + "&password=" + passwordNuevo,
                url:"procesos/usuario/usuarios/cambiarPassword.php",
                success:function(respuesta) {
                    if (respuesta == 1) {
                        swal("Password Cambiado con exito!");
                        $('#seccionNuevoPassword').hide();
                        $('#nombreUsuario').val("");
                        $('#nuevoPassword').val("");
                    } else {
                        swal("Error al cambiar, comunicate con el administrador!");
                    }
                }
            });
        });

      });
  </script>

</body>
</html>