@extends('layouts.common')

@section('title','Products')



@section('content')

    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h3>Contact Us</h3>

            </header>

            <div class="row justify-content-between">
                <div class="col-md-4 col-sm-12 col-lg-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s"
                     style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                    <div class="contact-detail-shadow">
                        <h4>German Chemical LTD.</h4>
                        <div class="d-flex align-items-start items">
                            <i class="icofont-google-map"></i> <span>House no 168, Road 23,DOHS,Mohakhali</span>
                        </div>
                        <div class="d-flex align-items-start items">
                            <i class="icofont-phone"></i> <span> 008827790248</span>
                        </div>
                        <div class="text-nowrap d-flex align-items-start items">
                            <i class="icofont-email"></i> <a href="#">geremanchemicalltd.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-lg-7 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s"
                     style="visibility: visible; animation-delay: 0s; animation-name: fadeInLeft;">

                    @if(Session::has('success'))
                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
                    @endif

                    @if(Session::has('failed'))
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('failed') }}</p>
                    @endif

                    <div class="contact-detail-shadow">
                        <h1 class="heading-main mb-4">
                            Get in touch
                        </h1>

                        <form action="/message/store" method="post" enctype='multipart/form-data'
                              class="col rounded-field">
                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="text" name="con_name" class="form-control"
                                           placeholder="Your Name" required>
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                </div>

                            </div>
                            <div class="form-row mb-4">

                                <div class="col">
                                    <input type="text" name="con_phone" class="form-control"
                                           placeholder="Phone" required>
                                </div>
                                <div class="col">
                                    <input type="email" name="con_email" class="form-control"
                                           placeholder="Email" required>
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                        <textarea rows="7" name="con_msg" placeholder="Message"
                                                  class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="form-row text-center">

                                <button type="submit"
                                        class="btn btn-info">Send <i
                                            class="icofont-rounded-right"></i></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>

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
@endsection
