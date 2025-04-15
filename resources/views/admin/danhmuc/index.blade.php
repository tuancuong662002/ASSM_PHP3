@extends('admin.index')

@section('content') <div class="container">
    <h2 class="text-center mb-4">Quản lý Danh mục</h2>

    <div class="text-right mb-3">
        <a href="{{ route('danhmuc.create');}}">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal">Thêm
                Danh Mục</button>
        </a>
    </div>

    <div class="table-container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Mã Danh Mục</th>
                    <th>Tên Danh Mục</th>
                    <th>Ngày Tạo</th>
                    <th>Mô Tả</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through categories data -->
                @foreach($danhmuc as $dm )

                <tr>
                    <td>{{$dm->MaDM}}</td>
                    <td>{{$dm->TenDM}}</td>
                    <td>{{$dm->NgayTao}}</td>
                    <td>{{$dm->MoTa}}</td>
                    <td>
                        <a href="{{route('danhmuc.edit', $dm->MaDM)}}">
                            <button class="btn btn-warning btn-sm">Sửa</button>
                        </a>
                        <form action="{{ route('danhmuc.delete', $dm->MaDM) }}" method="POST"
                            style="display:inline-block;"
                            onsubmit="return confirm('Bạn có chắc muốn xóa danh mục này?');">
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
<!-- {{ route('danhmuc', $dm->MaDM) }} -->