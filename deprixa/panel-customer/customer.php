<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('../library.php');
require_once('../database.php');
$qname = $_SESSION['user_name'];

if (isset($_POST['cons'])) {
	$cons = $_POST['cons'];
	$result1 =  mysql_query("SELECT * FROM courier_online where s_add='$qname' AND cons_no='$cons' ");
} else {

	$result1 =  mysql_query("SELECT * FROM courier_online where s_add='$qname' ");
}

$getuser =  mysql_query("SELECT * FROM tbl_clients where email='$qname' ");
$gettt = mysql_fetch_assoc($getuser);
$day = date('d/m/Y');
$result_track =  mysql_query("SELECT * FROM courier where ship_name='$gettt[name]' AND schedule >=$day  AND status !='Finished' ");

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
	<link rel="shortcut icon" href="assets/images/logo_CMT.png">

	<!-- App title -->
	<title>PT. Citra Mandiri Trans</title>

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
			<!--	<?php
					include("../icon_settings.php");
					?> -->
			<div class="row">
				<?php
				// Always first connect to the database mysql
				$sql = "SELECT * FROM online_booking WHERE  status = 'Pending' AND email='" . $_SESSION["user_name"] . "'";  // sentence sql
				$result = mysql_query($sql);
				$numero1 = mysql_num_rows($result); // get the number of rows
				?>
				<div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card-box tilebox-one">
						<i class="icon-layers pull-xs-right text-muted"></i>
						<h6 class="text-muted text-uppercase m-b-20">Paket pending</h6>
						<h2 class="m-b-20" data-plugin="counterup"><?php echo $numero1; ?></h2>
						<span class="label label-danger">
							<?php
							$result = mysql_query("SELECT status, concat(round(count( * ) *100 /(SELECT count( * ) FROM online_booking)) , \"%\") AS percent
								FROM online_booking WHERE  status = 'Pending' AND email='" . $_SESSION["user_name"] . "' GROUP BY status");
							while ($row = mysql_fetch_array($result))

								for ($i = 0; $i < mysql_num_fields($result); $i++)
									echo $row[$i] . " ";
							echo "<br>";

							?></span> <span class="text-muted">Persentase paket pending</span>
					</div>
				</div>

				<!--	<div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card-box tilebox-one">
						<i class="icon-paypal pull-xs-right text-muted"></i>
						<h6 class="text-muted text-uppercase m-b-20">Total Invoice</h6>
						<h2 class="m-b-20">Rp<span data-plugin="counterup"><?php
																			$result = mysql_query("SELECT SUM(shipping_subtotal) as total FROM courier_online WHERE  office='" . $_SESSION["user_name"] . "' AND payment='Pending'");
																			$row = mysql_fetch_array($result, MYSQL_ASSOC);
																			echo $row["total"];

																			?></span></h2>
						<span class="label label-success">
							<?php
							$sql = mysql_query("SELECT concat(round(count( * ) *100 /(SELECT count( * ) FROM courier_online)) , \"%\") AS percent
								FROM courier_online WHERE  payment='Pending'  GROUP BY status");
							while ($rr = mysql_fetch_array($sql))

								for ($i = 0; $i < mysql_num_fields($sql); $i++)
									echo $rr[$i] . " ";
							echo "<br>";

							?> </span> <span class="text-muted">Persentase Invoice yang harus dibayar</span>
					</div>
				</div>  -->

				<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
					<div class="card-box widget-user">
						<div>
							<?php
							require_once('../database.php');
							$sql_1 = "SELECT * FROM tbl_clients where email='$qname' LIMIT 1";
							$result45 = dbQuery($sql_1);
							while ($data = dbFetchAssoc($result45)) {
								extract($data);
							?>
								<?php if ($foto != '') { ?>
									<img src="../../upload/fotouser/<?= $foto ?>" class="img-responsive img-circle" alt="user">
								<?php } else { ?>
									<img src="assets/images/users/avatar-2.jpg" class="img-responsive img-circle" alt="user">
								<?php } ?>
								<?php
								$result3 = mysql_query("SELECT * FROM tbl_clients WHERE  email='" . $_SESSION["user_name"] . "' ");
								while ($row = mysql_fetch_array($result3)) {
								?>
									<div class="wid-u-info">
										<h5 class="m-t-20 m-b-5"> <?php echo $row['name']; ?></h5>
										<p class="text-muted m-b-0 font-13"><?php echo $row['email']; ?></p>
										<div class="user-position">
											<span class="text-info font-weight-bold">Pelanggan</span>
										</div>
									</div>
								<?php } ?>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
			<!-- end row -->

			<div class="row">
				<div class="col-xs-12 col-lg-12 col-xl-6" hidden>
					<div class="card-box">
						<h3 class="font-thin m-t-none m-b-none text-primary-lt">Pemesanan terakhir</h3>
						<p>Disini untuk Lihat Detail pesanan dan Status.</p>
						<div class="table-responsive">
							<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">

								<thead>
									<tr>
										<th data-toggle="true">
											Tanggal Pemesanan
										</th>
										<th>
											Dari
										</th>
										<th data-hide="phone,tablet">
											ke
										</th>
										<th data-hide="phone,tablet" data-name="Date Of Birth">
											Detail
										</th>
										<th data-hide="phone">
											Status
										</th>
									</tr>
								</thead>
								<?php
								$result3 = mysql_query("SELECT * FROM online_booking  where email='$qname'");
								while ($row = mysql_fetch_array($result3)) {
								?>
									<tr>
										<td><?php echo $row["booking_date"]; ?></td>
										<td><?php echo $row["sstate"]; ?>,<?php echo $row["scountry"]; ?>.</td>
										<td><?php echo $row["dstate"]; ?>,<?php echo $row["dcountry"]; ?>.<br></td>
										<td><?php echo $row["note"]; ?></td>
										<td><span class="label <?php echo $row['status']; ?> label-large"><?php echo $row['status']; ?></span></br><?php echo $row['reasons']; ?></td>
									</tr>
								<?php } ?>
							</table>
						</div>
					</div>
				</div><!-- end col-->

				<div class="col-xs-12 col-lg-12 col-xl-6" hidden>
					<div class="card-box">
						<h3 class="font-thin m-t-none m-b-none text-primary-lt">Status pengiriman disetujui</h3>
						<p>Ini dia daftar & status pengiriman.</p>

						<div class="table-responsive">
							<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th data-toggle="true">
											# Tracking
										</th>
										<th>
											Dari
										</th>
										<th data-hide="phone,tablet">
											ke
										</th>
										<th data-hide="phone,tablet" data-name="Date Of Birth">
											Sudah di Pesan
										</th>
										<th data-hide="phone,tablet" data-name="Date Of Birth">
											Jadwal Pengiriman
										</th>
										<th data-hide="phone">
											Status
										</th>
									</tr>
								</thead>

								<tr class="<?php if (isset($classname)) echo $classname; ?>">

									<?php
									$i = 0;
									$no = dbNumRows($result1);
									while ($row = mysql_fetch_array($result1)) {
										if ($i % 2 == 0)
											$classname = "evenRow";
										else
											$classname = "oddRow";
									?>
								<tr>
									<td> <a href=""><?php echo $row["cons_no"]; ?></a> </td>
									<td><?php echo $row["fromcity"]; ?></td>
									<td><?php echo $row["tocity"]; ?></td>
									<td><?php echo $row["date"]; ?></td>
									<td><?php echo $row["deliverydate"]; ?></td>
									<td><span class="label <?php echo $row['status']; ?> label-large"><?php echo $row['status']; ?></span></td>
								</tr>
							<?php } ?>

							</tr>
							</table>
						</div>
					</div>
				</div><!-- end col-->


				<div class="col-xs-12 col-lg-12">
					<div class="card-box">
						<h3 class="font-thin m-t-none m-b-none text-primary-lt">SHIPMENT ON PROCESS</h3>
						<p>Ini dia daftar & status pengiriman.</p>

						<div class="table-responsive">
							<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th data-toggle="true">
											# Tracking
										</th>
										<th>
											POL
										</th>
										<th data-hide="phone,tablet">
											POD
										</th>
										<th data-hide="phone,tablet" data-name="Date Of Birth">
											ETA POD
										</th>
										<th data-hide="phone,tablet" data-name="Date Of Birth">
											ETD POL
										</th>
										<th data-hide="phone">
											Status
										</th>
									</tr>
								</thead>

								<tr class="<?php if (isset($classname)) echo $classname; ?>">

									<?php
									$i = 0;
									$no = dbNumRows($result_track);
									while ($row = mysql_fetch_array($result_track)) {
										if ($i % 2 == 0)
											$classname = "evenRow";
										else
											$classname = "oddRow";
									?>
								<tr>
									<td> <a href="shipping-detail.php?q=<?= $row['cons_no'] ?>"><?php echo $row["cons_no"]; ?></a> </td>
									<td><?php echo $row["pol"]; ?></td>
									<td><?php echo $row["pod"]; ?></td>
									<td><?php echo $row["pick_date"]; ?></td>
									<td><?php echo $row["schedule"]; ?></td>
									<td><span class="label <?php echo $row['status']; ?> label-large label-success"><?php echo $row['status']; ?></span></td>
								</tr>
							<?php } ?>

							</tr>
							</table>
						</div>
					</div>
				</div><!-- end col-->
			</div>
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