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

            <form method="post" action="/slider/update" enctype='multipart/form-data'>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" placeholder="Name" name="slider_name" value="{{$result->slider_name}}">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                    <input type="hidden" name="slider_id" value="{{$result->slider_id}}">

                </div>


                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" placeholder="Name" name="slider_title"value="{{$result->slider_title}}">
                </div>


                <div class="form-group">
                    <label>Sub Title:</label>
                    <input type="text" class="form-control" placeholder="Name" name="slider_sub_title"value="{{$result->slider_sub_title}}">
                </div>

                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" class="form-control" placeholder="Name" name="image"value="{{$result->image}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>


@endsection
