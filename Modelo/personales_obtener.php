<?php 
include('../Controlador/conection.php');

$output= array();
$sql = "SELECT * FROM vista_empleados ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'nombre',
	2 => 'apellidos',
    3 => 'direccion',
    4 => 'colonia',
    5 => 'municipio',
);

 if(isset($_POST['search']['value']))
  	{
  	$search_value = $_POST['search']['value'];
  	$sql .= " WHERE nombre like '%".$search_value."%'";
  	$sql .= " OR apellidos like '%".$search_value."%'";
	$sql .= " OR tel like '%".$search_value."%'";
	$sql .= " OR puesto like '%".$search_value."%'";
	$sql .= " OR sucursal like '%".$search_value."%'";
	}

 if(isset($_POST['order']))
	{
 	$column_name = $_POST['order'][0]['column'];
 	$order = $_POST['order'][0]['dir'];
 	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
	}
 else
	{
 	$sql .= " ORDER BY id desc";
	}

	if($_POST['length'] != -1)
	{
 	$start = $_POST['start'];
 	$length = $_POST['length'];
 	$sql .= " LIMIT ".$start.", ".$length;
    }	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
    $sub_array[] = $row['id'];
	$sub_array[] = $row['nombre']." ".$row['apellidos'];
	$sub_array[] = $row['tel'];
	$sub_array[] = $row['puesto'];
	$sub_array[] = $row['sucursal'];
	$sub_array[] = $row['fecha_alta'];
	$sub_array[] = $row['hra_entrada'];
	$sub_array[] = $row['hra_salida'];
	if($row['estado']=='1'){
		$sub_array[] = '<a>Activo</a>';
		$sub_array[] = '<div class="dropdown">
							<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="dw dw-more"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								<a class="dropdown-item viewBtn"   href="javascript:void();" data-id="'.$row['id'].'" ><i class="dw dw-eye"></i> Detalles</a> 
								<a class="dropdown-item editarBtn" href="javascript:void();" data-id="'.$row['id'].'" ><i class="dw dw-edit2"></i> Editar</a>
								<a class="dropdown-item bajaBtn"   href="javascript:void();" data-id="'.$row['id'].'" ><i class="dw dw-delete-3 "></i> Baja</a>
							</div>
						</div>';
	}
	if($row['estado']=='2'){
		$sub_array[] = '<a>Baja</a>';
		$sub_array[] = '<div class="dropdown">
		<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
			<i class="dw dw-more"></i>
		</a>
		<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
			<a class="dropdown-item viewBtn"   href="javascript:void();" data-id="'.$row['id'].'" ><i class="dw dw-eye"></i> Detalles</a> 
		</div>
	</div>';
	}

	// $sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" >
	// <i class="bi bi-pencil-square"></i></a>  <a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" ><i class="bi bi-trash"></i></a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);
