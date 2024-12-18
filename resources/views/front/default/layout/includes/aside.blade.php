<!-- sidegalery-->
<div id="bgsidegalery"></div>
<div id="sidegalery" class="init">
    <div class="sidebar">
        <div id="closesidegalery" class="cl-sidebar init">
            <div>
                <span class="ti-close"></span>
            </div>
        </div>
        <div class="logo">
            <a class="centered" href="{{ route('web.index') }}">
                <img class="h-100" alt="logo" src="{{ asset('web/img/logo.png') }}" style="width: 15vh; height: 15vh;" />
            </a>
        </div>
{{--        <h3>{{__('web.gallery')}}</h3>--}}
{{--        <div class="s-galery">--}}
{{--            <div id="w-gallery-container" class="w-gallery-container">--}}

{{--                @foreach($aside_images as $image)--}}
{{--                    <a class="w-gallery" href="img/gallery/1.jpg">--}}
{{--                        <img src="{{asset('storage/'.$image)}}" alt="{{$image}}"--}}
{{--                             class="w-gallery-image">--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
        <h3>{{__('web.contact_info')}}</h3>
        <div class="s-address">
            <div class="detail">
                <span class="ti-location-pin"></span> cairo
            </div>
            <div class="detail">
                <span class="ti-email"></span> <a href="mailto:hellocohous@cohous.com">likedesign2024@gmail.com</a>
            </div>
            <div class="detail">
                <span class="ti-mobile"></span> 01044408869
            </div>
        </div>
        <div class="s-social">
            <a href="#"><span class="ti-twitter"></span></a>
            <a href="#"><span class="ti-facebook"></span></a>
            <a href="#"><span class="ti-linkedin"></span></a>
            <a href="#"><span class="ti-instagram"></span></a>
        </div>

    </div>
</div>
<!-- sidegalery end -->
