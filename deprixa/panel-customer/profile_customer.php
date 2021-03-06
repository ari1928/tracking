<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('../database.php');
require_once('../library.php');
require_once('../funciones.php');

$qname = $_SESSION['user_name'];
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
	<link rel="shortcut icon" href="assets/images/Logo_CMT.png">

	<!-- App title -->
	<title>PT.CITRA MANDIRI TRANS GROUP</title>

	<!-- Switchery css -->
	<link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

	<!-- App CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../bower_components/animate.css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="../bower_components/simple-line-icons/css/simple-line-icons.css" type="text/css" />
	<script type="text/javascript" src="../../process/countries.js"></script>

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
				<div class="col-sm-12">
					<div class="card-box">
						<h4 class="header-title" style="margin-top: 50px;"><b><i class="fa fa-gears (alias) icon text-default-lter"></i>&nbsp;&nbsp;Profile Pelanggan</b></h4>

						<?php
						require_once('../database.php');
						$sql_1 = "SELECT * FROM tbl_clients where email='$qname' LIMIT 1";
						$result45 = dbQuery($sql_1);
						while ($data = dbFetchAssoc($result45)) {
							extract($data);
						?>
							<?php if ($foto != '') { ?>
								<img src="../../upload/fotouser/<?= $foto ?>" class="img-responsive img-circle" style="margin-top: 20px; margin-bottom: 20px; width:200px;" alt="user">
							<?php } else { ?>
								<img src="assets/images/users/avatar-2.jpg" class="img-responsive img-circle" style="margin-top: 20px; margin-bottom: 20px;" alt="user">
							<?php } ?>


							<table border="0" align="center" width="100%">

								<!-- START Checkout form -->
								<form action="../process.php?action=change-profile" method="post" enctype="multipart/form-data" name="frmShipment" class="form-horizontal">
									<div class="row">
										<!-- START Presonal information -->
										<fieldset class="col-md-6">
											<!-- Name -->
											<div class="row">
												<div class="col-sm-12 form-group">
													<label class="control-label"><i class="fa fa-user icon text-default-lter"></i>&nbsp;Nama Pelanggan<span class="required-field">*</span></label>
													<input type="text" name="name" class="form-control" id="firstName" value="<?php echo $name; ?>">
													<input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12 form-group">
													<label class="control-label">Alamat<span class="required-field">*</span></label>
													<input type="text" class="form-control" id="lastName" name="address" value="<?php echo $address; ?>">
												</div>
											</div>
											<!-- Adress and Phone -->
											<div class="row">
												<div class="col-sm-6 form-group">
													<label class="control-label"><i class="fa fa-envelope icon text-default-lter"></i>&nbsp;Foto</label>
													<input class="form-control" type="file" name="foto" id="foto">
													<input class="form-control" type="text" hidden  name="foto_old" value="<?php echo $foto; ?>">
												</div>
											</div>
										</fieldset>
										<!-- START Receiver info  -->
										<fieldset class="col-md-6">
											<!-- Name -->
											<div class="form-group">
												<label class="control-label"><i class="fa fa-phone icon text-default-lter"></i>&nbsp;Phone<span class="required-field">*</span></label>
												<input class="form-control" type="text" name="phone" value="<?php echo $phone; ?>">
											</div>
											<!-- Adress and Phone -->
											<div class="row">
												<div class="col-sm-6 form-group">
													<label class="control-label"><i class="fa fa-envelope icon text-default-lter"></i>&nbsp;Email <span class="required-field">*</span></label>
													<input class="form-control" type="email" name="email" id="email" value="<?php echo $email; ?>" readonly>
												</div>
												<div class="col-sm-4 form-group">
													<label class="control-label"><i class="fa fa-key icon text-default-lter"></i>&nbsp;Ubah Password</label>
													<input type="password" class="form-control" id="currentPassword" name="password" value="<?php echo $password; ?>">
												</div>
											</div>
										</fieldset>
										<div class="col-md-6 text-left">
											<br>
											<input class="btn btn-primary" name="Submit" type="submit" value="UPDATE">
											<input class="btn btn-dark" name="Submit" type="submit" value="RESET">
										</div>
									</div>
								</form>
							<?php } ?>
							</table>
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


	<!-- jQuery  -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/waves.js"></script>
	<script src="assets/js/jquery.nicescroll.js"></script>
	<script src="assets/plugins/switchery/switchery.min.js"></script>


	<!-- App js -->
	<script src="assets/js/jquery.core.js"></script>
	<script src="assets/js/jquery.app.js"></script>

	<!-- Page specific js -->
	<script src="assets/pages/jquery.dashboard.js"></script>




</body>

</html>