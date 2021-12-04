<?php 
ob_start();
session_start();
if (isset($_POST['deleteCliente'])){
	include('database.php');
	$cliente = new Database();
	$empleados=new Database();
	$empleado=$_SESSION['id_Empleado'];
	$id_Cliente=intval($_POST['delete_id']);
	$res1 = $cliente->deleteCliente($id_Cliente);
	if($res1){
		$res2=$empleados->DCT($empleado);
		if($res2){

			header('location: TablaCliente.php');
		}
	}else{
		echo "Error al eliminar el registro";
	}
}
?>
