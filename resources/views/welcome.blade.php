<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>German Chemical LTD.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="/img/logo.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

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
            <a href="#intro"><img src="img/logo.png" alt="" title=""/></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Home</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="/" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Company <i class="icofont-rounded-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/companyintro">Company Introduction</a></li>
                        <li><a class="dropdown-item" href="/MFChairman">Message From Chairman</a></li>
                        <li><a class="dropdown-item" href="/prd">RRD</a></li>
                        <li><a class="dropdown-item" href="/pr">PR</a></li>
                    </ul>
                </li>

                <li><a href="/media">Media</a></li>
                <li><a href="/products">Product</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-mob" href="/career" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Career <i class="icofont-rounded-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/desired">Desired Qualities of Employee Grid</a>
                        </li>
                        <li><a class="dropdown-item" href="/hr">HR Policy</a></li>
                        <li><a class="dropdown-item" href="/recruitment">Recruitment</a></li>
                        <li><a class="dropdown-item" href="/information">Information</a></li>
                        <li><a class="dropdown-item" href="/apply">Apply</a></li>
                    </ul>
                </li>

                <li><a href="/contact">Contact</a></li>
                <li><a href="https://germanchemicalsltd.com:2096">Webmail</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                @if(count($sliders)>1)
                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="/images/slider/{{$sliders[0]->slider_image}}" alt="">
                        </div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>{{$sliders[0]->slider_title}}</h2>
                                <p>{{$sliders[0]->slider_sub_title}}</p>

                            </div>
                        </div>
                    </div>
                @endif

                @for($i=count($sliders)-1;$i>=0;$i--)
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="/images/slider/{{$sliders[$i]->slider_image}}"
                                                              alt="">
                        </div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>{{$sliders[$i]->slider_title}}</h2>
                                <p>{{$sliders[$i]->slider_sub_title}}</p>

                            </div>
                        </div>
                    </div>

                @endfor
                {{--   <div class="carousel-item">
                       <div class="carousel-background"><img src="img/slider/sl5.jpg" alt=""></div>
                       <div class="carousel-container">
                           <div class="carousel-content">
                           <h2>We are German Chemical LTD</h2>
                               <p>100% Quality Maintain</p>
                           </div>
                       </div>
                   </div>
   --}}
            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- #intro -->

<main id="main">


    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <!--  <h3><span style="font-size: 45px;color: #FF4223">13</span> Year Jourey </h3>-->
                <p class="text-center"><img src="img/year.png" width="300"/></p>
                <p style="text-align: left">Having started a venture 13 years ago, today I am privileged to be a
                    founding member of one of the
                    most competitive chemical company with emphasis on efficiency in operations, reliability for
                    customers and trust on sustainable development.For us, sustainability means aligning economic
                    success with environmental and social responsibility. In the last few years the German Chemicals
                    Limited faced a series of prolonged crises. These crises allowed us to gain invaluable experience
                    and guided us to newer avenues.
                    <br>
                    <br>

                    I would like to thank our employees, customers, suppliers and other stakeholders, for their
                    dedication and support. We are committed to improving the efficiencies in our operations and
                    differentiating ourselves in the market-place through customer focussed innovation in product and
                    services, so as to build a stronger and sustainable future for our Company and our associates.</p>

                <div class="row testimonials" style="padding-top: 0px">

                    <div class="col-md-3 mx-auto">
                        <div class="testimonial-item">
                            <img src="img/chairman.png" class="testimonial-img" alt="">
                            <h3>MD B.Alam</h3>
                            <h4>Founder & Chairman</h4>

                        </div>
                    </div>

                </div>

            </header>
        </div>


    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->


    <section id="facts" class="wow fadeIn">
        <div class="container">

            <header class="section-header">
                <h3>Facts</h3>

            </header>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">274</span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">421</span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1,364</span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">18</span>
                    <p>Hard Workers</p>
                </div>

            </div>


        </div>
    </section><!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->


    <section class="testimonials section-bg wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3>Testimonials</h3>
            </header>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                    <h3>Richard</h3>
                    <!-- <h4>Ceo &amp; Founder</h4>-->
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        German Chemicals Limited have been able to service a broad range of research needs while always
                        remaining flexible, cost effective, and most importantly lightning fast. They are a trusted
                        partner for us. Keep up the good work!
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

            </div>

        </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="container text-center">
            <h3>Interested in working with German Chemical?</h3>
            <p>We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized approach</p>
            <a class="cta-btn" href="/contact">Get In Touch</a>
        </div>
    </section>
    <!--==========================
      Contact Section



    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3>Our Clients</h3>
            </header>

            <div class="owl-carousel clients-carousel">
                <img src="images/clients/abs.png" alt="">
                <img src="images/clients/apex.png" alt="">
                <img src="images/clients/asian.jpg" alt="">
                <img src="images/clients/bdl.png" alt="">
                <img src="images/clients/beximco.png" alt="">
                <img src="images/clients/colormaster.png" alt="">
                <img src="images/clients/crown.png" alt="">
                <img src="images/clients/doree.png" alt="">
                <img src="images/clients/givensee.png" alt="">
                <img src="images/clients/grameen.png" alt="">
                <img src="images/clients/hossen.jpg" alt="">
                <img src="images/clients/bdl.png" alt="">
                <img src="images/clients/beximco.png" alt="">
                <img src="images/clients/IL.png" alt="">
                <img src="images/clients/jaya.png" alt="">
                <img src="images/clients/nz.png" alt="">
                <img src="images/clients/purbani.png" alt="">
                <img src="images/clients/opex.png" alt="">
                <img src="images/clients/s_chaina.png" alt="">
                <img src="images/clients/viyelletex.png" alt="">
                <img src="images/clients/wisdon.png" alt="">
                <img src="images/clients/young.png" alt="">
                <img src="images/clients/kds.gif" alt="">
                <img src="images/clients/gms.gif" alt="">
                <img src="images/clients/padma.gpeg" alt="">
                <img src="images/clients/khusira.gif" alt="">

            </div>

        </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <!--==========================
      Footer
    ============================-->
    <footer id="footer">
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
                &copy; Copyright <strong>German Chemical LTD.</strong>
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
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>
</html>
