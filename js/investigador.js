$(document).ready(function(){
	$('#tablaInvestigador').load("investigador/tablaInvestigador.php");
	var fechaA = new Date();
    var yyyy = fechaA.getFullYear();
	$(".date_campo").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1900:' + yyyy,
      dateFormat: "yy-mm-dd"
    });
    $(".form-readonly").keydown(function(e){
      e.preventDefault();
    });
    $('.investigadorForm').click(function(){
        $("#frmInvestigador")[0].reset();
    });
});

function agregarInvestigador() {
  $.ajax({
    type: "POST",
    data: $('#frmInvestigador').serialize(),
    url: "../procesos/investigador/agregarInvestigador.php",
    success: function(respuesta) {
      respuesta = respuesta.trim();
      if (respuesta > 0) {
      	$("#frmInvestigador")[0].reset();
        $('#tablaInvestigador').load("investigador/tablaInvestigador.php");
        swal("Guardado con éxito!", "", "success");
      } else {
        swal(":(", "No se pudo guardar!", "error");
      }
    }
  });
  return false;
} // fin agregarInvestigador()

function actualizarInvestigador() {
  $.ajax({
    type: "POST",
    data: $('#frmInvestigadorActualizar').serialize(),
    url: "../procesos/investigador/actualizarInvestigador.php",
    success: function(respuesta) {
      respuesta = respuesta.trim();
      if (respuesta > 0) {
        $('#tablaInvestigador').load("investigador/tablaInvestigador.php");
        swal("Guardado con éxito!", "", "success");
      } else {
        swal(":(", "No se pudo guardar!", "error");
      }
    }
  });
  return false;
} // fin actualizarComunidad()

function obtenerDatosInvestigador(idInvestigador) {
  $.ajax({
    type: "POST",
    data: "idInvestigador=" + idInvestigador,
    url: "../procesos/investigador/obtenerDatosInvestigador.php",
    success: function(respuesta) {
      respuesta = jQuery.parseJSON(respuesta);
      $('#idInvestigador').val(respuesta['idInvestigador']);
      $('#dniUIn').val(respuesta['dni']);
      $('#nombreUIn').val(respuesta['nombre']);
      $('#apellidosUIn').val(respuesta['apellidos']);
      $('#telefonoUIn').val(respuesta['telefono']);
      $('#cargoUIn').val(respuesta['cargo']);
      $('#correoUIn').val(respuesta['correo']);
      $('#enlace_cti_vitaeU').val(respuesta['enlace_cti_vitae']);
      $('#calif_renacytUIn').val(respuesta['calif_renacyt']);
      $('#grupoUIn').val(respuesta['grupo']);
      $('#nivelInvestigadorUIn').val(respuesta['nivel']);
      $('#codigo_orcidUIn').val(respuesta['codigo_orcid']);
      $('#scopusIdUIn').val(respuesta['scopusId']);
      $('#claseUIn').val(respuesta['clase']);
      $('#titulo_especialidadUIn').val(respuesta['titulo_especialidad']);
      $('#claseUIn').val(respuesta['clase']);
      $('#grado_academicoUIn').val(respuesta['grado_academico']);
      $('#areaUIn').val(respuesta['area']);
      $('#notasUIn').val(respuesta['notas']);
      $('#tipo_investigadorUIn').val(respuesta['tipo_investigador']);
      $('#especificacionUIn').val(respuesta['especificacion']);
      $('#comunidadUIn').val(respuesta['id_comunidad']);
      
    }
  });
  return false;
} // fin obtenerDatosInvestigador()	

// archivos modales
function obtenerIdInvestigador(idInvestigador){
    $('.idInvestigador').val(idInvestigador);
    obtenerArchivoInvestigador(idInvestigador);
}
function insertarArchivoInvestigador(){
    if ($('#cti_vitae_investigador').val() == "") {
        swal(":0",'Selecciona un archivo',"info");
        return false;
    }
    if ($('#cti_vitae_investigador').val() !== "") {
        var archivoInput = document.getElementById('cti_vitae_investigador');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf)$/i;
        if (!extPermitidas.exec(archivoRuta)) {
            swal(":0",'Formato archivo permitido .pdf',"info");
            archivoInput.value = '';
            return false;
        }
    }
    var formData = new FormData(document.getElementById("frmArchivoInvestigador"));
    $.ajax({
        url:"../procesos/investigador/archivos/agregarArchivoInvestigador.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(r) {
            if(r > 0){
                id = r;
                obtenerArchivoInvestigador(id);
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

function obtenerArchivoInvestigador(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"../procesos/investigador/archivos/obtenerArchivoInvestigador.php",
        success:function(r){
            $("#mostrarArchivosCtiVitaeInvestigador").html(r);
        }
    });
} // fin obtenerArchivoCoordinador()

function eliminarArchivoInvestigador(idArchivo) {
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
            url:"../procesos/investigador/archivos/eliminarArchivoInvestigador.php",
            success:function(r){
                if(r > 0){
                    obtenerArchivoInvestigador(r);
                    swal("!Eliminado con exito¡",":D","info");
                } else{
                    swal("!Error no se pudo eliminar¡",":(","error");
                }
            }
        });
      }
    });
} // fin eliminarArchivoSolicitud()

function estatusInvestigador(idInvestigador,estatus) {
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
        data: "idInvestigador=" + idInvestigador + "&estatus=" + estatus,
        url:"../procesos/investigador/estatus.php",
        success:function(respuesta) {
          if (respuesta > 0) {
            $('#tablaInvestigador').load("investigador/tablaInvestigador.php");
            swal("Genial!", "Se ha desactivado!", "success");
          } else {
            swal(":(", "No se pudo desactivar!", "error");
          }
        }
      });
    } 
  });
}