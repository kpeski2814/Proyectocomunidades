<?php 
		
	require_once "Conexion.php";
	class Estudiantes extends Conectar {
		public function agregarEstudiantes($datos) {
			$conexion = Conectar::conexion();

			$sql = "INSERT INTO t_estudiantes (id_user, 
											   dni,
											   nombre,
												apellidos,
												telefono,
												correo,
												facultad) 
							VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
			$query->bind_param("iissssi", $datos['idUsuario'], 
									 			 $datos['dni'],
									 			 $datos['nombre'],
									 			 $datos['apellidos'],
									 			 $datos['telefono'],
									 			 $datos['correo'],
									 			 $datos['facultad']
									 			);
			$respuesta = $query->execute();
			$query->close();

			return $respuesta;
		}
		public function actualizarEstudiante($datos) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE t_estudiantes 
					   SET dni = ?,
						   nombre = ?,
						   apellidos = ?,
						   telefono = ?,
						   correo = ?,
						   facultad = ?
					 WHERE id_estudiante = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param("issssii", $datos['dni'],
									 			$datos['nombre'],
									 			$datos['apellidos'],
									 			$datos['telefono'],
									 			$datos['correo'],
									 			$datos['facultad'],
									 			$datos['idEstudiante']
									 		);
			$respuesta = $query->execute();
			$query->close();
			
			return $respuesta;
		}
		public function obtenerDatosEstudiante($idEstudiante) {
			$conexion = Conectar::conexion();

			$sql = "SELECT 	id_estudiante, 
						   	dni,
							nombre,
							apellidos,
							telefono,
							correo,
							facultad
					FROM t_estudiantes
					WHERE id_estudiante = '$idEstudiante'";
			$result = mysqli_query($conexion, $sql);

			$comunidad = mysqli_fetch_array($result);

			$datos = array(
							"idEstudiante"	=> $comunidad['id_estudiante'],
							"dni"	 		=> $comunidad['dni'],
							"nombre" 		=> $comunidad['nombre'],
							"apellidos" 	=> $comunidad['apellidos'],
							"telefono" 		=> $comunidad['telefono'],
							"correo" 		=> $comunidad['correo'],
							"facultad" 		=> $comunidad['facultad']
						);
						
			return $datos;
		}
		//archivos
		public function existeArchivoEstudiante($idEstudiante,$cti_vitae_estudiante) {
	  		$conexion = Conectar::conexion();
		    $sql="SELECT * from t_archivos_personas where id_estudiante ='$idEstudiante' and cti_vitae_estudiante=1";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    if ($datos != '') {
		      return "existeA";
		    } else {
		      return "noexisteA";
		    }
		    $query->close();
		}
		public function agregarDatosArchivosEstudiante($datos) {
			$conexion = Conectar::conexion();
		    $sql      = "INSERT INTO   t_archivos_personas (id_estudiante,
													nombre,
													ruta,
													tipo,
													ext,
													nombre_original,
													cti_vitae_estudiante)
			                 VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
		    $query->bind_param("isssssi", $datos['idEstudiante'], 
								 			$datos['nombre'],
								 			$datos['ruta'],
								 			$datos['tipo'],
								 			$datos['ext'],
								 			$datos['nombre_original'],
								 			$datos['cti_vitae_estudiante']);
			$respuesta = $query->execute();
		    if ($respuesta) {
		    	return $datos['idEstudiante'];
		    } else {
		    	return 0;
		    }
		    $query->close();
	  	}
	  	public function obtenerArchivoEstudiante($idEstudiante,$cti_vitae_estudiante) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original
		                  FROM  t_archivos_personas
		                 WHERE  id_estudiante ='$idEstudiante' and cti_vitae_estudiante ='$cti_vitae_estudiante'";
		  

		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);

		    $cadena  = "";
		    if ($datos == '') {
		        $cadena = $cadena . '
		          <i class="fas fa-exclamation-circle" style="color:#D73925;position: absolute;
		          margin: 5px 0 0 -16px; font-size: 30px;"></i>';
		      return $cadena;
		    } else {
		          $cadena  = $cadena . '
		            
		              <a href="' . '../archivos/estudiante/' . $datos['nombre'] . '" target="_blank">
		                <i class="fas fa-file-alt" style="font-size:40px;color:#138496;"></i>
		              </a>
		              <i class="fas fa-trash-alt" style="position: absolute;margin: -10px 0 0 0px; color:#C82333;cursor:pointer;" 
		                onclick="eliminarArchivoEstudiante('.$datos['id_archivos'].')">
		              </i>
		            ';
		      return $cadena;
		    }
  		}
  		// para despues de eliminar cargue info por medio de ajax cualquier archivo 
  		public function obtenerIdEstudiante($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_estudiante FROM t_archivos_personas 
		    			  where id_archivos='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    return $datos['id_estudiante'];
	  	}
	  	public function eliminarArchivo($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT nombre,ruta FROM t_archivos_personas 
		    			  where id_archivos ='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos  = mysqli_fetch_array($result);
		    if (file_exists("../../../archivos/estudiante/" . $datos['nombre'])) {
		      if (unlink("../../../archivos/estudiante/" . $datos['nombre'])) {
		          return 1;
		      } else {
		          return 0;
		      }
		    } else {
		      return 0;
		    }
	  	}
	  	public function eliminarDatosArchivo($idArchivo) {
	  		$conexion = Conectar::conexion();
			$sql = "DELETE FROM t_archivos_personas  where id_archivos = ?";
			
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idArchivo);
			$respuesta = $query->execute();
			$query->close();
			return $respuesta;
		}
	} // end class

 ?>