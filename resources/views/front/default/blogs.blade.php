@extends('front.default.layout.app')
@section('content')
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
        <section class="breadcumb" aria-label="breadcumb" style="background-image: url({{asset('web/img/breadcumb.jpg')}});">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="main">
                            <div class="bread">
                                <div class="bread-title">{{__('web.blog')}}</div>
                                <div class="bread-subtitle">
                                    <a href="{{route('web.index')}}">{{__('web.home')}}</a>
                                    <span class="spacebread"></span>
                                    <span>{{__('web.blog')}}</span>
                                </div>
                            </div>
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
                    <div class="col-md-8 pr-md-4">
                        <div class="blog-simple">
                            @foreach($blogs as $blog)
                                <a href="#"><img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->name_en }}"></a>
                                <div class="blog-text">
                                    <h2><a href="#">7 Chic Ways to Organize Your Home for Spring</a></h2>
                                    <div class="spanpost">
                                        <span class="user-post"><i class="ti-user"></i>Jhony Dono</span>
                                        <span class="date-post"><i class="ti-calendar"></i>{{ $blog->created_at->format('F j, Y') }}</span>
                                        <span class="comment"><a href=""><i
                                                    class="ti-comment"></i>{{$blog->comments->count()}} Comments</a></span>
                                    </div>
                                    <p>Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet,
                                        No mei nibh consectetuer, semper laoreet perfecto adqui, est rebum nulla.
                                        Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis,
                                        pri quando everti electram ei, ex homero omittam salutatus sed.
                                    </p>
                                    <a class="btn-blog" href="{{route('web.blog.view',$blog->id)}}">{{__('web.more_detail')}}</a>
                                </div>
                            @endforeach
                        </div>
                        <!-- Smaller pagination -->
                        <div class="blog-simple mb-md-0 mb-5">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">{{__('web.previous')}}</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">{{__('web.next')}}</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- left content end -->

                    <!-- right content -->
                    <div class="col-md-4">
                        <aside>

                            <!-- widget -->
                            <div class="widget">
                                <div class="search-container">
                                    <form action="#">
                                        <input class="s-input-home" type="text" placeholder="Search…" name="search">
                                        <button class="btn-s-input" type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- widget end -->

                            <!-- widget -->
                            <div class="widget">
                                <h4>
                                    {{__('web.recent_posts')}}
                                </h4>
                                    <div class="devider-widget">
                                    </div>
                                @foreach($recentBlogs as $recentBlog)


                                    <div class="recent">
                                        <div>
                                            <img alt="{{asset('storage/'.$recentBlog->image)}}" class="pull-left"
                                                 src="{{asset('storage/'.$recentBlog->image)}}">
                                            <h6>
                                                <a class="link" href="{{route('web.blog.view',$recentBlog->id)}}">{{$recentBlog->name_en}}</a>
                                            </h6>

                                            <p>{{ $blog->created_at->format('F j, Y') }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- widget end -->

                            <!-- widget -->
                            <div class="widget">
                                <h4>
                                    {{__('web.tags')}}
                                </h4>

                                <div class="devider-widget">
                                </div>

                                <div class="tags">
                                    <div>
                                        <a href="#">Interior</a>
                                    </div>

                                    <div>
                                        <a href="#">Trends</a>
                                    </div>

                                    <div>
                                        <a href="#">Interactive</a>
                                    </div>

                                    <div>
                                        <a href="#">Personal</a>
                                    </div>

                                    <div>
                                        <a href="#">Responsive</a>
                                    </div>

                                    <div>
                                        <a href="#">Creative</a>
                                    </div>

                                    <div>
                                        <a href="#">Design</a>
                                    </div>

                                    <div>
                                        <a href="#">website</a>
                                    </div>

                                    <div>
                                        <a href="#">application</a>
                                    </div>
                                </div>
                            </div>
                            <!-- widget end -->

                            <!-- widget -->
                            <div class="widget">
                                <h4>
                                    {{__('web.about_us')}}
                                </h4>

                                <div class="devider-widget">
                                </div>

                                <p>
                                    Proin hendrerit eget tellus sit amet vestibulum. Nullam a tincidunt leo. Sed eget
                                    sem scelerisque, malesuada lectus sed, facilisis sapien. Pellentesque quis
                                    ullamcorper est, vitae
                                    condimentum enim. Phasellus suscipit eu lacus finibus rhoncus. Maecenas sed lacus
                                    aliquam, vehicula sapien ac, cursus erat. Aenean vel erat a urna efficitur varius.
                                </p>
                            </div>
                            <!-- widget end -->
                        </aside>
                    </div>
                    <!-- right content end -->
                </div>
            </div>
        </section>
        <!-- section end -->


    </div>
    <!-- container-wrapper end -->



    <!-- ScrolltoTop -->
    <div id="totop" class="init">
        <i class="fa fa-chevron-up"></i>
    </div>
@endsection
