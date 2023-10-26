<?php
@session_start();
if(empty($_SESSION['name'])){
   header('Location: ../index.php');
}
?><!DOCTYPE html>
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

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
</head>

<body>

	<!-- ********************************************* header ********************************************* -->
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
                            <img src="vendors/images/photo1.jpg" alt="" />
                        </span>
                        <span class="user-name">Administrador</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href=""><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href=""><i class="dw dw-settings2"></i> Configuración</a>
                        <!-- <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> -->
                        <a class="dropdown-item" href="../controlador/logout.php"><i class="dw dw-logout"></i> Salir</a>
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

                <h4 class="weight-600 font-18 pb-10">Icono de menú desplegable</h4>
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

                <!-- <h4 class="weight-600 font-18 pb-10">Icono de lista de menú</h4>
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
            <a href="home.php">
                <img src="vendors/images/Control-AID.png" alt="" class="dark-logo" /><!-- Cambiar logo -->
                <img src="vendors/images/Control-AID2.png" alt="" class="light-logo" /><!-- Cambiar logo -->
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li >
						<a href="home.php" class="dropdown-toggle no-arrow">
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
										<li><a href="recursos-humanos/empleados.php">Registro</a></li>
										<li><a href="recursos-humanos/lista-empleados.php">Lista empleados</a></li>
									</ul>
								</li>
                                <!-- <li><a href="recursos-humanos/puestos.php">Puestos</a></li> -->
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

	<!-- ********************************************* Contenido ******************************************* -->
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="title pb-20">
                <h2 class="h3 mb-0">Contenido</h2>
            </div>


        </div>
    </div>
  
    
    <!-- welcome modal end -->
    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="vendors/scripts/dashboard3.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>