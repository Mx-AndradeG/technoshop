<?php
ob_start();
require 'vendor/autoload.php';
$API_KEY = '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';
$token = random_int(100000, 999999);
//Para iniciar sesión
if (isset($_POST["login"])) {
    include 'dbshop.php';
    $link = mysqli_connect("localhost", "root", "", "technoshop");
    $usuario = $_POST["usuario"];
    $pass     = $_POST["contraseña"];
    $queryusuario = mysqli_query($link, "SELECT * FROM cliente  WHERE usuario = '" . $usuario . "' or correo= '" . $usuario . "'" );
    $nr         = mysqli_num_rows($queryusuario);
    $mostrar    = mysqli_fetch_array($queryusuario);
    $password = $mostrar['contraseña'];
    $user = $mostrar['usuario'];
    $emailuser = $mostrar['correo'];
    $stars = 4; // Min Stars to use
    $at = strpos($emailuser, '@');
    if ($at - 2 > $stars) $stars = $at - 2;
    $emailhash = substr($emailuser, 0, 1) . str_repeat('*', $stars) . substr($emailuser, $at - 1);
    
    if (($nr == 1) && (password_verify($pass, $mostrar['contraseña']))) {

        session_start();
        $_SESSION['usuarioC'] = $mostrar['usuario'];
        $_SESSION['correo'] = $mostrar['correo'];
        $_SESSION['correohash'] = $emailhash;
        $_SESSION['id_Cliente'] = $mostrar['id_Cliente'];
        $_SESSION['token'] = $token;
        header('location: Authentication.php');
    } else {
        echo "<script> alert('Usuario o contraseña incorrecto.'); window.location= 'login.html' </script>";
    }
}
