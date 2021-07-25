$(document).ready(function(){
	$('#tablaCoordinador').load("coordinador/tablaCoordinador.php");
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
    $('.coordinadorForm').click(function(){
        $("#frmCoordinador")[0].reset();
    });
});

function agregarCoordinador() {
  $.ajax({
    type: "POST",
    data: $('#frmCoordinador').serialize(),
    url: "../procesos/coordinador/agregarCoordinador.php",
    success: function(respuesta) {
      respuesta = respuesta.trim();
      if (respuesta == 1) {
      	$("#frmCoordinador")[0].reset();
        $('#tablaCoordinador').load("coordinador/tablaCoordinador.php");
        swal("Guardado con éxito!", "", "success");
      } else if(respuesta == 3) {
        swal(":(","Solo se puede agregar datos de un coordinador!","info");
      } else {
        swal(":(", "No se pudo guardar!", "error");
      }
    }
  });
  return false;
} // fin agregarCoordinador()

function actualizarCoordinador() {
  $.ajax({
    type: "POST",
    data: $('#frmCoordinadorActualizar').serialize(),
    url: "../procesos/coordinador/actualizarCoordinador.php",
    success: function(respuesta) {
      respuesta = respuesta.trim();
      if (respuesta > 0) {
        $('#tablaCoordinador').load("coordinador/tablaCoordinador.php");
        swal("Guardado con éxito!", "", "success");
      } else {
        swal(":(", "No se pudo guardar!", "error");
      }
    }
  });
  return false;
} // fin actualizarCoordinador()

function obtenerDatosCoordinador(idCoordinador) {
  $.ajax({
    type: "POST",
    data: "idCoordinador=" + idCoordinador,
    url: "../procesos/coordinador/obtenerDatosCoordinador.php",
    success: function(respuesta) {
      respuesta = jQuery.parseJSON(respuesta);
      $('#idCoordinador').val(respuesta['idCoordinador']);
      $('#dniU').val(respuesta['dni']);
      $('#nombreU').val(respuesta['nombre']);
      $('#apellidosU').val(respuesta['apellidos']);
      $('#telefonoU').val(respuesta['telefono']);
      $('#cargoU').val(respuesta['cargo']);
      $('#correoU').val(respuesta['correo']);
      $('#enlace_cti_vitaeU').val(respuesta['enlace_cti_vitae']);
      $('#calif_renacytU').val(respuesta['calif_renacyt']);
      $('#grupoU').val(respuesta['grupo']);
      $('#nivelCoordinadorU').val(respuesta['nivel']);
      $('#codigo_orcidU').val(respuesta['codigo_orcid']);
      $('#scopusIdU').val(respuesta['scopusId']);
      $('#tematicasU').val(respuesta['tematicas']);
      $('#categoriaU').val(respuesta['categoria']);
      $('#dedicacionU').val(respuesta['dedicacion']);
      $('#comunidadU').val(respuesta['id_comunidad']);
      
    }
  });
  return false;
} // fin obtenerDatosCoordinador()	

// archivos modales
function obtenerIdCoordinador(idCoordinador){
    $('.idCoordinador').val(idCoordinador);
    obtenerArchivoCoordinador(idCoordinador);
}
function insertarArchivoCoordinador(){
    if ($('#cti_vitae_coordinador').val() == "") {
        swal(":0",'Selecciona un archivo',"info");
        return false;
    }
    if ($('#cti_vitae_coordinador').val() !== "") {
        var archivoInput = document.getElementById('cti_vitae_coordinador');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf)$/i;
        if (!extPermitidas.exec(archivoRuta)) {
            swal(":0",'Formato archivo permitido .pdf',"info");
            archivoInput.value = '';
            return false;
        }
    }
    var formData = new FormData(document.getElementById("frmArchivoCoordinador"));
    $.ajax({
        url:"../procesos/coordinador/archivos/agregarArchivoCoordinador.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(r) {
            if(r > 0){
                id = r;
                obtenerArchivoCoordinador(id);
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

function obtenerArchivoCoordinador(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"../procesos/coordinador/archivos/obtenerArchivoCoordinador.php",
        success:function(r){
            $("#mostrarArchivosCtiVitaeCoordinador").html(r);
        }
    });
} // fin obtenerArchivoCoordinador()

function eliminarArchivoCoordinador(idArchivo) {
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
            url:"../procesos/coordinador/archivos/eliminarArchivoCoordinador.php",
            success:function(r){
                if(r > 0){
                    obtenerArchivoCoordinador(r);
                    swal("!Eliminado con exito¡",":D","info");
                } else{
                    swal("!Error no se pudo eliminar¡",":(","error");
                }
            }
        });
      }
    });
} // fin eliminarArchivoSolicitud()

function estatusCoordinador(idCoordinador,estatus) {
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
        data: "idCoordinador=" + idCoordinador + "&estatus=" + estatus,
        url:"../procesos/coordinador/estatus.php",
        success:function(respuesta) {
          if (respuesta > 0) {
            $('#tablaCoordinador').load("coordinador/tablaCoordinador.php");
            swal("Genial!", "Se ha desactivado!", "success");
          } else {
            swal(":(", "No se pudo desactivar!", "error");
          }
        }
      });
    } 
  });
}