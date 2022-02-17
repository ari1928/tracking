<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('../database.php');
require_once('../library.php');
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
    <link rel="shortcut icon" href="../images/logo_CMT.png">

    <!-- App title -->
    <title></title>

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
                    <a href="" class="logo">
                        <span><img src="../images/citra-logo.png"width="23%"></span>
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
                                    <h5 class="text-overflow"><small>Selamat Datang ! <?php echo $_SESSION['user_name']; ?></small> </h5>
                                </div>

                                <!-- item-->
                                <a href="profile_customer.php" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Pengaturan</span>
                                </a>

                                <!-- item-->
                                <a href="../process.php?action=logOut" class="dropdown-item notify-item">
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
                            <a href="customer.php"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                        </li>

                        <!-- <li class="has-submenu">
                            <a href="add-courier-customer.php"><i class="fa fa-cubes"></i> <span> TAMBAHKAN PENGIRIMAN </span> </a>
                        </li> -->
                        <li class="has-submenu">
                            <a href="shipping_list.php"><i class="zmdi zmdi-collection-text"></i> <span> SHIPPING LIST </span> </a>

                        </li>
                        <!-- <li class="has-submenu">
                            <a href="paybill.php"><i class="zmdi zmdi-collection-text"></i> <span> BAYAR TAGIHAN </span> </a>

                        </li> -->
                        <li class="has-submenu">
                            <a> <span> | </span> </a>
                        </li>
                        <li class="has-submenu">
                            <a href="profile_customer.php"><i class="fa fa-briefcase"></i> <span> PROFILE </span> </a>
                        </li>


                    </ul>
                    <!-- End navigation menu  -->
                </div>
            </div>
        </div>
    </header>
    <!-- End Navigation Bar-->