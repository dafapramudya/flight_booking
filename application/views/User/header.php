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
							<li class="dropdown">
			                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->session->userdata('fullname'); ?></a>
				                  <ul class="dropdown-menu" role="menu">
				                     <li><a href="#">My Profile</a></li>
				                     <li><a href="#">Another action</a></li>
				                     <li><a href="#">Something else here</a></li>
				                     <li class="divider"></li>
				                     <li><a href="<?php echo base_url('user/user/logout') ?>">Logout</a></li>
				                  </ul>
			              	</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>