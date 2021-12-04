<?php

class Database
{
    private $con;
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "technoshop";
    function __construct()
    {
        $this->connect_db();
    }
    public function connect_db()
    {
        $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        if (mysqli_connect_error()) {
            die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
        }
    }

    public function readBitacora(){
        $sql = "SELECT * FROM bitacora";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function readCliente()
    {
        $sql = "SELECT * FROM cliente INNER JOIN sexo ON cliente.sexo=sexo.id_Sexo";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function countCliente()
    {
        $sql = "SELECT * FROM cliente INNER JOIN sexo ON cliente.sexo=sexo.id_Sexo";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_num_rows($res);
        return $filas;
    }
    public function readSexo()
    {
        $sql = "SELECT * FROM sexo";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function readEmpleado()
    {
        $sql = "SELECT * FROM empleado INNER JOIN usuario ON empleado.id_Tipousuario=usuario.id_Tipousuario INNER JOIN sexo ON empleado.sexo=sexo.id_Sexo";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function readPedido()
    {
        $sql = "SELECT * FROM pedido INNER JOIN estado ON pedido.id_Estado=estado.id_Estado";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function readLaptop()
    {
        $sql = "SELECT * FROM laptop";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function readDescuento()
    {
        $sql = "SELECT * FROM descuento";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function countLaptop()
    {
        $sql = "SELECT * FROM laptop";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_num_rows($res);
        return $filas;
    }
    

    public function createCliente($nombres, $apellidos, $usuario, $contraseña, $edad, $sexo, $correo, $telefono, $direccion)
    {
        $sha = password_hash($contraseña, PASSWORD_BCRYPT);
        $sql = "INSERT INTO cliente (id_Cliente,id_Tipousuario, nombres, apellidos, edad, sexo, usuario, correo, contraseña, telefono,direccion) VALUES (NULL, 'A', '" . $nombres . "','" . $apellidos . "', $edad, (SELECT id_Sexo from sexo where sexo='" . $sexo . "'), '" . $usuario . "', '" . $correo . "', '" . $sha . "',  '" . $telefono . "', '" . $direccion . "' )";
        $res = mysqli_query($this->con, $sql);
        return $res;
        if ($res) {
            return true;
        } else {
            return $res;
        }

        
    }


    public function createEmpleado($id_Tipousuario, $nombres, $apellidos, $usuario, $contraseña, $edad, $sexo, $correo, $telefono, $direccion)
    {
        $sha = password_hash($contraseña, PASSWORD_BCRYPT);
        $sql = "INSERT INTO empleado (id_Empleado,id_Tipousuario, nombres, apellidos, edad, sexo, usuario, correo, contraseña, telefono,direccion) VALUES (NULL, (SELECT id_Tipousuario from usuario where tipo='" . $id_Tipousuario . "'), '" . $nombres . "','" . $apellidos . "', $edad, (SELECT id_Sexo from sexo where sexo='" . $sexo . "'), '" . $usuario . "', '" . $correo . "', '" . $sha . "',  '" . $telefono . "', '" . $direccion . "' )";
        $res = mysqli_query($this->con, $sql)or die(mysqli_error($this->con));
        return $res;
        if ($res) {
            return true;
        } else {
            return $res;
        }
    }

    public function createLaptop( $cantidad, $condicion, $disponibilidad, $id_fabricante, $modelo, $precio, $id_Sistema, $ram, $graficos, $almacenamientoPrincipal, $almacenamientoSecundario, $id_Familia, $procesador, $puertos, $wifi, $bluetooth, $garantia, $microfono, $camara, $altavoces, $teclado, $unidadOptica, $bateria)
    {   
        
        $sql = "INSERT INTO laptop (id_Producto,cantidad,condicion,disponibilidad,id_fabricante,
        modelo,precio,id_Imagen,
        id_Sistema,ram,graficos,almacenamientoPrincipal,almacenamientoSecundario,
        id_Familia,procesador,puertos,wifi,bluetooth,garantia,microfono,camara,altavoces,teclado,
        unidadOptica,bateria,id_Pantalla) VALUES (NULL,'".$cantidad."','".$condicion."','".$disponibilidad."',
         (SELECT id_fabricante from fabricante where nfabricante='".$id_fabricante."'),'".$modelo."','".$precio."',
         (SELECT id_Imagen FROM imagen ORDER BY id_Imagen DESC LIMIT 1),
        (SELECT id_Sistema from sistema where nsistema='".$id_Sistema."'),'".$ram."','".$graficos."',
        '".$almacenamientoPrincipal."','".$almacenamientoSecundario."',
        (SELECT id_Familia from familia where nfamilia='".$id_Familia."'),'".$procesador."',
        '".$puertos."',(SELECT id_Eleccion from eleccion where eleccion='".$wifi."'),
        (SELECT id_Eleccion from eleccion where eleccion='".$bluetooth."'),'".$garantia."',
        (SELECT id_Eleccion from eleccion where eleccion='".$microfono."'),
        (SELECT id_Eleccion from eleccion where eleccion='".$camara."'),
        (SELECT id_Eleccion from eleccion where eleccion='".$altavoces."'),
        (SELECT id_Teclado from teclado where idioma='".$teclado."'),
        (SELECT id_Eleccion from eleccion where eleccion='".$unidadOptica."'),
        '".$bateria."',(SELECT id_Pantalla FROM pantalla ORDER BY id_Pantalla DESC LIMIT 1))";
        $res = mysqli_query($this->con, $sql)or die(mysqli_error($this->con));
        return $res;
        if ($res) {
            return true;
        } else {
            return $res;
        }
    }

    public function createPantalla($tamaño,$resolucion,$frecuencia){
        $sql = "INSERT INTO pantalla (id_Pantalla, tamaño, resolucion, frecuencia) VALUES (NULL,  '" . $tamaño . "','" . $resolucion . "',  '" . $frecuencia . "' )";
        $res = mysqli_query($this->con, $sql)or die(mysqli_error($this->con));
        return $res;
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function createDescuento($id_Producto, $precio_des)
    {
        $sql = "INSERT INTO descuento (id_des,id_Producto, modelo, disponibilidad, precio, precio_des) VALUES (NULL, '" . $id_Producto . "',(SELECT modelo from laptop where id_Producto='" . $id_Producto . "'), (SELECT disponibilidad from laptop where id_Producto='" . $id_Producto . "'), (SELECT precio from laptop where id_Producto='" . $id_Producto . "'), '" . $precio_des . "')";
        $res = mysqli_query($this->con, $sql);
        return $res;
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function createImagen($imagen1,$imagen2,$imagen3){
        $sql = "INSERT INTO imagen (id_Imagen, imagen1, imagen2, imagen3) VALUES (NULL,  '" . $imagen1 . "','" . $imagen2 . "',  '" . $imagen3 . "')";
        $res = mysqli_query($this->con, $sql);
        return $res;
        if ($res) {
            return true;
        } else {
            return false;
        }
    }




    public function deleteCliente($id_Cliente)
    {
        $sql = "DELETE FROM cliente WHERE id_Cliente=$id_Cliente";
        $res = mysqli_query($this->con, $sql)or die(mysqli_error($this->con));
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteEmpleado($id_Empleado)
    {
        $sql = "DELETE FROM empleado WHERE id_Empleado=$id_Empleado";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteLaptop($id_Producto)
    {
        $sql = "DELETE FROM laptop WHERE id_Producto=$id_Producto";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function updateCliente($id_Cliente, $nombres, $apellidos, $usuario, $correo, $telefono, $direccion)
    {
        $sql =  "UPDATE cliente SET nombres = '" . $nombres . "', apellidos='" . $apellidos . "', usuario='" . $usuario . "', correo='" . $correo . "',telefono='" . $telefono . "',direccion='" . $direccion . "' WHERE id_Cliente = '" . $id_Cliente . "' ";
        $res = mysqli_query($this->con, $sql)or die(mysqli_error($this->con));
        if ($res) {
            return true;
        } else {
            echo $res;
        }
    }

    public function updateEmpleado($id_Empleado, $nombres, $apellidos, $usuario, $correo, $telefono, $direccion)
    {
        $sql =  "UPDATE empleado SET nombres = '" . $nombres . "', apellidos='" . $apellidos . "', usuario='" . $usuario . "',correo='" . $correo . "',telefono='" . $telefono . "',direccion='" . $direccion . "' WHERE id_Empleado = '" . $id_Empleado . "' ";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function updateLaptop($id_Producto, $condicion, $disponibilidad, $modelo, $ram, $graficos, $almacenamientoPrincipal, $almacenamientoSecundario, $puertos, $bateria)
    {
        $sql =  "UPDATE laptop SET condicion = '" . $condicion . "', disponibilidad='" . $disponibilidad . "', modelo='" . $modelo . "',ram='" . $ram . "',graficos='" . $graficos . "',almacenamientoPrincipal='" . $almacenamientoPrincipal . "',almacenamientoSecundario='" . $almacenamientoSecundario . "',puertos='" . $puertos . "', bateria='" . $bateria . "' WHERE id_Producto = '" . $id_Producto . "' ";
        $res = mysqli_query($this->con, $sql);
        if ($res) {
            return true;
        } else {
            echo $res;
        }
    }

    public function updatePedido($id_Pedido,$id_Estado)
    {
        $sql =  "UPDATE pedido SET id_Estado = (SELECT id_Estado from estado WHERE estado='" . $id_Estado . "') WHERE id_Pedido = '" . $id_Pedido . "' ";
        $res = mysqli_query($this->con, $sql);
        if (isset($res)) {
            return true;
        } else {
            echo $res;
        }
    }
    public function countPedido()
    {
        $sql = "SELECT * FROM pedido";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_num_rows($res);
        return $filas;
    }

    public function ventas1()
    {
        $sql = "SELECT SUM(total) FROM `pedido` WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-01-01' AND '2021-02-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventas2()
    {
        $sql = "SELECT SUM(total) FROM `pedido` WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-02-01' AND '2021-03-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventas3()
    {
        $sql = "SELECT SUM(total) FROM `pedido` WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-03-01' AND '2021-04-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventas4()
    {
        $sql = "SELECT SUM(total) FROM `pedido` WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-04-01' AND '2021-05-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventas5()
    {
        $sql = "SELECT SUM(total) FROM `pedido` WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-05-01' AND '2021-06-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventas6()
    {
        $sql = "SELECT SUM(total) FROM `pedido` WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-06-01' AND '2021-07-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventas7()
    {
        $sql = "SELECT SUM(total) FROM `pedido` WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-07-01' AND '2021-08-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventas8()
    {
        $sql = "SELECT SUM(total) FROM `pedido` WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-08-01' AND '2021-09-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventas9()
    {
        $sql = "SELECT SUM(total) FROM `pedido` WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-09-01' AND '2021-10-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventas10()
    {
        $sql = "SELECT SUM(total) FROM `pedido` WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-10-01' AND '2021-11-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventas11()
    {
        $sql = "SELECT SUM(total) FROM `pedido` WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-11-01' AND '2021-12-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventas12()
    {
        $sql = "SELECT SUM(total) FROM pedido WHERE (id_Estado = 2) AND (fecha BETWEEN '2021-12-01' AND '2022-01-01')";
        $res = mysqli_query($this->con, $sql);
        $filas=mysqli_fetch_array($res);
        return $filas;
    }

    public function ventasEn()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-01-01' AND '2021-02-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasEn2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-01-01' AND '2021-02-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasFe()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-02-01' AND '2021-03-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasFe2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-02-01' AND '2021-03-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasMar()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-03-01' AND '2021-04-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasMar2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-03-01' AND '2021-04-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasAb()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-04-01' AND '2021-05-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasAb2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-04-01' AND '2021-05-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasMay()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-05-01' AND '2021-06-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasMay2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-05-01' AND '2021-06-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasJun()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-06-01' AND '2021-07-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasJun2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-06-01' AND '2021-07-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasJul()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-07-01' AND '2021-08-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasJul2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-07-01' AND '2021-08-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasAg()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-08-01' AND '2021-09-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasAg2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-08-01' AND '2021-09-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasSe()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-09-01' AND '2021-10-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasSe2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-09-01' AND '2021-10-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasOc()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-10-01' AND '2021-11-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasOc2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-10-01' AND '2021-11-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasNo()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-11-01' AND '2021-12-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasNo2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-11-01' AND '2021-12-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasDi()
    {
        $sql = "SELECT SUM(total) AS Total FROM `pedido` WHERE fecha BETWEEN '2021-12-01' AND '2022-01-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ventasDi2()
    {
        $sql = "SELECT id_Producto FROM `pedido` WHERE fecha BETWEEN '2021-12-01' AND '2022-01-01' GROUP BY id_Producto";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVEn()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-01-01' AND '2021-02-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2En()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-01-01' AND '2021-02-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVFe()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-02-01' AND '2021-03-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2Fe()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-02-01' AND '2021-03-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVMar()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-03-01' AND '2021-04-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2Mar()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-03-01' AND '2021-04-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVAb()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-04-01' AND '2021-05-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2Ab()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-04-01' AND '2021-05-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVMay()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-05-01' AND '2021-06-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2May()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-05-01' AND '2021-06-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVJun()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-06-01' AND '2021-07-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2Jun()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-06-01' AND '2021-07-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVJul()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-07-01' AND '2021-08-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2Jul()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-07-01' AND '2021-08-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVAg()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-08-01' AND '2021-09-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2Ag()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-08-01' AND '2021-09-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVSe()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-09-01' AND '2021-10-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2Se()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-09-01' AND '2021-10-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVOc()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-10-01' AND '2021-11-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2Oc()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-10-01' AND '2021-11-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVNo()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-11-01' AND '2021-12-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2No()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-11-01' AND '2021-12-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masVDi()
    {
        $sql = "SELECT SUM(cantidad) AS Cantidad FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-12-01' AND '2022-01-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masV2Di()
    {
        $sql = "SELECT id_Producto FROM pedido WHERE id_Estado=2 AND (fecha BETWEEN '2021-12-01' AND '2022-01-01') GROUP BY id_Producto ORDER BY COUNT(cantidad) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    
    public function masC()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masC2()
    {
        $sql = "SELECT id_Producto FROM comentario GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliEn()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-01-01' AND '2021-02-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliEn2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-01-01' AND '2021-02-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliFe()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-02-01' AND '2021-03-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliFe2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-02-01' AND '2021-03-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliMar()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-03-01' AND '2021-04-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliMar2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-03-01' AND '2021-04-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliAb()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-04-01' AND '2021-05-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliAb2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-04-01' AND '2021-05-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliMay()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-05-01' AND '2021-06-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliMay2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-05-01' AND '2021-06-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliJun()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-06-01' AND '2021-07-01'GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliJun2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-06-01' AND '2021-07-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliJul()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-07-01' AND '2021-08-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliJul2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-07-01' AND '2021-08-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliAg()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-08-01' AND '2021-09-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliAg2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-08-01' AND '2021-09-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliSe()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-09-01' AND '2021-10-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliSe2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-09-01' AND '2021-10-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliOc()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-10-01' AND '2021-11-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliOc2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-10-01' AND '2021-11-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliNo()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-11-01' AND '2021-12-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliNo2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-11-01' AND '2021-12-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliDi()
    {
        $sql = "SELECT (SUM(calificacion)/ COUNT(calificacion)) AS Calificacion FROM comentario WHERE fecha BETWEEN '2021-12-01' AND '2022-01-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function caliDi2()
    {
        $sql = "SELECT id_Producto FROM comentario WHERE fecha BETWEEN '2021-12-01' AND '2022-01-01' GROUP BY id_Producto ORDER BY (SUM(calificacion)/ COUNT(calificacion)) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masD()
    {
        $sql = "SELECT COUNT(id_Deseo) AS Deseos FROM deseo GROUP BY id_Producto ORDER BY COUNT(id_Deseo) DESC";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function masD2()
    {
        $sql = "SELECT id_Producto FROM deseo  GROUP BY id_Producto ORDER BY COUNT(id_Deseo) DESC ";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function ICT($empleado){
        $sql = "INSERT INTO bitacora values(NUll,'".$empleado."','Registro insertado','Cliente',NOW())";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function UCT($empleado){
        $sql = "INSERT INTO bitacora values(NUll,'".$empleado."','Registro actualizado','Cliente',NOW())";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function DCT($empleado){
        $sql = "INSERT INTO bitacora values(NUll,'".$empleado."','Registro eliminado','Cliente',NOW())";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function IET($empleado){
        $sql = "INSERT INTO bitacora values(NUll,'".$empleado."','Registro insertado','Empleado',NOW())";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function UET($empleado){
        $sql = "INSERT INTO bitacora values(NUll,'".$empleado."','Registro actualizado','Empleado',NOW())";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function DET($empleado){
        $sql = "INSERT INTO bitacora values(NUll,'".$empleado."','Registro eliminado','Empleado',NOW())";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function ILT($empleado){
        $sql = "INSERT INTO bitacora values(NUll,'".$empleado."','Registro insertado','Laptop',NOW())";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function ULT($empleado){
        $sql = "INSERT INTO bitacora values(NUll,'".$empleado."','Registro actualizado','Laptop',NOW())";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function DLT($empleado){
        $sql = "INSERT INTO bitacora values(NUll,'".$empleado."','Registro eliminado','Laptop',NOW())";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
}
