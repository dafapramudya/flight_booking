
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
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

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

  </head>
  <body>
    <div id="fh5co-wrapper">
    <div id="fh5co-page">

    <!-- end:header-top -->
  
    <div class="fh5co-hero">
      <div class="fh5co-overlay"></div>
      <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
        <div class="desc">
          <div class="container">
            <div class="row">
              <div class="col-sm-7 col-md-7">
                <div class="tabulation animate-box">

                  <!-- Nav tabs -->
                   <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active">
                        <a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
                      </li>
                      <!-- <li role="presentation">
                         <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a>
                      </li>
                      <li role="presentation">
                         <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Packages</a>
                      </li> -->
                   </ul>

                   <!-- Tab panes -->
                  <div class="tab-content">
                  <form action="<?php echo base_url('user/user/cari_rute') ?>" method="get">
                    <div role="tabpanel" class="tab-pane active" id="flights">
                      <div class="row">
                        <div class="col-xxs-12 col-xs-6 mt">
                          <div class="input-field">
                            <label for="from">Dari:</label>
                            <select name="rute_from" class="cs-skin-border rute_from" tabindex="-1" aria-hidden="true">
                                      <option selected="selected" disabled="true">Pilih Keberangkatan</option>
                                      <?php
                                        foreach ($airport as $bandara) 
                                        {
                                          echo '<option value="'.$bandara->bandara.'">'.$bandara->kota.' ('.$bandara->kode.') - '.$bandara->bandara.'</option>';
                                        }
                                      ?>
                                    </select>
                          </div>
                        </div>
                        <div class="col-xxs-12 col-xs-6 mt">
                          <div class="input-field">
                            <label for="from">Ke:</label>
                            <select name="rute_to" class="cs-skin-border rute_to" tabindex="-1" aria-hidden="true">
                                      <option selected="selected" disabled="true">Pilih Tujuan</option>
                                      <?php
                                        foreach ($airport as $bandara) 
                                        {
                                          echo '<option value="'.$bandara->bandara.'">'.$bandara->kota.' ('.$bandara->kode.') - '.$bandara->bandara.'</option>';
                                        }
                                      ?>
                                    </select>
                          </div>
                        </div>
                        <div class="col-xxs-12 col-xs-6 mt alternate">
                          <div class="input-field">
                            <label for="depart_at">Berangkat:</label>
                            <input type="date" class="form-control" name="depart_at" id="depart_at" />
                          </div>
                        </div>
                        <div class="col-xxs-12 col-xs-6 mt alternate">
                          <div class="input-field">
                            <label for="date-end"><input type="checkbox" id="pulange" value="pulang">Pulang:</label>
                            <input type="date" name="date-end" class="form-control date-end" placeholder="mm/dd/yyyy" disabled="true" />
                          </div>
                        </div>
                        <div class="col-xxs-12 col-xs-4 mt">
                          <section>
                            <label for="class">Dewasa:</label>
                            <input type="number" min="1" value="1" name="adult" class="form-control">
                          </section>
                        </div>
                        <div class="col-xxs-12 col-xs-4 mt">
                          <section>
                            <label for="class">Anak-anak:</label>
                            <input type="number" min="0" value="0" name="child" class="form-control">
                          </section>
                        </div>
                        <div class="col-xxs-12 col-xs-4 mt">
                          <section>
                            <label for="class">Bayi:</label>
                            <input type="number" min="0" value="0" name="infant" class="form-control">
                          </section>
                        </div>
                        <div class="col-xs-12">
                          <input type="submit" class="btn btn-primary btn-block" value="Search Flight">
                        </div>
                      </div>
                     </div>
                  </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    <div id="fh5co-tours" class="fh5co-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
            <h3>Hot Tours</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
            <div href="#"><img src="<?php echo base_url('assets/travel/images/place-1.jpg') ?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
              <div class="desc">
                <span></span>
                <h3>New York</h3>
                <span>3 nights + Flight 5*Hotel</span>
                <span class="price">$1,000</span>
                <a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
            <div href="#"><img src="<?php echo base_url('assets/travel/images/place-2.jpg') ?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
              <div class="desc">
                <span></span>
                <h3>Philippines</h3>
                <span>4 nights + Flight 5*Hotel</span>
                <span class="price">$1,000</span>
                <a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
            <div href="#"><img src="<?php echo base_url('assets/travel/images/place-3.jpg') ?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
              <div class="desc">
                <span></span>
                <h3>Hongkong</h3>
                <span>2 nights + Flight 4*Hotel</span>
                <span class="price">$1,000</span>
                <a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center animate-box">
            <p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Offers <i class="icon-arrow-right22"></i></a></p>
          </div>
        </div>
      </div>
    </div>

    <div id="fh5co-features">
      <div class="container">
        <div class="row">
          <div class="col-md-4 animate-box">

            <div class="feature-left">
              <span class="icon">
                <i class="icon-hotairballoon"></i>
              </span>
              <div class="feature-copy">
                <h3>Family Travel</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>

          </div>

          <div class="col-md-4 animate-box">
            <div class="feature-left">
              <span class="icon">
                <i class="icon-search"></i>
              </span>
              <div class="feature-copy">
                <h3>Travel Plans</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 animate-box">
            <div class="feature-left">
              <span class="icon">
                <i class="icon-wallet"></i>
              </span>
              <div class="feature-copy">
                <h3>Honeymoon</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 animate-box">

            <div class="feature-left">
              <span class="icon">
                <i class="icon-wine"></i>
              </span>
              <div class="feature-copy">
                <h3>Business Travel</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>

          </div>

          <div class="col-md-4 animate-box">
            <div class="feature-left">
              <span class="icon">
                <i class="icon-genius"></i>
              </span>
              <div class="feature-copy">
                <h3>Solo Travel</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>

          </div>
          <div class="col-md-4 animate-box">
            <div class="feature-left">
              <span class="icon">
                <i class="icon-chat"></i>
              </span>
              <div class="feature-copy">
                <h3>Explorer</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div id="fh5co-destination">
      <div class="tour-fluid">
        <div class="row">
          <div class="col-md-12">
            <ul id="fh5co-destination-list" class="animate-box">
              <li class="one-forth text-center" style="background-image: url(images/place-1.jpg); ">
                <a href="#">
                  <div class="case-studies-summary">
                    <h2>Los Angeles</h2>
                  </div>
                </a>
              </li>
              <li class="one-forth text-center" style="background-image: url(images/place-2.jpg); ">
                <a href="#">
                  <div class="case-studies-summary">
                    <h2>Hongkong</h2>
                  </div>
                </a>
              </li>
              <li class="one-forth text-center" style="background-image: url(images/place-3.jpg); ">
                <a href="#">
                  <div class="case-studies-summary">
                    <h2>Italy</h2>
                  </div>
                </a>
              </li>
              <li class="one-forth text-center" style="background-image: url(images/place-4.jpg); ">
                <a href="#">
                  <div class="case-studies-summary">
                    <h2>Philippines</h2>
                  </div>
                </a>
              </li>

              <li class="one-forth text-center" style="background-image: url(images/place-5.jpg); ">
                <a href="#">
                  <div class="case-studies-summary">
                    <h2>Japan</h2>
                  </div>
                </a>
              </li>
              <li class="one-half text-center">
                <div class="title-bg">
                  <div class="case-studies-summary">
                    <h2>Most Popular Destinations</h2>
                    <span><a href="#">View All Destinations</a></span>
                  </div>
                </div>
              </li>
              <li class="one-forth text-center" style="background-image: url(images/place-6.jpg); ">
                <a href="#">
                  <div class="case-studies-summary">
                    <h2>Paris</h2>
                  </div>
                </a>
              </li>
              <li class="one-forth text-center" style="background-image: url(images/place-7.jpg); ">
                <a href="#">
                  <div class="case-studies-summary">
                    <h2>Singapore</h2>
                  </div>
                </a>
              </li>
              <li class="one-forth text-center" style="background-image: url(images/place-8.jpg); ">
                <a href="#">
                  <div class="case-studies-summary">
                    <h2>Madagascar</h2>
                  </div>
                </a>
              </li>
              <li class="one-forth text-center" style="background-image: url(images/place-9.jpg); ">
                <a href="#">
                  <div class="case-studies-summary">
                    <h2>Egypt</h2>
                  </div>
                </a>
              </li>
              <li class="one-forth text-center" style="background-image: url(images/place-10.jpg); ">
                <a href="#">
                  <div class="case-studies-summary">
                    <h2>Indonesia</h2>
                  </div>
                </a>
              </li>
            </ul>   
          </div>
        </div>
      </div>
    </div>

    <div id="fh5co-blog-section" class="fh5co-section-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
            <h3>Recent From Blog</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="fh5co-blog animate-box">
              <a href="#"><img class="img-responsive" src="<?php echo base_url('assets/travel/images/place-1.jpg') ?>" alt=""></a>
              <div class="blog-text">
                <div class="prod-title">
                  <h3><a href="#">30% Discount to Travel All Around the World</a></h3>
                  <span class="posted_by">Sep. 15th</span>
                  <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="#">Learn More...</a></p>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="fh5co-blog animate-box">
              <a href="#"><img class="img-responsive" src="<?php echo base_url('assets/travel/images/place-2.jpg') ?>" alt=""></a>
              <div class="blog-text">
                <div class="prod-title">
                  <h3><a href="#">Planning for Vacation</a></h3>
                  <span class="posted_by">Sep. 15th</span>
                  <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="#">Learn More...</a></p>
                </div>
              </div> 
            </div>
          </div>
          <div class="clearfix visible-sm-block"></div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="fh5co-blog animate-box">
              <a href="#"><img class="img-responsive" src="<?php echo base_url('assets/travel/images/place-3.jpg') ?>" alt=""></a>
              <div class="blog-text">
                <div class="prod-title">
                  <h3><a href="#">Visit Tokyo Japan</a></h3>
                  <span class="posted_by">Sep. 15th</span>
                  <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p><a href="#">Learn More...</a></p>
                </div>
              </div> 
            </div>
          </div>
          <div class="clearfix visible-md-block"></div>
        </div>

        <div class="col-md-12 text-center animate-box">
          <p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Post <i class="icon-arrow-right22"></i></a></p>
        </div>

      </div>
    </div>
    <!-- fh5co-blog-section -->
    <div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
          <h2>Happy Clients</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box-testimony animate-box">
            <blockquote>
              <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
              <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
            </blockquote>
            <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
          </div>
          
        </div>
        <div class="col-md-4">
          <div class="box-testimony animate-box">
            <blockquote>
              <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
              <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
            </blockquote>
            <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
          </div>
          
          
        </div>
        <div class="col-md-4">
          <div class="box-testimony animate-box">
            <blockquote>
              <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
              <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
            </blockquote>
            <p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
          </div>
          
        </div>
      </div>
    </div>
  </div>
    <footer>
      <div id="footer">
        <div class="container">
          <div class="row row-bottom-padded-md">
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
              <h3>About Travel</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
              <h3>Top Flights Routes</h3>
              <ul>
                <li><a href="#">Manila flights</a></li>
                <li><a href="#">Dubai flights</a></li>
                <li><a href="#">Bangkok flights</a></li>
                <li><a href="#">Tokyo Flight</a></li>
                <li><a href="#">New York Flights</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
              <h3>Top Hotels</h3>
              <ul>
                <li><a href="#">Boracay Hotel</a></li>
                <li><a href="#">Dubai Hotel</a></li>
                <li><a href="#">Singapore Hotel</a></li>
                <li><a href="#">Manila Hotel</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
              <h3>Interest</h3>
              <ul>
                <li><a href="#">Beaches</a></li>
                <li><a href="#">Family Travel</a></li>
                <li><a href="#">Budget Travel</a></li>
                <li><a href="#">Food &amp; Drink</a></li>
                <li><a href="#">Honeymoon and Romance</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
              <h3>Best Places</h3>
              <ul>
                <li><a href="#">Boracay Beach</a></li>
                <li><a href="#">Dubai</a></li>
                <li><a href="#">Singapore</a></li>
                <li><a href="#">Hongkong</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
              <h3>Affordable</h3>
              <ul>
                <li><a href="#">Food &amp; Drink</a></li>
                <li><a href="#">Fare Flights</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <p class="fh5co-social-icons">
                <a href="#"><i class="icon-twitter2"></i></a>
                <a href="#"><i class="icon-facebook2"></i></a>
                <a href="#"><i class="icon-instagram"></i></a>
                <a href="#"><i class="icon-dribbble2"></i></a>
                <a href="#"><i class="icon-youtube"></i></a>
              </p>
              <p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  

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
          $('.date-end').prop('disabled', false);
      } 
      else 
      {
          $('.date-end').prop('disabled', true);
      }
  });

  $(document).ready(function() {
        $('.rute_from').select2();
        $('.rute_to').select2();
    });

    document.getElementById('depart_at').valueAsDate = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
  </script>