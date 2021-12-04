<?php 
include 'dbshop.php';
$cliente = new Database();
$output=' ';
$conexion=mysqli_connect("localhost", "root", "" ,"technoshop");
if (isset($_POST['action'])) {
    
    
	$id_Cliente = mysqli_real_escape_string($conexion, $_POST['id']);
	$review= mysqli_real_escape_string($conexion, $_POST['review']);
	$sku= mysqli_real_escape_string($conexion, $_POST['sku']);
	$calificacion= mysqli_real_escape_string($conexion, $_POST['calificacion']);
    $query="INSERT INTO COMENTARIO (id_Comentario,id_Cliente,id_Producto,comentario,fecha,calificacion) VALUES(NULL,'" . $id_Cliente . "', '" . $sku . "',  '" . $review . "',NOW(), '" . $calificacion . "')";
    $resdeseo=mysqli_query($conexion,$query) or die(mysqli_error($conexion));

        if($resdeseo){
            $output=1;
        }else{
            $output=1;
        }
    
    
    echo $output;
}
?>