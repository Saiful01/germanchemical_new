@extends('layouts.app')

@section('content')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">

                @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif

                @if(Session::has('failed'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
                @endif

                <form method="post" action="/slider/store" enctype='multipart/form-data'>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="slider_name">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title" name="slider_title" required>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Sub Title" name="slider_sub_title">
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control" placeholder="Image" name="slider_image" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>


            </div>
        </div>

    </div>


@endsection
