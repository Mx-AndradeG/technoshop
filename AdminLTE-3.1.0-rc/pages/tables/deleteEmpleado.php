<?php 
ob_start();
session_start();
if (isset($_POST['deleteEmpleado'])){
	include('database.php');
	$empleados = new Database();
	$empleado=$_SESSION['id_Empleado'];
	$id_Empleado=intval($_POST['delete_idE']);
	$res1 = $empleados->deleteEmpleado($id_Empleado);
	if($res1){
		$res2=$empleados->DET($empleado);
		if($res2){

			header('location: TablaEmpleado.php');
		}
	}else{
		echo "Error al eliminar el registro";
	}
}
?>
