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

            <form method="post" action="/job/update" enctype='multipart/form-data'>
                <div class="form-group">
                    <label>Job Title:</label>
                    <input type="text" class="form-control" placeholder="title" name="job_title" value="{{$result->job_title}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <input type="hidden" name="job_id" value="{{$result->job_id}}">
                </div>


                <div class="form-group">
                    <label>Job Description:</label>
                    <textarea type="text" class="form-control"  name="job_description"> {{$result->job_description}}  </textarea>
                </div>


                <div class="form-group">
                    <label>Job Qualification:</label>
                    <textarea type="text" class="form-control"  name="job_qualification">{{$result->job_qualification}} </textarea>
                </div>


                
                <div class="form-group">
                    <label>Job Vacancy:</label>
                    <input type="number" class="form-control" placeholder="vacancy" name="job_vacancy"value="{{$result->job_vacancy}}">
                </div>
                
                <div class="form-group">
                    <label>Job Salary:</label>
                    <input type="number" class="form-control" placeholder="Salary" name="job_salary"value="{{$result->job_salary}}">
                </div>
                
                <div class="form-group">
                    <label>Job Experience:</label>
                    <input type="text" class="form-control" placeholder="Experience" name="job_experience"value="{{$result->job_experience}}">
                </div>


                <div class="form-group">
                <label>Job Emlpoyment Status:</label>
                <select class="form-control form-control-lg" name="job_employment_status">
                <option @if($result->job_employment_status=="Full Time") selected @endif >Full time</option>
                <option @if($result->job_employment_status=="Part Time") selected @endif>Part time</option>
                </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>


@endsection
