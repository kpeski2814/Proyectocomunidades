<?php 
		
	require_once "Conexion.php";
	class Investigador extends Conectar {
		public function agregarInvestigador($datos) {
			$conexion = Conectar::conexion();

			$sql = "INSERT INTO t_investigador (id_user, 
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
												clase,
												tipo_investigador,
												titulo_especialidad,
												grado_academico,
												area,
												notas,
												especificacion,
												estatus,
												id_comunidad
												) 
							VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
			$query->bind_param("iissssssiiiiiiisisssii", $datos['idUsuario'], 
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
									 			 $datos['clase'],
									 			 $datos['tipo_investigador'],
									 			 $datos['titulo_especialidad'],
									 			 $datos['grado_academico'],
									 			 $datos['area'],
									 			 $datos['notas'],
									 			 $datos['especificacion'],
									 			 $datos['estatus'],
									 			 $datos['id_comunidad']
									 			);
			$respuesta = $query->execute();
			$query->close();

			return $respuesta;
		}
		public function actualizarInvestigador($datos) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE t_investigador 
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
						   clase = ?,
						   tipo_investigador =?,
							titulo_especialidad=?,
							grado_academico=?,
							area=?,
							notas=?,
							especificacion=?,
							id_comunidad=? 
					 WHERE id_investigador = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param("issssssiiiiiiisisssii", $datos['dni'],
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
									 			$datos['clase'],
									 			$datos['tipo_investigador'],
									 			$datos['titulo_especialidad'],
									 			$datos['grado_academico'],
									 			$datos['area'],
									 			$datos['notas'],
									 			$datos['especificacion'],
									 			$datos['id_comunidad'],
									 			$datos['idInvestigador']
									 		);
			$respuesta = $query->execute();
			$query->close();
			
			return $respuesta;
		}
		public function obtenerDatosInvestigador($idInvestigador) {
			$conexion = Conectar::conexion();

			$sql = "SELECT 	id_investigador, 
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
							clase,
							tipo_investigador,
							titulo_especialidad,
							grado_academico,
							area,
							notas,
							especificacion,
							id_comunidad
					FROM t_investigador
					WHERE id_investigador = '$idInvestigador'";
			$result = mysqli_query($conexion, $sql);

			$comunidad = mysqli_fetch_array($result);

			$datos = array(
							"idInvestigador"		=> $comunidad['id_investigador'],
							"dni"	 				=> $comunidad['dni'],
							"nombre" 				=> $comunidad['nombre'],
							"apellidos" 			=> $comunidad['apellidos'],
							"telefono" 				=> $comunidad['telefono'],
							"cargo" 				=> $comunidad['cargo'],
							"correo" 				=> $comunidad['correo'],
							"enlace_cti_vitae" 		=> $comunidad['enlace_cti_vitae'],
							"calif_renacyt" 		=> $comunidad['calif_renacyt'],
							"grupo" 				=> $comunidad['grupo'],
							"nivel" 				=> $comunidad['nivel'],
							"codigo_orcid" 			=> $comunidad['codigo_orcid'],
							"scopusId" 				=> $comunidad['scopusId'],
							"clase" 				=> $comunidad['clase'],
				 			 "tipo_investigador" 	=> $comunidad['tipo_investigador'],
				 			 "titulo_especialidad"	=> $comunidad['titulo_especialidad'],
				 			 "grado_academico" 		=> $comunidad['grado_academico'],
				 			 "area" 				=> $comunidad['area'],
				 			 "notas" 				=> $comunidad['notas'],
				 			  "especificacion" 		=> $comunidad['especificacion'],
				 			  "id_comunidad" 		=> $comunidad['id_comunidad']
						);
						
			return $datos;
		}
		//archivos
		public function existeArchivoInvestigador($idInvestigador,$cti_vitae_investigador) {
	  		$conexion = Conectar::conexion();
		    $sql="SELECT * from t_archivos_personas where id_investigador ='$idInvestigador' and cti_vitae_investigador=1";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    if ($datos != '') {
		      return "existeA";
		    } else {
		      return "noexisteA";
		    }
		    $query->close();
		}
		public function agregarDatosArchivosInvestigador($datos) {
			$conexion = Conectar::conexion();
		    $sql      = "INSERT INTO   t_archivos_personas (id_investigador,
													nombre,
													ruta,
													tipo,
													ext,
													nombre_original,
													cti_vitae_investigador)
			                 VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
		    $query->bind_param("isssssi", $datos['idInvestigador'], 
								 			$datos['nombre'],
								 			$datos['ruta'],
								 			$datos['tipo'],
								 			$datos['ext'],
								 			$datos['nombre_original'],
								 			$datos['cti_vitae_investigador']);
			$respuesta = $query->execute();
		    if ($respuesta) {
		    	return $datos['idInvestigador'];
		    } else {
		    	return 0;
		    }
		    $query->close();
	  	}
	  	public function obtenerArchivoInvestigador($idInvestigador,$cti_vitae_investigador) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original
		                  FROM  t_archivos_personas
		                 WHERE  id_investigador ='$idInvestigador' and cti_vitae_investigador ='$cti_vitae_investigador'";
		  

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
		            
		              <a href="' . '../archivos/investigador/' . $datos['nombre'] . '" target="_blank">
		                <i class="fas fa-file-alt" style="font-size:40px;color:#138496;"></i>
		              </a>
		              <i class="fas fa-trash-alt" style="position: absolute;margin: -10px 0 0 0px; color:#C82333;cursor:pointer;" 
		                onclick="eliminarArchivoInvestigador('.$datos['id_archivos'].')">
		              </i>
		            ';
		      return $cadena;
		    }
  		}
  		// para despues de eliminar cargue info por medio de ajax cualquier archivo 
  		public function obtenerIdInvestigador($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_investigador FROM t_archivos_personas 
		    			  where id_archivos='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    return $datos['id_investigador'];
	  	}
	  	public function eliminarArchivo($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT nombre,ruta FROM t_archivos_personas 
		    			  where id_archivos ='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos  = mysqli_fetch_array($result);
		    if (file_exists("../../../archivos/investigador/" . $datos['nombre'])) {
		      if (unlink("../../../archivos/investigador/" . $datos['nombre'])) {
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
		public function estatus($idInvestigador,$estatus) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE t_investigador 
					   SET estatus = ? 
					 WHERE id_investigador = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param("ii", $estatus,$idInvestigador);
			$respuesta = $query->execute();
			$query->close();
			
			return $respuesta;
	  	}
	} // end class

 ?>