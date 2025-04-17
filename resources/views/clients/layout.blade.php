<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
    .search-model-box {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 9999;
    }

    .search-model-box.active {
        display: block;
    }

    .search-overlay {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-content {
        position: relative;
        width: 80%;
        max-width: 600px;
    }

    .search-model-form input {
        width: 100%;
        padding: 15px 20px;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        outline: none;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .search-close-btn {
        position: absolute;
        top: -40px;
        right: 0;
        font-size: 32px;
        color: white;
        cursor: pointer;
        font-weight: bold;
        transition: 0.2s;
    }

    .search-close-btn:hover {
        transform: scale(1.2);
        color: #ff4d4f;
    }
    </style>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <div class="header-area">
            <div class="main-header">
                <!-- Top -->


                <!-- Mid -->


                <!-- Bottom -->
                <div class="header-bottom header-sticky py-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Navigation -->
                            <div class="col-md-8">
                                <div class="d-flex align-items-center gap-4">
                                    <!-- Sticky Logo -->
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo"
                                            style="height: 40px;">
                                    </a>
                                    <!-- Main Menu -->
                                    <nav class="main-menu d-none d-md-block">
                                        <ul id="navigation" class="d-flex gap-3 list-unstyled mb-0">
                                            <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                                            @foreach($DMs as $dm)
                                            <li><a href="{{ route('category', $dm->MaDM) }}">{{ $dm->TenDM }}</a></li>
                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <!-- User + Search -->
                            <div class="col-md-4 text-end">
                                <div class="d-flex justify-content-end align-items-center gap-3">
                                    @if(Auth::check())
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('images/' . Auth::user()->avatar) }}" alt="Avatar"
                                            class="rounded-circle" width="28" height="28" style="object-fit: cover;">
                                        <span class="small text-muted"><strong>{{ Auth::user()->name }}</strong></span>
                                    </div>
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Đăng xuất</button>
                                    </form>
                                    @else
                                    <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">Đăng nhập</a>
                                    @endif

                                    <!-- Search -->
                                    <div class="nav-search search-switch" style="cursor: pointer;">
                                        <i class="fa fa-search text-dark"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Mobile Menu -->
                            <div class="col-12 d-md-none mt-2">
                                <div class="mobile_menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main>
        @yield('content')
        <!-- Main content goes here -->
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-main footer-bg">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="{{ asset('assets/img/logo/logo2_footer.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <!-- <p class="info1">Lorem ipsum dolor sit amet, nsectetur adipiscing elit, sed
                                                do eiusmod tempor incididunt ut labore.</p>
                                            <p class="info2">198 West 21th Street, Suite 721 New York,NY 10010</p>
                                            <p class="info2">Phone: +95 (0) 123 456 789 Cell: +95 (0) 123 456 789</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Thôn tin về chúng tôi</h4>
                                </div>
                                <!-- Popular post -->
                                <div class="whats-right-single mb-20">
                                    <div class="whats-right-img">
                                        <img src="{{ asset('assets/img/gallery/footer_post1.png') }}" alt="">
                                    </div>
                                    <div class="whats-right-cap">
                                        <h4><a href="latest_news.html">hãy để lại thông tin để chúng tôi có thể liên
                                                lạc</a>
                                        </h4>
                                        <p>Jhon | 2 hours ago</p>
                                    </div>
                                </div>
                                <!-- Popular post -->
                                <div class="whats-right-single mb-20">
                                    <div class="whats-right-img">
                                        <img src="{{ asset('assets/img/gallery/footer_post2.png') }}" alt="">
                                    </div>
                                    <div class="whats-right-cap">
                                        <h4><a href="latest_news.html"></a>
                                        </h4>
                                        <p>Jhon | 2 hours ago</p>
                                    </div>
                                </div>
                                <!-- Popular post -->
                                <div class="whats-right-single mb-20">
                                    <div class="whats-right-img">
                                        <img src="{{ asset('assets/img/gallery/footer_post3.png') }}" alt="">
                                    </div>
                                    <div class="whats-right-cap">
                                        <h4><a href="latest_news.html"></a>
                                        </h4>
                                        <p>Jhon | 2 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="banner">
                                    <img src="{{ asset('assets/img/gallery/body_card4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom aera -->
            <div class="footer-bottom-area footer-bg">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Search model Begin -->
    <div class="search-model-box">
        <div class="search-overlay">
            <div class="search-content">
                <div class="search-close-btn" onclick="toggleSearch()">×</div>
                <form action="{{ route('tintuc.search') }}" method="GET" class="search-model-form">
                    <input type="text" id="search-input" name="keyword" placeholder=" Nhập từ khóa tìm kiếm..." />
                </form>
            </div>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->

    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>