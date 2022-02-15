<?php 

 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('database.php');
require_once('library.php');
require_once('funciones.php');

$posted= (int) $_GET['id'];
$sql = "SELECT * FROM online_booking WHERE id = $posted "; 	
$result = dbQuery($sql);
while($data = dbFetchAssoc($result)) {
extract($data);
		
$company=mysql_fetch_array(mysql_query("SELECT * FROM company"));
		
isUser();															 
?>
<!DOCTYPE html>
<html>
 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Page Description and Author -->
	<meta name="description" content=""/>
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
	
	<script src="js/jquery-1.11.1.min.js"></script>

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
				
					<h4 class="classic-title"><span><strong><i class="fa fa-truck icon text-default-lter"></i>&nbsp;&nbsp;Tambahkan Pengiriman</strong></h4>
				
		        <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Nama Client : <font style="color:#090;"><?php echo $name; ?> </font></b></h4>
							<table border="0" align="center" width="100%">
									<form  action="process.php?action=approve-courier" method="post" name="formulario" class="form-horizontal" > 
									 <!-- START Presonal information -->
										<fieldset class="col-md-6">
											<legend>Rincian Umum :</legend>
											
											<!-- Name -->
											<div class="row" >
												<div class="col-sm-4 form-group">
													<label  class="control-label"><i class="fa fa-user icon text-default-lter"></i>&nbsp;Staff User<span class="required-field">*</span></label>
													<input type="text"  name="user" id="user" value="<?php echo $_SESSION['user_name'] ;?>" class="form-control"  readonly="true" >
												</div>
												<div class="col-sm-8 form-group">											
													<label class="control-label" >Nama Client<span class="required-field">*</span></label>								
													 <input type="text" name="sname" required value="<?php echo $name; ?>" class="form-control" readonly="true" >									   									                                  
												</div>
											</div>
											
											<div class="row" >
												<div class="col-sm-6 form-group">
													<label  class="control-label">EMAIL<span class="required-field">*</span></label>
													<input type="text"  name="sadd" class="form-control" required  value="<?php echo  $email; ?>" readonly="true">
												</div>
												
												<div class="col-sm-6 form-group">
													<label  class="control-label"><i class="fa fa-phone icon text-default-lter"></i>&nbsp;PHONE</label>
													<input type="text" class="form-control" name="sphone"required  value="<?php echo $phone; ?>" readonly="true">
												</div>									
											</div>												
											<!-- Adress and Phone -->
											
											<!-- START Shipment information -->
										
											<legend>Informasi Pengiriman :</legend>
											
											<!-- Country and state -->
											<div class="row">
												 <div class="col-sm-6 form-group">
													<label for="ccv" class="control-label"><i class="fa fa-file-text icon text-default-lter"></i>&nbsp;<strong>KOMENTAR</strong></i></label>
													<input name="note" required  class="form-control" placeholder="Comments" value="<?php echo $note; ?>" >
												</div>
												
												<div class="col-sm-3 form-group">
													<label class="control-label">Product/Type</label>
													<input name="type" value="<?php echo $type; ?>" class="form-control" readonly="true">											
												</div>
												<div class="col-sm-3 form-group">
													<label class="control-label"><i class="fa fa-plane icon text-default-lter"></i>&nbsp;Service(Mode)</label>
													<input name="service" value="<?php echo $service; ?>" class="form-control"  id="mode">
																					
												</div>
											</div>
											<!-- Qnty -->
											<div class="row">
													
											</div>												
											 <!-- Payment Mode -->
											 <div class="row">									
												<div class="col-sm-2 form-group" >
													<label class="text-success"><i class="fa fa-cubes icon text-default-lter"></i>&nbsp;QUANTITY</label>
													<input type="text" class="form-control" name="Qnty"  value="<?php echo  $Qnty; ?>"  readonly="true"/>
												</div>
												<div class="col-sm-2 form-group">
													<label class="text-success">Weight&nbsp;&nbsp;(Kg)</label>
													<input  type="text" class="form-control" name="weight" value="<?php echo  $weight; ?>"  readonly="true"/>
												</div>
												<div class="col-sm-2 form-group">
													<label class="text-success"><?php echo $company['currency']; ?>&nbsp;Variable&nbsp;(Kg)</label>
													<input  type="text" class="form-control" name="variable" value="2.20"/>
												</div>														
												<div class="col-sm-3 form-group">
													<label for="ccv" class="text-success"><i class="fa fa-money icon text-default-lter"></i>&nbsp;<strong>FREIGHT PRICE</strong></i></label>
													<input  type="text" class="form-control" name="freight" placeholder="0,00" onChange="calcula();" />
												</div>
												<div class="col-sm-3 form-group">
													<label class="text-success">Subtotal shipping</i></label>
													<input  type="text" class="form-control" name="shipping_subtotal" value="0,00" />
												</div>
												
												<div class="col-sm-4 form-group ">
													<label for="month" class="control-label"><i class="fa fa-sort-amount-asc icon text-default-lter"></i>&nbsp;STATUS</label>
													<select class="form-control" name="status" id="status" required>
														<option selected="selected" value="In-Transit">Sedang Transit</option>
														<option value="In-Transit">Sedang Transit</option>
														<option value="Shipment-moved-further">Pindah Lebih Jauh</option>
														<option value="Shipment-arrived">Pengiriman Tiba</option>
														<option value="Despatched-for-delivery"> Dikirim dengan Pengiriman</option>
														<option value="Delivered">Terkirim</option>
														<option value="Returned">Dikembalikan</option>
														<option value="Hold">Tertahan</option>
													</select>
												</div>
											</div>
										</fieldset>

										<!-- START Receiver info  -->
										<fieldset class="col-md-6">
											<legend>Data Penerima :</legend>
											
											<!-- Name -->
											<div class="form-group">
												<label  class="control-label">NAMA PENERIMA<span class="required-field">*</span></label>
												<input type="text" class="form-control" name="rname" required  value="<?php echo $name_delivery; ?>" >												
											</div>
											
											<!-- Adress and Phone -->
											<div class="row">
												<div class="col-sm-6 form-group">
													<label  class="control-label">ALAMAT <span class="required-field">*</span></label>
													<input type="text"  name="radd"  class="form-control" required  value="<?php echo $address_delivery; ?>" >
												</div>
												
												<div class="col-sm-6 form-group">
													<label  class="control-label"><i class="fa fa-phone icon text-default-lter"></i>&nbsp;PHONE</label>
													<input type="text" class="form-control" name="rphone" required value="<?php echo $phone_delivery; ?>" >
												</div>																					
											</div>																	
											<br>
											<br>
											
											<!-- Name -->
											<div class="form-group">
												<label for="name-card" class="control-label"><font color="#FF6100"><strong>NOMOR TRACKING</strong></font></label>
												<input type="text" class="form-control" name="no"  value="<?php 
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
														
														echo "".$letraAleatoria."".$letraAleatoria1."".$letraAleatoria2."".$numeroAleatorio."";?>" id="ConsignmentNo"  />
											</div>
											<div class="row">
											<!-- Destination Office -->
											<div class="col-sm-6 form-group">
												<label for="zipcode" class="control-label"><i class="fa fa-angle-double-right icon text-default-lter"></i>&nbsp;DARI KOTA</label>
												<input name="fcity" required value="<?php echo $sstate; ?>, <?php echo $scountry; ?>" class="form-control" readonly="true" >																			
											</div>															
											<div class="col-sm-6 form-group">
												<label for="zipcode" class="control-label"><i class="fa fa-angle-double-right icon text-default-lter"></i>&nbsp;KE KOTA</label>
												<input name="tcity" required value="<?php echo $dstate; ?>, <?php echo $dcountry; ?>" class="form-control" readonly="true" >																				
											</div>		
											<!-- Status and Pickup Date -->

												<div class="col-sm-6 form-group">
													<label for="month" class="control-label"><i class="fa fa-calendar icon text-default-lter"></i>&nbsp;TANGGAL PESANAN</label>
													<input class="form-control" name="bdate" required  value="<?php echo  $booking_date; ?>" readonly="true" >											
												</div>								
											<div class="col-sm-6 form-group">
													<label for="dtp_input1" class="control-label"><i class="fa fa-calendar icon text-default-lter"></i>&nbsp;TANGGAL YANG DIJADWALJAN</i></label>										
												<div>
													<div class="input-group">
														<input type="text" class="form-control" name="ddate" required placeholder="mm/dd/yyyy" id="datepicker-autoclose">
														<span class="input-group-addon bg-custom b-0"><i class="icon-calender"></i></span>
													</div><!-- input-group -->
												</div>	
											</div>	
												</fieldset>
																		
											<div class="row">									
												 </tr><?php if($status !='Approved'){?><tr>											
												<input name="office" id="office" value="<?php echo  $officename; ?>" type="hidden"> 
												<input name="cid" id="cid" value="<?php echo $id; ?>" type="hidden">
												<div class="col-md-12 text-left">
													<input class="btn btn-primary" name="Submit" type="submit"  value="Approve Booking">
												</div>
											</div>	
											
									</form>
										
								<?php } ?>
								
									<?php if($status !='Cancelled' AND $status !='Approved'){?>
									<table border="0" align="center" width="50%">
										<br><br>
										<form method="post" action="process.php?action=update-booking" class="form-horizontal" > 
										
											<fieldset class="col-md-6">
												<legend>Batalkan Pesanan :</legend>	
												<!-- Text area -->
												<div class="form-group">
													<label for="inputTextarea" class="control-label"><i class="fa fa-comments icon text-default-lter"></i>&nbsp;Alasan untuk Pembatalan( Akan dikirimkan ke : <?php echo  $email; ?>  )</label>
													<textarea class="form-control" name="reasons"></textarea>
													<input name="cid" id="cid" value="<?php echo $id; ?>" type="hidden"> 
													<input name="name"  value="<?php echo $name; ?>" type="hidden" >
													<input name="email"  value="<?php echo $email; ?>" type="hidden">
												</div>
											</fieldset>
											<br>			
											<div class="col-md-12 text-left">
												<input class="btn btn-danger" name="Submit" type="submit"  value="Cancel Booking">
											</div>
										 </form>
									</table>									  
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
			  with (document.formulario) {
				var tempResult = Math.round(Qnty.value * weight.value * variable.value *  freight.value * 100);  // calculo general sin perder precision		
				var integerDigits = Math.floor(tempResult/100);  // extraer la parte no decimal
				var decimalDigits = "" + (tempResult - integerDigits * 100); // extraer la parte decimal			
				while (decimalDigits.length<0) {  // formatear la parte decimal a dos digitos 
				  decimalDigits = "0"+decimalDigits;
				}
				shipping_subtotal.value = integerDigits + " "; // componer la cadena resultado
			  }
			}			
		</script>
		
 <?php } ?>
</body>
</html>
