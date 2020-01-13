@extends('layouts.common')

@section('title','contact')



@section('content')

    <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>

            <h1>Contact Us</h1>
            <div class="breadcrumbs-description">
                Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.
            </div>
        </div>
    </div>

    <main id="body-content">


        <!-- Contact Details Start -->
        <section class="wide-tb-80 contact-full-shadow">
            <div class="container">

                @if(Session::has('success'))
                    <div class="alert alert-info" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif

                @if(Session::has('failed'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('failed') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif


                <div class="contact-map-bg">
                    <img src="images/map-bg.png" alt="">
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-5 col-sm-12 col-lg-5 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s"
                         style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                        <div class="contact-detail-shadow">
                            <h4>Dhaka</h4>
                            <div class="d-flex align-items-start items">
                                <i class="icofont-google-map"></i> <span>House no 168, Road 23,DOHS,Mohakhali</span>
                            </div>
                            <div class="d-flex align-items-start items">
                                <i class="icofont-phone"></i> <span>+88</span>
                            </div>
                            <div class="text-nowrap d-flex align-items-start items">
                                <i class="icofont-email"></i> <a href="#">geremanchemicalltd.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-lg-7 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s"
                         style="visibility: visible; animation-delay: 0s; animation-name: fadeInLeft;">
                        <div class="contact-detail-shadow">
                            <h1 class="heading-main mb-4">
                                Get in touch
                            </h1>

                            <form action="/contac/store" method="post" enctype='multipart/form-data'
                                  class="col rounded-field">
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <input type="text" name="con_name"  class="form-control"
                                               placeholder="Your Name">
                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                    </div>

                                </div>
                                <div class="form-row mb-4">

                                    <div class="col">
                                        <input type="text" name="con_phone"  class="form-control"
                                               placeholder="Phone">
                                    </div>
                                    <div class="col">
                                        <input type="email" name="con_email"  class="form-control"
                                               placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-row mb-4">
                                    <div class="col">
                                        <textarea rows="7" name="con_msg" placeholder="Message"
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row text-center">

                                    <button  type="submit"
                                            class="form-btn mx-auto btn-theme bg-orange">Submit Now <i
                                                class="icofont-rounded-right"></i></button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Details End -->


        <!-- Google Map Start -->
        <section class="map-bg">

            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="400" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=House%20no%20168%2C%20Road%2023%2CDOHS%2CMohakhali&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/">buy nord vpn</a></div>
                <style>.mapouter {
                        position: relative;
                        text-align: right;
                        height: 400px;
                        width: 100%;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 400px;
                        width: 100%
                    }</style>
            </div>

        </section>
        <!-- Google Map Start -->
    </main>

@endsection