<!doctype html>
<html lang="en" @if(app()->getLocale()=="en") dir="ltr" @else dir="rtl" @endif >
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Home</title>

    <link href="{{asset('web/css/bootstrap.min.css')}}" rel='stylesheet'>
    <!-- animsition -->
    <link href="{{asset('web/css/animsition.min.css')}}" rel="stylesheet">
    <!-- lightgallery -->
    <link href="{{assert('web/css/css/lightgallery.css')}}" rel="stylesheet">
    <!-- font themify CSS -->
    <link href="{{asset('web/css/themify-icons.css')}}" rel="stylesheet">
    <!-- font awesome CSS -->
    <link href="{{asset('web/css/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/rs-plugin/css/settings.css')}}" media="screen"/>
    <link rel="stylesheet" href="{{asset('web/css/rev-settings.css')}}" type="text/css">
    <!-- owl -->
    <link href="{{asset('web/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/owl.theme.css')}}" rel="stylesheet">
    <!-- main css -->
    <link href="{{asset('web/css/animated-on3step.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/queriesstyle.css')}}" media="all" rel="stylesheet">
    @if (app()->getLocale() == 'ar')
        <link href="{{asset('web/css/styles-front-rtl.css')}}" rel="stylesheet">
    @endif
    @stack('css')
</head>
<body>
{{--<div class="page">--}}
@include('front.default.layout.includes.header')
<!-- Sidebar -->
@include('front.default.layout.includes.aside')
{{--    <div class="page-wrapper">--}}
<!-- Page body -->
@yield('content')
@include('front.default.layout.includes.footer')
{{--    </div>--}}
{{--</div>--}}

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

<!-- Libs JS -->
@yield('libs-js')

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    @if(session('success'))
    toastr.success("{{ session('success') }}", "Success", {
        closeButton: true,
        positionClass: 'toast-top-right'
    });
    @endif
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error("{{$error}}")
    @endforeach
    @endif
</script>

<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '.delete-item', function (e) {
            e.preventDefault();
            let deleteUrl = $(this).attr('href');
            Swal.fire({
                title: "{{ __('swal.sure') }}",
                text: "{{ __('swal.delete_warning') }}",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "{{ __('swal.btn') }}",
                cancelButtonText: "{{ __('swal.cancel') }}"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: deleteUrl,
                        success: function (data) {
                            if (data.status === 'success') {
                                Swal.fire({
                                    title: "{{ __('swal.btn') }}",
                                    text: "{{ __('swal.send') }}",
                                    icon: 'success',
                                    timer: 1200,
                                    showConfirmButton: false
                                }).then(() => {
                                    window.location.reload();
                                });
                            } else if (data.status === 'error') {
                                Swal.fire(
                                    "{{ __('swal.delete_error') }}",
                                    data.message,
                                    'error'
                                )
                            }
                        },
                        error: function (xhr, status, error) {
                            console.log(error);
                        }
                    });
                }
            });
        });
    });
</script>

<script>
    document.querySelector('.image').addEventListener('change', function () {
        if (this.files && this.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                document.querySelector('.image-preview').style.backgroundImage = `url('${e.target.result}')`;
            }

            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
@yield('js')
<script src="{{asset('web/js/js/pluginson3step.js')}}"></script>
<!-- slider revolution  -->
<script src="{{asset('web/js/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('web/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- velocity  -->
<script src="{{asset('web/js/js/velocity.min.js')}}"></script>
<!-- velocity  -->
<script src="{{asset('web/js/js/lightgallery.js')}}"></script>
<!-- main js -->
<script src="{{asset('web/js/js/sticky.js')}}"></script>
<script src="{{asset('web/js/js/on3step.js')}}"></script>
<script src="{{asset('web/js/js/plugin-form.js')}}"></script>
</body>
</html>
