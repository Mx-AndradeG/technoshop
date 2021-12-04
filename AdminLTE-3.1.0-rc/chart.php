<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();

if (isset($_SESSION['usuario'])) {
    $usuarioingresado = $_SESSION['usuario'];
    $id= $_SESSION['id_Empleado'];
}
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TechnoShop | Admin-Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white justify-content-center">
            <!-- Left navbar links -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-12">
                        <div>
                            <h1>Estadísticas</h1>
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
                <img src="/AdminLTE-3.1.0-rc/assets/index/miniLogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: 0.8" />
                <span class="brand-text font-weight-light">TechnoShop</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="" class="d-block"><?php $usuarioingresado?></a>
                        <a class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
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
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Formularios
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="cliente.php" class="nav-link active">
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
                                        <i class="fas fa-dollar-sign nav-icon"></i>
                                        <p>Descuentos</p>
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
                                    <a href="pages/tables/TablaDescuento.php" class="nav-link">
                                        <i class="fas fa-dollar-sign nav-icon"></i>
                                        <p>Descuentos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Informes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link active">
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
                                    Bitácora
                                    <i class="right fas "></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/ordenes.php" class="nav-link ">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Órdenes
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

            <!-- /.card-header -->
            <!-- form start -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            include('pages/tables/database.php');
                            $numc = new Database();
                            $jan = $numc->ventas1();
                            $feb = $numc->ventas2();
                            $mar = $numc->ventas3();
                            $apr = $numc->ventas4();
                            $may = $numc->ventas5();
                            $jun = $numc->ventas6();
                            $jul = $numc->ventas7();
                            $aug = $numc->ventas8();
                            $sep = $numc->ventas9();
                            $oct = $numc->ventas10();
                            $nov = $numc->ventas11();
                            $dec = $numc->ventas12();
                            ?>

                            <h4>Ventas</h4>

                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill"
                                                href="#custom-tabs-two-home" role="tab"
                                                aria-controls="custom-tabs-two-home" aria-selected="true">2021</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile" role="tab"
                                                aria-controls="custom-tabs-two-profile" aria-selected="false">E</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages" role="tab"
                                                aria-controls="custom-tabs-two-messages" aria-selected="false">F</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings" role="tab"
                                                aria-controls="custom-tabs-two-settings" aria-selected="false">M</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile2-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile2" role="tab"
                                                aria-controls="custom-tabs-two-profile2" aria-selected="false">A</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages2-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages2" role="tab"
                                                aria-controls="custom-tabs-two-messages2" aria-selected="false">M</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings2-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings2" role="tab"
                                                aria-controls="custom-tabs-two-settings2" aria-selected="false">J</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile3-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile3" role="tab"
                                                aria-controls="custom-tabs-two-profile3" aria-selected="false">J</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages3-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages3" role="tab"
                                                aria-controls="custom-tabs-two-messages3" aria-selected="false">A</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings3-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings3" role="tab"
                                                aria-controls="custom-tabs-two-settings3" aria-selected="false">S</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile4-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile4" role="tab"
                                                aria-controls="custom-tabs-two-profile4" aria-selected="false">O</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages4-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages4" role="tab"
                                                aria-controls="custom-tabs-two-messages4" aria-selected="false">N</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings4-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings4" role="tab"
                                                aria-controls="custom-tabs-two-settings4" aria-selected="false">D</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-two-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-home-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart1"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart2"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart3"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile2" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile2-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart4"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages2" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages2-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart5"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings2" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings2-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart6"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile3" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile3-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart7"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages3" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages3-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart8"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings3" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings3-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart9"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile4" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile4-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart10"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages4" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages4-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart11"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings4" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings4-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="areaChart12"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>

                            <h4>Productos más calificados</h4>

                            <div class="card card-success card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-two-home2-tab" data-toggle="pill"
                                                href="#custom-tabs-two-home2" role="tab"
                                                aria-controls="custom-tabs-two-home2" aria-selected="true">2021</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile5-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile5" role="tab"
                                                aria-controls="custom-tabs-two-profile5" aria-selected="false">E</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages5-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages5" role="tab"
                                                aria-controls="custom-tabs-two-messages5" aria-selected="false">F</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings5-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings5" role="tab"
                                                aria-controls="custom-tabs-two-settings5" aria-selected="false">M</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile6-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile6" role="tab"
                                                aria-controls="custom-tabs-two-profile6" aria-selected="false">A</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages6-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages6" role="tab"
                                                aria-controls="custom-tabs-two-messages6" aria-selected="false">M</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings6-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings6" role="tab"
                                                aria-controls="custom-tabs-two-settings6" aria-selected="false">J</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile7-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile7" role="tab"
                                                aria-controls="custom-tabs-two-profile7" aria-selected="false">J</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages7-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages7" role="tab"
                                                aria-controls="custom-tabs-two-messages7" aria-selected="false">A</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings7-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings7" role="tab"
                                                aria-controls="custom-tabs-two-settings7" aria-selected="false">S</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile8-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile8" role="tab"
                                                aria-controls="custom-tabs-two-profile8" aria-selected="false">O</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages8-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages8" role="tab"
                                                aria-controls="custom-tabs-two-messages8" aria-selected="false">N</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings8-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings8" role="tab"
                                                aria-controls="custom-tabs-two-settings8" aria-selected="false">D</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-two-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-two-home2"
                                            role="tabpanel" aria-labelledby="custom-tabs-two-home2-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile5" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile5-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart1"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages5" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages5-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart2"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings5" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings5-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart3"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile6" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile6-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart4"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages6" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages6-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart5"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings6" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings6-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart6"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile7" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile7-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart7"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages7" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages7-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart8"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings7" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings7-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart9"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile8" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile8-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart10"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages8" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages8-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart11"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings8" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings8-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="barChart12"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- /.col (LEFT) -->


                        <div class="col-md-6">

                            <h4>Productos más deseados</h4>

                            <div class="card card-danger card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-two-home3-tab" data-toggle="pill"
                                                href="#custom-tabs-two-home3" role="tab"
                                                aria-controls="custom-tabs-two-home3" aria-selected="true">2021</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-two-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-two-home3"
                                            role="tabpanel" aria-labelledby="custom-tabs-two-home3-tab">
                                            <div class="card-body">
                                                <canvas id="donutChart"
                                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>

                            <h4>Productos más vendidos</h4>

                            <div class="card card-info card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-two-home4-tab" data-toggle="pill"
                                                href="#custom-tabs-two-home4" role="tab"
                                                aria-controls="custom-tabs-two-home4" aria-selected="true">2021</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile9-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile9" role="tab"
                                                aria-controls="custom-tabs-two-profile9" aria-selected="false">E</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages9-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages9" role="tab"
                                                aria-controls="custom-tabs-two-messages9" aria-selected="false">F</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings9-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings9" role="tab"
                                                aria-controls="custom-tabs-two-settings9" aria-selected="false">M</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile10-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile10" role="tab"
                                                aria-controls="custom-tabs-two-profile10" aria-selected="false">A</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages10-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages10" role="tab"
                                                aria-controls="custom-tabs-two-messages10" aria-selected="false">M</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings10-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings10" role="tab"
                                                aria-controls="custom-tabs-two-settings10" aria-selected="false">J</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile11-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile11" role="tab"
                                                aria-controls="custom-tabs-two-profile11" aria-selected="false">J</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages11-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages11" role="tab"
                                                aria-controls="custom-tabs-two-messages11" aria-selected="false">A</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings11-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings11" role="tab"
                                                aria-controls="custom-tabs-two-settings11" aria-selected="false">S</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-profile12-tab" data-toggle="pill"
                                                href="#custom-tabs-two-profile12" role="tab"
                                                aria-controls="custom-tabs-two-profile12" aria-selected="false">O</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-messages12-tab" data-toggle="pill"
                                                href="#custom-tabs-two-messages12" role="tab"
                                                aria-controls="custom-tabs-two-messages12" aria-selected="false">N</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-two-settings12-tab" data-toggle="pill"
                                                href="#custom-tabs-two-settings12" role="tab"
                                                aria-controls="custom-tabs-two-settings12" aria-selected="false">D</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-two-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-two-home4"
                                            role="tabpanel" aria-labelledby="custom-tabs-two-home4-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChart"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile9" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile9-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartEn"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages9" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages9-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartFe"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings9" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings9-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartMar"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile10" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile10-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartAb"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages10" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages10-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartMay"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings10" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings10-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartJun"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile11" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile11-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartJul"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages11" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages11-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartAg"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings11" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings11-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartSe"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-profile12" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-profile12-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartOc"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-messages12" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-messages12-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartNo"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-two-settings12" role="tabpanel"
                                            aria-labelledby="custom-tabs-two-settings12-tab">
                                            <div class="card-body">
                                                <div class="chart">
                                                    <canvas id="lineChartDi"
                                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- /.col (RIGHT) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
        </div>



    </div>

    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">

    </footer>

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
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php echo $jan[0]; ?>, <?php echo $feb[0]; ?>, <?php echo $mar[0]; ?>,
                    <?php echo $apr[0]; ?>, <?php echo $may[0]; ?>, <?php echo $jun[0]; ?>,
                    <?php echo $jul[0]; ?>, <?php echo $aug[0]; ?>, <?php echo $sep[0]; ?>,
                    <?php echo $oct[0]; ?>, <?php echo $nov[0]; ?>, <?php echo $dec[0]; ?>
                ]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Enero-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart1').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta1 = new Database();
                    $V1 = $venta1->ventasEn2();
                        while($prueba=mysqli_fetch_object($V1)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta1_1 = new Database();
                                    $C1 = $venta1_1->ventasEn();
                                        while($prueba=mysqli_fetch_object($C1)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Febrero-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart2').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta2 = new Database();
                    $V2 = $venta2->ventasFe2();
                        while($prueba=mysqli_fetch_object($V2)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta2_2 = new Database();
                                    $C2 = $venta2_2->ventasFe();
                                        while($prueba=mysqli_fetch_object($C2)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Marzo-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart3').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta3 = new Database();
                    $V3 = $venta3->ventasMar2();
                        while($prueba=mysqli_fetch_object($V3)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta3_3 = new Database();
                                    $C3 = $venta3_3->ventasMar();
                                        while($prueba=mysqli_fetch_object($C3)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Abril-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart4').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta4 = new Database();
                    $V4 = $venta4->ventasAb2();
                        while($prueba=mysqli_fetch_object($V4)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta4_4 = new Database();
                                    $C4 = $venta4_4->ventasAb();
                                        while($prueba=mysqli_fetch_object($C4)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Mayo-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart5').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta5 = new Database();
                    $V5 = $venta5->ventasMay2();
                        while($prueba=mysqli_fetch_object($V5)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta5_5 = new Database();
                                    $C5 = $venta5_5->ventasMay();
                                        while($prueba=mysqli_fetch_object($C5)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Junio-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart6').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta6 = new Database();
                    $V6 = $venta6->ventasJun2();
                        while($prueba=mysqli_fetch_object($V6)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta6_6 = new Database();
                                    $C6 = $venta6_6->ventasJun();
                                        while($prueba=mysqli_fetch_object($C6)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Julio-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart7').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta7 = new Database();
                    $V7 = $venta7->ventasJul2();
                        while($prueba=mysqli_fetch_object($V7)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta7_7 = new Database();
                                    $C7 = $venta7_7->ventasJul();
                                        while($prueba=mysqli_fetch_object($C7)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Agosto-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart8').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta8 = new Database();
                    $V8 = $venta8->ventasAg2();
                        while($prueba=mysqli_fetch_object($V8)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta8_8 = new Database();
                                    $C8 = $venta8_8->ventasAg();
                                        while($prueba=mysqli_fetch_object($C8)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Septiembre-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart9').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta9 = new Database();
                    $V9 = $venta9->ventasSe2();
                        while($prueba=mysqli_fetch_object($V9)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta9_9 = new Database();
                                    $C9 = $venta9_9->ventasSe();
                                        while($prueba=mysqli_fetch_object($C9)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Octubre-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart10').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta10 = new Database();
                    $V10 = $venta10->ventasOc2();
                        while($prueba=mysqli_fetch_object($V10)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta10_10 = new Database();
                                    $C10 = $venta10_10->ventasOc();
                                        while($prueba=mysqli_fetch_object($C10)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Noviembre-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart11').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta11 = new Database();
                    $V11 = $venta11->ventasNo2();
                        while($prueba=mysqli_fetch_object($V11)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta11_11 = new Database();
                                    $C11 = $venta11_11->ventasNo();
                                        while($prueba=mysqli_fetch_object($C11)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //--------------
        //- AREA CHART Diciembre-
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart12').get(0).getContext('2d')

        var areaChartData = {
            labels: [<?php 
                    $venta12 = new Database();
                    $V12 = $venta12->ventasDi2();
                        while($prueba=mysqli_fetch_object($V12)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Ventas $',
                backgroundColor: 'rgba(66,133,244,1)',
                borderColor: 'rgba(66,133,244,1)',
                pointRadius: true,
                pointColor: '#4285F4',
                pointStrokeColor: 'rgba(66,133,244,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(66,133,244,1)',
                data: [<?php 
                                    $venta12_12 = new Database();
                                    $C12 = $venta12_12->ventasDi();
                                        while($prueba=mysqli_fetch_object($C12)){
                                            $id=$prueba->Total;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //-------------
        //- LINE CHART -
        //--------------

        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masV();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Enero -
        //--------------

        var lineChartCanvas = $('#lineChartEn').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2En();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVEn();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Febrero-
        //--------------

        var lineChartCanvas = $('#lineChartFe').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2Fe();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVFe();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Marzo-
        //--------------

        var lineChartCanvas = $('#lineChartMar').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2Mar();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVMar();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Abril-
        //--------------

        var lineChartCanvas = $('#lineChartAb').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2Ab();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVAb();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Mayo-
        //--------------

        var lineChartCanvas = $('#lineChartMay').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2May();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVMay();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Junio-
        //--------------

        var lineChartCanvas = $('#lineChartJun').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2Jun();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVJun();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Julio-
        //--------------

        var lineChartCanvas = $('#lineChartJul').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2Jul();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVJul();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Agosto-
        //--------------

        var lineChartCanvas = $('#lineChartAg').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2Ag();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVAg();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Septiembre-
        //--------------

        var lineChartCanvas = $('#lineChartSe').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2Se();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVSe();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Octubre-
        //--------------

        var lineChartCanvas = $('#lineChartOc').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2Oc();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVOc();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Noviembre-
        //--------------

        var lineChartCanvas = $('#lineChartNo').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2No();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVNo();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- LINE CHART Diciembre-
        //--------------

        var lineChartCanvas = $('#lineChartDi').get(0).getContext('2d')

        var lineChartData = {
            labels: [<?php 
                    $vend1 = new Database();
                    $productoV = $vend1->masV2Di();
                        while($prueba=mysqli_fetch_object($productoV)){
                            $id=$prueba->id_Producto;
                            echo $id.' , ';
                        }
                ?>],
            datasets: [{
                label: 'Vendidos',
                backgroundColor: 'rgba(51,181,229,1)',
                borderColor: 'rgba(51,181,229,1)',
                pointRadius: true,
                pointColor: 'rgba(51,181,229,1)',
                pointStrokeColor: '#33b5e5',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(51,181,229,1)',
                data: [<?php 
                                    $vend2 = new Database();
                                    $cant1 = $vend2->masVDi();
                                        while($prueba=mysqli_fetch_object($cant1)){
                                            $id=$prueba->Cantidad;
                                            echo $id.' , ';
                                        }
                                ?>]
            }, ]
        }
        var lineChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                <?php 
          $des1 = new Database();
          $productoD = $des1->masD2();
          while($prueba=mysqli_fetch_object($productoD)){
            $id=$prueba->id_Producto;
            echo $id.' , ';
          }
        ?>
            ],
            datasets: [{
                data: [
                    <?php 
              $des2 = new Database();
              $cant2 = $des2->masD();
              while($prueba=mysqli_fetch_object($cant2)){
                $id=$prueba->Deseos;
                echo $id.' , ';
              }
            ?>
                ],
                backgroundColor: ['#f39c12', '#00a65a', '#3c8dbc', '#00c0ef', '#d2d6de', '#f56954'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- BAR CHART -
        //-------------

        var barChartCanvas = $('#barChart').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $prom = new Database();
                  $productoC = $prom->masC2();
                    while($prueba=mysqli_fetch_object($productoC)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $prom2 = new Database();
                                  $cant2 = $prom2->masC();
                                  while($prueba=mysqli_fetch_object($cant2)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 1-
        //-------------

        var barChartCanvas = $('#barChart1').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal1 = new Database();
                  $pro1 = $cal1->caliEn2();
                    while($prueba=mysqli_fetch_object($pro1)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal1_1 = new Database();
                                  $pro1_1 = $cal1_1->caliEn();
                                  while($prueba=mysqli_fetch_object($pro1_1)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 2-
        //-------------

        var barChartCanvas = $('#barChart2').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal2 = new Database();
                  $pro2 = $cal2->caliFe2();
                    while($prueba=mysqli_fetch_object($pro2)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal2_2 = new Database();
                                  $pro2_2 = $cal2_2->caliFe();
                                  while($prueba=mysqli_fetch_object($pro2_2)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 3-
        //-------------

        var barChartCanvas = $('#barChart3').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal3 = new Database();
                  $pro3 = $cal3->caliMar2();
                    while($prueba=mysqli_fetch_object($pro3)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal3_3 = new Database();
                                  $pro3_3 = $cal3_3->caliMar();
                                  while($prueba=mysqli_fetch_object($pro3_3)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 4-
        //-------------

        var barChartCanvas = $('#barChart4').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal4 = new Database();
                  $pro4 = $cal4->caliAb2();
                    while($prueba=mysqli_fetch_object($pro4)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal4_4 = new Database();
                                  $pro4_4 = $cal4_4->caliAb();
                                  while($prueba=mysqli_fetch_object($pro4_4)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 5-
        //-------------

        var barChartCanvas = $('#barChart5').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal5 = new Database();
                  $pro5 = $cal5->caliMay2();
                    while($prueba=mysqli_fetch_object($pro5)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal5_5 = new Database();
                                  $pro5_5 = $cal5_5->caliMay();
                                  while($prueba=mysqli_fetch_object($pro5_5)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 6-
        //-------------

        var barChartCanvas = $('#barChart6').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal6 = new Database();
                  $pro6 = $cal6->caliJun2();
                    while($prueba=mysqli_fetch_object($pro6)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal6_6 = new Database();
                                  $pro6_6 = $cal6_6->caliJun();
                                  while($prueba=mysqli_fetch_object($pro6_6)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 7-
        //-------------

        var barChartCanvas = $('#barChart7').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal7 = new Database();
                  $pro7 = $cal7->caliJul2();
                    while($prueba=mysqli_fetch_object($pro7)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal7_7 = new Database();
                                  $pro7_7 = $cal7_7->caliJul();
                                  while($prueba=mysqli_fetch_object($pro7_7)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 8-
        //-------------

        var barChartCanvas = $('#barChart8').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal8 = new Database();
                  $pro8 = $cal8->caliAg2();
                    while($prueba=mysqli_fetch_object($pro8)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal8_8 = new Database();
                                  $pro8_8 = $cal8_8->caliAg();
                                  while($prueba=mysqli_fetch_object($pro8_8)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 9-
        //-------------

        var barChartCanvas = $('#barChart9').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal9 = new Database();
                  $pro9 = $cal9->caliSe2();
                    while($prueba=mysqli_fetch_object($pro9)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal9_9 = new Database();
                                  $pro9_9 = $cal9_9->caliSe();
                                  while($prueba=mysqli_fetch_object($pro9_9)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 10-
        //-------------

        var barChartCanvas = $('#barChart10').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal10 = new Database();
                  $pro10 = $cal10->caliOc2();
                    while($prueba=mysqli_fetch_object($pro10)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal10_10 = new Database();
                                  $pro10_10 = $cal10_10->caliOc();
                                  while($prueba=mysqli_fetch_object($pro10_10)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 11-
        //-------------

        var barChartCanvas = $('#barChart11').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal11 = new Database();
                  $pro11 = $cal11->caliNo2();
                    while($prueba=mysqli_fetch_object($pro11)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal11_11 = new Database();
                                  $pro11_11 = $cal11_11->caliNo();
                                  while($prueba=mysqli_fetch_object($pro11_11)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- BAR CHART 12-
        //-------------

        var barChartCanvas = $('#barChart12').get(0).getContext('2d')

        var barChartData = {
            labels: [<?php 
                  $cal12 = new Database();
                  $pro12 = $cal12->caliDi2();
                    while($prueba=mysqli_fetch_object($pro12)){
                      $id=$prueba->id_Producto;
                      echo $id.' , ';
                    }
                ?>],
            datasets: [{
                label: 'Calificación',
                backgroundColor: 'rgba(0,200,81,1)',
                borderColor: 'rgba(0,200,81,1)',
                pointRadius: true,
                pointColor: '#00C851',
                pointStrokeColor: 'rgba(0,200,81,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(0,200,81,1)',
                data: [<?php 
                                  $cal12_12 = new Database();
                                  $pro12_12 = $cal12_12->caliDi();
                                  while($prueba=mysqli_fetch_object($pro12_12)){
                                    $id=$prueba->Calificacion;
                                    echo $id.' , ';
                                  }
                                ?>]
            }, ]
        }

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })


    })
    </script>
</body>

</html>