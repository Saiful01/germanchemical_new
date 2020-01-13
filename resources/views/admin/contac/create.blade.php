@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">

            @if(Session::has('success'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
            @endif

            @if(Session::has('failed'))
                <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('failed') }}</p>
            @endif

            <form method="post" action="/contac/store" enctype='multipart/form-data'>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="con_name" required>
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                </div>


                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="con_email" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" name="con_phone" required>
                </div>


                <div class="form-group">
                    <textarea type="text" class="form-control" placeholder="Write message" name="con_msg" required></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>


@endsection
