<?php

session_start();

$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página Eureka">
    <meta name="author" content="Duvan leal">

    <!-- Title Page-->
    <title>Registro</title>

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
                        <!--
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Perfil</h2>
                                    <!-
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item
                                    </button>
                                </div>
                            </div>
                        </div>-->

                        <div class="row m-t-5">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">Registrar supervisor </div>
                                    <div class="card-body card-block">
                                        <form id="FormRegistroSupervisor" name="FormRegistroSupervisor"
                                            action="registrar_supervisor.php" method="post">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="username" name="nombre"
                                                        placeholder="Nombre" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="username" name="apellido"
                                                        placeholder="Apellido" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-credit-card"></i>
                                                    </div>
                                                    <input type="text" id="username" name="documento"
                                                        placeholder="Documento" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <input type="text" id="username" name="direccion"
                                                        placeholder="Direcci&oacute;n" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <input type="text" id="username" name="telefono"
                                                        placeholder="Tel&eacute;fono" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" id="email" name="email" placeholder="Email"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="password" name="contrasena"
                                                        placeholder="Contraseña" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="password" name="contrasena2"
                                                        placeholder="Repita la contraseña" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Registrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
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