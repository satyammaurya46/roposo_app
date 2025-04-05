 @section('tutle','Login')
 @include('admin.Auth.header') 
    <div class="home-btn d-none d-sm-block">
        <a href="index.html"></a>
    </div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mt-4">
                                <div class="mb-3">
                                    <a href="index.html" class="">
                                        <img src="{{asset('public/backend/assets/images/logo-dark.png')}}" alt="" height="22" class="auth-logo logo-dark mx-auto">
                                        <img src="{{asset('public/backend/assets/images/logo-light.png')}}" alt="" height="22" class="auth-logo logo-light mx-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="p-3">
                                <h4 class="font-size-18 text-muted mt-2 text-center">Welcome Back !</h4>
                                <p class="text-muted text-center mb-4">Sign in to continue to upbond.</p>

                                <form class="form-horizontal" action="{{route('auth.login.process')}}" method="POST">
                                   @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="username">E-mail Address</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="password"
                                          name="password"  placeholder="Enter password">
                                    </div>

                                    <div class="mb-3 row mt-4">
                                        <div class="col-sm-6">
                                            <div class="form-checkbox">
                                                <input type="checkbox" class="form-check-input me-1"
                                                    id="customControlInline">
                                                <label class="form-label" class="form-check-label"
                                                    for="customControlInline">Remember me</label>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-sm-6 text-end">
                                            <a href="{{route('auth.recoverpw')}}" class="text-muted"><i
                                                    class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="row mb-4">
                                        <div class="col-12 text-center">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Log
                                                In</button>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center plan-line">
                                                or sign up with
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row mt-3">

                                        <div class="button-list btn-social-icon text-center">
                                            <button type="button" class="btn btn-facebook">
                                                <i class="fab fa-facebook"></i>
                                            </button>

                                            <button type="button" class="btn btn-twitter ms-1">
                                                <i class="fab fa-twitter"></i>
                                            </button>

                                            <button type="button" class="btn btn-linkedin  ms-1">
                                                <i class="fab fa-linkedin"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </form>
                                <!-- end form -->
                            </div>
                        </div>
                        <!-- end cardbody -->
                    </div>
                    <!-- end card -->
                    <div class="mt-5 text-center">
                        <p>Don't have an account ?<a href="{{route('auth.register')}}" class="fw-bold text-primary"> Signup
                                Now </a></p>
                        <p>©
                            <script>document.write(new Date().getFullYear())</script> Upbond. Crafted with <i
                                class="mdi mdi-heart text-danger"></i> by Themesdesign
                        </p>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
@include('admin.Auth.footer')




