@extends('layouts.common')

@section('title','Products')



@section('content')
<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
            </nav>

            <h1 class="text-center"> OUR PRODUCTS Details</h1>
            <div class="breadcrumbs-description">
            </div>

    <main id="body-content">
    
    <div class="container">
        <div class="card">
            <div class="card-body">
                <img class="details-img" alt="Thumbnail [200x250]"
                     src="/images/product/{{$result->pro_image}}" width="50%" height="300px">

                <hr>


                <h2>{{$result->pro_title}}</h2>
                <p>
                  Details:  {!!  $result->pro_details !!}
                </p>
                <!-- <p>Price: {{$result->pro_price}} tk</p> -->
            </div>

        </div>

    </div>
    


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
            </div>
        </section>
    </main> 
 </div> 

@endsection