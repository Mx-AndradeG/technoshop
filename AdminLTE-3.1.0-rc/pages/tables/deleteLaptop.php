<?php 
ob_start();
session_start();
if (isset($_POST['deleteLaptop'])){
	include('database.php');
	$laptop = new Database();
	$empleados=new Database();
	$empleado=$_SESSION['id_Empleado'];
	$id_Producto=intval($_POST['delete_idL']);
	$res1 = $laptop->deleteLaptop($id_Producto);
	if($res1){
		$res2=$empleados->DLT($empleado);
		if($res2){

			header('location: TablaLaptop.php');
		}
	}else{
		echo "Error al eliminar el registro";
	}
}
?>