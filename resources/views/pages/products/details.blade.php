@extends('layouts.common')

@section('title','Products')



@section('content')

    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h3 class="text-center"> PRODUCTS DETAILS</h3>

            </header>

            <div class="row">
                <div class="col-md-9 mx-auto">


                    <img class="details-img" alt="Thumbnail [200x250]"
                         src="/images/product/{{$result->pro_image}}" width="100%">

                    <hr>


                    <h2>{{$result->pro_title}}</h2>
                    <p style="line-spacing:-5px">
                        {!!  $result->pro_details !!}
                    </p>
                <!-- <p>Price: {{$result->pro_price}} tk</p> -->
                </div>


            </div>
        </div>


    </section>


@endsection
