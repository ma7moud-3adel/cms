<!-- header area -->
<section class="header header--2">
    <div class="top_bar top--bar2 d-flex align-items-center bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex topbar_content justify-content-between">
                        <div class="top_bar--info order-0 d-none d-lg-block align-self-center">
                            <ul>
                                <li><span class="la la-envelope"></span>
                                    <p>support@email.com</p>
                                </li>
                                <li><span class="la la-headphones"></span>
                                    <p>800 567.890.576</p>
                                </li>
                                <li><span class="la la-clock-o"></span>
                                    <p>Mon-Sat 8.00 - 18.00</p>
                                </li>
                            </ul>
                        </div>
                        <div class="top_bar--social">
                            <ul>
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start menu area -->
    <div class="menu_area menu1 menu--sticky">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light px-0">
                <a class="navbar-brand order-sm-1 order-1" href=""><img src="{{ asset('demo/img/logo.png') }}"
                        alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="la la-bars"></span>
                </button>
                <div class="collapse navbar-collapse order-md-1" id="navbarSupportedContent2">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item {{ Request::route()->getName() == 'demo.index' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('demo.index') }}">Home</a>
                        </li>
                        <li
                            class="nav-item {{ Request::route()->getName() == 'demo.products' || Request::route()->getName() == 'demo.productSingle' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('demo.products') }}" aria-haspopup="true"
                                aria-expanded="false">Products</a>
                        </li>
                        <li
                            class="nav-item {{ Request::route()->getName() == 'demo.projects' || Request::route()->getName() == 'demo.projectSingle' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('demo.projects') }}" aria-haspopup="true"
                                aria-expanded="false">Projects</a>
                        </li>
                        <li class="nav-item {{ Request::route()->getName() == 'demo.services' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('demo.services') }}" aria-haspopup="true"
                                aria-expanded="false">Services</a>
                        </li>
                        <li
                            class="nav-item {{ Request::route()->getName() == 'demo.blogs' || Request::route()->getName() == 'demo.viewBlog' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('demo.blogs') }}" aria-haspopup="true"
                                aria-expanded="false">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('demo.about') }}" aria-haspopup="true"
                                aria-expanded="false">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Contact</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="contact-1.html">Contact One</a>
                                <a class="dropdown-item" href="{{ route('demo.contact') }}">Contact Us</a>
                            </div>
                        </li>
                    </ul>
                    <!-- end: .navbar-nav -->
                </div>
                <div class="top_bar--lang align-self-center order-2">
                    <div class="menu-right centered">
                        <ul class="iconright">
                            <li>
                                <a href="{{ url('/demo/change-lang/' . (app()->getLocale() == 'en' ? 'ar' : 'en')) }}"
                                    class="lang-switch-btn"
                                    title="Switch to {{ app()->getLocale() == 'en' ? 'Arabic' : 'English' }}">
                                    {{ app()->getLocale() == 'en' ? 'AR' : 'EN' }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- end menu area -->
</section>
<!-- end: .header -->
