@extends('front.default.layout.app')
@section('content')

    <!-- preloader -->
    <div id="preloader">
        <div class="loader">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- preloader -->

    <!-- container-wrapper -->
    <div class="content-wrapper animsition-overlay">
        <!-- bgblock -->
        <div id="bgblock"></div>


        <!-- revolution slider -->
        <section class="no-top no-bottom" aria-label="section-slider">
            <!-- home -->
            <div class="fullwidthbanner-container">
                <div id="revolution-slider-half">
                    <ul>
                        @if (app()->getLocale() == 'en')
                            @foreach($sliders as $slider)
                                <li data-transition="fade" data-slotamount="10" data-masterspeed="1200"
                                    data-delay="5000">
                                    <!--  BACKGROUND IMAGE -->
                                    <img src="{{asset('storage/'.$slider->image_en)}}" alt="" data-start="0"
                                         data-bgposition="center center" data-kenburns="on" data-duration="10000"
                                         data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100"
                                         data-bgpositionend="center center"/>
                                    <div class="tp-caption slide-big-heading sft"
                                         data-x="30"
                                         data-y="270"
                                         data-speed="800"
                                         data-start="400"
                                         data-easing="easeInOutExpo"
                                         data-endspeed="450">
                                        {{$slider->title_en}}
                                    </div>

                                    <div class="tp-caption slide-sub-heading sft"
                                         data-x="30"
                                         data-y="350"
                                         data-speed="1000"
                                         data-start="800"
                                         data-easing="easeOutExpo"
                                         data-endspeed="400">
                                        {{$slider->sub_title_en}}
                                    </div>

                                    <div class="tp-caption btn-slider sfb"
                                         data-x="30"
                                         data-y="450"
                                         data-speed="400"
                                         data-start="800"
                                         data-easing="easeInOutExpo">
                                        <span class="shine"></span><a href="#">{{__('web.more_details')}}</a>
                                    </div>

                                </li>
                            @endforeach
                        @else
                            @foreach($sliders as $slider)
                                <li data-transition="fade" data-slotamount="10" data-masterspeed="1200"
                                    data-delay="5000">
                                    <!--  BACKGROUND IMAGE -->
                                    <img src="{{asset('storage/'.$slider->image_ar)}}" alt="" data-start="0"
                                         data-bgposition="center center" data-kenburns="on" data-duration="10000"
                                         data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100"
                                         data-bgpositionend="center center"/>
                                    <div class="tp-caption slide-big-heading sft"
                                         data-x="30"
                                         data-y="270"
                                         data-speed="800"
                                         data-start="400"
                                         data-easing="easeInOutExpo"
                                         data-endspeed="450">
                                        {{$slider->title_ar}}
                                    </div>

                                    <div class="tp-caption slide-sub-heading sft"
                                         data-x="30"
                                         data-y="350"
                                         data-speed="1000"
                                         data-start="800"
                                         data-easing="easeOutExpo"
                                         data-endspeed="400">
                                        {{$slider->sub_title_ar}}
                                    </div>

                                    <div class="tp-caption btn-slider sfb"
                                         data-x="30"
                                         data-y="450"
                                         data-speed="400"
                                         data-start="800"
                                         data-easing="easeInOutExpo">
                                        <span class="shine"></span><a href="#">{{__('web.more_details')}}</a>
                                    </div>

                                </li>
                            @endforeach
                        @endif
                    </ul>
                    <div class="tp-bannertimer hide"></div>
                </div>
            </div>
            <!-- home end -->
        </section>
        <!-- revolution slider end -->

        <!-- section about home -->
        <section class="no-top no-bottom bggray" aria-label="abouthome">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <img src="{{asset('web/img/abouthome.jpg')}}" class="imgbg-col" alt="imghome">
                    </div>
                    <div class="col-md-6 centered">
                        <div class="detailcontent">
                            <div class="subheading">{{__('web.about_company')}}</div>
                            <div class="heading">Best Interior is Our Passion</div>
                            <div class="textdetail">It’s our passion to design your interior. It’s also our passion to
                                work with our client. We work together with our client to design their interior,
                                visualised the interior and make the the beauty together the comfort of the interior
                                together with our client.
                                Even if you don't have a ready sketch of what you want - we will help you
                                to get the result you dreamed of.
                            </div>
                            <div class="btn-content mt-3">
                                <span class="shine"></span>
                                <a href="#">{{__('web.more_details')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section about home end -->

        <!-- section about home -->
        <section class="no-top no-bottom" aria-label="abouthome">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 bgblack">
                        <div class="detailcontent bgblack text-right">
                            <div class="textdetail">
                                "Working with our client is always been our pleasure. We help our client to visualise
                                their imagination, connects all the pieces of the puzzle into an amazing design of
                                space. With a strong philosophy in every design we made, we make sure that the design
                                meets the purpose. Being or living in a space with amazing details of the work its
                                always the key of cozy and fresh feeling."
                            </div>
                            <div class="subheading pt-3">
                                -John Davine-
                            </div>
                            <div class="bold">
                                Founder of Company
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <img src="{{asset('web/img/abouttal.jpg')}}" class="imgbg-col" alt="imghome">
                    </div>
                </div>
            </div>
        </section>
        <!-- section about home end -->

        <!-- section logo -->
        <section aria-label="section" class='bggray'>
            <div class="container-fluid">
                <div class='row p-3-vh'>

                    <div class='col-12'>
                        <div id="owl-logo" class='owl-carousel owl-theme'>
                            @foreach($partners as $partner)
                                <div class='item'>
                                    <img
                                            src="{{asset('storage/'.$partner->photo)}}"
                                            class="img-fluid"
                                            alt="{{$partner->title}}"
                                    />
                                </div>

                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- section logo end -->


        <!-- section projects -->
        <section aria-label="section" class="no-padding">
            <div class='container-fluid'>
                <div class='row'>
                    <div class="col-12 centered mb-1">
                        <div class="detailcontent text-center p-0">
                            {{--                            <div class="subheading">{{__('web.our_projectsw')}}</div>--}}
                            <div class="heading">{{__('web.our_projects')}}</div>
                        </div>
                    </div>
                    <div class="col-md-12 p-0">
                        <div id="owl-projects" class="owl-carousel owl-theme slick slickproject"
                             style="justify-content: center">
                            @foreach($projects as $project)
                                <div class='item'>
                                    <div class='bg'>
                                        <img
                                                src="{{asset('storage/'.$project->image)}}"
                                                class="img-fluid"
                                                alt="{{$project->image}} "
                                                style="max-height: 30vh"
                                        />
                                    </div>
                                    <div class='desc'>
                                        @if(app()->getLocale()=='ar')
                                            <div class='tag'>{{$project->name_ar}}</div>
                                            <div class='name'>{{$project->name_ar}}</div>
                                        @else
                                            <div class='tag'>{{$project->name_en}}</div>
                                            <div class='name'>{{$project->name_en}}</div>
                                        @endif

                                    </div>
                                    <div class='icon'>
                                        <a href="{{route('web.portfolio.view',$project->id)}}">
                                            {{__('web.view_project')}}
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- section projects end -->

        <!-- section service -->
        {{--        <section aria-label="section">--}}
        {{--            <div class="conntainer-fluid">--}}
        {{--                <div class="row p-3-vh">--}}
        {{--                    @foreach($services as $service)--}}

        {{--                        <div class="col-md-4">--}}
        {{--                            <div class="servcices">--}}
        {{--                                <div class="bgimg">--}}
        {{--                                    <img src="{{asset('storage/'.$service->photo)}}" alt="#"/>--}}
        {{--                                </div>--}}
        {{--                                <div class="content">--}}
        {{--                                    <div class="icon">--}}
        {{--                                        <img src="img/icon/comp.png" alt="#"/>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="heading">--}}
        {{--                                        {{$service->name_en}}--}}
        {{--                                    </div>--}}
        {{--                                    <div class="textdetail autoheight">--}}
        {{--                                        {!! Str::limit($service->description_en, 25, '...') !!}--}}
        {{--                                    </div>--}}
        {{--                                    <div class="btn-content mt-3">--}}
        {{--                                        <span class="shine"></span>--}}
        {{--                                        <a href="#">Read More</a>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    @endforeach--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}
        <!-- section service end -->

        <section aria-label="section">
            <div class="container-fluid">
                <div class="swiper">
                    <div class="col-12 centered mb-1">
                        <div class="detailcontent text-center p-0">
                            <div class="subheading">{{__('web.services')}}</div>
                            <div class="heading">{{__('web.what_our_company_offers')}}</div>
                        </div>
                    </div>
                    <div class="swiper-wrapper" style="justify-content: center">
                        @foreach($services as $service)
                            <div class="swiper-slide">
                                <div class="servcices">
                                    <div class="bgimg">
                                        <img src="{{asset('storage/'.$service->photo)}}" alt="#"/>
                                    </div>
                                    <div class="content" style="direction: rtl !important">
                                        <div class="icon">
                                            <img src="{{asset('web/img/icons/customer-service.png')}}" alt="#"/>
                                        </div>
                                        @if(app()->getLocale()=='ar')
                                            <div class="heading">
                                                {{$service->name_ar}}
                                            </div>
                                            <div class="textdetail autoheight">
                                                {!! Str::limit($service->description_ar, 50, '...') !!}
                                            </div>
                                        @else
                                            <div class="heading">
                                                {{$service->name_en}}
                                            </div>
                                            <div class="textdetail autoheight">
                                                {!! Str::limit($service->description_en, 50, '...') !!}
                                            </div>
                                        @endif

                                        <div class="btn-content mt-3">
                                            <span class="shine"></span>
                                            <a href="#">
                                                {{__('web.read_more')}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add navigation arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- Add pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>


        <!-- section gallery -->
        <section class="no-padding" aria-label="gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <div id="w-gallery-column" class="w-gallery-container">


                            @foreach ($gallery as $image)

                                <div class="w-gallery no-border" href="#" style="height: 40vh;">
                                    <img src="{{asset('storage/'.$image->image)}}" alt="{{$image->title}}"
                                         class="w-gallery-image"
                                         style="column-fill: auto">
                                    <div class="content-gallery">
                                        <span class="ti-plus"></span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section gallery end -->

        <!-- section testimony -->
        <section aria-label="blog">
            <div class="container-fluid">
                <div class="row p-3-vh">
                    <div class="col-12 centered mb-5">
                        <div class="detailcontent text-center p-0">
                            <div class="subheading">{{__('web.testimonials')}}</div>
                            <div class="heading">{{__('web.what_people_say')}}</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="owl-testimony" class="owl-carousel owl-theme" style="justify-content: center">
                            @foreach($testimonials as $testimonial)
                                <div class='item'>
                                    <div class="content-testy" style="max-height: 30rem">
                                        <div class="testy-text">
                                          <span>{!! $testimonial->text  !!}
                                          </span>
                                        </div>
                                        <div class="user">
                                            <div class="img">
                                                <img src="{{asset('storage/'.$testimonial->photo)}}"
                                                     style="width: 10rem"
                                                     alt="imgtesty">
                                            </div>
                                            <div class="name">
                                                {{$testimonial->name}}
                                            </div>
                                            <div class="title">
                                                {{$testimonial->position}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section testimony end -->

        <!-- section company home -->
        <section class="no-top no-bottom bggray" aria-label="company">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <img src="{{asset('web/img/company.jpg')}}" class="imgbg-col" alt="imghome">
                    </div>
                    <div class="col-md-6 centered">
                        <div class="detailcontent">
                            <div class="subheading">OUR SKILLS</div>
                            <div class="heading">{{__('web.our_company_values')}}</div>
                            <div class="textdetail">The basic philosophy of our studio is to create individual,
                                aesthetically stunning solutions for our customers by lightning-fast
                                development of projects employing unique style and architecture.
                                Even if you don't have a ready sketch of what you want - we will help you
                                to get the result you dreamed of.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section company home end -->

        {{--        <!-- section coloumn blog -->--}}
        {{--        <section aria-label="blog">--}}
        {{--            <div class="container-fluid">--}}
        {{--                <div class="row p-3-vh">--}}
        {{--                    <div class="col-12 centered mb-5">--}}
        {{--                        <div class="detailcontent text-center p-0">--}}
        {{--                            <div class="subheading">OUR BLOG</div>--}}
        {{--                            <div class="heading">Latest News</div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <div class="col-md-4">--}}
        {{--                        <div class="blogcolumn">--}}
        {{--                            @foreach($recentBlogs as $recentBlog)--}}
        {{--                                <div class="imgtop">--}}
        {{--                                    <img style="height: 50vh;width: 50vh"  src="{{asset('storage/'.$recentBlog->image)}}" alt="" class="w-gallery-image">--}}
        {{--                                    --}}{{--                                <span class="tag">--}}
        {{--                                    --}}{{--            BATHROOM--}}
        {{--                                    --}}{{--          </span>--}}
        {{--                                </div>--}}
        {{--                                <div class="blogcont">--}}
        {{--                                    <div class="date">--}}
        {{--                                        <span>{{ $recentBlog->created_at->format('F j, Y \a\t g:i a') }}</span> ----- <span>JESICA JAMES</span>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="headingblog">--}}
        {{--                                        {{$recentBlog->name_en}}--}}
        {{--                                    </div>--}}
        {{--                                    <div class="descblog">--}}
        {{--                                        {{ Str::limit($recentBlog->description, 100, '...') }}--}}
        {{--                                    </div>--}}
        {{--                                    <div class="btn-content m-0">--}}
        {{--                                        <span class="shine"></span>--}}
        {{--                                        <a href="{{ route('web.blog.view', $recentBlog->id) }}">Read More</a>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    @endforeach--}}

        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}
        {{--        <!-- section coloumn blog end -->--}}
        <!-- section coloumn blog -->
        <section aria-label="blog">
            <div class="container-fluid">
                <div class="row p-3-vh">
                    <div class="col-12 centered mb-5">
                        <div class="detailcontent text-center p-0">
                            <div class="subheading">{{__('web.our_blog')}}</div>
                            <div class="heading">{{__('web.latest_news')}}</div>
                        </div>
                    </div>

                    @foreach($recentBlogs as $recentBlog)
                        <div class="col-md-4">
                            <div class="blogcolumn">
                                <div class="imgtop">
                                    <img src="{{asset('storage/'.$recentBlog->image)}}"
                                         alt="" class="w-gallery-image">
                                    <span class="tag">
                                         Like
                                    </span>
                                </div>
                                <div class="blogcont">
                                    <div class="date">
                                        <span>{{ $recentBlog->created_at->format('F j, Y \a\t g:i a') }}</span>
                                        {{--                                        -------}}
                                        {{--                                        <span>JESICA JAMES</span>--}}
                                    </div>
                                    @if(app()->getLocale()=='ar')
                                        <div class="headingblog">
                                            {{$recentBlog->name_ar}}
                                        </div>
                                        <div class="descblog">
                                            {!!  Str::limit($recentBlog->description_ar, 100, '...') !!}
                                        </div>
                                    @else
                                        <div class="headingblog">
                                            {{$recentBlog->name_en}}
                                        </div>
                                        <div class="descblog">
                                            {!!  Str::limit($recentBlog->description_en, 100, '...') !!}
                                        </div>
                                    @endif
                                    <div class="btn-content m-0">
                                        <span class="shine"></span>
                                        <a href="{{ route('web.blog.view', $recentBlog->id) }}">{{__('web.read_more')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- section cta -->
        <section class="p-5 bggray" aria-label="cta">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 centered">
                        <div class="detail">
                            <h3>Get Incredible Decor and Interior Design Now!</h3>
                            <p class="m-0">Let us do what best – to get know you and your unique style.</p>
                        </div>
                    </div>
                    <div class="col-md-5 centered">
                        <div class="btn-content my-4">
                            <span class="shine"></span>
                            <a href="#">{{__('web.read_more')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section cta end -->

    </div>
    <!-- container-wrapper end -->

    <!-- ScrolltoTop -->
    <div id="totop" class="init">
        <i class="fa fa-chevron-up"></i>
    </div>

@endsection

@push('css')

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        .owl-carousel.owl-loaded {
            display: flex;
        }

        .swiper-pagination {
            position: relative;
            margin-top: 6vh; /* Adds spacing between the pagination and service cards */
            text-align: center;
        }

        .swiper {
            width: 100%;
            padding: 0;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .servcices {
            width: 100%;
            max-width: 430px;
            text-align: center;
        }

    </style>

@endpush

@section('js')
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 3, // Number of slides visible at a time
            spaceBetween: 6, // Space between slides in pixels
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: true, // Enable infinite loop
            autoplay: {
                delay: 3000, // Autoplay delay in milliseconds
            },
        });
    </script>

@endsection
