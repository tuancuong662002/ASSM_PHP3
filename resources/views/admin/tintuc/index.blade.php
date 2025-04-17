@extends('admin.index')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Quản lý Tin Tức</h2>

    <div class="text-right mb-3">
        <a href="{{ route('tintuc.create') }}">
            <button class="btn btn-primary">Thêm Tin Tức</button>
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Tiêu Đề</th>
                    <th>Hình Ảnh</th>
                    <th>Lượt Xem</th>
                    <th>Ngày Đăng</th>
                    <!-- <th>Mã Danh Mục</th>
                    <th>Mã Tài Khoản</th> -->
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tts as $tt)
                <tr>

                    <td>{{ \Illuminate\Support\Str::limit($tt->TieuDe, 30) }}</td>
                    <td>
                        @if($tt->HinhAnh)
                        <img src="{{ asset('images/' . $tt->HinhAnh) }}" alt="Hình Ảnh" width="80">
                        @else
                        Không có ảnh
                        @endif
                    </td>
                    <td>{{ $tt->LuotXem }}</td>
                    <td>{{ $tt->NgayDang }}</td>
                    <!-- <td>{{ $tt->MaDM }}</td>
                    <td>{{ $tt->MaTK }}</td> -->
                    <td>
                        <a href="{{ route('tintuc.edit', $tt->MaTin) }}">
                            <button class="btn btn-warning btn-sm">Sửa</button>
                        </a>
                        <form action="{{ route('tintuc.delete', $tt->MaTin) }}" method="POST"
                            style="display:inline-block;" onsubmit="return confirm('Bạn có chắc muốn xóa tin này?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection