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

            <h1 class="text-center"> OUR PRODUCTS</h1>
            <div class="breadcrumbs-description">
            </div>
        </div>
    </div>

    <main id="body-content">
    <section id="">
        <div class="container mt-5">
            <div class="row">

                @foreach($result as $res)
                    <div class="col-md-4">
                        <div class="card">

                            <div class="card-body">
                                <a href="/pages/products/details/{{$res->pro_id}}">
                                    <img class="card-img-top" src="/images/product/{{$res->pro_image}}" alt="Product image"
                                         width="100%" height="250px">
                                </a>
                                <hr>
                                <!-- <p class="text-success"><b>Price :</b> {{$res->pro_price}} tk</p> -->
                                <p class="headline">
                                    <a  href="/pages/products/details/{{$res->pro_id}}">{{$res->pro_title}}</a>
                                </p>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </section>


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