$(document).ready(function(){
	$('#tablaMiembros').load("miembros/tablaMiembros.php");
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
    $('.miembroForm').click(function(){
        $("#frmMiembro")[0].reset();
    });
});

function agregarMiembro() {
  $.ajax({
    type: "POST",
    data: $('#frmMiembro').serialize(),
    url: "../procesos/miembros/agregarMiembro.php",
    success: function(respuesta) {
      respuesta = respuesta.trim();
      if (respuesta > 0) {
      	$("#frmMiembro")[0].reset();
        $('#tablaMiembros').load("miembros/tablaMiembros.php");
        swal("Guardado con éxito!", "", "success");
      } else {
        swal(":(", "No se pudo guardar!", "error");
      }
    }
  });
  return false;
} // fin agregarInvestigador()

function actualizarMiembro() {
  $.ajax({
    type: "POST",
    data: $('#frmMiembroActualizar').serialize(),
    url: "../procesos/miembros/actualizarMiembro.php",
    success: function(respuesta) {
      respuesta = respuesta.trim();
      if (respuesta > 0) {
        $('#tablaMiembros').load("miembros/tablaMiembros.php");
        swal("Guardado con éxito!", "", "success");
      } else {
        swal(":(", "No se pudo guardar!", "error");
      }
    }
  });
  return false;
} // fin actualizarComunidad()

function obtenerDatosMiembro(idMiembro) {
  $.ajax({
    type: "POST",
    data: "idMiembro=" + idMiembro,
    url: "../procesos/miembros/obtenerDatosMiembro.php",
    success: function(respuesta) {
      respuesta = jQuery.parseJSON(respuesta);
      $('#idMiembro').val(respuesta['idMiembro']);
      $('#tipo_doc_identidadMiU').val(respuesta['tipo_doc_identidad']);
      $('#no_docMiU').val(respuesta['no_doc']);
      $('#nombreMiU').val(respuesta['nombre']);
      $('#apellidosMiU').val(respuesta['apellidos']);
      $('#telefonoMiU').val(respuesta['telefono']);
      $('#correoMiU').val(respuesta['correo']);
      $('#afiliacionMiU').val(respuesta['afiliacion']);
      $('#tipo_miembroMiU').val(respuesta['tipo_miembro']);
      $('#facultadMiU').val(respuesta['facultad']);
      $('#codigo_estudianteMiU').val(respuesta['codigo_estudiante']);
      $('#condicionMiU').val(respuesta['condicion']);
      $('#comunidadMiU').val(respuesta['id_comunidad']);
    }
  });
  return false;
} // fin obtenerDatosInvestigador()	

// archivos modales
function obtenerIdMiembro(idMiembro){
    $('.idMiembro').val(idMiembro);
    obtenerArchivoMiembro(idMiembro);
}
function insertarArchivoMiembro(){
    if ($('#cti_vitae_miembro').val() == "") {
        swal(":0",'Selecciona un archivo',"info");
        return false;
    }
    if ($('#cti_vitae_miembro').val() !== "") {
        var archivoInput = document.getElementById('cti_vitae_miembro');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf)$/i;
        if (!extPermitidas.exec(archivoRuta)) {
            swal(":0",'Formato archivo permitido .pdf',"info");
            archivoInput.value = '';
            return false;
        }
    }
    var formData = new FormData(document.getElementById("frmArchivoMiembro"));
    $.ajax({
        url:"../procesos/miembros/archivos/agregarArchivoMiembro.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(r) {
            if(r > 0){
                id = r;
                obtenerArchivoMiembro(id);
                swal(":D","Agregadó con éxito :D","success");
            } else if (r == "E") {
                swal(":(","Ya existe un archivo agregado :(","error");
            } else{
                swal(":(","Falló al agregar :(","error");
            }
        }
    });
    return false;
} // fin insertarArchivoMiembro()

function obtenerArchivoMiembro(id){
    $.ajax({
        type:"POST",
        data:"id=" + id,
        url:"../procesos/miembros/archivos/obtenerArchivoMiembro.php",
        success:function(r){
            $("#mostrarArchivosCtiVitaeMiembro").html(r);
        }
    });
} // fin obtenerArchivoMiembro()

function eliminarArchivoMiembro(idArchivo) {
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
            url:"../procesos/miembros/archivos/eliminarArchivoMiembro.php",
            success:function(r){
                if(r > 0){
                    obtenerArchivoMiembro(r);
                    swal("!Eliminado con exito¡",":D","info");
                } else{
                    swal("!Error no se pudo eliminar¡",":(","error");
                }
            }
        });
      }
    });
} // fin eliminarArchivoMiembro()

function estatusMiembro(idMiembro,estatus) {
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
        data: "idMiembro=" + idMiembro + "&estatus=" + estatus,
        url:"../procesos/miembros/estatus.php",
        success:function(respuesta) {
          if (respuesta > 0) {
            $('#tablaMiembros').load("miembros/tablaMiembros.php");
            swal("Genial!", "Se ha desactivado!", "success");
          } else {
            swal(":(", "No se pudo desactivar!", "error");
          }
        }
      });
    } 
  });
}