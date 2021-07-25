<?php 
		
	require_once "Conexion.php";
	class Egresados extends Conectar {
		public function agregarEgresados($datos) {
			$conexion = Conectar::conexion();

			$sql = "INSERT INTO t_egresados (id_user, 
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
		public function actualizarEgresados($datos) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE t_egresados 
					   SET dni = ?,
						   nombre = ?,
						   apellidos = ?,
						   telefono = ?,
						   correo = ?,
						   facultad = ?
					 WHERE id_egresado = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param("issssii", $datos['dni'],
									 			$datos['nombre'],
									 			$datos['apellidos'],
									 			$datos['telefono'],
									 			$datos['correo'],
									 			$datos['facultad'],
									 			$datos['idEgresado']
									 		);
			$respuesta = $query->execute();
			$query->close();
			
			return $respuesta;
		}
		public function obtenerDatosEgresado($idEgresado) {
			$conexion = Conectar::conexion();

			$sql = "SELECT 	id_egresado, 
						   	dni,
							nombre,
							apellidos,
							telefono,
							correo,
							facultad
					FROM t_egresados
					WHERE id_egresado = '$idEgresado'";
			$result = mysqli_query($conexion, $sql);

			$comunidad = mysqli_fetch_array($result);

			$datos = array(
							"idEgresado"	=> $comunidad['id_egresado'],
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
		public function existeArchivoEgresado($idEgresado,$cti_vitae_egresado) {
	  		$conexion = Conectar::conexion();
		    $sql="SELECT * from t_archivos_personas where id_egresado ='$idEgresado' and cti_vitae_egresado=1";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    if ($datos != '') {
		      return "existeA";
		    } else {
		      return "noexisteA";
		    }
		    $query->close();
		}
		public function agregarDatosArchivosEgresado($datos) {
			$conexion = Conectar::conexion();
		    $sql      = "INSERT INTO   t_archivos_personas (id_egresado,
													nombre,
													ruta,
													tipo,
													ext,
													nombre_original,
													cti_vitae_egresado)
			                 VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
		    $query->bind_param("isssssi", $datos['idEgresado'], 
								 			$datos['nombre'],
								 			$datos['ruta'],
								 			$datos['tipo'],
								 			$datos['ext'],
								 			$datos['nombre_original'],
								 			$datos['cti_vitae_egresado']);
			$respuesta = $query->execute();
		    if ($respuesta) {
		    	return $datos['idEgresado'];
		    } else {
		    	return 0;
		    }
		    $query->close();
	  	}
	  	public function obtenerArchivoEgresado($idEgresado,$cti_vitae_egresado) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original
		                  FROM  t_archivos_personas
		                 WHERE  id_egresado ='$idEgresado' and cti_vitae_egresado ='$cti_vitae_egresado'";
		  

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
		            
		              <a href="' . '../archivos/egresado/' . $datos['nombre'] . '" target="_blank">
		                <i class="fas fa-file-alt" style="font-size:40px;color:#138496;"></i>
		              </a>
		              <i class="fas fa-trash-alt" style="position: absolute;margin: -10px 0 0 0px; color:#C82333;cursor:pointer;" 
		                onclick="eliminarArchivoEgresado('.$datos['id_archivos'].')">
		              </i>
		            ';
		      return $cadena;
		    }
  		}
  		// para despues de eliminar cargue info por medio de ajax cualquier archivo 
  		public function obtenerIdEgresado($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_egresado FROM t_archivos_personas 
		    			  where id_archivos='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    return $datos['id_egresado'];
	  	}
	  	public function eliminarArchivo($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT nombre,ruta FROM t_archivos_personas 
		    			  where id_archivos ='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos  = mysqli_fetch_array($result);
		    if (file_exists("../../../archivos/egresado/" . $datos['nombre'])) {
		      if (unlink("../../../archivos/egresado/" . $datos['nombre'])) {
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