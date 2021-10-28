<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/pily/default/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Aug 2021 08:47:43 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('theme/client')}}/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('theme/client')}}/assets/css/icofont.min.css">

    <link rel="stylesheet" href="{{asset('theme/client')}}/assets/css/meanmenu.css">

    <link rel="stylesheet" href="{{asset('theme/client')}}/assets/css/animate.min.css">

    <link rel="stylesheet" href="{{asset('theme/client')}}/assets/css/odometer.min.css">

    <link rel="stylesheet" href="{{asset('theme/client')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('theme/client')}}/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{asset('theme/client')}}/assets/css/modal-video.min.css">

    <link rel="stylesheet" href="{{asset('theme/client')}}/assets/css/nice-select.min.css">

    <link rel="stylesheet" href="{{asset('theme/client')}}/assets/css/style.css">

    <link rel="stylesheet" href="{{asset('theme/client')}}/assets/css/responsive.css">
    <title>Pily</title>
    <link rel="icon" type="image/png" href="{{asset('theme/client')}}/assets/images/favicon.png">
</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="sub-loader"></div>
            </div>
        </div>
    </div>


    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="left">
                        <span>Preview:</span>
                        <a href="#">
                            Tại đây là trang web review về các loại máy bay hiện đại!
                            <i class="icofont-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="right">
                        <ul class="social-icon">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="nav-flag-dropdown">
                            <select>
                                <option>English</option>
                                <option>العربيّة</option>
                                <option>Deutsch</option>
                                <option>Português</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="{{route('home')}}" class="logo">
                <img src="{{asset('theme/client')}}/assets/images/logo.png" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('theme/client')}}/assets/images/logo.png" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link">Trang chủ</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Hãng máy bay <i class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    @foreach($brands as $b)
                                    <li class="nav-item">
                                        <a href="{{route('brand', ['id' => $b->name])}}" class="nav-link">{{$b->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Tin tức</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Giới thiệu</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Liên hệ</a>
                            </li>

                        </ul>
                        <div class="side-nav">
                            <a class="left" href="{{route('login')}}">Tham gia</a>
                            <a class="right common-btn" href="{{route('login')}}">Đăng nhập</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    @yield('main-content')


    <footer class="footer-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a class="logo" href="{{route('home')}}">
                                <img src="{{asset('theme/client')}}/assets/images/logo-three.png" alt="Logo">
                            </a>
                            <p>Trang web thành lập nhằm mục đích chia sẻ, đánh giá về các loại máy bay phổ biến trên thế giới.</p>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="icofont-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-contact">
                            <h3>Thông tin liên hệ</h3>
                            <p>Liên hệ với Admin qua các cách dưới đây</p>
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">T8 - Yên Sở - Hoài Đức - Hà Nội</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    <a href="tel:+0015481592491">+84 86 89 83 309</a>
                                    <a href="tel:+1256548566523">+125-654-856-6523</a>
                                </li>
                                <li>
                                    <i class="icofont-paper-plane"></i>
                                    <a href="#mailto:hello@pily.com"><span class="__cf_email__" data-cfemail="9df5f8f1f1f2ddedf4f1e4b3fef2f0">[email&#160;protected]</span></a>
                                    <a href="#mailto:info@pily.com"><span class="__cf_email__" data-cfemail="87eee9e1e8c7f7eeebfea9e4e8ea">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer-item">
                        <div class="footer-link">
                            <h3>Liên kết</h3>
                            <ul>
                                <li>
                                    <a href="about.html">
                                        <i class="icofont-simple-right"></i>About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="events.html">
                                        <i class="icofont-simple-right"></i>
                                        Events
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        <i class="icofont-simple-right"></i>
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        <i class="icofont-simple-right"></i>
                                        FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="donation.html">
                                        <i class="icofont-simple-right"></i>
                                        Donation
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">
                                        <i class="icofont-simple-right"></i>
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="footer-item">
                        <div class="footer-events">
                            <h3>Các sự kiện</h3>
                            <div class="footer-events-inner">
                                <ul class="align-items-center">
                                    <li>
                                        <img src="{{asset('theme/client')}}/assets/images/footer-events1.jpg" alt="Events">
                                        <span>16 Nov</span>
                                    </li>
                                    <li>
                                        <a href="events.html">Protest Against Of The Black Community</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-events-inner">
                                <ul class="align-items-center">
                                    <li>
                                        <img src="{{asset('theme/client')}}/assets/images/footer-events2.jpg" alt="Events">
                                        <span>17 Nov</span>
                                    </li>
                                    <li>
                                        <a href="events.html">Media Coverage Of The Protesting Event</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-events-inner">
                                <ul class="align-items-center">
                                    <li>
                                        <img src="{{asset('theme/client')}}/assets/images/footer-events3.jpg" alt="Events">
                                        <span>18 Nov</span>
                                    </li>
                                    <li>
                                        <a href="events.html">Protest Against Inhuman Activities In City</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <p>Copyright ©2021 Kiz. Designed By <a href="#" target="_blank">Kiz</a></p>
            </div>
        </div>
    </footer>


    <div class="go-top">
        <i class="icofont-polygonal"></i>
        <i class="icofont-polygonal"></i>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('theme/client')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('theme/client')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('theme/client')}}/assets/js/bootstrap.min.js"></script>

    <script src="{{asset('theme/client')}}/assets/js/form-validator.min.js"></script>

    <script src="{{asset('theme/client')}}/assets/js/contact-form-script.js"></script>

    <script src="{{asset('theme/client')}}/assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="{{asset('theme/client')}}/assets/js/jquery.meanmenu.js"></script>

    <script src="{{asset('theme/client')}}/assets/js/wow.min.js"></script>

    <script src="{{asset('theme/client')}}/assets/js/odometer.min.js"></script>
    <script src="{{asset('theme/client')}}/assets/js/jquery.appear.min.js"></script>

    <script src="{{asset('theme/client')}}/assets/js/owl.carousel.min.js"></script>

    <script src="{{asset('theme/client')}}/assets/js/jquery-modal-video.min.js"></script>

    <script src="{{asset('theme/client')}}/assets/js/jquery.nice-select.min.js"></script>

    <script src="{{asset('theme/client')}}/assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/pily/default/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Aug 2021 08:47:44 GMT -->

</html>