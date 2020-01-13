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

            <form method="post" action="/employee/store" enctype='multipart/form-data'>
                <div class="form-group">
                    <label>Employee name:</label>
                    <input type="text" class="form-control" name="emp_name">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                </div>


                <div class="form-group">
                    <label>Employee Email:</label>
                    <input type="email" class="form-control" name="emp_email">
                </div>

                <div class="form-group">
                    <label>Employee Phone:</label>
                    <input type="number" class="form-control" name="emp_phone">
                </div>

                <div class="form-group">
                    <label>Employee Bio:</label>
                    <input type="text" class="form-control" name="emp_bio">
                </div>
                <div class="form-group">
                    <label>Employee Image:</label>
                    <input type="file" class="form-control" name="emp_image">
                </div>
                <div class="form-group">
                    <label>Employee Designation:</label>
                    <input type="text" class="form-control" name="emp_designation">
                </div>
                <div class="form-group">
                    <label>Employee Joining Date:</label>
                    <input type="text" class="form-control" name="emp_join_date">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>


@endsection
