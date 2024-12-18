<!doctype html>
<html lang="en">

@include('front.demo.layout.includes.head')

<body>
    @include('front.demo.layout.includes.header')

    @yield('content')

    @include('front.demo.layout.includes.footer')


    <div class="go_top">
        <span class="la la-angle-up"></span>
    </div>


    @include('front.demo.layout.includes.foot')

</body>

</html>
