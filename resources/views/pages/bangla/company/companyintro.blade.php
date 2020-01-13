@extends('layouts.common')

@section('title','Company Introduction')



@section('content')
<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Company</li>
                </ol>
            </nav>

            <h1 class="text-center" style="color:orange;">Company Introduction</h1>
            </div>
            </div>
            
       

    <main id="body-content">
    <section class="about-section mt-5">

<div class="container">

    <div class="row">

        <div class="col-xl-6 col-lg-6">

            <div class="about-col">

                
                    <h2><span>KNOW ABOUT GERMAN CHEMICALS LIMITED</span></h2>

                    <h5>THE TRUSTED TEXTILE CHEMICAL</h5>

                    <p class="para-space"></p><p class="para-space" style="text-align: justify;">Welcome to&nbsp;German Chemicals LTD. is one of the biggest 100% export oriented Textile Auxiliaries Chemicals industry located in Dhaka Export Processing Zone (DEPZ), Ganakbari Savar, Dhaka, Bangladesh, established in 2004 Under Bangladesh Export Processing Zone Authority (BEPZA).</p>
<p class="para-space" style="text-align: justify;">This profile is envisages the establishment of a plant for the production of fabric softener in flakes and peril form with a capacity of 50 metric tons per day. The major use of fabric softener in textile and dyeing industry as finishing auxiliaries.</p>
<p class="western" style="text-align: justify;">The country’s requirement of fabric softener is largely met through import. The present (2014) demand for fabric softener is estimated at more than 22,000 metric tons per month. The demand for the product is projected to reach 5,000 metric tons by the year of 2015.</p>
<p>&nbsp;</p>
<p class="western" align="justify">The principal raw material required are fatty acid distillate including other solid and essential acid can be obtain locally while the other raw materials have to be imported.</p>
<p>&nbsp;</p>
<p class="western" align="justify">The project cost is estimated as BDT 396.66 million. It will be financed with a debt to equity ratio of 33:67. Thus, equity requirement for the project is BDT 265.74 million. BDT 246.74 million out total equity has already been invested for land purchase, project design, feasibility report preparation and company formation. Total debt requirement of the projects is BDT 130.93 Million.</p>
<p>&nbsp;</p>
<p class="western" align="justify">The project can create employment for 59 persons. The establishment of such factory will have a foreign exchange earnings and saving effect to the country by substituting the current imports. The project also create backward linkage with the chemical manufacturing sub sector and also generates income for the government in terms of wage earning of a plant for the production of chemicals.</p>
<p></p>

                    
            </div>

        </div>

        <div class="col-xl-6 col-lg-6">

            <div class="about-col about-img">

                <br><br><br><br><br>

                
                        <img src="https://germanchemicalslimited.net/wp-content/uploads/2017/10/factory.jpg" class="img-responsive">

                        
                    <div class="about-info">

                        <h4>TESTIMONIALS</h4>

                        <p></p><p>“German Chemicals Limited have been able to service a broad range of research needs while always remaining flexible, cost effective, and most importantly lightning fast. They are a trusted partner for us. Keep up the good work!”</p>
<p></p>

                        <p class="pull-right"><strong>Richard</strong></p>

                    </div>

                    
            </div>

        </div>

    </div>

</div>

</section>

        <!-- Contact Details Start -->
        <section class="wide-tb-80 contact-full-shadow">
            <div class="container">

                @if(Session::has('success'))
                    <div class="alert alert-info" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif

                @if(Session::has('failed'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('failed') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif
            </div>
        </section>
    </main> 
 </div> 

@endsection