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

            <form method="post" action="/applicant/store" enctype='multipart/form-data'>
                <div class="form-group">
                    <label>Applicant name:</label>
                    <input type="text" class="form-control"  name="app_name">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                </div>


                <div class="form-group">
                    <label>Applicant Email:</label>
                    <textarea type="text" class="form-control"  name="app_email"></textarea>
                </div>


                <div class="form-group">
                    <label>Applicant Max Education level:</label>
                    <select class="form-control form-control-lg" name="app_max_edu">
                <option>JSC</option>
                <option>SSC</option>
                <option>HSC</option>
                <option>Graduate</option>
                <option>Masters</option>
                <option>PHD</option>
                
                </select>
                </div>

                

                
                <div class="form-group">
                    <label>Phone:</label>
                    <input type="number" class="form-control" name="app_phone">
                </div>
                
                <div class="form-group">
                    <label>Applicant Password:</label>
                    <input type="text" class="form-control" name="app_password">
                </div>
                
                

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>


@endsection
