@extends('dashboard.layout.app')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.1/dist/css/tom-select.css" rel="stylesheet">
@endpush
@section('content')
    <div class="container mt-3">
        <div class="col-12">
            <div class="card card-md">
                <div class="card-stamp card-stamp-lg">
                    <div class="card-stamp-icon bg-primary">
                        <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
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
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h1 class=" mb-5">
                                    {{ trans('main.add_product') }}
                                </h1>
                                <div class=" row">
                                    <div class="mb-3 col">
                                        <label for="name_en" class="form-label required">{{ trans('main.name') }}
                                            ({{ trans('main.en') }}
                                            )</label>
                                        <input type="text" class="form-control" name="name_en" autocomplete="off"
                                            value="{{ old('name_en') }}" />
                                    </div>
                                    <div class="mb-3 col">
                                        <label for="name_ar" class="form-label required">{{ trans('main.name') }}
                                            ({{ trans('main.ar') }}
                                            ) </label>
                                        <input type="text" class="form-control" name="name_ar" autocomplete="off"
                                            value="{{ old('name_ar') }}" />
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="mb-5 col-12">
                                        <label for="description_en"
                                            class="form-label required">{{ trans('main.description') }}
                                            ({{ trans('main.en') }}) </label>
                                        <textarea id="text_area_1" type="text" name="description_en" class="form-control" autocomplete="off">{{ old('description_en') }}</textarea>
                                    </div>
                                    <div class="mb-5 col-12">
                                        <label for="description_ar"
                                            class="form-label required">{{ trans('main.description') }}
                                            ({{ trans('main.ar') }}) </label>
                                        <textarea id="text_area_2" type="text" name="description_ar" class="form-control" autocomplete="off">{{ old('description_ar') }}</textarea>
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="mb-3 col ">
                                        <label for="product_category_id"
                                            class="form-label required">{{ trans('main.product_category') }}</label>
                                        <select id="select-product-category" name="product_category_id"
                                            class="form-control">
                                            @foreach ($productCategories as $productCategory)
                                                <option value="{{ $productCategory->id }}">{{ $productCategory->name_en }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col ">
                                        <label for="price" class="form-label required">{{ trans('main.price') }}</label>
                                        <input type="number" step="0.01" class="form-control" name="price"
                                            autocomplete="off" {{ old('price') }} />

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col">
                                        <label for="photo" class="form-label required">{{ trans('main.photo') }}</label>
                                        <input name="photo" type="file" class="form-control image" />
                                    </div>
                                    <div class="mb-3 col">
                                        <label for="photos"
                                            class="form-label required">{{ trans('main.gallery') }}</label>
                                        <input name="photos[]" multiple type="file" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-auto mb-2">
                                    <span class="avatar avatar-xl image-preview">
                                    </span>
                                </div>
                                {{--                                <div class="container"> --}}
                                <div class="accordion mb-3" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button fw-bold collapsed text-black rounded"
                                                style="background-color: #f6f8fb" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                SEO
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="meta_title_en" class="form-label required">Meta
                                                            title
                                                            (EN)</label>
                                                        <input type="text" class="form-control" name="meta_title_en"
                                                            autocomplete="off" />
                                                    </div>
                                                    <div class="mb-3 col">
                                                        <label for="meta_title_ar" class="form-label required">Meta
                                                            title
                                                            (AR)</label>
                                                        <input type="text" class="form-control" name="meta_title_ar"
                                                            autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="meta_desc_en" class="form-label required">Meta Desc
                                                            (EN)</label>
                                                        <textarea type="text" class="form-control" name="meta_desc_en" autocomplete="off"></textarea>
                                                    </div>
                                                    <div class="mb-3 col">
                                                        <label for="meta_desc_ar" class="form-label required">Meta Desc
                                                            (AR)</label>
                                                        <textarea type="text" class="form-control" name="meta_desc_ar" autocomplete="off"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="keywords" class="form-label required">Keywords</label>
                                                        <textarea type="text" class="form-control" name="keywords" autocomplete="off"></textarea>
                                                    </div>
                                                    <div class="mb-3 col">
                                                        <label for="slug" class="form-label required">slug</label>
                                                        <input type="text" class="form-control" name="slug"
                                                            autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="row">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary col-2" type="submit">
                            {{ trans('main.save') }}
                        </button>
                        <a href="{{ route('product.index') }}" class="btn btn-secondary" role="button"
                            aria-disabled="true">{{ trans('main.Canel') }}</a>
                    </div>
                </form>

            </div>
        </div>
        {{--        <label class="form-label">Form fieldset</label> --}}

    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.4.1/dist/js/tom-select.complete.min.js"></script>

    <script>
        new TomSelect("#select-product-category", {
            sortField: {
                field: "text",
                direction: "asc"
            }
        });
    </script>
@endsection
