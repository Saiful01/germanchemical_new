<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>German Chemical LTD.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->

    <link href="/img/logo.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

    <!-- =======================================================
              Pixonlab
            web:     pixonlab.com
            Address: Concord Regency
                    19/1Panthapath, Dhaka 1205
            Phone: 01717849968

    ======================================================= -->

    <style>
        #footer .footer-top {
            background: #111;
            padding: 22px 0 0px 0;
        }
    </style>
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
                                <p style="font-weight: 600;
                                font-size: 16px;" class="text-center">{{$sliders[0]->slider_sub_title}}</p>


                            </div>
                        </div>
                    </div>
                @endif

                @for($i=count($sliders)-1;$i>=1;$i--)
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="/images/slider/{{$sliders[$i]->slider_image}}"
                                                              alt="">
                        </div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 style="font-size:50px">{{$sliders[$i]->slider_title}}</h2>
                                <p style="font-weight: 600;
                                font-size: 16px;" class="text-center">{{$sliders[$i]->slider_sub_title}}</p>

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
                <h3><span style="font-size: 45px;color: #FF4223">17</span> Years of Journey </h3>
                {{--  <p class="text-center"><img src="img/year.png" width="300"/></p>--}}
                <p style="text-align: justify">Having started a venture 17 years ago, today I am privileged to be a
                    founding member of one of the
                    most competitive chemical company with emphasis on efficiency in operations, reliability for
                    customers and trust on sustainable development. For us, sustainability means aligning economic
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
                            <h2 style="font-size: 23px;
    font-weight: 500;
    margin-bottom: 3px;">MD. Badiul Alam</h2>
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
                    <p class="text-center">Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">421</span>
                    <p class="text-center">Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">42,432</span>
                    <p class="text-center">Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">55</span>
                    <p class="text-center">Hard Workers</p>
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
                   {{-- <img src="img/motiur.jpg" class="testimonial-img" alt="">--}}
                    <h3>Ghosh</h3>
                    <!-- <h4>Ceo &amp; Founder</h4>-->
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        German Chemicals Limited have been able to service a broad range of research needs while always
                        remaining flexible, cost effective, and most importantly lightning fast. They are a trusted
                        partner for us. Keep up the good work!
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>
                <div class="testimonial-item">
                  {{--  <img src="img/Photo.jpg" class="testimonial-img" alt="">--}}
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
            <h3>Interested in working with German Chemicals Limited?</h3>
            <p class="text-center">We don’t just manage suppliers, we micro-manage them. We have a consultative,
                personalized approach</p>
            <a class="cta-btn" href="/career#services">Get In Touch</a>
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
                <img style="height: 75px;width: 150px" src="images/clients/abs.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/apex.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/asian.jpg" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/bdl.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/beximco.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/colormaster.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/crown.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/doree.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/givensee.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/grameen.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/hossen.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/bdl.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/beximco.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/IL.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/jaya.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/nz.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/purbani.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/opex.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/s_chaina.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/viyelletex.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/wisdon.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/young.png" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/kds.gif" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/gms.gif" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/padma.gpeg" alt="">
                <img style="height: 75px;width: 150px" src="images/clients/khusira.gif" alt="">
            </div>

        </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <!--==========================
      Footer
    ============================-->
    <footer id="footer" style="padding-bottom: 0px">
        <div class="footer-top">
            <div class="container">
                <div class="row">


                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Factory Address</h4>
                        <p>
                            SFB 07, Ground Floor,
                            Dhaka EPZ Ashulia, <br>
                            Savar, Dhaka-1349,
                            Bangladesh<br>
                            <strong>Phone:</strong> +88027790248, 7790272<br>
                            <strong>Fax:</strong> +88027790273<br>
                        </p>

                    </div>
                    <div class="col-lg-4 col-md-6 footer-contact" style="text-align: center;">
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/pg/GermanChemicalsLimited/about/?ref=page_internal" class="facebook"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-youtube"></i></a>
                            <a href="/contact" class="linkedin"><i class="fa fa-envelope"></i></a>
                        </div>

                        <div class="copyrifght" style="margin-top: 5px">
                            <div class="copyright" style="padding-top: 0px">
                                © Copyright <strong>German Chemical Limited</strong>
                            </div>

                            Developed by <a href="https://pixonlab.com/">PixonLab</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Head Office</h4>
                        <p>
                            <i class="fa fa-map-signs"></i> House No: 168 (1st Floor), Road No: 23,
                            Mohakhali DOHS,<br> Dhaka-1212, Bangladesh.
                            <br>
                            <i class="fa fa-phone"></i> 09606070707
                        </p>

                    </div>


                </div>
            </div>
        </div>

    </footer><!-- #footer -->
</main>

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
<script src="js/main.js"></script>

</body>
</html>
