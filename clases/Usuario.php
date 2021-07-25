<?php 
	
	require_once "Conexion.php";

	class Usuario extends Conectar{

		public function login($usuario, $password) {
			$conexion = Conectar::conexion();

			$sql = "SELECT count(*) as existeUsuario 
						FROM usuarios 
						WHERE username = '$usuario' 
						AND password = '$password'";
			$result = mysqli_query($conexion, $sql);

			$respuesta = mysqli_fetch_array($result)['existeUsuario'];

			if ($respuesta > 0) {

				$sql = "SELECT username as nombre, 
								id as idUsuario, 
								rol as tipoRol,
								nombre as nombrePersona,
								apellido as apellido
						FROM usuarios 
						WHERE username = '$usuario' 
							AND password = '$password'";

				$result = mysqli_query($conexion ,$sql);
				$datosUsuario = mysqli_fetch_array($result);

				$_SESSION['datosUsuario']['rol'] = $datosUsuario['tipoRol'];
				$_SESSION['datosUsuario']['id'] = $datosUsuario['idUsuario'];
				$_SESSION['datosUsuario']['username'] = $datosUsuario['nombre'];
				$_SESSION['datosUsuario']['nombre'] = $datosUsuario['nombrePersona'];
				$_SESSION['datosUsuario']['apellido'] = $datosUsuario['apellido'];

				return 1;
			} else {
				return 0;
			}
		}

		public function eliminarUsuario($idUsuario) {
			$conexion = Conectar::conexion();

			$sql = "DELETE FROM usuarios WHERE id = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idUsuario);
			$respuesta = $query->execute();

			return $respuesta;
		}

		public function agregarNuevoUsuario($datos) {
			$conexion = Conectar::conexion();
			$sql = "INSERT INTO usuarios (nombre, apellido, username, password, rol) 
					VALUES (?, ?, ?, ?, ?)";
			$query = $conexion->prepare($sql);
			$query->bind_param('sssss', $datos['nombre'], 
												$datos['apellido'], 
												$datos['usuario'], 
												$datos['password'], 
												$datos['rolUsuario']);
			$respuesta = $query->execute();

			return $respuesta;
		}

		public function usuarioValido($nombreUsuario) {
			$conexion = Conectar::conexion();

			$sql = "SELECT * FROM usuarios WHERE username = '$nombreUsuario'";
			$respuesta = mysqli_query($conexion, $sql);

			if (mysqli_num_rows($respuesta) > 0) {
				return 1;
			} else {
				return 0;
			}
		}

		public function cambiarPassword($usuario, $password) {
			$conexion = Conectar::conexion();
			$nuevoPassword = sha1($password);
			$sql = "UPDATE usuarios SET password = ? WHERE username = ?";
			$query = $conexion->prepare($sql);

			$query->bind_param("ss", $nuevoPassword, $usuario);
			$respuesta  = $query->execute();

			return $respuesta;
		}

		public function obtenerDatosAgregadosDeUsuario($idUsuario) {
			$conexion = Conectar::conexion();

			/**Estas son las tablas que contienen datos
			 	*SELECT * FROM comunidades.comunidad;
				*SELECT * FROM comunidades.t_coordinador;
				*SELECT * FROM comunidades.t_investigador;
				*SELECT * FROM comunidades.t_miembros;
				*SELECT * FROM comunidades.t_plan_trabajo;
				*SELECT * FROM comunidades.t_archivos; 
			*/ 
			$comunidad = self::obtenerDatosDeTabla($idUsuario, "comunidad");
			$coordinador = self::obtenerDatosDeTabla($idUsuario, "t_coordinador");
			$investigador = self::obtenerDatosDeTabla($idUsuario, "t_investigador");
			$miembros = self::obtenerDatosDeTabla($idUsuario, "t_miembros");
			$planTrabajo = self::obtenerDatosDeTabla($idUsuario, "t_plan_trabajo");

			$datos = array(
				"comunidad" => $comunidad,
				"coordinador" => $coordinador,
				"investigador" => $investigador,
				"miembros" => $miembros,
				"planTrabajo" => $planTrabajo
			);

			return $datos;
		}

		public function obtenerDatosDeTabla($idUsuario, $tabla) {
			$conexion = Conectar::conexion();
			$sql = "SELECT * FROM " . $tabla ." WHERE id_user = '$idUsuario'";
			$respuesta = mysqli_query($conexion, $sql);

			if (mysqli_num_rows($respuesta) < 1) {
				return $data = 0;
			} else {
				return $data = mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
			}

				
			
		}

	}
	
 ?>