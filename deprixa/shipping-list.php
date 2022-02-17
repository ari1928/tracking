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
	<title>PT. Citra Mandiri Trans</title>

	<!-- Switchery css -->
	<link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

	<!-- DataTables -->
	<link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!-- Responsive datatable examples -->
	<link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

	<!-- App CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="bower_components/animate.css/animate.css" type="text/css" />
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="bower_components/simple-line-icons/css/simple-line-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/footer-basic-centered.css">

</head>

<body>
	<?php include("header.php"); ?>

	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="wrapper">
		<div class="container">

			<!-- Page-Title -->
			<?php
			include("icon_settings.php");
			?>
			<div class="row">
				<div class="col-sm-12">
					<div class="card-box table-responsive">
						<h4 class="header-title m-t-0 m-b-20">Daftar Pengiriman</h4>
						<table border="0" align="center">
							<tr>
								<td><strong>&nbsp;&nbsp;&nbsp;&nbsp;Jarak antar tanggal</strong>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><i class="icon-append fa fa-calendar"></i>&nbsp;&nbsp;<input type="date" id="bd-desde" class="gentxt1" /></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;TO&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><i class="icon-append fa fa-calendar"></i>&nbsp;&nbsp;<input type="date" id="bd-hasta" class="gentxt1" /></td>

								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="javascript:reportepaymentPDF();" class="btn btn-primary">Export ke <strong>PDF</strong></a></td>
							</tr>
						</table>
						<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
									padding: 5px;
								}

								.In-Transit {
									background: #00D96D;
								}
							</style>
							<style>
								.Paid {
									background: #675F99;
								}

								.ToPay {
									background: #FF8441;
								}

								.Cash-on-Delivery {
									background: #F6565A;
								}
							</style>
							<thead>
								<tr>
									<th>Cetak</th>
									<th>Tracking </th>
									<th>Mode Pembayaran</th>
									<th>Pengiriman</th>
									<th>penerima </th>
									<th>Tanggal</th>
									<th>pegawai</th>
									<th> Status</th>
								</tr>
							</thead>
							<?php
							if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Administrator') {
							?>
								<tbody>

									<?php
									$result3 = mysql_query("SELECT * FROM courier WHERE status != 'Delivered'  ORDER BY cid");
									while ($row = mysql_fetch_array($result3)) {
									?>
										<tr>
											<td align="center">
												<a target="_blank" href="print-invoice/invoice-print.php?cid=<?php echo $row['cid']; ?>">
													<img src="images/print.png" border="0" height="20" width="20"></a>
											</td>
											<td>
												<font color="#000"><?php echo $row['cons_no']; ?></font>
											</td>
											<td><span class="label <?php echo $row['book_mode']; ?> label-large"><?php echo $row['book_mode']; ?></span></td>
											<td><?php echo $row['ship_name']; ?></td>
											<td><?php echo $row['rev_name']; ?></td>
											<td><?php echo $row['pick_date']; ?></td>
											<td><?php echo $row['officename']; ?></td>
											<td><span class="label <?php echo $row['status']; ?> label-large"><?php echo $row['status']; ?></span></td>
										</tr>
									<?php } ?>
								</tbody>
							<?php } ?>

							<?php
							if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Employee') {
							?>
								<tbody>

									<?php
									$result3 = mysql_query("SELECT * FROM courier WHERE status != 'Delivered' and officename='" . $_SESSION["user_type"] . "' ORDER BY cid");
									while ($row = mysql_fetch_array($result3)) {
									?>
										<tr>
											<td align="center">
												<a target="_blank" href="print-invoice/invoice-print.php?cid=<?php echo $row['cid']; ?>">
													<img src="images/print.png" border="0" height="20" width="20"></a>
											</td>
											<td>
												<font color="#000"><?php echo $row['cons_no']; ?></font>
											</td>
											<td><span class="label <?php echo $row['book_mode']; ?> label-large"><?php echo $row['book_mode']; ?></span></td>
											<td><?php echo $row['ship_name']; ?></td>
											<td><?php echo $row['rev_name']; ?></td>
											<td><?php echo $row['pick_date']; ?></td>
											<td><?php echo $row['officename']; ?></td>
											<td><span class="label <?php echo $row['status']; ?> label-large"><?php echo $row['status']; ?></span></td>
										</tr>
									<?php } ?>
								</tbody>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
			<!-- end row -->

			<!-- Footer -->
			<?php
			include("footer.php");
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

	<script src="assets/js/jquery.core.js"></script>
	<script src="assets/js/jquery.app.js"></script>

	<script type="text/javascript">
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

	<!-- App js -->
	<script src="assets/js/jquery.core.js"></script>
	<script src="assets/js/jquery.app.js"></script>
	<script src="js/myjava.js"></script>
	<script src="js/payments_list.js"></script>
</body>

</html>