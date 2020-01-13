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

            <form method="post" action="/employee/update" enctype='multipart/form-data'>
                <div class="form-group">
                    <label>Employee Name:</label>
                    <input type="text" class="form-control" name="emp_name" value="{{$result->emp_name}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <input type="hidden" name="emp_id" value="{{$result->emp_id}}">
                </div>


                <div class="form-group">
                    <label>Employee Email:</label>
                    <input type="email" class="form-control"  name="emp_email" value="{{$result->emp_email}} ">
                </div>
                <div class="form-group">
                    <label>Employee phone:</label>
                    <input type="number" class="form-control"  name="emp_phone" value="{{$result->emp_phone}}" required>
                </div>
                <div class="form-group">
                    <label>Employee Bio:</label>
                    <input type="text" class="form-control"  name="emp_bio" value="{{$result->emp_bio}} ">
                </div>
                <div class="form-group">
                    <label>Employee Picture:</label>
                    <input type="file" class="form-control"  name="emp_image" value="{{$result->emp_image}} ">
                </div>
                <div class="form-group">
                    <label>Employee Designation:</label>
                    <input type="text" class="form-control"  name="emp_designation" value="{{$result->emp_designation}} ">
                </div>
                <div class="form-group">
                    <label>Employee Joining Date:</label>
                    <input type="test" class="form-control"  name="emp_join_date" value=" {{$result->emp_join_date}} ">
                </div>


                

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>


@endsection
