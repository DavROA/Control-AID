<?php 
include('../Controlador/conection.php');

$id_personal        = $_POST['id'];
$baja_per_fechabaja = $_POST['baja_per_fechabaja'];     
$baja_per_motivo    = $_POST['baja_per_motivo'];   

//$sql = "DELETE FROM personal WHERE id_per='$user_id'";
$sql = "UPDATE `personal` SET `estado` = '2', `fecha_baja` = '$baja_per_fechabaja',`causa_baja`='$baja_per_motivo'  WHERE `id_per` = '$id_personal'";
$delQuery =mysqli_query($con,$sql);
if($delQuery==true)
{
	 $data = array(
        'status'=>'success',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'failed',
      
    );

    echo json_encode($data);
} 

?>