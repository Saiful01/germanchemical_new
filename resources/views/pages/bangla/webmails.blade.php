@extends('layouts.common')

@section('title','Webmails')



@section('content')

<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>

            <h1>Webmails</h1>
            <div class="breadcrumbs-description">
                Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.
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
        
            <div class="col-md-7 col-sm-12 col-lg-7 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInLeft;">
                        <div class="contact-detail-shadow">
                            <h1 class="heading-main mb-4">
                                Get in touch
                            </h1>

                            <form action="/email" method="post" id="contactusForm" novalidate="novalidate" class="col rounded-field">
                                <div class="form-row mb-4">
                                    <div class="col">
                                    <label>Email:</label>
                                        <input type="text" class="form-control" placeholder="Email" name="app_name">
                                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                    </div>

                                </div>
                                <div class="form-row mb-4">
                                
                                    <div class="col">
                                    <label>Password:</label>
                                     <input type="text" class="form-control" placeholder="Password" name="app_password">
                                    </div>
                                </div>

                                <div class="form-row text-center">

                                    <button id="contactForm" type="submit" class="form-btn mx-auto btn-theme bg-orange">Submit Now <i class="icofont-rounded-right"></i></button>
                                </div>
                            </form>

                        </div>
                    </div>

                    </div>
        </section>
    </main> 
 </div> 
 
@endsection