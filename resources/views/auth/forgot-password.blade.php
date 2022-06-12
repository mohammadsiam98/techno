<!DOCTYPE html>

<html class="loading semi-dark-layout" lang="en" data-layout="semi-dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Forgot Password</title>
    <link rel="apple-touch-icon" href="{{asset('ADMIN_ASSETS/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('ADMIN_ASSETS/app-assets/images/ico/favicon.ico')}}">
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
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2" style="max-width: 600px;">
                        <!-- Forgot Password basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{route('register')}}" class="brand-logo">
                                    <h2 class="brand-text text-primary ms-1">Technofirm</h2>
                                </a>
                                <p class="card-text mb-2" style="font-family: 'Poppins', sans-serif;">Enter your email and we'll send you instructions to reset your password</p>

                                <!-- Session Status -->
                                {{session('status')}}
                                <!-- Session Status -->

                                <!-- Error Status For name -->
                                @if ($errors->has('email'))
                                <li class="error" style="color: red; font-weight:bold;">{{ $errors->first('email') }}</li>
                                @endif
                                <!-- Error Status For name -->

                                <!-- Form Start -->
                                <form class="auth-forgot-password-form mt-2" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="mb-1">
                                        <label for="forgot-password-email" class="form-label" style="font-family: 'Poppins', sans-serif; font-size:20px">Email</label>
                                        <input type="email" name="email" :value="old('email')" class="form-control" id="forgot-password-email" name="forgot-password-email" placeholder="john@example.com" aria-describedby="forgot-password-email" tabindex="1" required autofocus />
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="2">Send reset link</button>
                                </form>
                                <!-- Form End -->


                                <!-- Back to login route -->
                                <p class="text-center mt-2">
                                    <a href="{{route('login')}}"> <i data-feather="chevron-left"></i> Back to login </a>
                                </p>
                                <!-- Back to login route -->
                            </div>
                        </div>
                        <!-- /Forgot Password basic -->
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
    <script src="{{asset('ADMIN_ASSETS/app-assets/js/scripts/pages/auth-login.js')}}"></script>
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
