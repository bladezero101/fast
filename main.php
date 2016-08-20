<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/linea-icon.css" />
<link rel="stylesheet" href="css/fancy-buttons.css" />

<!--=== Google Fonts ===-->
<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:600,400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--=== Other CSS files ===-->
<link rel="stylesheet" href="css/animate.css" />
<link rel="stylesheet" href="css/jquery.vegas.css" />
<link rel="stylesheet" href="css/baraja.css" />
<link rel="stylesheet" href="css/jquery.bxslider.css" />

<!--=== Main Stylesheets ===-->
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/responsive.css" />

<!--=== Color Scheme Stylesheets ===-->

<link rel="stylesheet" href="css/schemes/red.css" disabled />
<link rel="stylesheet" href="css/schemes/orange.css" disabled />
<link rel="stylesheet" id="scheme-source" href="css/schemes/gray.css" />


<link rel="stylesheet" href="css/color-switcher.css" />

<!--=== Internet explorer 8 fix ===-->
<!-- [if lt IE 9]>
        <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif] -->


<!--=== Preloader section starts ===-->
<section id="preloader">
    <div class="loading-circle fa-spin"></div>
</section>
<!--=== Preloader section Ends ===-->

<!--=== Header section Starts ===-->
<div id="header" class="header-section">
    <!-- sticky-bar Starts-->
    <div class="sticky-bar-wrap">
        <div class="sticky-section">
            <div id="topbar-hold" class="nav-hold container">
                <nav class="navbar" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!--=== Site Name ===-->
                        <!--<a class="site-name navbar-brand" href="#"><span>E</span>gret</a>-->
                    </div>

                    <!-- Main Navigation menu Starts -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="current"><a href="#header">Home</a></li>
                            <li><a href="#section-about">About Us</a></li>
                            <li><a href="#section-service">Services</a></li>
                            <li><a href="#section-past">Past & Experience</a></li>
                            <li><a href="#section-contact">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- Main Navigation menu ends-->
                </nav>
            </div>
        </div>
    </div>
    <!-- sticky-bar Ends-->
    <!--=== Header section Ends ===-->
</div>

<!--=== Home Section Starts ===-->
<?php include 'home.php'; ?>
<!--=== Home Section Ends ===-->

<!--=== Section about us ===-->
<?php include 'about.php'; ?>
<!--=== Section about us ===-->

<!--=== Section service ===-->
<?php include 'service.php'; ?>
<!--=== Section service ===-->

<!--=== Section past ===-->
<?php include 'past.php'; ?>
<!--=== Section past ===-->

<!--=== Section past ===-->
<?php include 'contact.php'; ?>
<!--=== Section past ===-->

<!--==== Js files ====-->
<!--==== Essential files ====-->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!--==== Slider and Card style plugin ====-->
<script type="text/javascript" src="js/jquery.baraja.js"></script>
<script type="text/javascript" src="js/jquery.vegas.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>

<!--==== MailChimp Widget plugin ====-->
<script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>

<!--==== Scroll and navigation plugins ====-->
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>

<!--==== Custom Script files ====-->
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="js/color-switcher.js"></script>
<script>
    $(window).load(function () {
        'use strict';
        $('.fb-popup').delay(40000).fadeIn();
        $('.fb-close').click(function () {
            $('.fb-popup').fadeOut();
        })
    });
</script>