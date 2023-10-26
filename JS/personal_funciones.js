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
//var fordata = new FormData(document.getElementById("agregarPersonal"));
//console.log(fordata);

     $(document).on('submit', '#agregarPersonal', function(e) {
      e.preventDefault();
      var per_nombre       = $('#per_nombre').val();
      var per_apellidos    = $('#per_apellidos').val();
      var per_direccion    = $('#per_direccion').val();
      var per_colonia      = $('#per_colonia').val();
      var per_municipio    = $('#per_municipio').val();
      var per_fechaNac    = $('#per_fechaNac').val();
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
     // var per_foto         = $('#foto').val();
     // var per_anverso       = $('#per_anverso').val();
     // var per_reverso       = $('#per_reverso').val();

   
     if ( per_nombre === '' || per_apellidos === ''|| per_direccion == '' || per_colonia ==='' || per_municipio =='' || per_telefono == '' || per_emergencia =='' || per_sexo == ''
          || per_estadocivil == ''|| per_escolaridad == ''|| per_sucursal == ''|| per_puesto == ''|| per_fechaalta == ''|| per_fechaalta == ''|| per_manejaauto == ''|| per_tipo == ''|| per_subtipo == ''
          || per_sueldobase  == ''|| per_sueldoimss  == ''|| per_hraEntrada == ''|| per_hraEntrada == ''|| per_salidaComida == ''|| per_entradaComida == ''|| per_hraSalida == ''
          || per_correo == '') {
          Swal.fire({
            icon    : 'error',
            title   : 'Oops...', 
            text    : 'No ingresaste todos los campos!',
          });
      } else { 
        var formData = new FormData(document.getElementById("agregarPersonal"));
        console.log(formData);
        $.ajax({
          url: "../../Modelo/personal_agregar.php",
          type: "post",
          dataType: "html",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: function(data) {
            dataTablePersonal.ajax.reload(null, false);
            var json      = JSON.parse(data);
            var status    = json.status;
            if (status    == 'true') {
              //$('#AgregarCliente').modal('hide');
                $("#agregarPersonal").trigger("reset");
               
                $("#X").remove();
                $("#img").remove();
                $("#X2").remove();
                $("#img2").remove();
                $("#X3").remove();
                $("#img3").remove();     
              Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Personal registrado',
                showConfirmButton: false,
                timer: 1500,    
              })	
              window.location.href = 'empleados.php';
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

$(document).ready(function () {
	//--------------------- SELECCIONAR FOTO EMPLEADO ---------------------
	$("#foto").on("change", function () {
		var uploadFoto = document.getElementById("foto").value;
    console.log(uploadFoto);
		var foto = document.getElementById("foto").files;
		var nav = window.URL || window.webkitURL;
		var contactAlert = document.getElementById('form_alert');

		if (uploadFoto != '') {
			var type = foto[0].type;
			var name = foto[0].name;
			if (type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png') {
				contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';
				$("#img").remove();
				$(".delPhoto").addClass('notBlock');
				$('#foto').val('');
				return false;
			} else {
				contactAlert.innerHTML = '';
				$("#img").remove();
				$(".delPhoto").removeClass('notBlock');
				var objeto_url = nav.createObjectURL(this.files[0]);
				$(".prevPhoto").append("<img id='img' src=" + objeto_url + ">");
				$(".upimg label").remove();

			}
		} else {
			alert("No selecciono foto");
			$("#img").remove();
		}
	});

	$('.delPhoto').click(function () {
		$('#foto').val('');
		$(".delPhoto").addClass('notBlock');
		$("#img").remove();

	});


});




$(document).ready(function () {

  /*IMAGEN ANVERSO*/
  $("#fotoAnverso").on("change", function () {
    var uploadFoto = document.getElementById("fotoAnverso").value;
    console.log(uploadFoto);

    var foto = document.getElementById("fotoAnverso").files;
    var nav = window.URL || window.webkitURL;
    var contactAlert = document.getElementById('form_alert2');

    if (uploadFoto != '') {
      var type = foto[0].type;
      var name = foto[0].name;
      if (type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png') {
        contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';
        $("#img2").remove();
        $(".delPhoto2").addClass('notBlock2');
        $('#fotoAnverso').val('');
        return false;
      } else {
        contactAlert.innerHTML = '';
        $("#img2").remove();
        $(".delPhoto2").removeClass('notBlock2');
        var objeto_url = nav.createObjectURL(this.files[0]);
        $(".prevPhoto2").append("<img id='img2' src=" + objeto_url + ">");
        $(".upimg2 label").remove();

      }
    } else {
      alert("No selecciono foto");
      $("#img2").remove();
    }
  });

  $('.delPhoto2').click(function () {
    $('#fotoAnverso').val('');
    $(".delPhoto2").addClass('notBlock2');
    $("#img2").remove();

  });

});











$(document).ready(function () {

  /*IMAGEN REVERSO*/
  $("#fotoReverso").on("change", function () {
    var uploadFoto = document.getElementById("fotoReverso").value;
    console.log(uploadFoto);

    var foto = document.getElementById("fotoReverso").files;
    var nav = window.URL || window.webkitURL;
    var contactAlert = document.getElementById('form_alert3');

    if (uploadFoto != '') {
      var type = foto[0].type;
      var name = foto[0].name;
      if (type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png') {
        contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';
        $("#img3").remove();
        $(".delPhoto3").addClass('notBlock3');
        $('#fotoReverso').val('');
        return false;
      } else {
        contactAlert.innerHTML = '';
        $("#img3").remove();
        $(".delPhoto3").removeClass('notBlock3');
        var objeto_url = nav.createObjectURL(this.files[0]);
        $(".prevPhoto3").append("<img id='img3' src=" + objeto_url + ">");
        $(".upimg3 label").remove();

      }
    } else {
      alert("No selecciono foto");
      $("#img3").remove();
    }
  });

  $('.delPhoto3').click(function () {
    $('#fotoReverso').val('');
    $(".delPhoto3").addClass('notBlock3');
    $("#img3").remove();

  });

});