$(document).ready(function () {
  var opcion
  var dataTablePersonal = $('#personales').DataTable({
    select: true,
    fnCreatedRow: function (nRow, aData, iDataIndex) {
      $(nRow).attr('id', aData[0])
    },
    responsive: 'true',
    serverSide: 'true',
    processing: 'true',
    paging: 'true',
    order: [],
    ajax: {
      url: '../../Modelo/personales_obtener.php',
      type: 'POST'
    },
    aoColumnDefs: [
      {
        bSortable: false,
        aTargets: [2]
      }
    ],
    language: {
      lengthMenu: 'Mostrar _MENU_ registros',
      zeroRecords: 'No se encontraron resultados',
      info: 'Registros del _START_ al _END_ de un total de _TOTAL_ registros.',
      infoEmpty: 'Registros del 0 al 0 de un total de 0 registros.',
      infoFiltered: '(Filtrado de un total de _MAX_ registros.)',
      sSearch: 'Buscar:',
      oPaginate: {
        sFirst: 'Primero',
        sLast: 'Último',
        sNext: 'Siguiente',
        sPrevious: 'Anterior'
      },
      sProcessing: 'Procesando...'
    }
  })
  // ************************************* Agregar empleado / personal  *******************************

  $(document).on('submit', '#agregarPersonal', function (e) {
    e.preventDefault()
    var per_nombre = $('#per_nombre').val()
    var per_apellidos = $('#per_apellidos').val()
    var per_direccion = $('#per_direccion').val()
    var per_colonia = $('#per_colonia').val()
    var per_municipio = $('#per_municipio').val()
    var per_telefono = $('#per_telefono').val()
    var per_emergencia = $('#per_emergencia').val()
    var per_sexo = $('#per_sexo').val()
    var per_estadocivil = $('#per_estadocivil').val()
    var per_escolaridad = $('#per_escolaridad').val()
    var per_sucursal = $('#per_sucursal').val()
    var per_puesto = $('#per_puesto').val()
    var per_fechaalta = $('#per_fechaalta').val()
    var per_manejaauto = $('#per_manejaauto').val()
    var per_tipo = $('#per_tipo').val()
    var per_subtipo = $('#per_subtipo').val()
    var per_sueldobase = $('#per_sueldobase').val()
    var per_sueldoimss = $('#per_sueldoimss').val()
    var per_hraEntrada = $('#per_hraEntrada').val()
    var per_salidaComida = $('#per_salidaComida').val()
    var per_entradaComida = $('#per_entradaComida').val()
    var per_hraSalida = $('#per_hraSalida').val()
    var per_correo = $('#per_correo').val()

    if (
      per_nombre === '' ||
      per_apellidos === '' ||
      per_direccion == '' ||
      per_colonia === '' ||
      per_municipio == '' ||
      per_telefono == '' ||
      per_emergencia == '' ||
      per_sexo == '' ||
      per_estadocivil == '' ||
      per_escolaridad == '' ||
      per_sucursal == '' ||
      per_puesto == '' ||
      per_fechaalta == '' ||
      per_manejaauto == '' ||
      per_tipo == '' ||
      per_subtipo == '' ||
      per_sueldobase == '' ||
      per_sueldoimss == '' ||
      per_hraEntrada == '' ||
      per_hraEntrada == '' ||
      per_salidaComida == '' ||
      per_entradaComida == '' ||
      per_hraSalida == '' ||
      per_correo == ''
    ) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'No ingresaste todos los campos!'
      })
    } else {
      $.ajax({
        url: '../../Modelo/personal_agregar.php',
        type: 'post',
        data: {
          per_nombre: per_nombre,
          per_apellidos: per_apellidos,
          per_direccion: per_direccion,
          per_colonia: per_colonia,
          per_municipio: per_municipio,
          per_telefono: per_telefono,
          per_emergencia: per_emergencia,
          per_sexo: per_sexo,
          per_estadocivil: per_estadocivil,
          per_escolaridad: per_escolaridad,
          per_sucursal: per_sucursal,
          per_puesto: per_puesto,
          per_fechaalta: per_fechaalta,
          per_manejaauto: per_manejaauto,
          per_tipo: per_tipo,
          per_subtipo: per_subtipo,
          per_sueldobase: per_sueldobase,
          per_sueldoimss: per_sueldoimss,
          per_hraEntrada: per_hraEntrada,
          per_salidaComida: per_salidaComida,
          per_entradaComida: per_entradaComida,
          per_hraSalida: per_hraSalida,
          per_correo: per_correo
        },
        success: function (data) {
          dataTablePersonal.ajax.reload(null, false)
          var json = JSON.parse(data)
          var status = json.status
          if (status == 'true') {
            //$('#AgregarCliente').modal('hide');
            $('#agregarPersonal').trigger('reset')
            Swal.fire({
              position: 'top-center',
              icon: 'success',
              title: 'Personal registrado',
              showConfirmButton: false,
              timer: 1500
            })
          } else {
          }
        }
      })
    }
  })

  //****************************************************************** */
  // LIMPIAR CAMPOS
  //$("#limpiarCampos").click(function(){
  //$("#agregarCliente").trigger("reset");
  // opcion    = 1; //alta
  // art_id    = null;

  //});

  // *************************************** Editar datos de empleado  *********************************
  $(document).on('submit', '#baja_Empleado', function (e) {
    e.preventDefault()
    //var tr = $(this).closest('tr');

    var baja_per_fechabaja = $('#baja_per_fechabaja').val()
    var baja_per_motivo = $('#baja_per_causa').val()
    var trid = $('#trid').val()
    var id = $('#id').val()

    if (baja_per_fechabaja != '' || baja_per_motivo != '') {
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })

      Swal.fire({
        title: '¿Estás seguro de desactivar el registro?',
        text: 'Una vez desactivado no podrá deshacer el cambio.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Sí',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        reverseButtons: true
      }).then(result => {
        if (result.isConfirmed) {
          $.ajax({
            url: '../../Modelo/personal_desactivar.php',
            type: 'post',
            data: {
              baja_per_fechabaja: baja_per_fechabaja,
              baja_per_motivo: baja_per_motivo,
              id: id
            },
            success: function (data) {
              dataTablePersonal.ajax.reload(null, false)
            }
          })
          $('#baja_Empleado').trigger('reset')
          $('#bajaEmpleado').modal('hide')

          swalWithBootstrapButtons.fire(
            'Registro desactivado',
            'El registro se ha desactivado correctamente.',
            'success'
          )
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          swalWithBootstrapButtons.fire(
            'Cancelar',
            'El registro no se ha desactivdo.',
            'error'
          )
        }
      })
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'No ingresaste todos los campos!'
      })
    }
  })
  // ************************************ Desactivar empleado / personal  ******************************
  $('#personales').on('click', '.bajaBtn ', function (event) {
    var dataTablePersonal = $('#personales').DataTable()
    var trid = $(this).closest('tr').attr('id')
    var id = $(this).data('id')
    $('#bajaEmpleado').modal('show')

    $.ajax({
      url: '../../Modelo/personalUno_detalles.php',
      data: {
        id: id
      },
      type: 'post',
      success: function (data) {
        var json = JSON.parse(data)
        $('#baja_per_nombre').text(json.nombre)
        $('#baja_per_apellidos').text(json.apellidos)
        $('#baja_per_telefono').text(json.tel)
        $('#baja_per_sucursal').text(json.sucursal)
        $('#baja_per_puesto').text(json.puesto)
        $('#baja_per_fechaalta').text(json.fecha_alta)
        $('#baja_per_correo').text(json.correo)

        $('#id').val(id)
        $('#trid').val(trid)
      }
    })
  })
  // ************************************** Editar datos de empleado  **********************************
  $(document).on('submit', '#editarPersonal', function (e) {
    e.preventDefault()
    //var tr = $(this).closest('tr');

    var edt_per_nombre = $('#edt_per_nombre').val()
    var edt_per_apellidos = $('#edt_per_apellidos').val()
    var edt_per_direccion = $('#edt_per_direccion').val()
    var edt_per_colonia = $('#edt_per_colonia').val()
    var edt_per_municipio = $('#edt_per_municipio').val()
    var edt_per_fechanac = $('#edt_per_fechanac').val()
    var edt_per_telefono = $('#edt_per_telefono').val()
    var edt_per_emergencia = $('#edt_per_emergencia').val()
    var edt_per_sexo = $('#edt_per_sexo').val()
    var edt_per_estadoCivil = $('#edt_per_estadocivil').val()
    var edt_per_escolaridad = $('#edt_per_escolaridad').val()
    var edt_per_sucursal = $('#edt_per_sucursal').val()
    var edt_per_puesto = $('#edt_per_puesto').val()
    var edt_per_fechaAlta = $('#edt_per_fechaalta').val()
    // $per_fechaBaja       = "0000-00-00";
    // $per_causaBaja       = "--";
    var edt_per_manejaAuto = $('#edt_per_manejaauto').val()
    var edt_per_tipo = $('#edt_per_tipo').val()
    var edt_per_subtipo = $('#edt_per_subtipo').val()
    var edt_per_sueldoBase = $('#edt_per_sueldobase').val()
    var edt_per_sueldoImss = $('#edt_per_sueldoimss').val()
    var edt_per_hraEntrada = $('#edt_per_hraEntrada').val()
    var edt_per_salidaComida = $('#edt_per_salidaComida').val()
    var edt_per_entradaComida = $('#edt_per_entradaComida').val()
    var edt_per_hraSalida = $('#edt_per_hraSalida').val()
    var edt_per_correo = $('#edt_per_correo').val()
    // $per_checador        = 0;
    // $per_estado          = 1;
    // $per_observaciones   = "Ninguna";

    var trid = $('#trid').val()
    var id = $('#id').val()

    if (
      edt_per_nombre != '' ||
      edt_per_apellidos != '' ||
      edt_per_direccion != '' ||
      edt_per_colonia != '' ||
      edt_per_municipio != '' ||
      edt_per_fechanac != '' ||
      edt_per_telefono != '' ||
      edt_per_emergencia != '' ||
      edt_per_sexo != '' ||
      edt_per_estadoCivil != '' ||
      edt_per_escolaridad != '' ||
      edt_per_sucursal != '' ||
      edt_per_puesto != '' ||
      edt_per_fechaAlta != '' ||
      edt_per_manejaAuto != '' ||
      edt_per_tipo != '' ||
      edt_per_subtipo != '' ||
      edt_per_sueldoBase != '' ||
      edt_per_sueldoImss != '' ||
      edt_per_hraEntrada != '' ||
      edt_per_salidaComida != '' ||
      edt_per_entradaComida != '' ||
      edt_per_hraSalida != '' ||
      edt_per_correo != ''
    ) {
      $.ajax({
        url: '../../Modelo/pesonalUno_actualizar.php',
        type: 'post',
        data: {
          edt_per_nombre: edt_per_nombre,
          edt_per_apellidos: edt_per_apellidos,
          edt_per_direccion: edt_per_direccion,
          edt_per_colonia: edt_per_colonia,
          edt_per_municipio: edt_per_municipio,
          edt_per_fechanac: edt_per_fechanac,
          edt_per_telefono: edt_per_telefono,
          edt_per_emergencia: edt_per_emergencia,
          edt_per_sexo: edt_per_sexo,
          edt_per_estadoCivil: edt_per_estadoCivil,
          edt_per_escolaridad: edt_per_escolaridad,
          edt_per_sucursal: edt_per_sucursal,
          edt_per_puesto: edt_per_puesto,
          edt_per_fechaAlta: edt_per_fechaAlta,
          // $per_fechaBaja       = "0000-00-00";
          // $per_causaBaja       = "--";
          edt_per_manejaAuto: edt_per_manejaAuto,
          edt_per_tipo: edt_per_tipo,
          edt_per_subtipo: edt_per_subtipo,
          edt_per_sueldoBase: edt_per_sueldoBase,
          edt_per_sueldoImss: edt_per_sueldoImss,
          edt_per_hraEntrada: edt_per_hraEntrada,
          edt_per_salidaComida: edt_per_salidaComida,
          edt_per_entradaComida: edt_per_entradaComida,
          edt_per_hraSalida: edt_per_hraSalida,
          edt_per_correo: edt_per_correo,
          // $per_checador        = 0;
          // $per_estado          = 1;
          // $per_observaciones   = "Ninguna";
          id: id
        },
        success: function (data) {
          dataTablePersonal.ajax.reload(null, false)
        }
      })
      $('#Editar_personal').modal('hide')
      Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Datos actualizados!',
        showConfirmButton: false,
        timer: 1500
      })
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'No ingresaste todos los campos!'
      })
    }
  })
  //********************************CLICK AL BOTON EDITAR TABLA PERSONAL********************************
  $('#personales').on('click', '.editarBtn ', function (event) {
    var dataTableClientes = $('#personales').DataTable()
    var trid = $(this).closest('tr').attr('id')
    var id = $(this).data('id')
    $('#Editar_personal').modal('show')

    $.ajax({
      url: '../../Modelo/personalUno_obtener.php',
      data: {
        id: id
      },
      type: 'post',
      success: function (data) {
        var json = JSON.parse(data)
        $('#edt_per_nombre').val(json.nombre)
        $('#edt_per_apellidos').val(json.apellidos)
        $('#edt_per_direccion  ').val(json.direccion)
        $('#edt_per_colonia').val(json.colonia)
        $('#edt_per_municipio').val(json.municipio)
        $('#edt_per_fechanac').val(json.fecha_nac)
        $('#edt_per_telefono').val(json.tel)
        $('#edt_per_emergencia').val(json.tel_emergencia)
        $('#edt_per_sexo').val(json.sexo)
        $('#edt_per_estadocivil ').val(json.estado_civil)
        $('#edt_per_escolaridad').val(json.escolaridad)
        $('#edt_per_sucursal').val(json.sucursal)
        $('#edt_per_puesto').val(json.puesto)
        $('#edt_per_fechaalta').val(json.fecha_alta)
        $('#edt_per_manejaauto').val(json.maneja_automovil)
        $('#edt_per_tipo ').val(json.tipo)
        $('#edt_per_subtipo').val(json.subtipo)
        $('#edt_per_sueldobase').val(json.sueldo_base)
        $('#edt_per_sueldoimss').val(json.sueldo_imms)
        $('#edt_per_hraEntrada').val(json.hra_entrada)
        $('#edt_per_salidaComida').val(json.salida_comida)
        $('#edt_per_entradaComida').val(json.entrada_comida)
        $('#edt_per_hraSalida ').val(json.hra_salida)
        $('#edt_per_correo').val(json.correo)

        $('#id').val(id)
        $('#trid').val(trid)
      }
    })
  })
  // ****************************CLICK AL BOTON VER DETALLES TABLA PERSONAL ****************************
  $('#personales').on('click', '.viewBtn ', function (event) {
    var dataTableClientes = $('#personales').DataTable()
    var trid = $(this).closest('tr').attr('id')
    var id = $(this).data('id')
    $('#view_empleado').modal('show')

    $.ajax({
      url: '../../Modelo/personalUno_detalles.php',
      data: {
        id: id
      },
      type: 'post',
      success: function (data) {
        var json = JSON.parse(data)
        $('#view_per_nombre').text(json.nombre)
        $('#view_per_apellidos').text(json.apellidos)
        $('#view_per_direccion').text(json.direccion)
        $('#view_per_colonia').text(json.colonia)
        $('#view_per_municipio').text(json.municipio)
        $('#view_per_fechanac').text(json.fechanac)
        $('#view_per_telefono').text(json.tel)
        $('#view_per_emergencia').text(json.tel_emergencia)
        $('#view_per_sexo').text(json.sexo)
        $('#view_per_estadocivil ').text(json.estado_civil)
        $('#view_per_escolaridad').text(json.escolaridad)
        $('#view_per_sucursal').text(json.sucursal)
        $('#view_per_puesto').text(json.puesto)
        $('#view_per_fechaalta').text(json.fecha_alta)
        $('#view_per_manejaauto').text(json.maneja_automovil)
        $('#view_per_tipo').text(json.tipo)
        $('#view_per_subtipo').text(json.subtipo)
        $('#view_per_sueldobase').text(json.sueldo_base)
        $('#view_per_sueldoimss').text(json.sueldo_imms)
        $('#view_per_hraEntrada').text(json.hra_entrada)
        $('#view_per_salidaComida').text(json.salida_comida)
        $('#view_per_entradaComida').text(json.entrada_comida)
        $('#view_per_hraSalida ').text(json.hra_salida)
        $('#view_per_correo').text(json.correo)
        $('#view_per_fechabaja').text(json.fecha_baja)
        $('#view_per_causabaja').text(json.causa_baja)
        $('#id').val(id)
        $('#trid').val(trid)
      }
    })
  })
})