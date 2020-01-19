@extends('layouts.common')

@section('title','Products')



@section('content')

    <section id="contact-background" class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="container text-center">
            <h3>WE ARE GERMAN CHEMICALS LIMITED</h3>
            <p style="text-align: center;">BEYOND YOUR DESIRED EXPECTATION</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row about-cols">

                <div class="col-md-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="about-col">
                        <div class="img">
                            <img src="/images/career/rewarding.png" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">It's rewarding</a></h2>
                        <p class="text-justify">
                            We believe it is important to make every member of our team feel heard, appreciated and
                            rewarded, and we are committed to reward not just through our team development programs
                            within the company but also by providing each and every member with a fair salary.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="about-col">
                        <div class="img">
                            <img src="/images/career/opportunity.jpg" alt="" class="img-fluid" style="height: 200px;">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">There are opportunities for all</a></h2>
                        <p class="text-justify">In German Chemicals Limited everyone has an equal opportunity to develop
                            and succeed. We
                            are all encouraged to challenge the status quo and to use our initiative to identify
                            development opportunities for ourselves and the wider GCL community.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s"
                     style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="about-col">
                        <div class="img">
                            <img src="images/career/pride.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">We take pride in what we do</a></h2>
                        <p class="text-justify">
                            At German Chemicals Limited we take pride in producing the best products on the market on an
                            unrivalled scale. We are proud of what we’ve achieved so far, and are excited to see how we
                            can develop even further as our products, clients, and our team grow.
                        </p>
                    </div>
                </div>

            </div>
            <div class="row about-cols mx-auto">
                <div class="col-md-8 mx-auto">
                    <div class="row">

                        <div class="col-md-6  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="about-col">
                                <div class="img">
                                    <img src="/images/career/teamwork.png" alt="" class="img-fluid"  style="height: 200px;">
                                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                                </div>
                                <h2 class="title"><a href="#">We meet our goals through positive teamwork</a></h2>
                                <p class="text-justify">
                                    At German Chemicals Limited we believe that positive teamwork is central to how our
                                    people work together to achieve results. From the first moment that you start your
                                    career with German Chemicals Limited you will find that you are given respect for
                                    your views and will feel part of the team.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6  wow fadeInUp" data-wow-delay="0.1s"
                             style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="about-col">
                                <div class="img">
                                    <img src="/images/career/thing.jpg" alt="" class="img-fluid"
                                         style="height: 200px;">
                                    <div class="icon"><i class="ion-ios-list-outline"></i></div>
                                </div>
                                <h2 class="title"><a href="#">We do the right thing</a></h2>
                                <p class="text-justify">We care about the long-term sustainability of our products, our
                                    manufacturing units, our people, and the communities around us, and we constantly
                                    strive to improve on the way we do things to make life better for everyone at German
                                    Chemicals Limited and in the wider community.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>


    <section id="services">
        <div class="container">


            <div class="row justify-content-between">

                <div class="col-12 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s"
                     style="visibility: visible; animation-delay: 0s; padding:25px;animation-name: fadeInLeft; background-color: #F4F4F4">


                @if(Session::has('success'))
                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
                    @endif

                    @if(Session::has('failed'))
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('failed') }}</p>
                    @endif

                    <div class="contact-detail-shadow">
                        <h1 class="heading-main mb-4">
                            FILL UP THE FORM
                        </h1>

                        <form action="/apply/store" method="post" enctype='multipart/form-data'
                              class="col rounded-field">
                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="text" name="apply_name" class="form-control"
                                           placeholder="Your Name" required>
                                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                </div>

                            </div>
                            <div class="form-row mb-4">

                                <div class="col">
                                    <input type="text" name="apply_phone" class="form-control"
                                           placeholder="Phone" required>
                                </div>
                                <div class="col">
                                    <input type="email" name="apply_email" class="form-control"
                                           placeholder="Email" required>
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <input type="email" name="apply_nid" class="form-control"
                                       placeholder="Your NID number" required>
                            </div>
                            <div class="form-row mb-4">
                                <select class="form-control" name="apply_interest" required>
                                    <option value="">---Select your intereseted field---</option>
                                    <option value="Human Recourses">Human Recourses</option>
                                    <option value="Audit &amp; Compliance"> Audit &amp; Compliance</option>
                                    <option value="Legal Affairs">Legal Affairs</option>
                                    <option value="Finance &amp; Accounts">Finance &amp; Accounts</option>
                                    <option value="Information &amp; Technology">Information &amp; Technology</option>
                                    <option value="Administration">Administration</option>
                                    <option value="Sales &amp; Marketing">Sales &amp; Marketing</option>
                                    <option value="Construction &amp; Engineering">Construction &amp; Engineering</option>
                                    <option value="Customer Service/After Sales">Customer Service/After Sales</option>
                                    <option value="Supply Chain/Procurement">Supply Chain/Procurement</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-row mb-4">
                                <input type="file" name="apply_cv" class="form-control"
                                       placeholder="" required>
                            </div>
                            <div class="form-row text-center">

                                <button type="submit"
                                        class="btn btn-info">Send <i
                                            class="icofont-rounded-right"></i></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
