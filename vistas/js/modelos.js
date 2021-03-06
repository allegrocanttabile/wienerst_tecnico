/*=============================================
CARGAR LA TABLA DINÁMICA DE PRODUCTOS
=============================================*/

// $.ajax({

//  url: "ajax/datatable-productos.ajax.php",
//  success:function(respuesta){

//    console.log("respuesta", respuesta);

//  }

// })

var perfilOculto = $("#perfilOculto").val();

$(".tablaModelos").DataTable({
  ajax: "ajax/datatable-modelos.ajax.php?perfilOculto=" + perfilOculto,
  deferRender: true,
  retrieve: true,
  processing: true,
  order: [[2, "desc"]],
  language: {
    sProcessing: "Procesando...",
    sLengthMenu: "Mostrar _MENU_ registros",
    sZeroRecords: "No se encontraron resultados",
    sEmptyTable: "Ningún dato disponible en esta tabla",
    sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
    sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0",
    sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
    sInfoPostFix: "",
    sSearch: "Buscar:",
    sUrl: "",
    sInfoThousands: ",",
    sLoadingRecords: "Cargando...",
    oPaginate: {
      sFirst: "Primero",
      sLast: "Último",
      sNext: "Siguiente",
      sPrevious: "Anterior"
    },
    oAria: {
      sSortAscending: ": Activar para ordenar la columna de manera ascendente",
      sSortDescending: ": Activar para ordenar la columna de manera descendente"
    }
  }
});

/*=============================================
EDITAR MODELO
=============================================*/
$(".tablaModelos").on("click", "button.btnEditarModelo", function() {
  var idModelo = $(this).attr("idModelo");

  var datos = new FormData();
  datos.append("idModelo", idModelo);

  $.ajax({
    url: "ajax/modelos.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta) {
      $("#editarIdModelo").val(respuesta["id"]);
      $("#editarModelo").val(respuesta["modelo_nombre"]);
    }
  });
});

/*=============================================
ELIMINAR MODELO
=============================================*/
$(".tablaModelos tbody").on("click", ".btnEliminarModelo", function() {
  var idModelo = $(this).attr("idModelo");

  swal({
    title: "¿Está seguro de borrar el modelo?",
    text: "¡Si no lo está puede cancelar la acción!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Si, borrar modelo!"
  }).then(function(result) {
    if (result.value) {
      window.location =
        "index.php?ruta=categorias-marcas-modelos&idModelo=" + idModelo;
    }
  });
});
