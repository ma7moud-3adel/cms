@extends('front.demo.layout.app')
@section('content')
    @php
        use Carbon\Carbon;
    @endphp
    <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay">
        <div class="bg_image_holder">
            <img src="{{ asset('storage/' . $blog->image) }}" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                        <h4 class="page_title">{{ $blog->name_en }}</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-bottom-30">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $blog->name_en }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div><!-- ends: .row -->
        </div>
    </section><!-- ends: .breadcrumb_area -->
    <section class="blog-single-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-details">
                        <div class="post-head">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="">
                        </div>
                        <div class="post-content">
                            <div class="post-header">
                                <h3>{{ $blog->name_en }}</h3>
                                <ul>
                                    <li>{{ $fullDate }}</li>
                                    <li>By <a href="">Aazztech</a></li>
                                    <li>In <a href="">Finance</a></li>
                                    <li>{{ $blog->comments->count() }} Comments</li>
                                </ul>
                            </div>
                            <div class="post-body">
                                <p>pInvestig ationes demons trave runt lectores legere liusry quod was legunt saepius
                                    claritas Investig tones. Pharetra dui, nec tincidunt ante mauris eu diam. Phasellus
                                    verra nisl vitae cursus aei uismod supen dise saepius claritas investig. Investiga
                                    tiones demonstr averun d lectores legere melius quod kequa legunt saepius. Claritas est
                                    etiam pro cessus dynamicus, qui sequitur mutatin onem consuetudium. Investiga tiones
                                    demonstr averunt lectores legere me liusked quod kequa legunt saepius.
                                </p>


                                <p>
                                    {!! $blog->description_en !!}
                                </p>


                                <div class="m-top-45 m-bottom-50">
                                    <blockquote class="blockquote blockquote4">
                                        <p>My focus areas are on global standardization and harmonization of business
                                            processes lorem dolor is reorganization of marketing and customer.</p>
                                        <div class="quote-author">
                                            <p><span>Jeff Collins,</span> Founder of Tizara Inc.</p>
                                        </div>
                                    </blockquote><!-- end: blockquote -->
                                </div>


                                <h4>Financial Analysis Overview</h4>
                                <p>Investig ationes demons trave runt lectores legere liusry quod was legunt saepius
                                    claritas Investig tones. Pharetra dui, nec tincidunt ante mauris eu diam. Phasellus
                                    verra nisl vitae cursus aei uismod supen dise saepius claritas investig. Investiga
                                    tiones demonstr averun d lectores legere melius.</p>
                                <div class="m-bottom-40">
                                    <ul class="bullet--list2">
                                        <li class="bullet_list">Build next-generation web applications with a focus on the
                                            client</li>
                                        <li class="bullet_list">Redesign UI’s, implement new UI’s, and pick up Java as
                                            necessary.</li>
                                        <li class="bullet_list">Explore and design dynamic compelling consumer experiences.
                                        </li>
                                        <li class="bullet_list">Design and build scalable framework for web applications.
                                        </li>
                                    </ul><!-- ends: .bullet--list2 -->
                                </div>
                            </div>
                        </div>
                    </div><!-- ends: .post-details -->
                    <hr>
                    <div class="post-author cardify border">
                        <div class="author-thumb">
                            <img src="img/auth1.png" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h5>About <span>Aazztech</span></h5>
                            <p>Business and Finance Sequitur mutatin onem consuetudium. Investiga tiones demonstr aver unt
                                lectores legere me lius quod kqua legunt saepius. Claritas est etiam pro cessus averus.</p>
                            <div class="social-basic ">
                                <ul class="d-flex justify-content-start ">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- ends: .post-author -->
                    <div class="post-pagination">
                        @php
                            $id = $blog->id;
                        @endphp
                        <div class="prev-post">
                            <span>Previous Post:</span>
                            @if ($previousBlog)
                                <a href="{{ route('demo.viewBlog', $previousBlog->id) }}"
                                    class="title">{{ $previousBlog->name_en }}</a>
                                <p><span>{{ $fullDate }}</span> - In <a href="">Industry</a></p>
                            @else
                                <span>No previous post</span>
                            @endif
                        </div>
                        <div class="next-post">
                            <span>Next Post:</span>
                            @if ($nextBlog)
                                <a href="{{ route('demo.viewBlog', $nextBlog->id) }}"
                                    class="title">{{ $nextBlog->name_en }}</a>
                                <p><span>{{ $fullDate }}</span> - In <a href="">Industry</a></p>
                            @else
                                <span>No next post</span>
                            @endif
                        </div>
                    </div><!-- ends: .post-pagination -->
                    <div class="comments-area m-top-60">
                        <div class="comment-title">
                            <h4>{{ $blog->comments->count() }} Comments</h4>
                        </div>
                        <div class="comment-lists">
                            <ul class="media-list">
                                @if ($blog->comments->isNotEmpty())
                                    @foreach ($blog->comments as $comment)
                                        @php
                                            $createdDate = Carbon::parse($comment->created_at);
                                            $day = $createdDate->day;
                                            $month = $createdDate->format('F');
                                            $year = $createdDate->year;
                                            $fullDate = $createdDate->format('F j, Y');
                                        @endphp
                                        <li class="depth-1">
                                            <div class="media">
                                                <div>
                                                    <a href="" class="cmnt_avatar">
                                                        <img src="img/auth4.png" alt=""
                                                            class="media-object rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="media_top">
                                                        <div class="heading_left">
                                                            <a href="#">
                                                                <h6 class="media-heading">{{ $comment->user_name }}</h6>
                                                            </a>
                                                            <span>{{ $fullDate }}</span>
                                                        </div>
                                                        <a href="#formComment" class="reply"><i class="la la-reply"></i>
                                                            Reply</a>
                                                    </div>
                                                    <p>{{ $comment->comment }}</p>
                                                </div>
                                            </div><!-- ends: .media -->
                                        </li><!-- ends: .depth-1 -->
                                    @endforeach
                                @else
                                    <p>No comments yet.</p>
                                @endif
                            </ul><!-- ends: .media-list -->
                        </div><!-- ends: .comment-lists -->
                    </div><!-- ends: .comment-area -->
                </div><!-- ends: .col-lg-8 -->
                <div class="col-lg-4">
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
                                                <li class="arrow-list4"><a href="">{{ $item->title_en }}</a></li>
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
                                        @foreach ($randomBlogs as $item)
                                            @php
                                                $createdDate = Carbon::parse($item->created_at);
                                                $day = $createdDate->day;
                                                $month = $createdDate->format('F');
                                                $year = $createdDate->year;
                                                $fullDate = $createdDate->format('F j, Y');
                                            @endphp
                                            <div class="post-single">
                                                <div class="d-flex align-items-center">
                                                    <a href=""><img width="50"
                                                            src="{{ asset('storage/' . $item->image) }}"
                                                            alt=""></a>
                                                    <p><span>{{ $fullDate }}</span>
                                                        <span><a href="">{{ $item->name_en }}</a></span>
                                                    </p>
                                                </div>
                                            </div><!-- ends: .post-single -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .widget-wrapper -->
                        <!-- popular post -->
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
                        <!-- subscribe -->

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
            </div>
            <div class="comment-form cardify m-top-60 margin-md-60 border row" id="formComment">
                <div class="comment-title">
                    <h5>Leave a Reply</h5>
                    <span>Your email address will not be published. Required fields are marked <span
                            class="color-primary">*</span></span>
                </div>
                <div class="comment_form_wrapper m-top-40 w-100">
                    <form method="POST" action="{{ route('demo.commentStore') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="user_name" class="form-control"
                                    placeholder="Enter Your Name" autocomplete="off" value="{{ old('user_name') }}"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="phone" class="form-control"
                                    placeholder="Enter Your Number" autocomplete="off" value="{{ old('phone') }}"
                                    required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <textarea name="comment" class="form-control" placeholder="Enter Your Comment .." autocomplete="off">{{ old('comment') }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <button class="btn btn-primary btn-xl text-uppercase col-2" type="submit">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- ends: .comment-form -->
        </div>
    </section><!-- ends: .blog-wrapper -->
@endsection
