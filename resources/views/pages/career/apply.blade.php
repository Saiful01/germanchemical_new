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
                    @if(count($result)<=0)

                        <h5>No Jobs Found</h5>
                    @endif
                    @foreach($result as $res)


                        <a href="/job/job-detail/{{$res->job_id}}"
                           class="btn-theme bg-orange mt-2">{{$res->job_title}} <i
                                    class="icofont-rounded-right"></i></a>
                        <br>

                    @endforeach


                </div>


            </div>

        </div>
    </section>


@endsection
