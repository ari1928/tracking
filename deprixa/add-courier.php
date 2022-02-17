<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('database.php');
require_once('library.php');
require_once('funciones.php');

$sql = "SELECT DISTINCT(off_name)
		FROM offices";
$result = dbQuery($sql);

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

	<!-- ######### CSS STYLES ######### -->

	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="bower_components/simple-line-icons/css/simple-line-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/font.css" type="text/css" />
	<link href="js/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="js/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
	<link rel="stylesheet" href="css/footer-basic-centered.css">

	<!-- Plugins css -->
	<link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
	<link href="assets/plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
	<link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link href="assets/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
	<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../process/countries.js"></script>


<body>
	<?php include("header.php"); ?>

	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="wrapper" id="main">
		<div class="container">

			<!-- Page-Title -->
			<?php
			include("icon_settings.php");
			?>
			<div class="row">
				<div class="col-sm-12">
					<div class="card-box table-responsive">
						<tbody>
							<tr>
								<h3 class="classic-title"><span><strong><i class="fa fa-truck icon text-default-lter"></i>&nbsp;&nbsp;Tambahkan pengiriman</strong></h3>

								<!-- START Checkout form -->

								<form action="process.php?action=add-cons" name="formulario" method="post" enctype="multipart/form-data">
									<table border="0" align="center" width="100%">
										<div class="row">

											<!-- START Presonal information -->
											<fieldset class="col-md-6">
												<legend>Informasi Pengiriman :</legend>

												<!-- Name -->
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
																echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
															}
															?>
														</select>
													</div>
													<div class="col-sm-6">

														<!-- Name -->
														<div class="form-group">
															<label class="text-success">CONSIGNEE<span class="required-field">*</span></label>
															<input type="text" class="form-control" name="Receivername" placeholder="Masukkan Nama Penerima / Consignee" required>

														</div>

													</div>
												</div>

												<div class="row">
													<div class="col-sm-4 form-group">
														<label class="text-success">HBL / HAWB No <span class="required-field">*</span></label>
														<input name="hbl" class="form-control" id="hbl" placeholder="Masukkan HBL / HAWB No" required>
													</div>
													<div class="col-sm-4 form-group">
														<label class="text-success"><i class="fa fa-plane icon text-default-lter"></i>&nbsp;Shipment Type <span class="required-field">*</span></label>
														<select name="shipment_type" class="form-control" id="Mode" required>
															<option value="0">Pilih</option>
															<?php
															$sql = mysql_query("SELECT * FROM shipment_type");
															while ($row = mysql_fetch_array($sql)) {
																echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
															}
															?>
														</select>
													</div>
													<div class="col-sm-4 form-group">
														<label class="text-success"><i class="fa fa-plane icon text-default-lter"></i>&nbsp;MODE <span class="required-field">*</span></label>
														<select name="Mode" class="form-control" id="Mode" required>
															<option value="0">Pilih</option>
															<?php
															$sql = mysql_query("SELECT name FROM mode_bookings  GROUP BY name");
															while ($row = mysql_fetch_array($sql)) {
																if ($cliente == $row['name']) {
																	echo '<option value="' . $row['name'] . '" selected>' . $row['name'] . '</option>';
																} else {
																	echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
																}
															}
															?>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="text-success">POL <span class="required-field">*</span></label>
															<input type="text" name="pol" class="form-control" id="" placeholder="Masukkan POL" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="text-success">POD <span class="required-field">*</span></label>
															<input type="text" name="pod" class="form-control" id="" placeholder="Masukkan POD" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="text-success">Transit Port <span class="required-field">*</span></label>
															<input type="text" name="transit_port" class="form-control" id="" placeholder="Masukkan transit port" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="text-success">Transit Time <span class="required-field">*</span></label>
															<input type="text" name="transit_time" class="form-control" id="" placeholder="Masukkan transit time" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="text-success">Vessel Voyage <span class="required-field">*</span></label>
															<input type="text" name="vessel_voyage" class="form-control" id="" placeholder="Masukkan vessel voyage" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="text-success">Connecting Vessel <span class="required-field">*</span></label>
															<input type="text" name="connecting_vessel" class="form-control" id="" placeholder="Masukkan connecting vessel" required>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="text-success">Container Seal <span class="required-field">*</span></label>
															<input type="text" name="container_seal" class="form-control" id="" placeholder="Masukkan masukkan container seal" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-4 form-group">
														<label class="text-success"><i class="fa fa-cubes icon text-default-lter"></i>&nbsp;Quantity <span class="required-field">*</span></label>
														<input type="text" class="form-control" name="Qnty" placeholder="Masukkan quantity" required>
													</div>
													<div class="col-sm-4 form-group">
														<label class="text-success">Berat&nbsp;&nbsp;(Kg) <span class="required-field">*</span></label>
														<input type="text" class="form-control" name="Weight" placeholder="Masukkan berat" required>
													</div>
													<div class="col-sm-2 form-group" hidden>
														<label class="text-success"><?php echo $company['currency']; ?>&nbsp;Variable&nbsp;(Kg)</label>
														<input type="text" class="form-control" name="variable" value="2.20" />
													</div>
													<div class="col-sm-3 form-group" hidden>
														<label for="ccv" class="text-success"><i class="fa fa-money icon text-default-lter"></i>&nbsp;<strong>HARGA FREIHT</strong></i></label>
														<input type="text" class="form-control" value="0" name="Totalfreight" placeholder="0,00" onChange="calcula();" />
													</div>
													<div class="col-sm-3 form-group" hidden>
														<label class="text-success">Subtotal shipping</i></label>
														<input type="text" class="form-control" name="shipping_subtotal" value="0,00" />
													</div>
												</div>
												<!-- Text area -->
												<div class="form-group">
													<label for="inputTextarea" class="text-success"><i class="fa fa-comments icon text-default-lter"></i>&nbsp;COMMODITY <span class="required-field">*</span></label>
													<textarea class="form-control" name="Comments" id="Comments" placeholder="tulis Detail tentang Pengiriman"></textarea>
												</div>

											</fieldset>


											<!-- START Receiver info  -->
											<fieldset class="col-md-6">

												<!-- Name -->
												<div class="form-group">
													<label for="name-card" class="text-success"><strong>NOMOR TRACKING</strong></label>
													<input type="text" class="form-control" name="ConsignmentNo" value="<?php
																														//Variables
																														$DesdeLetra = "A";
																														$DesdeLetra1 = "W";
																														$DesdeLetra2 = "B";
																														$DesdeNumero2 = 1;
																														$HastaNumero2 = 1;
																														$DesdeNumero3 = 87;
																														$HastaNumero3 = 87;
																														$DesdeNumero = 1;
																														$HastaNumero = 1000000000000;
																														$letraAleatoria = ($DesdeLetra);
																														$letraAleatoria1 = ($DesdeLetra1);
																														$letraAleatoria2 = ($DesdeLetra2);
																														$numeroAleatorio2 = chr(rand(ord($DesdeNumero2), ord($HastaNumero2)));
																														$numeroAleatorio3 = ($DesdeNumero3);
																														$numeroAleatorio = rand($DesdeNumero, $HastaNumero);

																														echo "" . $letraAleatoria . "" . $letraAleatoria1 . "" . $letraAleatoria2 . "" . $numeroAleatorio . ""; ?>" id="ConsignmentNo" />
												</div>



												<div class="row">
													<div class="col-sm-12 form-group">
														<label for="month" class="text-success"><i class="fa fa-sort-amount-asc icon text-default-lter"></i>&nbsp;STATUS</label>
														<select class="form-control" name="status" id="status">
															<option selected="selected" value="In-Transit">In Transit</option>
														</select>
													</div>
													<div class="col-md-6">
														<!-- Status and Pickup Date -->
														<div class="form-group">
															<label for="dtp_input1" class="text-success"><i class="fa fa-calendar icon text-default-lter"></i>&nbsp;ETA POD</i> <span class="required-field">*</span></label>
															<div>
																<div class="input-group">
																	<input type="text" class="form-control" name="Packupdate" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
																	<span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
																</div><!-- input-group -->
															</div>
														</div>
													</div>
													<div class="col-sm-6 form-group">
														<label for="dtp_input1" class="text-success"><i class="fa fa-calendar icon text-default-lter"></i>&nbsp;ETD POL</i> <span class="required-field">*</span></label>
														<div>
															<div class="input-group">
																<input type="text" class="form-control" name="Schedule" placeholder="mm/dd/yyyy" id="datepicker">
																<span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
															</div><!-- input-group -->
														</div>
													</div>

													<div class="col-sm-4 form-group">
														<label for="dtp_input1" class="text-success"><i class="fa fa-file icon text-default-lter"></i>&nbsp;UPLOAD LAMPIRAN (pdf) min 100kb Max 10mb</i> <span class="required-field">*</span></label>
														<div>
															<div class="input-group">
																<input type="file" class="form-control" name="lampiran1" required>
															</div><!-- input-group -->
														</div>
													</div>
													<div class="col-sm-4 form-group">
														<label for="dtp_input1" class="text-success"><i class="fa fa-file icon text-default-lter"></i>&nbsp;UPLOAD LAMPIRAN (pdf) min 100kb Max 10mb</i> <span class="required-field">*</span></label>
														<div>
															<div class="input-group">
																<input type="file" class="form-control" name="lampiran2" required>
															</div><!-- input-group -->
														</div>
													</div>
													<div class="col-sm-4 form-group">
														<label for="dtp_input1" class="text-success"><i class="fa fa-file icon text-default-lter"></i>&nbsp;UPLOAD LAMPIRAN (pdf) min 100kb Max 10mb</i> <span class="required-field">*</span></label>
														<div>
															<div class="input-group">
																<input type="file" class="form-control" name="lampiran3" required>
															</div><!-- input-group -->
														</div>
													</div>
												</div>

											</fieldset>
											<div class="col-md-6 text-left">
												<br>
												<br>
												<input class="btn btn-success" name="Submit" type="submit" id="submit" value="SAVE TRACKING">
											</div>
										</div>
										</article>
										<div class="clearfix"></div>
					</div>
				</div>
				</table>
				</form>
				</tbody>
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

	<script>
		$("input[type='file']").on("change", function() {
			var validExtensions = ["pdf", "PDF"];
			var file = $(this).val().split('.').pop();
			if (this.files[0].size > 10000000 || this.files[0].size < 100000 || validExtensions.indexOf(file) == -1) {
				alert('Ukuran size foto Min 100kb dan Max 10Mb!');
				$(this).val(null);
			}
		});
	</script>



</body>

</html>