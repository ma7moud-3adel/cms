@extends('front.demo.layout.app')
@section('content')
    <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay">
        <div class="bg_image_holder">
            <img src="img/breadbg.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                        <h4 class="page_title">About Us</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-bottom-30">
                                <li class="breadcrumb-item"><a href="{{ route('demo.index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div><!-- ends: .row -->
        </div>
    </section><!-- ends: .breadcrumb_area -->
    <section class="about-links">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="d-flex justify-content-center">
                        <li><a href="about-two.html" class="active">About Us</a></li>
                        <li><a href="history.html">Our History</a></li>
                        <li><a href="our-values.html">Our Values</a></li>
                        <li><a href="business-conduct.html">Business Conduct</a></li>
                        <li><a href="our-clients.html">Our Clients</a></li>
                        <li><a href="our-locations.html">Our Locations</a></li>
                        <li><a href="success-story.html">Success Story</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- ends: .about-links -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 margin-md-60">
                    <div class="m-bottom-35">
                        <div class="divider divider-simple text-left">
                            <h2 class="m-bottom-20">Company Overview</h2>
                        </div>
                    </div>
                    <p>Investiga tiones demonstr averunt lectores legere me lius quod ii qua legunt saepius. Claritas
                        est etiam pro cessus dynamicus, qui sequitur mutaety tion em consu etudium awquod he legunt
                        saepius clary tyitas Investig atifonesw. tionem consu etudium.<br> Investig ationes demons trave
                        runt lectores legere liusry awquod he legunt saepius clary tyitas Investig atifonesw.</p>
                    <button type="button" class="btn btn-secondary btn-icon icon-left m-top-30"><i class="la la-file"></i>
                        Company Brochure
                    </button>
                </div><!-- ends: .col-lg-5 -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="video-single">
                        <figure>
                            <div class="v_img">
                                <img src="img/simg-2.jpg" alt="" class="rounded">
                            </div>
                            <figcaption
                                class="d-flex justify-content-center align-items-center shape-wrapper img-shape-two">
                                <a href="https://www.youtube.com/watch?v=omaTcIbwt9c"
                                    class="video-iframe play-btn play-btn--lg play-btn--primary"><img
                                        src="img/svg/play-btn.svg" alt="" class="svg"></a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .video-single -->
                </div><!-- ends: .col-lg-6 -->
            </div><!-- ends: .row -->
        </div>
    </section><!-- ends: section -->
    <div class="counter counter--7 biz_overlay overlay--primary">
        <div class="bg_image_holder"><img src="img/cbg5.jpg" alt=""></div>
        <div class="container content_above">
            <div class="row align-items-center">
                <div class="col-md-5 margin-md-60">
                    <div class="counter_left_content">
                        <h4>Key Figures</h4>
                        <p>Investiga tiones demonstr averunt lectres legere me lius quod ii qua legunt saepius. Clarias
                            est
                            etiam pro cessus dynamicus, qui sequitur mutaety tionem consu etudium
                            Investig ationes demons trave.</p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="counter_single">
                                <p class="value count_up">520</p>
                                <p class="title">USD Revenue</p>
                            </div><!-- end: .counter_single -->
                        </div>
                        <div class="col-sm-6">
                            <div class="counter_single">
                                <p class="value count_up">478</p>
                                <p class="title">USD Assets</p>
                            </div><!-- end: .counter_single -->
                        </div>
                        <div class="col-sm-6">
                            <div class="counter_single">
                                <p class="value count_up">980</p>
                                <p class="title">Employees</p>
                            </div><!-- end: .counter_single -->
                        </div>
                        <div class="col-sm-6">
                            <div class="counter_single">
                                <p class="value count_up">257</p>
                                <p class="title">USD Net Income</p>
                            </div><!-- end: .counter_single -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ends: .counter -->
    <section class="section-bg p-top-100 p-bottom-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 margin-md-60">
                    <div class="m-bottom-30">
                        <div class="divider divider-simple text-left">
                            <h2 class="m-bottom-20">Tizara Mission</h2>
                        </div>
                    </div>
                    <p>Investiga tiones demonstr averunt lectres legere melius quodqua legunt saepius. Clarias kest
                        etiam pro cessus dynamicus squitur mutaety tion em consum etudium. Investig ationes demons trave
                        huerunt lectores legere liusry. Investiga tiones demonstr averunt.</p>
                    <div class="m-top-30">
                        <ul class="arrow--list2">
                            <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i
                                        class="la la-angle-right"></i></span> Client-Focused</li>
                            <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i
                                        class="la la-angle-right"></i></span> Leadership</li>
                            <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i
                                        class="la la-angle-right"></i></span> Execution Excellencr</li>
                            <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i
                                        class="la la-angle-right"></i></span> Aspiration</li>
                        </ul>
                    </div>
                </div><!-- ends: .col-lg-6 -->
                <div class="col-lg-6">
                    <div class="m-bottom-30">
                        <div class="divider divider-simple text-left">
                            <h2 class="m-bottom-20">Tizara Vision</h2>
                        </div>
                    </div>
                    <p>Investiga tiones demonstr averunt lectres legere melius quodqua legunt saepius. Clarias kest
                        etiam pro cessus dynamicus squitur mutaety tion em consum etudium. Investig ationes demons trave
                        huerunt lectores legere liusry. Investiga tiones demonstr averunt.</p>
                    <div class="m-top-30">
                        <ul class="arrow--list2">
                            <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i
                                        class="la la-angle-right"></i></span> Client-Focused</li>
                            <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i
                                        class="la la-angle-right"></i></span> Leadership</li>
                            <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i
                                        class="la la-angle-right"></i></span> Execution Excellencr</li>
                            <li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i
                                        class="la la-angle-right"></i></span> Aspiration</li>
                        </ul>
                    </div>
                </div><!-- ends: .col-lg-6 -->
            </div>
        </div>
    </section><!-- ends: section -->
    <section class="p-top-100 p-bottom-40">
        <div class="m-bottom-55">
            <div class="divider text-center m-bottom-50">
                <h2 class="color-dark m-0">Why Choose Us</h2>
            </div>
        </div>
        <div class="icon-boxes icon-box--six">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-thumbs-up"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Valuable Ideas</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-bar-chart"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Industry Experience</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-money"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Budget Friendly</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-pencil-square"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Investment Planning</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-level-up"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Business Growth</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-square-sm"><i class="la la-lightbulb-o"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Financial Planning</h6>
                                <p>Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                </div><!-- ends: .row -->
            </div>
        </div><!-- ends: .icon-boxes -->
    </section><!-- ends: section -->
    <section class="p-top-105 p-bottom-65">
        <div class="m-bottom-40">
            <div class="divider text-center">
                <h1>Business Experts</h1>
                <p class="mx-auto"></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-carousel-one owl-carousel">
                        <div class="carousel-single">
                            <div class="card card-shadow card--team1">
                                <div class="card-body text-center">
                                    <img src="img/t1.jpg" alt="" class="rounded-circle">
                                    <h6><a href="team-single.html">Jane Shades</a></h6>
                                    <span class="team-designation">CEO &amp; Founder</span>
                                    <ul class="team-social d-flex justify-content-center">
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div><!-- End: .card -->
                        </div><!-- ends: .carousel-single -->
                        <div class="carousel-single">
                            <div class="card card-shadow card--team1">
                                <div class="card-body text-center">
                                    <img src="img/t2.jpg" alt="" class="rounded-circle">
                                    <h6><a href="team-single.html">Nick Price</a></h6>
                                    <span class="team-designation">Business Expert</span>
                                    <ul class="team-social d-flex justify-content-center">
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div><!-- End: .card -->
                        </div><!-- ends: .carousel-single -->
                        <div class="carousel-single">
                            <div class="card card-shadow card--team1">
                                <div class="card-body text-center">
                                    <img src="img/t3.jpg" alt="" class="rounded-circle">
                                    <h6><a href="team-single.html">Bob Andrews</a></h6>
                                    <span class="team-designation">Financial Expert</span>
                                    <ul class="team-social d-flex justify-content-center">
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div><!-- End: .card -->
                        </div><!-- ends: .carousel-single -->
                        <div class="carousel-single">
                            <div class="card card-shadow card--team1">
                                <div class="card-body text-center">
                                    <img src="img/t1.jpg" alt="" class="rounded-circle">
                                    <h6><a href="team-single.html">Jane Shades</a></h6>
                                    <span class="team-designation">CEO &amp; Founder</span>
                                    <ul class="team-social d-flex justify-content-center">
                                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div><!-- End: .card -->
                        </div><!-- ends: .carousel-single -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end: section -->
@endsection
