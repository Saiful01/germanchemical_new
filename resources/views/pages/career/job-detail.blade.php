@extends('layouts.common')

@section('content')


    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h3>Jobs</h3>

            </header>
                <div class="row align-items-start">

                    <div class="col-md-12 col-lg-7">
                        <div class="row">
                            <!-- Blog Items -->
                            <div class="col-md-12">
                                <div class="text-left">

                                    <div class="meta-box"><a href="http://shtheme.com/demosd/logzee/?author=1"
                                                             title="Posts by admin" rel="author">admin</a>
                                        <span>/</span> {{date('M d, Y', strtotime($result->created_at))}}
                                    </div>
                                    <h4 class="h4-md mb-3 fw-7 txt-blue">{{$result->job_title}}</h4>
                                    <p>{!! $result->job_description !!}</p>

                                    <h4>Qualification</h4>
                                    <p>{{$result->job_qualification}}</p>

                                    <h4>Experience</h4>
                                    <p>{{$result->job_experience}}</p>

                                    <h4>Employment Status</h4>
                                    <p>{{$result->job_employment_status}}</p>

                                    <h4>Salary</h4>
                                    <p>{{$result->job_salary}}</p>

                                    <a class="btn btn-info" href="/job/job-apply/{{$result->job_id}}"> Apply
                                        Now </a>
                                </div>

                            </div>
                            <!-- Blog Items -->


                        </div>

                    </div>


                    <div class="col-md-12 col-lg-5">
                        <!-- Add Some Left Space -->
                        <aside class="sidebar-spacer row">

                            <div class="widget-wrap recent-posts">
                                <h3 class="widget-title">Other Jobs</h3>
                                <div class="blog-list-footer">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="media">

                                                <div class="media-body post-text">
                                                    @foreach($job_list as $job)
                                                        <a href="/job/job-detail/{{$job->job_id}}"
                                                           class="progress-bar bg-custom-color"><small>{{$job->job_title}}<span><i class="fa fa-chevron-right"></i></span></small></a>
                                                        <br>

                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <!-- Add Some Left Space -->
                    </div>

                </div>
        </div>

    </section>

@endsection
