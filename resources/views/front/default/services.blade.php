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
        {{--        <section class="breadcumb" aria-label="breadcumb">--}}
        <section class="breadcumb" aria-label="breadcumb"
                 style="background-image: url({{asset('storage/'.$service->photo)}});">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="main">
                            @if(app()->getLocale()=="ar")
                                <div class="bread">
                                    <div class="bread-title">{{$service->name_ar}}</div>
                                    <div class="bread-subtitle">
                                        <a href="{{route('web.index')}}">{{__('web.home')}}</a>
                                        <span class="spacebread"></span>
                                        <a href="{{route('web.services',1)}}"><span>{{__('web.services')}}</span></a>
                                        <span class="spacebread"></span>
                                        <span>{{$service->name_ar}}</span>
                                    </div>
                                </div>
                            @else
                                <div class="bread">
                                    <div class="bread-title">{{$service->name_en}}</div>
                                    <div class="bread-subtitle">
                                        <a href="{{route('web.index')}}">{{__('web.home')}}</a>
                                        <span class="spacebread"></span>
                                        <span>{{__('web.services')}}</span>
                                        <span class="spacebread"></span>
                                        <span>{{$service->name_en}}</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcumb end -->

        <!-- section -->
        <section aria-label="section">
            <div class="container-fluid">
                <div class='row p-3-vh'>
                    <!-- left content -->
                    <div class="col-md-3">
                        <ul class="sercices-btn">
                            @if(app()->getLocale()=='ar')
                                @foreach($services as $serv)
                                    <li class="services-list">
                                        {{--                                    @dd($service)--}}
                                        @if($serv->id==$service->id)
                                            <a class="active"
                                               href="{{route('web.services',$service->id)}}">{{$service->name_ar}}</a>
                                        @else
                                            <a href="{{route('web.services',$serv->id)}}">{{$serv->name_ar}}</a>
                                        @endif
                                    </li>
                                @endforeach
                            @else
                                @foreach($services as $serv)
                                    <li class="services-list">
                                        {{--                                    @dd($service)--}}
                                        @if($serv->id==$service->id)
                                            <a class="active"
                                               href="{{route('web.services',$service->id)}}">{{$service->name_en}}</a>
                                        @else
                                            <a href="{{route('web.services',$serv->id)}}">{{$serv->name_en}}</a>
                                        @endif
                                    </li>
                                @endforeach
                            @endif

                        </ul>
                    </div>
                    <!-- left content end -->

                    <!-- right content -->
                    <div class="col-md-9">
                        <!-- detailcontent -->
                        <div class="detailcontent p-0">
                            @if(app()->getLocale()=='ar')
                                <div class="subheading">{{$service->serviceGroup->name_ar}}</div>
                                <div class="heading">{{$service->name_ar}}</div>
                            @else
                                <div class="subheading">{{$service->serviceGroup->name_en}}</div>
                                <div class="heading">{{$service->name_en}}</div>
                            @endif


                            <!-- owl img -->
                            <div class="owl-services owl-carousel owl-theme">
                                <div class='item'>
                                    <div class='bg'>
                                        <img
                                            src="{{asset('storage/'.$service->photo)}}"
                                            class="img-fluid"
                                            alt="Imageteam"
                                            style="max-height: 75vh"
                                        />
                                    </div>
                                </div>

                            </div>
                            <!-- owl img end -->
                            @if(app()->getLocale()=='ar')

                                <div class="textdetail">{!! $service->description_ar !!}
                                </div>
                            @else
                                <div class="textdetail">{!! $service->description_en !!}
                                </div>

                            @endif
                            {{--                            <div class="textdetail">--}}
                            {{--                                In design, we bring characteristics of the natural world into built spaces, such as--}}
                            {{--                                water, greenary, and natiural--}}
                            {{--                                light, or elements like wood and stone. Encouraging the use of natural systems and--}}
                            {{--                                processes in design--}}
                            {{--                                allows for exposure to nature, and in turn, these design approaches improve health and--}}
                            {{--                                wellbeing. there are--}}
                            {{--                                a number of possible benefits, including reduced heart rate variability and pulse rates,--}}
                            {{--                                decreased blood--}}
                            {{--                                pressure, and increased activity in our nervous systems, to name a few.--}}

                            {{--                                Overtime, our connections to the natural world diverged in parallel with technological--}}
                            {{--                                developments.--}}
                            {{--                                Advances in the 19th and 20th centuries fundamentally changed how people interact with--}}
                            {{--                                nature.--}}
                            {{--                            </div>--}}
                            {{--                            <div class="textdetail">--}}
                            {{--                                Dining Rooms are a place to gather, to entertain, to connect over good food and--}}
                            {{--                                conversation! We think that no matter what style and size your dining room is, it should--}}
                            {{--                                be a place that welcomes you in, time and time again--}}
                            {{--                            </div>--}}
                            <!-- owl img -->
                            {{--                            <div class="owl-services owl-carousel owl-theme">--}}
                            {{--                                <div class='item'>--}}
                            {{--                                    <div class='bg'>--}}
                            {{--                                        <img--}}
                            {{--                                            src="img/services/3.jpg"--}}
                            {{--                                            class="img-fluid"--}}
                            {{--                                            alt="Imageteam"--}}
                            {{--                                        />--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}

                            {{--                            </div>--}}
                            <!-- owl img end -->
                        </div>
                        <!-- detailcontent end -->
                        {{--                <div class="detailcontent p-0">--}}
                        {{--                    <div class="subheading">How It Works</div>--}}
                        {{--                </div>--}}
                        {{--                <!-- row -->--}}
                        {{--                <div class="row">--}}
                        {{--                    <div class="col-md-4">--}}
                        {{--                        <div class="detailcontent p-0 mt-3">--}}
                        {{--                            <div class="h3 py-2 mt-2">1. Show Your Room</div>--}}
                        {{--                            <div class="textdetail mb-0">Getting started is easy! Use our iOS app to quickly--}}
                        {{--                                scan your room or upload photos to our site.--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="col-md-4">--}}
                        {{--                        <div class="detailcontent p-0 mt-3">--}}
                        {{--                            <div class="h3 py-2 mt-2">2. Get to Know You</div>--}}
                        {{--                            <div class="textdetail mb-0">Interior design is personal so we want to get to know--}}
                        {{--                                you, your space, and who lives there.--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="col-md-4">--}}
                        {{--                        <div class="detailcontent p-0 mt-3">--}}
                        {{--                            <div class="h3 py-2 mt-2">3. Get Your Design</div>--}}
                        {{--                            <div class="textdetail mb-0">Let the fun begin! Our designer will send you an--}}
                        {{--                                interactive, 3D version of your exact room.--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}

                        {{--                </div>--}}
                        <!-- row end -->
                    </div>
                    <!-- right content end -->
            {{--    </div>--}}
            {{--    </div>--}}
        </section>
        <!-- section end -->

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
