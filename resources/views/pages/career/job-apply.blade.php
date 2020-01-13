@extends('layouts.common')

@section('title','Apply')



@section('content')

    <section id="services" class=" bg-ash">
        <div class="container">

            <header class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h3>Apply for Jobs</h3>

            </header>

            <div class="row justify-content-between">
                <div class="col-md-8 mx-auto">
                    <div class="contact-detail-shadow">

                        @if(Session::has('success'))
                            <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
                        @endif

                        @if(Session::has('failed'))
                            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('failed') }}</p>
                        @endif


                        <form action="/applicant/job-apply" method="post"
                              class="col rounded-field"  enctype='multipart/form-data'>
                            <div class="form-row mb-4">
                                <div class="col">
                                    <label>Applicant name:</label>
                                    <input type="text" class="form-control" name="app_name" required>
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                    <input type="hidden" name="id" value="{{$id}}"/>
                                </div>

                            </div>
                            <div class="form-row mb-4">
                                <div class="col">
                                    <label>Application Max Qualification:</label>
                                    <select class="form-control form-control-lg" name="app_max_edu">
                                        <option>JSC</option>
                                        <option>SSC</option>
                                        <option>HSC</option>
                                        <option>Graduate</option>
                                        <option>Masters</option>
                                        <option>PHD</option>

                                    </select>
                                </div>

                            </div>

                            <div class="form-row mb-4">

                                <div class="col">
                                    <label>Phone:</label>
                                    <input type="text" name="phone" id="phone" class="form-control" required>
                                </div>

                                <div class="col">
                                    <label>Email:</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>


                            {{--  <div class="form-row mb-4">

                                  <div class="col">
                                      <label>Applicant Password:</label>

                                      <input type="text" name="app_password" id="app_password" class="form-control">
                                      --}}{{--<input type="password" name="app_password" id="Password"
                                             class="form-control">--}}{{--

                                  </div>
                              </div>
  --}}

                            <div class="form-row mb-4">

                                <div class="col">
                                    <label>Applicant Cv:</label>

                                    <input type="file" name="app_cv" class="form-control" required>

                                </div>
                            </div>


                            <div class="form-row text-center">

                                <button id="contactForm" type="submit"
                                        class="btn btn-info">Apply
                                    Now <i class="icofont-rounded-right"></i></button>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection