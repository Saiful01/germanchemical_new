@extends('layouts.common')

@section('title','Apply')



@section('content')

    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h3>Jobs</h3>

            </header>

            <div class="row justify-content-between">
                <div class="col-md-8 mx-auto">

                    @if(Session::has('success'))
                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
                    @endif

                    @if(Session::has('failed'))
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('failed') }}</p>
                    @endif

                    @if(count($result)<=0)

                        <h5>No Jobs Found</h5>
                    @endif
                    @foreach($result as $res)


                        <a href="/job/job-detail/{{$res->job_id}}"
                           class="progress-bar bg-custom-color"><small>{{$res->job_title}}<span><i class="fa fa-chevron-right"></i></span></small></a>
                        <br>

                    @endforeach


                </div>


            </div>

        </div>
    </section>


@endsection
