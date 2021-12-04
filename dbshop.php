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

   
    public function getProducts()
    {
        $sql = "SELECT * FROM laptop INNER JOIN fabricante on laptop.id_fabricante=fabricante.id_fabricante INNER JOIN imagen on laptop.id_Imagen=imagen.id_Imagen";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function productDetail($id_Producto){
        $sql = "SELECT * FROM laptop INNER JOIN fabricante on laptop.id_fabricante=fabricante.id_fabricante INNER JOIN imagen on laptop.id_Imagen=imagen.id_Imagen INNER JOIN sistema on laptop.id_Sistema=sistema.id_Sistema INNER JOIN familia on laptop.id_Familia=familia.id_Familia  INNER JOIN teclado on laptop.teclado=teclado.id_Teclado where id_Producto='" . $id_Producto . "'";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function getComment($id_Producto){
        $sql="SELECT * FROM comentario INNER JOIN cliente on comentario.id_Cliente=cliente.id_Cliente where id_Producto='" . $id_Producto . "'";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    
    public function countRev($id_Producto){
        $sql="SELECT COUNT(*) as total from comentario where id_Producto='" . $id_Producto . "'";
        $res = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_assoc($res);
      return $row['total'];
    }

    public function getBrand(){
        $sql="SELECT DISTINCT nfabricante FROM laptop INNER JOIN fabricante on laptop.id_Fabricante=fabricante.id_Fabricante ORDER BY nfabricante";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function getRam(){
        $sql="SELECT DISTINCT ram FROM laptop ORDER BY ram";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function getProcs(){
        $sql="SELECT DISTINCT nfamilia FROM laptop INNER JOIN familia on laptop.id_Familia=familia.id_Familia ORDER BY nfamilia";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function getPantalla(){
        $sql="SELECT DISTINCT tamaño FROM laptop INNER JOIN pantalla on pantalla.id_Pantalla=pantalla.id_Pantalla ORDER BY tamaño";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function getAP(){
        $sql="SELECT DISTINCT almacenamientoPrincipal FROM laptop ORDER BY almacenamientoPrincipal";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    public function getAS(){
        $sql="SELECT DISTINCT almacenamientoSecundario FROM laptop ORDER BY almacenamientoSecundario";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }

    public function getSO(){
        $sql="SELECT DISTINCT nsistema FROM laptop INNER JOIN sistema on laptop.id_Sistema=sistema.id_Sistema ORDER BY nsistema";
        $res = mysqli_query($this->con, $sql);
        return $res;
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

    public function createDeseo($cliente, $producto){
        $sql="INSERT INTO DESEO (id_Deseo,id_cliente,id_Producto) VALUES(NULL, '" . $cliente . "', '" . $producto . "')";
        $res = mysqli_query($this->con, $sql)or die(mysqli_error($this->con));
        return $res;
        
    }

    public function readDeseo($id_Cliente){
        $sql="SELECT*FROM deseo INNER JOIN laptop on deseo.id_Producto=laptop.id_Producto INNER JOIN imagen on laptop.id_Imagen=imagen.id_Imagen where id_Cliente= '" . $id_Cliente . "'";
        $res = mysqli_query($this->con, $sql)or die(mysqli_error($this->con));
        return $res;
    }
    public function readCarrito($id_Cliente){
        $sql="SELECT*FROM carrito INNER JOIN laptop on carrito.id_Producto=laptop.id_Producto INNER JOIN imagen on laptop.id_Imagen=imagen.id_Imagen where id_Cliente= '" . $id_Cliente . "'";
        $res = mysqli_query($this->con, $sql)or die(mysqli_error($this->con));
        return $res;
    }

    public function readPedido($id_Cliente){
        $sql="SELECT*FROM pedido INNER JOIN estado on pedido.id_estado=estado.id_Estado INNER JOIN laptop on pedido.id_Producto=laptop.id_Producto INNER JOIN imagen on laptop.id_Imagen=imagen.id_Imagen where id_Cliente= '" . $id_Cliente . "'";
        $res = mysqli_query($this->con, $sql)or die(mysqli_error($this->con));
        return $res;
    }



   
}
