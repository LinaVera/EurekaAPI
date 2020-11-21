<?php

session_start();
if (!isset($_SESSION['rol'])) {
    header('Location: login.php');
}

$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];
$rol = $_SESSION['rol'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página Eureka">
    <meta name="author" content="Duvan Leal">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="../vista/css/font-face.css" rel="stylesheet" media="all">
    <link href="../vista/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vista/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vista/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vista/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vista/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vista/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vista/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vista/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vista/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vista/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vista/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Custom style Sweetalert2 -->
    <link href="../vista/css/sweetalert2.min.css" rel="stylesheet">

    <!-- Main CSS-->
    <link href="../vista/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <?php require_once 'menu.php'; ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST"></form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../vista/img/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn"><?php echo $nombre; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../vista/img/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a><?php echo $nombre; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $email; ?></span>
                                                    <span class="email"><?php echo $rol; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="Perfil.php">
                                                        <i class="zmdi zmdi-account"></i>Perfil</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a id="logout" name="logout">
                                                    <i class="zmdi zmdi-power">
                                                    </i>Cerrar sesi&oacute;n
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Inicio</h2>
                                    <!--
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item
                                    </button>-->
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>members online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>order ID</th>
                                                <th>name</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">quantity</th>
                                                <th class="text-right">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="text-right">$999.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$999.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>100397</td>
                                                <td>Samsung S8 Black</td>
                                                <td class="text-right">$756.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$756.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>100396</td>
                                                <td>Game Console Controller</td>
                                                <td class="text-right">$22.00</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">$44.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>100395</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td class="text-right">$1199.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$1199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-25 19:03</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100392</td>
                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                <td class="text-right">$199.00</td>
                                                <td class="text-right">6</td>
                                                <td class="text-right">$1494.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-24 19:10</td>
                                                <td>100391</td>
                                                <td>Camera C430W 4k</td>
                                                <td class="text-right">$699.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$699.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-22 00:43</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright ©
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>. All rights reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../vista/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vista/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vista/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vista/vendor/slick/slick.min.js">
    </script>
    <script src="../vista/vendor/wow/wow.min.js"></script>
    <script src="../vista/vendor/animsition/animsition.min.js"></script>
    <script src="../vista/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vista/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vista/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vista/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vista/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vista/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vista/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../vista/js/main.js"></script>

    <!-- Javasript Sweetalert2 -->
    <script src="../vista/js/sweetalert2.min.js"></script>
    <script src="../vista/js/app.js"></script>
</body>

</html>
<!-- end document-->