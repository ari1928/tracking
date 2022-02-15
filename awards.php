<!DOCTYPE html>

<html>


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>PT. Citra Mandiri Trans</title>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="deprixa_components/css/bootstrap-mpd.css" />
	<link rel="stylesheet" href="deprixa_components/css/global.css" />
	<link rel="stylesheet" href="deprixa_components/css/awards.css" />
	<script src="deprixa_components/js/jquery.min.js"></script>
	<script src="deprixa_components/scripts/bootstrap.min.js"></script>
	<script src="deprixa_components/scripts/jquery-validate.min.js"></script>
	<script src="deprixa_components/scripts/jquery-validate-unobtrusive.min.js"></script>
	<script src="deprixa_components/scripts/modernizr-2.6.2.js"></script>
	<script src="deprixa_components/scripts/html5shiv.js"></script>  
    <link href="deprixa_components/content/csse1bf.css" rel="stylesheet"/>
	
	<link rel="icon" type="image/png" href="../favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../favicon-16x16.png" sizes="16x16" />	

</head>
   <!-- Menu -->
<?php include_once "menu.php"; ?>
    <!-- /Menu -->

<main class="slide">

<div class="fw grey-bg">
<section class="awards"><header>
<h1>Penghargaan</h1>
<p><b>robialakbar Kuris & Logistik<b/> sejak berdirinya sudah menerima berbagai macam penghargaan baik itu tingkat local, Nasional maupun Internasional, itu semua merupakan bukti dari komitmen kami dalam memberikan pelayanan maksimal kepada para costumer kami tercinta</p>
</header>
<div class="container js-masonry">
<div class="item"><img alt="Innovation, Excellence in Services 2016" src="deprixa_components/images/award1.jpg" />
<h2>Innovation &amp; Excellence 2021</h2>
<p>Kami mendapatkan Pernghargaan Best Innovation dari Local Bisnis Forum for teknologi di Kepulauan Bangka Belitung.</p>
</div>
<div class="item"><img alt="BUSINESS OF THE YEAR AWARD 2016" src="deprixa_components/images/award2.jpg" />
<h2>BUSINESS OF THE YEAR AWARD 2021</h2>
<p>Kami juga mendapatkan pernghargaan dalam kategory Bisnis Of The year karena inovasi kami bagi pertumbuhan ekonomi dan bisnis di daerah.</p>
</div>
<div class="item"><img alt="Entrepreneur Award 2016" src="deprixa_components/images/award3.jpg" />
<h2>Entrepreneur Award 2016</h2>
<p>Dan juga kami telah menerima beberapa penghargaan sebagai enterpreneur Ward 2016 sebagai Enterprenuer terbaik dalam memperkuat ekonomi Local dan Nasional.</p>
</div>
</div>
</section>
</div>

</main>

    <!-- Footer -->
<?php include_once "footer.php"; ?>
    <!-- /Footer -->
	</div>

	<script src="deprixa_components/scripts/Awards/imagesLoaded.js"></script>
    <script src="deprixa_components/scripts/Awards/pkgd.min.js"></script>	
	<script>
	// options
	$(document).ready(function(){
		var $container = $('.container');
			$container.imagesLoaded( function(){
			  $container.masonry({
				gutter: 25,
				itemSelector : '.item'
			});
		});
	});
</script>

</body>

</html>