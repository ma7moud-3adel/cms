<header class="init" style="height: 15vh"><!-- header -->
    <!-- nav -->    <div class="navbar-default-white navbar-fixed-top">
        <div class="container-fluid">
            <!-- row -->
            <div class="row bg-black p-3-vh align-items-center"
                 style="display: flex; align-items: center; justify-content: space-between;">
                <!-- logo -->
                <div class="logo">
                    <a class="centered" href="{{ route('web.index') }}">
                        <img class="h-100" alt="logo" src="{{ asset('web/img/logo.png') }}"
                             style="width: 15vh; height: 15vh;"/>
                    </a>
                </div>
                <!-- logo end -->


                <!-- mainmenu start -->                <div class="white menu-init" id="main-menu">
                    <nav id="menu-center">
                        <ul>
                            <li>
                                <a class="actived" href="{{route('web.index')}}">{{__('web.home')}}
                                    {{--                                    <span class="span-drop"></span>--}}
                                </a>
                                {{--                                <ul>--}}
                                {{--                                    <li><a href="index1.html">Index-1</a></li>--}}                                {{--                                    <li><a href="index2.html">Index-2</a></li>--}}                                {{--                                    <li><a href="index3.html">Index-3</a></li>--}}                                {{--                                    <li><a href="index4.html">Index-4</a></li>--}}                                {{--                                    <li><a href="index5.html">Index-5</a></li>--}}                                {{--                                </ul>--}}                            </li>
                            {{--                            <li>--}}
                            {{--                                <a href="#">{{__('web.pages')}}--}}                            {{--                                    <span class="span-drop"></span>--}}                            {{--                                </a>--}}                            {{--                                <ul>--}}                            {{--                                    --}}{{--                                    <li><a href="about.html">{{__('web.about')}}</a></li>--}}                            {{--                                    <li><a href="{{route('web.about')}}">{{__('web.about_us')}}</a></li>--}}                            {{--                                    --}}{{--                                    <li><a href="team-detail.html">Team Detail</a></li>--}}                            {{--                                    --}}{{--                                    <li><a href="{{route('web.terms')}}">{{__('web.terms_and_privacy')}}</a></li>--}}                            {{--                                </ul>--}}                            {{--                            </li>--}}                            <li>
                                {{--                                @if(isset($services->first()->id))--}}
                                {{--                                <a>{{trans('web.services')}}--}}
                                {{--                                    <span class="span-drop"></span>--}}
                                {{--                                </a>--}}
                                @if($services->isEmpty())
                                    <a>{{trans('web.services')}}
                                        <span class="span-drop"></span>
                                    </a>
                                @else
                                    <a href="{{route('web.services',$services->first()->id)}}">{{trans('web.services')}}
                                        <span class="span-drop"></span>
                                    </a>
                                @endif
                                {{--                                @else--}}
                                {{--                                    <a href="#">{{trans('web.services')}}--}}                                {{--                                        <span class="span-drop"></span>--}}                                {{--                                    </a>--}}                                {{--                                @endif--}}
                                <ul>
                                    @if(app()->getLocale()=='ar')

                                        @foreach($services as $service)
                                            <li>
                                                <a href="{{route('web.services',$service->id)}}">{{$service->name_ar}}</a>
                                            </li>
                                        @endforeach
                                    @else                                        @foreach($services as $service)
                                        <li>
                                            <a href="{{route('web.services',$service->id)}}">{{$service->name_en}}</a>
                                        </li>
                                    @endforeach
                                    @endif                                    {{--                                    <li><a href="services-exterior.html">Exterior Design</a></li>--}}
                                    {{--                                    <li><a href="services-custom.html">Custom Solution</a></li>--}}                                    {{--                                    <li><a href="services-interior.html">Interior & Decor</a></li>--}}                                    {{--                                    <li><a href="services-concept.html">Design Concept</a></li>--}}                                </ul>
                            </li>
                            <li>                                @if($projects->isEmpty())
                                    <a>{{trans('web.portfolio')}}
                                        <span class="span-drop"></span>
                                    </a>
                                @else

                                    <a href="{{route('web.portfolio')}}">{{trans('web.portfolio')}}
                                        <span class="span-drop"></span>
                                    </a>
                                @endif


                                <ul>
                                    @if(app()->getLocale()=='ar')
                                        @foreach($projects as $project)
                                            <li>
                                                <a href="{{route('web.portfolio.view',$project->id)}}">{{$project->name_ar}}</a>
                                            </li>
                                        @endforeach
                                    @else                                        @foreach($projects as $project)
                                        <li>
                                            <a href="{{route('web.portfolio.view',$project->id)}}">{{$project->name_en}}</a>
                                        </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li>                                <a href="{{route('web.blogs')}}">{{trans('web.blog')}}
                                    {{--                                    <span class="span-drop"></span>--}}
                                </a>
                                <ul>                                    {{--                                    @foreach($blogs as $blog)--}}
                                    {{--                                        <li><a href="{{route('web.blog.view',$blog->id)}}">{{$blog->name_en}}</a></li>--}}                                    {{--                                    @endforeach--}}                                    {{--                                    <li><a href="blog.html">Blog</a></li>--}}                                    {{--                                    <li><a href="single-blog.html">Blog-single</a></li>--}}                                </ul>
                            </li>
                            <li>                                <a class="last" href="{{route('web.contact')}}">{{trans('web.contact')}}</a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- mainmenu end -->

                <div class="menu-right centered">
                    <ul class="iconright">

                        <li>

                            @if (app()->getLocale() == 'en')
                                <a
                                    href="{{ url('/change-lang/ar') }}" class="btn" rel="noreferrer"
                                >
                                    {{--                                    {{__('web.arabic')}}--}}

                                    @if(app()->getLocale()=='en')
                                        العربيه
                                    @endif


                                    {{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"--}}
                                    {{--                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}                                    {{--                                         stroke-linejoin="round"--}}                                    {{--                                         class="icon icon-tabler icons-tabler-outline icon-tabler-a-b-2">--}}                                    {{--                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>--}}                                    {{--                                        <path--}}                                    {{--                                            d="M16 21h3c.81 0 1.48 -.67 1.48 -1.48l.02 -.02c0 -.82 -.69 -1.5 -1.5 -1.5h-3v3z"/>--}}                                    {{--                                        <path d="M16 15h2.5c.84 -.01 1.5 .66 1.5 1.5s-.66 1.5 -1.5 1.5h-2.5v-3z"/>--}}                                    {{--                                        <path d="M4 9v-4c0 -1.036 .895 -2 2 -2s2 .964 2 2v4"/>--}}                                    {{--                                        <path d="M2.99 11.98a9 9 0 0 0 9 9m9 -9a9 9 0 0 0 -9 -9"/>--}}                                    {{--                                        <path d="M8 7h-4"/>--}}                                    {{--                                    </svg>--}}
                                    {{--                                    Arabic--}}                                </a>
                            @else
                                <a href="{{ url('/change-lang/en') }}" class="btn" rel="noreferrer">
                                    {{--                                    {{__('web.english')}}--}}
                                    @if(app()->getLocale()=='ar')
                                        English
                                    @endif
                                    {{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"--}}
                                    {{--                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}                                    {{--                                         stroke-linejoin="round"--}}                                    {{--                                         class="icon icon-tabler icons-tabler-outline icon-tabler-a-b-2">--}}                                    {{--                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>--}}                                    {{--                                        <path--}}                                    {{--                                            d="M16 21h3c.81 0 1.48 -.67 1.48 -1.48l.02 -.02c0 -.82 -.69 -1.5 -1.5 -1.5h-3v3z"/>--}}                                    {{--                                        <path d="M16 15h2.5c.84 -.01 1.5 .66 1.5 1.5s-.66 1.5 -1.5 1.5h-2.5v-3z"/>--}}                                    {{--                                        <path d="M4 9v-4c0 -1.036 .895 -2 2 -2s2 .964 2 2v4"/>--}}                                    {{--                                        <path d="M2.99 11.98a9 9 0 0 0 9 9m9 -9a9 9 0 0 0 -9 -9"/>--}}                                    {{--                                        <path d="M8 7h-4"/>--}}                                    {{--                                    </svg>--}}                                    {{--                                    English--}}                                </a>
                            @endif

                            {{--                            @if()--}}
                            {{--                            <button>--}}                            {{--                            </button>--}}                            {{--                            @endif--}}                        </li>

                        {{--                        <li>--}}
                        {{--                            <a class="c-bags" href="#">--}}                        {{--                                <span class="ti-bag"></span>--}}                        {{--                                <span class="tot">1</span>--}}                        {{--                            </a>--}}                        {{--                            <ul class="shop" id="shopbags">--}}                        {{--                                <li>--}}                        {{--                                    <a href="#">--}}                        {{--                                        <div class="img">--}}                        {{--                                            <img alt="cart" src="img/cart/1.jpg">--}}                        {{--                                        </div>--}}                        {{--                                        <div class="title">--}}                        {{--                                            Orange Leather Sofa <span>1x</span>--}}                        {{--                                        </div>--}}                        {{--                                        <div class="price">--}}                        {{--                                            <span>$</span>390--}}                        {{--                                        </div>--}}                        {{--                                    </a>--}}                        {{--                                    <a href="#" class="xcancel">x</a>--}}                        {{--                                </li>--}}                        {{--                                <li>--}}                        {{--                                    <a href="#">--}}                        {{--                                        <div class="img">--}}                        {{--                                            <img alt="cart" src="img/cart/2.jpg">--}}                        {{--                                        </div>--}}                        {{--                                        <div class="title">--}}                        {{--                                            Wood Lamp Room <span>1x</span>--}}                        {{--                                        </div>--}}                        {{--                                        <div class="price">--}}                        {{--                                            <span>$</span>210--}}                        {{--                                        </div>--}}                        {{--                                    </a>--}}                        {{--                                    <a href="#" class="xcancel">x</a>--}}                        {{--                                </li>--}}                        {{--                                <li class="price">--}}                        {{--                                    Total <span>$600</span>--}}                        {{--                                </li>--}}                        {{--                                <li class="total">--}}                        {{--                                    <a href="#" class="viewcart">--}}                        {{--                                        VIEW CART--}}                        {{--                                    </a>--}}                        {{--                                    <a href="#" class="viewcart white">--}}                        {{--                                        CHECKOUT--}}                        {{--                                    </a>--}}                        {{--                                </li>--}}                        {{--                            </ul>--}}                        {{--                        </li>--}}                        <li>
                            <a class="c-search" href="#"><span class="ti-search"></span></a>
                            <ul class="shop search" id="s-search">
                                <li>
                                    <form role="search" method="get" class="search-form form" action="#">
                                        <label>
                                            <input type="search" class="search-field" placeholder="Search..." value=""
                                                   name="s" title=""/>
                                        </label>
                                        <input type="submit" class="search-submit button" value="GO"/>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li>                            <div id="showside" class="d-none-mobile"><span class="ti-menu"></span></div>
                            <div id="showmobile"><span class="ti-menu"></span></div>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- row end-->
        </div><!-- container end -->
    </div>
    <!-- nav -->
</header><!-- header end -->
