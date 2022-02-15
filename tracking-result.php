<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once('deprixa/database.php');

$cons = $_POST['Consignment'];

$sql = "SELECT * FROM courier WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if ($no == 1) {

	while ($data = dbFetchAssoc($result)) {
		extract($data);

?>

		<!DOCTYPE html>

		<html>

		<head>
			<meta charset="utf-8" />
			<title>PT. Citra Mandiri Trans</title>
			<meta name="description" content="Courier Deprixa V2.5 " />
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
			<!-- Font Awesome CSS -->
			<link rel="stylesheet" href="deprixa/asset1/css/font-awesome.min.css" type="text/css" media="screen">
			<link rel="canonical" href="tracking.php" />

			<!-- style -->
			<link href="deprixa_components/content/cssefe4.css" rel="stylesheet" />
			<link rel="stylesheet" href="deprixa/css/tracking.css" type="text/css" />
			<link href="deprixa_components/styles/track-order.css" rel="stylesheet" />
			<link href="deprixa/css/style.css" rel="stylesheet" media="all">
			<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

			<style>
				.Finished {
					background: #363C56;
				}

				.Delayed {
					background: #F76063;
				}

				.On-Hold {
					background: #4ECCDB;
				}

				.Landed {
					background: #FF8A4B;
				}

				.label {
					padding: 6px;
				}

				.In-Transit {
					background: #00D96D;
				}

				.Delivered {
					background: #FFBF00;
				}
			</style>

		</head>

		<!-- Menu -->
		<body>
    <div id="container">
<div class="fw mpHeader slide">
<header class="mpdHeader">
<a href='index.html' class="mpd-logo" tabindex="-1">
    <div><span class=""></span></div>
    <div class="mpd-logo-text"><img src="deprixa/images/logo3.png"/></div>
</a><!-- logo -->


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
			<div class="fw">
				<section class="title">
					<header>
						<h1><img src="deprixa_components/images/global/tracking-search.png" />TRACKING SHIPMENT</h1>
					</header>
					<div class="media-left">

					</div>
				</section>
			</div>

			<div class="container">


				<div>


					<table border="0" align="center" width="100%">

						<div class="row">
							<div class="col-md-6">

								<h3><i class="fa fa-barcode" style="width: 25px; font-size: 35px; float: left;"></i>&nbsp;<font color="#FF4000"><strong><?php echo $cons_no; ?></strong></font></span></h3>

							</div>
							<div class="col-md-6">
								<h3>
									<font color="Black" face="arial,verdana"><strong>Current Status</strong></font>:&nbsp;<span class="label <?php echo $status; ?> label-large">
										<font size=2 color="White" face="arial,verdana"><?php echo $status; ?></font>
									</span>&nbsp;&nbsp;&nbsp;
									<font color="Black" face="arial,verdana"><strong>Booking Mode</strong></font>:&nbsp;<span class="label label-danger"><i class="fa fa-money"></i>
										<font size=2 color="White" face="arial,verdana"> <?php echo $book_mode; ?></font>
									</span>
								</h3>

							</div>
						</div>
						<div class="col-md-6">
							<table class="table table-striped">
								<tr> </tr>
							</table>
						</div>
						<hr />
						<div class="row">
							<div class="col-md-4">
								<font size=3 color="Black" face="arial,verdana"><strong>Schedule Delivery</strong></font><br />
								<?php echo $schedule; ?>, By End Of Day
							</div>
						</div>
						<hr />
						<div class="row">
							<div class="col-md-12">
								<h2>Additional Information</h2>
							</div>
							<br />
							<div class="col-md-4">
								<font size=2 color="Black" face="arial,verdana"><strong>HBL / HAWB No :</strong></font> <?php echo $hbl; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Shipment Type :</strong></font> <?php echo $shipment_type; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Mode:</strong></font> <?php echo $mode; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>POL:</strong></font> <?php echo $pol; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Transit Port:</strong></font> <?php echo $transit_port; ?>&nbsp;kg<br />
								<font size=2 color="Black" face="arial,verdana"><strong>Transit Time:</strong></font> <?php echo $transit_time; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>POD:</strong></font> <?php echo $pod; ?>
							</div>
							<div class="col-md-4">
								<font size=2 color="Black" face="arial,verdana"><strong>ETA POD:</strong></font><?php echo $pick_date; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Vessel / Voyage:</strong></font> <?php echo $vessel_voyage; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Connecting Vessel:</strong></font> <?php echo $connecting_vessel; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Container / Seal No:</strong></font> <?php echo $container_seal; ?>
							</div>
							<div class="col-md-4">
								<font size=2 color="Black" face="arial,verdana"><strong>Shipper:</strong></font> <?php echo $ship_name; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Consignee:</strong></font> <?php echo $rev_name; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Commodity:</strong></font> <?php echo $comments; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Quantity:</strong></font> <?php echo $qty; ?>
							</div> 

							<!--<div class="row">
							<div class="col-md-12">
								<h2>Additional Information</h2>
							</div>
							<br />
							<div class="col-md-4">
								<font size=2 color="Black" face="arial,verdana"><strong>HBL / HAWB NO:</strong></font> <?php echo $cons_no; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Shipment Type:</strong></font> <?php echo $shipment_type; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Mode:</strong></font> <?php echo $mode; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>POL:</strong></font> <?php echo $pol; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>ETD POL:</strong></font> <?php echo $pick_date; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Transit Port:</strong></font> <?php echo $Transit_Port; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Transit Time:</strong></font> <?php echo $Transit_time; ?>
							</div>
							<div class="col-md-4">
								<font size=3 color="Black" face="arial,verdana"><strong>Shipper info</strong></font><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Name:</strong></font> <?php echo $ship_name; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Phone:</strong></font> <?php echo $phone; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Address:</strong></font> <?php echo $s_add; ?>
							</div>
							<div class="col-md-4">
								<font size=3 color="Black" face="arial,verdana"><strong>Consignee Information</strong></font><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Name:</strong></font> <?php echo $rev_name; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Phone:</strong></font> <?php echo $r_phone; ?><br />
								<font size=2 color="Black" face="arial,verdana"><strong>Address:</strong></font> <?php echo $r_add; ?>
							</div> -->

						<!--	<div class="row">
							<div class="col-md-12">
								<h2></h2>
							</div>
							<br />

							<table class="table">
  <thead>
    <tr>
      <th scope="col">HBL / HAWB No </th>
      </tr>
	  <tr>
      <th scope="col">Shipment Type</th>
      </tr>
	  <tr>
      <th scope="col">Mode</th>
      </tr>
	  <tr>
      <th scope="col">POL</th>
      </tr>
	  <tr>
      <th scope="col">Transit Port</th>
      </tr>
	  <tr>
      <th scope="col">Transit Time</th>
      </tr>
	  <tr>
      <th scope="col">POD</th>
      </tr>
	  <tr>
      <th scope="col">ETA POD</th>
      </tr>
	  <tr>
      <th scope="col">Vessel / Voyage</th>
      </tr>
	  <tr>
      <th scope="col">Connecting Vessel</th>
      </tr>
	  <tr>
      <th scope="col">Container / Seal No</th>
      </tr>
	  <tr>
      <th scope="col">Shipper</th>
      </tr>
	  <tr>
      <th scope="col">Consignee</th>
      </tr>
	  <tr>
      <th scope="col">Commodity</th>
      </tr>
	  <tr>
      <th scope="col">Quantity</th>
      </tr>
  </thead>
  <tbody> --> 

							

						
						
								<?php
								require_once('deprixa/database.php');


								//EJECUTAMOS LA CONSULTA DE BUSQUEDA

								$result = mysql_query("SELECT * FROM courier_track WHERE cid = $cid	AND cons_no = '$cons_no' ORDER BY bk_time");

								//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

								echo ' <table class="table table-bordered table-striped table-hover" >
							<tr class="car_bold col_dark_bold" align="center">
								<td><font color="Black" face="arial,verdana"><strong>Tracking No</strong></font></td>
								<td><font color="Black" face="arial,verdana"><strong>Last Location </strong></font></td>
								<td><font color="Black" face="arial,verdana"><strong>Status</strong></font></td>
								<td><font color="Black" face="arial,verdana"><strong>Date / Time</strong></font></td>
								<td><font color="Black" face="arial,verdana"><strong>Remarks</strong></font></td>																							
							</tr>';
								if (mysql_num_rows($result) > 0) {
									while ($row = mysql_fetch_array($result)) {
										echo '<tr align="center">
								<td>' . $row['cons_no'] . '</td>
								<td>' . $row['pick_time'] . '</td>
								<td>' . $row['status'] . '</td>
								<td>' . $row['bk_time'] . '</td>				
								<td>' . $row['comments'] . '</td>
								</tr>';
									}
								} else {
									echo '<tr>
								<td colspan="5" >No results found</td>
							</tr>';
								}
								echo '</table>';
								?>
							</div>
						</div><!-- .container -->
				</div>

			</div>

		</main>

		<!-- Footer -->
		<?php include_once "footer.php"; ?>
		<!-- /Footer -->
		</div>

		<script src="deprixa_components/bundles/jquery"></script>
		<script src="deprixa_components/bundles/bootstrap"></script>
		<script src="deprixa_components/bundles/modernizr"></script>
		<script src="deprixa_components/Scripts/CookieManager.js"></script>
		<script src="deprixa_components/Scripts/MPD/Common/ga-events.js"></script>
		<script src="deprixa_components/bundles/jqueryval"></script>
		<script src="deprixa_components/Scripts/tracking.js"></script>

		</body>

		</html>

	<?php

	} //while

} //if
else {

	echo '';
	?>

	<!doctype html>
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
	<html>

	<head>
		<meta charset="utf-8" />
		<title>PT CITRA MANDIRI TRANS GROUP</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<link rel="stylesheet" href="deprixa/asset1/css/font-awesome.min.css" type="text/css" media="screen">
		<link rel="canonical" href="tracking.php" />

		<!-- style -->
		<link href="deprixa_components/content/cssefe4.css" rel="stylesheet" />
		<link rel="stylesheet" href="deprixa/css/tracking.css" type="text/css" />
		<link href="deprixa_components/styles/track-order.css" rel="stylesheet" />
		<link href="deprixa/css/style.css" rel="stylesheet" media="all">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

	</head>

	<!-- Menu -->
	<?php include_once "menu.php"; ?>
	<!-- /Menu -->

	<div class="slide">
	</div>
	<main class="slide">
		<div class="fw">
			<section class="title">
				<header>
					<h1><img src="deprixa_components/images/global/tracking-search.png" />Parcel Tracking</h1>
				</header>
				<div class="media-left">

				</div>
			</section>
		</div>
		<div class="container">
			<div class="page-content">

				<div class="text-center">
					<h1><img src="deprixa_components/images/error.png" /></h1>
					<h3>Tracking number not found,</h3>
					<p>
						<font color="#FF0000"><?php echo $cons; ?></font> check the number or Contact Us.
					</p>
					<div class="text-center"><a href="index.html" class="btn-system btn-small">Back To Home</a></div>
				</div>
			</div>
		</div>
		</div>
		<!-- End Content -->

		<!-- Footer -->
		<?php include_once "footer.php"; ?>
		<!-- /Footer -->
		</div>

		<script src="deprixa_components/bundles/jquery"></script>
		<script src="deprixa_components/bundles/bootstrap"></script>
		<script src="deprixa_components/bundles/modernizr"></script>
		<script src="deprixa_components/scripts/CookieManager.js"></script>
		<script src="deprixa_components/scripts/MPD/Common/ga-events.js"></script>
		<script src="deprixa_components/bundles/jqueryval"></script>
		<script src="deprixa_components/scripts/tracking.js"></script>
		<script>
			function myFunction() {
				window.print();
			}
		</script>
		</body>
	<?php
} //else	

	?>

	</html>