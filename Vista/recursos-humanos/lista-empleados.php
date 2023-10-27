<?php

@session_start();
    if(empty($_SESSION['name'])){
       header('Location: ../../index.php');
    
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Control-AID</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- Jquery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/jquery-steps/jquery.steps.css" />
    <link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="../vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
 
<body>
    <!-- ***************************************** Header ************************************************* -->
    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>

        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="../vendors/images/photo1.jpg" alt="" />
                        </span>
                        <span class="user-name">Administrador</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href=""><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href=""><i class="dw dw-settings2"></i> Configuración</a>
                        <!-- <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> -->
                        <a class="dropdown-item" href="../../Controlador/logout.php"><i class="dw dw-logout"></i> Salir</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- *********************************** Configuración noche - día************************************ -->
    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-dark">
                Opciones de diseño
                <span class="btn-block font-weight-400 font-12">Configuración de la interfaz de usuario</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Fondo Navbar</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-dark header-white active">Blanco</a>
                    <a href="javascript:void(0);" class="btn btn-outline-dark header-dark">Oscuro</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menú lateral</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-dark sidebar-light">Blanco </a>
                    <a href="javascript:void(0);" class="btn btn-outline-dark sidebar-dark active">Oscuro</a>
                </div>
                <div class="reset-options pt-30 text-center">
                    <button class="btn btn-dark" id="reset-settings">
                        Reiniciar configuración
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ************************************ Menu principal izquierda************************************ -->
    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="../home.php">
                <img src="../vendors/images/Control-AID.png" alt="" class="dark-logo" /><!-- Cambiar logo -->
                <img src="../vendors/images/Control-AID2.png" alt="" class="light-logo" /><!-- Cambiar logo -->
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li>
                        <a href="../home.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                        </a>

                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-textarea-resize"></span><span class="mtext">RRHH</span>
                        </a>
                        <ul class="submenu">
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <span class="micon bi bi-person-video2">
                                    </span><span class="mtext">Personal</span>
                                </a>
                                <ul class="submenu child">
                                    <li><a href="empleados.php">Registro</a></li>
                                    <li><a href="lista-empleados.php">Lista de personal</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="puestos.php">Puestos</a></li> -->
                        </ul>
                    </li>

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <!-- ************************************ Contenido Personal **************************************** -->
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Lista de personal</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="../home.php">Recursos humanos</a>
                                    </li>
                                    <li class="breadcrumb-item " aria-current="page">
                                        Personal
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Lista de personal
                                    </li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
                <!-- ******************************************* Simple Datatable start  *****************************-->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Personal</h4>
                        
                    </div>
                    <div class="pb-20">
                        <table id="personales" class="data-table table stripe hover   " cellspacing="0" width="100%"> <!--nowrap cambia el tamaño un poco más grande -->
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">ID</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>Puesto</th>
                                    <th>Sucursal</th>
                                    <th>Alta</th>
                                    <th>Entrada</th>
                                    <th>Salida</th>
                                    <th>Estado</th>
                                    <th class="datatable-nosort">Acciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- **************************************** Modal editar datos  ************************************-->
    <div class="modal fade bs-example-modal-lg" id="Editar_personal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel2"> Editar datos </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button>
                </div>
                <div class="modal-body">

                    <form id="editarPersonal" class="">
                        <h5>Datos personales</h5>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre(s):</label>
                                        <input type="hidden" name="id" id="id" value="">
                                        <input type="hidden" name="trid" id="trid" value="">
                                        <input type="text" class="form-control" id="edt_per_nombre"
                                            name="edt_per_nombre" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Apellidos:</label>
                                        <input type="text" class="form-control" id="edt_per_apellidos"
                                            name="edt_per_apellidos" />
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Dirección:</label>
                                        <input type="text" class="form-control" id="edt_per_direccion"
                                            name="edt_per_direccion" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Colonia:</label>
                                        <input type="text" class="form-control" id="edt_per_colonia"
                                            name="edt_per_colonia" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Municipio:</label>
                                        <input type="text" class="form-control" id="edt_per_municipio"
                                            name="edt_per_municipio" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Fecha de Nacimiento :</label>
                                        <input type="date" class="form-control" placeholder="Select Date"
                                            id="edt_per_fechanac" name="edt_per_fechanac" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Teléfono:</label>
                                        <input type="text" class="form-control" id="edt_per_telefono"
                                            name="edt_per_telefono" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Teléfono de emergencia:</label>
                                        <input type="text" class="form-control" id="edt_per_emergencia"
                                            name="edt_per_emergencia" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sexo:</label>
                                        <select class="custom-select form-control" id="edt_per_sexo"
                                            name="edt_per_sexo">
                                            <option selected disabled value="">Seleccionar</option>
                                            <option value="Femenino">Femenino</option>
                                            <option value="Masculino">Masculino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Estado civil:</label>
                                        <select class="custom-select form-control" id="edt_per_estadocivil"
                                            name="edt_per_estadocivil">
                                            <option selected disabled value="">Seleccionar</option>
                                            <option value="Soltero">Soltero</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Union libre">Union libre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Escolaridad:</label>
                                        <select class="custom-select form-control" id="edt_per_escolaridad"
                                            name="edt_per_escolaridad">
                                            <option selected disabled value="">Seleccionar</option>
                                            <option value="Ninguna">Ninguna</option>
                                            <option value="Primaria">Primaria</option>
                                            <option value="Secundaria">Secundaria</option>
                                            <option value="Media superior">Media Superior</option>
                                            <option value="Superior">Superior</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <!-- Step 2 -->
                        <h5>Datos laborales</h5>
                        <section>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sucursal:</label>
                                        <select class="custom-select form-control" id="edt_per_sucursal"
                                            name="edt_per_sucursal">
                                            <option selected disabled value="">Seleccionar</option>
                                            <?php
                                                     $conect = mysqli_connect("localhost","root","","tablered_bd");
                                                     $conect->set_charset("utf8");
                                                     $qry_planes="SELECT * FROM sucursales";
		                                             if ($resultado = mysqli_query($conect, $qry_planes)) {
		                                             /* obtener array asociativo */
		                                             while ($row = mysqli_fetch_assoc($resultado)) {
		                                                 echo '<option value="'.$row["ID"].'">'.$row["SUCURSAL"].'</option>';
		                                             }
		                                             /* liberar el conjunto de resultados */
		                                             mysqli_free_result($resultado);
		                                             }
                                                    echo "<br>";
    	                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Puesto:</label>
                                        <select class="custom-select form-control" id="edt_per_puesto"
                                            name="edt_per_puesto">
                                            <option selected disabled value="">Seleccionar</option>
                                            <?php
                                                     $conect = mysqli_connect("localhost","root","","tablered_bd");
                                                     $conect->set_charset("utf8");
                                                     $qry_planes="SELECT * FROM puestos";
		                                             if ($resultado = mysqli_query($conect, $qry_planes)) {
		                                             /* obtener array asociativo */
		                                             while ($row = mysqli_fetch_assoc($resultado)) {
		                                                 echo '<option value="'.$row["id_puesto"].'">'.$row["p_puesto"].'</option>';
		                                             }
		                                             /* liberar el conjunto de resultados */
		                                             mysqli_free_result($resultado);
		                                             }
                                                    echo "<br>";
    	                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Fecha de alta :</label>
                                        <input type="date" class="form-control" placeholder="Select Date"
                                            id="edt_per_fechaalta" name="edt_per_fechaalta" />
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>¿Maneja automovil?:</label>
                                        <select class="custom-select form-control" id="edt_per_manejaauto"
                                            name="edt_per_manejaauto">
                                            <option selected disabled value="">Seleccionar</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tipo:</label>
                                        <select class="custom-select form-control" id="edt_per_tipo"
                                            name="edt_per_tipo">
                                            <option selected disabled value="">Seleccionar</option>
                                            <option value="Empleado">Empleado</option>
                                            <option value="Comisionista">Comisionista</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">  
                                    <div class="form-group">
                                        <label>Subtipo:</label>
                                        <select class="custom-select form-control" id="edt_per_subtipo"
                                            name="edt_per_subtipo">
                                            <option selected disabled value="">Seleccionar</option>
                                            <option value="Normal">Normal</option>
                                            <option value="Asimilado">Asimilado</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sueldo base:</label>
                                        <input type="number" class="form-control" id="edt_per_sueldobase"
                                            name="edt_per_sueldobase" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sueldo IMSS:</label>
                                        <input type="number" class="form-control" id="edt_per_sueldoimss"
                                            name="edt_per_sueldoimss" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Hra de entrada:</label>
                                        <input class="form-control " placeholder="Select time" type="time"
                                            id="edt_per_hraEntrada" name="edt_per_hraEntrada" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Salida comida:</label>
                                        <input class="form-control " placeholder="Select time" type="time"
                                            id="edt_per_salidaComida" name="edt_per_salidaComida" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Entrada comida:</label>
                                        <input class="form-control " placeholder="Select time" type="time"
                                            id="edt_per_entradaComida" name="edt_per_entradaComida" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Hra de Salida:</label>
                                        <input class="form-control " placeholder="Select time" type="time"
                                            id="edt_per_hraSalida" name="edt_per_hraSalida" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Correo:</label>
                                        <input type="email" class="form-control" id="edt_per_correo"
                                            name="edt_per_correo" required />
                                    </div>
                                </div>
                            </div>
                        </section>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">
                        Actualizar
                    </button>
                </div>
                </form>



            </div>
        </div>
    </div>

    <!-- **************************************** Modal ver Detalles  ************************************-->
    <div class="modal fade bs-example-modal-lg" id="view_empleado" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel3"> Datos de: <a id="view_per_nombre"> </a>
                                <a id="view_per_apellidos"></a> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div >
                                <label for=""><span style="font-weight: bold;">Dirección: <span></label>
                                <a id="view_per_direccion"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Colonia: <span></label>
                                <a id="view_per_colonia"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Municipio: <span></label>
                                <a id="view_per_municipio"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Fecha de nacimiento: <span></label>
                                <a id="view_per_fechanac"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Teléfono: <span></label>
                                <a id="view_per_telefono"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Tel. de mergencia: <span></label>
                                <a id="view_per_emergencia"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Sexo: <span></label>
                                <a id="view_per_sexo"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Estado civil: <span></label>
                                <a id="view_per_estadocivil"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Escolaridad: <span></label>
                                <a id="view_per_escolaridad"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Correo: <span></label>
                                <a id="view_per_correo"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label for=""><span style="font-weight: bold;">Sucursal: <span></label>
                                <a id="view_per_sucursal"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Puesto: <span></label>
                                <a id="view_per_puesto"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Fecha alta: <span></label>
                                <a id="view_per_fechaalta"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Maneja automóvil: <span></label>
                                <a id="view_per_manejaauto"></a>
                            </div>

                            <div>
                                <label for=""><span style="font-weight: bold;">Tipo: <span></label>
                                <a id="view_per_tipo"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Subtipo: <span></label>
                                <a id="view_per_subtipo"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Sueldo base: <span></label>
                                <a id="view_per_sueldobase"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Sueldo Imss: <span></label>
                                <a id="view_per_sueldoimss"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Hra de entrada: <span></label>
                                <a id="view_per_hraEntrada"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Salida a comer: <span></label>
                                <a id="view_per_salidaComida"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Regreso de comida: <span></label>
                                <a id="view_per_entradaComida"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Hra de salida: <span></label>
                                <a id="view_per_hraSalida"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Fecha de baja: <span></label>
                                <a id="view_per_fechabaja"></a>
                            </div>
                            <div>
                                <label for=""><span style="font-weight: bold;">Motivo de la baja: <span></label>
                                <a id="view_per_causabaja"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <!-- **************************************** Modal dar de baja  *************************************-->
    <div class="modal fade bs-example-modal-lg" id="bajaEmpleado" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel"> Dar de baja a : <a id="baja_per_nombre"> </a>
                                <a id="baja_per_apellidos"></a> </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button>
                </div>
                <div class="modal-body">
                        <div class="row">
                                <div class="col-md-4">
                                    <label for="baja_per_telefono"><span style="font-weight: bold;">Teléfono: </span><a name="baja_per_telefono" id="baja_per_telefono"></a></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="baja_per_sucursal"><span style="font-weight: bold;">Sucursal: </span><a name="baja_per_sucursal" id="baja_per_sucursal"></a></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="baja_per_puesto"><span style="font-weight: bold;">Puesto: </span><a name="baja_per_puesto" id="baja_per_puesto"></a></label>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-4">
                                    <label for="baja_per_fechaalta"><span style="font-weight: bold;">Dado de alta: </span><a name="baja_per_fechaalta" id="baja_per_fechaalta"></a></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="baja_per_correo"><span style="font-weight: bold;">Correo: </span><a name="baja_per_correo" id="baja_per_correo"></a></label>
                                </div>
                                <div class="col-md-4">
                                </div>
                        </div>
                        <hr>
                        <form id="baja_Empleado" class="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="id" id="id" value="">
                                        <input type="hidden" name="trid" id="trid" value="">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Fecha de Baja:</label>
                                        <input class="form-control "  type="date"
                                            id="baja_per_fechabaja" name="baja_per_fechabaja" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Motivo: </label>
                                        <input class="form-control"  type="text"
                                            id="baja_per_causa" name="baja_per_causa" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">
                        Dar de baja
                    </button>

                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- welcome modal end -->
    <!-- js -->
    <script src="../vendors/scripts/core.js"></script>
    <script src="../vendors/scripts/script.min.js"></script>
    <script src="../vendors/scripts/process.js"></script>
    <script src="../vendors/scripts/layout-settings.js"></script>

    <!-- <script src="../src/plugins/apexcharts/apexcharts.min.js"></script> -->
    <script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>

    <script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <!-- <script src="../vendors/scripts/dashboard3.js"></script> -->
    <script src="../../JS/personal_funciones.js"></script>
    <!-- buttons for Export datatable -->
    <script src="../src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="../src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="../src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="../src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="../src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="../src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- Datatable Setting js -->
    <!-- <script src="../vendors/scripts/datatable-setting.js"></script> -->

    <!-- add sweet alert js & css in footer -->
    <!-- <script src="../src/plugins/sweetalert2/sweetalert2.all.js"></script>
		<script src="../src/plugins/sweetalert2/sweet-alert.init.js"></script> -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>