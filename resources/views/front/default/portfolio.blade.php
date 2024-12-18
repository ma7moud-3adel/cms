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
        <section class="breadcumb" aria-label="breadcumb" style="background-image: url({{asset('/web/img/breadcumb.jpg')}});">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="main">
                            <div class="bread">
                                <div class="bread-title">{{__('web.portfolio')}}</div>
                                <div class="bread-subtitle">
                                    <a href="{{route('web.index')}}">{{__('web.home')}}</a>
                                    <span class="spacebread"></span>
                                    <span>{{__('web.portfolio')}}</span>
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
                <div class="row p-3-vh">

                    <div class="col-12 centered mb-3">
                        <div class="detailcontent text-center p-0">
{{--                            <div class="subheading">{{__('web.our_works')}}</div>--}}
                            <div class="heading">{{__('web.our_works')}}</div>
                        </div>
                    </div>

                    {{--                <!-- filter project -->--}}
                    {{--                <div class="col-md-12 text-center">--}}
                    {{--                    <ul id="filter-porto" class="d-block">--}}
                    {{--                        <li class="filt-projects-w selected" data-project="*">All--}}
                    {{--                        </li>--}}
                    {{--                        <li class="filt-projects-w" data-project=".architect">Architecture--}}
                    {{--                        </li>--}}
                    {{--                        <li class="filt-projects-w" data-project=".furniture">Furniture--}}
                    {{--                        </li>--}}
                    {{--                        <li class="filt-projects-w" data-project=".interior">Interior--}}
                    {{--                        </li>--}}
                    {{--                        <li class="filt-projects-w" data-project=".decor">Decor--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                    {{--                </div>--}}
                    {{--                <!-- filter project end -->--}}

                    <!-- project -->
                    <div class="col-md-12 mt-3 px-md-0">
                        <div id="w-gallery-column-4" class="w-gallery-container" >
                            @foreach($projects as $project)
                                <a class="w-gallery no-border architect furniture" href="{{route('web.portfolio.view',$project->id)}}">
                                    <img src="{{asset('storage/'.$project->image)}}" style="height: 45vh" alt="" class="w-gallery-image">
                                    <div class="content-gallery">
                                        <span class="ti-plus"></span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- project end -->
                </div>
            </div>
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
