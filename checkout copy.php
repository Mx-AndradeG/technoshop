<!DOCTYPE html>
<html lang="en">
<?php 
ob_start();
session_start();

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];

}
if (isset($_SESSION['id_Cliente'])) {
  $idC = $_SESSION['id_Cliente'];

}
?>
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
  <script src="https://www.paypal.com/sdk/js?client-id=<?php echo$idC?>&currency=USD" data-namespace="paypal_sdk"></script>

    <div id="main">


      <header class="coffee-2">
        <nav class="navigation d-flex align-items-center">
          <div class="container">

            <div class="row">
              <div class="col-3">
                <a class="logo" href="index.html"
                  ><img src="assets/images/Index/logo.png" alt=""
                /></a>
              </div>
              <div class="col-6">
                <div
                  class="navgition-menu d-flex align-items-center justify-content-center"
                >
                  <ul class="mb-0">
                    <li class="toggleable">
                      <a class="menu-item" href="index.html"
                        ><i class="fas fa-home"></i> Inicio</a
                      >
                    </li>

                    <li class="toggleable">
                      <a class="menu-item" href="shop_grid+list_3col.html"
                        ><i class="fas fa-shopping-bag"></i> Tienda</a
                      >
                    </li>

                    <li class="toggleable">
                      <a class="menu-item" href="about_us.html"
                        ><i class="fas fa-question-circle"></i> Conocenos</a
                      >
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-3">
                <div
                  class="product-function d-flex align-items-center justify-content-end"
                >
                  
                <div id="login">
                  <a class="function-icon fas fa-user" href="login.html"
                    ><span>Iniciar sesion </span> <span></span></a
                  >
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
                  <a class="mobile-menu--control" href="#"
                    ><i class="fas fa-bars"></i
                  ></a>
                  <div id="ogami-mobile-menu">
                    <button class="no-round-btn" id="mobile-menu--closebtn">
                      Cerrar
                    </button>
                    <div class="mobile-menu_items">
                      <ul class="mb-0 d-flex flex-column">
                        <li class="toggleable">
                          <a class="menu-item" href="index.html"
                            ><i class="fas fa-home"></i> Inicio</a
                          >
                        </li>
    
                        <li class="toggleable">
                          <a class="menu-item" href="shop_grid+list_3col.html"
                            ><i class="fas fa-shopping-bag"></i> Tienda</a
                          >
                        </li>
    
                        <li class="toggleable">
                          <a class="menu-item" href="about_us.html"
                            ><i class="fas fa-question-circle"></i> Conocenos</a
                          >
                          <ul class="sub-menu">
                            <li><a href="faq.html">FAQ</a></li>
                            <li>
                              <a href="contact_us.html">contact us</a>
                            </li>
                          </ul>
                        </li>
                          
                    </div>
                    <div class="mobile-login">
                      <h2>Tu cuenta</h2>
                      <a href="login.html">Iniciar sesion</a
                      ><a href="register.html">Reg??strate</a>
                    </div>
                    <div class="mobile-social">
                      <a href=""><i class="fab fa-facebook-f"> </i></a
                      ><a href=""><i class="fab fa-home"></i></a
                      ><a href=""><i class="fab fa-invision"> </i></a
                      ><a href=""><i class="fab fa-pinterest-p"> </i></a>
                    </div>
                  </div>
                  <div class="ogamin-mobile-menu_bg"></div>
                </div>
              </div>
              <div class="col-6">
                <div
                  class="mobile-menu_logo text-center d-flex justify-content-center align-items-center"
                >
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
            <div id="paypal-button-container"></div>
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
                <p>Direcci??n: 60-49 Road 11378 New York</p>
                <p>Tel??fono: +65 11.188.888</p>
                <p>Correo: info.deercreative@gmail.com</p>

                <div class="footer-social">
                  <a class="round-icon-btn coffee" href=""
                    ><i class="fab fa-facebook-f"> </i></a
                  ><a class="round-icon-btn coffee" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
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
                    <h5>Informaci??n</h5>
                    <a href="about_us.html">Acerca de nosotros</a
                    ><a href="about_us.html">Contacto</a>
                    <a href="about_us.html">Terminos y Condiciones</a>
                  </div>
                </div>

                <div class="col-12 col-sm-4 text-sm-center text-md-left">
                  <div class="footer-quicklink">
                    <h5>Mi cuenta</h5>
                    <a href="login.html">Perfil</a
                    ><a href="shop_wishlist.html">Lista de deseos</a
                    ><a href="shop_cart.html">Carro de compra</a
                    >
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
            <div
              class="footer-creadit_block d-flex flex-column flex-md-row justify-content-start justify-content-md-between align-items-baseline align-items-md-center"
            >
              <p class="author">
                Copyright ?? 2021 TecnoShop - Todos los derechos reservados.
              </p>
              <img
                class="payment-method"
                src="assets/images/payment.png"
                alt=""
              />
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
    <script></script>
    <script>
      paypal_sdk.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '0.01'
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name);
          });
        }
      }).render('#paypal-button-container'); // Display payment options on your web page
    </script>
  </body>
</html>