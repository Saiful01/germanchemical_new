@extends('layouts.common')

@section('title','Products')



@section('content')

    <section id="services">
        <div class="container">

            {{--   <header class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                   <h3>Contact Us</h3>

               </header>--}}

            <div class="row justify-content-between">
                <div class="col-md-6 col-sm-12 col-lg-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s"
                     style="visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                    <div class="contact-detail-shadow">
                        <h4 style="font-weight: 600;">German Chemicals Limited</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-justify">
                                    <h4 style="margin-bottom: 5px;">Head Office:</h4>
                                    <i class="fa fa-map-signs"></i> House No: 168 (1st Floor),<br>
                                    <span style="padding-left: 19px">Road No: 23,Mohakhali DOHS,</span><br>

                                    <span style="padding-left: 19px">Dhaka-1212, Bangladesh.</span>
                                    <br>
                                    <i class="fa fa-phone"></i> IP Phone No: 09606070707
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img id="qr" class="img-thumbnail" src="/img/headfinal.png" alt="qr code">

                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-justify">
                                    <h4 style="    margin-bottom: 5px;">Factory:</h4>
                                    <i class="fa fa-map-signs"></i><span style="text-align:left">SFB 07, Ground Floor, Dhaka </span><span
                                        style="padding-left: 15px">EPZ,
                                        Ashulia, Savar,</span> <br>
                                    <span style="padding-left: 15px">Dhaka-1349, Bangladesh</span>


                                    <br>
                                    <i class="fa fa-phone"></i> IP Phone No: 09606070707<br>
                                    <i class="fa fa-phone"></i> +88 02 7790248, 7790272<br>

                                    <i class="fa fa-fax"></i> Fax: +88 02 7790273<br>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img id="qr" class="img-thumbnail" src="/img/factory.jpg" alt="qr code">

                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="align-items-start items" style="margin-top: 53px;">
                        <div class="social-links">
                            <a href="#" class="twitter btn "><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/pg/GermanChemicalsLimited/about/?ref=page_internal"
                               class="facebook btn "><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram btn "><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus btn  "><i class="fa fa-youtube"></i></a>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-lg-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s"
                     style="visibility: visible; animation-delay: 0s; padding:25px;animation-name: fadeInLeft; background-color: #F4F4F4">

                    @if(Session::has('success'))
                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
                    @endif

                    @if(Session::has('failed'))
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('failed') }}</p>
                    @endif

                    <div class="contact-detail-shadow">

                        <h4 class="heading-main mb-4" style="padding-left: 15px;font-weight: 400">
                            Contact us
                        </h4>
                    </div>

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
                        <div class="form-row">
                            <div class="col-md-6">
                                {{-- <h4>5+5=10</h4>--}}
                            </div>
                            <div class="col-md-6">
                                <button type="submit"
                                        class="btn btn-info btn-block">Send <i
                                        class="icofont-rounded-right"></i></button>
                            </div>


                        </div>
                    </form>

                </div>
            </div>
        </div>


    </section>

    <!-- Google Map Start -->
    <section class="map-bg">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="text-align: center">Head office</h1>

                    <div class="mapouter" style="border: 1px solid #d8d0d0;
    padding: 2px;
    padding-left: 5px;">
                        <div class="gmap_canvas">
                            <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d456.3790403555268!2d90.3948281!3d23.7818633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c720d3e8550b%3A0x6af68bf28d13c966!2sGerman%20Chemicals%20Limited!5e0!3m2!1sen!2sbd!4v1580034545255!5m2!1sen!2sbd"
                                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 style="text-align: center;">Factory</h1>

                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <div class="mapouter" style="border: 1px solid #d8d0d0;
    padding: 2px;
    padding-right: 5px;">
                                <div class="gmap_canvas">
                                    <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7292.646792890856!2d90.2710959!3d23.9490018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfd5af39e2beb2215!2sGERMAN%20CHEMICALS%20LIMITED!5e0!3m2!1sen!2sbd!4v1579774742694!5m2!1sen!2sbd"
                                            width="100%" height="400" frameborder="0" style="border:0;"
                                            allowfullscreen=""></iframe>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- Google Map Start -->
@endsection
