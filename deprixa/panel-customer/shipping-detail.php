<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('../library.php');
require_once('../database.php');
$qname = $_SESSION['user_name'];
$cons_no = $_GET['q'];

$result = mysql_query("SELECT * FROM courier WHERE cons_no = '$cons_no'");
$row = mysql_fetch_assoc($result);
//$result = mysql_query("SELECT * FROM courier_track WHERE cid = $cid	AND cons_no = '$cons_no' ORDER BY bk_time");


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
	<link rel="shortcut icon" href="assets/images/logo_CMT.png">

	<!-- App title -->
	<title>Detail <?= $cons_no; ?> | PT. Citra Mandiri Trans</title>

	<!-- Switchery css -->
	<link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

	<!-- Sweet Alert css -->
	<link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />

	<!-- DataTables -->
	<link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" name="text/css" />
	<link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" name="text/css" />
	<!-- Responsive datatable examples -->
	<link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" name="text/css" />

	<!-- App CSS -->
	<link href="assets/css/style.css" rel="stylesheet" name="text/css" />
	<style>
		.Pending {
			background: #FF5D48;
		}

		.Approved {
			background: #999;
		}

		.Delivered {
			background: #000;
		}

		.In-Transit {
			background: #1BB99A;
		}

		.Shipment-arrived {
			background: #FFC734;
		}

		.Returned {
			background: #F76063;
		}

		.Cancelled {
			background: #555;
		}
	</style>

</head>

<body>
	<?php
	include("header_customer.php");
	?>

	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="wrapper">
		<div class="container">
			<!-- Page-Title -->
			<?php
			include("../icon_settings.php");
			?><div class="row">
				<div class="col-md-12">
					<h2>Detail Informasi Pengiriman</h2>
				</div>
				<br />
				<div style="">
					<table class="table">
						<tr>
							<th>HBL / HAWB No</th>
							<th> <?php echo $row['cons_no']; ?> </th>
						</tr>
						<tr>
							<th>Shipment Type</th>
							<td> <?php echo $row['shipment_type']; ?></td>
						</tr>
						<tr>
							<td>Mode</td>
							<td> <?php echo $row['mode']; ?></td>
						</tr>
						<tr>
							<td>Shipment Term</td>
							<td> <?php echo $row['Shipment_Term']; ?></td>
						</tr>
						<tr>
							<td>POL</td>
							<td> <?php echo $row['pol']; ?></td>
						</tr>
						<tr>
							<td>Transit Port</td>
							<td> <?php echo $row['transit_port']; ?></td>
						</tr>
						<tr>
							<td>Transit Time</td>
							<td> <?php echo $row['transit_time']; ?></td>
						</tr>
						<tr>
							<td>POD</td>
							<td> <?php echo $row['pod']; ?></td>
						</tr>
						<tr>
							<td>ETA POD</td>
							<td> <?php echo $row['pick_date']; ?></td>
						</tr>
						<tr>
							<td>Vessel / Voyage</td>
							<td> <?php echo $row['vessel_voyage']; ?></td>
						</tr>
						<tr>
							<td>Connecting Vessel</td>
							<td> <?php echo $row['connecting_vessel']; ?></td>
						</tr>
						<tr>
							<td>Container / Seal No</td>
							<td> <?php echo $row['container_seal']; ?></td>
						</tr>
						<tr>
							<td>Shipper</td>
							<td> <?php echo $row['ship_name']; ?></td>
						</tr>
						<tr>
							<td>Consignee</td>
							<td> <?php echo $row['rev_name']; ?></td>
						</tr>
						<tr>
							<td>Commodity</td>
							<td> <?php echo $row['comments']; ?></td>
						</tr>
						<tr>
							<td>Quantity</td>
							<td> <?php echo $row['qty']; ?></td>
						</tr>
					</table>
				</div>

				<?php

				//EJECUTAMOS LA CONSULTA DE BUSQUEDA
				$cid = $row['cid'];
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
			<!-- end row -->


			<!-- Footer -->
			<?php
			include("../footer.php");
			?>
			<!-- End Footer -->

		</div> <!-- container -->
	</div> <!-- End wrapper -->

	<script>
		var resizefunc = [];
	</script>

	<!-- jQuery  -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/waves.js"></script>
	<script src="assets/js/jquery.nicescroll.js"></script>
	<script src="assets/plugins/switchery/switchery.min.js"></script>


	<!-- Sweet Alert js -->
	<script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>

	<!-- Counter Up  -->
	<script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
	<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

	<!-- App js -->
	<script src="assets/js/jquery.core.js"></script>
	<script src="assets/js/jquery.app.js"></script>

	<!-- Page specific js -->
	<script src="assets/pages/jquery.dashboard.js"></script>

	<!-- Required datatable js -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
	<!-- Buttons examples -->
	<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
	<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables/jszip.min.js"></script>
	<script src="assets/plugins/datatables/pdfmake.min.js"></script>
	<script src="assets/plugins/datatables/vfs_fonts.js"></script>
	<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
	<script src="assets/plugins/datatables/buttons.print.min.js"></script>
	<script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
	<!-- Responsive examples -->
	<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

	<script name="text/javascript">
		$(document).ready(function() {
			$('#datatable').DataTable();

			//Buttons examples
			var table = $('#datatable-buttons').DataTable({
				lengthChange: false,
				buttons: ['copy', 'excel', 'pdf', 'colvis']
			});

			table.buttons().container()
				.appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
		});
	</script>

</body>

</html>