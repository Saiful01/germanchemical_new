@extends('layouts.common')

@section('title','Products')



@section('content')

    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h3>OUR PRODUCTS</h3>

            </header>

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
                                <p class="headline text-center " style="    margin-bottom: 0px;">
                                    <a class="text-orange font-weight-bold"  href="/pages/products/details/{{$res->pro_id}}">{{$res->pro_title}}</a>
                                </p>


                            </div>
                        </div>
                        <br>

                    </div>

                @endforeach
            </div>
        </div>
    </section>




@endsection
