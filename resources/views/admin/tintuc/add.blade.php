@extends('admin.index')

@section('content')
<h2 class="text-center mb-4">Thêm Mới Tin Tức</h2>
<div class="card mx-auto shadow p-4" style="width: 1000px;">
    <div class="card-body">
        <form action="{{ route('tintuc.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Tiêu Đề --}}
            <div class="form-group mb-3">
                <label for="TieuDe">Tiêu Đề</label>
                <input type="text" name="TieuDe" id="TieuDe" class="form-control @error('TieuDe') is-invalid @enderror"
                    value="{{ old('TieuDe') }}" required>
                @error('TieuDe')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Hình Ảnh --}}
            <div class="form-group mb-3">
                <label for="HinhAnh">Hình Ảnh</label><br>
                <img id="preview-image" src="#" alt="Ảnh mới" style="display: none;" width="120"
                    class="mb-2 ms-3 rounded shadow" />
                <input type="file" name="HinhAnh" id="HinhAnh"
                    class="form-control @error('HinhAnh') is-invalid @enderror">
                @error('HinhAnh')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Ngày Đăng --}}
            <div class="form-group mb-3">
                <label for="NgayDang">Ngày Đăng</label>
                <input type="datetime-local" name="NgayDang" id="NgayDang"
                    class="form-control @error('NgayDang') is-invalid @enderror"
                    value="{{ old('NgayDang', now()->format('Y-m-d\TH:i')) }}">
                @error('NgayDang')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Tên Danh Mục --}}
            <div class="form-group mb-3">
                <label for="TenDM">Tên Danh Mục</label>
                <select name="MaDM" id="MaDM" class="form-control @error('MaDM') is-invalid @enderror">
                    @foreach($TenDMs as $ma => $ten)
                    <option value="{{ $ma }}" {{ old('MaDM') == $ma ? 'selected' : '' }}>{{ $ten }}</option>
                    @endforeach
                </select>
                @error('MaDM')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Xem Trước --}}
            <div class="form-group mb-3">
                <label for="XemTruoc">Xem Trước</label>
                <textarea name="XemTruoc" id="XemTruoc" class="form-control @error('XemTruoc') is-invalid @enderror"
                    rows="3" placeholder="Nhập đoạn mô tả ngắn...">{{ old('XemTruoc') }}</textarea>
                @error('XemTruoc')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Nội Dung --}}
            <div class="form-group mb-4">
                <label for="NoiDung">Nội Dung</label>
                <textarea name="NoiDung" id="editor" class="form-control @error('NoiDung') is-invalid @enderror"
                    rows="6">{!! old('NoiDung') !!}</textarea>
                @error('NoiDung')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4">Thêm Mới</button>
                <a href="{{ url('/tintuc') }}" class="btn btn-secondary ml-2">Quay Lại</a>
            </div>
        </form>
    </div>
</div>
@endsection