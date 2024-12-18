@extends('front.demo.layout.app')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    {{-- Slider  --}}
    <div id="rev_slider_15_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="slider1"
        data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullwidth mode -->
        <div id="rev_slider_15_1" class="rev_slider fullwidthabanner dark-overlay" style="display:none;" data-version="5.4.8.1">
            <ul>
                <!-- SLIDE  -->
                @foreach ($sliders as $item)
                    <li data-index="rs-36" data-transition="fade,slotfade-horizontal" data-slotamount="default,default"
                        data-hideslideonmobile="off" data-easein="Elastic.easeOut,default"
                        data-easeout="Elastic.easeIn,default" data-masterspeed="300,default" data-delay="6010"
                        data-rotate="0,0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                        data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('storage/' . $item->image_ar) }}" alt="" data-bgposition="center center"
                            data-kenburns="on" data-duration="3000" data-ease="Power3.easeOut" data-scalestart="130"
                            data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="15" data-blurend="0"
                            data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg"
                            data-no-retina>
                        <!-- LAYERS -->
                        <div id="rrzm_36" class="rev_row_zone rev_row_zone_middle" style="z-index: 5;">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption  " id="slide-36-layer-2" data-x="" data-y="center"
                                data-voffset="-210" data-width="['auto']" data-height="['auto']" data-type="row"
                                data-columnbreak="3" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+5670","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  " id="slide-36-layer-3" data-x="100" data-y="100"
                                    data-width="['auto']" data-height="['auto']" data-type="column"
                                    data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+5670","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-columnwidth="75%" data-verticalalign="top" data-margintop="[0,0,0,0]"
                                    data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 6; width: 100%;">
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption  tp-no-events   tp-resizeme" id="slide-36-layer-5" data-x=""
                                        data-y="" data-height="['auto']" data-type="text" data-responsive_offset="on"
                                        data-fontsize="['50', '45', '40', '32']"
                                        data-lineheight="['64', '55', '43', '38']"
                                        data-frames='[{"delay":"+0","split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"+2570","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                        data-marginbottom="[30,30,30,30]" data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                        style="z-index: 7; max-width: 930px; white-space: normal; font-size: 60px; line-height: 70px; font-weight: 600; color: #ffffff; letter-spacing: 0px; display: block;pointer-events:none;">
                                        {{ $item->title_en }}
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption   tp-resizeme" id="slide-36-layer-6" data-x=""
                                        data-y="" data-height="['auto']" data-fontsize="['20', '20', '18', '16']"
                                        data-lineheight="['36', '36', '24', '22']" data-type="text"
                                        data-responsive_offset="on"
                                        data-frames='[{"delay":"+2600","speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"+1870","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                        data-marginbottom="[35,35,35,35]" data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                        style="z-index: 8; max-width: 731px; white-space: normal; font-size: 20px; line-height: 36px; font-weight: 400; color: #ffffff; letter-spacing: 0px; display: block;">
                                        {!!  $item->description_en !!}
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption" id="slide-36-layer-10" data-x="" data-y=""
                                        data-width="['auto']" data-height="['auto']" data-type="text"
                                        data-responsive_offset="on"
                                        data-frames='[{"delay":"+3600","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2070","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                        data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                        style="z-index: 9; white-space: normal; display: inline-block;">
                                        <a href="#" class="btn btn-secondary btn--rounded">Learn More</a>
                                    </div>
                                    <!-- LAYER NR. 6 -->
                                    <div class="tp-caption" id="slide-36-layer-11" data-x="" data-y=""
                                        data-width="['auto']" data-height="['auto']" data-type="text"
                                        data-responsive_offset="on"
                                        data-frames='[{"delay":"+3800","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+1870","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                        data-marginbottom="[0,0,0,0]" data-marginleft="[30,30,30,30]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                        style="z-index: 10; white-space: normal; display: inline-block;">
                                        <a href="#" class="btn btn-outline-light btn--rounded">Learn More</a>
                                    </div>
                                </div>
                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption  " id="slide-36-layer-4" data-x="100" data-y="100"
                                    data-width="['auto']" data-height="['auto']" data-type="column"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+5670","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-columnwidth="25%" data-verticalalign="top" data-margintop="[0,0,0,0]"
                                    data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 11; width: 100%;"></div>
                            </div>
                        </div>
                    </li>
                @endforeach

                <!-- SLIDE  -->
                {{-- <li data-index="rs-38" data-transition="boxfade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                    data-delay="6010" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                    data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                    data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="img/slider_bg2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div id="rrzm_38" class="rev_row_zone rev_row_zone_middle" style="z-index: 5;">
                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption  " id="slide-38-layer-2" data-x="" data-y="center"
                            data-voffset="-210" data-width="['auto']" data-height="['auto']" data-type="row"
                            data-columnbreak="3" data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+5610","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                            data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption  " id="slide-38-layer-3" data-x="100" data-y="100"
                                data-width="['auto']" data-height="['auto']" data-type="column"
                                data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+5610","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columnwidth="75%" data-verticalalign="top" data-margintop="[0,0,0,0]"
                                data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; width: 100%;">
                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption  tp-no-events   tp-resizeme" id="slide-38-layer-5" data-x=""
                                    data-y="" data-height="['auto']" data-type="text" data-responsive_offset="on"
                                    data-fontsize="['50', '45', '40', '32']" data-lineheight="['64', '55', '43', '38']"
                                    data-frames='[{"delay":"+0","split":"chars","splitdelay":0.1,"speed":500,"split_direction":"forward","frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"+2610","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[25,25,25,25]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 7; max-width: 930px; white-space: normal; font-size: 60px; line-height: 70px; font-weight: 600; color: #ffffff; letter-spacing: 0px; display: block;pointer-events:none;">
                                    Best Solution for <br>
                                    Your Business
                                </div>
                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption   tp-resizeme" id="slide-38-layer-6" data-x=""
                                    data-y="" data-height="['auto']" data-type="text" data-responsive_offset="on"
                                    data-fontsize="['20', '20', '18', '16']" data-lineheight="['36', '36', '24', '22']"
                                    data-frames='[{"delay":"+2430","speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"+1980","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[35,35,35,35]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 8; max-width: 731px; white-space: normal; font-size: 20px; line-height: 36px; font-weight: 400; color: #ffffff; letter-spacing: 0px; display: block;">
                                    We activate brands through cultural insight strategic <br> vision, and the motion
                                    across.
                                </div>
                                <!-- LAYER NR. 12 -->
                                <div class="tp-caption" id="slide-38-layer-8" data-x="" data-y=""
                                    data-width="['auto']" data-height="['auto']" data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+2910","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2700","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 9; white-space: normal; display: inline-block;">
                                    <a href="#" class="btn btn-secondary btn--rounded">Learn More</a>
                                </div>
                                <!-- LAYER NR. 13 -->
                                <div class="tp-caption" id="slide-38-layer-9" data-x="5" data-y="5"
                                    data-width="['auto']" data-height="['auto']" data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+3050","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2560","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[30,30,30,30]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 10; white-space: normal; display: inline-block;">
                                    <a href="#" class="btn btn-outline-light btn--rounded">Learn More</a>
                                </div>
                            </div>
                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption  " id="slide-38-layer-4" data-x="100" data-y="100"
                                data-width="['auto']" data-height="['auto']" data-type="column"
                                data-responsive_offset="on"
                                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+5610","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-columnwidth="25%" data-verticalalign="top" data-margintop="[0,0,0,0]"
                                data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 11; width: 100%;"></div>
                        </div>
                    </div>
                </li> --}}
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <section class="p-top-100 p-bottom-40" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-bottom-50">
                        <div class="divider text-center">
                            <h1 class="color-dark">Expertise Areas</h1>
                            <p class="mx-auto">Investiga tiones demonstr averunt lectres legere me lius quod qua legunt
                                saepius Clarias estre etiam pro cessus dynamicus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-style-ten">
            <div class="container">
                <div class="row">
                    @foreach ($services as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="card--seven card--ten">
                                <figure>
                                    <img src="{{ asset('storage/' . $item->photo) }}" alt="">
                                </figure>
                                <div class="card-body px-0 pb-0">
                                    <h6><a href="">{{ $item->name_en }}</a></h6>
                                    <p>{!! $item->description_en  !!}</p>
                                    <a href="" class="btn btn-outline-primary">See Details</a>
                                </div>
                            </div><!-- End: .card -->
                        </div>
                    @endforeach
                </div><!-- ends: .card-style-row -->
            </div>
        </div><!-- ends: .card-style-nine -->
    </section>
    <!-- ends: .section-padding -->

    {{-- #blogs  --}}
    <section class="p-top-100 p-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-bottom-50">
                        <div class="divider text-center">
                            <h1>Company News</h1>
                            <p class="mx-auto">Investiga tiones demonstr averunt lectres legere me lius quod qua legunt
                                saepius Clarias estre etiam dynamicus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-style-two">
            <div class="container">
                <div class="row">
                    @foreach ($blogs as $item)
                        @php
                            $createdDate = Carbon::parse($item->created_at);
                            $day = $createdDate->day;
                            $month = $createdDate->format('F');
                            $year = $createdDate->year;
                            $fullDate = $createdDate->format('F j, Y');
                        @endphp
                        <div class="col-lg-4 col-md-6">
                            <div class="card card-shadow card-two">
                                <figure>
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                </figure>
                                <div class="card-body">
                                    <h6><a href="">{{ $item->name_en }}</a></h6>
                                    <div>
                                        <p
                                            style="width : 100%; overflow: hidden; text-overflow: ellipsis !important; white-space: nowrap;">
                                            {!! $item->description_en !!}</p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <ul class="d-flex justify-content-between">
                                        <li><a href="">{{ $item->name_en }}</a>
                                        <li style="font-size: 0.85rem; color: #777;">{{ $fullDate }}</li>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- Ends: .card -->
                        </div>
                    @endforeach
                </div><!-- ends: .row -->
            </div>
        </div><!-- ends: .card-style-two -->
    </section>
    {{-- --------------- --}}
    <section class="p-top-100 p-bottom-105" id="blogs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-bottom-50">
                        <div class="divider section-title-simple">
                            <h1>Latest Industry News</h1>
                            <p class="m-auto mb-0">Investiga tiones demonstr averunt lectres legere me lius quod qua legunt
                                saepius estre etiam cessus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-carousel-one owl-carousel">
                        @foreach ($blogs as $item)
                            @php
                                $createdDate = Carbon::parse($item->created_at);
                                $day = $createdDate->day;
                                $month = $createdDate->format('F');
                                $year = $createdDate->year;
                                $fullDate = $createdDate->format('F j, Y');
                            @endphp
                            <div class="carousel-single">
                                <div class="post-single">
                                    <div class="post-meta">
                                        <ul>
                                            <li><span class="bg-primary">{{ $fullDate }}</span></li>
                                            <li>
                                                @forelse ($item->categories as $category)
                                                    <a href=""
                                                        class="color-secondary">{{ $category->title_en }}</a>
                                                @empty
                                                    <span>Not available</span>
                                                @endforelse
                                            </li>
                                        </ul>
                                    </div>
                                    <h6><a href="" class="color-dark">{{ $item->name_en }}</a></h6>
                                    <div style="height: 150px; overflow: hidden; text-overflow: ellipsis;">
                                        <p>{!! $item->description_en !!}</p>
                                    </div>
                                    <div class="post-bottom">
                                        <img src="img/author-thumb1.png" alt="" class="rounded-circle">
                                        <a href=""><span>Robert Miller</span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ------------------- --}}

    <div class="p-top-100 p-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5">
                        <div class="divider text-center">
                            <h1 class="color-dark">Featured Projects</h1>
                            <p class="mx-auto">Investiga tiones demonstr averunt lectres legere me lius quod qua legunt
                                saepius Clarias estre etiam pro cessus dynamicus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filter-sort">
                            <ul id="card_filter">
                                <li data-uk-filter="0"class="active">All</li>
                                @foreach ($projectCats as $item)
                                    <li data-uk-filter="{{ $item->id }}">{{ $item->name_en }}</li>
                                @endforeach
                            </ul>
                        </div><!-- ends: .filter-sort -->
                    </div><!-- ends: .col-lg-12 -->
                </div>
                <div class="row" data-uk-grid="{controls: '#card_filter'}">
                    @foreach ($projects as $item)
                        <div data-uk-filter="0" class="col-lg-4 col-md-6">
                            <div class="card card-shadow card-one">
                                <figure>
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                    <figcaption>
                                        <a href=""><i class="la la-link"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <h6 class="card-subtitle color-secondary"><a href="">{{ $item->name_en }}</a>
                                    </h6>
                                    <p
                                        style="width : 100%; overflow: hidden; text-overflow: ellipsis !important; white-space: nowrap;">
                                        {!! $item->description_en !!}</p>
                                </div>
                            </div><!-- Ends: .card -->
                        </div>
                    @endforeach

                    @foreach ($projectCats as $item)
                        @foreach ($item->projects as $project)
                            <div data-uk-filter="{{ $item->id }}" class="col-lg-4 col-md-6">
                                <div class="card card-shadow card-one">
                                    <figure>
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="">
                                        <figcaption>
                                            <a href=""><i class="la la-link"></i></a>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h6 class="card-subtitle color-secondary"><a
                                                href="">{{ $item->name_en }}</a>
                                        </h6>
                                        <p
                                            style="width : 100%; overflow: hidden; text-overflow: ellipsis !important; white-space: nowrap;">
                                            {!! $item->description_en !!}</p>

                                    </div>
                                </div><!-- Ends: .card -->
                            </div>
                        @endforeach
                    @endforeach
                </div><!-- ends: .row -->
            </div>
        </div><!-- ends: .filter-wrapper -->
    </div>
    <!-- ends: .section-padding2 -->

    <div class="counter counter--3 biz_overlay overlay--primary">
        <div class="bg_image_holder"><img src="img/cbg2.jpg" alt=""></div>
        <div class="container content_above">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-around flex-wrap">
                        <div class="counter_single">
                            <div class="icon">
                                <span class="la la-folder-open-o"></span>
                            </div>
                            <p class="value count_up">385</p>
                            <p class="title">Project completed</p>
                        </div><!-- end: .counter_single -->
                        <div class="counter_single">
                            <div class="icon">
                                <span class="la la-headphones"></span>
                            </div>
                            <p class="value count_up">260</p>
                            <p class="title">Consultant</p>
                        </div><!-- end: .counter_single -->
                        <div class="counter_single">
                            <div class="icon">
                                <span class="la la-trophy"></span>
                            </div>
                            <p class="value count_up">150</p>
                            <p class="title">Award Winning</p>
                        </div><!-- end: .counter_single -->
                        <div class="counter_single">
                            <div class="icon">
                                <span class="la la-user-plus"></span>
                            </div>
                            <p class="value count_up">100</p>
                            <p class="title">Satisfied Customers</p>
                        </div><!-- end: .counter_single -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ends: .counter -->

    <div class="section-split p-top-100 p-bottom-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="m-bottom-55">
                        <div class="divider divider-simple text-left">
                            <h2>Tizara Awards</h2>
                            <p>Investiga tiones demonstr averunt lectres legere me lius quod waqua legunt saepius.</p>
                        </div>
                    </div>
                    <div class="logo-carousel-two owl-carousel">
                        <div class="carousel-single">
                            <div class="logo-box">
                                <img src="img/cl14.png" alt="">
                            </div><!-- ends: .logo-box -->
                            <div class="logo-box">
                                <img src="img/cl15.png" alt="">
                            </div><!-- ends: .logo-box -->
                        </div><!-- end: .carousel-single -->
                        <div class="carousel-single">
                            <div class="logo-box">
                                <img src="img/cl16.png" alt="">
                            </div><!-- ends: .logo-box -->
                            <div class="logo-box">
                                <img src="img/cl17.png" alt="">
                            </div><!-- ends: .logo-box -->
                        </div><!-- end: .carousel-single -->
                        <div class="carousel-single">
                            <div class="logo-box">
                                <img src="img/cl14.png" alt="">
                            </div><!-- ends: .logo-box -->
                            <div class="logo-box">
                                <img src="img/cl15.png" alt="">
                            </div><!-- ends: .logo-box -->
                        </div><!-- end: .carousel-single -->
                        <div class="carousel-single">
                            <div class="logo-box">
                                <img src="img/cl16.png" alt="">
                            </div><!-- ends: .logo-box -->
                            <div class="logo-box">
                                <img src="img/cl17.png" alt="">
                            </div><!-- ends: .logo-box -->
                        </div><!-- end: .carousel-single -->
                        <div class="carousel-single">
                            <div class="logo-box">
                                <img src="img/cl14.png" alt="">
                            </div><!-- ends: .logo-box -->
                            <div class="logo-box">
                                <img src="img/cl15.png" alt="">
                            </div><!-- ends: .logo-box -->
                        </div><!-- end: .carousel-single -->
                    </div>
                </div><!-- ends: .col-lg-5 -->
                <div class="col-lg-5 offset-lg-2 skills">
                    <div class="m-bottom-55">
                        <div class="divider divider-simple text-left">
                            <h2>Professional Skills</h2>
                            <p>Investiga tiones demonstr averunt lectres legere me lius quod waqua legunt.</p>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <div class="labels d-flex justify-content-between">
                            <span>Business</span>
                            <span>70%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- ends: .progress -->
                    </div><!-- ends: .progress-wrapper -->
                    <div class="progress-wrapper">
                        <div class="labels d-flex justify-content-between">
                            <span>Corporate</span>
                            <span>85%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- ends: .progress -->
                    </div><!-- ends: .progress-wrapper -->
                    <div class="progress-wrapper">
                        <div class="labels d-flex justify-content-between">
                            <span>Finance</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- ends: .progress -->
                    </div><!-- ends: .progress-wrapper -->
                    <div class="progress-wrapper">
                        <div class="labels d-flex justify-content-between">
                            <span>Strategy</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- ends: .progress -->
                    </div><!-- ends: .progress-wrapper -->
                </div><!-- ends: .col-lg-5 -->
            </div>
        </div>
    </div>
    <!-- ends: .section-split -->

    <section class="carousel-wrapper tc-four-wrapper bg-primary" id="Testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-carousel-four owl-carousel">
                        @foreach ($testimonials as $item)
                            <div class="carousel-single text-center">
                                <img src="{{ asset('storage/' . $item->photo) }}" alt="" class="rounded-circle">
                                <p class="author-spec"><strong>{{ $item->name }},</strong>
                                    <span>{{ $item->position }}</span>
                                </p>
                                <div class="author-text">
                                    <p>{{ $item->text }}</p>
                                </div>
                            </div><!-- end: .carousel-single -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block section-bg content--block8 p-top-110 p-bottom-110">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5 margin-md-60">
                    <div class="divider text-left">
                        <span class="subtext">Annual Report</span>
                        <h3>From Strategy to Results</h3>
                        <p>Investiga tiones demonstr averunt lectores legere me lius quod ii qua legunt saepius.
                            Claritas est etiam pro cessus dynamicus quipro keds sequitur mutay.</p>
                    </div>
                    <div class="m-top-30">
                        <ul class="bullet--list1">
                            <li class="bullet_list"><strong class="color-dark">Professional -</strong> Delivers
                                solutions that help drive</li>
                            <li class="bullet_list"><strong class="color-dark">Business -</strong> Human capital
                                research analytics</li>
                            <li class="bullet_list"><strong class="color-dark">Services -</strong> Complex problems
                                bringing an approach</li>
                            <li class="bullet_list"><strong class="color-dark">Strategy -</strong> Works with senior
                                executives to help them</li>
                        </ul><!-- ends: .bullet--list1 -->
                    </div>
                </div><!-- ends: .col-lg-5 -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="bar-chart_wrap cardify">
                        <canvas class="bar-chart"></canvas>
                        <div class="bar-legend legend"></div>
                    </div><!-- End: .bar-chart_wrap -->
                </div><!-- ends: .col-lg-6 -->
            </div>
        </div>
    </section>
    <!-- ends: .content-block -->

    <div class="p-top-35" style="background : linear-gradient(to right, #413aa4, #06b590);">
        <div id="rev_slider_36_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="slider9"
            data-source="gallery"
            style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.8.1 fullwidth mode -->
            <div id="rev_slider_36_1" class="rev_slider without_overlay fullwidthabanner" style="display:none;"
                data-version="5.4.8.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-72" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                        data-delay="8970" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                        data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                        data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="img/transparent.png" data-bgcolor='' alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                            data-no-retina>
                        <!-- LAYERS -->
                        <div id="rrzm_72" class="rev_row_zone rev_row_zone_middle" style="z-index: 5;">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption  " id="slide-72-layer-1" data-x="" data-y="center"
                                data-voffset="" data-width="['auto']" data-height="['auto']" data-type="row"
                                data-columnbreak="3" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap; font-size: 17px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption  " id="slide-72-layer-2" data-x="100" data-y="100"
                                    data-width="['auto']" data-height="['auto']" data-type="column"
                                    data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-columnwidth="50%" data-verticalalign="top" data-margintop="[0,0,0,0]"
                                    data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 6; width: 100%;">
                                    <!-- LAYER NR. 3 -->
                                    <h1 class="tp-caption   tp-resizeme" id="slide-72-layer-4" data-x=""
                                        data-y="" data-width="['auto']" data-height="['auto']" data-type="text"
                                        data-responsive_offset="on" data-fontsize="['48', '44', '40', '38']"
                                        data-lineheight="['60', '50', '48', '44']"
                                        data-frames='[{"delay":"+10","split":"chars","splitdelay":0.05,"speed":1040,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                        data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                        style="z-index: 7; white-space: normal; font-size: 48px; line-height: 60px; font-weight: 600; color: #fff; letter-spacing: 0px; display: block;">
                                        Make Business <br>
                                        with Experienced <br>
                                        <span style="color: #00c18d;">Partners</span>
                                    </h1>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption   tp-resizeme" id="slide-72-layer-5" data-x=""
                                        data-y="" data-width="['auto']" data-height="['auto']" data-type="text"
                                        data-responsive_offset="on" data-fontsize="['17', '17', '17', '16']"
                                        data-lineheight="['32', '32', '32', '22']"
                                        data-frames='[{"delay":"+1550","speed":1420,"sfxcolor":"#ffffff","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[35,35,35,35]" data-marginright="[0,0,0,0]"
                                        data-marginbottom="[35,35,35,35]" data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                        style="z-index: 8; white-space: normal; font-size: 17px; line-height: 32px; font-weight: 400; color: rgba(255,255,255,0.7); letter-spacing: 0px; display: block;">
                                        Deserunt dolore voluptatem assumenda quae possimus sunt dignissimos tempora officia.
                                        Lorem ipsum dolor sit amet
                                        consectetur adipisicing dolore.
                                    </div>
                                    <!-- LAYER NR. 6 -->
                                    <div class="tp-caption" id="slide-72-layer-6" data-x="" data-y=""
                                        data-width="['auto']" data-height="['auto']" data-type="text"
                                        data-responsive_offset="on"
                                        data-frames='[{"delay":"+3520","speed":560,"frame":"0","from":"x:200px;skX:-85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                        data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                        style="z-index: 9; display: inline-block;">
                                        <a href="#" class="btn btn-secondary">Explore More</a>
                                    </div>
                                </div>
                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption  " id="slide-72-layer-3" data-x="100" data-y="100"
                                    data-width="['auto']" data-height="['auto']"
                                    data-visibility="['on', 'off', 'off', 'off']" data-type="column"
                                    data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-columnwidth="50%" data-verticalalign="top" data-margintop="[0,0,0,0]"
                                    data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                    data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 7; width: 100%;"></div>
                            </div>
                        </div>
                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-72-layer-7" data-x="right"
                            data-hoffset="-180" data-y="center" data-voffset="0"
                            data-width="['none','none','none','none']" data-height="['none','none','none','none']"
                            data-visibility="['on','on','on','off']" data-type="image" data-responsive_offset="on"
                            data-frames='[{"delay":4230,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 1;"><img src="img/slider_2.png" alt="" data-ww="800px"
                                data-hh="664px" data-no-retina></div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>

    <section class="p-top-70 p-bottom-100 border-bottom clients-logo-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-four owl-carousel">
                        @foreach ($partners as $item)
                            <div class="carousel-single">
                                <img src="{{ asset('storage/' . $item->photo) }}" alt="">
                            </div><!-- ends: .carousel-single -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ends: clients logo area -->

    <section class="cta-wrapper-sm cta--seven bgimage biz_overlay overlay--secondary">
        <div class="bg_image_holder">
            <img src="img/cta3.png" alt="">
        </div>
        <div class="container content_above">
            <div class="row d-flex align-items-center">
                <div class="col-lg-9">
                    <p class="m-0 color-light">Are you ready to start your business?</p>
                </div>
                <div class="col-lg-3">
                    <div class="action-btn">
                        <a href="" class="btn btn-light">Get a quote</a>
                    </div>
                </div>
            </div><!-- .row -->
        </div>
    </section>
    <!-- ends: .cta-wrapper-sm -->
@endsection
