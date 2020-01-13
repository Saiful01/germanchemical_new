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
                <div class="form-group row">
                    <div class="col-md-2">
                        <label>Title:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="title" name="job_title"
                               value="{{$result->job_title}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <input type="hidden" name="job_id" value="{{$result->job_id}}">
                    </div>

                </div>


                <div class="form-group row">
                    <div class="col-md-2">
                        <label>Description:</label>
                    </div>
                    <div class="col-md-10">
                           <textarea type="text" class="form-control"
                                     name="job_description"
                                     id="job_description"> {!! $result->job_description !!}  </textarea>
                    </div>

                </div>


                <div class="form-group row">
                    <div class="col-md-2">
                        <label>Qualification:</label>
                    </div>
                    <div class="col-md-10">
                             <textarea type="text" class="form-control"
                                       name="job_qualification">{{$result->job_qualification}} </textarea>
                    </div>

                </div>


                <div class="form-group row">
                    <div class="col-md-2">
                        <label>Vacancy:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="number" class="form-control" placeholder="vacancy" name="job_vacancy"
                               value="{{$result->job_vacancy}}">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label>Salary Range:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="number" class="form-control" placeholder="Salary" name="job_salary"
                               value="{{$result->job_salary}}">
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label>Experience:</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="Experience" name="job_experience"
                               value="{{$result->job_experience}}">
                    </div>


                </div>


                <div class="form-group row">
                    <div class="col-md-2">
                        <label>Emlpoyment Status:</label>
                    </div>
                    <div class="col-md-10">
                        <select class="form-control form-control" name="job_employment_status">
                            <option @if($result->job_employment_status=="Full Time") selected @endif >Full time</option>
                            <option @if($result->job_employment_status=="Part Time") selected @endif>Part time</option>
                        </select>
                    </div>

                </div>


                <div class="form-group row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </div>



            </form>


        </div>
    </div>

    <script>
        CKEDITOR.replace('job_description');
    </script>

@endsection
