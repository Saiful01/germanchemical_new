<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>German Chemical LTD @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="/img/logo.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/css/style.css" rel="stylesheet">

    <style>
        #main{
            padding-top: 95px;
        }
        #header {
            /*background: rgba(111, 107, 107, 0.9);*/
            background: #fff;
        }

        .nav-menu a {
            color: black;
        }
    </style>

    <!-- =======================================================
              Pixonlab
            web:     pixonlab.com
            Address: Concord Regency
                    19/1Panthapath, Dhaka 1205
            Phone: 01717849968

    ======================================================= -->
</head>

<body>

<!--==========================
  Header
============================-->

<header id="header">

    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <!-- <h1><a href="#intro" class="scrollto"></a></h1>-->
            <a href="/"><img src="/img/logo.png" alt="" title=""/></a>
        </div>

        @include('includes.navbar')
    </div>
</header><!-- #header -->

<main id="main">


    @yield('content')

</main>

<footer id="footer" >
    <!-- <div class="footer-top">
         <div class="container">
             <div class="row">

                 <div class="col-lg-3 col-md-6 footer-info">
                     <h3>BizPage</h3>
                     <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                         valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet
                         proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-links">
                     <h4>Useful Links</h4>
                     <ul>
                         <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                         <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                         <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                         <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                         <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-contact">
                     <h4>Contact Us</h4>
                     <p>
                         A108 Adam Street <br>
                         New York, NY 535022<br>
                         United States <br>
                         <strong>Phone:</strong> +1 5589 55488 55<br>
                         <strong>Email:</strong> info@example.com<br>
                     </p>

                     <div class="social-links">
                         <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                         <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                         <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                         <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                         <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                     </div>

                 </div>

                 <div class="col-lg-3 col-md-6 footer-newsletter">
                     <h4>Our Newsletter</h4>
                     <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam
                         illum
                         dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase
                         seza.</p>
                     <form action="" method="post">
                         <input type="email" name="email"><input type="submit" value="Subscribe">
                     </form>
                 </div>

             </div>
         </div>
     </div>
-->
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>German Chemical Limited</strong>
        </div>
        <div class="credits">
            Developed by <a href="https://pixonlab.com/">PixonLab</a>
        </div>
    </div>

</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="/lib/jquery/jquery.min.js"></script>
<script src="/lib/jquery/jquery-migrate.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/superfish/hoverIntent.js"></script>
<script src="/lib/superfish/superfish.min.js"></script>
<script src="/lib/wow/wow.min.js"></script>
<script src="/lib/waypoints/waypoints.min.js"></script>
<script src="/lib/counterup/counterup.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/lib/isotope/isotope.pkgd.min.js"></script>
<script src="/lib/lightbox/js/lightbox.min.js"></script>
<script src="/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->

<!-- Template Main Javascript File -->
<script src="/js/main.js"></script>

</body>
</html>
