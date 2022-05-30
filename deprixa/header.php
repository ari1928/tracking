<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('database.php');
require_once('library.php');
isUser();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Description and Author -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App title -->
    <title>PT CITRA MANDIRI TRANS GROUP</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <!-- Switchery css -->
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- App CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />


    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <!-- Modernizr js -->
    <script src="assets/js/modernizr.min.js"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-79190402-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>


<body>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="admin.php" class="logo">
                        <span><img src="../images/Citra-logo.png" width="50%"></span>
                    </a>
                </div>
                <!-- End Logo container-->


                <div class="menu-extras">

                    <ul class="nav navbar-nav pull-right">

                        <li class="nav-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>


                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small><?php echo $_SESSION['user_type']; ?></small> </h5>
                                </div>
                                <?php
                                if (isset($_SESSION['user_type']) && $_SESSION['user_type'] =='Administrator' || $_SESSION['user_type'] == 'Superadmin') {
                                ?>
                                    <!-- item-->
                                    <a href="preferences.php" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-settings"></i> <span>Pengaturan</span>
                                    </a>
                                <?php } ?>
                                <?php
                                if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Employee') {
                                ?>
                                    <!-- item-->
                                    <a href="preferences_user.php" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-settings"></i> <span>Pengaturan</span>
                                    </a>
                                <?php } ?>
                                <!-- item-->
                                <a href="process.php?action=logOut" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Keluar</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                </div> <!-- end menu-extras -->
                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->


        <div class="navbar-custom">
            <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->

                    <ul class="navigation-menu">
                        <li>
                            <a href="admin.php"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                        </li>
                        <?php
                        if ($_SESSION['user_type'] == 'Superadmin' || $_SESSION['user_type'] =='Administrator' || $_SESSION['user_type'] == 'Superadmin') {
                        ?>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-users"></i> <span> MANAJEMEN AKUN </span> </a>
                                <ul class="submenu">
                                    <?php
                                    if ($_SESSION['user_type'] == 'Superadmin') {
                                    ?>
                                        <li><a href="add-new-users-admin.php"><i class="fa fa-users"></i>&nbsp;&nbsp;Akun Administrator</a></li>
                                    <?php } ?>
                                    <li><a href="add-new-users.php"><i class="fa fa-users"></i>&nbsp;&nbsp;Akun Pegawai</a></li>
                                    <li><a href="customer.php"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Akun Pelanggan</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-gear (alias)"></i> <span> PENGATURAN </span> </a>
                                <ul class="submenu">
                                    <li><a href="service_mode.php"><i class="fa fa-gift"></i>&nbsp;&nbsp;Tipe Produk</a></li>
                                    <li><a href="type-of-shipments.php"><i class="fa fa-truck"></i>&nbsp;&nbsp;Tipe Pengiriman</a></li>
                                    <li><a href="add-office.php"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Lokasi</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                        <li class="has-submenu">
                            <a href="add-courier.php"><i class="fa fa-cubes"></i> <span> TAMBAH PENGIRIMAN </span> </a>
                        </li>
                        <?php
                        isUser();
                        if ($_SESSION['user_type'] == 'client') {
                            header('Location: customer');
                        }
                        $result0 = mysql_query("SELECT * FROM online_booking WHERE  status='Pending'");
                        $nobookings = dbNumRows($result0);
                        ?>
                        <!--  <li class="has-submenu">
                            <a href="online-bookings.php"><i class="fa fa-envelope">&nbsp;&nbsp;<font color="#FF0000"><strong><?php echo $nobookings; ?></strong></font></i> <span> ONLINE PESANAN</span> </a>
                            <ul class="submenu">
                                <li><a href="transfer-bank.php"><i class="fa fa-money"></i>&nbsp;&nbsp;Daftar Pembayaran, Transfer Bank</a></li>
                            </ul> -->
                        </li>
                        <li class="has-submenu">
                            <a href="#"><i class="zmdi zmdi-collection-text"></i> <span> LAPORAN </span> </a>
                            <ul class="submenu">
                                <li><a href="shipping-list.php"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp;Daftar Pengiriman</a></li>
                                <li><a href="delivered-list.php"><i class="fa fa-truck"></i>&nbsp;&nbsp;Daftar Pengiriman yang telah Sampai Tujuan</a></li>
                                <li><a href="delivered-list-online.php"><i class="fa fa-truck"></i>&nbsp;&nbsp;Daftar Pengiriman Online yang telah diterima</a></li>
                                <!--<li><a href="list-of-shipping-paid.php"><i class="fa fa-money"></i>&nbsp;&nbsp;Daftar Pengiriman yang telah Dibayar</a></li>
                                <li><a href="list-of-shipping-topaid.php"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;Daftar Pengiriman yang untuk dibayar</a></li>
                                <li><a href="list-of-shipping-cash-on-delivery.php"><i class="fa fa-usd"></i>&nbsp;&nbsp;Daftar Pengiriman yang COD/Cash On Delivery</a></li>-->
                            </ul>
                        </li>
                        <?php
                        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Administrator' || $_SESSION['user_type'] == 'Superadmin') {
                        ?>
                            <li class="has-submenu">
                                <a> <span> | </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="preferences.php"><i class="fa fa-briefcase"></i> <span> KANTOR </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="log-activity.php"><i class="fa fa-info-circle"></i> <span> LOG AKTIVITAS </span> </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- End navigation menu  -->
                </div>
            </div>
        </div>
    </header>
    <!-- End Navigation Bar-->