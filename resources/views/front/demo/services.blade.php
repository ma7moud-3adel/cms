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
                        <h4 class="page_title">Our Services</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-bottom-30">
                                <li class="breadcrumb-item"><a href="{{ route('demo.index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div><!-- ends: .row -->
        </div>
    </section><!-- ends: .breadcrumb_area -->

    <section class="project-grid-3 section-padding section-bg">
        <div class="card--one">
            <div class="container">
                <div class="row">
                    @foreach ($services as $item)
                        <div class="col-lg-4 col-sm-6">
                            <div class="card card-shadow card-one">
                                <figure>
                                    <img src="{{ asset('storage/' . $item->photo) }}" alt="">
                                    <figcaption>
                                        <a href="{{ route('demo.serviceSingle', $item->id) }}"><i
                                                class="la la-link"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <p class="card-subtitle color-secondary">{{ $item->serviceGroup->name_en }}</p>
                                    <h6><a href="{{ route('demo.serviceSingle', $item->id) }}">{{ $item->name_en }}</a></h6>
                                </div>
                            </div><!-- Ends: .card -->
                        </div><!-- ends: .col-lg-4 -->
                    @endforeach
                </div>
            </div>
        </div>
    </section><!-- ends: section -->

    <section class="p-top-50 p-bottom-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 margin-md-60">
                    <div class="m-bottom-30">
                        <div class="divider text-left">
                            <h2>Our Extra-ordinary Services</h2>
                            <p class="mx-auto"></p>
                        </div>
                    </div>
                    <p>Investiga tiones demonstr averunt lectores legere me lius quod ii qua legunt saepius. Claritas est
                        etiam pro cessus dynamicus, qui sequitur mutationem consuetudium sed imperdiet.</p>
                    <ul class="bullet--list1 m-top-25">
                        <li class="bullet_list"><strong class="color-dark">Professional -</strong> Delivers solutions that
                            help drive</li>
                        <li class="bullet_list"><strong class="color-dark">Business -</strong> Human capital research
                            analytics</li>
                        <li class="bullet_list"><strong class="color-dark">Services -</strong> Complex problems bringing an
                            approach</li>
                    </ul>
                </div><!-- ends: .col-lg-6 -->
                <div class="col-lg-6">
                    <div class="cardify text-box bg-gradient m-top-15">
                        <p>Our focus areas are on global standardization and harmonization of business processes,
                            reorganization of marketing and customer. We help all stakeholders in Postal, Transportation.
                        </p>
                    </div>
                </div><!-- ends: .col-lg-6 -->
            </div>
        </div>
    </section><!-- ends: section -->
    <section class="section-bg p-top-100 p-bottom-40">
        <div class="m-bottom-50 p-left-15 p-right-15">
            <div class="divider text-center">
                <h1>Our Services Include</h1>
                <p class="mx-auto"></p>
            </div>
        </div>
        <div class="icon-boxes icon-box--four">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-rounded-sm"><i class="la la-thumbs-up"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Valuable Ideas</h6>
                                <p>Investig ationes demons travge vunt lectores legere lyrus quodk legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-rounded-sm"><i class="la la-bar-chart"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Industry Experience</h6>
                                <p>Investig ationes demons travge vunt lectores legere lyrus quodk legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-rounded-sm"><i class="la la-money"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Budget Friendly</h6>
                                <p>Investig ationes demons travge vunt lectores legere lyrus quodk legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-rounded-sm"><i class="la la-area-chart"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Digital Strategy</h6>
                                <p>Investig ationes demons travge vunt lectores legere lyrus quodk legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-rounded-sm"><i class="la la-sun-o"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Technology Strategy</h6>
                                <p>Investig ationes demons travge vunt lectores legere lyrus quodk legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box-four d-flex">
                            <div class="box-icon">
                                <span class="icon-rounded-sm"><i class="la la-shopping-cart"></i></span>
                            </div>
                            <div class="box-content">
                                <h6>Operational Analytics</h6>
                                <p>Investig ationes demons travge vunt lectores legere lyrus quodk legunt saepius claritas
                                    est.</p>
                            </div>
                        </div><!-- ends: .icon-box -->
                    </div><!-- ends: .col-lg-4 -->
                </div>
            </div>
        </div><!-- ends: .icon-boxes -->
    </section><!-- ends: section -->
    <section class="p-top-100 p-bottom-110">
        <div class="m-bottom-50 p-left-15 p-right-15">
            <div class="divider text-center">
                <h1>How We Can Help You</h1>
                <p class="mx-auto"></p>
            </div>
        </div>
        <div class="accordion-styles accordion--one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion accordion_one" id="accordion_one">
                            <div class="accordion-single">
                                <div class="accordion-heading" id="headingOne">
                                    <h6 class="mb-0">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Digital Ecosystem Management - The New Way for Insurers to Grow
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion_one">
                                    <div class="accordion-contents">
                                        <p>Investiga tiones demonstr averun lectores legere melius quod kequa legunt
                                            saepius. Claritas est
                                            etiam pro cessus dynamicus qui sequitur mutatin onem consuetudium. Investiga
                                            tiones demonstr
                                            averunt lectores legere me liusked quod kequa legunt saepius. Claritas est etiam
                                            pro cessus.
                                            Sequitur mutatin onem consuetudium.</p>
                                    </div>
                                </div><!-- Ends: .collapseOne -->
                            </div><!-- Ends: .accordion-single -->
                            <div class="accordion-single">
                                <div class="accordion-heading" id="headingTwo">
                                    <h6 class="mb-0">
                                        <a href="#" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Digitalization and Regulation Drive Tejarat Agenda
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion_one">
                                    <div class="accordion-contents">
                                        <p>Investiga tiones demonstr averun lectores legere melius quod kequa legunt
                                            saepius. Claritas est
                                            etiam pro cessus dynamicus qui sequitur mutatin onem consuetudium. Investiga
                                            tiones demonstr
                                            averunt lectores legere me liusked quod kequa legunt saepius. Claritas est etiam
                                            pro cessus.
                                            Sequitur mutatin onem consuetudium.</p>
                                    </div>
                                </div>
                            </div><!-- Ends: .accordion-single -->
                            <div class="accordion-single">
                                <div class="accordion-heading" id="headingThree">
                                    <h6 class="mb-0">
                                        <a href="#" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Insurance IT Transformation – Enabling Digital Change
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion_one">
                                    <div class="accordion-contents">
                                        <p>Investiga tiones demonstr averun lectores legere melius quod kequa legunt
                                            saepius. Claritas est
                                            etiam pro cessus dynamicus qui sequitur mutatin onem consuetudium. Investiga
                                            tiones demonstr
                                            averunt lectores legere me liusked quod kequa legunt saepius. Claritas est etiam
                                            pro cessus.
                                            Sequitur mutatin onem consuetudium.</p>
                                    </div>
                                </div><!-- Ends: .collapseOne -->
                            </div><!-- Ends: .accordion-single -->
                            <div class="accordion-single">
                                <div class="accordion-heading" id="headingFour">
                                    <h6 class="mb-0">
                                        <a href="#" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            The Power of an Omnichannel
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordion_one">
                                    <div class="accordion-contents">
                                        <p>Investiga tiones demonstr averun lectores legere melius quod kequa legunt
                                            saepius. Claritas est
                                            etiam pro cessus dynamicus qui sequitur mutatin onem consuetudium. Investiga
                                            tiones demonstr
                                            averunt lectores legere me liusked quod kequa legunt saepius. Claritas est etiam
                                            pro cessus.
                                            Sequitur mutatin onem consuetudium.</p>
                                    </div>
                                </div><!-- Ends: .collapseOne -->
                            </div><!-- Ends: .accordion-single -->
                            <div class="accordion-single">
                                <div class="accordion-heading" id="headingFive">
                                    <h6 class="mb-0">
                                        <a href="#" class="collapsed" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            Insurance IT Transformation – Enabling Digital Change
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordion_one">
                                    <div class="accordion-contents">
                                        <p>Investiga tiones demonstr averun lectores legere melius quod kequa legunt
                                            saepius. Claritas est
                                            etiam pro cessus dynamicus qui sequitur mutatin onem consuetudium. Investiga
                                            tiones demonstr
                                            averunt lectores legere me liusked quod kequa legunt saepius. Claritas est etiam
                                            pro cessus.
                                            Sequitur mutatin onem consuetudium.</p>
                                    </div>
                                </div><!-- Ends: .collapseOne -->
                            </div><!-- Ends: .accordion-single -->
                        </div><!-- Ends: #accordion_one -->
                    </div>
                </div>
            </div>
        </div><!-- Ends: accordion-styles -->
    </section><!-- ends: section -->

    <section class="cta-wrapper cta--eight gradient-overlay">
        <div class="container content_above">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h1 class="color-light m-bottom-50">Looking for a first-class business service and solution?</h1>
                    <a href="" class="btn btn-primary">Get a free quote</a>
                </div>
            </div><!-- ends: .cta-wrapper -->
        </div>
    </section><!-- ends: .cta-wrapper -->
@endsection
