
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/travel/css/animate.css')?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/travel/css/icomoon.css')?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/travel/css/bootstrap.css') ?>">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url('assets/travel/css/superfish.css') ?>">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url('assets/travel/css/magnific-popup.css') ?>">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/travel/css/bootstrap-datepicker.min.css') ?>">
	<!-- CS Select -->
	<link rel="stylesheet" href="<?php echo base_url('assets/travel/css/cs-select.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/travel/css/cs-skin-border.css') ?>">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/travel/css/style.css') ?>">

	<link href="<?php echo base_url('_tamplate/plugins/select2/select2.css') ?>" rel="stylesheet" />


	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets/travel/js/modernizr-2.6.2.min.js') ?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style type="text/css">
		th
		{
			color: black;
		}

		td
		{
			color: black;
		}
	</style>

	</head>
	<body style="background-color: #e6eaed">
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="<?php echo base_url('home') ?>"><i class="icon-airplane"></i>KuyMabur</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="<?php echo base_url('') ?>">Home</a></li>
							<li>
								<a href="vacation.html" class="fh5co-sub-ddown">Vacations</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li>
							<li><a href="flight.html">Flights</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="#" data-toggle="modal" data-target="#login">Masuk/Daftar</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<div class="container" style="margin-top:50px">
			<div class="col-md-9">
				<table>
					<div class="col-md-12">
						<thead>
							<th>
								<tr>
									<strong style="font-size: 20px;"> Pembayaran</strong>
								</tr>	
							</th>
						</thead>
					</div>
					<br>
					<br>
				</table>
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong><b>Transfer</b></strong>
					</div>
					<div class="panel-body">
						Silahkan transfer lewat ATM ke nomor rekening berikut:<br><br>
						<strong>BRI : <b style="float: right;"> XXXX - XXXX - XXXX - XXXX</b></strong><br><br>
						<strong>BCA : <b style="float: right;"> XXXX - XXXX - XXXX - XXXX</b></strong><br><br>
						<strong>MANDIRI : <b style="float: right;"> XXXX - XXXX - XXXX - XXXX</b></strong><br><br>
						<strong>BNI : <b style="float: right;"> XXXX - XXXX - XXXX - XXXX</b></strong><br><br><br>

						<p>Sudah melakukan pembayaran?</p>
						<form action="<?php echo base_url('traveler/wait_confirmation') ?>" method="post">
							<input type="file" name="fotoBarangBukti" class="form-control"><br><br>
							<button type="submit" class="btn btn-info">Upload</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						BOOKING ID
					</div>
					<div class="panel-body">
						<b><?php echo $resCode; ?></b>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						PERJALANANMU
					</div>
					<div class="panel-body">
						Terbang
						<br>
						<?php echo $tgl_terbang; ?>
						<br>
						<br>
						<?php
						$hasil= $bayar->result();
						echo $hasil[0]->kota_asal;
						?> (<?php echo $hasil[0]->kode_asal; ?>) <i class="glyphicon glyphicon-arrow-right"></i> <?php echo $hasil[0]->kota_tujuan; ?> (<?php echo $hasil[0]->kode_tujuan; ?>)
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						NAMA PEMESAN
					</div>
					<div class="panel panel-body">
						<?php echo $namapemesan; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="<?php echo base_url('assets/travel/js/jquery.min.js') ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('assets/travel/js/jquery.easing.1.3.js') ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/travel/js/bootstrap.min.js') ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('assets/travel/js/jquery.waypoints.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/travel/js/sticky.js') ?>"></script>

	<!-- Stellar -->
	<script src="<?php echo base_url('assets/travel/js/jquery.stellar.min.js') ?>"></script>
	<!-- Superfish -->
	<script src="<?php echo base_url('assets/travel/js/hoverIntent.js') ?>"></script>
	<script src="<?php echo base_url('assets/travel/js/superfish.js') ?>"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url('assets/travel/js/jquery.magnific-popup.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/travel/js/magnific-popup-options.js') ?>"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url('assets/travel/js/bootstrap-datepicker.min.js') ?>"></script>
	<!-- CS Select -->
	<script src="<?php echo base_url('assets/travel/js/classie.js') ?>"></script>
	<script src="<?php echo base_url('assets/travel/js/selectFx.js') ?>"></script>
	
	<!-- Main JS -->
	<script src="<?php echo base_url('assets/travel/js/main.js') ?>"></script>

	<script src="<?php echo base_url('_tamplate/plugins/select2/select2.js') ?>"></script>

	</body>
</html>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 50px;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo base_url('home/loginProcess'); ?>" method="post">
              <div class="form-group">
                <label for="email" class="form-control-label">Email:</label>
                <input type="email" name="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="password" class="form-control-label">Password:</label>
                <input type="password" name="password" class="form-control" id="password">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <span class="text-left">
              <p class="text-left">Belum punya akun? <a href="<?php echo base_url('home/ndaftar') ?>">Daftar </a></p>
            </span>
          </div>
        </div>
      </div>
  </div>

  <script type="text/javascript">
  	$('#pulange').change(function() 
  	{
	    if ($(this).is(':checked')) 
	    {
	        $('#date-end').prop('disabled', false);
	    } 
	    else 
	    {
	        $('#date-end').prop('disabled', true);
	    }
	});

	$(document).ready(function() {
        $('.rute_from').select2();
        $('.rute_to').select2();
    });
  </script>