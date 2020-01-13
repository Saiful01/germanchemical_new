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

            <form method="post" action="/job/store" enctype='multipart/form-data'>
                <div class="form-group">
                    <label>Job Title:</label>
                    <input type="text" class="form-control" placeholder="title" name="job_title">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                </div>


                <div class="form-group">
                    <label>Job Description:</label>
                    <textarea type="text" class="form-control" placeholder="Description" id="job_description" name="job_description" required
                                      rows="30"></textarea>
                </div>


                <div class="form-group">
                    <label>Job Qualification:</label>
                    <textarea type="text" class="form-control" placeholder="Qualification" name="job_qualification"></textarea>
                </div>

                

                
                <div class="form-group">
                    <label>Job Vacancy:</label>
                    <input type="number" class="form-control" placeholder="vacancy" name="job_vacancy">
                </div>
                
                <div class="form-group">
                    <label>Salary Range:</label>
                    <input type="text" class="form-control" placeholder="Salary" name="job_salary">
                </div>
                
                <div class="form-group">
                    <label>Job Experience:</label>
                    <input type="text" class="form-control" placeholder="Experience" name="job_experience">
                </div>
                
                <div class="form-group">
                <label>Job Emlpoyment Status:</label>
                <select class="form-control form-control-lg" name="job_employment_status">
                <option>Full time</option>
                <option>Part time</option>
                </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
    <script>
        CKEDITOR.replace( 'job_description' );
    </script>


@endsection
