<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Provedanta Services') }} |@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Font-flat CSS-->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div class="wraper">
            <header>           
                    <div class="header1-area header-two">
                        <div class="header-top-area" id="sticker">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="logo-area">
                                            <a href="index"><img class="img-responsive" src="img/logo2.png" alt="logo"></a>
                                        </div>
                                    </div>
                                    @include('layouts.menu')
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- mobile-menu-area start -->
                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li ><a href="index">Home</a>
                                                <li><a href="about">About Us</a></li>
        
                                                <li><a href="#">Services</a>
                                                    <ul class="mega-menu-area">
                                                    <li><a href="#">Logo Design</a></li>
                                                            <li><a href="#">Web Design</a></li>
                                                            <li><a href="#">Digital Marketing</a></li>
                                                            <li><a href="#">Ecommerce Developement</a></li>
                                                            <li><a href="#">Custom web Application</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pricing</a></li>
                                                <li><a href="#">Portfolio</a></li>
                                                <li><a href="contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- mobile-menu-area end -->
                </header>
                <!-- Header Area End Here -->
        
        @yield('content')
       
      

    <!-- Footer section Start Here -->
    <div class="footer-section-area padding-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="title">
                        <h3>Information</h3>
                    </div>
                    <div class="information">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Plans & Pricing</a></li>
                            <li><a href="#">Company & Contact Info</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="title">
                        <h3>Our Services</h3>
                    </div>
                    <div class="our-service">
                        <ul>
                            <li><a href="#">Logo Design</a></li>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Ecommerce Developement</a></li>
                            <li><a href="#">Custom web Application</a></li>
                            <li><a href="#">Web Analyticsment</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="title">
                        <h3>Popular Posts</h3>
                    </div>
                    <div class="popular-post">
                        <ul>
                            <li>
                                <span class="post-date">26 September, 2016</span>
                                <a href="#">Optimizing your Website for Mobile Searchwhen an unkn.</a>
                            </li>
                            <li>
                                <span class="post-date">25 September, 2016</span>
                                <a href="#">Optimizing your Website for Mobile Searchwhen an unkn.</a>
                            </li>
                            <li>
                                <span class="post-date">24 September, 2016</span>
                                <a href="#">Optimizing your Website for Mobile Searchwhen an unkn.</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="title">
                        <h3>Get A Quote</h3>
                    </div>
                    <div class="get-quote">
                        <form id="getQuoteForm" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input id="quote-name" name="name" placeholder="Name*" class="form-control" type="text" data-error="Name field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input id="quote-email" name="email" placeholder="E-mail*" class="form-control" type="text" data-error="E-mail field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="textarea form-control" rows="4" id="textarea" name="message" placeholder="Message*" data-error="Message field is required" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group send-button">
                                    <button type="submit" class="ghost-btn btn-send">Submit</button>
                                </div>
                                <div class="form-response"></div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer section End Here -->
    <!-- Copyright section Start Here -->
    <div class="copy-right-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="copy-right">
                        <p>© Copyrights ProvedantaServices 2016. All rights reserved. Designed by <a href="http://domainindia.com">Domain India</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="social-media">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright section End Here -->

</div>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->

@stack('scripts')
<!-- jquery-->
<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
<!-- Plugins js -->
<script src="js/plugins.js" type="text/javascript"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- Meanmenu Js -->
<script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
<!-- Counter Js -->
<script src="js/jquery.counterup.min.js" type="text/javascript"></script>
<script src="js/waypoints.min.js" type="text/javascript"></script>
<!-- WOW JS -->
<script src="js/wow.min.js"></script>
<!-- Nivo slider js -->
<script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="vendor/slider/home.js" type="text/javascript"></script>
<!-- Owl Cauosel JS -->
<script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
<!-- Validator js -->
<script src="js/validator.min.js" type="text/javascript"></script>
<!-- Srollup js -->
<script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>
<!-- Custom Js -->
<script src="js/main.js" type="text/javascript"></script>

</body>

</html>
