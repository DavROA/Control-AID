$(document).ready(function() {
    var opcion;
     var dataTablePersonal = $('#personales').DataTable({
       select:true,
       "fnCreatedRow": function(nRow, aData, iDataIndex) {
         $(nRow).attr('id', aData[0]);
       },
       'responsive'   : 'true',
       'serverSide'   : 'true', 
       'processing'   : 'true',
       'paging'       : 'true',
       'order'        : [],
       'ajax'         : {
         'url'        : '../../Modelo/personales_obtener.php',
         'type'       : 'POST',
       },
       "aoColumnDefs" : [{
           "bSortable": false,
           "aTargets" : [2]
         },
       ],
       "language": {
         "lengthMenu"  : "Mostrar _MENU_ registros",
         "zeroRecords" : "No se encontraron resultados",
         "info"        : "Registros del _START_ al _END_ de un total de _TOTAL_ registros.",
         "infoEmpty"   : "Registros del 0 al 0 de un total de 0 registros.",
         "infoFiltered": "(Filtrado de un total de _MAX_ registros.)",
         "sSearch"     : "Buscar:",
         "oPaginate"   : {
             "sFirst"  : "Primero",
             "sLast"   :"Último",
             "sNext"   :"Siguiente",
             "sPrevious": "Anterior"
          },
          "sProcessing":"Procesando...",
     }
     });
// ******************************* Agregar empleado / personal  ***********************

     $(document).on('submit', '#agregarPersonal', function(e) {
      e.preventDefault();
      var per_nombre       = $('#per_nombre').val();
      var per_apellidos    = $('#per_apellidos').val();
      var per_direccion    = $('#per_direccion').val();
      var per_colonia      = $('#per_colonia').val();
      var per_municipio    = $('#per_municipio').val();
      var per_telefono     = $('#per_telefono').val();
      var per_emergencia   = $('#per_emergencia').val();
      var per_sexo         = $('#per_sexo').val();
      var per_estadocivil  = $('#per_estadocivil').val();
      var per_escolaridad  = $('#per_escolaridad').val();
      var per_sucursal     = $('#per_sucursal').val();
      var per_puesto       = $('#per_puesto').val();
      var per_fechaalta    = $('#per_fechaalta').val();
      var per_manejaauto   = $('#per_manejaauto').val();
      var per_tipo         = $('#per_tipo').val();
      var per_subtipo      = $('#per_subtipo').val();
      var per_sueldobase   = $('#per_sueldobase').val();
      var per_sueldoimss   = $('#per_sueldoimss').val();
      var per_hraEntrada   = $('#per_hraEntrada').val();
      var per_salidaComida = $('#per_salidaComida').val();
      var per_entradaComida= $('#per_entradaComida').val();
      var per_hraSalida    = $('#per_hraSalida').val();
      var per_correo       = $('#per_correo').val();

   
     if ( per_nombre === '' || per_apellidos === ''|| per_direccion == '' || per_colonia ==='' || per_municipio =='' || per_telefono == '' || per_emergencia =='' || per_sexo == ''
          || per_estadocivil == ''|| per_escolaridad == ''|| per_sucursal == ''|| per_puesto == ''|| per_fechaalta == ''|| per_manejaauto == ''|| per_tipo == ''|| per_subtipo == ''
          || per_sueldobase  == ''|| per_sueldoimss  == ''|| per_hraEntrada == ''|| per_hraEntrada == ''|| per_salidaComida == ''|| per_entradaComida == ''|| per_hraSalida == ''
          || per_correo == '') {
          Swal.fire({
            icon    : 'error',
            title   : 'Oops...', 
            text    : 'No ingresaste todos los campos!',
          });
      } else { 
        $.ajax({
          url: "../../Modelo/personal_agregar.php",
          type: "post",
          data: {
            per_nombre          : per_nombre,     
            per_apellidos       : per_apellidos,
            per_direccion       : per_direccion,
            per_colonia         : per_colonia,
            per_municipio       : per_municipio,
            per_telefono        : per_telefono,
            per_emergencia      : per_emergencia,
            per_sexo            : per_sexo,
            per_estadocivil     : per_estadocivil,
            per_escolaridad     : per_escolaridad,
            per_sucursal        : per_sucursal,
            per_puesto          : per_puesto,
            per_fechaalta       : per_fechaalta,
            per_manejaauto      : per_manejaauto,
            per_tipo            : per_tipo,
            per_subtipo         : per_subtipo,
            per_sueldobase      : per_sueldobase,
            per_sueldoimss      : per_sueldoimss,
            per_hraEntrada      : per_hraEntrada,
            per_salidaComida    : per_salidaComida,
            per_entradaComida   : per_entradaComida,
            per_hraSalida       : per_hraSalida,
            per_correo          : per_correo,
          },
          success: function(data) {
            dataTablePersonal.ajax.reload(null, false);
            var json      = JSON.parse(data);
            var status    = json.status;
            if (status    == 'true') {
              //$('#AgregarCliente').modal('hide');
                $("#agregarPersonal").trigger("reset");    
              Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Personal registrado',
                showConfirmButton: false,
                timer: 1500,    
              })	
            } else {
            }
          }
        });
      }
    });
  
  //****************************************************************** */
      // LIMPIAR CAMPOS
      //$("#limpiarCampos").click(function(){
        //$("#agregarCliente").trigger("reset");    
        // opcion    = 1; //alta           
        // art_id    = null;
        
      //});


// ******************************* Desactivar empleado / personal  ***********************
$(document).on('click', '.deleteBtn', function(event) {
  var table = $('#personales').DataTable();
  event.preventDefault();
  var id = $(this).data('id');


  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton : 'btn btn-success', 
      cancelButton  : 'btn btn-danger'
    },
    buttonsStyling: false 
  })
  
  Swal.fire({
    title             : '¿Estás seguro de desactivar el registro?',
    text              : "Para activarlo nuevamente comunicarte con el administrador.",
    icon              : 'warning',
    showCancelButton  : true,
    confirmButtonColor: '#3085d6',
    confirmButtonText : 'Sí',
    cancelButtonColor: '#d33',
    cancelButtonText  : 'Cancelar',
    reverseButtons    : true
  }).then((result) => {
    if (result.isConfirmed) {
        $.ajax({
            url       : "../../Modelo/personal_desactivar.php", 
            type      : "POST",
            datatype  : "json",    
            data:  { id     :id,
                     opcion :opcion},    
            success: function(data) {
              dataTablePersonal.ajax.reload(null, false);
            }
          });	
      swalWithBootstrapButtons.fire(
        'El registro desactivado',
        'El registro se ha desactivado correctamente.',
        'success'
      )
    } else if (
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelar',
        'El registro no se ha desactivado.',
        'error'
      )
    }
  })
})



});