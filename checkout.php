<!DOCTYPE html>
<html lang="en">
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
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NT58PWQ');</script>

<head>
  <title>Checkout</title>
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

                <div id="wishlist"><a class="function-icon icon_heart_alt" href="shop_wishlist.html"></a></div>
                <div id="cart"><a class="function-icon icon_bag_alt" href="shop_cart.html"></a></div>

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
                        <a class="menu-item"  href="products.php"><i class="fas fa-shopping-bag"></i> Tienda</a>
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
  </div>
  </header>
  <!-- Header END-->



  <!-- End breadcrumb-->
  <div class="order-step">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="order-step_block">
            <div class="row no-gutters">
              <div class="col-12 col-md-4">
                <div class="step-block step-block--1">
                  <div class="step">
                    <h2>CARRO DE COMPRAS</h2><span>01</span>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="step-block active">
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
  <div class="shop-checkout">
    <div class="container">
      <form action="" method="post">

        <div id="smart-button-container">
          <div style="text-align: center;">
            <div id="paypal-button-container"></div>
          </div>
        </div>
        <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=MXN" data-sdk-integration-source="button-factory"></script>
        <script>
          function initPayPalButton() {
            var price = parseInt((localStorage.getItem('price')))
            paypal.Buttons({
              style: {
                shape: 'rect',
                color: 'gold',
                layout: 'vertical',
                label: 'paypal',

              },


              createOrder: function(data, actions) {
                return actions.order.create({
                  purchase_units: [{
                    "amount": {
                      "currency_code": "MXN",
                      "value": price
                    },
                    item_list: {
                      items: [{
                        "name": 'hat',
                        "description": 'Brown hat.',
                        "quantity": '1',
                        "price": '1.00',
                        "currency": 'USD'
                      }]
                    }
                  }]
                });
              },

              onApprove: function(data, actions) {


                // for (var i = 0; i < test.length; i++) {
                //   var action = 'data'
                //   var sku = test[i]
                //   $.ajax({
                //     url: "cartdb.php",
                //     method: "POST",
                //     data: {
                //       action:action,
                //       id: id,
                //       sku: sku
                //     },
                //     success: function() {},
                //   });
                // }
                return actions.order.capture().then(function(details) {
                  cartDB();
                  deleteCart();
                  alert('Transaction completed by ' + details.payer.name.given_name + '!');
                  document.location.href = "order_complete.php";
                });
              },

              onError: function(err) {
                console.log(err);
              }
            }).render('#paypal-button-container');
          }

          initPayPalButton();

          function deleteCart() {
            var deletec = 'data'
            var id = localStorage.getItem('idC')
            $.ajax({
              url: "cartdb.php",
              method: "POST",
              data: {
                deletec: deletec,
                id: id,
              },
              success: function(response) {
                console.log(response)
              },
            });
          }

          function cartDB() {
            var test = JSON.parse(localStorage.getItem("idKey"));
            var id = localStorage.getItem('idC')
            for (var i = 0; i < test.length; i++) {
              var action = 'data'
              var sku = test[i]
              $.ajax({
                url: "cartdb.php",
                method: "POST",
                data: {
                  action: action,
                  id: id,
                  sku: sku
                },
                success: function(response) {
                  console.log(response)
                },
              });
            }
          }
        </script>
      </form>
    </div>
  </div>
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
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/9400909.js"></script>

  <script type="text/javascript">
    var price = (localStorage.getItem('price'));
    console.log(price)
  </script>


</body>

</html>