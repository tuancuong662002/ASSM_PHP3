@extends('admin.index')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">Chỉnh sửa Danh mục</h2>

    <div class="card col-md-6 col-lg-5 mx-auto">
        <div class="card-body">
            <h5 class="text-center mb-3">Chỉnh sửa Danh Mục</h5>
            <form id="editCategoryForm" action="{{ route('danhmuc.update', $danhmuc->MaDM) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="TenDM">Tên Danh Mục</label>
                    <input type="text" class="form-control @error('TenDM') is-invalid @enderror" id="TenDM" name="TenDM"
                        value="{{ old('TenDM', $danhmuc->TenDM) }}" placeholder="Nhập tên danh mục">
                    @error('TenDM')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="MoTa">Mô Tả</label>
                    <textarea class="form-control @error('MoTa') is-invalid @enderror" id="MoTa" name="MoTa" rows="3"
                        placeholder="Nhập mô tả">{{ old('MoTa', $danhmuc->MoTa) }}</textarea>
                    @error('MoTa')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="NgayTao">Ngày Tạo</label>
                    <input type="datetime-local" class="form-control @error('NgayTao') is-invalid @enderror"
                        id="NgayTao" name="NgayTao"
                        value="{{ old('NgayTao', \Carbon\Carbon::parse($danhmuc->NgayTao)->format('Y-m-d\TH:i')) }}">
                    @error('NgayTao')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success">Cập Nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection