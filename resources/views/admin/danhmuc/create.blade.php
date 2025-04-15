@extends('admin.index')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">Quản lý Danh mục</h2>

    <div class="text-right mb-3">
        <button class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">Thêm Danh Mục</button>
    </div>

    <!-- Form Thêm Danh Mục -->
    <div class="card col-md-6 col-lg-5 mx-auto">
        <div class="card-body">
            <h5 class="text-center mb-3">Thêm Danh Mục</h5>
            <form id="addCategoryForm" action="{{ route('danhmuc.create_') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="TenDM">Tên Danh Mục</label>
                    <input type="text" class="form-control @error('TenDM') is-invalid @enderror" id="TenDM" name="TenDM"
                        placeholder="Nhập tên danh mục" value="{{ old('TenDM') }}">
                    @error('TenDM')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="MoTa">Mô Tả</label>
                    <textarea class="form-control @error('MoTa') is-invalid @enderror" id="MoTa" name="MoTa" rows="3"
                        placeholder="Nhập mô tả">{{ old('MoTa') }}</textarea>
                    @error('MoTa')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="NgayTao">Ngày Tạo</label>
                    <input type="datetime-local" class="form-control @error('NgayTao') is-invalid @enderror"
                        id="NgayTao" name="NgayTao" value="{{ old('NgayTao') }}">
                    @error('NgayTao')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection