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
                        <form method="POST" action="{{ route('project_categories.update', $category->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-10">
                                        <h3 class="h1">{{ trans('main.edit_category') }}</h3>
                                        <div class="row">
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.project_cat_name_en') }}</label>
                                                <input type="text" name="name_en" class="form-control"
                                                    placeholder="Enter Project Name" autocomplete="off"
                                                    value="{{ $category->name_en }}">
                                            </div>
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.project_cat_name_ar') }}</label>
                                                <input type="text" name="name_ar" class="form-control"
                                                    placeholder="Enter Project Name" autocomplete="off"
                                                    value="{{ $category->name_ar }}">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="markdown text-secondary col-12 mt-3">
                                                <label class="form-label">{{ trans('main.project_cat_desc_en') }}</label>
                                                <textarea id="text_area_1" name="description_en" class="form-control" placeholder="Enter Project Description"
                                                    autocomplete="off">{{ $category->description_en }}</textarea>
                                            </div>
                                            <div class="markdown text-secondary col-12 mt-3">
                                                <label class="form-label">{{ trans('main.project_cat_desc_ar') }}</label>
                                                <textarea id="text_area_2" name="description_ar" class="form-control" placeholder="Enter Project Description"
                                                    autocomplete="off">{{ $category->description_ar }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end mt-3">
                                <button class="btn btn-primary btn-xl text-uppercase col-2"
                                    type="submit">{{ trans('main.Save') }}</button>
                                <a href="{{ route('project_categories.index') }}" class="btn btn-secondary" role="button"
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
