<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Aplikasi Website Real Estate dengan Laravel 10">
        <meta name="author" content="bahrylanckerz">
        <meta name="keywords" content="admin panel, admin dashboard, real estate">
        <title>Admin Login - Real Estate</title>
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <!-- End fonts -->
        <!-- core:css -->
        <link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <!-- endinject -->
        <!-- Layout styles -->  
        <link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css') }}">
        <!-- End layout styles -->
        <style>
            .auth-side-wrapper {
                background-image: url({{ asset('uploads/img/login.png') }}) !important;
            }
        </style>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="page-wrapper full-page">
                <div class="page-content d-flex align-items-center justify-content-center">
                    <div class="row w-100 mx-0 auth-page">
                        <div class="col-md-8 col-xl-6 mx-auto">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-4 pe-md-0">
                                        <div class="auth-side-wrapper">
                                        </div>
                                    </div>
                                    <div class="col-md-8 ps-md-0">
                                        <div class="auth-form-wrapper px-4 py-5">
                                            <a href="#" class="noble-ui-logo logo-light d-block mb-2">Real <span>Estate</span></a>
                                            <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                                            <form action="{{ route('login') }}" method="post" class="forms-sample">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="login" class="form-label">Email/Username/Phone</label>
                                                    <input type="text" id="login" name="login" class="form-control" placeholder="Email" value="{{ old('login') }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="userPassword" class="form-label">Password</label>
                                                    <input type="password" id="userPassword" name="password" class="form-control" autocomplete="current-password" placeholder="Password">
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" id="remember" name="remember" class="form-check-input">
                                                    <label class="form-check-label" for="remember">Remember me</label>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                                                </div>
                                                <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- core:js -->
        <script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/template.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
    </body>
</html>