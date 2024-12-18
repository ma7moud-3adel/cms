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
                        <h4 class="page_title">{{ $category->title_en }}</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-bottom-30">
                                <li class="breadcrumb-item"><a href="{{ route('demo.index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $category->title_en }}</li>
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
                    @if ($category->blogs->isEmpty())
                        <p>No blogs found in this category.</p>
                    @else
                        @foreach ($category->blogs as $blog)
                            <div class="col-lg-4 col-sm-6">
                                <div class="card card-shadow card-one">
                                    <figure>
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="">
                                        <figcaption>
                                            <a href="{{ route('demo.projectString', $blog->id) }}"><i
                                                    class="la la-link"></i></a>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <p class="card-subtitle color-secondary">{{ $blog->category->name_en }}</p>
                                        <h6><a href="{{ route('demo.projectString', $blog->id) }}">{{ $blog->name_en }}</a>
                                        </h6>
                                    </div>
                                </div><!-- Ends: .card -->
                            </div><!-- ends: .col-lg-4 -->
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section><!-- ends: section -->
@endsection
