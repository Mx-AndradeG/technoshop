<!DOCTYPE html>
<?php
ob_start();
session_start();

if (isset($_SESSION['usuarioC'])) {
  $usuario = $_SESSION['usuarioC'];
}
if (isset($_SESSION['id_Cliente'])) {
  $idC = $_SESSION['id_Cliente'];
}
?>
<html lang="en">

<head>
  <title>Index</title>
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
                    <a ><i class="icon_bag_alt"></i> Carrito de compras</a>
                    
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
  </div>
  </header>
  <!-- Header END-->

  <!-- End breadcrumb-->
  <?php
  include('dbshop.php');
  $producto = new Database();
  $listado = $producto->readCarrito($idC);

  ?>
  <div class="order-step">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="order-step_block">
            <div class="row no-gutters">
              <div class="col-12 col-md-4">
                <div class="step-block active">
                  <div class="step">
                    <h2>Carro de Compras</h2><span>01</span>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="step-block">
                  <div class="step">
                    <h2>PAGO</h2><span>02</span>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="step-block">
                  <div class="step">
                    <h2>ORDEN COMPLETADA</h2><span>03</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End order step-->
  <div class="shopping-cart">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="product-table">
            <table class="table table-responsive">
              <colgroup>
                <col span="1" style="width: 15%">
                <col span="1" style="width: 30%">
                <col span="1" style="width: 15%">
                <col span="1" style="width: 15%">
                <col span="1" style="width: 15%">
                <col span="1" style="width: 10%">
              </colgroup>
              <thead>
                <tr>
                  <th class="product-iamge" scope="col">SKU</th>
                  <th class="product-iamge" scope="col">IMAGEN</th>
                  <th class="product-name" scope="col"> NOMBRE DEL PRODUCTO</th>
                  <th class="product-price" scope="col">PRECIO</th>
                  <th class="product-quantity" scope="col">CANTIDAD</th>

                  <th class="product-clear" scope="col">
                    <button class="no-round-btn"><i class="icon_close"></i></button>
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php
                while ($row = mysqli_fetch_object($listado)) {
                  $id = $row->id_Producto;
                  $modelo = $row->modelo;
                  $precio = $row->precio;
                  $imagen = $row->imagen1;

                ?>

                  <tr class="product-row">
                    <td class="product-sku"><?php echo $id ?></td>

                    <td class="product-iamge">
                      <div class="img-wrapper"><img src="<?php echo $imagen ?>" alt="product image"></div>
                    </td>
                    <td class="product-name"><?php echo $modelo ?></td>
                    <td class="product-price"><?php echo number_format($precio) ?></td>
                    <td class="product-quantity">
                      <input id="product-quantity" class="quantity no-round-input" type="number" min="1" max="5" value="1">
                    </td>

                    <td class="product-clear">
                      <button class="no-round-btn delete-product"><i class="icon_close"></i></button>
                    </td>
                  </tr>
                  <input type="hidden" id="idC" value="<?php echo $idC ?>"></input>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>


      </div>
      <div class="row justify-content-end">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="cart-total_block">
            <h2>total</h2>
            <table class="table">
              <colgroup>
                <col span="1" style="width: 50%">
                <col span="1" style="width: 50%">
              </colgroup>
              <tbody>
                <tr>
                  <th>SUBTOTAL</th>
                  <td id="totalpr" class="total-products"></td>
                </tr>
                <tr>
                  <th>ENVÍO</th>
                  <td>
                    <p>Envío GRATIS</p>

                  </td>
                </tr>
                <tr>
                  <th>TOTAL</th>
                  <td class="total-products"></td>
                </tr>
              </tbody>
            </table>
            <div class="checkout-method">

              <a href="checkout.php" class="normal-btn" id="checkout" role="button" aria-pressed="true"> <button class="normal-btn">Proceder al Pago</button></a>
            </div>




          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End shopping cart-->
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="store.js"></script>
  <script></script>
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/9400909.js"></script>

  <script type="text/javascript">
    $('.dropdown').click(function() {
      $('.dropdown-menu').toggleClass('show');
    });
  </script>
</body>

</html>