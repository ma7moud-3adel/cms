@extends('front.demo.layout.app')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay">
        <div class="bg_image_holder">
            <img src="img/breadbg.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                        <h4 class="page_title">Our Blogs</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-bottom-30">
                                <li class="breadcrumb-item"><a href="{{ route('demo.index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div><!-- ends: .row -->
        </div>
    </section><!-- ends: .breadcrumb_area -->
    <section class="blog-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-xl-0 order-lg-0 order-md-1 order-1">
                    <div class="sidebar">
                        <!-- search widget -->
                        <div class="widget-wrapper">
                            <div class="search-widget">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="fc--rounded" placeholder="Search">
                                        <button type="submit"><i class="la la-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- ends: .widget-wrapper -->
                        <!-- category widget -->
                        <div class="widget-wrapper">
                            <div class="widget-default">
                                <div class="widget-header">
                                    <h6 class="widget-title">Categories</h6>
                                </div>
                                <div class="widget-content">
                                    <div class="category-widget">
                                        <ul>
                                            @foreach ($categories as $item)
                                                <li class="arrow-list4"><a
                                                        href="{{ route('demo.viewBlogCat', $item->id) }}">{{ $item->title_en }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .widget-wrapper -->

                        <!-- popular post -->
                        <div class="widget-wrapper">
                            <div class="widget-default">
                                <div class="widget-header">
                                    <h6 class="widget-title">Popular Post</h6>
                                </div>
                                <div class="widget-content">
                                    <div class="sidebar-post">
                                        <div class="post-single">
                                            <div class="d-flex align-items-center">
                                                <a href=""><img src="img/bthumb1.jpg" alt=""></a>
                                                <p><span>Jan 25, 2018</span> <span>by <a href="">Aazztech</a></span>
                                                </p>
                                            </div>
                                            <a href="" class="post-title">Tizara Adds 35 New Part ners envato</a>
                                        </div><!-- ends: .post-single -->
                                        <div class="post-single">
                                            <div class="d-flex align-items-center">
                                                <a href=""><img src="img/bthumb2.jpg" alt=""></a>
                                                <p><span>Jan 25, 2018</span> <span>by <a href="">Aazztech</a></span>
                                                </p>
                                            </div>
                                            <a href="" class="post-title">2018 Decorators opens with home design
                                                inspiration</a>
                                        </div><!-- ends: .post-single -->
                                        <div class="post-single">
                                            <div class="d-flex align-items-center">
                                                <a href=""><img src="img/bthumb3.jpg" alt=""></a>
                                                <p><span>Jan 25, 2018</span> <span>by <a href="">Aazztech</a></span>
                                                </p>
                                            </div>
                                            <a href="" class="post-title">Artist brings air of distinction to
                                                Delafield apartment</a>
                                        </div><!-- ends: .post-single -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .widget-wrapper -->

                        <!-- popular post -->
                        <div class="widget-wrapper">
                            <div class="widget-default">
                                <div class="widget-header">
                                    <h6 class="widget-title">Recent Post</h6>
                                </div>
                                <div class="widget-content">
                                    <div class="sidebar-post">
                                        @foreach ($recentBlogs as $item)
                                            @php
                                                $createdDate = Carbon::parse($item->created_at);
                                                $day = $createdDate->day;
                                                $month = $createdDate->format('F');
                                                $year = $createdDate->year;
                                                $fullDate = $createdDate->format('F j, Y');
                                            @endphp
                                            <div class="post-single">
                                                <div class="d-flex align-items-center">
                                                    <a href="{{ route('demo.viewBlog', $item->id) }}"><img width="50"
                                                            src="{{ asset('storage/' . $item->image) }}" alt=""></a>
                                                    <p><span>{{ $fullDate }}</span> <span><a
                                                                href="{{ route('demo.viewBlog', $item->id) }}">{{ $item->name_en }}</a></span>
                                                    </p>
                                                </div>
                                                <a href="" class="post-title">{!! $item->description_en !!}</a>
                                            </div><!-- ends: .post-single -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .widget-wrapper -->
                        <!-- tags -->
                        <div class="widget-wrapper">
                            <div class="widget-default">
                                <div class="widget-header">
                                    <h6 class="widget-title">Popular Tags</h6>
                                </div>
                                <div class="widget-content">
                                    <div class="tags-widget">
                                        <ul>
                                            <li><a href="">Business</a></li>
                                            <li><a href="">Finance</a></li>
                                            <li><a href="">Strategy</a></li>
                                            <li><a href="">Global</a></li>
                                            <li><a href="">Marketing</a></li>
                                            <li><a href="">Technology</a></li>
                                            <li><a href="">Wordpress</a></li>
                                            <li><a href="">Solution</a></li>
                                            <li><a href="">Bizillion</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .widget-wrapper -->
                        <!-- Social Connect -->
                        <div class="widget-wrapper">
                            <div class="widget-default">
                                <div class="widget-header">
                                    <h6 class="widget-title">Connect &amp; Follow</h6>
                                </div>
                                <div class="widget-content">
                                    <div class="social social--small social--gray ">
                                        <ul class="d-flex flex-wrap">
                                            <li><a href="#" class="facebook"><span
                                                        class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="#" class="twitter"><span
                                                        class="fab fa-twitter"></span></a></li>
                                            <li><a href="#" class="linkedin"><span
                                                        class="fab fa-linkedin-in"></span></a></li>
                                            <li><a href="#" class="gplus"><span
                                                        class="fab fa-google-plus-g"></span></a></li>
                                        </ul>
                                    </div><!-- ends: .social -->
                                </div>
                            </div>
                        </div><!-- ends: .widget-wrapper -->
                    </div><!-- ends: .sidebar -->
                </div><!-- ends: .col-lg-4 -->
                <div class="col-lg-8 order-xl-1 order-lg-1 order-md-0 order-0 margin-md-60">
                    <div class="blog-posts">
                        @foreach ($blogs as $item)
                            @php
                                $createdDate = Carbon::parse($item->created_at);
                                $day = $createdDate->day;
                                $month = $createdDate->format('F');
                                $year = $createdDate->year;
                                $fullDate = $createdDate->format('F j, Y');
                            @endphp
                            <div class="blog-single">
                                <div class="card post--card post--card2 ">
                                    <figure>
                                        <a href=""><img src="{{ asset('storage/' . $item->image) }}"
                                                alt="{{ route('demo.viewBlog', $item->id) }}"></a>
                                        <figcaption>
                                            <a href=""><i class="la la-image"></i></a>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h5><a href="{{ route('demo.viewBlog', $item->id) }}">{{ $item->name_en }}</a>
                                        </h5>
                                        <ul class="post-meta d-flex">
                                            <li>{{ $fullDate }}</li>
                                            <li>by <a href="">Aazztech</a></li>
                                            <li>in <a href="">Event</a></li>
                                            <li><a href="">6 Comments</a></li>
                                        </ul>
                                        <p>{!! $item->description_en !!}</p>
                                    </div>
                                </div><!-- End: .card -->
                            </div><!-- ends: .blog-single -->
                        @endforeach
                    </div>
                </div><!-- ends: .col-lg-8 -->
            </div>
        </div>
    </section><!-- ends: .blog-wrapper -->
@endsection
