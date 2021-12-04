<?php 
include 'dbshop.php';
$cliente = new Database();
$output=' ';
$conexion=mysqli_connect("localhost", "root", "" ,"technoshop");
if (isset($_POST['deletewish'])) {
    
    
	$id_Cliente = mysqli_real_escape_string($conexion, $_POST['id']);
	$sku= mysqli_real_escape_string($conexion, $_POST['sku']);
    $query="DELETE FROM deseo WHERE id_Cliente='" . $id_Cliente . "' AND id_Producto='" . $sku . "'";
    $resdeseo=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
   
        if($resdeseo){
            $output=1;
        }else{
            $output=2;
        }
    
    
    echo $output;
}
if (isset($_POST['deletecart'])) {
    
    
	$id_Cliente = mysqli_real_escape_string($conexion, $_POST['id']);
	$sku= mysqli_real_escape_string($conexion, $_POST['sku']);
    $query="DELETE FROM carrito WHERE id_Cliente='" . $id_Cliente . "' AND id_Producto='" . $sku . "'";
    $resdeseo=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
   
        if($resdeseo){
            $output=1;
        }else{
            $output=2;
        }
    
    
    echo $output;
}
?>