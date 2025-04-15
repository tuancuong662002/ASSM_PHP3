<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <meta charset="utf-8">
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.svg') }}" />
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.0.0/ckeditor5.css">
    <!-- ************* CSS Files ************* -->
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/bootstrap/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.min.css') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('ckeditor/style.css') }}">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/45.0.0/ckeditor5.css" crossorigin>
    <link rel="stylesheet"
        href="https://cdn.ckeditor.com/ckeditor5-premium-features/45.0.0/ckeditor5-premium-features.css" crossorigin>
    <!-- ************* Vendor Css Files ************* -->
    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 20px;
    }

    .card {
        margin-bottom: 20px;
    }

    .btn-custom {
        margin-right: 10px;
    }

    .table-container {
        overflow-x: auto;
    }

    .table th,
    .table td {
        text-align: center;
    }

    .modal-header {
        background-color: #007bff;
        color: white;
    }

    .modal-footer .btn {
        background-color: #007bff;
        color: white;
    }
    </style>
</head>

<body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Main container start -->
        <div class="main-container">

            <!-- Sidebar wrapper start -->
            <nav id="sidebar" class="sidebar-wrapper">

                <!-- App brand starts -->

                <!-- App brand ends -->

                <!-- Sidebar profile starts -->

                <div class="sidebar-user-profile">
                    <img src="{{ asset('images/' . Auth::user()->avatar) }}" class="rounded-circle img-fluid"
                        alt="{{ Auth::user()->name }}'s Avatar"
                        style="width: 120px; height: 120px; object-fit: cover;" />
                    <h5 class=" profile-name lh-lg mt-2 text-truncate">{{Auth::user()->name}}</h5>
                    <ul class="profile-actions d-flex m-0 p-0">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="bi bi-skype fs-4"></i>
                                <span class="count-label"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="bi bi-dribbble fs-4"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="bi bi-twitter fs-4"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar profile ends -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <ul class="sidebar-menu">
                        <li class="active current-page">
                            <a href="{{url('/dashboard');}}">
                                <i class="bi bi-bar-chart-line"></i>
                                <span class="menu-text">Thống kê</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <a href="{{url('/danhmuc');}}">
                                <i class="bi bi-wallet2"></i>
                                <span class="menu-text">Danh mục</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/tintuc');}}">
                                <i class="bi bi-slash-square"></i>
                                <span class="menu-text">Tin tức</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile.html">
                                <i class="bi bi-person-square"></i>
                                <span class="menu-text">Tài khoản</span>
                            </a>
                        </li>
                        <li>
                            <a href="tabs.html">
                                <i class="bi bi-slash-square"></i>
                                <span class="menu-text">Tabs</span>
                            </a>
                        </li>
                        <li>
                            <a href="modals.html">
                                <i class="bi bi-terminal"></i>
                                <span class="menu-text">Modals</span>
                            </a>
                        </li>
                        </li>
                    </ul>

                </div>
                <!-- Sidebar menu ends -->

            </nav>
            <!-- Sidebar wrapper end -->

            <!-- App container starts -->
            <div class="app-container">

                <!-- App header starts -->
                <div class="app-header d-flex align-items-center">

                    <!-- Toggle buttons start -->
                    <div class="d-flex">
                        <button class="btn btn-primary me-2 toggle-sidebar" id="toggle-sidebar">
                            <i class="bi bi-chevron-left fs-5"></i>
                        </button>
                        <button class="btn btn-primary me-2 pin-sidebar" id="pin-sidebar">
                            <i class="bi bi-chevron-left fs-5"></i>
                        </button>
                    </div>
                    <!-- Toggle buttons end -->

                    <!-- App brand sm start -->
                    <div class="app-brand-sm d-md-none d-sm-block">
                        <a href="index.html">
                            <img src="assets/images/logo-sm.svg" class="logo" alt="Bootstrap Gallery">
                        </a>
                    </div>
                    <!-- App brand sm end -->

                    <!-- App header actions start -->
                    <div class="header-actions">
                        <div class="d-lg-block d-none me-2">

                            <!-- Search container start -->
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" />
                                <button class="btn btn-outline-primary" type="button">
                                    <i class="bi bi-search fs-5"></i>
                                </button>
                            </div>
                            <!-- Search container end -->

                        </div>
                        <div class="dropdown ms-3">
                            <a class="dropdown-toggle d-flex p-2 py-3" href="#!" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-grid fs-2 lh-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end shadow">
                                <!-- Row start -->
                                <div class="d-flex gap-2 m-2">
                                    <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                                        <img src="assets/images/brand-behance.svg" class="img-3x" alt="Admin Themes" />
                                    </a>
                                    <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                                        <img src="assets/images/brand-gatsby.svg" class="img-3x" alt="Admin Themes" />
                                    </a>
                                    <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                                        <img src="assets/images/brand-google.svg" class="img-3x" alt="Admin Themes" />
                                    </a>
                                    <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                                        <img src="assets/images/brand-bitcoin.svg" class="img-3x" alt="Admin Themes" />
                                    </a>
                                    <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                                        <img src="assets/images/brand-dribbble.svg" class="img-3x" alt="Admin Themes" />
                                    </a>
                                </div>
                                <!-- Row end -->
                            </div>
                        </div>
                        <div class="dropdown ms-3">
                            <a class="dropdown-toggle d-flex p-2 py-3" href="#!" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-bell fs-2 lh-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end shadow">
                                <div class="dropdown-item">
                                    <div class="d-flex py-2 border-bottom">
                                        <img src="{{ asset('images/user-icon-on-transparent-background-free-png.webp') }}"
                                            class="img-4x me-3 rounded-3" alt="Admin Theme" />
                                        <div class="m-0">
                                            <h5 class="mb-1 fw-semibold">Sophie Michiels</h5>
                                            <p class="mb-1">Membership has been ended.</p>
                                            <p class="small m-0 text-primary">Today, 07:30pm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="d-flex py-2 border-bottom">
                                        <img src="assets/images/user2.png" class="img-4x me-3 rounded-3"
                                            alt="Admin Theme" />
                                        <div class="m-0">
                                            <h5 class="mb-1 fw-semibold">Sophie Michiels</h5>
                                            <p class="mb-1">Congratulate, James for new job.</p>
                                            <p class="small m-0 text-primary">Today, 08:00pm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="d-flex py-2">
                                        <img src="assets/images/user1.png" class="img-4x me-3 rounded-3"
                                            alt="Admin Theme" />
                                        <div class="m-0">
                                            <h5 class="mb-1 fw-semibold">Sophie Michiels</h5>
                                            <p class="mb-2">Lewis added new schedule release.</p>
                                            <p class="small m-0 text-primary">Today, 09:30pm</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top py-2 px-3 text-end">
                                    <a href="javascript:void(0)">View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown ms-3">
                            <a id="userSettings"
                                class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none" href="#!"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block me-2">{{Auth::user()->name}}</span>
                                <img src="{{ asset('images/' . Auth::user()->avatar) }}"
                                    class="rounded-circle img-fluid" alt="{{ Auth::user()->name }}'s Avatar"
                                    style="width: 40px; height: 30px; object-fit: cover;" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end shadow">
                                <a class="dropdown-item d-flex align-items-center" href="settings.html"><i
                                        class="bi bi-gear fs-4 me-2"></i>Account Settings</a>

                                <form method="POST" action="{{url('/logout') }}" id="logout-form">
                                    @csrf
                                    <a class="dropdown-item d-flex align-items-center" href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right fs-4 me-2"></i>
                                        Đăng xuất
                                    </a>
                                </form>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- App header actions end -->

                </div>
                <!-- App header ends -->
                <div>
                    <!-- App hero header starts -->

                    <!-- App Hero header ends -->

                    @yield('content')
                    <!-- App body starts -->


                </div>
                <!-- App body ends -->

                <!-- App footer start -->
                <div class="app-footer">
                    <span>© Bootstrap Gallery 2024</span>
                </div>
                <!-- App footer end -->

            </div>
            <!-- App container ends -->

        </div>
        <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <!-- Scrollbar JS -->
    <script>
    document.getElementById('HinhAnh').addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.getElementById('preview-image');
            img.src = e.target.result;
            img.style.display = 'inline-block'; // Hiện ảnh
        };
        reader.readAsDataURL(this.files[0]);
    });
    </script>

    <script src="{{ asset('admin/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>
    <!-- Apex Charts -->
    <script src="{{ asset('admin/assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/dash1/sparkline.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/dash1/customers.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/dash1/channel.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/dash1/deals.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/dash1/demography.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/dash1/device.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/apex/custom/dash1/weekly-sales.js') }}"></script>
    <!-- Vector Maps -->
    <script src="{{ asset('admin/assets/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jvectormap/world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jvectormap/gdp-data.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jvectormap/continents-mill.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jvectormap/custom/world-map-markers2.js') }}"></script>
    <!-- Custom JS files -->
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/45.0.0/ckeditor5.umd.js" crossorigin></script>
    <script src="https://cdn.ckeditor.com/ckeditor5-premium-features/45.0.0/ckeditor5-premium-features.umd.js"
        crossorigin></script>
    <script src="https://cdn.ckbox.io/ckbox/2.6.1/ckbox.js" crossorigin></script>
    <script src="{{ asset('ckeditor/main.js') }}"></script>
</body>

</html>