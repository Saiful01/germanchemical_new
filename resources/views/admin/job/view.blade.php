@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">

            <div class="row">
                <div class="col-md-6">
                    <h4>Job</h4>
                </div>

                <div class="col-md-6">
                    <a class="btn btn-success float-right" href="/job/create">New</a>
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
                <th>job Title</th>
                <th> Description</th>
                <th> Qualification</th>
                <th> Vacancy</th>
                <th> Salary Range</th>
                <th> Experience</th>
                <th> Emp. Status</th>
                <th> Action</th>


            </tr>
            </thead>

            @php($i=1)
            @foreach($result as $res)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$res->job_title}} </td>
                    <td>{!! $res->job_description !!} </td>
                    <td>{{$res->job_qualification}} </td>
                    <td>{{$res->job_vacancy}}</td>
                    <td>{{$res->job_salary}}</td>
                    <td>{{$res->job_experience}}</td>
                    <td>{{$res->job_employment_status}}</td>

                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                <span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item btn btn-info" href="/job/edit/{{$res->job_id}}">
                                    Edit
                                </a>
                                <a class="dropdown-item " href="/job/delete/{{$res->job_id}}">
                                    Delete
                                </a>
                                <a class="dropdown-item " href="/jobapplicant/show/{{$res->job_id}}">
                                    Applicant
                                </a>

                                <a class="dropdown-item " href="/job/job-detail/{{$res->job_id}}" target="_blank">
                                    Details
                                </a>


                            </div>


                        <!-- <ul class="dropdown-menu">
    <li><a href="/job/edit/{{$res->job_id}}">Edit</a></li>
    <li><a href="/job/delete/{{$res->job_id}}">Delete</a></li>
    <li><a href="/job/applicant/{{$res->job_id}}">Applicants</a></li>
  </ul> -->
                        </div>

                    </td>

                </tr>

            @endforeach


        </table>



@endsection
