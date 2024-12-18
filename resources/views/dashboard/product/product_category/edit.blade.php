@extends('dashboard.layout.app')
@section('content')
    <div class="container mt-3">
        <div class="col-12">
            <div class="card card-md">
                <div class="card-stamp card-stamp-lg">
                    <div class="card-stamp-icon bg-primary">
                        <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                            <path d="M10 10l.01 0" />
                            <path d="M14 10l.01 0" />
                            <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                        </svg>
                    </div>
                </div>
                <form action="{{ route('product-category.update', $productCategory->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h1 class=" mb-5">
                                    {{ trans('main.edit_product_category') }}
                                </h1>
                                <div class=" row">
                                    <div class="mb-3 col">
                                        <label for="name_en" class="form-label required">{{ trans('main.name') }}
                                            ({{ trans('main.en') }}
                                            )</label>
                                        <input value="{{ $productCategory->name_en }}" type="text" class="form-control"
                                            name="name_en" autocomplete="off" />
                                    </div>
                                    <div class="mb-3 col">
                                        <label for="name_ar" class="form-label required">{{ trans('main.name') }}
                                            ({{ trans('main.ar') }}
                                            ) </label>
                                        <input type="text" value="{{ $productCategory->name_ar }}" class="form-control"
                                            name="name_ar" autocomplete="off" />
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="mb-5 col-12">
                                        <label for="description_en"
                                            class="form-label required">{{ trans('main.description') }}
                                            ({{ trans('main.en') }}) </label>
                                        <textarea id="text_area_1" name="description_en" class="form-control" autocomplete="off">{{ $productCategory->description_en }}</textarea>
                                    </div>
                                    <div class="mb-5 col-12">
                                        <label for="description_ar"
                                            class="form-label required">{{ trans('main.description') }}
                                            ({{ trans('main.ar') }}) </label>
                                        <textarea id="text_area_2" name="description_ar" class="form-control" autocomplete="off">{{ $productCategory->description_ar }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary col-2" type="submit">
                            {{ trans('main.Save') }}
                        </button>
                        <a href="{{ route('product-category.index') }}" class="btn btn-secondary" role="button"
                            aria-disabled="true">{{ trans('main.Canel') }}</a>
                    </div>
                </form>
            </div>
        </div>
        {{--        <label class="form-label">Form fieldset</label> --}}

    </div>
@endsection
