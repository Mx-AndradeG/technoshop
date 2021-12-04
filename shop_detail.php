<!DOCTYPE html>
<html lang="en">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NT58PWQ');</script>
<!-- End Google Tag Manager -->
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

<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT58PWQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div id="main">

    <header class="coffee-2">
      <nav class="navigation d-flex align-items-center">
        <div class="container">

          <div class="row">
            <div class="col-3">
              <a class="logo" href="index.html"><img src="assets/images/Index/logo.png" alt="" /></a>
            </div>
            <div class="col-6">
              <div class="navgition-menu d-flex align-items-center justify-content-center">
                <ul class="mb-0">
                  <li class="toggleable">
                    <a class="menu-item" href="index.html"><i class="fas fa-home"></i> Inicio</a>
                  </li>

                  <li class="toggleable">
                    <a class="menu-item" href="shop_grid+list_3col.php"><i class="fas fa-shopping-bag"></i> Tienda</a>
                  </li>

                  <li class="toggleable">
                    <a class="menu-item" href="about_us.html"><i class="fas fa-question-circle"></i> Conocenos</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-3">
              <div class="product-function d-flex align-items-center justify-content-end">

                <div id="login">
                  <a class="function-icon fas fa-user" href="login.html"><span>Iniciar sesión </span> <span></span></a>
                </div>

               

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
                        <a class="menu-item" href="index.html"><i class="fas fa-home"></i> Inicio</a>
                      </li>

                      <li class="toggleable">
                        <a class="menu-item" href="shop_grid+list_3col.php"><i class="fas fa-shopping-bag"></i> Tienda</a>
                      </li>

                      <li class="toggleable">
                        <a class="menu-item" href="about_us.html"><i class="fas fa-question-circle"></i> Conocenos</a>
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
                    <a href="login.html">Iniciar sesión</a><a href="register.html" >Regístrate</a>
                  </div>
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
  <div class="ogami-breadcrumb">
    <div class="container">

    </div>
  </div>
  <!-- End breadcrumb-->
  <div class="shop-layout">
    <?php
  
    $sku = $_GET['sku'];
    include('dbshop.php');
    $producto = new Database();
    $listado = $producto->productDetail($sku);
    $comentarios = $producto->getComment($sku);
    $countrev=$producto->countRev($sku);
    $row = mysqli_fetch_object($listado);
    $modelo = $row->modelo;
    $fabricante = $row->nfabricante;
    $imagen1 = $row->imagen1;
    $imagen2 = $row->imagen2;
    $imagen3 = $row->imagen3;
    $precio = $row->precio;
    $sistema = $row->nsistema;
    $familia = $row->nfamilia;
    $procesador = $row->procesador;
    $ram = $row->ram;
    $graficos=$row->graficos;
    $almacenamientoPrincipal = $row->almacenamientoPrincipal;
    $almacenamientoSecundario = $row->almacenamientoSecundario;
    $puertos = $row->puertos;
    $bateria = $row->bateria;
    $idioma = $row->idioma;
    if ($row->microfono == 1) {
      $microfono = 'Si';
    } else {
      $microfono = 'No';
    }
    if ($row->camara == 1) {
      $camara = 'Si';
    } else {
      $camara = 'No';
    }
    if ($row->altavoces == 1) {
      $altavoces = 'Si';
    } else {
      $altavoces = 'No';
    }
    if ($row->unidadOptica == 1) {
      $unidadOptica = 'Si';
    } else {
      $unidadOptica = 'No';
    }
    ?>
    <div class="container">
      <div class="row">
        <div class="col-xl-3">

          <div class="filter-sidebar--background" style="display: none"></div>
        </div>
        <div class="col-xl">
          <div class="shop-detail">
            <div class="row">

              <div class="col-12 col-lg-6">
                <div class="shop-detail_img">
                  <button class="round-icon-btn" id="zoom-btn"> <i class="icon_zoom-in_alt"></i></button>
                  <div class="big-img">
                    <div class="big-img_block"><img src="<?php echo $imagen1 ?>" alt="product image"></div>
                    <div class="big-img_block"><img src="<?php echo $imagen2 ?>" alt="product image"></div>
                    <div class="big-img_block"><img src="assets/images/shop/zoom_img_3.png" alt="product image"></div>
                  </div>
                  <div class="slide-img">
                    <div class="slide-img_block"><img src="<?php echo $imagen1 ?>" alt="product image"></div>
                    <div class="slide-img_block"><img src="<?php echo $imagen2 ?>" alt="product image"></div>
                    <div class="slide-img_block"><img src="<?php echo $imagen3 ?>" alt="product image"></div>
                  </div>
                </div>
                <div class="img_control"></div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="shop-detail_info">
                  <h5 class="product-type color-type"><?php echo $fabricante ?></h5>
                  <h2 class="product-name"><?php echo $modelo ?></h2>
                  <p class="product-describe">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p><a class="product-more" href="#">View more <i class="arrow_carrot-2right"></i></a>
                 
                  <div class="price-rate">
                    <h3 class="product-price">
                      $<?php echo number_format($precio);?>
                    </h3>
                    <h5 class="product-rated"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><span>(15)</span></h5>
                  </div>

                  <div class="quantity-select">
                    <label for="quantity">Quatity:</label>
                    <input class="no-round-input" id="quantity" type="number" min="0" value="1">
                  </div>
                  <div class="product-select">
                    <button id="cart" class="add-to-cart normal-btn outline">Add to Cart</button>
                    <button id="wish" class="add-to-cart normal-btn outline">Add to wishlist</button>
                    
                  </div>
                  
                  <div class="product-share">
                    <h5>Share link:</h5><a href=""><i class="fab fa-facebook-f"> </i></a><a href=""><i class="fab fa-twitter"></i></a><a href=""><i class="fab fa-invision"> </i></a><a href=""><i class="fab fa-pinterest-p"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="shop-detail_more-info">
                  <div id="tab-so3">
                    <ul class="mb-0">
                      <li class="active"><a href="#tab-1">DESCRIPTION</a></li>
                      <li><a href="#tab-2">SPECIFICATIONS</a></li>
                      <li> <a href="#tab-3">Customer Reviews (<?php echo $countrev ?>)</a></li>
                    </ul>
                    <div id="tab-1">
                      <div class="description-block">
                        <div class="description-item_block">
                          <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                              <div class="description-item_img"><img class="img-fluid" src="<?php echo $imagen1?>" alt="description image"></div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="description-item_text">
                                <h2>Product information</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="description-item_block">
                          <div class="row align-items-center">
                            <div class="col-md-6">
                              <div class="description-item_img"><img class="img-fluid" src="<?php echo $imagen2?>" alt="description image"></div>
                            </div>
                            <div class="col-md-6">
                              <div class="description-item_text">
                                <h2>An incredible view</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="tab-2">
                      <div class="specifications_block">
                        <table class="shop_attributes table-bordered">
                          <tbody>
                            <tr>
                              <th>Sistema Operativo</th>
                              <td class="product_weight"><?php echo $sistema ?></td>
                            </tr>
                            <tr>
                              <th>Procesador</th>
                              <td class="product_dimensions"><?php echo $familia . ' ' . $procesador ?></td>
                            </tr>
                            <tr>
                              <th>RAM</th>
                              <td class="product_color"><?php echo $ram ?></td>
                            </tr>
                            <tr>
                              <th>Tarjeta Gráfica</th>
                              <td class="product_color"><?php echo $graficos ?></td>
                            </tr>
                            <tr>
                              <th>Almacenamiento Principal</th>
                              <td class="product_size"><?php echo $almacenamientoPrincipal ?></td>
                            </tr>
                            <tr>
                              <th>Almacenamiento Secundario</th>
                              <td class="product_size"><?php echo $almacenamientoSecundario ?></td>
                            </tr>
                            <tr>
                              <th>Puertos</th>
                              <td class="product_size"><?php echo $puertos ?></td>
                            </tr>
                            <tr>
                              <th>Batería</th>
                              <td class="product_size"><?php echo $bateria ?></td>
                            </tr>
                            <tr>
                              <th>Micrófono</th>
                              <td class="product_size"><?php echo $microfono ?></td>
                            </tr>
                            <tr>
                              <th>Cámara</th>
                              <td class="product_size"><?php echo $camara ?></td>
                            </tr>
                            <tr>
                              <th>Altavoces</th>
                              <td class="product_size"><?php echo $altavoces ?></td>
                            </tr>
                            <tr>
                              <th>Teclado</th>
                              <td class="product_size"><?php echo $idioma ?></td>
                            </tr>
                            <tr>
                              <th>Unidad Óptica</th>
                              <td class="product_size"><?php echo $unidadOptica ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div id="tab-3">
                      <div class="customer-reviews_block">
                        <?php
                        while ($lista = mysqli_fetch_object($comentarios)) {
                          $fecha = $lista->fecha;
                          $nombre = $lista->nombres;
                          $comentario = $lista->comentario;
                          $calificacion = $lista->calificacion;
                          $nfecha = date('F j, Y', strtotime($fecha));
                        ?>
                          <div class="customer-review">
                            <div class="row">
                              <div class="col-12 col-sm-3 col-lg-2">
                                <div class="customer-review_left">
                                  <div class="customer-review_img text-center"><img class="img-fluid" src="assets/images/shop/reviewer_01.png" alt="customer image"></div>
                                  <div class="customer-rate"><?php echo $calificacion ?>/5</div>
                                </div>
                              </div>
                              <div class="col-12 col-sm-9 col-lg-10">
                                <div class="customer-comment">
                                  <h5 class="comment-date"><?php echo $nfecha ?></h5>
                                  <h3 class="customer-name"><?php echo $nombre ?></h3>
                                  <p class="customer-commented"><?php echo $comentario ?></p>
                                </div>
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</body>

<script type="text/javascript">
$(document).ready(function(){
  $('#cart').click(function(){
    Swal.fire({
          icon: "warning",
          text: "Debes iniciar sesión para añadir productos al carrito!",
        });
  })
  $('#wish').click(function(){
    Swal.fire({
          icon: "warning",
          text: "Debes iniciar sesión para añadir productos a lista de deseos!",
        });
  })
})
</script>



</html>