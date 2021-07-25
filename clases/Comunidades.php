<?php 
		
	require_once "Conexion.php";
	class Comunidades extends Conectar {
		public function agregarComunidad($datos) {
			$conexion = Conectar::conexion();
			$validarInsert = self :: soloUnaComunidadPorUsuario($datos['idUsuario']);
			if ($validarInsert == 0) {
				$sql = "INSERT INTO comunidad (id_user,
											id_facultad, 
											cod_reg,
											denominacion,
											tipo_comunidad_id,
											facultad_id,
											dani,
											financiamiento,
											num_registro,
											facebook,
											pag_web,
											date_created,
											linea_inv,
											fin_no_institucional,
											estatus) 
							VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$query = $conexion->prepare($sql);
				$query->bind_param("iiisiisissssiii", $datos['idUsuario'],
													$datos['id_facultad'], 
													$datos['cod_reg'],
													$datos['denominacion'],
													$datos['tipo_comunidad_id'],
													$datos['facultad_id'],
													$datos['dani'],
													$datos['financiamiento'],
													$datos['num_registro'],
													$datos['facebook'],
													$datos['pag_web'],
													$datos['date_created'],
													$datos['linea_inv'],
													$datos['fin_no_institucional'],
													$datos['estatus']);
				$respuesta = $query->execute();
				$query->close();

				return $respuesta;
			} else {
				return 3;
			}
		}

		public function soloUnaComunidadPorUsuario($idUsuario) {
			$conexion = Conectar::conexion();

			$sql = "SELECT * FROM comunidad WHERE id_user = '$idUsuario'";
			$respuesta = mysqli_query($conexion, $sql);

			if (mysqli_num_rows($respuesta) > 0) {
				return 1;
			} else {
				return 0;
			}
		}


		public function actualizarComunidad($datos) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE comunidad 
					   SET cod_reg = ?,
							id_facultad = ?,
						   denominacion = ?,
						   tipo_comunidad_id = ?,
						   facultad_id = ?,
						   dani = ?,
						   financiamiento = ?,
						   num_registro = ?,
						   facebook = ?,
						   pag_web = ?,
						   date_created = ?,
						   linea_inv = ?,
						   fin_no_institucional = ? 
					 WHERE id = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param("iisiisissssiii", $datos['cod_reg'],
												$datos['id_facultad'],
									 			$datos['denominacion'],
									 			$datos['tipo_comunidad_id'],
									 			$datos['facultad_id'],
									 			$datos['dani'],
									 			$datos['financiamiento'],
									 			$datos['num_registro'],
									 			$datos['facebook'],
									 			$datos['pag_web'],
									 			$datos['date_created'],
									 			$datos['linea_inv'],
									 			$datos['fin_no_institucional'],
									 			$datos['idComunidad']);
			$respuesta = $query->execute();
			$query->close();
			
			return $respuesta;
		}
		public function obtenerDatosComunidad($idComunidad) {
			$conexion = Conectar::conexion();

			$sql = "SELECT id,
							id_facultad, 
						   cod_reg,
						   denominacion,
						   tipo_comunidad_id,
						   facultad_id,
						   dani,
						   financiamiento,
						   num_registro,
						   facebook,
						   pag_web,
						   date_created,
						   linea_inv,
						   fin_no_institucional 
					FROM comunidad 
					WHERE id = '$idComunidad'";
			$result = mysqli_query($conexion, $sql);

			$comunidad = mysqli_fetch_array($result);

			$datos = array(
							"idComunidad" 			=> $comunidad['id'],
							"idFacultad"			=> $comunidad['id_facultad'],
							"cod_reg" 				=> $comunidad['cod_reg'],
							"denominacion" 			=> $comunidad['denominacion'],
							"tipo_comunidad_id" 	=> $comunidad['tipo_comunidad_id'],
							"facultad_id" 			=> $comunidad['facultad_id'],
							"dani" 					=> $comunidad['dani'],
							"financiamiento" 		=> $comunidad['financiamiento'],
							"num_registro" 			=> $comunidad['num_registro'],
							"facebook" 				=> $comunidad['facebook'],
							"pag_web" 				=> $comunidad['pag_web'],
							"date_created" 			=> $comunidad['date_created'],
							"linea_inv" 			=> $comunidad['linea_inv'],
							"fin_no_institucional" 	=> $comunidad['fin_no_institucional']
						);
						
			return $datos;
		}

		// archivos comunidad
		public function agregarDatosArchivosSolicitud($datos) {
			$conexion = Conectar::conexion();
		    $sql      = "INSERT INTO   t_archivos (id_comunidad,
													nombre,
													ruta,
													tipo,
													ext,
													nombre_original,
													solicitud)
			                 VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
		    $query->bind_param("isssssi", $datos['id_comunidad'], 
								 			$datos['nombre'],
								 			$datos['ruta'],
								 			$datos['tipo'],
								 			$datos['ext'],
								 			$datos['nombre_original'],
								 			$datos['solicitud']);
			$respuesta = $query->execute();

		    if ($respuesta) {
		    	return $datos['id_comunidad'];
		    } else {
		    	return 0;
		    }
		    $query->close();
	  	}

		public function obtenerArchivoSolicitud($idComunidad,$solicitud) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original
		                  FROM  t_archivos
		                 WHERE  id_comunidad='$idComunidad' and solicitud ='$solicitud'";
		  

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
		            
		              <a href="' . '../archivos/comunidad/' . $datos['nombre'] . '" target="_blank">
		                <i class="fas fa-file-alt" style="font-size:40px;color:#138496;"></i>
		              </a>
		              <i class="fas fa-trash-alt" style="position: absolute;margin: -10px 0 0 0px; color:#C82333;cursor:pointer;" 
		                onclick="eliminarArchivoSolicitud('.$datos['id_archivos'].')">
		              </i>
		          
		            ';
		      return $cadena;
		    }
  		}

	  	public function existeArchivoSolicitud($idComunidad,$solicitud) {
	  		$conexion = Conectar::conexion();
		    $sql="SELECT * from t_archivos where id_comunidad='$idComunidad' and solicitud=1";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    if ($datos != '') {
		      return "existeA";
		    } else {
		      return "noexisteA";
		    }
		    $query->close();
		}

		public function eliminarArchivo($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT nombre,ruta FROM t_archivos 
		    			  where id_archivos ='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos  = mysqli_fetch_array($result);
		    if (file_exists("../../../archivos/comunidad/" . $datos['nombre'])) {
		      if (unlink("../../../archivos/comunidad/" . $datos['nombre'])) {
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
			$sql = "DELETE FROM t_archivos  where id_archivos = ?";
			
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idArchivo);
			$respuesta = $query->execute();
			$query->close();
			return $respuesta;
		}

		// para despues de eliminar cargue info por medio de ajax cualquier archivo de comunidad
		public function obtenerIdComunidad($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_comunidad FROM t_archivos 
		    			  where id_archivos='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    return $datos['id_comunidad'];
	  	}


	  	public function agregarDatosArchivosResolucionVrin($datos) {
			$conexion = Conectar::conexion();
		    $sql      = "INSERT INTO   t_archivos (id_comunidad,
													nombre,
													ruta,
													tipo,
													ext,
													nombre_original,
													res_vrin)
			                 VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
		    $query->bind_param("isssssi", $datos['id_comunidad'], 
								 			$datos['nombre'],
								 			$datos['ruta'],
								 			$datos['tipo'],
								 			$datos['ext'],
								 			$datos['nombre_original'],
								 			$datos['res_vrin']);
			$respuesta = $query->execute();

		    if ($respuesta) {
		    	return $datos['id_comunidad'];
		    } else {
		    	return 0;
		    }
		    $query->close();
	  	}

	  	public function existeArchivoResolucionVrin($idComunidad,$res_vrin) {
	  		$conexion = Conectar::conexion();
		    $sql="SELECT * from t_archivos where id_comunidad='$idComunidad' and res_vrin=1";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    if ($datos != '') {
		      return "existeA";
		    } else {
		      return "noexisteA";
		    }
		    $query->close();
		}

		public function obtenerArchivoResolucionVrin($idComunidad,$res_vrin) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original
		                  FROM  t_archivos
		                 WHERE  id_comunidad='$idComunidad' and res_vrin ='$res_vrin'";
		  

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
		            
		              <a href="' . '../archivos/comunidad/' . $datos['nombre'] . '" target="_blank">
		                <i class="fas fa-file-alt" style="font-size:40px;color:#138496;"></i>
		              </a>
		              <i class="fas fa-trash-alt" style="position: absolute;margin: -10px 0 0 0px; color:#C82333;cursor:pointer;" 
		                onclick="eliminarArchivoResolucionVrin('.$datos['id_archivos'].')">
		              </i>
		          
		            ';
		      return $cadena;
		    }
  		}

  		public function obtenerArchivoResolucionDecanal($idComunidad,$res_decanal) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original
		                  FROM  t_archivos
		                 WHERE  id_comunidad='$idComunidad' and res_decanal ='$res_decanal'";
		  

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
		            
		              <a href="' . '../archivos/comunidad/' . $datos['nombre'] . '" target="_blank">
		                <i class="fas fa-file-alt" style="font-size:40px;color:#138496;"></i>
		              </a>
		              <i class="fas fa-trash-alt" style="position: absolute;margin: -10px 0 0 0px; color:#C82333;cursor:pointer;" 
		                onclick="eliminarArchivoResolucionDecanal('.$datos['id_archivos'].')">
		              </i>
		          
		            ';
		      return $cadena;
		    }
  		}

  		public function existeArchivoResolucionDecanal($idComunidad,$res_decanal) {
	  		$conexion = Conectar::conexion();
		    $sql="SELECT * from t_archivos where id_comunidad='$idComunidad' and res_decanal=1";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    if ($datos != '') {
		      return "existeA";
		    } else {
		      return "noexisteA";
		    }
		    $query->close();
		}

		public function agregarDatosArchivosResolucionDecanal($datos) {
			$conexion = Conectar::conexion();
		    $sql      = "INSERT INTO   t_archivos (id_comunidad,
													nombre,
													ruta,
													tipo,
													ext,
													nombre_original,
													res_decanal)
			                 VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
		    $query->bind_param("isssssi", $datos['id_comunidad'], 
								 			$datos['nombre'],
								 			$datos['ruta'],
								 			$datos['tipo'],
								 			$datos['ext'],
								 			$datos['nombre_original'],
								 			$datos['res_decanal']);
			$respuesta = $query->execute();

		    if ($respuesta) {
		    	return $datos['id_comunidad'];
		    } else {
		    	return 0;
		    }
		    $query->close();
	  	}

	  	public function agregarDatosArchivosProduccionCientifica($datos) {
			$conexion = Conectar::conexion();
		    $sql      = "INSERT INTO   t_archivos (id_comunidad,
													nombre,
													ruta,
													tipo,
													ext,
													nombre_original,
													prod_cientifica)
			                 VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
		    $query->bind_param("isssssi", $datos['id_comunidad'], 
								 			$datos['nombre'],
								 			$datos['ruta'],
								 			$datos['tipo'],
								 			$datos['ext'],
								 			$datos['nombre_original'],
								 			$datos['prod_cientifica']);
			$respuesta = $query->execute();

		    if ($respuesta) {
		    	return $datos['id_comunidad'];
		    } else {
		    	return 0;
		    }
		    $query->close();
	  	}

	  	public function existeArchivoProduccionCientifica($idComunidad,$prod_cientifica) {
	  		$conexion = Conectar::conexion();
		    $sql="SELECT * from t_archivos where id_comunidad='$idComunidad' and prod_cientifica=1";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    if ($datos != '') {
		      return "existeA";
		    } else {
		      return "noexisteA";
		    }
		    $query->close();
		}

		public function obtenerArchivoProduccionCientifica($idComunidad,$prod_cientifica) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original
		                  FROM  t_archivos
		                 WHERE  id_comunidad='$idComunidad' and prod_cientifica ='$prod_cientifica'";
		  

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
		            
		              <a href="' . '../archivos/comunidad/' . $datos['nombre'] . '" target="_blank">
		                <i class="fas fa-file-alt" style="font-size:40px;color:#138496;"></i>
		              </a>
		              <i class="fas fa-trash-alt" style="position: absolute;margin: -10px 0 0 0px; color:#C82333;cursor:pointer;" 
		                onclick="eliminarArchivoProduccionCientifica('.$datos['id_archivos'].')">
		              </i>
		          
		            ';
		      return $cadena;
		    }
  		}

  		public function agregarDatosArchivosTipoDocumentoProduccion($datos) {
			$conexion = Conectar::conexion();
		    $sql      = "INSERT INTO   t_archivos (id_comunidad,
													nombre,
													ruta,
													tipo,
													ext,
													nombre_original,
													tipo_archivo_prod,
													url)
			                 VALUES (?,?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
		    $query->bind_param("isssssis", $datos['id_comunidad'], 
								 			$datos['nombre'],
								 			$datos['ruta'],
								 			$datos['tipo'],
								 			$datos['ext'],
								 			$datos['nombre_original'],
								 			$datos['tipo_archivo_prod'],
								 		    $datos['url']);
			$respuesta = $query->execute();

		    if ($respuesta) {
		    	return $datos['id_comunidad'];
		    } else {
		    	return 0;
		    }
		    $query->close();
	  	}
  		
  		/*public function existeArchivoTipoDocumentoProduccion($idComunidad,$tipo_archivo_prod) {
	  		$conexion = Conectar::conexion();
		    $sql="SELECT * from t_archivos where id_comunidad='$idComunidad' and tipo_archivo_prod=1";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    if ($datos != '') {
		      return "existeA";
		    } else {
		      return "noexisteA";
		    }
		    $query->close();
		}*/

		/*public function obtenerArchivoTipoDocumentoProduccion($idComunidad,$tipo_archivo_prod) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original
		                  FROM  t_archivos
		                 WHERE  id_comunidad='$idComunidad' and tipo_archivo_prod ='$tipo_archivo_prod'";
		  

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
		            
		              <a href="' . '../archivos/comunidad/' . $datos['nombre'] . '" target="_blank">
		                <i class="fas fa-file-alt" style="font-size:40px;color:#138496;"></i>
		              </a>
		              <i class="fas fa-trash-alt" style="position: absolute;margin: -10px 0 0 0px; color:#C82333;cursor:pointer;" 
		                onclick="eliminarArchivoTipoDocumentoProduccion('.$datos['id_archivos'].')">
		              </i>
		          
		            ';
		      return $cadena;
		    }
  		}*/

  		public function obtenerArchivoTipoDocumentoProduccion($idComunidad,$tipo_archivo_prod) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original,
		                        url
		                  FROM  t_archivos
		                 WHERE  id_comunidad='$idComunidad' and tipo_archivo_prod ='$tipo_archivo_prod'";
		  

		    $result = mysqli_query($conexion, $sql);
			return $datos = mysqli_fetch_all($result,MYSQLI_ASSOC);
  		}

  		public function estatus($idComunidad,$estatus) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE comunidad 
					   SET estatus = ? 
					 WHERE id = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param("ii", $estatus,$idComunidad);
			$respuesta = $query->execute();
			$query->close();
			
			return $respuesta;
	  	}



	} // end class

 ?>