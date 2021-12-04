<?php
ob_start();
session_start();
if (isset($_POST['CCliente'])){
	require_once 'pages/tables/database.php';
	$link = mysqli_connect("localhost", "root", "", "technoshop");
	$empleado=$_SESSION['id_Empleado'];
	$cliente = new Database();
	$empleados=new Database();
	$nombres = mysqli_real_escape_string($link, $_POST['nombres']); 
	$apellidos = mysqli_real_escape_string($link, $_POST['apellidos']);
    $edad= mysqli_real_escape_string($link, $_POST['edad']);
    $sexo=mysqli_real_escape_string($link, $_POST['sexo']);
	$usuario = mysqli_real_escape_string($link, $_POST['usuario']); 
	$correo = mysqli_real_escape_string($link, $_POST['correo']); 
    $contraseña=mysqli_real_escape_string($link, $_POST['contraseña']); 
	$telefono = mysqli_real_escape_string($link, $_POST['telefono']); 
	$direccion = mysqli_real_escape_string($link, $_POST['direccion']); 
	$res1 = $cliente->createCliente($nombres, $apellidos, $usuario, $contraseña, $edad, $sexo, $correo, $telefono, $direccion);
    if($res1){
		$res2=$empleados->ICT($empleado);
		if($res2){

			header('location: pages/tables/TablaCliente.php');
		}else echo 'algo salio mal en res2';
	}else{
		echo 'algo salio mal en res1';
	}
    
}


?>