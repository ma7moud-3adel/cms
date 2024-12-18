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
                        <form method="POST" action="{{ route('gallary.update', $gallary->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-10">
                                        <h3 class="h1">{{ trans('main.edit_gallary') }}</h3>
                                        <div class="row mb-3">
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.gallary_title') }}</label>
                                                <input type="text" name="title" class="form-control"
                                                    placeholder="Enter Name" autocomplete="off"
                                                    value="{{ $gallary->title }}">
                                            </div>
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.gallary_img') }}</label>
                                                <input type="file" name="image[]" class="form-control" autocomplete="off"
                                                    required multiple>
                                                @php
                                                    $images = explode(',', $gallary->image);
                                                @endphp
                                                @foreach ($images as $image)
                                                    <img width="40" src="{{ asset('storage/' . $image) }}"
                                                        alt="Image">
                                                @endforeach
                                            </div>
                                        </div>
                                        <div>
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.gallary_link') }}</label>
                                                <input type="text" name="link" class="form-control"
                                                    placeholder="Enter Name" autocomplete="off" value="{{ $gallary->link }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end mt-3">
                                <button class="btn btn-primary btn-xl text-uppercase col-2"
                                    type="submit">{{ trans('main.Save') }}</button>
                                <a href="{{ route('gallary.index') }}" class="btn btn-secondary" role="button"
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
