<?php

 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('database.php');
require_once('library.php');

$company=mysql_fetch_array(mysql_query("SELECT * FROM company"));

isUser();
?>
<!DOCname html>
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
	<title>PT. CITRA MANDIRI TRANS GROUP</title>
	
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
	<style> .delivered { background: #363C56; } .Delayed { background: #F76063; } .On-Hold { background: #4ECCDB; } .Landed { background: #FF8A4B; } .Finished { background: #333333; } .label{padding: 5px;} .In-Transit { background:#00D96D; } .OK { background:#00D96D; } .&nbsp;&nbsp; { background:#F1B53D; }</style>
	<style> .Paid { background: #675F99; } .ToPay { background: #FF8441; } .Cash-on-Delivery { background: #F6565A; } .Shipment-arrived { background: #FFC734; } .Returned { background: #F76063; } .Pending { background: #FF5D48; } .Bank { background: #999; } .Paypal { background: #4DD2FF; }</style>

	
</head>
<body>
	<?php
		include("header.php");
	?>							

		<!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="wrapper">
            <div class="container">

				<!-- Page-Title -->
				<?php
				include("icon_settings.php");
				?>
				
				<!-- star row Administrator-->
				
				<div class="row">
				<?php
					if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Administrator') {
				?>
					<?php
						// Always first connect to the database mysql
						$sql = "SELECT * FROM courier WHERE  status='On-Hold
						' ";  // sentence sql
						$result = mysql_query($sql);
						$numero1 = mysql_num_rows($result); // get the number of rows
					?>
                    <!--<div class="col-xs-6 col-md-3 col-lg-3 col-xl-2">
                        <div class="card-box tilebox-one">
                            <i class="icon-plane pull-xs-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Pengiriman Sedang Transit</h6>
                            <h2 class="m-b-20" data-plugin="counterup"><?php echo $numero1; ?></h2>
                            <span class="label label-success"> 
							<?php
								$sql_1 = mysql_query("SELECT concat(round(count( * ) *100 /(SELECT count( * ) FROM courier)) , \"%\") AS percent
								FROM courier WHERE  status = 'In-Transit' GROUP BY status");
								while ($rr = mysql_fetch_array($sql_1))

								for ($i=0; $i<mysql_num_fields($sql_1); $i++)
								echo $rr[$i] . " ";
								echo "<br>";	
											
							?>  </span> <span class="text-muted">Pengiriman Sedang Transit</span>
                        </div>
                    </div>
					
					<?php
						// Always first connect to the database mysql
						$sql = "SELECT * FROM courier WHERE  status='On-Hold' ";  // sentence sql
						$result = mysql_query($sql);
						$numero2 = mysql_num_rows($result); // get the number of rows
					?>
                   <div class="col-xs-6 col-md-3 col-lg-3 col-xl-2">
                        <div class="card-box tilebox-one">
                            <i class="icon-plane pull-xs-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Pengiriman Sedang On-Hoald</h6>
                            <h2 class="m-b-20" data-plugin="counterup"><?php echo $numero1; ?></h2>
                            <span class="label label-success"> 
							<?php
								$sql_1 = mysql_query("SELECT concat(round(count( * ) *100 /(SELECT count( * ) FROM courier)) , \"%\") AS percent
								FROM courier WHERE  status = 'On-Hold' GROUP BY status");
								while ($rr = mysql_fetch_array($sql_1))

								for ($i=0; $i<mysql_num_fields($sql_1); $i++)
								echo $rr[$i] . " ";
								echo "<br>";	
											
							?>  </span> <span class="text-muted">Pengiriman Sedang On-Hoald</span>
                        </div>
                    </div>
					
					<?php
						// Always first connect to the database mysql
						$sql = "SELECT * FROM courier WHERE  status='On-Hold' ";  // sentence sql
						$result = mysql_query($sql);
						$numero2 = mysql_num_rows($result); // get the number of rows
					?>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="card-box tilebox-one">
                            <i class="icon-paypal pull-xs-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Pengiriman Dibayar</h6>
                            <h2 class="m-b-20"><?php echo $company['currency']; ?><span data-plugin="counterup"><?php
											$result = mysql_query("SELECT SUM(shipping_subtotal	) as total FROM courier WHERE book_mode='Paid'");   
											$row = mysql_fetch_array($result, MYSQL_ASSOC);
											echo $s.formato($row["total"]);	
											
											?></span></h2>
                            <span class="label label-danger">
							<?php
								$sql = mysql_query("SELECT concat(round(count( * ) *100 /(SELECT count( * ) FROM courier)) , \"%\") AS percent
								FROM courier WHERE  book_mode='Paid' GROUP BY book_mode");
								while ($rr = mysql_fetch_array($sql))

								for ($i=0; $i<mysql_num_fields($sql); $i++)
								echo $rr[$i] . " ";
								echo "<br>";	
											
							?></span> <span class="text-muted">Persentase Pembayaran Pengiriman</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-credit-card pull-xs-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Pengiriman untuk membayar</h6>
                            <h2 class="m-b-20"><?php echo $company['currency']; ?><span data-plugin="counterup"><?php
											$result = mysql_query("SELECT SUM(shipping_subtotal	) as total FROM courier WHERE book_mode='ToPay'");   
											$row = mysql_fetch_array($result, MYSQL_ASSOC);
											echo $s.formato($row["total"]);	
												
											?></span></h2>
                            <span class="label label-pink"> 
							<?php
								$sql = mysql_query("SELECT concat(round(count( * ) *100 /(SELECT count( * ) FROM courier)) , \"%\") AS percent
								FROM courier WHERE  book_mode='ToPay' GROUP BY book_mode");
								while ($rr = mysql_fetch_array($sql))

								for ($i=0; $i<mysql_num_fields($sql); $i++)
								echo $rr[$i] . " ";
								echo "<br>";	
											
							?>	 </span> <span class="text-muted">Persentase Pengiriman dengan Tunai/Cash</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-rocket pull-xs-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Pengiriman yang Sudah diterima</h6>
                            <h2 class="m-b-20"><?php echo $company['currency']; ?><span data-plugin="counterup"><?php
											$result = mysql_query("SELECT SUM(shipping_subtotal	) as total FROM courier WHERE book_mode='Cash-on-Delivery'");   
											$row = mysql_fetch_array($result, MYSQL_ASSOC);
											echo $s.formato($row["total"]);	
												
											?></span></h2>
                            <span class="label label-warning"> 
							<?php
								$sql = mysql_query("SELECT concat(round(count( * ) *100 /(SELECT count( * ) FROM courier)) , \"%\") AS percent
								FROM courier WHERE  book_mode='Cash-on-Delivery' GROUP BY book_mode");
								while ($rr = mysql_fetch_array($sql))

								for ($i=0; $i<mysql_num_fields($sql); $i++)
								echo $rr[$i] . " ";
								echo "<br>";	
											
							?>	 </span> <span class="text-muted">Persentasi Pengiriman yang sudah diterima</span>
                        </div>
                    </div>
					<?php } ?>
                </div>
                <!-- end row Administrator---->
				
				
				
				<!-- star row Employee-->
                <div class="row">
				<?php
					if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Employee') {
				?>
					<?php
						// Always first connect to the database mysql
						$sql = "SELECT * FROM courier WHERE  status='In-Transit' AND user='".$_SESSION["user_type"]."' ";  // sentence sql
						$result = mysql_query($sql);
						$numero1 = mysql_num_rows($result); // get the number of rows
					?>
                   <!-- <div class="col-xs-6 col-md-3 col-lg-3 col-xl-2">
                        <div class="card-box tilebox-one">
                            <i class="icon-plane pull-xs-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Shipping In Transit</h6>
                            <h2 class="m-b-20" data-plugin="counterup"><?php echo $numero1; ?></h2>
                            <span class="label label-success"> 
							<?php
								$sql_1 = mysql_query("SELECT concat(round(count( * ) *100 /(SELECT count( * ) FROM courier)) , \"%\") AS percent
								FROM courier WHERE  status = 'In-Transit' AND user='".$_SESSION["user_type"]."' GROUP BY status");
								while ($rr = mysql_fetch_array($sql_1))

								for ($i=0; $i<mysql_num_fields($sql_1); $i++)
								echo $rr[$i] . " ";
								echo "<br>";	
											
							?>  </span> <span class="text-muted">Pengiriman yang Transit</span>
                        </div>
                    </div>
					
					<?php
						// Always first connect to the database mysql
						$sql = "SELECT * FROM courier_online WHERE  status='In-Transit' ";  // sentence sql
						$result = mysql_query($sql);
						$numero2 = mysql_num_rows($result); // get the number of rows
					?>
                    <div class="col-xs-6 col-md-3 col-lg-3 col-xl-2">
                        <div class="card-box tilebox-one">
                            <i class="icon-envelope-open pull-xs-right text-muted"></i>
                            <h6 class="text-primary text-uppercase m-b-15 m-t-10">Online Bookings</h6>
                            <h2 class="m-b-20" data-plugin="counterup"><?php echo $numero2; ?></h2>
                            <span> 
							</span> <span class="text-muted">Online Bookings yang Transit</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="card-box tilebox-one">
                            <i class="icon-paypal pull-xs-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Pengiriman yang Sudah Dibayar</h6>
                            <h2 class="m-b-20"><?php echo $company['currency']; ?><span data-plugin="counterup"><?php
											$result = mysql_query("SELECT SUM(shipping_subtotal	) as total FROM courier WHERE book_mode='Paid' AND user='".$_SESSION["user_type"]."'");   
											$row = mysql_fetch_array($result, MYSQL_ASSOC);
											echo $s.formato($row["total"]);	
											
											?></span></h2>
                            <span class="label label-danger">
							<?php
								$sql = mysql_query("SELECT concat(round(count( * ) *100 /(SELECT count( * ) FROM courier)) , \"%\") AS percent
								FROM courier WHERE  book_mode='Paid' AND user='".$_SESSION["user_type"]."' GROUP BY book_mode");
								while ($rr = mysql_fetch_array($sql))

								for ($i=0; $i<mysql_num_fields($sql); $i++)
								echo $rr[$i] . " ";
								echo "<br>";	
											
							?></span> <span class="text-muted">Persentase Pengiriman yang sudah Dibayar</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-credit-card pull-xs-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Pengiriman untuk Membayar</h6>
                            <h2 class="m-b-20"><?php echo $company['currency']; ?><span data-plugin="counterup"><?php
											$result = mysql_query("SELECT SUM(shipping_subtotal	) as total FROM courier WHERE book_mode='ToPay' AND user='".$_SESSION["user_type"]."'");   
											$row = mysql_fetch_array($result, MYSQL_ASSOC);
											echo $s.formato($row["total"]);	
												
											?></span></h2>
                            <span class="label label-pink"> 
							<?php
								$sql = mysql_query("SELECT concat(round(count( * ) *100 /(SELECT count( * ) FROM courier)) , \"%\") AS percent
								FROM courier WHERE  book_mode='ToPay' AND user='".$_SESSION["user_type"]."' GROUP BY book_mode");
								while ($rr = mysql_fetch_array($sql))

								for ($i=0; $i<mysql_num_fields($sql); $i++)
								echo $rr[$i] . " ";
								echo "<br>";	
											
							?>	 </span> <span class="text-muted">Persentase Pengiriman yang Dibayar Tunai/Cash</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-rocket pull-xs-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">pengiriman yang sudah diterima</h6>
                            <h2 class="m-b-20"><?php echo $company['currency']; ?><span data-plugin="counterup"><?php
											$result = mysql_query("SELECT SUM(shipping_subtotal	) as total FROM courier WHERE book_mode='Cash-on-Delivery' AND user='".$_SESSION["user_type"]."'");   
											$row = mysql_fetch_array($result, MYSQL_ASSOC);
											echo $s.formato($row["total"]);	
												
											?></span></h2>
                            <span class="label label-warning"> 
							<?php
								$sql = mysql_query("SELECT concat(round(count( * ) *100 /(SELECT count( * ) FROM courier)) , \"%\") AS percent
								FROM courier WHERE  book_mode='Cash-on-Delivery' AND user='".$_SESSION["user_type"]."' GROUP BY book_mode");
								while ($rr = mysql_fetch_array($sql))

								for ($i=0; $i<mysql_num_fields($sql); $i++)
								echo $rr[$i] . " ";
								echo "<br>";	
											
							?>	 </span> <span class="text-muted">Persentase  pengiriman yang sudah diterima</span>
                        </div>
						
                    </div>
				<?php } ?>
                </div>
                <!-- end row Employee-->
				

               <div class="row">
                    <div class="col-xs-12 col-lg-12 col-xl-9">
                        <div class="card-box">
						 <h4 class="header-title m-t-0 m-b-20">Daftar Pengiriman</h4>
							<div class="table-responsive">
						        <div class="col-xs-12 col-lg-12 col-xl-12">

                                    <ul class="nav nav-tabs m-b-10" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                               role="tab" aria-controls="home" aria-expanded="true">
											   <i class="icon-plane"></i>&nbsp;&nbsp;Daftar Utama Pengiriman</a>
                                        </li> 
										<?php
											// Always first connect to the database mysql
											$sql = "SELECT * FROM courier_online WHERE  status='In-Transit' ";  // sentence sql
											$result = mysql_query($sql);
											$numero2 = mysql_num_rows($result); // get the number of rows
										?>
                                  <!--   <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                               role="tab" aria-controls="profile">
											   <i class="icon-envelope-open"></i>&nbsp; <strong><span class="text-danger text-uppercase m-b-15 m-t-10"><?php echo $numero2; ?></span></strong>&nbsp;DAFTAR PENGIRIMAN YANG ONELINE BOOKING</a>
                                        </li>
                                    </ul> -->
									<br><br>
                                    <div class="tab-content" id="myTabContent">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home"
                                             aria-labelledby="home-tab">
												<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
													<thead>
													  <tr>
														  <?php
															if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Administrator') {
														  ?>
														  <th></th>														 
														  <th></th>
														  <?php } ?>
														  <th>Diterima</th>
														  <th></th>
														  <th></th>
														  <th></th>
														  <th></th>
														  <th>Tracking </th>
														  <th>Tipe Pengiriman</th>
														  <th>pengirim</th>
														  <th>Penerima</th>
														  <th>Tanggal</th>
														  <th>pegawai</th>
														  <!--<th> Status</th>-->
													  </tr>
													</thead>
													<?php
															if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Administrator') {
														?>
													<tbody>
													  <tr>
															<?php  					
																$result3 = mysql_query("SELECT * FROM courier WHERE status != 'delivered'  ORDER BY cid DESC");
																while($row = mysql_fetch_array($result3)) {					
															?>
																  <td align="center">					
																  <a href="edit-courier.php?cid=<?php echo $row['cid']; ?>">
																  <img src="images/edit.png"  height="20" width="20"></a></td>																 
																  <td align="center">
																  <a href="#" onclick="del_list_admin(<?php echo $row['cid']; ?>);">
																	<img src="images/delete.png"  height="20" width="18"></a>																  
																  </td>
																  <td class="gentxt" align="center">
																  <a href="process.php?action=delivered&cid=<?php echo $row['cid']; ?>" onclick="return confirm('Sure like to change the status of shipping?');">
																	<img src="images/delivery.png"  height="20" width="20"></a></td>						  
																<!--  <td align="center">
																  <a target="_blank" href="print-invoice/invoice-print.php?cid=<?php echo $row['cid']; ?>">
																  <img src="images/print.png"  height="20" width="20"></a></td> -->
																  
																<!--  <td align="center">
																  <a target="_blank" href="print-invoice/invoice-print.php?cid=<?php echo $row['cid']; ?>">
																  <img src="images/print.png"  height="20" width="20"></a></td> -->

																<!--  <td align="center">
																  <img src="images/print.png"  height="20" width="20"></a></td>
																  <td align="center"> -->

																  <td align="center">
                                            <a target="_blank" href="../../upload/lampiran/<?php echo $row['lampiran1']; ?>">
                                                <img src="images/print.png" border="0" height="20" width="20"></a>
                                        </td>
                                        <td align="center">
                                            <a target="_blank" href="../../upload/lampiran/<?php echo $row['lampiran2']; ?>">
                                                <img src="images/print.png" border="0" height="20" width="20"></a>
                                        </td>
                                        <td align="center">
                                            <a target="_blank" href="../../upload/lampiran/<?php echo $row['lampiran3']; ?>">
                                                <img src="images/print.png" border="0" height="20" width="20"></a>
												<td align="center">
																 <a href="barcode/html/BCGcode39.php?cons_no=<?php echo $row['cons_no']; ?>" target="_blank">
																  <img src="images/barcode.png" height="20" width="20"></a></td>
																  <td><font color="#000"><?php echo $row['cons_no']; ?></font></td>
																  <td><?php echo $row['shipment_type']; ?></td>							 
																  <td><?php echo $row['ship_name']; ?></td>
																  <td><?php echo $row['rev_name']; ?></td>
																  <td><?php echo $row['pick_date']; ?></td>
																   <td><?php echo $row['user']; ?></td>	
																  <!--<td><span class="label <?php echo $row['status']; ?> label-large"><?php echo $row['status']; ?></span></td> -->        
													  </tr>
													<?php } ?>
													</tbody>
													<?php } ?>
													<?php
															if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Employee') {
														?>
													<tbody>
													  <tr>
													  <?php  					
																$result3 = mysql_query("SELECT * FROM courier WHERE status != 'delivered'  ORDER BY cid DESC");
																while($row = mysql_fetch_array($result3)) {					
															?>
						
																<td align="center">					
																  <a href="edit-courier.php?cid=<?php echo $row['cid']; ?>">
																  <img src="images/edit.png"  height="20" width="20"></a></td>																 
																<td class="gentxt" align="center">
																  <a href="process.php?action=delivered&cid=<?php echo $row['cid']; ?>" onclick="return confirm('Sure like to change the status of shipping?');">
																	<img src="images/delivery.png"  height="20" width="20"></a></td>  
																	<td align="center">
                                                             <a target="_blank" href="../../upload/lampiran/<?php echo $row['lampiran1']; ?>">
                                                             <img src="images/print.png" border="0" height="20" width="20"></a>
                                                              </td>
                                                               <td align="center">
                                                               <a target="_blank" href="../../upload/lampiran/<?php echo $row['lampiran2']; ?>">
                                                               <img src="images/print.png" border="0" height="20" width="20"></a>
                                                             </td>
                                                       <td align="center">
                                                     <a target="_blank" href="../../upload/lampiran/<?php echo $row['lampiran3']; ?>">
                                                      <img src="images/print.png" border="0" height="20" width="20"></a>
																	
																  <td><font color="#000"><?php echo $row['cons_no']; ?></font></td>
																  <td><?php echo $row['shipment_type']; ?></td>							 
																  <td><?php echo $row['ship_name']; ?></td>
																  <td><?php echo $row['rev_name']; ?></td>
																  <td><?php echo $row['pick_date']; ?></td>
																  <td><?php echo $row['user']; ?></td>
																 <!-- <td><span class="label <?php echo $row['status']; ?> label-large"><?php echo $row['status']; ?></span> -->
																
													  </tr>

													<?php } ?>
													<?php } ?>
													</tbody>
													
												</table>
												
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                             aria-labelledby="profile-tab">
                                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
													<thead>
													  <tr> 
														  <th>Update</th>
														  <?php
															if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Administrator') {
														  ?>
														  <th></th>
															<?php } ?>
														  <th></th>
														  <th></th>
														  <th></th>
														  <th>Untuk Membayar</th>
														  <th>Pembayaran </th>
														  <th>Pelanggan<	/th>
														  <th>dari</th>
														  <th>Penerima</th>
														  <th>Ke</th>
														  <th>Tanggal</th>
														 <!-- <th>Status</th> -->
														  
													  </tr>
													</thead>

													<tbody>
													  <tr>
															<?php  					
																$result3 = mysql_query("SELECT * FROM courier_online WHERE status='In-Transit' OR status='Shipment-arrived'
																						OR status='Returned' ORDER BY cid DESC");
																while($row = mysql_fetch_array($result3)) {					
															?> 
															<td align="center">																					
															  <a href="edit-courier-customer.php?cid=<?php echo $row['cid']; ?>">
															  <img src="images/delivery.png"  height="20" width="20"></a></td>
															  <?php
																	if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Administrator') {
																?>															  
															 <td align="center">
																  <a href="#" onclick="del_list_online(<?php echo $row['cid']; ?>);">
																	<img src="images/delete.png"  height="20" width="18"></a>																  
															  </td>
															  <?php } ?>															  						  
															  <td align="center">
															  <a target="_blank" href="print-invoice/invoice-print-online.php?cid=<?php echo $row['cid']; ?>">
															  <img src="images/print.png"  height="20" width="20"></a></td>
															  <td align="center">
															  <a  href="barcode/html/BCGcode39.php?cons_no=<?php echo $row['cons_no']; ?>" target="_blank">
															  <img src="images/barcode.png"  height="20" width="20"></a></td>
															  <td><FONT SIZE=2><font color="#000"><?php echo $row['cons_no']; ?></FONT></td>
															  <td><FONT SIZE=2><strong><?php echo $company['currency']; ?><?php echo $s.formato($row['shipping_subtotal']); ?></strong></FONT></td>															  
															   <td align="center"><span class="label <?php echo $row['payment']; ?> label-large"><?php echo $row['payment']; ?></span>&nbsp;<span class="label <?php echo $row['paymode']; ?> label-large"><?php echo $row['paymode']; ?></span></td>
															   </td>															  
															  <td><FONT SIZE=2><?php echo $row['ship_name']; ?></FONT></td>
															  <td><FONT SIZE=2><?php echo $row['fromcity']; ?></FONT></td>
															  <td><FONT SIZE=2><?php echo $row['rev_name']; ?></FONT></td>
															  <td><FONT SIZE=2><?php echo $row['tocity']; ?></FONT></td>
															  <td><FONT SIZE=2><?php echo $row['deliverydate']; ?></FONT></td>
															  <td><span class="label <?php echo $row['status']; ?> label-large"><?php echo $row['status']; ?></span></td>     
													  </tr>
														<?php } ?>
													</tbody>												
												</table>
                                        </div>
                                    </div>
                                </div>

							</div>	
                        </div>
                    </div><!-- end col-->
					
					<div class="col-xs-12 col-lg-12 col-xl-3">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30">Pengiriman Terakhir</h4>

                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="50%">
                                    <thead>
                                        <tr>
                                            <th>Tracking</th>
                                            <th>Tanggal dimulai</th>
                                            <!--<th>Status</th>-->
											<th>Type pengiriman</th>
											<th>Type Pegawai</th>
                                        </tr>
                                    </thead>
									<tbody>
										<?php
											$result1 = mysql_query("SELECT * FROM courier WHERE LEFT(book_date, 10) = CURDATE()    ");
											while($row = mysql_fetch_array($result1)) {					
										?>  
                                        <tr>
                                            <td><font color="#000"><?php echo $row['cons_no']; ?></font></td>
                                            <td><?php echo $row['book_date']; ?></td>
                                            <!--<td><span class="label <?php echo $row['comments']; ?> label-large"><?php echo $row['comments']; ?></span></td>-->
											<td><?php echo $row['shipment_type']; ?></td>
											<td><?php echo $row['user']; ?></td>
                                        </tr>
										<?php } ?> 
                                    </tbody>
									
                                </table>
                            </div>
                        </div>
                    </div><!-- end col-->
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
            } );

        </script>
		
		<script type="text/javascript">
			function del_list_admin(cid) {
				if (window.confirm("Aviso:\n Sure you want to delete the selected  file?")) {
					window.location = "deletes/delete_list_admin.php?action=del&cid="+cid; 
				}
			}
		</script>
		<script type="text/javascript">
			function del_list_online(cid) {
				if (window.confirm("Aviso:\n Sure you want to delete the selected  file?")) {
					window.location = "deletes/delete_list_online.php?action=del&cid="+cid; 
				}
			}
		</script>

    </body>

</html>