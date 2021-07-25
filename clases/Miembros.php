<?php 
		
	require_once "Conexion.php";
	class Miembros extends Conectar {
		public function agregarMiembros($datos) {
			$conexion = Conectar::conexion();

			$sql = "INSERT INTO t_miembros (id_user, 
											   tipo_doc_identidad,
											   no_doc,
											   nombre,
												apellidos,
												telefono,
												correo,
												afiliacion,
												tipo_miembro,
												facultad,
												codigo_estudiante,
												condicion,
												estatus,
												id_comunidad) 
							VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
			$query->bind_param("isisssssisisii", $datos['idUsuario'], 
									 			 $datos['tipo_doc_identidad'],
									 			 $datos['no_doc'],
									 			 $datos['nombre'],
									 			 $datos['apellidos'],
									 			 $datos['telefono'],
									 			 $datos['correo'],
									 			 $datos['afiliacion'],
									 			 $datos['tipo_miembro'],
									 			 $datos['facultad'],
									 			 $datos['codigo_estudiante'],
									 			 $datos['condicion'],
									 			 $datos['estatus'],
									 			 $datos['id_comunidad']
									 			);
			$respuesta = $query->execute();
			$query->close();

			return $respuesta;
		}
		public function actualizarMiembro($datos) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE t_miembros 
					   SET tipo_doc_identidad = ?,
					   	   no_doc =?,
						   nombre = ?,
						   apellidos = ?,
						   telefono = ?,
						   correo = ?,
						   afiliacion = ?,
						   tipo_miembro =?,
						   facultad=?,
						   codigo_estudiante=?,
						   condicion=?,
						   id_comunidad=?
					 WHERE id_miembro = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param("iisssssisisii", $datos['tipo_doc_identidad'],
									 		$datos['no_doc'],
									 		$datos['nombre'],
									 		$datos['apellidos'],
									 		$datos['telefono'],
									 		$datos['correo'],
									 		$datos['afiliacion'],
									 		$datos['tipo_miembro'],
									 		$datos['facultad'],
									 		$datos['codigo_estudiante'],
									 		$datos['condicion'],
									 		$datos['id_comunidad'],
									 		$datos['idMiembro']
									 		);
			$respuesta = $query->execute();
			$query->close();
			
			return $respuesta;
		}
		public function obtenerDatosMiembro($idMiembro) {
			$conexion = Conectar::conexion();

			$sql = "SELECT 	id_miembro, 
						   	tipo_doc_identidad,
						   	no_doc,
							nombre,
							apellidos,
							telefono,
							correo,
							afiliacion,
							tipo_miembro,
							facultad,
							codigo_estudiante,
							condicion,
							id_comunidad
					FROM t_miembros
					WHERE id_miembro = '$idMiembro'";
			$result = mysqli_query($conexion, $sql);

			$comunidad = mysqli_fetch_array($result);

			$datos = array(
							"idMiembro"			 => $comunidad['id_miembro'],
							"tipo_doc_identidad" => $comunidad['tipo_doc_identidad'],
							"no_doc" 			 => $comunidad['no_doc'],
							"nombre" 			 => $comunidad['nombre'],
							"apellidos" 		 => $comunidad['apellidos'],
							"telefono" 			 => $comunidad['telefono'],
							"correo" 			 => $comunidad['correo'],
							"afiliacion" 		 => $comunidad['afiliacion'],
							"tipo_miembro" 		 => $comunidad['tipo_miembro'],
							"facultad" 		 	 => $comunidad['facultad'],
							"codigo_estudiante"  => $comunidad['codigo_estudiante'],
							"condicion" 		 => $comunidad['condicion'],
							"id_comunidad" 		 => $comunidad['id_comunidad']
						);
						
			return $datos;
		}
		//archivos
		public function existeArchivoMiembro($idMiembro,$cti_vitae_miembro) {
	  		$conexion = Conectar::conexion();
		    $sql="SELECT * from t_archivos_personas where id_miembro ='$idMiembro' and cti_vitae_miembro=1";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    if ($datos != '') {
		      return "existeA";
		    } else {
		      return "noexisteA";
		    }
		    $query->close();
		}
		public function agregarDatosArchivosMiembro($datos) {
			$conexion = Conectar::conexion();
		    $sql      = "INSERT INTO   t_archivos_personas (id_miembro,
													nombre,
													ruta,
													tipo,
													ext,
													nombre_original,
													cti_vitae_miembro)
			                 VALUES (?,?,?,?,?,?,?)";
			$query = $conexion->prepare($sql);
		    $query->bind_param("isssssi", $datos['idMiembro'], 
								 			$datos['nombre'],
								 			$datos['ruta'],
								 			$datos['tipo'],
								 			$datos['ext'],
								 			$datos['nombre_original'],
								 			$datos['cti_vitae_miembro']);
			$respuesta = $query->execute();
		    if ($respuesta) {
		    	return $datos['idMiembro'];
		    } else {
		    	return 0;
		    }
		    $query->close();
	  	}
	  	public function obtenerArchivoMiembro($idMiembro,$cti_vitae_miembro) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_archivos,
		                        nombre,
		                        ruta,
		                        tipo,
		                        nombre_original
		                  FROM  t_archivos_personas
		                 WHERE  id_miembro ='$idMiembro' and cti_vitae_miembro ='$cti_vitae_miembro'";
		  

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
		            
		              <a href="' . '../archivos/miembro/' . $datos['nombre'] . '" target="_blank">
		                <i class="fas fa-file-alt" style="font-size:40px;color:#138496;"></i>
		              </a>
		              <i class="fas fa-trash-alt" style="position: absolute;margin: -10px 0 0 0px; color:#C82333;cursor:pointer;" 
		                onclick="eliminarArchivoMiembro('.$datos['id_archivos'].')">
		              </i>
		            ';
		      return $cadena;
		    }
  		}
  		// para despues de eliminar cargue info por medio de ajax cualquier archivo 
  		public function obtenerIdMiembro($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT id_miembro FROM t_archivos_personas 
		    			  where id_archivos='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos = mysqli_fetch_array($result);
		    return $datos['id_miembro'];
	  	}
	  	public function eliminarArchivo($idArchivo) {
			$conexion = Conectar::conexion();
		    $sql      = "SELECT nombre,ruta FROM t_archivos_personas 
		    			  where id_archivos ='$idArchivo'";
		    $result = mysqli_query($conexion, $sql);
			$datos  = mysqli_fetch_array($result);
		    if (file_exists("../../../archivos/miembro/" . $datos['nombre'])) {
		      if (unlink("../../../archivos/miembro/" . $datos['nombre'])) {
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
		public function estatus($idMiembro,$estatus) {
			$conexion = Conectar::conexion();
			$sql = "UPDATE t_miembros 
					   SET estatus = ? 
					 WHERE id_miembro = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param("ii", $estatus,$idMiembro);
			$respuesta = $query->execute();
			$query->close();
			
			return $respuesta;
	  	}
	} // end class

 ?>