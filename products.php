<?php
include('dbshop.php');
$producto = new Database();
$listado = $producto->getProducts();
$brands = $producto->getBrand();
$rams = $producto->getRam();
$procs = $producto->getProcs();
$screens = $producto->getPantalla();
$aps = $producto->getAP();
$sos = $producto->getSO();
ob_start();
session_start();

if (isset($_SESSION['usuarioC'])) {
  $usuario = $_SESSION['usuarioC'];
}
?>
<!DOCTYPE html>
<html lang="en">
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NT58PWQ');</script>
<head>
  <title>Productos</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
  <meta name="author" content="MARTECH | Deer Creative Theme">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/custom_bootstrap.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/elegant.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/scroll.css">
  <link rel="stylesheet" href="assets/css/icomoon.css">
  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
  <link rel="shortcut icon" href="assets/images/shortcut_logo.png">
</head>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT58PWQ"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <div id="main">

    <header class="coffee-2">
      <nav class="navigation d-flex align-items-center">
        <div class="container">

          <div class="row">
            <div class="col-3">
              <a class="logo" href="indexuser.php"><img src="assets/images/Index/logo.png" alt="" /></a>
            </div>
            <div class="col-6">
              <div class="navgition-menu d-flex align-items-center justify-content-center">
                <ul class="mb-0">
                  <li class="toggleable">
                    <a class="menu-item" href="indexuser.php"><i class="fas fa-home"></i> Inicio</a>
                  </li>

                  <li class="toggleable">
                    <a class="menu-item" href="products.php"><i class="fas fa-shopping-bag"></i> Tienda</a>
                  </li>

                  <li class="toggleable">
                    <a class="menu-item" href="aboutus.php"><i class="fas fa-question-circle"></i> Conocenos</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-3">
              <div class="product-function d-flex align-items-center justify-content-end">

                <div class="dropdown">
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <a class="function-icon fas fa-user"><span><?php echo $usuario ?></span> <span></span></a>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="pedido.php">Mis pedidos</a>
                    <a class="dropdown-item" href="#">Mi cuenta</a>
                    <div class="dropdown-divider"></div>
                    <form method="POST">

                      <button class="dropdown-item" name="btncerrar">Cerrar sesión</button>

                    </form>
                    <?php
                    if (isset($_POST['btncerrar'])) {

                      session_destroy();
                      header('location: index.html');
                    }
                    ?>

                  </div>
                </div>

                <div id="wishlist"><a class="function-icon icon_heart_alt" href="shop_wishlist.php"></a></div>
                <div id="cart"><a class="function-icon icon_bag_alt" href="shop_cart.php"></a></div>

              </div>

            </div>
          </div>




        </div>
      </nav>

      <div id="mobile-menu">
        <div class="container">
          <div class="row">
            <div class="col-3">
              <div class="mobile-menu_block d-flex align-items-center">
                <a class="mobile-menu--control" href="#"><i class="fas fa-bars"></i></a>
                <div id="ogami-mobile-menu">
                  <button class="no-round-btn" id="mobile-menu--closebtn">
                    Cerrar
                  </button>
                  <div class="mobile-menu_items">
                    <ul class="mb-0 d-flex flex-column">
                      <li class="toggleable">
                        <a class="menu-item" href="indexuser.php"><i class="fas fa-home"></i> Inicio</a>
                      </li>

                      <li class="toggleable">
                        <a class="menu-item" ><i class="fas fa-shopping-bag"></i> Tienda</a>
                      </li>

                      <li class="toggleable">
                        <a class="menu-item" href="aboutus.php"><i class="fas fa-question-circle"></i> Conocenos</a>
                      </li>

                  </div>
                  <div class="mobile-login">
                    <h2><?php echo $usuario ?></h2>
                    <a href="pedido.php"><i class="icon_cart_alt"></i>Mis pedidos</a>
                    <a " href=" shop_wishlist.php"><i class="icon_heart_alt"></i> Lista de deseos</a>
                    <a " href=" shop_cart.php"><i class="icon_bag_alt"></i> Carrito de compras</a>
                    
                    <form method="POST">

                    <a ><button class="dropdown-item" name="btncerrarm">Cerrar sesión</button></a>

                    </form>
                  </div>
                  <?php
                    if (isset($_POST['btncerrarm'])) {

                      session_destroy();
                      header('location: index.html');
                    }
                    ?>
                  <div class="mobile-social">
                    <a href=""><i class="fab fa-facebook-f"> </i></a><a href=""><i class="fab fa-home"></i></a><a href=""><i class="fab fa-invision"> </i></a><a href=""><i class="fab fa-pinterest-p"> </i></a>
                  </div>
                </div>
                <div class="ogamin-mobile-menu_bg"></div>
              </div>
            </div>
            <div class="col-6">
              <div class="mobile-menu_logo text-center d-flex justify-content-center align-items-center">
                <a href=""><img src="assets/images/logo.png" alt="" /></a>
              </div>
            </div>
            <div class="col-3">

            </div>
          </div>
        </div>
      </div>



      <div class="navigation-filter">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 col-lg-4 col-xl-3 order-2 order-md-1">

            </div>
            <div class="col-12 col-md-8 col-lg-8 col-xl-9 order-1 order-md-2">
              <div class="row">
                <div class="col-12 order-1 order-md-2">
                  <div class="website-search">
                    <div class="row no-gutters">
                      <div class="col-0 col-md-0 col-lg-0 col-xl-0"></div>
                      <div class="col-8 col-md-8 col-lg-9 col-xl-10">
                        <div class="search-input">
                          <input id="SI" class="no-round-input no-border" type="text" placeholder="¿Qué estás buscando?" />
                        </div>
                      </div>
                      <div class="col-4 col-md-4 col-lg-3 col-xl-2">
                        <button class="no-round-btn coffee">Buscar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header END-->

    <div class="ogami-breadcrumb">
      <div class="container">
        <ul>
          <li> <a class="breadcrumb-link" href="index.html"> <i class="fas fa-home"></i>Inicio</a></li>
          <li> <a class="breadcrumb-link active" href="index.html">Catálogo</a></li>
        </ul>
      </div>
    </div>
    <!-- End breadcrumb-->
    <div class="shop-layout">
      <div class="container">
        <div class="row">
          <div class="col-xl-3">
            <div class="shop-sidebar">
              <button class="no-round-btn" id="filter-sidebar--closebtn">Close sidebar</button>
              <div class="shop-sidebar_size">
                <div class="department_top mini-tab-title underline">
                  <h2 class="title">Marcas</h2>
                </div>
                <div class="department_bottom">

                  <?php
                  while ($rbrands = mysqli_fetch_object($brands)) {
                    $marca = $rbrands->nfabricante;
                  ?>
                    <div class="size">
                      <input type="checkbox" class="product_check" id="marca" value="<?php echo $marca ?>">
                      <label for="large"><?php echo $marca ?></label>
                    </div>

                  <?php } ?>


                </div>
              </div>
              <div class="shop-sidebar_size">
                <div class="size_top mini-tab-title underline">
                  <h2 class="title">Sistema Operativo</h2>
                </div>
                <div class="size_bottom">
                  <form>
                    <?php
                    while ($rso = mysqli_fetch_object($sos)) {
                      $so = $rso->nsistema;
                    ?>
                      <div class="size">
                        <input type="checkbox" class="product_check" id="so" value="<?php echo $so ?>">
                        <label for="large"><?php echo $so ?></label>
                      </div>

                    <?php } ?>
                  </form>
                </div>
              </div>
              <div class="shop-sidebar_price-filter">
                <div class="price-filter_top mini-tab-title underline">
                  <h2 class="title">Precio</h2>
                </div>
                <div class="price-filter_bottom">
                  <p>

                  <div class="size">
                    <input type="checkbox" id="p1" class="product_check" value="7500 and 10000">
                    <label for="large">$7,500-$15,000</label>
                  </div>
                  <div class="size">
                    <input type="checkbox" id="p2" class="product_check" value="15000 and 25000">
                    <label for="large">$15,000-$25,000</label>
                  </div>
                  <div class="size">
                    <input type="checkbox" id="p3" class="product_check" value="25000 and 30000">
                    <label for="large">$25,000-30,000</label>
                  </div>
                  <div class="size">
                    <input type="checkbox" id="p4" class="product_check" value="31000">
                    <label for="large">$31,000 o más</label>
                  </div>
                  </p>

                </div>
              </div>
              <div class="shop-sidebar_size">
                <div class="size_top mini-tab-title underline">
                  <h2 class="title">RAM</h2>
                </div>
                <div class="size_bottom">
                  <form>
                    <?php
                    while ($ram = mysqli_fetch_object($rams)) {
                      $ram2 = $ram->ram;
                    ?>
                      <div class="size">
                        <input type="checkbox" id="ram" class="product_check" value="<?php echo $ram2 ?>">
                        <label for="large"><?php echo $ram2 ?></label>
                      </div>

                    <?php } ?>
                  </form>
                </div>
              </div>

              <div class="shop-sidebar_size">
                <div class="size_top mini-tab-title underline">
                  <h2 class="title">Tipo de Procesador</h2>
                </div>
                <div class="size_bottom">
                  <form>
                    <?php
                    while ($proc = mysqli_fetch_object($procs)) {
                      $proc2 = $proc->nfamilia;
                    ?>
                      <div class="size">
                        <input type="checkbox" id="proc" class="product_check" value="<?php echo $proc2 ?>">
                        <label for="large"><?php echo $proc2 ?></label>
                      </div>

                    <?php } ?>
                  </form>
                </div>
              </div>
              <div class="shop-sidebar_size">
                <div class="size_top mini-tab-title underline">
                  <h2 class="title">Almacenamiento principal</h2>
                </div>
                <div class="size_bottom">
                  <form>
                    <?php
                    while ($rap = mysqli_fetch_object($aps)) {
                      $ap = $rap->almacenamientoPrincipal;
                    ?>
                      <div class="size">
                        <input type="checkbox" id="ap" class="product_check" value="<?php echo $ap ?>">
                        <label for="large"><?php echo $ap ?></label>
                      </div>

                    <?php } ?>
                  </form>
                </div>
              </div>
              <div class="shop-sidebar_size">
                <div class="size_top mini-tab-title underline">
                  <h2 class="title">Tamaño de Pantalla</h2>
                </div>
                <div class="size_bottom">
                  <form>
                    <?php
                    while ($screen = mysqli_fetch_object($screens)) {
                      $screen2 = $screen->tamaño;
                    ?>
                      <div class="size">
                        <input type="checkbox" id="screen" class="product_check" value="<?php echo $screen2 ?>">
                        <label for="large"><?php echo $screen2 ?></label>
                      </div>

                    <?php } ?>
                  </form>
                </div>
              </div>
              <div class="shop-sidebar_tag">
                <div class="tag_top mini-tab-title underline">
                  <h2 class="title">Etiquetas</h2>
                </div>
                <div class="tag_bottom"><a class="tag-btn" href="shop_grid+list_3col.html">Gamer</a>
                  <a class="tag-btn" >Escuela</a>
                  <a class="tag-btn" >Oficina</a>
                  <a class="tag-btn" >Edición</a>
                  <a class="tag-btn" >Negocio</a>
                  <a class="tag-btn" >Ocio</a>
                </div>
              </div>
            </div>
            <div class="filter-sidebar--background" style="display: none"></div>
          </div>
          <div class="col-xl-9">
            <div class="shop-grid-list">
              <div class="shop-products">
                <div class="shop-products_top mini-tab-title underline">
                  <div class="row align-items-center">
                    <div class="col-6 col-xl-4">
                      <h2 class="title">Catálogo</h2>
                    </div>
                    <div class="col-6 text-right">
                      <div id="show-filter-sidebar">
                        <h5> <i class="fas fa-bars"></i>Filtros</h5>
                      </div>
                    </div>
                    <div class="col-12 col-xl-8">
                      <div class="product-option">
                        <div class="product-filter">
                          <select class="select-form" id="sort" name="">
                            <option disabled selected="selected">Ordenar por</option>
                            <option value=1>A-Z</option>
                            <option value=2>Más vendido</option>
                            <option value=3>Mayor precio</option>
                            <option value=4>Menor precio</option>
                          </select>
                          <select class="select-form" id="sort" name="">
                            <option value="A-Z">Show 10</option>
                            <option value="Z-A">Show 20</option>
                            <option value="High to low price">Show 30</option>
                          </select>
                        </div>
                        <div class="view-method">
                          <p class="active" id="grid-view"><i class="fas fa-th-large"></i></p>
                          <p id="list-view"><i class="fas fa-list"></i></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Using column-->
                </div>
                <div class="shop-products_bottom">
                  <div id="products" class="row no-gutters-sm">





                    <?php
                    while ($row = mysqli_fetch_object($listado)) {
                      $id_Producto = $row->id_Producto;
                      $nombre = $row->nfabricante;
                      $modelo = $row->modelo;
                      $precio = $row->precio;
                      $imagen = $row->imagen1;
                      $cantidad = $row->cantidad;
                      $condicion = $row->condicion;
                      $disponibilidad = $row->disponibilidad;



                    ?>
                      <div class="col-6 col-md-4" id="show-products_bottom" id="products">
                        <div class="product">
                          <div class="product-img_block"><a class="product-img" href="product_detail.php?sku=<?php echo $id_Producto ?>"><img src="<?php echo $imagen ?>" alt=""></a>

                          </div>
                          <div class="product-info_block">
                            <h5 class="product-type"><?php echo $nombre ?></h5><a class="product-name" href="shop__detail.html"><?php echo $modelo ?></a>
                            <h3 class="product-price">$<?php echo number_format($precio) ?>

                            </h3>
                            <h5 class="product-rated"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><span>(5)</span></h5>
                            <p class="product-describe">Condición:<?php echo $condicion ?></p>
                            <p class="product-describe">Disponibilidad:<?php echo $disponibilidad ?></p>
                            <h5 class="product-avaiable">Cantidad: <span><?php echo $cantidad ?> en stock</span></h5>
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
                              $<?php echo  number_format($precio) ?>
                            </h3>
                            <button class="add-to-cart normal-btn outline">Add to Cart</button>
                            <button class="add-to-compare normal-btn outline">+ Add to Compare</button>
                          </div>
                        </div>
                      </div>
                    <?php
                    }




                    ?>


                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End shop layout-->
    <div class="partner">
      <div class="container">
        <div class="partner_block d-flex justify-content-between" data-slick="{&quot;slidesToShow&quot;: 6}">
          <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
          <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_02.png" alt="partner logo"></a></div>
          <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
          <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_02.png" alt="partner logo"></a></div>
          <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
          <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_02.png" alt="partner logo"></a></div>
          <div class="partner--logo" href=""> <a href=""><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
        </div>
      </div>
    </div>
    <!-- End partner-->
    <footer class="coffee">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-4">
            <div class="footer-contact">
              <p>Dirección: 60-49 Road 11378 New York</p>
              <p>Teléfono: +65 11.188.888</p>
              <p>Correo: info.deercreative@gmail.com</p>

              <div class="footer-social">
                <a class="round-icon-btn coffee" href=""><i class="fab fa-facebook-f"> </i></a><a class="round-icon-btn coffee" href=""><i class="fab fa-twitter"></i></a>
              </div>

            </div>



          </div>

          <div class="col-md-8">
            <div class="row">

              <div class="col-12 col-sm-4 text-sm-center text-md-left">


                <div class="footer-quicklink">
                  <h5></h5>
                  <a href=""> </a>

                </div>
              </div>

              <div class="col-12 col-sm-4 text-sm-center text-md-left">
                <div class="footer-quicklink">
                  <h5>Información</h5>
                  <a href="about_us.html">Acerca de nosotros</a><a href="about_us.html">Contacto</a>
                  <a href="about_us.html">Terminos y Condiciones</a>
                </div>
              </div>

              <div class="col-12 col-sm-4 text-sm-center text-md-left">
                <div class="footer-quicklink">
                  <h5>Mi cuenta</h5>
                  <a href="login.html">Perfil</a><a href="shop_wishlist.html">Lista de deseos</a><a href="shop_cart.html">Carro de compra</a>
                </div>
              </div>


            </div>
          </div>

        </div>
      </div>

      <div class="newletter">
        <div class="container">
          <div class="row justify-content-between align-items-center">

          </div>
        </div>
      </div>

      <div class="footer-credit">
        <div class="container">
          <div class="footer-creadit_block d-flex flex-column flex-md-row justify-content-start justify-content-md-between align-items-baseline align-items-md-center">
            <p class="author">
              Copyright © 2021 TecnoShop - Todos los derechos reservados.
            </p>
            <img class="payment-method" src="assets/images/payment.png" alt="" />
          </div>
        </div>
      </div>


    </footer>
    <!-- END Footer-->
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/jquery-ui.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/jquery.scrollUp.min.js"></script>
  <script src="assets/js/jquery.zoom.min.js"></script>
  <script src="assets/js/parallax.js"></script>
  <script src="assets/js/jquery.fancybox.js"></script>
  <script src="assets/js/numscroller-1.0.js"></script>
  <script src="assets/js/vanilla-tilt.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="order2.js"></script>
  <script src="filter2.js"></script>
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/9400909.js"></script>

  <!-- <script src="order.js"></script> -->
  <script></script>
  <script type="text/javascript">
    $('.dropdown').click(function() {
      $('.dropdown-menu').toggleClass('show');
    });
  </script>




</body>

</html>