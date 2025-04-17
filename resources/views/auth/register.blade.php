<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Đăng ký tài khoản</title>

    <meta name="description" content="Form Đăng ký người dùng" />
    <meta name="author" content="Laravel" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.min.css') }}" />
</head>

<body>
    <!-- Container start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
                <form method="POST" action="{{ route('register') }}" class="my-5">
                    @csrf
                    <div class="border border-dark rounded-2 p-4 mt-5">
                        <div class="login-form">
                            <!-- <a href="/" class="mb-4 d-flex">
                                <img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-fluid login-logo"
                                    alt="Logo" />
                            </a> -->
                            <h5 class="fw-light mb-4">Tạo tài khoản mới</h5>

                            {{-- Name --}}
                            <div class="mb-3">
                                <label class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required
                                    autofocus />
                                @error('name')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    required />
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

                            {{-- Confirm Password --}}
                            <div class="mb-3">
                                <label class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="password_confirmation" required />
                                @error('password_confirmation')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Submit --}}
                            <div class="d-grid py-3 mt-4">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    Đăng ký
                                </button>
                            </div>

                            {{-- Link đăng nhập --}}
                            <div class="text-center pt-4">
                                <span>Đã có tài khoản?</span>
                                <a href="{{ route('login') }}" class="text-blue text-decoration-underline ms-2">
                                    Đăng nhập</a>
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