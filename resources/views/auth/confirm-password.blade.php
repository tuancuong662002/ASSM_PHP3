<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Xác nhận mật khẩu</title>

    <link rel="shortcut icon" href="assets/images/favicon.svg" />
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.min.css') }}" />
</head>

<body>
    <!-- Container start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
                <form method="POST" action="{{ route('password.confirm') }}" class="my-5">
                    @csrf
                    <div class="border border-dark rounded-2 p-4 mt-5">
                        <div class="login-form">
                            <!-- <a href="/" class="mb-4 d-flex">
                                <img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-fluid login-logo"
                                    alt="Logo" />
                            </a> -->

                            <h5 class="fw-light mb-4">Xác nhận mật khẩu</h5>

                            <p class="small text-muted mb-4">
                                {{ __('Đây là khu vực bảo mật, vui lòng xác nhận mật khẩu để tiếp tục.') }}
                            </p>

                            {{-- Password --}}
                            <div class="mb-3">
                                <label class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" name="password" required
                                    autocomplete="current-password" />
                                @error('password')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Submit --}}
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Xác nhận
                                </button>
                            </div>

                            {{-- Optional: back to dashboard or homepage --}}
                            <div class="text-center pt-4">
                                <a href="{{ url()->previous() }}" class="text-blue text-decoration-underline">
                                    ← Quay lại
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