<!doctype html>
<html lang="en" @if (app()->getLocale() == 'en') dir="ltr" @else dir="rtl" @endif>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - DotCms </title>
    <!-- CSS files -->
    <link rel="stylesheet" href="{{ url('dashboard/libs/summernote') }}/summernote-bs4.min.css" />

    <link rel="stylesheet" href="{{ url('dashboard/libs/summernote') }}/summernote-bs4.min.css" />

    @include('dashboard.layout.includes.css')
    @yield('style')
</head>

<body>
    <script src="{{ url('dashboard') }}/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
        @include('dashboard.layout.includes.header')
        <!-- Sidebar -->
        @include('dashboard.layout.includes.aside')
        <div class="page-wrapper">
            <!-- Page body -->
            @yield('content')
            @include('dashboard.layout.includes.footer')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

    <!-- Libs JS -->
    @yield('libs-js')
    <!-- Tabler Core -->
    <script src="{{ url('dashboard') }}/js/tabler.min.js?1692870487" defer></script>
    <script src="{{ url('dashboard') }}/js/demo.min.js?1692870487" defer></script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}", "Success", {
                closeButton: true,
                positionClass: 'toast-top-right'
            });
        @endif
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>

    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('body').on('click', '.delete-item', function(e) {
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
                            success: function(data) {
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
                            error: function(xhr, status, error) {
                                console.log(error);
                            }
                        });
                    }
                });
            });
        });
    </script>




<script src="{{ url('dashboard/libs/summernote') }}/summernote-bs4.min.js" referrerpolicy="origin"></script>
<script>
    $(document).ready(function () {
        $('#text_area_1').summernote();
        $('#text_area_2').summernote();

    });
</script>


<script>
    document.querySelector('.image').addEventListener('change', function () {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.querySelector('.image-preview').style.backgroundImage = `url('${e.target.result}')`;
            }
        }
    });
            $('body').on('click', '.delete-item', function(e) {
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
                            success: function(data) {
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
                            error: function(xhr, status, error) {
                                console.log(error);
                            }
                        });
                    }
                });
            });

    </script>

    <script>
        document.querySelector('.image').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('.image-preview').style.backgroundImage =
                        `url('${e.target.result}')`;
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>
    <script src="{{ url('dashboard/libs/summernote') }}/summernote-bs4.min.js" referrerpolicy="origin"></script>
    <script>
        $(document).ready(function() {
            $('#text_area_1').summernote();
            $('#text_area_2').summernote();
        });
    </script>
    @yield('js')
</body>

</html>
