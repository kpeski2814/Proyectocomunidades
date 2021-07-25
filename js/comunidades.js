$(document).ready(function(){
	$('#tablaComunidades').load("comunidades/tablaComunidades.php");
	var fechaA = new Date();
    var yyyy = fechaA.getFullYear();
	$(".date_campo").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1990:' + yyyy,
      dateFormat: "yy-mm-dd"
    });
    $(".form-readonly").keydown(function(e){
      e.preventDefault();
    });

    // funciones menu registro 
    $("#comunidad-wrap").show();
    $("#coordinador-wrap").hide();
    $("#investigador-wrap").hide();
    $("#estudiantes-wrap").hide();
    $("#egresados-wrap").hide();
    $("#miembros-wrap").hide();
    $("#btn-comunidad").click(function(){
        $("#comunidad-wrap").show();
        $("#coordinador-wrap").hide();
        $("#investigador-wrap").hide();
        $("#estudiantes-wrap").hide();
        $("#egresados-wrap").hide();
        $("#miembros-wrap").hide();
    });
    $("#btn-coordinador").click(function(){
        $("#coordinador-wrap").show();
        $("#comunidad-wrap").hide();
        $("#investigador-wrap").hide();
        $("#estudiantes-wrap").hide();
        $("#egresados-wrap").hide();
        $("#miembros-wrap").hide();
    });
    $("#btn-investigador").click(function(){
        $("#investigador-wrap").show();
        $("#comunidad-wrap").hide();
        $("#coordinador-wrap").hide();
        $("#estudiantes-wrap").hide();
        $("#egresados-wrap").hide();
        $("#miembros-wrap").hide();
    });
    $("#btn-estudiante").click(function(){
        $("#estudiantes-wrap").show();
        $("#investigador-wrap").hide();
        $("#comunidad-wrap").hide();
        $("#coordinador-wrap").hide();
        $("#egresados-wrap").hide();
        $("#miembros-wrap").hide();
    });
    $("#btn-egresado").click(function(){
        $("#estudiantes-wrap").hide();
        $("#investigador-wrap").hide();
        $("#comunidad-wrap").hide();
        $("#coordinador-wrap").hide();
        $("#egresados-wrap").show();
        $("#miembros-wrap").hide();
    });
    $("#btn-miembro").click(function(){
        $("#estudiantes-wrap").hide();
        $("#investigador-wrap").hide();
        $("#comunidad-wrap").hide();
        $("#coordinador-wrap").hide();
        $("#egresados-wrap").hide();
        $("#miembros-wrap").show();
    });
    // end funciones menu registro

    $('.comunidadForm').click(function(){
        $("#frmComunidad")[0].reset();
    });

});

function agregarComunidad() {
  $.ajax({
    type: "POST",
    data: $('#frmComunidad').serialize(),
    url: "../procesos/comunidad/agregarComunidad.php",
    success: function(respuesta) {

        respuesta = respuesta.trim();
        if (respuesta == 1) {
            $("#frmComunidad")[0].reset();
            swal("Guardado con éxito!", "", "success").then(function() {
                    window.location = location.href;
                    $('#tablaComunidades').load("comunidades/tablaComunidades.php");
            });
        } else if(respuesta == 3) {
            swal(":(", "Solo se puede agregar una comunidad por usuario!", "info");
        } else {
            swal(":(", "No se pudo guardar!", "error");
        }
    }
  });
  return false;
} // fin agregarComunidad()

function actualizarComunidad() {
  $.ajax({
    type: "POST",
    data: $('#frmComunidadActualizar').serialize(),
    url: "../procesos/comunidad/actualizarComunidad.php",
    success: function(respuesta) {
      respuesta = respuesta.trim();
      if (respuesta > 0) {
        swal("Guardado con éxito!", "", "success").then(function() {
                window.location = location.href;
                $('#tablaComunidades').load("comunidades/tablaComunidades.php");
        });
      } else {
        swal(":(", "No se pudo guardar!", "error");
      }
    }
  });
  return false;
} // fin actualizarComunidad()

function obtenerDatosComunidad(idComunidad) {
  $.ajax({
    type: "POST",
    data: "idComunidad=" + idComunidad,
    url: "../procesos/comunidad/obtenerDatosComunidad.php",
    success: function(respuesta) {
      respuesta = jQuery.parseJSON(respuesta);
      $('#idComunidad').val(respuesta['idComunidad']);
      $('#cod_regU').val(respuesta['cod_reg']);
      $('#denominacionU').val(respuesta['denominacion']);
      $('#tipo_comunidad_idU').val(respuesta['tipo_comunidad_id']);
      $('#facultad_idU').val(respuesta['facultad_id']);
      $('#daniU').val(respuesta['dani']);
      $('#financiamientoU').val(respuesta['financiamiento']);
      $('#num_registroU').val(respuesta['num_registro']);
      $('#facebookU').val(respuesta['facebook']);
      $('#pag_webU').val(respuesta['pag_web']);
      $('#date_createdU').val(respuesta['date_created']);
      $('#linea_invU').val(respuesta['linea_inv']);
      $('#fin_no_institucionalU').val(respuesta['fin_no_institucional']);
      $('#id_facultadU').val(respuesta['idFacultad']);
    }
  });
  return false;
} // fin obtenerDatosComunidad()	

function obtenerIdComunidad(idComunidad){
    $('.idComunidad').val(idComunidad);
    obtenerArchivoSolicitud(idComunidad);
    obtenerArchivoResolucionVrin(idComunidad);
    obtenerArchivoResolucionDecanal(idComunidad);
    obtenerArchivoProduccionCientifica(idComunidad);
    obtenerArchivoTipoDocumentoProduccion(idComunidad);
}
function insertarArchivoSolicitud(){
    if ($('#solicitud').val() == "") {
        swal(":0",'Selecciona un archivo',"info");
        return false;
    }
    if ($('#solicitud').val() !== "") {
        var archivoInput = document.getElementById('solicitud');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf)$/i;
        if (!extPermitidas.exec(archivoRuta)) {
            swal(":0",'Formato archivo permitido .pdf',"info");
            archivoInput.value = '';
            return false;
        }
    }
    var formData = new FormData(document.getElementById("frmArchivoSolicitud"));
    $.ajax({
        url:"../procesos/comunidad/archivos/agregarArchivoSolicitud.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(r) {
            if(r > 0){
                id = r;
                obtenerArchivoSolicitud(id);
                swal(":D","Agregadó con éxito :D","success");
            } else if (r == "E") {
                swal(":(","Ya existe un archivo agregado :(","error");
            } else{
                swal(":(","Falló al agregar :(","error");
            }
        }
    });
    return false;
} // fin insertarArchivoSolicitud()

function obtenerArchivoSolicitud(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"../procesos/comunidad/archivos/obtenerArchivoSolicitud.php",
        success:function(r){
            $("#mostrarArchivosSolicitud").html(r);
        }
    });
} // fin obtenerArchivoSolicitud()

function eliminarArchivoSolicitud(idArchivo) {
    swal({
      title: "¿Seguro de eliminar?",
      text: "!Una vez eliminado no podra recuperarse¡",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
            type:"POST",
            data:"idArchivo=" + idArchivo,
            url:"../procesos/comunidad/archivos/eliminarArchivoSolicitud.php",
            success:function(r){
                if(r > 0){
                    obtenerArchivoSolicitud(r);
                    swal("!Eliminado con exito¡",":D","info");
                } else{
                    swal("!Error no se pudo eliminar¡",":(","error");
                }
            }
        });
      }
    });
} // fin eliminarArchivoSolicitud()

function insertarArchivoResolucionVrin(){
    if ($('#res_vrin').val() == "") {
        swal(":0",'Selecciona un archivo',"info");
        return false;
    }
    if ($('#res_vrin').val() !== "") {
        var archivoInput = document.getElementById('res_vrin');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf)$/i;
        if (!extPermitidas.exec(archivoRuta)) {
            swal(":0",'Formato archivo permitido .pdf',"info");
            archivoInput.value = '';
            return false;
        }
    }
    var formData = new FormData(document.getElementById("frmArchivoResolucionVrin"));
    $.ajax({
        url:"../procesos/comunidad/archivos/agregarArchivoResolucionVrin.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(r) {
            if(r > 0){
                id = r;
                obtenerArchivoResolucionVrin(id);
                swal(":D","Agregadó con éxito :D","success");
            } else if (r == "E") {
                swal(":(","Ya existe un archivo agregado :(","error");
            } else{
                swal(":(","Falló al agregar :(","error");
            }
        }
    });
    return false;
} // fin insertarArchivoResolucionVrin()
function obtenerArchivoResolucionVrin(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"../procesos/comunidad/archivos/obtenerArchivoResolucionVrin.php",
        success:function(r){
            $("#mostrarArchivosResolucionVrin").html(r);
        }
    });
} // fin obtenerArchivoResolucionVrin()

function eliminarArchivoResolucionVrin(idArchivo) {
    swal({
      title: "¿Seguro de eliminar?",
      text: "!Una vez eliminado no podra recuperarse¡",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
            type:"POST",
            data:"idArchivo=" + idArchivo,
            url:"../procesos/comunidad/archivos/eliminarArchivoResolucionVrin.php",
            success:function(r){
                if(r > 0){
                    obtenerArchivoResolucionVrin(r);
                    swal("!Eliminado con exito¡",":D","info");
                } else{
                    swal("!Error no se pudo eliminar¡",":(","error");
                }
            }
        });
      }
    });
} // fin eliminarArchivoResolucionVrin()

function insertarArchivoResolucionDecanal(){
    if ($('#res_decanal').val() == "") {
        swal(":0",'Selecciona un archivo',"info");
        return false;
    }
    if ($('#res_decanal').val() !== "") {
        var archivoInput = document.getElementById('res_decanal');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf)$/i;
        if (!extPermitidas.exec(archivoRuta)) {
            swal(":0",'Formato archivo permitido .pdf',"info");
            archivoInput.value = '';
            return false;
        }
    }
    var formData = new FormData(document.getElementById("frmArchivoResolucionDecanal"));
    $.ajax({
        url:"../procesos/comunidad/archivos/agregarArchivoResolucionDecanal.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(r) {
            if(r > 0){
                id = r;
                obtenerArchivoResolucionDecanal(id);
                swal(":D","Agregadó con éxito :D","success");
            } else if (r == "E") {
                swal(":(","Ya existe un archivo agregado :(","error");
            } else{
                swal(":(","Falló al agregar :(","error");
            }
        }
    });
    return false;
} // fin insertarArchivoResolucionDecanal()

function obtenerArchivoResolucionDecanal(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"../procesos/comunidad/archivos/obtenerArchivoResolucionDecanal.php",
        success:function(r){
            $("#mostrarArchivosResolucionDecanal").html(r);
        }
    });
} // fin obtenerArchivoResolucionDecanal()

function eliminarArchivoResolucionDecanal(idArchivo) {
    swal({
      title: "¿Seguro de eliminar?",
      text: "!Una vez eliminado no podra recuperarse¡",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
            type:"POST",
            data:"idArchivo=" + idArchivo,
            url:"../procesos/comunidad/archivos/eliminarArchivoResolucionDecanal.php",
            success:function(r){
                if(r > 0){
                    obtenerArchivoResolucionDecanal(r);
                    swal("!Eliminado con exito¡",":D","info");
                } else{
                    swal("!Error no se pudo eliminar¡",":(","error");
                }
            }
        });
      }
    });
} // fin eliminarArchivoResolucionVrin()

function insertarArchivoProduccionCientifica(){
    if ($('#prod_cientifica').val() == "") {
        swal(":0",'Selecciona un archivo',"info");
        return false;
    }
    if ($('#prod_cientifica').val() !== "") {
        var archivoInput = document.getElementById('prod_cientifica');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf)$/i;
        if (!extPermitidas.exec(archivoRuta)) {
            swal(":0",'Formato archivo permitido .pdf',"info");
            archivoInput.value = '';
            return false;
        }
    }
    var formData = new FormData(document.getElementById("frmArchivoProduccionCientifica"));
    $.ajax({
        url:"../procesos/comunidad/archivos/agregarArchivoProduccionCientifica.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(r) {
            if(r > 0){
                id = r;
                obtenerArchivoProduccionCientifica(id);
                swal(":D","Agregadó con éxito :D","success");
            } else if (r == "E") {
                swal(":(","Ya existe un archivo agregado :(","error");
            } else{
                swal(":(","Falló al agregar :(","error");
            }
        }
    });
    return false;
} // fin insertarArchivoProduccionCientifica()

function obtenerArchivoProduccionCientifica(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"../procesos/comunidad/archivos/obtenerArchivoProduccionCientifica.php",
        success:function(r){
            $("#mostrarArchivosProduccionCientifica").html(r);
        }
    });
} // fin obtenerArchivoProduccionCientifica()

function eliminarArchivoProduccionCientifica(idArchivo) {
    swal({
      title: "¿Seguro de eliminar?",
      text: "!Una vez eliminado no podra recuperarse¡",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
            type:"POST",
            data:"idArchivo=" + idArchivo,
            url:"../procesos/comunidad/archivos/eliminarArchivoProduccionCientifica.php",
            success:function(r){
                if(r > 0){
                    obtenerArchivoProduccionCientifica(r);
                    swal("!Eliminado con exito¡",":D","info");
                } else{
                    swal("!Error no se pudo eliminar¡",":(","error");
                }
            }
        });
      }
    });
} // fin eliminarArchivoProduccionCientifica()

function insertarArchivoTipoDocumentoProduccion(){
    if ($('#tipo_archivo_prod').val() == "") {
        swal(":0",'Selecciona un archivo',"info");
        return false;
    }
    if ($('#tipo_archivo_prod').val() !== "") {
        var archivoInput = document.getElementById('tipo_archivo_prod');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf)$/i;
        if (!extPermitidas.exec(archivoRuta)) {
            swal(":0",'Formato archivo permitido .pdf',"info");
            archivoInput.value = '';
            return false;
        }
    }
    var formData = new FormData(document.getElementById("frmArchivoTipoDocumentoProduccion"));
    $.ajax({
        url:"../procesos/comunidad/archivos/agregarArchivoTipoDocumentoProduccion.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(r) {
            if(r > 0){
                id = r;
                obtenerArchivoTipoDocumentoProduccion(id);
                swal(":D","Agregadó con éxito :D","success");
            } else if (r == "E") {
                swal(":(","Ya existe un archivo agregado :(","error");
            } else{
                swal(":(","Falló al agregar :(","error");
            }
        }
    });
    return false;
} // fin insertarArchivoTipoDocumentoProduccion()

function obtenerArchivoTipoDocumentoProduccion(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"../procesos/comunidad/archivos/obtenerArchivoTipoDocumentoProduccion.php",
        success:function(r){
            $("#mostrarArchivosTipoDocumentosProduccion").html(r);
        }
    });
} // fin obtenerArchivoTipoDocumentoProduccion()

function eliminarArchivoTipoDocumentoProduccion(idArchivo) {
    swal({
      title: "¿Seguro de eliminar?",
      text: "!Una vez eliminado no podra recuperarse¡",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
            type:"POST",
            data:"idArchivo=" + idArchivo,
            url:"../procesos/comunidad/archivos/eliminarArchivoTipoDocumentoProduccion.php",
            success:function(r){
                if(r > 0){
                    obtenerArchivoTipoDocumentoProduccion(r);
                    swal("!Eliminado con exito¡",":D","info");
                } else{
                    swal("!Error no se pudo eliminar¡",":(","error");
                }
            }
        });
      }
    });
} // fin eliminarArchivoTipoDocumentoProduccion()

function estatusComunidad(idComunidad,estatus) {
	swal({
		title: "Deseas desactivar?",
		text: "Click en continuar!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data: "idComunidad=" + idComunidad + "&estatus=" + estatus,
				url:"../procesos/comunidad/estatus.php",
				success:function(respuesta) {
					if (respuesta > 0) {
						$('#tablaComunidades').load("comunidades/tablaComunidades.php");
						swal("Genial!", "Se ha desactivado!", "success");
					} else {
						swal(":(", "No se pudo desactivar!", "error");
					}
				}
			});
		} 
	});
}
