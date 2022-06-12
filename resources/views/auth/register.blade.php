<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Registration | Superadministrator</title>
    <link rel="apple-touch-icon" href="{{asset('ADMIN_ASSETS/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('ADMIN_ASSETS/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/app-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/app-assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/app-assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/app-assets/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/app-assets/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/app-assets/css/themes/bordered-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/app-assets/css/themes/semi-dark-layout.min.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/app-assets/css/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('ADMIN_ASSETS/assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2" style="max-width:600px">
                        <!-- Login basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="index.html" class="brand-logo">
                                    <h2 class="brand-text text-primary ms-1 text-center">Technofirm</h2>
                                </a>
                                <!-- Session Status -->
                                {{session('status')}}
                                <!-- Session Status -->

                                <!-- Error Status For name -->
                                @if ($errors->has('name'))
                                <li class="error" style="color: red; font-weight:bold;">{{ $errors->first('name') }}</li>
                                @endif
                                <!-- Error Status For name -->

                                <!-- Error Status For Email -->
                                @if ($errors->has('email'))
                                <li class="error" style="color: red; font-weight:bold;">{{ $errors->first('email') }}</li>
                                @endif
                                <!-- Error Status For Email -->

                                <!-- Error Status For Password -->
                                @if ($errors->has('password'))
                                <li class="error" style="color: red; font-weight:bold;">{{ $errors->first('password') }}</li>
                                @endif
                                <!-- Error Status For Password -->

                                <!-- Error Status For Password -->
                                @if ($errors->has('password_confirmation'))
                                <li class="error" style="color: red; font-weight:bold;">{{ $errors->first('password_confirmation') }}</li>
                                @endif
                                <!-- Error Status For Password -->

                                {{-- Form Start --}}
                                <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}" novalidate="novalidate">
                                    @csrf
                                    <div class="mb-1">
                                        <label class="form-label" for="register-username">Name</label>
                                        <input class="form-control" type="text" name="name" value="{{ (old('name')?old('name'):'') }}" id="register-username" placeholder="write your name" autofocus autocomplete="off" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-email">Email</label>
                                        <input class="form-control" type="email" name="email" value="{{ (old('email')?old('email'):'') }}" placeholder="john@example.com" required />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-password">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="register-password" type="password" name="password" required autocomplete="current-password" placeholder="Write your password" aria-describedby="register-password" tabindex="3" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-password">Confirm Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="register-password" type="password" name="password_confirmation" placeholder="Write your password again" aria-describedby="register-password" tabindex="3" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="5">Register</button>
                                </form>
                                {{-- Form End --}}

                                {{-- Password Reset --}}
                                @if (Route::has('password.request'))
                                <p class="text-center mt-2">
                                    <span>New on our platform?</span>
                                    <a href="{{ route('password.request') }}">
                                        <span>Forget Password</span>
                                    </a>
                                </p>
                                @endif
                                {{-- Password Reset --}}
                            </div>
                        </div>
                        <!-- /Login basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('ADMIN_ASSETS/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('ADMIN_ASSETS/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('ADMIN_ASSETS/app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('ADMIN_ASSETS/app-assets/js/core/app.min.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('ADMIN_ASSETS/app-assets/js/scripts/pages/auth-register.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14
                    , height: 14
                });
            }
        })

    </script>
</body>
<!-- END: Body-->

</html>
