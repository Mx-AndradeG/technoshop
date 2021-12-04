<?php 
include 'dbshop.php';
$cliente = new Database();
$output=' ';
$conexion=mysqli_connect("localhost", "root", "" ,"technoshop");
if (isset($_POST['action'])) {
    $producto=$_POST['sku'];
    $cliente=$_POST['cliente'];
    $check="SELECT*FROM deseo where id_Cliente='" . $cliente . "' and id_Producto='" . $producto . "'";
    $rescheck=mysqli_query($conexion, $check);
    if(!empty($rescheck) && $rescheck->num_rows>0){
        $output=1;
    }else{
    $id_Producto = mysqli_real_escape_string($conexion, $_POST['sku']); 
	$id_Cliente = mysqli_real_escape_string($conexion, $_POST['cliente']);
    $query="INSERT INTO DESEO (id_Deseo,id_Cliente,id_Producto) VALUES(NULL,'" . $cliente . "', '" . $producto . "')";
    $resdeseo=mysqli_query($conexion,$query);
        if($resdeseo){
            $output=2;
        }else{
            $output=3;
        }
    }
    
    echo $output;
}
?>