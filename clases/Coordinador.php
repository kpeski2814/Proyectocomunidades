<?php 
		
	require_once "Conexion.php";
	class Coordinador extends Conectar {
		public function agregarCoordinador($datos) {
			$conexion = Conectar::conexion();

			$validarInsert = self :: agregarSolamenteUnCoordinadorPorUsuario($datos['idUsuario']);
			if ($validarInsert == 0) { 
				$sql = "INSERT INTO t_coordinador (id_user, 
											   	dni,
											   	nombre,
												apellidos,
												telefono,
												cargo,
												correo,
												enlace_cti_vitae,
												calif_renacyt,
												grupo,
												nivel,
												codigo_orcid,
												scopusId,
												tematicas,
												categoria,
												dedicacion,
												estatus,
												id_comunidad) 
								VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$query = $conexion->prepare($sql);
				$query->bind_param("iissssssiiiiisssii", $datos['idUsuario'], 
													$datos['dni'],
													$datos['nombre'],
													$datos['apellidos'],
													$datos['telefono'],
													$datos['cargo'],
													$datos['correo'],
													$datos['enlace_cti_vitae'],
													$datos['calif_renacyt'],
													$datos['grupo'],
													$datos['nivel'],
													$datos['codigo_orcid'],
													$datos['scopusId'],
													$datos['tematicas'],
													$datos['categoria'],
													$datos['dedicacion'],
													$datos['estatus'],
													$datos['id_comunidad']
													);
				$respuesta = $query->execute();
				$query->close();

				return $respuesta;
			} else {
				return 3;
			}

			
		}

		public function agregarSolamenteUnCoordinadorPorUsuario($idUsuario) {
			$conexion = Conectar::conexion();

			$sql = "SELECT * FROM t_coordinador WHERE id_user = '$idUsuario'";
			$respuesta = mysqli_query($conexion, $sql);

			if (mysqli_num_rows($respuesta) > 0) {
				return 1;
			} else {
				return 0;
			}
		}

		public function actualizarCoordinador($datos) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE t_coordinador 
					   SET dni = ?,
						   nombre = ?,
						   apellidos = ?,
						   telefono = ?,
						   cargo = ?,
						   correo = ?,
						   enlace_cti_vitae = ?,
						   calif_renacyt = ?,
						   grupo = ?,
						   nivel = ?,
						   codigo_orcid = ?,
						   scopusId = ?,
						   tematicas = ?,
						   categoria =?,
						   dedicacion=?,
						   id_comunidad=? 
					 WHERE id_coordinador = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param("issssssiiiiisssii", $datos['dni'],
									 			$datos['nombre'],
									 			$datos['apellidos'],
									 			$datos['telefono'],
									 			$datos['cargo'],
									 			$datos['correo'],
									 			$datos['enlace_cti_vitae'],
									 			$datos['calif_renacyt'],
									 			$datos['grupo'],
									 			$datos['nivel'],
									 			$datos['codigo_orcid'],
									 			$datos['scopusId'],
									 			$datos['tematicas'],
									 			$datos['categoria'],
									 			$datos['dedicacion'],
									 			$datos['id_comunidad'],
									 			$datos['idCoordinador']
									 		);
			$respuesta = $query->execute();
			$query->close();
			
			return $respuesta;
		}
		public function obtenerDatosCoordinador($idCoordinador) {
			$conexion = Conectar::conexion();

			$sql = "SELECT 	id_coordinador, 
						   	dni,
							nombre,
							apellidos,
							telefono,
							cargo,
							correo,
							enlace_cti_vitae,
							calif_renacyt,
							grupo,
							nivel,
							codigo_orcid,
							scopusId,
							tematicas,
							categoria,
							dedicacion,
							id_comunidad 
					FROM t_coordinador
					WHERE id_coordinador = '$idCoordinador'";
			$result = mysqli_query($conexion, $sql);

			$comunidad = mysqli_fetch_array($result);

			$datos = array(
							"idCoordinador"		=> $comunidad['id_coordinador'],
							"dni"	 			=> $comunidad['dni'],
							"nombre" 			=> $comunidad['nombre'],
							"apellidos" 		=> $comunidad['apellidos'],
							"telefono" 			=> $comunidad['telefono'],
							"cargo" 			=> $comunidad['cargo'],
							"correo" 			=> $comunidad['correo'],
							"enlace_cti_vitae" 	=> $comunidad['enlace_cti_vitae'],
							"calif_renacyt" 	=> $comunidad['calif_renacyt'],
							"grupo" 			=> $comunidad['grupo'],
							"nivel" 			=> $comunidad['nivel'],
							"codigo_orcid" 		=> $comunidad['codigo_orcid'],
							"scopusId" 			=> $comunidad['scopusId'],
							"tematicas" 		=> $comunidad['tematicas'],
							"categoria" 		=> $comunidad['categoria'],
							"dedicacion" 		=> $comunidad['dedicacion'],
							"id_comunidad" 		=> $comunidad['id_comunidad']
						);
						
			return $datos;
		}

		//archivos
		public function existeArchivoCoordinador($idCoordinador,$cti_vitae_coordinador) {
	  		$conexion = Conectar::conexion();
		    $sql="SELECT * from t_archivos_personas where id_coordinador ='$idCoordinador' and cti_vitae_coordinador=1";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    if ($datos != '') {
		      return "existeA";
		    } else {
		      return "noexisteA";
		    }
		    $query->close();
		}
		public function agregarDatosArchivosCoordinador($datos) {
			$conexion = Conectar::conexion();
		    $sql      = "INSERT INTO   t_archivos_personas (id_coordinador,
													nombre,
													ruta,
													tipo,
													ext,
													nombre_original,
													cti_vitae_coordinador)
			                 VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
		    $query->bind_param("isssssi", $datos['idCoordinador'], 
								 			$datos['nombre'],
								 			$datos['ruta'],
								 			$datos['tipo'],
								 			$datos['ext'],
								 			$datos['nombre_original'],
								 			$datos['cti_vitae_coordinador']);
			$respuesta = $query->execute();
		    if ($respuesta) {
		    	return $datos['idCoordinador'];
		    } else {
		    	return 0;
		    }
		    $query->close();
	  	}
	  	public function obtenerArchivoCoordinador($idCoordinador,$cti_vitae_coordinador) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original
		                  FROM  t_archivos_personas
		                 WHERE  id_coordinador='$idCoordinador' and cti_vitae_coordinador ='$cti_vitae_coordinador'";
		  

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
		            
		              <a href="' . '../archivos/coordinador/' . $datos['nombre'] . '" target="_blank">
		                <i class="fas fa-file-alt" style="font-size:40px;color:#138496;"></i>
		              </a>
		              <i class="fas fa-trash-alt" style="position: absolute;margin: -10px 0 0 0px; color:#C82333;cursor:pointer;" 
		                onclick="eliminarArchivoCoordinador('.$datos['id_archivos'].')">
		              </i>
		            ';
		      return $cadena;
		    }
  		}
  		// para despues de eliminar cargue info por medio de ajax cualquier archivo 
  		public function obtenerIdCoordinador($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_coordinador FROM t_archivos_personas 
		    			  where id_archivos='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    return $datos['id_coordinador'];
	  	}
	  	public function eliminarArchivo($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT nombre,ruta FROM t_archivos_personas 
		    			  where id_archivos ='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos  = mysqli_fetch_array($result);
		    if (file_exists("../../../archivos/coordinador/" . $datos['nombre'])) {
		      if (unlink("../../../archivos/coordinador/" . $datos['nombre'])) {
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

		public function estatus($idCoordinador,$estatus) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE t_coordinador 
					   SET estatus = ? 
					 WHERE id_coordinador = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param("ii", $estatus,$idCoordinador);
			$respuesta = $query->execute();
			$query->close();
			
			return $respuesta;
	  	}

	} // end class

 ?>