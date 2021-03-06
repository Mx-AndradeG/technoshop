<!DOCTYPE html>
<?php
ob_start();
session_start();

if (isset($_SESSION['usuarioC'])) {
  $usuario = $_SESSION['usuarioC'];
}
?>
<html lang="en">
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NT58PWQ');</script>
<head>
  <title>Conocenos</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
  <meta name="author" content="MARTECH | Deer Creative Theme">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/stylemap.css">
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
  <div>
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
                      <a class="menu-item"><i class="fas fa-question-circle"></i> Conocenos</a>
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
                    <a class="dropdown-item" >Mi cuenta</a>
                    <div class="dropdown-divider"></div>
                    <form method="POST">

                      <button class="dropdown-item" name="btncerrar">Cerrar sesi??n</button>

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
                        <a class="menu-item"><i class="fas fa-question-circle"></i> Conocenos</a>
                      </li>

                  </div>
                  <div class="mobile-login">
                    <h2><?php echo $usuario ?></h2>
                    <a href="pedido.php"><i class="icon_cart_alt"></i>Mis pedidos</a>
                    <a " href=" shop_wishlist.php"><i class="icon_heart_alt"></i> Lista de deseos</a>
                    <a " href=" shop_cart.php"><i class="icon_bag_alt"></i> Carrito de compras</a>
                    
                    <form method="POST">

                    <a ><button class="dropdown-item" name="btncerrarm">Cerrar sesi??n</button></a>

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
    <!-- End header-->
    <div class="ogami-breadcrumb">
      <div class="container">
        <ul>
          <li> <a class="breadcrumb-link" href="indexuser.php"> <i class="fas fa-home"></i>Inicio</a></li>
          <li> <a class="breadcrumb-link active">Conocenos</a></li>
        </ul>
      </div>
    </div>
    <!-- End breadcrumb-->
    <div class="about-us">
      <div class="container">
        <div class="our-story">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="our-story_text">
                <h1 class="title green-underline">Nuestra Historia</h1>
                <p>Tecnoshop es una empresa socialmente responsable con el cliente,
                  la cual busca la comodidad y elegancia en el cliente al realizar la venta,
                  dentro de la pagina se busca la facilidad de encontrar lo que estas buscando
                  y aparte de ello establecer un laptop a tu estilo y a tu presupuesto
                </p>
                <p>Dentro de la pagina encontraras un dise??o eficiente y eficaz, que te ayudara a encontrar con mas facilidad lo que estas buscando
                  buscamos darle al cliente la mejor opcion de equipo portatil que este buscando, sabemos que es dificil encontrar un laptop economica y eficiente
                  pero nosotros tenemos la solucion para ti, Tecnoshop te ayudara a encontrar lo mas comodo para tu objetivo
                  estudiantil, mercantil, gaming, homeOffice y uso comun
                </p>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="our-story_video"><img src="assets/images/pages/logo.png" alt="play video"><a class="play-btn" href="" target="_blank"><i class="fas fa-play"></i></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="full-fluid">
        <div class="why-choose-us">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-8 col-md-4 align-self-end">
                <div class="wcu_img"><img src="assets/images/pages/eligenos.jpg" alt="image"></div>
              </div>
              <div class="col-sm-10 col-md-8">
                <div class="wcu-wrapper">
                  <div class="row">
                    <div class="col-12">
                      <h1 class="title green-underline">??Porque Elegirnos?</h1>
                    </div>
                    <div class="col-12">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="wcu-block">
                            <div class="wcu_icon">
                              <div class="icon-detail"><img src="assets/images/homepage01/ecoicon2.png" alt=""></div>
                            </div>
                            <div class="wcu_intro">
                              <h5>Economia</h5>
                              <p>Encontraras en nuestra pagina una laptop a tus medidas economicas</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="wcu-block">
                            <div class="wcu_icon">
                              <div class="icon-detail"><img src="assets/images/homepage01/facilicon2.png" alt=""></div>
                            </div>
                            <div class="wcu_intro">
                              <h5>Facilidad </h5>
                              <p>Una interfaz facil y comoda de usar para el usuario</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="wcu-block">
                            <div class="wcu_icon">
                              <div class="icon-detail"><img src="assets/images/homepage01/varicon.png" alt=""></div>
                            </div>
                            <div class="wcu_intro">
                              <h5>Variedad</h5>
                              <p>Un amplia variedad de productos comparados con la competencia</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="wcu-block">
                            <div class="wcu_icon">
                              <div class="icon-detail"><img src="assets/images/homepage01/exelicon.png" alt=""></div>
                            </div>
                            <div class="wcu_intro">
                              <h5>Excelencia </h5>
                              <p>Tenemos una gran excelencia con nuestra calidad en producto y en trato al cliente</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End breadcrumb-->
    <div class="contact-us">
      <div class="container">
        <h1 class="title green-underline">Contacto</h1>
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 300px">


          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3702.4728440573826!2d-102.26467684816612!3d21.877860377608798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee069d6cf307%3A0xd93b5294c07171a7!2sTecnol%C3%B3gico%20Nacional%20de%20M%C3%A9xico%20-%20Instituto%20Tecnol%C3%B3gico%20de%20Aguascalientes!5e0!3m2!1sen!2sus!4v1615911066746!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>


        <div class="contact-method">
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="method-block"><i class="icon_pin_alt"></i>
                <div class="method-block_text">
                  <p>Av LIC.Adolfo L??pez M.Ote 1801, Instituto Tecnol??gico de Aguascalientes, 20256 </p>
                  <p>Aguascalientes, Ags.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="method-block"><i class="icon_mail_alt"></i>
                <div class="method-block_text">
                  <p> <span>Phone:</span>449 910 5002 </p>
                  <p><span>Page:</span>https://aguascalientes.tecnm.mx/</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="method-block"><i class="icon_clock_alt"></i>
                <div class="method-block_text">
                  <p> <span>Lunes - Sabado:</span>10:00 ??? 20:00</p>
                  <p><span>Domingo:</span>Cerrado</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="faq">
          <div class="container">
            <h1 class="title green-underline">Preguntas frecuentes</h1>
            <div id="accordion">
              <div class="faq-question"><i class="icon_plus"></i>
                <h3 class="faq-question">Tienen de todo tipo de laptops?</h3>
              </div>
              <div class="faq-answer">
                <p> Claro que si manejamos tipo homeOffice, Gaming, Uso domestico y uso empresarial </p>
              </div>
              <div class="faq-question"><i class="icon_plus"></i>
                <h3 class="faq-question">Tienen servicio de envio?</h3>
              </div>
              <div class="faq-answer">
                <p>Claro que contamos con servicio de envio solo que genera un costo extra</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End about us-->
        <div class="partner">
          <div class="container">
            <div class="partner_block d-flex justify-content-between" data-slick="{&quot;slidesToShow&quot;: 6}">
              <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/laptop1.jfif" alt="partner logo" height="75" width="65"></a></div>
              <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/laptop2.jfif" alt="partner logo" height="75" width="65"></a></div>
              <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/laptop3.jpg" alt="partner logo" height="75" width="65"></a></div>
              <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/laptop4.jfif" alt="partner logo" height="75" width="65"></a></div>
              <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/laptop5.jfif" alt="partner logo" height="75" width="65"></a></div>
              <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/laptop6.jfif" alt="partner logo" height="75" width="65"></a></div>
              <div class="partner--logo" href=""> <a href=""><img src="assets/images/partner/laptop8.png" alt="partner logo" height="75" width="65"></a></div>
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
                      <h5>Informaci??n</h5>
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
                  Copyright ?? 2021 TecnoShop - Todos los derechos reservados.
                </p>
                <img class="payment-method" src="assets/images/payment.png" alt="" />
              </div>
            </div>
          </div>
        </footer>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
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
        $('.dropdown').click(function() {
          $('.dropdown-menu').toggleClass('show');
        });
      </script>

</body>

</html>
<!-- END Footer-->