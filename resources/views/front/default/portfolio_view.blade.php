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


        <!-- breadcumb -->
        <section class="breadcumb" aria-label="breadcumb"
                 style="background-image: url({{asset("web/img/breadcumb.jpg")}});">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="main">
                            <div class="bread">
                                <div class="bread-title">Portofolio</div>
                                <div class="bread-subtitle">
                                    <a href="index.html">Home</a>
                                    <span class="spacebread"></span>
                                    <span>Portofolio</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcumb end -->

        <!-- section gallery -->
        <section aria-label="works" id="Gallery">
            <div class="container-fluid">


                <div class="container-fluid">
                    <div class='row p-3-vh'>
                        <!-- left content -->
                        <div >

                            <!-- article -->
                            <article style="margin-inline: auto ">
                                <div class="blog-simple">
                                    <div class="blog-text">
                                        @if(app()->getLocale()=='ar')
                                            <h2><a href="#">{{$project->name_ar}}</a></h2>
                                        @else
                                            <h2><a href="#">{{$project->name_en}}</a></h2>

                                        @endif

                                        {{--                                        <span class="user-post"><i class="ti-user"></i>Jhony Dono</span>--}}
                                        <span class=""><i class="ti-calendar"></i>{{ $project->created_at->format('F j, Y \a\t g:i a') }}</span>


                                        {{--                                <blockquote>--}}
                                        {{--                                    <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>--}}
                                        {{--                                    <small>by <cite>Albert Einstein</cite></small>--}}
                                        {{--                                </blockquote>--}}

                                        {{--                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur--}}
                                        {{--                                </p>--}}

                                        <a href="#"><img class="img-responsive"
                                                         src="{{asset('storage/'.$project->image)}}" alt=""  style="margin-inline: auto "></a>
                                    </div>
                                    <h3>{{__('web.about_the_project')}}</h3>
                                    @if(app()->getLocale()=='ar')
                                        <p>{!! $project->description_ar !!}</p>
                                    @else
                                        <p>{!! $project->description_ar !!}</p>
                                    @endif

                                </div>
                            </article>
                        </div>
                        {{--                        <div class="col-md-12 mt-3 px-md-0">--}}
                        {{--                            <h3>Project gallery</h3>--}}
                        {{--                            <div id="w-gallery-column-4" class="w-gallery-container">--}}

                        {{--                                @foreach($project->projectGallery as $projectGallery)--}}
                        {{--                                    --}}{{--                                        <a class="w-gallery no-border architect furniture" href="img/gallery/1.jpg">--}}
                        {{--                                    --}}{{--                                    <img src="{{asset('storage/'.$project->image)}}" style="height: 45vh" alt="" class="w-gallery-image">--}}

                        {{--                                    <img src="{{asset('storage/'.$projectGallery->images)}}" style="height: 45vh;"--}}
                        {{--                                         alt="" class="w-gallery-image">--}}
                        {{--                                    --}}{{--                                    <div class="content-gallery">--}}
                        {{--                                    --}}{{--                                        <span class="ti-plus"></span>--}}
                        {{--                                    --}}{{--                                    </div>--}}
                        {{--                                    --}}{{--                                        </a>--}}
                        {{--                                    --}}{{--                                        <p>{{$project->description_en}}</p>--}}
                        {{--                                @endforeach--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        <!-- section gallery -->
                        <div class="col-md-12 mt-3 px-md-0">
                            <h3>{{__('web.project_gallery')}}</h3>

                            {{--                        <section class="no-padding" aria-label="gallery">--}}
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 p-0">
                                        <div id="w-gallery-column" class="w-gallery-container">

                                            @foreach($project->projectGallery as $projectGallery)
                                                {{--                                                @dd($projectGallery)--}}
                                                <div class="w-gallery no-border" href="img/gallery/1.jpg"
                                                     style="height: 40vh">
                                                    <img src="{{asset('storage/'.$projectGallery->images)}}" alt=""
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
                            {{--        </section>--}}
                        </div>
                        <!-- project end -->
                    </div>
                </div>
            </div>


            {{--                <div class="row p-3-vh">--}}

            {{--                    <div class="col-12 centered mb-3">--}}
            {{--                        <div class="detailcontent text-center p-0">--}}
            {{--                            <div class="subheading">OUR WORKS</div>--}}
            {{--                            <div class="heading">Best Designs</div>--}}
            {{--                                <div class="heading">{{$project->name_en}}</div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            {{--                    --}}{{--                <!-- filter project -->--}}
            {{--                    --}}{{--                <div class="col-md-12 text-center">--}}
            {{--                    --}}{{--                    <ul id="filter-porto" class="d-block">--}}
            {{--                    --}}{{--                        <li class="filt-projects-w selected" data-project="*">All--}}
            {{--                    --}}{{--                        </li>--}}
            {{--                    --}}{{--                        <li class="filt-projects-w" data-project=".architect">Architecture--}}
            {{--                    --}}{{--                        </li>--}}
            {{--                    --}}{{--                        <li class="filt-projects-w" data-project=".furniture">Furniture--}}
            {{--                    --}}{{--                        </li>--}}
            {{--                    --}}{{--                        <li class="filt-projects-w" data-project=".interior">Interior--}}
            {{--                    --}}{{--                        </li>--}}
            {{--                    --}}{{--                        <li class="filt-projects-w" data-project=".decor">Decor--}}
            {{--                    --}}{{--                        </li>--}}
            {{--                    --}}{{--                    </ul>--}}
            {{--                    --}}{{--                </div>--}}
            {{--                    --}}{{--                <!-- filter project end -->--}}

            <!-- project -->

        </section>
        <!-- section gallery end -->

        <!-- section cta -->
        <section class="p-5 bggray" aria-label="cta">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 centered">
                        <div class="detail">
                            <h3>Get Incredible Decor and Interior Design Now!</h3>
                            <p class="m-0">Let us do what best – to get know you and your unique style.</p>
                        </div>
                    </div>
                    <div class="col-md-4 centered">
                        <div class="btn-content my-4">
                            <span class="shine"></span>
                            <a href="#">Read More</a>
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
