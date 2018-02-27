
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

	<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	</head>
	<body style="background-color: #e6eaed">
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<!-- end:header-top -->

		<?php $this->load->view('user/header'); ?>
	
		<div class="container" style="height: 100%;">
			<div class="row">
				<div class="panel panel-default" style="margin-top: 30px;">
					<div class="panel-heading">
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
							<br>
							<thead>
								<?php
								$hasil= $rute->result();
								?>
								<tr><span style="color: #369ef7; margin-left: 19px;"><?php echo $hasil[0]->asal ?> (<?php echo $hasil[0]->kode_asal ?>) <i class="glyphicon glyphicon-arrow-right"></i> <?php echo $hasil[0]->tujuan ?> (<?php echo $hasil[0]->kode_tujuan ?>)</span></tr>
							</thead>
						</table>
						<br>
					</div>
				</div>
				<form action="<?php echo base_url('user/user/pesan') ?>" method="post">
					<table>
						<div class="col-md-12">
							<thead>
								<th>
									<tr>
										<strong style="font-size: 20px;">Data Pemesan</strong>
									</tr>	
								</th>
							</thead>
						</div>
						<br>
						<br>
					</table>
					<div class="panel panel-default">
					  <div class="panel-heading"><p style="color: black; font-size: 17px; margin: 20px">Data Pemesan<p></div>
					  <div class="panel-body">
					  	<div class="col-md-12">
							<div style="width: 100%">
								<?php foreach ($reserve as $res) { ?>
								<input type="hidden" class="form-control" value="<?php echo $res->id ?>" name="rute_id">
								<input type="hidden" class="form-control" value="<?php echo $res->depart_at ?>" name="depart_at">
								<input type="hidden" class="form-control" value="<?php echo $res->price ?>" name="price">
								<?php } ?>
								<label for="fullname">Nama Lengkap</label>
								<input type="text" name="fullname" value="<?php echo $this->session->userdata('fullname') ?>" class="form-control">
							</div>
							<div class="col-md-12" style="padding: 0; margin: 0;">
								<label for="nohp">No. Handphone</label>
								<input type="tell" value="<?php echo $this->session->userdata('phone'); ?>" name="nohp" class="form-control" placeholder="Contoh: +6282211245610">
							</div>
							<div class="col-md-12" style="padding: 0; margin: 0;">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Contoh: someone@someone.com" value="<?php echo $this->session->userdata('email'); ?>">
							</div>
							<div class="col-md-12" style="padding: 0; margin: 0;">
								<label for="alamat">Alamat</label>
								<input type="hidden" name="qty" value="<?php echo $this->uri->segment(4)?>">
								<input type="text" name="alamat" class="form-control">
							</div>
							<div class="col-md-12">
								<br>
							</div>
						</div>
					  </div>
					</div>
					
					<table>
						<div class="col-md-12">
							<thead>
								<th>
									<tr>
										<strong style="font-size: 20px;">Detail Wisatawan</strong>
									</tr>	
								</th>
							</thead>
						</div>
						<br>
						<br>
					</table>
					<?php for ($jml=1; $jml <= $adult; $jml++) { ?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<p style=" font-size: 17px; margin: 20px"><b>Dewasa <?php echo $jml; ?></b><p>
						</div>
						<div class="panel-body">
							<div class="col-md-12" style="padding-top: 20px; height: 230px;">
								<div style="width: 100%">
									<label for="titel">Titel</label>
									<select name="titel" class="form-control">
										<option value="Tuan">Tuan</option>
										<option value="Nyonya">Nyonya</option>
										<option value="Nona">Nona</option>
									</select>
								</div>
								<br>
								<div class="col-md-12" style="padding: 0; margin: 0;">
									<label for="namalengkap">Nama Lengkap</label>
									<input type="text" name="namalengkap" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<?php } ?>


					<?php
					if ($child == 0) {
						//No Create
					}
					else
					{
						for ($jml=1; $jml <= $child; $jml++) { ?>	
						<div class="panel panel-default">
							<div class="panel-heading">
								<p style="font-size: 17px; margin: 20px"><b>Anak <?php echo $jml; ?></b><p>
							</div>
							<div class="panel-body">
								<div class="col-md-12" style="padding-top: 20px; height: 230px;">
								<div style="width: 100%">
									<label for="titel">Titel</label>
									<select name="titel" class="form-control">
										<option value="Laki-Laki">Tuan</option>
										<option value="Perempuan">Nona</option>
									</select>
								</div>
								<br>
								<div class="col-md-12" style="padding: 0; margin: 0;">
									<label for="namaanak">Nama Lengkap</label>
									<input type="text" name="namaanak" class="form-control">
								</div>
							</div>
							</div>
						</div>
						<?php } ?>
					<?php } ?>

					<?php
					if ($infant == 0) 
					{
						//No Create
					}
					else
					{
						for ($jml=1; $jml <= $infant; $jml++) { ?>
					
						<div class="panel panel-default">
							<div class="panel-heading">
								<p style="font-size: 17px; margin: 20px"><b>Bayi <?php echo $jml; ?></b><p>
							</div>
							<div class="panel-body">
								<div class="col-md-12" style="padding-top: 20px; height: 230px;">
									<div style="width: 100%">
										<label for="titel">Titel</label>
										<select name="titel" class="form-control">
											<option value="Tuan">Tuan</option>
											<option value="Nona">Nona</option>
										</select>
									</div>
									<br>
									<div class="col-md-12" style="padding: 0; margin: 0;">
										<label for="namabayi">Nama Lengkap</label>
										<input type="text" name="namabayi" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
					<?php } ?>
					
					<table>
						<div class="col-md-12">
							<thead>
								<th>
									<tr>
										<strong style="font-size: 20px;">Fasilitas Penerbangan</strong>
									</tr>	
								</th>
							</thead>
						</div>
						<br>
						<br>
					</table>
					
					<div class="panel panel-default">
					  <div class="panel-heading"><p style=" font-size: 17px; margin: 10px"><b>Bagasi</b></p></div>
					  <div class="panel-body">
					  	<?php for ($jml=1; $jml <= $adult; $jml++) { ?>
							<p style=" font-size: 17px; margin: 20px"><b>Bagasi Dewasa <?php echo $jml; ?></b><select name="bagAdult" class="form-control" style="width: 20%">
								<option>20 Kg - Rp. 0</option>
							</select></p>

							<?php } ?>
							<?php
							if ($child == 0) 
							{
								//No Create
							}
							else
							{
								for ($jml=1; $jml <= $child; $jml++) { ?>
								<p style=" font-size: 17px; margin: 20px"><b>Bagasi Anak <?php echo $jml; ?></b><select name="bagChild" class="form-control" style="width: 20%">
									<option>20 Kg - Rp. 0</option>
								</select></p>
								<?php } ?>
							<?php } ?>
							<?php
							if ($infant == 0) 
							{
								//No Create
							}
							else
							{
								for ($jml=1; $jml <= $infant; $jml++) { ?>
								<p style=" font-size: 17px; margin: 20px"><b>Bagasi Bayi <?php echo $jml; ?></b><select name="bagInfant" class="form-control" style="width: 20%">
									<option>20 Kg - Rp. 0</option>
								</select></p>
								<?php } ?>
							<?php } ?>
					  </div>
					</div>



					<div class="panel panel-default" id="kursi">
					  <div class="panel-heading">
					  	<p style=" font-size: 17px; margin: 10px;"><b>Tempat Duduk</b><a href="#kursi" onclick="showPlane()" style="float: right;">PILIH KURSI</a></p>
					  </div>
					  <div class="panel-body">
					  	<p>Pilih lokasi kursi anda di pesawat.</p>
					  </div>
					  <div class="panel panel-body kursi">
					  	<?php 
						foreach ($seat as $s) {
							for ($i=1; $i <= $s->seat_qty; $i++) { ?>
							<div class="col-md-2">
								<input type="checkbox" class="form-control" name="seat[]" value="<?php echo $i; ?>" <?php foreach($filter as $f) { if($i == $f->seat_code){ echo " disabled"; } } ?>><?php echo $i; ?>
							</div>
							<?php
							} 
						}
						?>

					  </div>
					</div>

					<table>
						<div class="col-md-12">
							<thead>
								<th>
									<tr>
										<strong style="font-size: 20px;">Rincian Harga</strong>
									</tr>	
								</th>
							</thead>
						</div>
						<br>
						<br>
					</table>
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong><b>Total harga yang harus dibayar</b></strong>
							<strong style="float: right;"><b>Rp. <?php echo number_format($price * ($adult+$child+($infant * 10 / 100)), 0, ",", ".");?></b></strong>
						</div>
						<div class="panel-body">
							<strong><?php foreach ($pesawat->result() as $key) {
								echo $key->pesawat;?> (Dewasa) x<?php echo $adult?>
							<?php } ?></strong>
							<strong style="float: right;"><b>Rp. <?php echo number_format($price * ($adult), 0, ",", ".");?></b></strong>
							<br>
							<?php if ($child == 0) 
							{
								//Nothing we can to do
							}
							else
							{ ?>
								<strong><?php foreach ($pesawat->result() as $key) {
								echo $key->pesawat;?> (Anak) x<?php echo $child?>
								<?php } ?></strong>
								<strong style="float: right;"><b>Rp. <?php echo number_format($price * ($child), 0, ",", ".");?></b></strong>
								<br>
							<?php } ?>
							
							<?php if ($infant == 0) 
							{
								//Nothing....
							}
							else
							{?>
								<strong><?php foreach ($pesawat->result() as $key) {
								echo $key->pesawat;?> (Bayi) x<?php echo $infant; ?></strong>
								<strong style="float: right;"><b>Rp. <?php echo number_format($price * ($infant) * 10 / 100, 0, ",", ".");?></b></strong>
								<br>
							<?php } ?>
							<?php } ?> 
						</div>
					</div>
					
					<br>
					<button type="submit" class="btn btn-info" style="float: right;">Lanjutkan ke Pembayaran</button>

					<br>
					<br>
					<br>
					<br>
					<br>
				</form>	
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

	$(document).ready(function() {
        $('.kursi').hide();
    });

    function showPlane()
    {
    	$('.kursi').show();
    }
  </script>
  <?php foreach($tseat as $totKrsi) {?>
  <script type="text/javascript">
  	$(document).ready(function() {
        $("input[name='seat[]']").change(function(){
        	var maxSelect = <?php echo ($adult+$child+$infant);	 ?><?php } ?>;
        	var cnt = $("input[name='seat[]']:checked").length;
        	if (cnt > maxSelect) 
        	{
        		$(this).prop("checked", false);
        		alert("Tidak bisa memilih lebih dari " +maxSelect+ " kursi!");
        	}
        })
    });
  </script>