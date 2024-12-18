<!doctype html>
<html lang="en">

@include('front.demo.layout.includes.head')

<body>
    <section class="login-register bgimage biz_overlay overlay--secondary2">
        <div class="bg_image_holder">
            <img src="{{ asset('demo/img/image3.jpg') }}" alt="" width="900">
        </div>
        <div class="content_above">
            <!-- end menu area -->
            <div class="login-form d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                            <div class="form-wrapper">
                                <div class="card card-shadow">
                                    <div class="card-header">
                                        <h4 class="text-center">Sign In Here!</h4>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('user.login.store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="User Name"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="Password"
                                                    class="form-control">
                                            </div>
                                            <div class="form-action d-flex justify-content-between">
                                                <div class="custom-control custom-checkbox checkbox-secondary">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">Remember
                                                        Me</label>
                                                </div>
                                                <a href="" class="color-secondary">Lost your password?</a>
                                            </div>
                                            <div class="form-group text-center m-bottom-20">
                                                <button class="btn btn-secondary" type="submit">Sign In</button>
                                            </div>
                                        </form>
                                        <p class="text-center m-bottom-25">Don't you have an account? <a
                                                href="{{ route('user.register') }}">Register</a></p>
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
