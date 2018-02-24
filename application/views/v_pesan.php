
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
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>Travel</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.html">Home</a></li>
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
							<li><a href="hotel.html">Hotel</a></li>
							<li><a href="car.html">Car</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="#" data-toggle="modal" data-target="#login">Masuk/Daftar</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
				<div class="desc" style="top: 150px">
					<div class="container">
						<div class="row">
							<div class="panel panel-default" >
								<table>
									<thead>
										<?php
										$hasil= $rute->result();
										?>
										<tr><big style="font-size: 30px; color: #369ef7; margin-left: 20px;">Penerbangan dari <?php echo $hasil[0]->kota_asal ?> ke <?php echo $hasil[0]->kota_tujuan ?></big></tr>
									</thead>
									<br>
									<thead>
										<?php
										$hasil= $rute->result();
										?>
										<tr><big style="color: #369ef7; margin-left: 20px;"><?php echo $hasil[0]->tanggal ?></big></tr>
									</thead>
									<br>
									<thead>
										<?php
										$hasil= $rute->result();
										?>
										<tr><i class="glyphicon glyphicon-arrow-right"></i><span style="color: #369ef7; margin-left: 5px;"><?php echo $hasil[0]->asal ?> (<?php echo $hasil[0]->kode_asal ?>) <i class="glyphicon glyphicon-arrow-right"></i> <?php echo $hasil[0]->tujuan ?> (<?php echo $hasil[0]->kode_tujuan ?>)</span></tr>
									</thead>
								</table>
								<br>
								<table>
									<div class="col-md-12">
										<thead>
											<th>
												<tr>
													<strong class="text-white" style="font-size: 20px">Data Pemesan</strong>
												</tr>	
											</th>
										</thead>
									</div>
									<br>
									<br>
								</table>
								<div class="panel panel-default">
									<table>
										<thead><th class="col-md-7"><tr><img src="<?php echo base_url('assets/img/login.png') ?>" style="width: 100px; height: 100px; margin: 20px;"></tr></th></thead>
										<thead>
											<th>
												<tr><span style="color: black">Masuk / Daftar dan nikmati fitur khusus untuk member KuyTravel</span></tr>
											</th>

										</thead>
										<thead>
											<th>
												<tr><a href="#" class="btn btn-info" data-toggle="modal" data-target="#login" style="float: right; margin: 50px;">LOGIN</a></tr>
											</th>
										</thead>
									</table>
								</div>
								<div class="panel panel-default">
									<p style="color: black; font-size: 17px; margin: 20px">Data Pemesan<p>
									
									<label for="fullname" style="color: black; margin: 20px">Nama Lengkap</label>
									<input type="text" name="fullname" class="form-control" style=" padding: 20px">
								</div>
							</div>
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