@section('title', 'Register')
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
                                        <img src="{{('public/backend/assets/images/logo-dark.png')}}" alt="" height="22" class="auth-logo logo-dark mx-auto">
                                        <img src="{{('public/backend/assets/images/logo-light.png')}}" alt="" height="22" class="auth-logo logo-light mx-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="p-3">
                                <h4 class="font-size-18 text-muted mt-2 text-center">Free Register</h4>
                                <p class="text-muted text-center mb-4">Get your free upbond account now.</p>

                                <form class="form-horizontal" action="index.html">

                                    <div class="mb-3">
                                        <label class="form-label" for="useremail">Email</label>
                                        <input type="email" class="form-control" id="useremail"
                                            placeholder="Enter email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="Enter password">
                                    </div>

                                    <div class="mb-3 row mt-4">
                                        <div class="col-12 text-end">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Register</button>
                                        </div>
                                    </div>



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

                                    <div class="mt-4 row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <p class="text-muted mb-0">By registering you agree to the Upbond <a
                                                        href="#">Terms of Use</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Already have an account ? <a href="{{route('auth.login')}}" class="fw-bold text-primary"> Login </a>
                        </p>
                        <p>©
                            <script>document.write(new Date().getFullYear())</script> Upbond. Crafted with <i
                                class="mdi mdi-heart text-danger"></i> by Themesbrand
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@include('admin.Auth.footer')