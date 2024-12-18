<!doctype html>
<html lang="en">

@include('front.demo.layout.includes.head')

<body>
    <section class="login-register bgimage biz_overlay overlay--secondary2">
        <div class="bg_image_holder">
            <img src="img/image3.jpg" alt="">
        </div>
        <div class="content_above">
            <!-- end menu area -->
            <div class="signup-form d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="form-wrapper">
                                <div class="card card-shadow">
                                    <div class="card-header">
                                        <h4 class="text-center">Signup Here!</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('user.register.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" placeholder="Full Name" name="name"
                                                    class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" placeholder="Email" name="email"
                                                    class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="Password" name="password"
                                                    class="form-control" required>
                                            </div>

                                            <div class="form-group text-center m-top-30 m-bottom-20">
                                                <button class="btn btn-secondary" type="submit">Sign Up</button>
                                            </div>
                                        </form>
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <p class="text-center m-bottom-25">Already have an account? <a
                                                href="{{ route('user.login') }}">Log In</a></p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .col-lg-6 -->
                    </div>
                </div>
            </div><!-- ends: .login-form -->
        </div>
    </section>

    @include('front.demo.layout.includes.foot')

</body>

</html>
