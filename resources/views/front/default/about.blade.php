@extends('front.default.layout.app')
@section('content')

<!-- preloader -->
<div id="preloader">
    <div class="loader">
        <div class="spinner"></div>
    </div>
</div>
<!-- preloader -->

<!-- container-wrapper -->
<div class="content-wrapper animsition-overlay">
    <!-- bgblock -->
    <div id="bgblock"></div>


    <!-- breadcumb -->
{{--    <section class="breadcumb" aria-label="breadcumb" style="background-image: url('img/breadcumb.jpg');">--}}
        <section class="breadcumb" aria-label="breadcumb">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="main">
                        <div class="bread">
                            <div class="bread-title">About</div>
                            <div class="bread-subtitle">
                                <a href="index.html">Home</a>
                                <span class="spacebread"></span>
                                <span>About</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcumb end -->

    <!-- section about -->
    <section class="no-top no-bottom bggray" aria-label="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-0">
                    <img src="img/about.png" class="imgbg-png" alt="imgabout">
                </div>
                <div class="col-md-6 centered">
                    <div class="detailcontent">
                        <div class="subheading">ABOUT COMPANY</div>
                        <div class="heading">We Best In Interior</div>
                        <div class="textdetail">The basic philosophy of our studio is to create individual,
                            aesthetically stunning solutions for our customers by lightning-fast
                            development of projects employing unique style and architecture.
                            Even if you don't have a ready sketch of what you want - we will help you
                            to get the result you dreamed of.</div>
                        <div class="btn-content mt-5">
                            <span class="shine"></span>
                            <a href="#">More Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section about end -->

    <!-- section testimony -->
    <section aria-label="testimony">
        <div class="container-fluid">
            <div class="row p-3-vh">
                <div class="col-12 centered mb-5">
                    <div class="detailcontent text-center p-0">
                        <div class="subheading">TESTIMONIALS</div>
                        <div class="heading">What People Say</div>
                    </div>
                </div>
                <div class="col-12">
                    <div id="owl-testimony" class="owl-carousel owl-theme">

                        <div class='item'>
                            <div class="content-testy">
                                <div class="testy-text">
              <span>You will never fake
                the feeling of being in such
                a place. The live minimalism base
                on the natural materials &
                alive unprocessed.
              </span>
                                </div>
                                <div class="user">
                                    <div class="img">
                                        <img src="img/testimony/1.jpg" alt="imgtesty">
                                    </div>
                                    <div class="name">
                                        Paul Rombes
                                    </div>
                                    <div class="title">
                                        Our Client
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='item'>
                            <div class="content-testy">
                                <div class="testy-text">
              <span>You will never fake
                the feeling of being in such
                a place. The live minimalism base
                on the natural materials &
                alive unprocessed.
              </span>
                                </div>
                                <div class="user">
                                    <div class="img">
                                        <img src="img/testimony/2.jpg" alt="imgtesty">
                                    </div>
                                    <div class="name">
                                        Bill Clapton
                                    </div>
                                    <div class="title">
                                        Our Client
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='item'>
                            <div class="content-testy">
                                <div class="testy-text">
              <span>You will never fake
                the feeling of being in such
                a place. The live minimalism base
                on the natural materials &
                alive unprocessed.
              </span>
                                </div>
                                <div class="user">
                                    <div class="img">
                                        <img src="img/testimony/3.jpg" alt="imgtesty">
                                    </div>
                                    <div class="name">
                                        Jesica James
                                    </div>
                                    <div class="title">
                                        Our Client
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='item'>
                            <div class="content-testy">
                                <div class="testy-text">
              <span>You will never fake
                the feeling of being in such
                a place. The live minimalism base
                on the natural materials &
                alive unprocessed.
              </span>
                                </div>
                                <div class="user">
                                    <div class="img">
                                        <img src="img/testimony/1.jpg" alt="imgtesty">
                                    </div>
                                    <div class="name">
                                        Paul Rombes
                                    </div>
                                    <div class="title">
                                        Our Client
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='item'>
                            <div class="content-testy">
                                <div class="testy-text">
              <span>You will never fake
                the feeling of being in such
                a place. The live minimalism base
                on the natural materials &
                alive unprocessed.
              </span>
                                </div>
                                <div class="user">
                                    <div class="img">
                                        <img src="img/testimony/2.jpg" alt="imgtesty">
                                    </div>
                                    <div class="name">
                                        Bill Clapton
                                    </div>
                                    <div class="title">
                                        Our Client
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='item'>
                            <div class="content-testy">
                                <div class="testy-text">
              <span>You will never fake
                the feeling of being in such
                a place. The live minimalism base
                on the natural materials &
                alive unprocessed.
              </span>
                                </div>
                                <div class="user">
                                    <div class="img">
                                        <img src="img/testimony/3.jpg" alt="imgtesty">
                                    </div>
                                    <div class="name">
                                        Jesica James
                                    </div>
                                    <div class="title">
                                        Our Client
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section testimony end -->

    <!-- section projects -->
    <section aria-label="section" class="no-padding">
        <div class='container-fluid'>
            <div class='row'>
                <div class="col-md-12 p-0">
                    <div id="owl-projects" class="owl-carousel owl-theme slick slickproject">

                        <div class='item'>
                            <div class='bg'>
                                <img
                                    src="img/projects/img1.jpg"
                                    class="img-fluid"
                                    alt="Imageteam"
                                />
                            </div>
                            <div class='desc'>
                                <div class='tag'>Interior</div>
                                <div class='name'>Entertainment Unit</div>
                            </div>
                            <div class='icon'>
                                <a href="project-detail.html">
                                    View Project
                                </a>
                            </div>
                        </div>

                        <div class='item'>
                            <div class='bg'>
                                <img
                                    src="img/projects/img2.jpg"
                                    class="img-fluid"
                                    alt="Imageteam"
                                />
                            </div>
                            <div class='desc'>
                                <div class='tag'>Furniture</div>
                                <div class='name'>Mounted Unit</div>
                            </div>
                            <div class='icon'>
                                <a href="project-detail.html">
                                    View Project
                                </a>
                            </div>
                        </div>

                        <div class='item'>
                            <div class='bg'>
                                <img
                                    src="img/projects/img3.jpg"
                                    class="img-fluid"
                                    alt="Imageteam"
                                />
                            </div>
                            <div class='desc'>
                                <div class='tag'>Interior</div>
                                <div class='name'>Contemporary Wall</div>
                            </div>
                            <div class='icon'>
                                <a href="project-detail.html">
                                    View Project
                                </a>
                            </div>
                        </div>

                        <div class='item'>
                            <div class='bg'>
                                <img
                                    src="img/projects/img4.jpg"
                                    class="img-fluid"
                                    alt="Imageteam"
                                />
                            </div>
                            <div class='desc'>
                                <div class='tag'>Interior</div>
                                <div class='name'>Crockery Unit</div>
                            </div>
                            <div class='icon'>
                                <a href="project-detail.html">
                                    View Project
                                </a>
                            </div>
                        </div>

                        <div class='item'>
                            <div class='bg'>
                                <img
                                    src="img/projects/img1.jpg"
                                    class="img-fluid"
                                    alt="Imageteam"
                                />
                            </div>
                            <div class='desc'>
                                <div class='tag'>Interior</div>
                                <div class='name'>Entertainment Unit</div>
                            </div>
                            <div class='icon'>
                                <a href="project-detail.html">
                                    View Project
                                </a>
                            </div>
                        </div>

                        <div class='item'>
                            <div class='bg'>
                                <img
                                    src="img/projects/img2.jpg"
                                    class="img-fluid"
                                    alt="Imageteam"
                                />
                            </div>
                            <div class='desc'>
                                <div class='tag'>Furniture</div>
                                <div class='name'>Mounted Unit</div>
                            </div>
                            <div class='icon'>
                                <a href="project-detail.html">
                                    View Project
                                </a>
                            </div>
                        </div>

                        <div class='item'>
                            <div class='bg'>
                                <img
                                    src="img/projects/img3.jpg"
                                    class="img-fluid"
                                    alt="Imageteam"
                                />
                            </div>
                            <div class='desc'>
                                <div class='tag'>Interior</div>
                                <div class='name'>Contemporary Wall</div>
                            </div>
                            <div class='icon'>
                                <a href="project-detail.html">
                                    View Project
                                </a>
                            </div>
                        </div>

                        <div class='item'>
                            <div class='bg'>
                                <img
                                    src="img/projects/img4.jpg"
                                    class="img-fluid"
                                    alt="Imageteam"
                                />
                            </div>
                            <div class='desc'>
                                <div class='tag'>Interior</div>
                                <div class='name'>Crockery Unit</div>
                            </div>
                            <div class='icon'>
                                <a href="project-detail.html">
                                    View Project
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- section projects end -->

    <!-- section about -->
    <section class="no-top no-bottom bggray" aria-label="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="detailcontent">
                        <div class="subheading">ABOUT SERVICES</div>
                        <div class="heading">List of Our Services</div>

                        <!-- accordion -->
                        <div id="accordion" class="accordion">
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#acc1">
                    <span class="card-title">
                        How the interior design and how it work?
                    </span>
                                </a>
                                <div id="acc1" class="card-body collapse" data-parent="#accordion" >
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                                    </p>
                                </div>
                                <a class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#acc2">
                    <span class="card-title">
                      How decor and interior design is cost?
                    </span>
                                </a>
                                <div id="acc2" class="card-body collapse" data-parent="#accordion" >
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                                    </p>
                                </div>
                                <a class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#acc3">
                    <span class="card-title">
                      How much time will spend on process?
                    </span>
                                </a>
                                <div id="acc3" class="collapse" data-parent="#accordion" >
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                                    </div>
                                </div>
                                <a class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#acc4">
                    <span class="card-title">
                      Can i create ideas of design?
                    </span>
                                </a>
                                <div id="acc4" class="collapse" data-parent="#accordion" >
                                    <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- accordion end -->
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <img src="img/aboutconcreate.png" class="imgbg-png pb-0" alt="imgabout">
                </div>
            </div>
        </div>
    </section>
    <!-- section about end -->

    <!-- section team -->
    <section class="no-bottom" aria-label="team">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 centered mb-5">
                    <div class="detailcontent text-center p-0">
                        <div class="subheading">OUR PROFESSIONALS</div>
                        <div class="heading">Meet Our Team</div>
                    </div>
                </div>
                <div class="col-12 p-0">
                    <div id="owl-team" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="listteam">
                                <div class="bgimg">
                                    <img src="img/team/1.png" alt="team">
                                </div>
                                <div class="detail">
                                    <div class="listdetail">
                                        <div class="name">ROBERT JHOSUA</div>
                                        <div class="jobtitle">ARCHITEC DESIGN</div>
                                        <div class="s-social">
                                            <a href="#"><span class="ti-twitter"></span></a>
                                            <a href="#"><span class="ti-facebook"></span></a>
                                            <a href="#"><span class="ti-linkedin"></span></a>
                                            <a href="#"><span class="ti-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listteam">
                                <div class="bgimg">
                                    <img src="img/team/2.png" alt="team">
                                </div>
                                <div class="detail">
                                    <div class="listdetail">
                                        <div class="name">ROBERT JHOSUA</div>
                                        <div class="jobtitle">ARCHITEC DESIGN</div>
                                        <div class="s-social">
                                            <a href="#"><span class="ti-twitter"></span></a>
                                            <a href="#"><span class="ti-facebook"></span></a>
                                            <a href="#"><span class="ti-linkedin"></span></a>
                                            <a href="#"><span class="ti-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listteam">
                                <div class="bgimg">
                                    <img src="img/team/3.png" alt="team">
                                </div>
                                <div class="detail">
                                    <div class="listdetail">
                                        <div class="name">ROBERT JHOSUA</div>
                                        <div class="jobtitle">ARCHITEC DESIGN</div>
                                        <div class="s-social">
                                            <a href="#"><span class="ti-twitter"></span></a>
                                            <a href="#"><span class="ti-facebook"></span></a>
                                            <a href="#"><span class="ti-linkedin"></span></a>
                                            <a href="#"><span class="ti-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listteam">
                                <div class="bgimg">
                                    <img src="img/team/4.png" alt="team">
                                </div>
                                <div class="detail">
                                    <div class="listdetail">
                                        <div class="name">ROBERT JHOSUA</div>
                                        <div class="jobtitle">ARCHITEC DESIGN</div>
                                        <div class="s-social">
                                            <a href="#"><span class="ti-twitter"></span></a>
                                            <a href="#"><span class="ti-facebook"></span></a>
                                            <a href="#"><span class="ti-linkedin"></span></a>
                                            <a href="#"><span class="ti-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="listteam">
                                <div class="bgimg">
                                    <img src="img/team/5.png" alt="team">
                                </div>
                                <div class="detail">
                                    <div class="listdetail">
                                        <div class="name">ROBERT JHOSUA</div>
                                        <div class="jobtitle">ARCHITEC DESIGN</div>
                                        <div class="s-social">
                                            <a href="#"><span class="ti-twitter"></span></a>
                                            <a href="#"><span class="ti-facebook"></span></a>
                                            <a href="#"><span class="ti-linkedin"></span></a>
                                            <a href="#"><span class="ti-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section team end -->

    <!-- section coloumn blog -->
    <section aria-label="blog">
        <div class="container-fluid">
            <div class="row p-3-vh">
                <div class="col-12 centered mb-5">
                    <div class="detailcontent text-center p-0">
                        <div class="subheading">OUR BLOG</div>
                        <div class="heading">Latest News</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blogcolumn">
                        <div class="imgtop">
                            <img src="img/blog/img1.jpg" alt="" class="w-gallery-image">
                            <span class="tag">
            BATHROOM
          </span>
                        </div>
                        <div class="blogcont">
                            <div class="date">
                                <span>JANUARY 14, 2021</span> -----  <span>JESICA JAMES</span>
                            </div>
                            <div class="headingblog">
                                7 Chic Ways to Organize Your Home for Spring
                            </div>
                            <div class="descblog">
                                If you don’t have any ideas for your bathroom in house,
                                maybe you must look at this ten tips bathroom
                                interior design, and.....
                            </div>
                            <div class="btn-content m-0">
                                <span class="shine"></span>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blogcolumn">
                        <div class="imgtop">
                            <img src="img/blog/img2.jpg" alt="" class="w-gallery-image">
                            <span class="tag">
            SKETCH
          </span>
                        </div>
                        <div class="blogcont">
                            <div class="date">
                                <span>JANUARY 16, 2021</span> -----  <span>JESICA JAMES</span>
                            </div>
                            <div class="headingblog">
                                See How We're Celebrating International Women's Day
                            </div>
                            <div class="descblog">
                                If you don’t have any ideas for your bathroom in house,
                                maybe you must look at this ten tips bathroom
                                interior design, and.....
                            </div>
                            <div class="btn-content m-0">
                                <span class="shine"></span>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blogcolumn">
                        <div class="imgtop">
                            <img src="img/blog/img3.jpg" alt="" class="w-gallery-image">
                            <span class="tag">
            COLORS
          </span>
                        </div>
                        <div class="blogcont">
                            <div class="date">
                                <span>JANUARY 19, 2021</span> -----  <span>JESICA JAMES</span>
                            </div>
                            <div class="headingblog">
                                6 Design Ideas to Transition Your Home for Spring
                            </div>
                            <div class="descblog">
                                If you don’t have any ideas for your bathroom in house,
                                maybe you must look at this ten tips bathroom
                                interior design, and.....
                            </div>
                            <div class="btn-content m-0">
                                <span class="shine"></span>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- section coloumn blog end -->


</div>
<!-- container-wrapper end -->



<!-- ScrolltoTop -->
<div id="totop" class="init">
    <i class="fa fa-chevron-up"></i>
</div>

@endsection
