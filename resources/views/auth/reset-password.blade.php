<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Reset Mật Khẩu</title>

    <link rel="shortcut icon" href="assets/images/favicon.svg" />
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.min.css') }}" />
</head>

<body>
    <!-- Container start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
                <form method="POST" action="{{ route('password.store') }}" class="my-5">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="border border-dark rounded-2 p-4 mt-5">
                        <div class="login-form">
                            <!-- <a href="/" class="mb-4 d-flex">
                                <img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-fluid login-logo"
                                    alt="Logo" />
                            </a> -->

                            <h5 class="fw-light mb-4">Reset Mật Khẩu</h5>

                            <p class="small text-muted mb-4">
                                {{ __('Vui lòng nhập email và mật khẩu mới của bạn để đặt lại mật khẩu.') }}
                            </p>

                            {{-- Email Address --}}
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email"
                                    value="{{ old('email', $request->email) }}" required autofocus
                                    autocomplete="username" />
                                @error('email')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- New Password --}}
                            <div class="mb-3">
                                <label class="form-label">Mật khẩu mới</label>
                                <input type="password" class="form-control" name="password" required
                                    autocomplete="new-password" />
                                @error('password')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Confirm Password --}}
                            <div class="mb-3">
                                <label class="form-label">Xác nhận mật khẩu</label>
                                <input type="password" class="form-control" name="password_confirmation" required
                                    autocomplete="new-password" />
                                @error('password_confirmation')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Submit Button --}}
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Reset Mật Khẩu
                                </button>
                            </div>

                            {{-- Back to Login --}}
                            <div class="text-center pt-4">
                                <span>Quay lại</span>
                                <a href="{{ route('login') }}" class="text-blue text-decoration-underline ms-2">
                                    Đăng nhập
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