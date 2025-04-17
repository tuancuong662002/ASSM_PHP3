<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Đăng nhập</title>

    <link rel="shortcut icon" href="assets/images/favicon.svg" />
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.min.css') }}" />
</head>

<body>
    <!-- Container start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
                <form method="POST" action="{{ route('login') }}" class="my-5">
                    @csrf
                    <div class="border border-dark rounded-2 p-4 mt-5">
                        <div class="login-form">
                            <!-- <a href="/" class="mb-4 d-flex">
                                <img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-fluid login-logo"
                                    alt="Logo" />
                            </a> -->

                            <h5 class="fw-light mb-4">Đăng nhập tài khoản</h5>

                            {{-- Session Status --}}
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif

                            {{-- Email --}}
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    required autofocus />
                                @error('email')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="mb-3">
                                <label class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" name="password" required />
                                @error('password')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Remember & Forgot --}}
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check m-0">
                                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember" />
                                    <label class="form-check-label" for="remember_me">Ghi nhớ đăng nhập</label>
                                </div>

                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="text-blue text-decoration-underline">Quên mật khẩu?</a>
                                @endif
                            </div>

                            {{-- Submit --}}
                            <div class="d-grid py-3 mt-4">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    Đăng nhập
                                </button>
                            </div>

                            {{-- Login with --}}
                            <div class="text-center py-3">hoặc đăng nhập với</div>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="#" class="btn btn-outline-danger">
                                    <i class="bi bi-google me-2"></i>Gmail
                                </a>
                                <a href="#" class="btn btn-outline-info">
                                    <i class="bi bi-facebook me-2"></i>Facebook
                                </a>
                            </div>

                            {{-- Link đăng ký --}}
                            <div class="text-center pt-4">
                                <span>Chưa có tài khoản?</span>
                                <a href="{{ route('register') }}" class="text-blue text-decoration-underline ms-2">
                                    Đăng ký ngay
                                </a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Container end -->
</body>

</html>