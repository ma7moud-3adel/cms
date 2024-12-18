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
                 style="background-image:  url({{asset('web/img/breadcumb-single-blog.jpg')}});">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="main">
                            <div class="bread">
                                <div class="bread-title">{{$blog->name_en}}</div>
                                <div class="bread-subtitle">
                                    <a href="index.html">{{__('web.home')}}</a>
                                    <span class="spacebread"></span>
                                    <span>{{$blog->name_en}}</span>
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

                        <!-- article -->
                        <article>
                            <div class="blog-simple">
                                <a href="#"><img class="img-responsive" src="{{asset('storage/'.$blog->image)}}" alt=""></a>
                                <div class="blog-text">

                                    <h2><a href="#">{{$blog->name_en}}</a></h2>
{{--                                    <span class="user-post"><i class="ti-user"></i>Jhony Dono</span>--}}
{{--                                    <div class="spanpost">--}}

                                        <span class="date-post"><i class="ti-calendar"></i>{{ $blog->created_at->format('F j, Y \a\t g:i a') }}</span>
                                        <span class="comment"><a href=""><i
                                                    class="ti-comment"></i>{{$blog->comments->count()}} {{__('web.comments')}}</a></span>
{{--                                    </div>--}}

                                    <p>{!!  $blog->description_en !!}</p>

                                    {{--                                <blockquote>--}}
                                    {{--                                    <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>--}}
                                    {{--                                    <small>by <cite>Albert Einstein</cite></small>--}}
                                    {{--                                </blockquote>--}}

                                    {{--                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur--}}
                                    {{--                                </p>--}}

                                </div>
                            </div>
                        </article>
                        <!-- article end -->

                        <!-- comment blog -->
                        <div id="blog-comment">
                            <h5><span>{{$blog->comments->count()}} {{__('web.comments')}}</span></h5>
                            @foreach($blog->comments as $comment)
                                <ul>
                                    <li>
                                        <div class="avatar">
                                            <img alt="img"
                                                                 src="{{asset('web/img/user-placeholder.jpg')}}">
                                        </div>
                                        <div class="comment-info">
                                            <span class="c-name">{{$blog->user_name}}</span>
                                            <span
                                                class="c-date">{{ $comment->created_at->format('F j, Y \a\t g:i a') }}</span>
                                            <div class="comment-content entry clr"><p>{{$comment->comment}}</p></div>
                                            <span class="c-reply"><a class="link" href="#">{{__('web.reply')}}</a></span>
                                        </div>
                                        <!-- sub comment -->
                                        {{--                                <ul>--}}
                                        {{--                                    <li>--}}
                                        {{--                                        <div class="avatar"><img alt="img" src="img/blog/avatar.jpg">--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="comment-info">--}}
                                        {{--                                            <span class="c-name">John Smith</span>--}}
                                        {{--                                            <span class="c-date">August 21, 2018 at 4:58 am </span>--}}
                                        {{--                                            <div class="comment-content entry clr"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p></div>--}}
                                        {{--                                            <span class="c-reply"><a class="link"  href="#">Reply</a></span>--}}
                                        {{--                                        </div>--}}

                                        {{--                                    </li>--}}
                                        {{--                                </ul>--}}
                                        <!-- sub comment end -->
                                    </li>
                                </ul>
                            @endforeach


                            <div id="respond" class="comment-respond">
                                <h4 id="reply-title" class="comment-reply-title">{{__('web.leave_a_comment')}}
                                    <small>
                                        <a rel="nofollow" id="cancel-comment-reply-link"
                                           href="/minimal-design-in-your-rooms/#respond" style="display:none;">{{__('web.cancel')}}
                                            Comment</a>
                                    </small>
                                </h4>
                                <p class="comment-notes">
                                    <span id="email-notes">Your email address will not be published.</span> Required
                                    fields are marked
                                    <span class="required">*</span>
                                </p>
                                <form action="#" method="post" id="commentform" class="comment-form" novalidate>
                                    <p class="comment-form-comment">
                                        <label for="comment">Comment</label>
                                        <textarea id="comment" name="comment" cols="10" rows="10"
                                                  aria-required="true"></textarea>
                                    </p>
                                    <p class="comment-form-author">
                                        <label for="author">Name</label>
                                        <span class="required">*</span>
                                        <input id="author" name="author" type="text" value="" size="30">
                                    </p>
                                    <p class="comment-form-email">
                                        <label for="email">Email</label>
                                        <span class="required">*</span>
                                        <input id="email" name="email" type="text" value="" size="30">
                                    </p>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit"
                                               value="Comment Here">
                                        <input type="hidden" name="comment_post_ID" value="292" id="comment_post_ID">
                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                    </p>
                                </form>
                            </div>
                        </div>
                        <!-- comment blog end -->

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
                                            <a href="{{route('web.blog.view',$recentBlog->id)}}">
                                                <img alt="{{asset('storage/'.$recentBlog->image)}}" class="pull-left"
                                                     src="{{asset('storage/'.$recentBlog->image)}}">
                                                <h6>
                                                    <a class="{{route('web.blog.view',$recentBlog->id)}}" href="{{route('web.blog.view',$recentBlog->id)}}">{{$recentBlog->name_en}}</a>
                                                </h6>

                                                <p>{{ $blog->created_at->format('F j, Y') }}</p>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- widget end -->

                            <!-- widget -->
                            <div class="widget">
                                <h4>
                                    Tags
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
        <!-- section -->


    </div>
    <!-- container-wrapper end -->



    <!-- ScrolltoTop -->
    <div id="totop" class="init">
        <i class="fa fa-chevron-up"></i>
    </div>

@endsection
