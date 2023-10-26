<?php 
	session_start();
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
$per_fechaNac       = $_POST['per_fechaNac'];
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


$nombreImg=$_FILES['foto']['name'];
$rutaAlmacenamiento=$_FILES['foto']['tmp_name'];
$carpeta='../archivos/';
$rutaFinal=$carpeta.$nombreImg;


$nombreImg2=$_FILES['fotoAnverso']['name'];
$rutaAlmacenamiento2=$_FILES['fotoAnverso']['tmp_name'];
$carpeta2='../archivos/';
$rutaFinal2=$carpeta2.$nombreImg2;


$nombreImg3=$_FILES['fotoReverso']['name'];
$rutaAlmacenamiento3=$_FILES['fotoReverso']['tmp_name'];
$carpeta3='../archivos/';
$rutaFinal3=$carpeta3.$nombreImg3;



	// $permitidos = array("image/png", "image/jpg", "image/jpeg");
	// $limite_kb = 1024; //1 MB

	// if (in_array($_FILES["per_foto"]["type"], $permitidos) && $_FILES["per_foto"]["size"] <= $limite_kb * 1024) {
        
    //     $nombreImg = $_FILES["per_foto"]["name"]; //Nombre de nuestro archivo
    //     $url_temp = $_FILES["per_foto"]["tmp_name"];
    //     $carpeta ='../imagenes/';
    //     $rutaDestino=$carpeta.$nombreImg;

	// 	if (!file_exists($carpeta)) {
	// 		mkdir($carpeta, 0777, true);
	// 	}

	// 	if (!file_exists($rutaDestino)) {

	// 		$resultado = move_uploaded_file($url_temp, $rutaDestino);
	// 	} 
	// } 

 # definimos la carpeta destino
 /*$carpetaDestino="imágenes/";
 
 # si hay algun archivo que subir
 if(isset($_FILES["per_foto"]) && $_FILES["per_foto"]["name"][0])
 {

     # recorremos todos los arhivos que se han subido
     for($i=0;$i<count($_FILES["per_foto"]["name"]);$i++)
     {

         # si es un formato de imagen
         if($_FILES["per_foto"]["type"][$i]=="image/jpeg" || $_FILES["per_foto"]["type"][$i]=="image/pjpeg" || $_FILES["per_foto"]["type"][$i]=="image/gif" || $_FILES["per_foto"]["type"][$i]=="image/png")
         {

             # si exsite la carpeta o se ha creado
             if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
             {
                 $origen=$_FILES["per_foto"]["tmp_name"][$i];
                 $destino=$carpetaDestino.$_FILES["per_foto"]["name"][$i];

                 # movemos el archivo
                 if(@move_uploaded_file($origen, $destino))
                 {
                     echo "<br>".$_FILES["per_foto"]["name"][$i]." movido correctamente";
                 }else{
                     echo "<br>No se ha podido mover el archivo: ".$_FILES["per_foto"]["name"][$i];
                 }
             }else{
                 echo "<br>No se ha podido crear la carpeta: ".$carpetaDestino;
             }
         }else{
             echo "<br>".$_FILES["per_foto"]["name"][$i]." - NO es imagen jpg, png o gif";
         }
     }
 }else{
     echo "<br>No se ha subido ninguna imagen";
 }*/




$sql= "INSERT INTO personal (`nombre`, `apellidos`,`direccion`, `colonia`, `municipio`, `tel`, `tel_emergencia`,
                             `sexo`, `estado_civil`, `escolaridad`, `sucursal`, `puesto`, `fecha_nac`, `fecha_alta`, `fecha_baja`,
                             `causa_baja`, `maneja_automovil`, `tipo`, `subtipo`, `sueldo_base`, `sueldo_imms`, 
                             `hra_entrada`, `salida_comida`, `entrada_comida`, `hra_salida`, `correo`, `id_checador`, `estado`,
                             `observaciones`,`img_foto`,`img_anverso`,`img_reverso`)
                      VALUES('$per_nombre','$per_apellidos','$per_direccion','$per_colonia','$per_municipio','$per_telefono',
                      '$per_emergencia','$per_sexo','$per_estadoCivil','$per_escolaridad','$per_sucursal','$per_puesto','$per_fechaNac','$per_fechaAlta',
                      '$per_fechaBaja','$per_causaBaja','$per_manejaAuto','$per_tipo','$per_subtipo','$per_sueldoBase','$per_sueldoImss',
                      '$per_hraEntrada','$per_salidaComida','$per_entradaComida','$per_hraSalida','$per_correo','$per_checador','$per_estado',
                      '$per_observaciones','$rutaFinal','$rutaFinal2','$rutaFinal3') ";	
move_uploaded_file($rutaAlmacenamiento, $rutaFinal);
move_uploaded_file($rutaAlmacenamiento2, $rutaFinal2);
move_uploaded_file($rutaAlmacenamiento3, $rutaFinal3);
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