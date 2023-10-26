<?php 
include('../Controlador/conection.php');

$edt_per_nombre          = $_POST['edt_per_nombre']; 
$edt_per_apellidos       = $_POST['edt_per_apellidos'];
$edt_per_direccion       = $_POST['edt_per_direccion'];
$edt_per_colonia         = $_POST['edt_per_colonia'];
$edt_per_municipio       = $_POST['edt_per_municipio'];
$edt_per_fechanac        = $_POST['edt_per_fechanac'];
$edt_per_telefono        = $_POST['edt_per_telefono'];
$edt_per_emergencia      = $_POST['edt_per_emergencia'];
$edt_per_sexo            = $_POST['edt_per_sexo'];
$edt_per_estadoCivil     = $_POST['edt_per_estadoCivil'];
$edt_per_escolaridad     = $_POST['edt_per_escolaridad']; 
$edt_per_sucursal        = $_POST['edt_per_sucursal'];  
$edt_per_puesto          = $_POST['edt_per_puesto']; 
$edt_per_fechaAlta       = $_POST['edt_per_fechaAlta']; 
        // $per_fechaBaja       = "0000-00-00";
        // $per_causaBaja       = "--";
$edt_per_manejaAuto      = $_POST['edt_per_manejaAuto'];
$edt_per_tipo            = $_POST['edt_per_tipo'];
$edt_per_subtipo         = $_POST['edt_per_subtipo'];
$edt_per_sueldoBase      = $_POST['edt_per_sueldoBase'];
$edt_per_sueldoImss      = $_POST['edt_per_sueldoImss'];
$edt_per_hraEntrada      = $_POST['edt_per_hraEntrada'];
$edt_per_salidaComida    = $_POST['edt_per_salidaComida'];
$edt_per_entradaComida   = $_POST['edt_per_entradaComida'];
$edt_per_hraSalida       = $_POST['edt_per_hraSalida'];
$edt_per_correo          = $_POST['edt_per_correo'];
        // $per_checador        = 0;
        // $per_estado          = 1;
        // $per_observaciones   = "Ninguna";
$id = $_POST['id'];

$sql = "UPDATE `personal` SET  `nombre` = '$edt_per_nombre', `apellidos`= '$edt_per_apellidos',`direccion` = '$edt_per_direccion', `colonia`= '$edt_per_colonia', `municipio` = '$edt_per_municipio', 
            `tel` = '$edt_per_telefono', `tel_emergencia` = '$edt_per_emergencia', `sexo` = '$edt_per_sexo', `estado_civil` = '$edt_per_estadoCivil', `escolaridad` = '$edt_per_escolaridad', 
            `sucursal` = '$edt_per_sucursal', `puesto` = '$edt_per_puesto', `fecha_nac` = '$edt_per_fechanac', `fecha_alta` = '$edt_per_fechaAlta', `maneja_automovil` = '$edt_per_manejaAuto', `tipo` = '$edt_per_tipo', 
            `subtipo` = '$edt_per_subtipo', `sueldo_base` = '$edt_per_sueldoBase', `sueldo_imms` = '$edt_per_sueldoImss', `hra_entrada` = '$edt_per_hraEntrada', `salida_comida` = '$edt_per_salidaComida',
            `entrada_comida`='$edt_per_entradaComida', `hra_salida` = '$edt_per_hraSalida', `correo` = '$edt_per_correo'
            WHERE id_per='$id'";

$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>