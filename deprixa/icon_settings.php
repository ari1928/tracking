<?php


 
?>         
				<div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                                    class="fa fa-cog"></i></span></button>
							<?php
								if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'Administrator') {
							?>		
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="service_mode.php"><i class="fa fa-gift"></i>&nbsp;Tipe Produk</a>
                                <a class="dropdown-item" href="type-of-shipments.php"><i class="fa fa-truck"></i>&nbsp;Tipe Pengiriman</a>
                                <a class="dropdown-item" href="add-office.php"><i class="fa fa-map-marker"></i>&nbsp;Lokasi</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="preferences.php"><i class="fa fa-briefcase"></i>&nbsp;Kantor</a>
                            </div>
								<?php } ?>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>