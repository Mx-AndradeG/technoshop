
  
<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();

if (isset($_SESSION['usuario'])) {
    $usuarioingresado = $_SESSION['usuario'];
    $rolusuario = $_SESSION['roluser'];
    $empleado = $_SESSION['id_Empleado'];
}
?>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TechnoShop | Admin-Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- Tempusdominus Bootstrap 4 -->
    <link
      rel="stylesheet"
      href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
    />
    <!-- iCheck -->
    <link
      rel="stylesheet"
      href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />

    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
  </head>

  <body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">
      <!-- Navbar -->
      <nav
        class="main-header navbar navbar-expand navbar-white justify-content-center"
      >
        <!-- Left navbar links -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-12">
              <div>
                <h1>Panel de Administraci??n</h1>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>

        <!-- Right navbar links -->
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
        <!-- Brand Logo -->
        <a href="admin.php" class="brand-link">
          <img
            src="../AdminLTE-3.1.0-rc/assets/index/miniLogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">TechnoShop</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href=""  class="d-block">Iamwicho_o</a>
              <a class="d-block">Admin</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="admin.php" class="nav-link ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Resumen
                    <i class="right fas "></i>
                  </p>
                </a>
                
              </li>
              


   
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Formularios
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="cliente.html" class="nav-link active">
                      <i class="far fa-user nav-icon"></i>
                      <p>Cliente</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="empleado.html" class="nav-link">
                      <i class="far fa-id-card nav-icon"></i>
                      <p>Empleado</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="laptop.html" class="nav-link">
                      <i class="fas fa-laptop nav-icon"></i>
                      <p>Laptop</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="descuento.html" class="nav-link">
                        <i class="fas fa-laptop nav-icon"></i>
                        <p>Descuento</p>
                    </a>
                </li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Tablas
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/tables/TablaCliente.php" class="nav-link">
                      <i class="far fa-user nav-icon"></i>
                      <p>Cliente</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/tables/TablaEmpleado.php" class="nav-link">
                      <i class="far fa-id-card nav-icon"></i>
                      <p>Empleado</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/tables/TablaLaptop.php" class="nav-link">
                      <i class="fas fa-laptop nav-icon"></i>
                      <p>Laptop</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/tables/TablaDescuento.php" class="nav-link ">
                        <i class="fas fa-laptop nav-icon"></i>
                        <p>Descuento</p>
                    </a>
                </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Informes
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="chart.php" class="nav-link">
                      <i class="fas fa-tasks nav-icon"></i>
                      <p>Ordenes</p>
                    </a>
                  </li>
                 
                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="pages/tables/bitacora.php" class="nav-link ">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Bit??cora
                    <i class="right fas "></i>
                  </p>
                </a>
                
              </li>
              <li class="nav-item">
                <a href="pages/tables/ordenes.php" class="nav-link ">
                    <i class="nav-icon fas fa-box"></i>
                    <p>
                        ??rdenes
                        <i class="right fas "></i>
                    </p>
                </a>
            </li>

              
              
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="card card-primary" >
                <div class="card-header">
                  <h1 class="card-title"> Cliente</h1>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="createCliente.php" method="POST" >
                  <div class="card-body">

                    <div class="input-group row col-auto mb-4">
                   
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                        </div>
                        <input disabled type="text" class="form-control col-2" placeholder="id_Cliente" name='id_Cliente'>
    
                      
                        <div class="input-group-prepend">
                          <span class="input-group-text "><i class="fas fa-fingerprint"></i></span>
                      </div>
                      <input disabled type="text" class="form-control col-2" placeholder="id_TipoUsuario" name='id_TipoUsuario'>
                  
                      
                    </div>
                    


                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre(s)" name='nombres' id="nombres" >

                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Apellido(s)" name='apellidos' id="apellidos" >
                      </div>


                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user-astronaut"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre de Usuario" name='usuario' id="usuario" >
                      </div>

                      <div class="input-group mb-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo" name='correo' id="correo" >
                      </div>

                      <div class="input-group mb-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Contrase??a" name='contrase??a' id="contrase??a" >
                      </div>

                      <div class="input-group mb-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="number" class="form-control" placeholder="XXX-XXX-XXXX" name='telefono' id="telefono" maxlength="11" >
                      </div>
                      <div class="input-group mb-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                        </div>
                        <textarea name="direccion" id="direccion" class='form-control' maxlength="255" placeholder="Direccion" ></textarea>
                      </div>

                     
                     
                      <div class="input-group row col-auto mb-4">

                        <div class="input-group-prepend mb-4">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                            </div>
                          <select class="form-control select2" name='sexo' id="sexo" type="text" >
                            <option selected="selected">Sexo</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                          </select>
                          
                        </div>
                        
                        <div class="input-group-prepend mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-hourglass-half"></i></span>
                          </div>
                          <input type="number" class="form-control" placeholder="Edad" name='edad' id="edad" >
                        </div>

                        
                        
                      </div>
                      </div>

                     
  
                  <div class="card-footer row">
                    <button type="submit" class="btn btn-danger col-2">Cancelar</button>
                    <button type="submit" name="CCliente" id="createCliente" class="btn btn-success col-10">Registrar</button>
                  </div>
                </form>
              </div>

              
          
        </div>
        
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->


      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark fixed">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>

    <script>
    $ (function(){
$('[data-mask]').inputmask()

    })
    </script>
   <script type="text/javascript" src="validacion.js"></script>
  </body>
</html>
