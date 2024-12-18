@extends('dashboard.layout.app')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card card-md">
                        <div class="card-stamp card-stamp-lg">
                            <div class="card-stamp-icon bg-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                    <path d="M10 10l.01 0" />
                                    <path d="M14 10l.01 0" />
                                    <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                                </svg>
                            </div>
                        </div>
                        <div class="card-header">
                            <h3 class="h1">{{ trans('main.edit_section') }}</h3>
                        </div>
                        <form method="POST" action="{{ route('sections.update', $section->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-10">
                                        <div class="row mb-3">
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.sec_title_en') }}</label>
                                                <input type="text" name="title_en" class="form-control"
                                                    placeholder="Enter Section Title" autocomplete="off"
                                                    value="{{ $section->title_en }}">
                                            </div>
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.sec_title_ar') }}</label>
                                                <input type="text" name="title_ar" class="form-control"
                                                    placeholder="ادخل اسم القسم" autocomplete="off"
                                                    value="{{ $section->title_ar }}">
                                            </div>
                                        </div>
                                        <div class="row mb-5">
                                            <div class="markdown text-secondary col-12">
                                                <label class="form-label">{{ trans('main.sec_desc_en') }}</label>
                                                <textarea id="text_area_1" name="description_en" class="form-control" placeholder="Enter Blog Description"
                                                    autocomplete="off">{{ $section->description_en }}</textarea>
                                            </div>
                                            <div class="markdown text-secondary col-12 mt-3">
                                                <label class="form-label">{{ trans('main.sec_desc_ar') }}</label>
                                                <textarea id="text_area_2" name="description_ar" class="form-control" placeholder="ادخل وصف الخبر" autocomplete="off">{{ $section->description_ar }}</textarea>
                                            </div>
                                        </div>


                                        <div class="container">
                                            <div class="accordion mb-3" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button
                                                            class="accordion-button collapsed bg-info text-white rounded"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="false"
                                                            aria-controls="collapseOne">
                                                            SEO
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="row mt-5">
                                                                <div class="markdown text-secondary col">
                                                                    <label
                                                                        class="form-label">{{ trans('main.sec_meta_name_en') }}</label>
                                                                    <input type="text" name="meta_name_en"
                                                                        class="form-control"
                                                                        placeholder="Enter Blog Description"
                                                                        autocomplete="off"
                                                                        value="{{ $section->meta_name_en }}">
                                                                </div>
                                                                <div class="markdown text-secondary col">
                                                                    <label
                                                                        class="form-label">{{ trans('main.sec_meta_name_ar') }}</label>
                                                                    <input type="text" name="meta_name_ar"
                                                                        class="form-control" placeholder="ادخل وصف الخبر"
                                                                        autocomplete="off"
                                                                        value="{{ $section->meta_name_ar }}">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="markdown text-secondary col">
                                                                    <label
                                                                        class="form-label">{{ trans('main.sec_meta_desc_en') }}</label>
                                                                    <textarea name="meta_description_en" class="form-control" placeholder="Enter Blog Description" autocomplete="off">{{ $section->meta_description_en }}</textarea>
                                                                </div>
                                                                <div class="markdown text-secondary col">
                                                                    <label
                                                                        class="form-label">{{ trans('main.sec_meta_desc_ar') }}</label>
                                                                    <textarea name="meta_description_ar" class="form-control" placeholder="ادخل وصف الخبر" autocomplete="off">{{ $section->meta_description_ar }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="markdown text-secondary col">
                                                                    <label
                                                                        class="form-label">{{ trans('main.blog_key_en') }}</label>
                                                                    <input type="text" name="meta_keywords_en"
                                                                        class="form-control"
                                                                        placeholder="Enter Meta Keywords"
                                                                        autocomplete="off"
                                                                        value="{{ $section->meta_keywords_en }}">
                                                                </div>
                                                                <div class="markdown text-secondary col">
                                                                    <label
                                                                        class="form-label">{{ trans('main.blog_key_ar') }}</label>
                                                                    <input type="text" name="meta_keywords_ar"
                                                                        class="form-control" placeholder="ادخل الكلمات"
                                                                        autocomplete="off"
                                                                        value="{{ $section->meta_keywords_ar }}">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                <div class="markdown text-secondary col">
                                                                    <label
                                                                        class="form-label">{{ trans('main.blog_slug') }}</label>
                                                                    <textarea name="slug" class="form-control" placeholder="Enter Blog Description" autocomplete="off">{{ $section->slug }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end mt-3">
                                <button class="btn btn-primary btn-xl text-uppercase col-2"
                                    type="submit">{{ trans('main.Save') }}</button>
                                <a href="{{ route('sections.index') }}" class="btn btn-secondary" role="button"
                                    aria-disabled="true">{{ trans('main.Canel') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('libs-js')
@endsection

@section('js')
@endsection
