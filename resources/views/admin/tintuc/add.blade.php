@extends('admin.index')

@section('content')
<h2 class="text-center mb-4">Thêm Mới Tin Tức</h2>
<div class="card mx-auto shadow p-4" style="width: 1000px;">
    <div class="card-body">
        <form action="{{ route('tintuc.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="TieuDe">Tiêu Đề</label>
                <input type="text" name="TieuDe" id="TieuDe" class="form-control" value="{{ old('TieuDe') }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="HinhAnh">Hình Ảnh</label><br>
                <img id="preview-image" src="#" alt="Ảnh mới" style="display: none;" width="120"
                    class="mb-2 ms-3 rounded shadow" />
                <input type="file" name="HinhAnh" id="HinhAnh" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="NgayDang">Ngày Đăng</label>
                <input type="datetime-local" name="NgayDang" id="NgayDang" class="form-control"
                    value="{{ old('NgayDang', now()->format('Y-m-d\TH:i')) }}">
            </div>

            <div class="form-group mb-3">
                <label for="TenDM">Tên Danh Mục</label>
                <select name="MaDM" id="MaDM" class="form-control">
                    @foreach($TenDMs as $ma => $ten)
                    <option value="{{ $ma }}" {{ old('MaDM') == $ma ? 'selected' : '' }}>
                        {{ $ten }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-4">
                <label for="NoiDung">Nội Dung</label>
                <textarea name="NoiDung" id="editor" class="form-control" rows="6">{!! old('NoiDung') !!}</textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4">Thêm Mới</button>
                <a href="" class="btn btn-secondary ml-2">Quay Lại</a>
            </div>
        </form>
    </div>
</div>
@endsection