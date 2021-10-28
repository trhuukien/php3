<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo3/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jul 2021 14:03:44 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login Cover | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="{{asset('theme/admin')}}/assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('theme/admin')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/admin')}}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/admin')}}/assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/admin')}}/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/admin')}}/assets/css/forms/switches.css">
</head>

<body class="form">


    <div class="form-container">
        <div class="form-form mx-auto">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Đăng nhập <a href="index.html"><span class="brand-name">CORK</span></a></h1>

                        <br>

                        @if(session('msg'))
                        <p>{{session('msg')}}</p>
                        @endif




                        <form class="text-left" method="POST" novalidate>
                            @csrf
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="email" type="text" class="form-control" placeholder="Email">
                                    @error('email')
                                    <p>{{$message}}</p>
                                    @enderror
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                    @error('password')
                                    <p>{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Hiển thị mật khẩu</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Đăng nhập</button>
                                    </div>

                                </div>

                                <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                            <input type="checkbox" class="new-control-input">
                                            <span class="new-control-indicator"></span>Ghi nhớ tôi
                                        </label>
                                    </div>
                                </div>

                                <div class="field-wrapper">
                                    <a href="{{route('forgot')}}" class="forgot-pass-link">Bạn quên mật khẩu?</a>
                                </div>

                            </div>
                        </form>
                        <p class="terms-conditions">© 2020 All Rights Reserved. <a href="index.html">CORK</a> is a product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>

                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="form-image">
            <div class="l-image">

            </div>
        </div> -->
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('theme/admin')}}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{asset('theme/admin')}}/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('theme/admin')}}/bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('theme/admin')}}/assets/js/authentication/form-1.js"></script>

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo3/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jul 2021 14:03:44 GMT -->

</html>