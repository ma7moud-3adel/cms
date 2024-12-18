@extends('dashboard.layout.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        {{ __('messages.account_settings') }}
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="row g-0">

                    <div class="col-12 col-md-3 border-end">
                        <div class="card-body">
                            @foreach($categorizedSettings as $group => $groupData)
                                <h4 class="subheader">{{ json_decode($groupData['title'])->{App::getLocale()} ?? $groupData['title'] }}</h4>
                                <div class="list-group list-group-transparent">
                                    @foreach($groupData['categories'] as $categoryName => $categorySettings)
                                        <a href="{{ route('settings.index', ['category' => $categoryName]) }}"
                                           class="list-group-item list-group-item-action d-flex align-items-center
                                           {{ $currentCategory === $categoryName ? 'active' : '' }}">
                                            {{ __('messages.' . str_replace('_', '.', $categoryName)) }}
                                        </a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="col-12 col-md-9 d-flex flex-column">
                        <div class="card-body">
                            <h2 class="mb-4">{{ ucwords(str_replace('_', ' ', $currentCategory)) }} {{ __('messages.settings') }}</h2>

                            <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="category" value="{{ $currentCategory }}">

                                @foreach($settings as $setting)
                                    <div class="form-group mb-3">
                                        <label class="form-label">
                                            {{ json_decode($setting->title)->{App::getLocale()} ?? $setting->title ?? ucwords(str_replace('_', ' ', $setting->key)) }}
                                        </label>

                                        @if($setting->type === 'file')
                                            @if($setting->value)
                                                <div class="mb-2">
                                                    <img src="{{ asset($setting->value) }}"
                                                         alt="Current Image"
                                                         class="img-fluid"
                                                         style="max-width: 200px">
                                                </div>
                                            @endif
                                            <input type="file" name="{{ $setting->key }}" class="form-control">
                                        @else
                                            <input type="text"
                                                   name="{{ $setting->key }}"
                                                   class="form-control"
                                                   value="{{ old($setting->key, json_decode($setting->value)->{App::getLocale()} ?? $setting->value) }}">
                                        @endif
                                    </div>
                                @endforeach

                                <button type="submit"
                                        class="btn btn-primary">{{ __('messages.save_settings') }}</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
