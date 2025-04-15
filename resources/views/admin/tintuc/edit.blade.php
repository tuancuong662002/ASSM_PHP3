@extends('admin.index')

@section('content')
<h2 class="text-center mb-4">Chỉnh sửa Tin Tức</h2>
<div class="card mx-auto shadow p-4" style="width: 1000px;">
    <div class="card-body">
        <form action="{{ route('tintuc.update', $tt->MaTin) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="TieuDe">Tiêu Đề</label>
                <input type="text" name="TieuDe" id="TieuDe" class="form-control"
                    value="{{ old('TieuDe', $tt->TieuDe) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="HinhAnh">Hình Ảnh</label><br>
                @if($tt->HinhAnh)
                <img src="{{ asset('images/' . $tt->HinhAnh) }}" alt="Ảnh hiện tại" width="120"
                    class="mb-2 rounded shadow">
                @endif
                {{-- Ảnh mới chọn sẽ hiển thị ở đây --}}
                <img id="preview-image" src="#" alt="Ảnh mới" style="display: none;" width="120"
                    class="mb-2 ms-3 rounded shadow" />
                <input type="file" name="HinhAnh" id="HinhAnh" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="NgayDang">Ngày Đăng</label>
                <input type="datetime-local" name="NgayDang" id="NgayDang" class="form-control"
                    value="{{ old('NgayDang', \Carbon\Carbon::parse($tt->NgayDang)->format('Y-m-d\TH:i')) }}">
            </div>

            <div class="form-group mb-3">
                <label for="TenDM">Tên Danh Mục</label>
                <select name="MaDM" id="MaDM" class="form-control">
                    @foreach($TenDMs as $ma => $ten)
                    <option value="{{ $ma }}" {{ old('MaDM', $tt->MaDM) == $ma ? 'selected' : '' }}>
                        {{ $ten }}
                    </option>
                    @endforeach
                </select>
            </div>
            <!-- <input type="number" name="MaDM" id="MaDM" class="form-control" value="{{ old('MaDM', $tt->MaDM) }}"> -->

            <div class="form-group mb-4">
                <label for="NoiDung">Nội Dung</label>
                <textarea name="NoiDung" id="editor" class="form-control"
                    rows="6">{!! old('NoiDung', $tt->NoiDung) !!}</textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success px-4">Cập Nhật</button>
                <a href="{{ url('/tintuc') }}" class="btn btn-secondary ml-2">Quay Lại</a>
            </div>
        </form>
    </div>
</div>
@endsection