@extends('layouts.app')

@section('content')
<div class="card">
<div class="card-header">

<div class="row">
    <div class="col-md-6">
        <h4>Employee</h4>
    </div>

    <div class="col-md-6">
        <a class="btn btn-success float-right" href="/employee/create">New</a>
    </div>
</div>

</div>

    
    @if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif

@if(Session::has('failed'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
@endif
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Employee name</th>
                        <th>  Email</th>
                        <th> phone</th>
                        <th>  Bio</th>
                        <th>  Image</th>
                        <th>  Designation</th>
                        <th>  Joining Date</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>


                    @php($i=1)
                        @foreach($result as $res)
                        <tr>
                        <td>{{$i++}}</td>
                        <td>{{$res->emp_name}} </td>
                        <td>{{$res->emp_email}} </td>
                        <td>{{$res->emp_phone}}</td>
                        <td>{{$res->emp_bio}} </td>
                        <td>{{$res->emp_image}} </td>
                        <td>{{$res->emp_designation}} </td>
                        <td>{{$res->emp_join_date}} </td>
                        <td><a class="btn btn-info" href="/employee/edit/{{$res->emp_id}}">Edit</a></td>
                        <td><a class="btn btn-danger" href="/employee/delete/{{$res->emp_id}}">Delete</a></td>

                    </tr>

                    @endforeach


                </table>
            </div>
        </div>



        @endsection
