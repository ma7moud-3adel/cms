@extends('dashboard.layout.app')
@section('content')

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        {{ __('admin.profile_settings') }}
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
                            <h2 class="mb-4">{{ __('admin.my_account') }}</h2>
                            <h3 class="card-title">{{ __('admin.profile_details') }}</h3>

                            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar avatar-xl image-preview"
                                              style="background-image: url({{ old('photo') ? asset('storage/' . old('photo')) : asset('dashboard/img/000m.jpg') }})">
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-label">{{ __('admin.photo') }}</label>
                                        <input type="file" name="photo" class="form-control image" accept="image/*">
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('admin.name') }}</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('admin.email') }}</label>
                                        <input type="email" name="email" class="form-control"
                                               value="{{ old('email') }}">
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('admin.password') }}</label>
                                        <div class="input-group">
                                            <input id="password" type="password" name="password" class="form-control"
                                                   value="{{ old('password') }}">
                                            <span class="input-group-text" id="password-toggle">
                                                <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path id="eye-open"
                                                          d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"
                                                          style="display: none;"/>
                                                    <path id="eye-closed" d="M10.585 10.587a2 2 0 0 0 2.829 2.828"
                                                          style="display: block;"/>
                                                    <path id="eye-closed-detail"
                                                          d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87"
                                                          style="display: block;"/>
                                                    <path id="cross" d="M3 3l18 18" style="display: block;"/>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mt-3 mb-2">
                                    <div class="col-md-6">
                                        <label class="form-label">{{ __('admin.confirm_password') }}</label>
                                        <div class="input-group">
                                            <input id="password_confirmation" type="password"
                                                   name="password_confirmation" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-transparent mt-auto">
                                    <div class="btn-list">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('admin.submit') }}
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
    <script>
        // Handle the profile image preview
        document.querySelector('.image').addEventListener('change', function () {
            if (this.files && this.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    document.querySelector('.image-preview').style.backgroundImage = `url('${e.target.result}')`;
                }

                reader.readAsDataURL(this.files[0]);
            }
        });

        // Handle password visibility toggle for both password and confirm password fields
        document.querySelector('#password-toggle').addEventListener('click', function () {
            const passwordField = document.querySelector('#password');
            const confirmPasswordField = document.querySelector('#password_confirmation');
            const eyeOpenPath = document.querySelector('#eye-open');
            const eyeClosedPath = document.querySelector('#eye-closed');
            const eyeClosedDetailPath = document.querySelector('#eye-closed-detail');
            const crossPath = document.querySelector('#cross');

            // Toggle visibility for both password and confirm password
            if (passwordField.type === 'password' && confirmPasswordField.type === 'password') {
                passwordField.type = 'text'; // Show password
                confirmPasswordField.type = 'text'; // Show confirm password
                eyeOpenPath.style.display = 'block';
                eyeClosedPath.style.display = 'none';
                eyeClosedDetailPath.style.display = 'none';
                crossPath.style.display = 'none';
            } else {
                passwordField.type = 'password'; // Hide password
                confirmPasswordField.type = 'password'; // Hide confirm password
                eyeOpenPath.style.display = 'none';
                eyeClosedPath.style.display = 'block';
                eyeClosedDetailPath.style.display = 'block';
                crossPath.style.display = 'block';
            }
        });
    </script>
@endsection
