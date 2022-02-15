<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8" />
	 <title>PT. Citra Mandiri Trans</title>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--html5 ie include-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
    
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="/Styles/ie-fixes.css" />
    <![endif]-->    
    <link rel="canonical" href="tracking.php" />  
    <!-- style -->
    <link href="deprixa_components/content/cssefe4.css" rel="stylesheet"/>  
    <link href="deprixa_components/styles/track-order.css" rel="stylesheet" />

</head>

   <!-- Menu -->
   <body>
    <div id="container">
<div class="fw mpHeader slide">
<header class="mpdHeader">
<a href='index.html' class="mpd-logo" tabindex="-1">
    <div><span class=""></span></div>
    <div class="mpd-logo-text"><img src="deprixa/images/logo3.png"/></div>    
</a><!-- logo -->

<div class="login-status">
    <a class="ga-trackevent" data-gacat="MainNav" data-galab="Login" href="login.php">Masuk ke Akun Saya</a>
</div><!-- log in / out -->
<!-- Nav -->
<nav class="mpdNavigation">
    <div class="mobile-menu-header">Menu</div>
    <ul>
		<li class="index.html"><a href="index.html" class="MainNav" data-gacat="index" data-galab="GetAQuote" tabindex="-1">Home</a></li>
        <li class="deskHide last-mob-link"><a href="javascript:void(0)" class="cl   ose-mob-menu fl pad-top-10">Close &raquo;</a></li>
    </ul>
</nav>

</header>
</div>
    <!-- /Menu -->

<div class="slide">   
    </div>
       <main class="slide">
        <div class="fw">
            <section class="title">
                <header>
                    <h1><img src="deprixa_components/images/global/tracking-search.png" />Apakah Pesananan Anda Sudah Hampir Sampai?</h1>
					
                    <p class="mobHide">
                        Mengambil Paket dan Menerima Paket dengan Mudah bersama kami, Lakukan itu dengan mudah.  ketika anda melakukan Pengiriman melalui kami, Anda akan mandapatkan Nomor Tracking seperti <strong>AWB-472304198</strong> Hanya dengan menginput Kode Unik ini di Kotak Kolom dibawah dan, tanda, kamu bisa mengetahui dimana Status paket barang anda secara real time!
                    </p>
                </header>
				<div class="media-left">
                    
                </div>
            </section>
        </div>
        <div class="fw green-bg">
            <section class="track-num">
                <h3>MASUKAN KODE HBL / HAWB  PENGIRIMAN ANDA DISINI</h3>
                <div class="search-bar">
				<form action="tracking-result.php" method="post" name="form" id="form" >
                    <div class="form-group mob-track">
                        <div class="input-group">
                            <!--<div class="input-group-addon">MPD</div>-->
                            <input type="text" class="form-control" name="Consignment" id="Consignment" placeholder="Example AWB-472304198">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="Submit" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue"><img src="deprixa/images/Tracking.png" alt="x" />Tracking Paket Saya</button>
                    <div class="wait-message" style="text-align:center; display:none;">
                        <img src="deprixa_components/images/global/loading-green.gif" />
                        Sedang mencari... silahkan tunggu sebentar.
                    </div>
                </div>
				</form>
            </section>
        </div>   

<div class="fw grey-bg">
    <section class="history">
        <div id="TrackingEventsContainer">

        </div>
    </section> 

        <section class="trackorder-boxes">
            <div class="col-sm-6">
                <div class="pod">
                    <div class="media-body">
                        <span class="track-icon-close40 mpdLightBlue"></span>
                        <h3>Paket belum diambil?</h3>
                        <p>Maaf, ini jarang terjadi, kami yakin ada alasan bagusnya. Jika sudah setelah pukul 18.00 pada hari pengambilan yang dipesan, jadwalkan ulang pengambilan di sini.</p>
                        <a href="login.php" class="btn btn-primary">Jadwalkan Kembali Pengambilan</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pod">
                    <div class="media-body">
                        <span class="track-icon-back3 mpdRed"></span>
                        <h3>BUTUH JAWABAN CEPAT?</h3>
                        <p>Jika Anda memiliki pertanyaan sama sekali tentang pengiriman Anda, jangan ragu untuk menghubungi tim layanan pelanggan kami yang berbasis di Inggris. Tapi pertama-tama periksa halaman FAQ kami karena jawaban yang Anda cari mungkin ada di sana.</p>
                        <a href="contact.html" class="btn btn-primary">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </section>
    
</div>
        </main>

    <!-- Footer -->
 <?php include_once "footer.php"; ?>
    <!-- /Footer -->
    </div>

    <script src="deprixa_components/bundles/jquery"></script>
   <script src="deprixa_components/bundles/bootstrap"></script>
    <script src="deprixa_components/bundles/modernizr"></script>
    <script src="deprixa_components/scripts/CookieManager.js"></script>
    <script src="deprixa_components/Scripts/MPD/Common/ga-events.js"></script>   
    <script src="deprixa_components/bundles/jqueryval"></script>
    <script src="deprixa_components/scripts/tracking.js"></script>
    <script src="deprixa_components/scripts/placeholder-shim.js"></script>
    <script src="deprixa_components/scripts/trimFields.js"></script>

</body>
</html>
