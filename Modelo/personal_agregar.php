<?php 
include('../Controlador/conection.php');

$per_nombre          = $_POST['per_nombre'];     
$per_apellidos       = $_POST['per_apellidos'];
$per_direccion       = $_POST['per_direccion'];
$per_colonia         = $_POST['per_colonia'];
$per_municipio       = $_POST['per_municipio'];
$per_telefono        = $_POST['per_telefono'];
$per_emergencia      = $_POST['per_emergencia'];
$per_sexo            = $_POST['per_sexo'];
$per_estadoCivil     = $_POST['per_estadocivil'];
$per_escolaridad     = $_POST['per_escolaridad'];
$per_sucursal        = $_POST['per_sucursal'];
$per_puesto          = $_POST['per_puesto'];
$per_fechaAlta       = $_POST['per_fechaalta'];
$per_fechaBaja       = "0000-00-00";
$per_causaBaja       = "--";
$per_manejaAuto      = $_POST['per_manejaauto'];
$per_tipo            = $_POST['per_tipo'];
$per_subtipo         = $_POST['per_subtipo'];
$per_sueldoBase      = $_POST['per_sueldobase'];
$per_sueldoImss      = $_POST['per_sueldoimss'];
$per_hraEntrada      = $_POST['per_hraEntrada'];
$per_salidaComida    = $_POST['per_salidaComida'];
$per_entradaComida   = $_POST['per_entradaComida'];
$per_hraSalida       = $_POST['per_hraSalida'];
$per_correo          = $_POST['per_correo'];
$per_checador        = 0;
$per_estado          = 1;
$per_observaciones   = "Ninguna";


$sql= "INSERT INTO personal (`nombre`, `apellidos`,`direccion`, `colonia`, `municipio`, `tel`, `tel_emergencia`,
                             `sexo`, `estado_civil`, `escolaridad`, `sucursal`, `puesto`, `fecha_alta`, `fecha_baja`,
                             `causa_baja`, `maneja_automovil`, `tipo`, `subtipo`, `sueldo_base`, `sueldo_imms`, 
                             `hra_entrada`, `salida_comida`, `entrada_comida`, `hra_salida`, `correo`, `id_checador`, `estado`,
                             `observaciones`)
                      VALUES('$per_nombre','$per_apellidos','$per_direccion','$per_colonia','$per_municipio','$per_telefono',
                      '$per_emergencia','$per_sexo','$per_estadoCivil','$per_escolaridad','$per_sucursal','$per_puesto','$per_fechaAlta',
                      '$per_fechaBaja','$per_causaBaja','$per_manejaAuto','$per_tipo','$per_subtipo','$per_sueldoBase','$per_sueldoImss',
                      '$per_hraEntrada','$per_salidaComida','$per_entradaComida','$per_hraSalida','$per_correo','$per_checador','$per_estado',
                      '$per_observaciones') ";	

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