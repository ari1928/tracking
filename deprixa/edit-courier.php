<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('database.php');
require_once('library.php');
require_once('funciones.php');

isUser();
if ($_POST['cons'] == "") {
	$cid = $_GET['cid'];
	$sql = "SELECT * FROM courier WHERE cid ='$cid'";
} else {
	$posted = $_POST['cons'];
	$sql = "SELECT * FROM courier WHERE cons_no ='$posted'";
}
$result = dbQuery($sql);
$count = mysql_num_rows($result);
if ($count > 0) {
	while ($data = dbFetchAssoc($result)) {
		extract($data);

		$company = mysql_fetch_array(mysql_query("SELECT * FROM company"));
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

			<!-- App CSS -->
			<link href="assets/css/style.css" rel="stylesheet" type="text/css" />


			<!-- Plugins css -->
			<link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
			<link href="assets/plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
			<link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
			<link href="assets/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
			<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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

			<script src="js/jquery-1.11.1.min.js"></script>
			<script type="text/javascript" src="../process/countries.js"></script>

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
						<div class="col-xs-12 col-lg-12 col-xl-7">
							<div class="card-box">
								<div class="text-xs-center">

									<tbody>

										<h3 class="classic-title"><span><strong><i class="fa fa-truck icon text-default-lter"></i>&nbsp;&nbsp;UPDATE Pengiriman</strong></h3> <br>
										<!-- START Checkout form -->
										<form action="process.php?action=update-addcourier" name="formulario" method="post" enctype="multipart/form-data">
											<table border="0" align="center" width="100%">
												<div class="row">

													<!-- START Presonal information -->
													<fieldset class="col-md-12">
														<div class="row">
															<div class="col-sm-2 form-group" hidden>
																<label class="control-label"><i class="fa fa-user icon text-default-lter"></i>&nbsp;Staff Role<span class="required-field">*</span></label>
																<input type="text" name="officename" id="officename" value="<?php echo $_SESSION['user_type']; ?>" class="form-control" readonly="true">
															</div>
															<div class="col-sm-2 form-group" hidden>
																<label class="control-label"><i class="fa fa-user icon text-default-lter"></i>&nbsp;Staff User<span class="required-field">*</span></label>
																<input type="text" name="user" id="user" value="<?php echo $_SESSION['user_name']; ?>" class="form-control" readonly="true">
															</div>
															<div class="col-sm-4 form-group">

																<label class="text-success">SHIPPER <span class="required-field">*</span></label>
																<select name="Shippername" class="form-control" id="" required>
																	<option value="">-- Pilih --</option>
																	<?php
																	$sql = mysql_query("SELECT * FROM tbl_clients");
																	while ($row = mysql_fetch_array($sql)) {
																		$terpilih = $ship_name == $row['name'] ? "selected" : "";
																		echo '<option value="' . $row['name'] . '" ' . $terpilih . ' >' . $row['name'] . '</option>';
																	}
																	?>
																</select>
															</div>
															<div class="col-sm-6">

																<!-- Name -->
																<div class="form-group">
																	<label class="text-success">CONSIGNEE<span class="required-field">*</span></label>
																	<input type="text" class="form-control" value=" <?= $rev_name; ?> " name="Receivername" placeholder="Masukkan Nama Penerima / Consignee" required>

																</div>

															</div>
														</div>
														<div class="row">
															<div class="col-sm-4 form-group">
																<label class="text-success">HBL / HAWB No <span class="required-field">*</span></label>
																<input name="hbl" class="form-control" id="hbl" value="<?= $hbl; ?>" placeholder="Masukkan HBL / HAWB No" required>
															</div>
															<div class="row">
													<div class="col-sm-4 form-group">
														<label class="text-success">shipment type <span class="required-field">*</span></label>
														<input name="shipment_type" class="form-control" id="shipment_type" value="<?= $shipment_type; ?>" placeholder="Masukkan shipment type" required>
													</div>
													</div>
															</div>
															<div class="row">
															<div class="col-sm-4 form-group">
															<label class="text-success">Mode<span class="required-field">*</span></label>
														<input name="mode" class="form-control" id="mode" value="<?= $mode; ?>" placeholder="Masukkan mode" required>
															</div>
												
															<div class="row">
													<div class="col-sm-4 form-group">
														<label class="text-success">Shipment term <span class="required-field">*</span></label>
														<input name="Shipment_Term" class="form-control" id="Shipemnt_Term" value="<?= $Shipment_Term; ?>" placeholder="Masukkan Shipemnt Term" required>
													</div>
													</div>
															</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																<div class="form-group">
																	<label class="text-success">POL <span class="required-field">*</span></label>
																	<input type="text" name="pol" class="form-control" id="" value="<?= $pol; ?>" placeholder="Masukkan POL" required>
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-group">
																	<label class="text-success">POD <span class="required-field">*</span></label>
																	<input type="text" name="pod" class="form-control" id="" value="<?= $pod; ?>" placeholder="Masukkan POD" required>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																<div class="form-group">
																	<label class="text-success">Transit Port <span class="required-field">*</span></label>
																	<input type="text" name="transit_port" class="form-control" id="" value="<?= $transit_port; ?>" placeholder="Masukkan transit port" required>
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-group">
																	<label class="text-success">Transit Time <span class="required-field">*</span></label>
																	<input type="text" name="transit_time" class="form-control" id="" value="<?= $transit_time; ?>" placeholder="Masukkan transit time" required>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																<div class="form-group">
																	<label class="text-success">Vessel Voyage <span class="required-field">*</span></label>
																	<input type="text" name="vessel_voyage" class="form-control" id="" value="<?= $vessel_voyage; ?>" placeholder="Masukkan vessel voyage" required>
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-group">
																	<label class="text-success">Connecting Vessel <span class="required-field">*</span></label>
																	<input type="text" name="connecting_vessel" class="form-control" id="" value="<?= $connecting_vessel; ?>" placeholder="Masukkan connecting vessel" required>
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-group">
																	<label class="text-success">Container Seal <span class="required-field">*</span></label>
																	<input type="text" name="container_seal" class="form-control" id="" value="<?= $container_seal; ?>" placeholder="Masukkan masukkan container seal" required>
																</div>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-4 form-group">
																<label class="text-success"><i class="fa fa-cubes icon text-default-lter"></i>&nbsp;Quantity <span class="required-field">*</span></label>
																<input type="text" class="form-control" name="Qnty" value="<?php echo $qty; ?>" placeholder="Masukkan quantity" required>
															</div>
															<div class="col-sm-4 form-group">
																<label class="text-success">Berat&nbsp;&nbsp;(Kg) <span class="required-field">*</span></label>
																<input type="text" class="form-control" name="Weight" value="<?php echo $weight; ?>" placeholder="Masukkan berat" required>
															</div>
															<div class="col-sm-2 form-group" hidden>
																<label class="text-success"><?php echo $company['currency']; ?>&nbsp;Variable&nbsp;(Kg)</label>
																<input type="text" class="form-control" name="variable" value="<?php echo $variable; ?>" />
															</div>
															<div class="col-sm-3 form-group" hidden>
																<label for="ccv" class="text-success"><i class="fa fa-money icon text-default-lter"></i>&nbsp;<strong>HARGA FREIHT</strong></i></label>
																<input type="text" class="form-control" value="<?php echo $freight; ?>" name="Totalfreight" placeholder="0,00" onChange="calcula();" />
															</div>
															<div class="col-sm-3 form-group" hidden>
																<label class="text-success">Subtotal shipping</i></label>
																<input type="text" class="form-control" name="shipping_subtotal" value="0,00" />
															</div>
														</div>
														<!-- Text area -->
														<div class="form-group">
															<label for="inputTextarea" class="text-success"><i class="fa fa-comments icon text-default-lter"></i>&nbsp;COMMODITY <span class="required-field">*</span></label>
															<textarea class="form-control" name="Comments" id="Comments" placeholder="tulis Detail tentang Pengiriman"> <?php echo $comments; ?></textarea>
														</div>


														<!-- START Receiver info  -->
														<div class="row">
															<!-- Name -->
															<div class="col-sm-12 form-group">
																<label for="name-card" class="text-success"><strong>TRACKING NUMBER</strong></label>
																<input type="text" class="form-control" name="ConsignmentNo" value="<?php echo $cons_no; ?>" id="ConsignmentNo" readonly="true" />
															</div>

														</div>
														<div class="row">
															<div class="col-sm-12 form-group">
																<label for="month" class="control-label"><i class="fa fa-sort-amount-asc icon text-default-lter"></i>&nbsp;STATUS</label>
																<input class="form-control" name="status" id="status" value="<?php echo $status; ?>" readonly="true">
															</div>

															<!-- Status and Pickup Date -->
															<div class="col-sm-6 form-group">
																<label for="dtp_input1" class="control-label"><i class="fa fa-calendar icon text-default-lter"></i>&nbsp;ETA POD </i></label>
																<div>
																	<div class="input-group">
																		<input type="text" class="form-control" name="Packupdate" value="<?php echo $pick_date; ?>" id="datepicker-autoclose" readonly="true">
																		<span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
																	</div><!-- input-group -->
																</div>
															</div>
															<div class="col-sm-6 form-group">
																<label for="dtp_input1" class="control-label"><i class="fa fa-calendar icon text-default-lter"></i>&nbsp;ETA POL</i></label>
																<div>
																	<div class="input-group">
																		<input type="text" class="form-control" name="Schedule" value="<?php echo $schedule; ?>" id="datepicker">
																		<span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
																	</div><!-- input-group -->
																</div>
															</div>
														</div>
														<div class="col-sm-4 form-group">
														<label for="dtp_input1" class="text-success"><i class="fa fa-file icon text-default-lter"></i>&nbsp;UPLOAD LAMPIRAN (pdf) min 10kb Max 10mb</i> <span class="required-field">*</span></label>
														<div>
															<div class="input-group">
																<input type="file" class="form-control" name="lampiran1" >
															</div><!-- input-group -->
														</div>
													</div>
													<div class="col-sm-4 form-group">
														<label for="dtp_input1" class="text-success"><i class="fa fa-file icon text-default-lter"></i>&nbsp;UPLOAD LAMPIRAN (pdf) min 10kb Max 10mb</i> <span class="required-field">*</span></label>
														<div>
															<div class="input-group">
																<input type="file" class="form-control" name="lampiran2" >
															</div><!-- input-group -->
														</div>
													</div>
													<div class="col-sm-4 form-group">
														<label for="dtp_input1" class="text-success"><i class="fa fa-file icon text-default-lter"></i>&nbsp;UPLOAD LAMPIRAN (pdf) min 10kb Max 10mb</i> <span class="required-field">*</span></label>
														<div>
															<div class="input-group">
																<input type="file" class="form-control" name="lampiran3" >
															</div><!-- input-group -->
														</div>
													</div>
												</div>

											</fieldset>


												


													<div class="col-sm-12 form-group">
														<br>
														<br>
														<input class="btn btn-success" name="Submit" type="submit" id="submit" value="UPDATE TRACKING">
														<input name="cid" id="cid" value="<?php echo $cid; ?>" type="hidden">
													</div>
												</div>
								</div>
							</div>
							</table>
							</form>
							</tbody>

						<?php  } ?>
						</div>
					</div>
				</div><!-- end col-->

				<div class="col-xs-12 col-lg-12 col-xl-5">
					<div class="card-box">

						<h4 class="header-title m-t-0 m-b-30">PERBARUI STATUS</h4>

						<!-- START Review form -->

						<form action="process.php?action=update-status" method="post" name="frmShipment" id="frmShipment">
							<div class="row">
								<!-- Origin Office -->
								<div class="col-md-6 form-groupform-group">
									<label for="zipcode" class="control-label">LOKASI BARU:</label>
									<span id="inter_origin" style="display: block;">
										<select onchange="print_state('state', this.selectedIndex);" id="country" required name="pick_time" class="form-control"></select>
										<script language="javascript">
											print_country("country");
										</script>
								</div>

								<!-- Origin Office -->
								<!--<div class="col-md-4 form-groupform-group">
									<label for="stat" class="control-label">NEW STATE:</label>
									<select name="status" class="form-control">
										<option value="Finished">Finished</option>
										<option value="In-Transit">In Transit</option>
										<option value="On-Hold">On Hold</option>
										<option value="Landed">Landed</option>
										<option value="Delayed">Delayed</option>
									</select> 
								</div> -->
								<!-- Comments -->
								<div class="col-md-4 form-groupform-group">
									<label class="text-success">NEW STATE <span class="required-field">*</span></label>
									<input type="text" name="status" class="form-control" id="" placeholder="Masukkan state" required>
								 </div>

								<div class="col-md-6 form-groupform-group">
									<label for="message" class="control-label">COMMENTS:</label>
									<textarea class="form-control" name="comments" id="comments" required></textarea>
								</div>

								<!-- Send button -->
								<div class="col-md-6 form-group">
									<p>
										<font color="#FF6100"><strong>Update if necessary</strong></font>
									</p>

									<input name="submit" type="submit" class="btn btn-success" value="UPDATE STATUS">
									<input name="user" id="user" value="<?php echo $_SESSION['user_name']; ?>" type="hidden">
									<input name="cid" id="cid" value="<?php echo $cid; ?>" type="hidden">
									<input name="cons_no" id="cons_no" value="<?php echo $cons_no; ?>" type="hidden">
								</div>
						</form>

						<div class="table-responsive">
							<br><br><br>
							<h4 class="header-title m-t-0 m-b-30">SHIPPING HISTORY</h4>
							<br>
							<table class="table table-bordered m-b-0">
								<thead>
									<tr>
										<th>#Tracking</th>
										<th>Lokasi</th>
										<th>Status</th>
										<th>Date</th>
										<th>Observasi</th>
										
									</tr>
								</thead>
								<tbody>
									<?php
									$result3 = mysql_query("SELECT * FROM courier_track WHERE cid = $cid	AND cons_no = '$cons_no' ORDER BY bk_time");
									while ($row = mysql_fetch_array($result3)) {
									?>
										<tr>
											<td><?php echo $row['cons_no']; ?></td>
											<td><?php echo $row['pick_time']; ?></td>
											<td><?php echo $row['status']; ?></td>
											<td><?php echo $row['bk_time']; ?></td>
											<td><?php echo $row['comments']; ?></td>
										</tr>
									<?php } ?>	
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div><!-- end col-->
			</div>
			<!-- end row -->


			<?php
			include("footer.php");
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

			<script src="assets/plugins/moment/moment.js"></script>
			<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
			<script src="assets/plugins/mjolnic-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
			<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
			<script src="assets/plugins/clockpicker/bootstrap-clockpicker.js"></script>
			<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

			<script src="assets/pages/jquery.form-pickers.init.js"></script>

			<!-- App js -->
			<script src="assets/js/jquery.core.js"></script>
			<script src="assets/js/jquery.app.js"></script>

			<script language="javascript" type="text/javascript">
				function calcula() {
					with(document.formulario) {
						var tempResult = Math.round(Qnty.value * Weight.value * variable.value * Totalfreight.value * 100); // calculo general sin perder precision		
						var integerDigits = Math.floor(tempResult / 100); // extraer la parte no decimal
						var decimalDigits = "" + (tempResult - integerDigits * 100); // extraer la parte decimal			
						while (decimalDigits.length < 2) { // formatear la parte decimal a dos digitos 
							decimalDigits = "0" + decimalDigits;
						}
						shipping_subtotal.value = integerDigits + "," + decimalDigits + " "; // componer la cadena resultado
					}
				}
			</script>

		</body>

	<?php } ?>

		</html>