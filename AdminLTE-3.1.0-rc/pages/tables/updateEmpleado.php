<?php 
ob_start();
session_start();
if (!empty($_POST['updateEmpleado'])){
	require_once 'database.php';
	$link = mysqli_connect("localhost", "root", "", "technoshop");
	$empleados = new Database();
	$empleado=$_SESSION['id_Empleado'];
	$id_Empleado=intval($_POST['id_Empleado']);
	$nombres = mysqli_real_escape_string($link, $_POST['nombres']); 
	$apellidos = mysqli_real_escape_string($link, $_POST['apellidos']); 
	$usuario = mysqli_real_escape_string($link, $_POST['usuario']); 
	$correo = mysqli_real_escape_string($link, $_POST['correo']); 
	$telefono = mysqli_real_escape_string($link, $_POST['telefono']); 
	$direccion = mysqli_real_escape_string($link, $_POST['direccion']); 
	$res1 = $empleados->updateEmpleado($id_Empleado,$nombres,$apellidos,$usuario,$correo,$telefono,$direccion);
	if($res1){
		$res2=$empleados->UET($empleado);
		if($res2){

			header('location: TablaEmpleado.php');
		}
	}else{
		echo $res;
	}
    
}


?>
  
