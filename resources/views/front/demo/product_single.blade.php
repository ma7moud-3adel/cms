@extends('front.demo.layout.app')
@section('content')
    <section class="breadcrumb_area breadcrumb1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_wrapper d-flex align-items-center justify-content-between flex-wrap">
                        <h4 class="page_title">{{ $product->name_en }}</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('demo.index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $product->name_en }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div><!-- ends: .row -->
        </div>
    </section><!-- ends: .breadcrumb_area -->
    <section class="product-details p-top-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 margin-md-60">
                    <div class="product-gallery">
                        <div class="gallery-image-view">
                            <div class="image-view-carousel owl-carousel">
                                <div class="carousel-single" data-hash="image1">
                                    <figure><img src="{{ asset('storage/' . $product->photo) }}" alt=""></figure>
                                </div><!-- ends: .carousel-single -->
                            </div><!-- ends: .image-view-carousel -->
                            <div class="carousel-thumbs">
                                <ul class="d-flex justify-content-center">

                                    @foreach ($product->productGallery as $item)
                                        <li><a href=""><img width="100" height="70"
                                                    src="{{ asset('storage/' . $item->photos) }}" alt=""></a></li>
                                    @endforeach

                                </ul>
                            </div><!-- ends: .carousel-thumb -->
                        </div><!-- ends: .gallery-image-view -->
                    </div>
                </div><!-- ends: .col-lg-5 -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="product-info">
                        <h4>{{ $product->name_en }}</h4>
                        <span class="product-price">${{ $product->price }}</span>
                        <div class="product-ratings d-flex">
                            <p>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="far fa-star"></span>
                            </p>
                            <span class="total-reviews">(2 Reviews)</span>
                        </div>
                        <p>{{ $product->description_en }}</p>
                        <div class="product-actions">
                            <form action="#" class="flex-wrap">
                                <div class="total-item">
                                    <span class="pcount m-right-10" data-operation="minus">-</span>
                                    <input type="text" value="1" id="numberInput">
                                    <span class="pcount m-left-10" data-operation="plus">+</span>
                                </div>
                                <ul class="d-flex">
                                    <li><a href="" class="btn btn--rounded btn-primary">Add To Cart</a></li>
                                    <li><a href="" class="btn like-btn btn-grey"><i class="la la-heart-o"></i></a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="product-category d-flex m-bottom-25">
                            <span>Categories: </span>
                            <p>{{ $product->productCategory->name_en }}</p>
                        </div>
                        <div class="product-share d-flex align-items-center">
                            <span class="m-right-20">Share in social media: </span>
                            <div>
                                <div class="social social--colored ">
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a>
                                        </li>
                                        <li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#" class="linkedin"><span class="fab fa-linkedin-in"></span></a>
                                        </li>
                                        <li><a href="#" class="gplus"><span class="fab fa-google-plus-g"></span></a>
                                        </li>
                                    </ul>
                                </div><!-- ends: .social -->
                            </div>
                        </div><!-- ends: .event-share -->
                    </div>
                </div><!-- ends: .col-lg-6 -->
            </div>
        </div>
    </section><!-- ends: .product-details -->
    <div class="hr-divider p-bottom-35"></div>
    <section class="product-info-tab">
        <div class="tab tab--6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab_nav2">
                            <ul class="nav justify-content-center" id="tab6" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab6_nav1" data-toggle="tab" href="#tab6_content1"
                                        role="tab" aria-controls="tab6_content1" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab6_nav2" data-toggle="tab" href="#tab6_content2"
                                        role="tab" aria-controls="tab6_content2" aria-selected="false">Additional
                                        information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content tab--content2" id="tabcontent6">
                            <div class="tab-pane fade show active" id="tab6_content1" role="tabpanel"
                                aria-labelledby="tab6_content1">
                                <h4>Description</h4>
                                <p>Investiga tiones demonstr averunt lectores legere me lius quod ii qua legunt saepius.
                                    Claritas est etiam pro cessus dynamicus, qui sequitur mutaety tionem consu etudium.
                                    Investig
                                    ationes demons trave runt lectores legere liusry awquod he legunt saepius clary tyitas
                                    Investig atesw.
                                    Curabitur vel sagittis lectus. Donec vitae efficitur ante. Nam mollis ligula tortor.
                                    Interdum et malesuada fames.</p>
                                <p>
                                    Suspendisse tristique porttitor magna, ac pulvinar libero lobortis at. Quisque sit amet
                                    facilisis eros. Vestibulum id ligula elementum, rutrum nunc sit amet, vulputate diam.
                                    Phasellus finibus mauris leo, quis commodo elit pellentesque quis.
                                </p>
                            </div><!-- end ./tab-pane -->
                            <div class="tab-pane fade" id="tab6_content2" role="tabpanel"
                                aria-labelledby="tab6_content2">
                                <h4>Additional Information</h4>
                                <p>Investiga tiones demonstr averunt lectores legere me lius quod ii qua legunt saepius.
                                    Claritas est etiam pro cessus dynamicus, qui sequitur mutaety tionem consu etudium.
                                    Investig
                                    ationes demons trave runt lectores legere liusry awquod he legunt saepius clary tyitas
                                    Investig atesw.
                                    Curabitur vel sagittis lectus. Donec vitae efficitur ante. Nam mollis ligula tortor.
                                    Interdum et malesuada fames.</p>
                                <ul class="bullet--list1 m-top-30">
                                    <li class="bullet_list"><strong class="color-dark">Professional -</strong> Delivers
                                        solutions that help drive</li>
                                    <li class="bullet_list"><strong class="color-dark">Business -</strong> Human capital
                                        research analytics</li>
                                    <li class="bullet_list"><strong class="color-dark">Services -</strong> Complex
                                        problems bringing an approach</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end ./container -->
        </div>
        <!--end ./tab -->
    </section><!-- ends: .product-info-tab -->
    <div class="hr-divider2"></div>
    <section class="related-products m-bottom-80 p-top-20">
        <div class="m-bottom-40">
            <div class="divider divider-simple text-center">
                <h3>Related Products</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($randomProducts as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-product">
                            <figure>
                                <img src="{{ asset('storage/' . $item->photo) }}" alt="">
                                <figcaption>
                                    <ul class="d-flex justify-content-center">
                                        <li><a href="" class="btn btn--rounded btn-outline-light btn-sm">Add To
                                                Cart</a></li>
                                        <li><a href="" class="btn like-btn"><i class="la la-heart-o"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <div class="card-body">
                                <h6><a href="{{ route('demo.productSingle', $item->id) }}">{{ $item->name_en }}</a></h6>
                                <div class="prices">
                                    <span class="product-price color-secondary">${{ $item->price }}</span>
                                </div>
                            </div>
                        </div><!-- End: .card -->
                    </div><!-- ends: .col-lg-3 -->
                @endforeach
            </div>
        </div>
    </section><!-- ends: .related-products -->
@endsection
