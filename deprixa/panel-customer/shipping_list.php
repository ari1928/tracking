<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('../library.php');
require_once('../database.php');
$qname = $_SESSION['user_name'];
echo $qname;
if (isset($_POST['cons'])) {
    $cons = $_POST['cons'];
    $result1 =  mysql_query("SELECT * FROM courier_online where s_add='$qname' AND cons_no='$cons' ");
} else {

    $result1 =  mysql_query("SELECT * FROM courier_online where s_add='$qname' ");
}

$getuser =  mysql_query("SELECT * FROM tbl_clients where email='$qname' ");
$gettt = mysql_fetch_assoc($getuser);
$result_track =  mysql_query("SELECT * FROM courier where ship_name='$gettt[name]' ");

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
          <!--  <?php
            include("../icon_settings.php");
            ?> -->
            <!-- end row -->

            <div class="row">

                <div class="col-xs-12 col-lg-12">
                    <div class="card-box">
                        <h3 class="font-thin m-t-none m-b-none text-primary-lt">ALL DAFTAR PENGIRIMAN</h3>
                        <p>Ini dia daftar & status pengiriman.</p>

                        <div class="table-responsive">
                            <table id="datatable-buttons-ship" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>LAMPIRAN 1</th>
                                        <th>LAMPIRAN 2</th>
                                        <th>LAMPIRAN 3</th>
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

                                        <!-- <td align="center">
                                            <a target="_blank" href="print-invoice/invoice-print.php?cid=<?php echo $row['cid']; ?>">
                                                <img src="../images/print.png" border="0" height="20" width="20"></a>
                                        </td> -->
                                        <td align="center">
                                            <a target="_blank" href="../../upload/lampiran/<?php echo $row['lampiran1']; ?>">
                                                <img src="../images/print.png" border="0" height="20" width="20"></a>
                                        </td>
                                        <td align="center">
                                            <a target="_blank" href="../../upload/lampiran/<?php echo $row['lampiran2']; ?>">
                                                <img src="../images/print.png" border="0" height="20" width="20"></a>
                                        </td>
                                        <td align="center">
                                            <a target="_blank" href="../../upload/lampiran/<?php echo $row['lampiran3']; ?>">
                                                <img src="../images/print.png" border="0" height="20" width="20"></a>
                                        </td>
                                        <td><a href="shipping-detail.php?q=<?= $row['cons_no'] ?>"><?php echo $row["cons_no"]; ?></a></td>
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
    <!-- <script src="assets/pages/jquery.dashboard.js"></script> -->

    <!-- Required datatable js -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <!-- <script src="assets/plugins/datatables/jszip.min.js"></script> -->
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->


    <script name="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons-ship').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });
    </script>

</body>

</html>