@extends('layouts.app')

@section('content')
<div class="card">
     <div class="card-header">
     <h1 class="text-center text-primary">Job Applicant List</h1>
     </div>
    <div class="card-body">
    
    @if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif

@if(Session::has('failed'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
           <th>Job Id</th>
           <th>Applicant Id</th>
           <th>Applicant name</th>
           <th>Applicant email</th>
           <th>Applicant Max Education</th>
           <th>Applicant phone</th>
           <th>Applicant password</th>
           <th>Delete</th>
           

        </tr>
    </thead>

@foreach($result as $res)
<tr>
<td>{{$res->job_id}} </td>
<td>{{$res->applicant_id}} </td>
<td>{{$res->app_name}} </td>
<td>{{$res->app_email}} </td>
<td>{{$res->app_max_edu}} </td>
<td>{{$res->app_phone}} </td>
<td>{{$res->app_password}} </td>
<td><a class="btn btn-danger" href="/jobapplicant/delete/{{$res->id}}">Delete</a></td>


</tr>

@endforeach
    

</table>



@endsection
