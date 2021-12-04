<?php 
ob_start();
session_start();
if (!empty($_POST['updateCliente'])){
	require_once 'database.php';
	$link = mysqli_connect("localhost", "root", "", "technoshop");
	$cliente = new Database();
	$empleados=new Database();
	$empleado=$_SESSION['id_Empleado'];
	$id_Cliente=intval($_POST['id_Cliente']);
	$nombres = mysqli_real_escape_string($link, $_POST['nombres']); 
	$apellidos = mysqli_real_escape_string($link, $_POST['apellidos']); 
	$usuario = mysqli_real_escape_string($link, $_POST['usuario']); 
	$correo = mysqli_real_escape_string($link, $_POST['correo']); 
	$telefono = mysqli_real_escape_string($link, $_POST['telefono']); 
	$direccion = mysqli_real_escape_string($link, $_POST['direccion']); 
	$res1 = $cliente->updateCliente($id_Cliente,$nombres,$apellidos,$usuario,$correo,$telefono,$direccion);
	if($res1){
		$res2=$empleados->UCT($empleado);
		if($res2){

			header('location: TablaCliente.php');
		}
	}else{
		echo "Error al actualizar el registro";
	}
    
}


?>
  
