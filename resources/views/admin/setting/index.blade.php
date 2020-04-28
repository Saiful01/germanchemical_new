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

                <form method="post" action="/admin/setting/update" enctype='multipart/form-data'>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name"
                               value="{{Auth::user()->name}}">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Password" name="email"
                               value="{{Auth::user()->email}}" required>
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Old Password" name="old_password"
                               value="" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="New Password" name="password"
                               value="" minlength="5" required>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>


            </div>
        </div>

    </div>


@endsection
