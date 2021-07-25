<!DOCTYPE html>
<html>
<head>
	<title>Universidad Nacional</title>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../librerias/fontawesome/css/all.css">
    <!-- <link rel="stylesheet" href="../librerias/datatable/dataTables.bootstrap4.min.css"> -->
    <link rel="stylesheet" href="../librerias/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../librerias/datatable/responsive.bootstrap4.min.css">


    <link rel="stylesheet" href="../librerias/jquery-ui-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="../librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
    <link rel="stylesheet" href="../librerias/multiselect/bootstrap-multiselect.min.css">
    <!-- <link rel="stylesheet" href="../librerias/multiselect/css/jquery.multiselect.css">
	<link rel="stylesheet" href="../librerias/multiselect/css/jquery.multiselect.filter.css">
	<link rel="stylesheet" href="../librerias/multiselect/css/style.css"> -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../librerias/multiselect/css/prettify.css">
	<link rel="stylesheet" href="../librerias/clockpicker/clockpicker.css">

</head>
<body>

<!-- input for temas -->
<input type="text" id="idUsuario" value="<?php echo $_SESSION['datosUsuario']['id']; ?>" hidden>

<div class="top-bar py-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 d-flex align-items-center icon-wrapd">
				<span class="fas fa-bars btn-menu"></span>
				<a class="ml-2" href="inicio.php">
					<img src="../img/background1.jpg" alt="" width="50px">
				</a>
				<a href="#" class="tipo-usuario ml-2">
					<?php echo $_SESSION['datosUsuario']['rol']; ?>
				</a>


				<a class="nav-link dropdown-toggle ml-auto" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					<span class="fa fa-user"></span> <?php  echo " ".$_SESSION['datosUsuario']['apellido']." ".$_SESSION['datosUsuario']['nombre']; ?>
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../procesos/usuario/salir.php">
						<span class="fas fa-power-off"></span> Salir
					</a>
				</div>
			</div>
		</div>
	</div>
</div>




