<!doctype html>
<html lang="en" @if(app()->getLocale()=="en") dir="ltr" @else dir="rtl" @endif>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    @include('dashboard.layout.includes.css')
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body class="d-flex flex-column">
<script src="{{url('dashboard')}}/js/demo-theme.min.js?1692870487"></script>
<div class="page page-center">
    <div class="container container-normal py-4">
        <div class="row align-items-center g-4">
            <div class="col-lg">
                <div class="container-tight">
                    <div class="text-center mb-4">
                        <a href="." class="navbar-brand navbar-brand-autodark"><img
                                src="{{url('dashboard')}}/img/dotcms_logo.png" height="36" alt=""></a>
                    </div>
                    <div class="card card-md">
                        <div class="card-body">
                            <h2 class="h2 text-center mb-4">Login to your account</h2>
                            <form id="login-form" method="POST" autocomplete="off" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="your@email.com"
                                           autocomplete="off">
                                </div>
                                <div class="mb-2">
                                    <div class="input-group input-group-flat">
                                        <input id="password" type="password" class="form-control" name="password"
                                               placeholder="Your password" autocomplete="off">
                                        <span class="input-group-text">
                                            <a href="#" class="link-secondary toggle-password" title="Show password">
                                                <!-- Eye icon toggle -->
                                                <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <!-- Open eye icon (visible) -->
                                                    <path id="eye-open"
                                                          d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"
                                                          style="display: none;"/>
                                                    <!-- Closed eye icon (hidden) -->
                                                    <path id="eye-closed" d="M10.585 10.587a2 2 0 0 0 2.829 2.828"
                                                          style="display: block;"/>
                                                    <path id="eye-closed-detail"
                                                          d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87"
                                                          style="display: block;"/>
                                                    <!-- Cross (x) for the closed eye icon -->
                                                    <path id="cross" d="M3 3l18 18" style="display: block;"/>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg d-none d-lg-block">
                <img src="{{url('dashboard')}}/img/dotcms_cover.png" height="450" class="d-block mx-auto" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Libs JS -->
<!-- Tabler Core -->
<script src="{{url('dashboard')}}/js/tabler.min.js?1692870487" defer></script>
<script src="{{url('dashboard')}}/js/demo.min.js?1692870487" defer></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function () {
        $(document).on('submit', '#login-form', function (e) {
            e.preventDefault();
            let formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: '{{url('/dashboard/login')}}',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    if (data.status === 'success') {

                        window.location.href = '{{route("dashboard")}}';
                        toastr.success('Logged in successfully', 'Login successful', {
                            positionClass: 'toast-top-right',
                            closeButton: true,
                            progressBar: true,
                            timeOut: 3000
                        });


                    } else if (data.status === 'error') {

                        toastr.error('You have entered a wrong email or password', 'Login failed', {
                            positionClass: 'toast-top-right',
                            closeButton: true,
                            progressBar: true,
                            timeOut: 3000
                        });
                        console.log(data)
                    }
                    {{--if (data.status === 'success') {--}}
                    {{--    swal.fire({--}}
                    {{--        title: "Login successful",--}}
                    {{--        text: "logged in successfully",--}}
                    {{--        icon: 'success'--}}
                    {{--    }).then(() => {--}}
                    {{--        window.location.href('{{route("dashboard")}}');--}}
                    {{--    });--}}
                    {{--} else if (data.status === 'error') {--}}
                    {{--    swal.fire({--}}
                    {{--        title: "Login Failed",--}}
                    {{--        text: "Incorrect email or password",--}}
                    {{--        icon: 'error'--}}
                    {{--    })--}}
                    {{--}--}}
                },
                error: function (xhr, status, error) {
                    console.log(error);

                }
            });

        });
    });
    // $('#login-form').on('submit', function (e) {
    //     e.preventDefault();
    //     let formData = $(this).serialize();
    //
    //     $.ajax({
    //         type: 'POST',
    //         url: $(this).attr('action'),
    //         data: formData,
    //         success: function (data) {
    //             if (data.redirect) {
    //                 window.location.href = data.redirect;
    //             }
    //         },
    //         error: function (xhr) {
    //             $('#login-form').addClass('has-error');
    //             $('input[name="email"], input[name="password"]').addClass('is-invalid');
    //
    //             // Display the error message from the JSON response
    //             Swal.fire({
    //                 title: "Login Failed",
    //                 text: xhr.responseJSON.message || "An error occurred", // Use the message from the response
    //                 icon: 'error'
    //             });
    //         }
    //     });
    // });
</script>
<script>
    // JavaScript for toggling password visibility
    document.addEventListener('DOMContentLoaded', function () {
        const togglePasswordButton = document.querySelector('.toggle-password');
        const passwordInput = document.querySelector('#password');
        const eyeOpenPath = document.querySelector('#eye-open');
        const eyeClosedPath = document.querySelector('#eye-closed');
        const eyeClosedDetailPath = document.querySelector('#eye-closed-detail');
        const crossPath = document.querySelector('#cross');

        togglePasswordButton.addEventListener('click', function (event) {
            event.preventDefault();  // Prevent the default link behavior

            // Toggle the password field visibility
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;

            // Toggle the eye icon between open and closed
            if (type === 'password') {
                eyeOpenPath.style.display = 'none'; // Hide open eye
                eyeClosedPath.style.display = 'block'; // Show closed eye
                eyeClosedDetailPath.style.display = 'block'; // Show the closed eye detail
                crossPath.style.display = 'block'; // Show cross (x)
            } else {
                eyeOpenPath.style.display = 'block'; // Show open eye
                eyeClosedPath.style.display = 'none'; // Hide closed eye
                eyeClosedDetailPath.style.display = 'none'; // Hide the closed eye detail
                crossPath.style.display = 'none'; // Hide cross (x)
            }
        });
    });
</script>

</body>
</html>
