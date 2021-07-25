<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="d-flex align-items-center">
	<div class="wrapper fadeInDown">

    <div class="container login-wrap">
      <div class="row">
        <div class="col-md-6 login-info text-center d-flex flex-column align-items-center justify-content-center pt-3 pt-md-0">
          <div class="text-info">
          <h2><b>SISTEMA DE GESTIÓN DE COMUNIDADES</b></h2>
          <br>
          <p>Universidad Nacional</p>
          <p><b>Federico Villarreal</b></p>
          </div>
        </div>
        <div class="col-md-6 py-4">
          <div class="text-center">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
              <p></p>
              <img src="img/background1.jpg" class="img-thumbnail mt-2 mb-4" width="80px" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="post" id="frmLogin" onsubmit="return logear()">
              <input type="text" id="login" class="fadeIn second" name="login" placeholder="USUARIO" required="">
              <input type="password" id="password" class="fadeIn third" name="password" placeholder="CONTRASEÑA" required="">
              <input type="submit" class="fadeIn fourth" value="Entrar">
              <br>
              <a href="password.php">¿Olvidaste tu contraseña?</a>
            </form>

          </div>
        </div>
      </div>
    </div>










  </div>

  <script src="librerias/jquery-3.4.1.min.js"></script>
  <script src="librerias/sweetalert.min.js"></script>
  
  <script type="text/javascript">
   function logear(){
    $.ajax({
      type:"POST",
      data:$('#frmLogin').serialize(),
      url:"procesos/usuario/login/login.php",
      success:function(respuesta) {
        respuesta = respuesta.trim();
        console.log(respuesta);
        if (respuesta == 1) {
          window.location = "vistas/inicio.php";
        } else {
          swal(":(", "Fallo al entrar!", "error");
        }
      }
    });

    return false;
  }
</script>

</body>
</html>