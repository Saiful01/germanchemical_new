@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">

            @if(Session::has('success'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
            @endif

            @if(Session::has('failed'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
            @endif

            <form method="post" action="/product/store" enctype='multipart/form-data'>
                <div class="form-group">
                    <label>Product name:</label>
                    <input type="text" class="form-control" name="pro_title">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                </div>


                <div class="form-group">
                    <label>Product Details:</label>
                    <textarea type="text" class="form-control" id="pro_details" placeholder="Details"
                              name="pro_details"></textarea>
                </div>

                <div class="form-group">
                    <label>Product Image :</label>
                    <input type="file" class="form-control" name="pro_image">
                </div>
                <!--
                                <div class="form-group">
                                    <label>Product Price:</label>
                                    <input type="text" class="form-control" name="pro_price">
                                </div> -->


                <button type="submit" class="btn btn-info">Save</button>
            </form>


        </div>
    </div>
    <script>
        CKEDITOR.replace('pro_details');
    </script>


@endsection
