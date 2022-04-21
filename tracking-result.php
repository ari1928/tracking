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


.container {
    margin-top: 50px;
    margin-bottom: 50px
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0.10rem
}

.card-header:first-child {
    border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.track {
    position: relative;
    background-color: #ddd;
    height: 7px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 60px;
    margin-top: 50px
}

.track .step {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: 25%;
    margin-top: -18px;
    text-align: center;
    position: relative
}

.track .step.active:before {
    background: #FF5722
}

.track .step::before {
    height: 7px;
    position: absolute;
    content: "";
    width: 100%;
    left: 0;
    top: 18px
}

.track .step.active .icon {
    background: #ee5435;
    color: #fff
}

.track .icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: relative;
    border-radius: 100%;
    background: #ddd
}

.track .step.active .text {
    font-weight: 400;
    color: #000
}

.track .text {
    display: block;
    margin-top: 7px
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.itemside .aside {
    position: relative;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.img-sm {
    width: 80px;
    height: 80px;
    padding: 7px
}

ul.row,
ul.row-sm {
    list-style: none;
    padding: 0
}

.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.itemside .title {
    display: block;
    margin-bottom: 5px;
    color: #212529
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

.btn-warning {
    color: #ffffff;
    background-color: #ee5435;
    border-color: #ee5435;
    border-radius: 1px
}

.btn-warning:hover {
    color: #ffffff;
    background-color: #ff2b00;
    border-color: #ff2b00;
    border-radius: 1px
}</style>

		</head>

		<!-- Menu -->

		<body>
			<div id="container">
				<div class="fw mpHeader slide">
					<header class="mpdHeader">
						<a href='index.html' class="mpd-logo" tabindex="-1">
							<div><span class=""></span></div>
							<div class="mpd-logo-text"><img src="deprixa/images/citra-logo.png" width="250%" /></div>
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

				<main class="slide" style="overflow-x:auto;">
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
							<div style="overflow-x:auto;">
								<table class="table">
									<tr>
										<th>HBL / HAWB No</th>
										<th> <?php echo $hbl; ?> </th>
									</tr>
									<tr>
										<th>Shipment Type</th>
										<td> <?php echo $shipment_type; ?></td>
									</tr>
									<tr>
										<td>Mode</td>
										<td> <?php echo $mode; ?></td>
									</tr>
									<tr>
										<td>Shipment Term</td>
										<td> <?php echo $Shipment_Term; ?></td>
									</tr>
									<tr>
										<td>POL</td>
										<td> <?php echo $pol; ?></td>
									</tr>
									<tr>
										<td>Transit Port</td>
										<td> <?php echo $transit_port; ?></td>
									</tr>
									<tr>
										<td>Transit Time</td>
										<td> <?php echo $transit_time; ?></td>
									</tr>
									<tr>
										<td>POD</td>
										<td> <?php echo $pod; ?></td>
									</tr>
									<tr>
										<td>ETA POD</td>
										<td> <?php echo $pick_date; ?></td>
									</tr>
									<tr>
										<td>Vessel / Voyage</td>
										<td> <?php echo $vessel_voyage; ?></td>
									</tr>
									<tr>
										<td>Connecting Vessel</td>
										<td> <?php echo $connecting_vessel; ?></td>
									</tr>
									<tr>
										<td>Container / Seal No</td>
										<td> <?php echo $container_seal; ?></td>
									</tr>
									<tr>
										<td>Shipper</td>
										<td> <?php echo $ship_name; ?></td>
									</tr>
									<tr>
										<td>Consignee</td>
										<td> <?php echo $rev_name; ?></td>
									</tr>
									<tr>
										<td>Commodity</td>
										<td> <?php echo $comments; ?></td>
									</tr>
									<tr>
										<td>Quantity</td>
										<td> <?php echo $qty; ?></td>
									</tr>
								</table>
							</div>

							<?php
							require_once('deprixa/database.php');


							//EJECUTAMOS LA CONSULTA DE BUSQUEDA

							$result = mysql_query("SELECT * FROM courier_track WHERE cid = $cid	AND cons_no = '$cons_no' ORDER BY bk_time");

							//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

							echo '<div style="overflow-x:auto;" class="table-responsive"> 
									<table class="table table-bordered table-striped table-hover" >
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
							echo '</table></div>';
							?>
	
						</div><!-- .container -->
					</div>
					</div>
				</main>
			</div>

			

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