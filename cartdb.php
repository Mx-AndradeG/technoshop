<?php 
include 'dbshop.php';
$cliente = new Database();
$output=' ';
$conexion=mysqli_connect("localhost", "root", "" ,"technoshop");
if (isset($_POST['action'])) {
    
    
	$id_Cliente = mysqli_real_escape_string($conexion, $_POST['id']);
	$sku= mysqli_real_escape_string($conexion, $_POST['sku']);
    $query="INSERT INTO pedido(id_Pedido,id_Cliente,id_Producto,id_Estado,nombreCliente,cantidad,modelo,precio,direccion,fecha,total) VALUES(NULL,'" . $id_Cliente . "', '" . $sku . "', 1,(SELECT nombres FROM cliente where id_Cliente='" . $id_Cliente . "'),1,(SELECT modelo FROM laptop where id_Producto='" . $sku . "'),(SELECT precio FROM laptop where id_Producto='" . $sku . "'),(SELECT direccion FROM cliente where id_Cliente='" . $id_Cliente . "'),NOW(),(SELECT precio FROM laptop where id_Producto='" . $sku . "'))";
    $resdeseo=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

        echo $resdeseo;
}

if(isset($_POST['deletec'])){
    $id_Cliente = mysqli_real_escape_string($conexion, $_POST['id']);
    $query="DELETE FROM carrito where id_Cliente='" . $id_Cliente . "'";
    $resdeseo=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

        echo $resdeseo;
    
}
?>