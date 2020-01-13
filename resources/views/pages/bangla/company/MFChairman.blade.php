@extends('layouts.common')

@section('title','Products')



@section('content')
<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
                </ol>
            </nav>

            <h1 class="text-center text-white">Message from Chairman</h1>
            </div>
            </div>
       

    <main id="body-content">
    
    <div class="container">
                    <div class="row">
                <div class="col-sm-12">
                    <br><br>
                    <h4><span>MESSAGE FROM CHAIRMAN</span></h4>
                    <hr>
                </div>
                <div class="col-sm-3">
                                            <a href="#" class="thumbnail">
                            <img width="201" height="232" src="https://germanchemicalslimited.net/wp-content/uploads/2017/10/Badiul-Alam-Chairman.png" class="attachment-large size-large wp-post-image" alt="">                        </a>
                                        </div>
                <div class="col-sm-9">
                    <br><br>
                    <p class="para-space"></p><p style="text-align: justify;">Having started a venture 13 years ago, today I am privileged to be a founding member of one of the most competitive chemical company with emphasis on efficiency in operations, reliability for customers and trust on sustainable development.For us, sustainability means aligning economic success with environmental and social responsibility. In the last few years the German Chemicals Limited faced a series of prolonged crises. These crises allowed us to gain invaluable experience and guided us to newer avenues.</p>
<p style="text-align: justify;">I would like to thank our employees, customers, suppliers and other stakeholders, for their dedication and support. We are committed to improving the efficiencies in our operations and differentiating ourselves in the market-place through customer focussed innovation in product and services, so as to build a stronger and sustainable future for our Company and our associates.</p>
<p>&nbsp;<br>
&nbsp;</p>
<p><img class="size-full wp-image-172 alignnone chairman-image" src="https://germanchemicalslimited.net/wp-content/uploads/2017/10/MD-sir-sign.png" alt="" width="150px" srcset="https://germanchemicalslimited.net/wp-content/uploads/2017/10/MD-sir-sign.png 651w, https://germanchemicalslimited.net/wp-content/uploads/2017/10/MD-sir-sign-300x124.png 300w" sizes="(max-width: 651px) 100vw, 651px"></p>
<hr style="width: 300px; float: left;">
<p>&nbsp;<br>
&nbsp;</p>
<p style="text-align: left;"><strong>Chairman<br>
German Chemicals Limited</strong></p>
<p></p>
                </div>
            </div>
                </div>

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