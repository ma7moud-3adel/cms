@extends('dashboard.layout.app')

@section('content')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        {{ __('admin.edit_admin') }}
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
                    <div class="col-12 col-md-9 d-flex flex-column">
                        <div class="card-body">
                            <h2 class="mb-4">{{ __('admin.edit_account') }}</h2>
                            <h3 class="card-title">{{ __('admin.profile_details') }}</h3>

                            <form action="{{ route('admin.update', $admin) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar avatar-xl image-preview"
                                              style="background-image: url({{ $admin->photo ? asset('storage/' . $admin->photo) : asset('dashboard/img/000m.jpg') }})">
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-label">{{ __('admin.photo') }}</label>
                                        <input type="file" name="photo" class="btn image">
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('admin.name') }}</label>
                                        <input type="text" name="name" class="form-control"
                                               value="{{ old('name', $admin->name) }}">
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('admin.email') }}</label>
                                        <input type="email" name="email" class="form-control"
                                               value="{{ old('email', $admin->email) }}">
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('admin.password') }}</label>
                                        <input type="password" name="password" class="form-control"
                                               value="{{ old('password') }}">
                                    </div>
                                </div>

                                <div class="form-text">
                                    <small>{{ __('admin.password_note') }}</small>
                                </div>

                                <div class="row g-3 mt-3 mb-2">
                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('admin.confirm_password') }}</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                               value="{{ old('password_confirmation') }}">
                                    </div>
                                </div>

                                <div class="bg-transparent mt-auto">
                                    <div class="btn-list">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('admin.update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
