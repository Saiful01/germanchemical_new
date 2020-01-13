@extends('layouts.home_bangla')

@section('title','Home')

@section('content')


    <!-- Fullscreen Slider Start -->
    <div class="slider bg-navy-blue">
        <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
             data-alias="classic4export"
             data-source="gallery"
             style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_slider_1078_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                    @foreach($result as $res)

                        <li
                                data-index="rs-82"
                                data-transition="fade"
                                data-slotamount="default"
                                data-hideafterloop="0"
                                data-hideslideonmobile="off"
                                data-easein="Power4.easeOut"
                                data-easeout="Power4.easeOut"
                                data-masterspeed="1000"
                                data-rotate="0"
                                data-saveperformance="off"
                                data-title="Slide"
                                data-slicey_shadow="0px 0px 50px 0px transparent"
                        >
                            <!-- MAIN IMAGE -->
                            <img src="/images/slider/{{$res->slider_image}}" alt=""
                                 data-bgposition="center center"
                                 data-kenburns="on"
                                 data-duration="7000"
                                 data-ease="Linear.easeNone"
                                 data-scalestart="100"
                                 data-scaleend="150"
                                 data-rotatestart="0"
                                 data-rotateend="0"
                                 data-blurstart="0"
                                 data-blurend="0"
                                 data-offsetstart="0 0"
                                 data-offsetend="0 0"
                                 class="rev-slidebg"
                                 data-no-retina
                            >
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme NotGeneric-Title"

                                 id="slide-82-layer-2"

                                 data-blendmode=”color-dodge“
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['-70','-70','-70','-70']"
                                 data-fontsize="['70','60','60','55']"
                                 data-lineheight="['80','70','70','40']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"
                            >{{$res->slider_name}}
                            </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption medium_light_white tp-resizeme"
                                 id="slide-82-layer-8"

                                 data-blendmode=”color-dodge“
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['-10','-10','-10','-10']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-type="text"
                                 data-responsive_offset="on"
                                 data-frames='[{"delay":500,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"

                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 data-fontsize="['28','28','28','28']"
                                 data-lineheight="['34','34','34','50']"

                            >{{$res->slider_title}}
                            </div>

                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption tp-resizeme small_light_white "
                                 id="slide-82-layer-4"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['60','60','60','60']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]"

                                 data-fontsize="['16','16','16','13']"
                                 data-lineheight="['30','30','30','20']"

                            >{{$res->slider_sub_title}}

                            </div>

                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption tp-resizeme btn-theme bg-navy-blue rev-btn"
                                 id="slide-82-layer-5"
                                 data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']"
                                 data-voffset="['140','140','140','140']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"

                                 data-type="text"
                                 data-responsive_offset="on"

                                 data-frames='[{"delay":750,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"

                                 data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[30,30,30,30]"
                                 data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[30,30,30,30]"

                                 data-fontsize="['14','14','14','14']"
                                 data-lineheight="['16','16','16','16']"

                            >Learn More <i class="icofont-rounded-right"></i></div>
                        </li>
                @endforeach
                <!-- SLIDE  -->
                </ul>
                <div class="tp-bannertimer tp-bottom"
                     style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
            </div>
        </div>
    </div>
    <!-- Fullscreen Slider End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- Journey Style Start -->
        <section class="bg-white wide-tb-100">
            <div class="container pos-rel">
                <div class="row text-center">
                    <div class="col-md-12 col-lg-12">
                        <p><img src="/asset/images/edit.png" alt="" class="mb-5"></p>
                        <p class="para-space"></p>
                        <p style="text-align: justify;">13 বছর আগে একটি উদ্যোগ শুরু করার পরে, আজ আমি এতে বিশেষ সুযোগ পেয়েছি জোর দিয়ে সবচেয়ে প্রতিযোগিতামূলক রাসায়নিক সংস্থার অন্যতম প্রতিষ্ঠাতা সদস্য হন ক্রিয়াকলাপে দক্ষতা, গ্রাহকদের জন্য নির্ভরযোগ্যতা এবং টেকসই উন্নয়নের উপর বিশ্বাস আমাদের, স্থায়িত্ব অর্থ পরিবেশগত এবং সামাজিক সঙ্গে অর্থনৈতিক সাফল্য সারিবদ্ধ দায়িত্ব। গত কয়েক বছরে জার্মান কেমিক্যালস লিমিটেড একটি সিরিজের মুখোমুখি হয়েছিল দীর্ঘায়িত সংকট এই সংকটগুলি আমাদের অমূল্য অভিজ্ঞতা অর্জনের অনুমতি দেয় এবং আমাদেরকে পরিচালিত করে আরও নতুন উপায়</p>
                        <p style="text-align: justify;">আমি আমাদের কর্মচারী, গ্রাহক, সরবরাহকারী এবং  অন্যান্য অংশীদারদের, তাদের উত্সর্গ এবং সমর্থন জন্য। আমরা উন্নতি করতে প্রতিশ্রুতিবদ্ধ আমাদের ক্রিয়াকলাপের দক্ষতা এবং বাজারের জায়গায় নিজেদেরকে আলাদা করে তোলা গ্রাহক পণ্য এবং পরিষেবাদিতে উদ্ভাবনকে কেন্দ্র করে, যাতে আরও শক্তিশালী এবং আমাদের সংস্থা এবং আমাদের সহযোগীদের জন্য টেকসই ভবিষ্যত।</p>
                        <p>&nbsp;<br>
                            &nbsp;</p>
                        <div class="img-icon mt-4 d-flex align-items-center">
                            <img src="https://germanchemicalslimited.net/wp-content/uploads/2017/10/Badiul-Alam-Chairman.png">
                            <h3>
                                MD B.Alam
                                <span>প্রতিষ্ঠাতা ও চেয়ারম্যান</span>
                            </h3>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- Journey Style End -->


        <!-- Counter Start -->
        <section class="wide-tb-100 bg-scroll counter-bg pos-rel">
            <div class="bg-overlay blue opacity-50"></div>
            <div class="container">
                <div class="row">
                    <!-- Counter Col Start -->
                    <div class="col counter-style-1 col-6 col-lg-4 col-sm-6 wow fadeInLeft" data-wow-duration="0"
                         data-wow-delay="0s">
                        <p><i class="icofont-delivery-time"></i></p>
                        <span class="counter">12</span>
                        <div>
                            Years Experience
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Counter Col Start -->
                    <div class="col counter-style-1 col-6 col-lg-4 col-sm-6 wow fadeInLeft" data-wow-duration="0"
                         data-wow-delay="0s">
                        <p><i class="icofont-presentation"></i></p>
                        <span class="counter">2500</span>
                        <span>+</span>
                        <div>
                            Projects
                        </div>
                    </div>
                    <!-- Counter Col End -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    <!-- Counter Col Start -->
                    <div class="col counter-style-1 col-6 col-lg-4 col-sm-6 wow fadeInRight" data-wow-duration="0"
                         data-wow-delay="0">
                        <p><i class="icofont-user"></i></p>
                        <span class="counter">24</span>
                        <span>+</span>
                        <div>
                            Employees
                        </div>
                    </div>
                    <!-- Counter Col End -->

                </div>
            </div>
        </section>
        <!-- Counter End -->


        <!-- Client Reviews Start -->
        <section class="wide-tb-100 mb-spacer-md">
            <div class="container wide-tb-100 pb-0">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                        <h1 class="heading-main">
                            <span>What Our</span>
                            Customers Saying
                        </h1>
                    </div>
                    <!-- Heading Main -->
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme" id="home-client-testimonials">

                            <!-- Client Testimonials Slider Item -->
                            <div class="item">
                                <div class="client-testimonial bg-wave">
                                    <div class="media">
                                        <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                            <img src="/asset/images/team_1.jpg" alt="">
                                        </div>
                                        <div class="client-inner-content media-body">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia
                                                and
                                                Consonantia, there live the blind texts. Aliquam gravida, urna quis
                                                ornare
                                                imperdiet, </p>
                                            <footer class="blockquote-footer"><cite title="Source Title">John Gerry
                                                    Design
                                                    Hunt</cite></footer>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Client Testimonials Slider Item -->

                            <!-- Client Testimonials Slider Item -->
                            <div class="item">
                                <div class="client-testimonial bg-wave">
                                    <div class="media">
                                        <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                            <img src="/asset/images/team_2.jpg" alt="">
                                        </div>
                                        <div class="client-inner-content media-body">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia
                                                and
                                                Consonantia, there live the blind texts. Aliquam gravida, urna quis
                                                ornare
                                                imperdiet, </p>
                                            <footer class="blockquote-footer"><cite title="Source Title">John Gerry
                                                    Design
                                                    Hunt</cite></footer>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Client Testimonials Slider Item -->

                            <!-- Client Testimonials Slider Item -->
                            <div class="item">
                                <div class="client-testimonial bg-wave">
                                    <div class="media">
                                        <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                                            <img src="/asset/images/team_3.jpg" alt="">
                                        </div>
                                        <div class="client-inner-content media-body">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia
                                                and
                                                Consonantia, there live the blind texts. Aliquam gravida, urna quis
                                                ornare
                                                imperdiet, </p>
                                            <footer class="blockquote-footer"><cite title="Source Title">John Gerry
                                                    Design
                                                    Hunt</cite></footer>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Client Testimonials Slider Item -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Reviews End -->

        <!-- Callout Start -->
        <section class="wide-tb-80 bg-orange callout-style-1 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 mb-0">
                        <h4 class="h4-xl">Interested in working with German Chemical?</h4>
                    </div>
                    <div class="col">
                        <div class="center-text">
                            We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized
                            approach
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <a href="/contact" class="btn-theme bg-white light">Get In Touch <i
                                    class="icofont-rounded-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout End -->
        <!-- Company News Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                        <h1 class="heading-main">
                            <span>COMPANY'S NEWS</span>
                            Recent Posts
                        </h1>
                    </div>
                    <!-- Heading Main -->

                    <!-- Blog Items -->
                    <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s">
                        <div class="blog-warp">
                            <img src="/asset/images/blog_img_1.jpg" alt="" class="rounded">
                            <div class="meta-box"><a href="#">Business</a> <span>/</span> September 28, 2018</div>
                            <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantiumg</p>
                        </div>
                    </div>
                    <!-- Blog Items -->

                    <!-- Blog Items -->
                    <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                        <div class="blog-warp">
                            <img src="/asset/images/blog_img_2.jpg" alt="" class="rounded">
                            <div class="meta-box"><a href="#">Business</a> <span>/</span> September 28, 2018</div>
                            <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantiumg</p>
                        </div>
                    </div>
                    <!-- Blog Items -->

                    <!-- Blog Items -->
                    <div class="col-sm-12 col-md-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0.1s">
                        <div class="blog-warp">
                            <img src="/asset/images/blog_img_3.jpg" alt="" class="rounded">
                            <div class="meta-box"><a href="#">Business</a> <span>/</span> September 28, 2018</div>
                            <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantiumg</p>
                        </div>
                    </div>
                    <!-- Blog Items -->


                </div>
            </div>
        </section>
        <!-- Company News End -->

        <!-- Clients Start -->
        <section class="wide-tb-100 bg-fixed clients-bg pos-rel">
            <div class="bg-overlay blue opacity-80"></div>
            <div class="container">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                        <h1 class="heading-main">
                            <span>SOME OF OUR</span>
                            Clients
                        </h1>
                    </div>
                    <!-- Heading Main -->

                    <div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                        <div class="owl-carousel owl-theme" id="home-clients">

                            <!-- Client Logo -->
                            <div class="item">
                                <p class="client-item-p pt-4 pb-4">Colormaster Ltd</p>
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <p class="client-item-p pt-4 pb-4">Ring Shine Textile Ltd.</p>
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <p class="client-item-p pt-4 pb-4">Viyellatex group</p>
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <p class="client-item-p pt-4 pb-4">Jaya Knitting Ltd.</p>
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <p class="client-item-p pt-4 pb-4">Lenny Fashions Ltd.</p>
                            </div>
                            <!-- Client Logo -->

                            <!-- Client Logo -->
                            <div class="item">
                                <p class="client-item-p pt-3 pb-3">Rahamat Knit, Dyeing &amp; Finishing Ltd.</p>
                            </div>
                            <!-- Client Logo -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients End -->

    </main>


@endsection