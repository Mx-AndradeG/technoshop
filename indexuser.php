<!DOCTYPE html>
<?php
ob_start();
session_start();

if (isset($_SESSION['usuarioC'])) {
  $usuario = $_SESSION['usuarioC'];
}
?>
<script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-NT58PWQ');
</script>
<html lang="es">

<head>
  <title>TecnoShop | Inicio</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="assets/icons/135541-gastronomy-set/svg/" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/custom_bootstrap.css" />
  <link rel="stylesheet" href="assets/css/normalize.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/elegant.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/scroll.css" />
  <link rel="stylesheet" href="assets/css/icomoon.css" />
  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
  <link rel="shortcut icon" href="assets/images/favalogo.png" />
  
</head>

<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT58PWQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
                        <a class="menu-item"><i class="fas fa-home"></i> Inicio</a>
                      </li>

                      <li class="toggleable">
                        <a class="menu-item" href="products.php"><i class="fas fa-shopping-bag"></i> Tienda</a>
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



      <div class="navigation-filter">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 col-lg-4 col-xl-3 order-2 order-md-1">
              <div class="department-menu_block down">
                <div class="department-menu d-flex justify-content-between align-items-center">
                  <img src="assets/icons/135541-gastronomy-set/png/lap.png" height="25" width="25" />
                  Marcas<span>
                    <i class="arrow_carrot-up"></i></span>
                </div>
                <div class="department-dropdown-menu down">
                  <ul>
                    <li>
                      <img src="assets/icons/135541-gastronomy-set/png/acer.png" height="25" width="25" />
                      <a href="products.php">Acer</a>
                    </li>

                    <li>
                      <img src="assets/icons/135541-gastronomy-set/png/alienware.png" height="25" width="25" />
                      <a href="products.php">Alienware</a>
                    </li>

                    <li>
                      <img src="assets/icons/135541-gastronomy-set/png/asus.png" height="25" width="25" />
                      <a href="products.php">Asus</a>
                    </li>
                    <li>
                      <img src="assets/icons/135541-gastronomy-set/png/apple.png" height="25" width="25" />
                      <a href="products.php">Apple</a>
                    </li>

                    <li>
                      <img src="assets/icons/135541-gastronomy-set/png/dell.png" height="25" width="25" />
                      <a href="products.php">Dell</a>
                    </li>

                    <li>
                      <img src="assets/icons/135541-gastronomy-set/png/hp.png" height="25" width="25" />
                      <a href="products.php">HP</a>
                    </li>

                    <li>
                      <img src="assets/icons/135541-gastronomy-set/png/huawei.png" height="25" width="25" />
                      <a href="products.php">Huawei</a>
                    </li>

                    <li>
                      <img src="assets/icons/135541-gastronomy-set/png/lenovo.png" height="25" width="25" />
                      <a href="products.php">Lenovo</a>
                    </li>
                    <li>
                      <img src="assets/icons/135541-gastronomy-set/png/microsoft.png" height="25" width="25" />
                      <a href="products.php">Microsoft</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8 col-xl-9 order-1 order-md-2">
              <div class="row">
                <div class="col-12 order-1 order-md-2">
                  <div class="website-search">
                    <div class="row no-gutters">
                      <div class="col-0 col-md-0 col-lg-0 col-xl-0"></div>
                      <div class="col-8 col-md-8 col-lg-9 col-xl-10">
                        <div class="search-input">
                          <input class="no-round-input no-border" type="text" placeholder="??Qu?? est??s buscando?" />
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



    <div class="banner_v3">

      <div class="container">
        <div class="row">
          <div class="col-xl-3"></div>

          <div class="col-12 col-xl-9">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="/assets/images/Index/Slide_1.jpg" alt="Los Angeles" style="width: 100%">
                </div>

                <div class="item">
                  <img src="/assets/images/Index/slide_2.jpeg" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                  <img src="/assets/images/Index/Slide_3.jpg" alt="Los Angeles" style="width:100%;">
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End banner v3-->

  <div class="benefit-block">
    <div class="container">
      <div class="our-benefits shadowless benefit-border">
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="benefit-detail d-flex flex-column align-items-center">
              <img class="benefit-img" src="assets/images/homepage04/benefit-icon1.png" alt="" />
              <h5 class="benefit-title">Envios R??pidos y Seguros</h5>
              <p class="benefit-describle">Republica Mexicana</p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="benefit-detail d-flex flex-column align-items-center">
              <img class="benefit-img" src="assets/images/homepage04/benefit-icon2.png" alt="" />
              <h5 class="benefit-title">Entregas a tiempo</h5>
              <p class="benefit-describle">DHL - estafeta - FedEx</p>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="benefit-detail boderless d-flex flex-column align-items-center">
              <img class="benefit-img" src="assets/images/homepage04/benefit-icon3.png" alt="" />
              <h5 class="benefit-title">Pagos seguros</h5>
              <p class="benefit-describle">pagos 100% seguros gracias a PAYPAL </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End benefit block-->

  <div class="banner_v3">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="banner-block" style="background-image: url(assets/images/index/imagensota.jpg)">
            <div class="row no-gutters justify-content-center align-items-md-center">
              <div class="col-12">
                <div class="banner-text text-center text-md-center">
                  <h5 class="color-subtitle coffee" style="color: white">
                    Productos Nuevos
                  </h5>
                  <h2 class="title" style="color: white">
                    ??De la mejor calidad!
                  </h2>
                </div>
              </div>
              <div class="col-12 col-md-5 col-xl-5"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End BIG IMAGEN block-->


  <div class="feature-products coffee">
    <div class="container">

      <div class="col-12 text-center">
        <h1 class="title mx-auto">??ltimos modelos</h1>
      </div>
      <div class="banner-group">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="small-banner" style="
                        background-image: url(assets/images/Index/back.jpg);
                      ">
                <img src="assets/images/Index/Promos/hp_omen.png" alt="small banner" />
              </div>
            </div>
            <div class="col-12 col-md-8">
              <div class="large-banner" style="
                        background-image: url(assets/images/Index/back.jpg);
                      ">
                <div class="row d-flex align-items-center justify-content-center">
                  <div class="col-10 col-sm-5 col-md-6">
                    <div class="banner-img text-center">
                      <img class="img-fluid" src="assets/images/Index/Promos/asus_rog.png" alt="large banner" />
                    </div>
                  </div>
                  <div class="col-10 col-sm-6 col-md-6">
                    <div class="banner-text text-center text-sm-left">
                      <h3>
                        OFERTAS <span> al 30% </span><br />
                        Pagos con VISA
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-8">
              <div class="large-banner" style="
                        background-image: url(assets/images/Index/back.jpg);
                      ">
                <div class="row d-flex align-items-center justify-content-center">
                  <div class="col-10 col-sm-5 col-md-6">
                    <div class="banner-img text-center">
                      <img class="img-fluid" src="assets/images/Index/Promos/alien_m15.png" alt="large banner" />
                    </div>
                  </div>

                  <div class="col-10 col-sm-6 col-md-6">
                    <div class="banner-text text-center text-sm-left">
                      <h3>
                        Equipos de la mejor <br /> <span> CALIDAD</span>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="small-banner" style="
                        background-image: url(assets/images/Index/back.jpg);
                      ">
                <img src="assets/images/Index/Promos/legion_lap.png" alt="small banner" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End OFERTAS group-->


    </div>
  </div>
  <!-- End home5 product block-->





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
  <!-- End imgagenes inferiores chicas-->

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
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/9400909.js"></script>
  <script type="text/javascript">
    $('.dropdown').click(function() {
      $('.dropdown-menu').toggleClass('show');
    });
  </script>
</body>

</html>