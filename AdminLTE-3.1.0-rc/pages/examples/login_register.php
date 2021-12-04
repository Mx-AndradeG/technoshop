<?php
ob_start();
//Para iniciar sesión
if (isset($_POST["btnlogin"])) {
    require_once '../tables/database.php';
    $link = mysqli_connect("localhost", "root", "", "technoshop");
    $usuario = $_POST["usuario"];
    $pass     = $_POST["contraseña"];


    $queryusuario = mysqli_query($link, "SELECT * FROM empleado INNER JOIN usuario ON empleado.id_Tipousuario=usuario.id_Tipousuario INNER JOIN sexo ON empleado.sexo=sexo.id_Sexo WHERE usuario = '" . $usuario . "'");
    $nr         = mysqli_num_rows($queryusuario);
    $mostrar    = mysqli_fetch_array($queryusuario);
    $password=$mostrar['contraseña'];
    $passhash=password_hash($pass, PASSWORD_BCRYPT);
    $id_Empleado=$mostrar['id_Empleado'];
    $rol=$mostrar['tipo'];
   
   

    if (($nr == 1) && (password_verify($pass,$mostrar['contraseña'])) )
    {   
        
        session_start();
		$_SESSION['usuario']=$usuario;
        $_SESSION['id_Empleado']=$id_Empleado;
        $_SESSION['roluser']=$rol;
        
        header('location: ../../admin.php');
       
    } else {
        echo "<script> alert('Usuario o contraseña incorrecto.'); window.location= 'login-v2.html' </script>";
    }
}
