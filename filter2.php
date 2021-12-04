<?php
include 'dbshop.php';
if (isset($_POST['action'])) {
  $output = ' ';
  $sql = "SELECT*FROM laptop INNER JOIN fabricante on laptop.id_Fabricante=fabricante.id_Fabricante INNER JOIN sistema on laptop.id_Sistema=sistema.id_Sistema INNER JOIN familia on laptop.id_Familia=familia.id_Familia INNER JOIN imagen on laptop.id_Imagen=imagen.id_Imagen INNER JOIN pantalla on laptop.id_Pantalla=pantalla.id_Pantalla where nfabricante!=' ' ";
  if (isset($_POST['marca'])) {
    $brand_filter = implode("','", $_POST["marca"]);
    $sql .= "
    AND nfabricante IN('" . $brand_filter . "')
   ";
  }
  if (isset($_POST['so'])) {
    $so_filter = implode("','", $_POST["so"]);
    $sql .= "
    AND nsistema IN('" . $so_filter . "')
   ";
  }
  if (isset($_POST['ram'])) {
    $ram_filter = implode("','", $_POST["ram"]);
    $sql .= "
    AND ram IN('" . $ram_filter . "')
   ";
  }
  if (isset($_POST['screen'])) {
    $screen_filter = implode("','", $_POST["screen"]);
    $sql .= "
    AND tamaño IN('" . $screen_filter . "')
   ";
  }
  if (isset($_POST['ap'])) {
    $ap_filter = implode("','", $_POST["ap"]);
    $sql .= "
    AND almacenamientoPrincipal IN('" . $ap_filter . "')
   ";
  }
  if (isset($_POST['proc'])) {
    $proc_filter = implode("','", $_POST["proc"]);
    $sql .= "
    AND nfamilia IN('" . $proc_filter . "')
   ";
  }
  if (isset($_POST['p1'])) {
    $p1_filter = implode("','", $_POST["p1"]);
    $sql .= "
    AND precio between $p1_filter
   ";
  } 
  if (isset($_POST['p2'])) {
    $p2_filter = implode("','", $_POST["p2"]);
    $sql .= "
    AND precio between $p2_filter
   ";
  } 
  if (isset($_POST['p3'])) {
    $p3_filter = implode("','", $_POST["p3"]);
    $sql .= "
    AND precio between $p3_filter
   ";
  } 
  if (isset($_POST['p4'])) {
    $p4_filter = implode("','", $_POST["p4"]);
    $sql .= "
    AND precio > $p4_filter
   ";
  }
  $conexion=mysqli_connect("localhost", "root", "" ,"technoshop");
  $res = mysqli_query($conexion, $sql);

  if($res->num_rows>0){
      while ($row = $res->fetch_assoc()) {
          $imagen1=$row['imagen1'];
          $output.=' 
          
          
          <div class="col-6 col-md-4" id="show-products_bottom">
          <div class="product">
            <div class="product-img_block"><a class="product-img" href="product_detail.php?sku='.$row['id_Producto'].'"><img src="'.$row['imagen1'].'" alt=""></a>
  
            </div>
            <div class="product-info_block">
             
              <h5 class="product-type">'.$row['nfabricante'] .'</h5><a class="product-name" href="product_detail.php?sku='.$row['id_Producto'] .'">'.$row['modelo'] .'</a>
              <h3 class="product-price">$'.number_format($row['precio']) .'
  
              </h3>
              <h5 class="product-rated"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><span>(5)</span></h5>
              <p class="product-describe">Condición:'.$row['condicion'].'</p>
              <p class="product-describe">Disponibilidad:'.$row['disponibilidad'] .'</p>
              <h5 class="product-avaiable">Cantidad: <span>'.$row['cantidad'] .' en stock</span></h5>
              <button class="add-to-wishlist button-borderless"><i class="icon_heart_alt"></i></button>
            </div>
            <div class="product-select">
              <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
              <button class="add-to-cart round-icon-btn"> <i class="icon_bag_alt"></i></button>
              <button class="add-to-compare round-icon-btn"> <i class="fas fa-random"></i></button>
              <button class="quickview round-icon-btn"> <i class="far fa-eye"></i></button>
            </div>
            <div class="product-select_list">
              <p class="delivery-status">Envío gratis</p>
              <h3 class="product-price">
              '.number_format($row['precio']) .'
              </h3>
              <button class="add-to-cart normal-btn outline">Add to Cart</button>
              <button class="add-to-compare normal-btn outline">+ Add to Compare</button>
            </div>
          </div>
        </div>
       
          
          ';
      }
  
  }
  else{
      $output="<h3>Lo sentimos, no se encuentran productos con esos filtros</h3>";
  }
  echo $output;
  
  }

?>


 

  
  
  
    
