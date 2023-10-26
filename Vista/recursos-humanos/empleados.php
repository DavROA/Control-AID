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
    <link rel="stylesheet" href="../../Assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/jquery-steps/jquery.steps.css"
		/>
    <link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="../vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
 
</head>

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

	<!-- *********************************** Configuración noche - día************************************* -->

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

                <!-- <h4 class="weight-600 font-18 pb-10">Icono de menú desplegable</h4>
                <div class="sidebar-radio-group pb-10 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-1" checked="" />
                        <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-2" />
                        <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-3" />
                        <label class="custom-control-label" for="sidebaricon-3"><i
                                class="fa fa-angle-double-right"></i></label>
                    </div>
                </div>

                <h4 class="weight-600 font-18 pb-10">Icono de lista de menú</h4>
                <div class="sidebar-radio-group pb-30 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-1" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-1"><i
                                class="ion-minus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-2" />
                        <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                                aria-hidden="true"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-3" />
                        <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-4" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-4"><i
                                class="icon-copy dw dw-next-2"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-5" />
                        <label class="custom-control-label" for="sidebariconlist-5"><i
                                class="dw dw-fast-forward-1"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-6" />
                        <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                    </div>
                </div> -->

                <div class="reset-options pt-30 text-center">
                    <button class="btn btn-dark" id="reset-settings">
                        Reiniciar configuración
                    </button>
                </div>
            </div>
        </div>
    </div>

	<!-- ************************************ Menu principal izquierda************************************* -->
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
                    <li >
						<a href="../home.php" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                        </a>
                        
                    </li>
                    <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span
								><span class="mtext">RRHH</span>
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

    <!-- ************************************ Contenido empleados **************************************** -->
    <div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Alta de personal</h4>
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
											Alta de personal
										</li>
									</ol>
								</nav>
							</div>
							<!-- <div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										January 2018
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div> -->
						</div>
					</div>

					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<h4 class="text-blue h4">Registro</h4>
							<p class="mb-30">Por favor de rellenar todos los campos</p>
						</div>
						<div class="wizard-content">
							<form id="agregarPersonal" class="tab-wizard wizard-circle wizard vertical">
								<h5>Datos personales</h5>
								<section> 
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Nombre(s):</label>
												<input type="text" class="form-control" id="per_nombre" name="per_nombre" required/>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Apellidos:</label>
												<input type="text" class="form-control" id="per_apellidos" name="per_apellidos" required/>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Dirección:</label>
												<input type="text" class="form-control" id="per_direccion" name="per_direccion" required/>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Colonia:</label>
												<input type="text" class="form-control" id="per_colonia" name="per_colonia" required />
											</div>
										</div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Municipio:</label>
												<input type="text" class="form-control" id="per_municipio" name="per_municipio" required/>
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Fecha de nacimiento</label>
												<input type="date" class="form-control  id="per_fechaNac" name="per_fechaNac" required/>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Teléfono:</label>
												<input type="text" class="form-control" id="per_telefono" name="per_telefono" required/>
											</div>
										</div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Teléfono de emergencia:</label>
												<input type="text" class="form-control" id="per_emergencia" name="per_emergencia" required/>
											</div>
										</div>
									</div>
                                    <div class="row">
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Sexo:</label>
												<select class="custom-select form-control" id="per_sexo" name="per_sexo">
													<option selected disabled value="">Seleccionar</option>
													<option value="Femenino">Femenino</option>
													<option value="Masculino">Masculino</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Estado civil:</label>
												<select class="custom-select form-control" id="per_estadocivil" name="per_estadocivil">
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
												<select class="custom-select form-control" id="per_escolaridad" name="per_escolaridad">
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
												<select class="custom-select form-control" id="per_sucursal" name="per_sucursal">
													<option selected disabled value="">Seleccionar</option>
													<?php
                                                     $conect = mysqli_connect("localhost"," ","","tablered_bd");
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
												<select class="custom-select form-control" id="per_puesto" name="per_puesto">
													<option selected disabled value="">Seleccionar</option>
													<?php
                                                     $conect = mysqli_connect("localhost","root","platas123","tablered_bd");
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
												<input type="date" class="form-control" placeholder="Select Date" id="per_fechaalta" name="per_fechaalta" required/>
											</div>
										</div>
			
									</div>
                                    <div class="row">
                                        <div class="col-md-4">
											<div class="form-group">
												<label>¿Maneja automovil?:</label>
												<select class="custom-select form-control" id="per_manejaauto" name="per_manejaauto">
													<option selected disabled value="">Seleccionar</option>
													<option value="si">Si</option>
													<option value="no">No</option>
												</select>
											</div>
										</div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Tipo:</label>
												<select class="custom-select form-control" id="per_tipo" name="per_tipo">
													<option selected disabled value="">Seleccionar</option>
													<option value="Empleado">Empleado</option>
													<option value="tipo2">Camionista</option>
												</select>
											</div>
										</div>
                                        <div class="col-md-4">
											<div class="form-group">
												<label>Subtipo:</label>
												<select class="custom-select form-control" id="per_subtipo" name="per_subtipo">
													<option selected disabled value="">Seleccionar</option>
													<option value="normal">Normal</option>
													<option value="asimilado">Asimilado</option>
												</select>
											</div>
										</div>
      
									</div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sueldo base:</label>
                                                <input type="number" class="form-control" id="per_sueldobase" name="per_sueldobase"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sueldo IMSS:</label>
                                                <input type="number" class="form-control" id="per_sueldoimss" name="per_sueldoimss" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Hra de entrada:</label>
                                                <input class="form-control " placeholder="Select time" type="time" id="per_hraEntrada" name="per_hraEntrada"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Salida comida:</label>
                                                <input class="form-control " placeholder="Select time" type="time" id="per_salidaComida" name="per_salidaComida"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Entrada comida:</label>
                                                <input class="form-control " placeholder="Select time" type="time" id="per_entradaComida" name="per_entradaComida"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Hra de Salida:</label>
                                                <input class="form-control " placeholder="Select time" type="time" id="per_hraSalida" name="per_hraSalida"/>
                                            </div>
                                        </div>
                                    </div>
								</section>
								<!-- Step 3 -->
								<h5>Archivos</h5>
								<section>
									<div class="row">
										<div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Correo:</label>
                                                    <input type="email" class="form-control" id="per_correo" name="per_correo" required/>
                                                </div>
										</div>
										
									</div>
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Subir foto</label>
                                                <!--<input type="file" name="per_foto" id="per_foto"  class="form-control-file form-control height-auto">-->
                                                    <div class="photo">
                                                        <div class="prevPhoto" title="Seleccione una imagen dando click">
                                                            <span class="delPhoto notBlock" id="X">X</span>
                                                            <label for="foto"></label>
                                                        </div>
                                                        <div class="upimg">
                                                            <input type="file" name="foto" id="foto">
                                                        </div>
                                                        <div id="form_alert"></div>
                                                    </div>

                                            </div>
										</div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Subir ID anverso</label>
                                                <!--<input type="file" name="per_anverso" id="per_anverso" class="form-control-file form-control height-auto">-->
                                                <div class="photo2">
                                                    <div class="prevPhoto2" title="Seleccione una imagen dando click">
                                                        <span class="delPhoto2 notBlock2" id="X2">X</span>
                                                        <label for="fotoAnverso"></label>
                                                    </div>
                                                    <div class="upimg2">
                                                        <input type="file" name="fotoAnverso" id="fotoAnverso">
                                                    </div>
                                                    <div id="form_alert2"></div>
                                                </div>
                                            </div>
										</div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label>Subir ID reverso</label>
                                                <!--<input type="file" name="per_reverso" id="per_reverso" class="form-control-file form-control height-auto">-->
                                                <div class="photo3">
                                                    <div class="prevPhoto3" title="Seleccione una imagen dando click">
                                                        <span class="delPhoto3 notBlock3" id="X3">X</span>
                                                        <label for="fotoReverso"></label>
                                                    </div>
                                                    <div class="upimg3">
                                                        <input type="file" name="fotoReverso" id="fotoReverso">
                                                    </div>
                                                    <div id="form_alert3"></div>
                                                </div>
                                            </div>
										</div>
									</div>
                                    <!-- <div class="col-md-4">
                                            <div class="">
                                                <div class="">
                                                    <div class="photo">
                                                        <label for="foto" class="text-condensedLight" style="font-size: 18px;">Foto del producto:</label>
                                                        <p></p>
                                                        <div class="prevPhoto" title="Seleccione una imagen dando click">
                                                            <span class="delPhoto notBlock" id="X">X</span>
                                                            <label for="foto"></label>
                                                        </div>
                                                        <div class="upimg">
                                                            <input type="file" name="foto" id="foto">
                                                        </div>
                                                        <div id="form_alert"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
								</section>
							</form>
						</div>
					</div>
				</div>
      
			</div>
		</div>
  
    
    <!-- welcome modal end -->
    <!-- js -->
    <script src="../vendors/scripts/core.js"></script>
    <script src="../vendors/scripts/script.min.js"></script>
    <script src="../vendors/scripts/process.js"></script>
    <script src="../vendors/scripts/layout-settings.js"></script>
    <script src="../src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="../vendors/scripts/steps-setting.js"></script>
    <script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="../vendors/scripts/dashboard3.js"></script>
	<script src="../../JS/personal_funciones.js"></script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>