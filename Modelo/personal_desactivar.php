<?php 
include('../Controlador/conection.php');

$id_personal = $_POST['id'];
//$sql = "DELETE FROM personal WHERE id_per='$user_id'";
$sql = "UPDATE `personal` SET `estado` = '2' WHERE `id_per` = '$id_personal'";
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