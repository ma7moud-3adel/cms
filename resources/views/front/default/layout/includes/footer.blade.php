<!-- footer -->
<footer>
    <div class="container-fluid">

        <div class="row p-3-vh">
            <div class="col-md-3">
                <div class="logo">
                    <a class="centered" href="{{ route('web.index') }}">
                        <img class="h-100" alt="logo" src="{{ asset('web/img/logo.png') }}"
                             style="width: 15vh; height: 15vh;"/>
                    </a>
                </div>
                <div class="description">
                    We provides a full range of interior
                    design architectural design
                    natural materials.
                </div>
                <div class="s-social">
                    <a href="#"><span class="ti-twitter"></span></a>
                    <a href="#"><span class="ti-facebook"></span></a>
                    <a href="#"><span class="ti-linkedin"></span></a>
                    <a href="#"><span class="ti-instagram"></span></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="heading">
                    Contacts
                </div>
                <div class="s-address">
                    <div class="detail">
                        <span class="ti-location-pin"></span> cairo
                    </div>
                    <div class="detail">
                        <span class="ti-email"></span> <a
                                href="mailto:hellocohous@cohous.com">likedesign2024@gmail.com</a>
                    </div>
                    <div class="detail">
                        <span class="ti-mobile"></span> 01044408869
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="heading">
                    Latest Project
                </div>
                <div class="s-address">
                    @foreach($projects as $project)

                        @if(app()->getLocale()=='ar')
                            <div class="detail">
                                <a href="{{route('web.portfolio.view',$project->id)}}">{{$project->name_en}}</a>
                            </div>
                        @else
                            <div class="detail">
                                <a href="{{route('web.portfolio.view',$project->id)}}">{{$project->name_en}}</a>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="col-md-3">
                <div class="heading">
                    Subscribe
                </div>
                <form id="subsribe">
                    <input id="useremail" type="email" placeholder="Your E-Mail" required>
                    <input id="submit" type="submit" value="{{__('web.submit')}}">
                </form>
                <div class="description">
                    Follow our newsletter to stay updated about agency.
                </div>
            </div>
        </div>

        <div class="row p-3-vh">
            <div class="col-12">
                <div class="subfooter">
                    <div class="copyright">
                        Copyright©2021 Cohous All Rights Reserved.
                    </div>
                    <a class="terms" href="#">
                        Terms of use | Privacy Environmental Policy.
                    </a>
                </div>
            </div>
        </div>

    </div>
</footer>
<!-- footer end -->
