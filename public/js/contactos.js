$(document).ready(function () {
  $("#cargaTablaContactos").load("vistas/contactos/tablaContactos.php");
  $("#tablaContactosDT").DataTable("vistas/contactos/tablaContactos.php");

  $("#btnAgregarContacto").click(function () {
    agregarContacto();
  });

  $('#btnActualizarContacto').click(function(){
    actualizarContacto();
  });
});

function agregarContacto() {
  $.ajax({
    type: "POST",
    url: "procesos/contactos/agregarContacto.php",
    data: $("#frmAgregarContacto").serialize(),
    success: function (respuesta) {
      respuesta = respuesta.trim();
      if (respuesta == 1) {
        $("#frmAgregarContacto")[0].reset();
        $("#cargaTablaContactos").load("vistas/contactos/tablaContactos.php");
        swal(":D", "Se agrego exitosamente!", "success");
      } else {
        swal(":(", "No se pudo agregar!", "error");
      }
    },
  });
}

function actualizarContacto() {
  $.ajax({
    type: "POST",
    url: "procesos/contactos/actualizarContacto.php",
    data: $("#frmAgregarContactoU").serialize(),
    success: function (respuesta) {
      respuesta = respuesta.trim();
      if (respuesta == 1) {
        $("#cargaTablaContactos").load("vistas/contactos/tablaContactos.php");
        swal(":D", "Se edito exitosamente!", "success");
      } else {
        swal(":(", "No se pudo editar!", "error");
      }
    },
  });
}


function eliminarContacto(idContacto) {
  swal({
    title: "Estas seguro de eliminar este contacto?",
    text: "Una vez eliminado no podra ser recuperado!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "POST",
        data: "idContacto=" + idContacto,
        url: "procesos/contactos/eliminarContacto.php",
        success: function (respuesta) {
          respuesta = respuesta.trim();
          if (respuesta == 1) {
            $("#cargaTablaContactos").load("vistas/contactos/tablaContactos.php");
            swal(":D", "Se elimino exitosamente!", "success");
          } else {
            swal(":(", "No se pudo eliminar!", "error");
          }
        },
      });
    }
  });
}

function obtenerDatosContacto(idContacto) {
  $.ajax({
    type: "POST",
    data: "idContacto=" + idContacto,
    url: "procesos/contactos/obtenerDatosContacto.php",
    success:function(respuesta){
      respuesta = jQuery.parseJSON(respuesta);
      idCategoria = respuesta['id_categoria'];

      $('#nombresU').val(respuesta['nombres']);
      $('#apellidosU').val(respuesta['apellidos']);
      $('#telefonoU').val(respuesta['telefono']);
      $('#emailU').val(respuesta['email']);
      $('#idContactoU').val(respuesta['id_contacto']);
      $('#categoriasIdU').load("vistas/contactos/selectCategoriasUpdate.php?idCategoria=" + idCategoria);
      
    }
  })
}