
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

    <!-- end:header-top -->
  
    <div class="fh5co-hero">
      <div class="fh5co-overlay"></div>
      <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
        <div class="desc">
          <div class="container">
            <div class="row">
              <div class="col-sm-5 col-md-5">
                <div class="tabulation animate-box">

                  <!-- Nav tabs -->
                   <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active">
                        <a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
                      </li>
                      <li role="presentation">
                         <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a>
                      </li>
                      <li role="presentation">
                         <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Packages</a>
                      </li>
                   </ul>

                   <!-- Tab panes -->
                  <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="flights">
                    <div class="row">
                      <div class="col-xxs-12 col-xs-6 mt">
                        <div class="input-field">
                          <label for="from">Dari:</label>
                          <select class="cs-select cs-skin-border" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" disabled="true">Pilih Keberangkatan</option>
                                    <?php $from = $this->my_model->select_from() ?>
                                    <?php foreach ($from->result() as $fr) 
                                    {?>
                                      <option value="<?php echo $fr->rute_from ?>"><?php echo $fr->rute_from ?></option>
                                    <?php } ?>
                                  </select>
                        </div>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt">
                        <div class="input-field">
                          <label for="from">Ke:</label>
                          <select class="cs-select cs-skin-border" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" disabled="true">Pilih Keberangkatan</option>
                                    <?php $from = $this->my_model->select_to() ?>
                                    <?php foreach ($from->result() as $fr) 
                                    {?>
                                      <option value="<?php echo $fr->rute_to ?>"><?php echo $fr->rute_to ?></option>
                                    <?php } ?>
                                  </select>
                        </div>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt alternate">
                        <div class="input-field">
                          <label for="date-start">Check In:</label>
                          <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                        </div>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt alternate">
                        <div class="input-field">
                          <label for="date-end">Check Out:</label>
                          <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                        </div>
                      </div>
                      <div class="col-sm-12 mt">
                        <section>
                          <label for="class">Class:</label>
                          <select class="cs-select cs-skin-border">
                            <option value="" disabled selected>Economy</option>
                            <option value="economy">Economy</option>
                            <option value="first">First</option>
                            <option value="business">Business</option>
                          </select>
                        </section>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt">
                        <section>
                          <label for="class">Adult:</label>
                          <select class="cs-select cs-skin-border">
                            <option value="" disabled selected>1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </section>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt">
                        <section>
                          <label for="class">Children:</label>
                          <select class="cs-select cs-skin-border">
                            <option value="" disabled selected>1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </section>
                      </div>
                      <div class="col-xs-12">
                        <input type="submit" class="btn btn-primary btn-block" value="Search Flight">
                      </div>
                    </div>
                   </div>

                   <div role="tabpanel" class="tab-pane" id="hotels">
                    <div class="row">
                      <div class="col-xxs-12 col-xs-12 mt">
                        <div class="input-field">
                          <label for="from">City:</label>
                          <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                        </div>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt alternate">
                        <div class="input-field">
                          <label for="date-start">Return:</label>
                          <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                        </div>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt alternate">
                        <div class="input-field">
                          <label for="date-end">Check Out:</label>
                          <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                        </div>
                      </div>
                      <div class="col-sm-12 mt">
                        <section>
                          <label for="class">Rooms:</label>
                          <select class="cs-select cs-skin-border">
                            <option value="" disabled selected>1</option>
                            <option value="economy">1</option>
                            <option value="first">2</option>
                            <option value="business">3</option>
                          </select>
                        </section>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt">
                        <section>
                          <label for="class">Adult:</label>
                          <select class="cs-select cs-skin-border">
                            <option value="" disabled selected>1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </section>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt">
                        <section>
                          <label for="class">Children:</label>
                          <select class="cs-select cs-skin-border">
                            <option value="" disabled selected>1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </section>
                      </div>
                      <div class="col-xs-12">
                        <input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
                      </div>
                    </div>
                   </div>

                   <div role="tabpanel" class="tab-pane" id="packages">
                    <div class="row">
                      <div class="col-xxs-12 col-xs-6 mt">
                        <div class="input-field">
                          <label for="from">City:</label>
                          <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                        </div>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt">
                        <div class="input-field">
                          <label for="from">Destination:</label>
                          <input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
                        </div>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt alternate">
                        <div class="input-field">
                          <label for="date-start">Departs:</label>
                          <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                        </div>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt alternate">
                        <div class="input-field">
                          <label for="date-end">Return:</label>
                          <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                        </div>
                      </div>
                      <div class="col-sm-12 mt">
                        <section>
                          <label for="class">Rooms:</label>
                          <select class="cs-select cs-skin-border">
                            <option value="" disabled selected>1</option>
                            <option value="economy">1</option>
                            <option value="first">2</option>
                            <option value="business">3</option>
                          </select>
                        </section>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt">
                        <section>
                          <label for="class">Adult:</label>
                          <select class="cs-select cs-skin-border">
                            <option value="" disabled selected>1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </section>
                      </div>
                      <div class="col-xxs-12 col-xs-6 mt">
                        <section>
                          <label for="class">Children:</label>
                          <select class="cs-select cs-skin-border">
                            <option value="" disabled selected>1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </section>
                      </div>
                      <div class="col-xs-12">
                        <input type="submit" class="btn btn-primary btn-block" value="Search Packages">
                      </div>
                    </div>
                   </div>
                  </div>

                </div>
              </div>
              <div class="desc2 animate-box">
                <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
                  <p>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></p>
                  <h2>Exclusive Limited Time Offer</h2>
                  <h3>Fly to Hong Kong via Los Angeles, USA</h3>
                  <span class="price">$599</span>
                  <!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
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

  </body>
</html>