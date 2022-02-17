<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('deprixa/database-settings.php');
require_once('deprixa/library.php');


?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>PT. Citra Mandiri Trans</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--html5 ie include-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->

    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="/Styles/ie-fixes.css" />
    <![endif]-->
    <!-- style -->
    <link href="deprixa_components/content/cssefe4.css" rel="stylesheet" />
    <link href="deprixa_components/styles/login.css" rel="stylesheet" />

</head>

<!-- Menu -->

<body>
    <div id="container">
        <div class="fw mpHeader slide">
            <header class="mpdHeader">
                <a href='index.html' class="mpd-logo" tabindex="-1">
                    <div><span class=""></span></div>
                    <div class="mpd-logo-text"><img src="deprixa/images/citra-logo.png"width="200%"/></div>
                </a><!-- logo -->

                <div class="login-status">
                    <a class="ga-trackevent" data-gacat="MainNav" data-galab="Login" href="login.php">Masuk ke Akun Saya</a>
                </div><!-- log in / out -->
                <!-- Nav -->
                <nav class="mpdNavigation">
                    <div class="mobile-menu-header">Menu</div>
                    <ul>
                        <li class="index.html"><a href="index.html" class="MainNav" data-gacat="index" data-galab="GetAQuote" tabindex="-1">Home</a></li>
                        <li class="deskHide last-mob-link"><a href="javascript:void(0)" class="cl   ose-mob-menu fl pad-top-10">Close &raquo;</a></li>
                    </ul>
                </nav>

            </header>
        </div>
        <!-- /Menu -->

        <div class="slide">
        </div>
        <main class="slide">
            <section class="login">
                <div class="col-xs-12 cf fl col-sm-6 col-md-6 login-col">
                    <h2>Masuk</h2>
                    <div class="col-md-12 well">
                        <form name="form1" autocomplete="off" method="post" />

                        <div class="form-horizontal">
                            <div class="panel-heading">

                                <?php
                                if (isset($_POST['user'])) {
                                    $error = verify_users($_POST['user'], $_POST['password']);
                                } else {

                                    echo '<div class="form-group">
										<label class="control-label col-md-3 col-md-offset-1" for="Email">Email</label>
										<div class="col-md-8">
											<input class="form-control text-box single-line" data-val="true" data-val-required="Please enter an email" name="user"id="user" type="text" value="" />
											<span class="field-validation-valid text-danger" data-valmsg-for="Email" data-valmsg-replace="true"></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3 col-md-offset-1" for="Password">Password</label>
										<div class="col-md-8">
											<input class="form-control text-box single-line password" data-val="true" data-val-required="Please enter a password" name="password" id="password" type="password" value="" />
											<span class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></span>
										</div>
									</div>
									<div class="form-group">
									<div class="col-md-10 col-md-offset-1 form-inline">
										<input type="submit" value="Log in" class="btn btn-primary pull-right" />
									</div>
									</div>';
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 fl col-sm-6 col-md-6 signup-col">
                    <h2>Daftar</h2>
                    <div class="col-md-12 well cf">
                        <div class="col-md-12">
                            <p>Daftar dan Dapatkan Banyak Keuntungan Bersama Kami</p>
                            <ul class="signup-benefits">
                                <li>Banyak Pilihan dengan Beragam Layanan.</li>
                                <li>Update Pengantaran dan Permintaan Pengantaran Untuk Kamu.</li>
                                <li>Extra Keuntungan + Termasuk cashback untuk Booking Selanjutnya.</li>
                            </ul>
                            <a href='signup.php' class="btn btn-primary pull-right" role="button">
                                DAFTAR
                            </a>
                        </div>
                    </div>
                </div>
            </section>


        </main>
        <?php include_once "footer.php"; ?>


        <script src="deprixa_components/bundles/jquery"></script>
        <script src="deprixa_components/bundles/bootstrap"></script>
        <script src="deprixa_components/bundles/modernizr"></script>
        <script src="deprixa_components/scripts/CookieManager.js"></script>
        <script src="deprixa_components/scripts/MPD/Common/ga-events.js"></script>
        <script src="deprixa_components/bundles/jqueryval"></script>
        <script src="deprixa_components/scripts/trimFields.js"></script>

</body>

</html>