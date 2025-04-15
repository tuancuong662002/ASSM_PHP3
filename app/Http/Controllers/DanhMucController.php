<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class DanhMucController extends Controller
{
    //
    function index(){
         $danhmuc = DB::table('danh_mucs')->get();
        return view('admin.danhmuc.index' , [
            'danhmuc' => $danhmuc
        ]);
    }
    function store(){
        return view('admin.danhmuc.create');
    }
    public function store_(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'TenDM' => 'required|string|max:255',
            'MoTa' => 'required|string',
            'NgayTao' => 'required|date',
        ]);

        // Kiểm tra nếu có lỗi
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Thêm danh mục bằng Query Builder
        DB::table('danh_mucs')->insert([
            'TenDM' => $request->TenDM,
            'MoTa' => $request->MoTa,
            'NgayTao' => $request->NgayTao,
            'MaTK' => Auth::id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Quay lại trang danh mục với thông báo thành công
        return redirect('/danhmuc')->with('success', 'Thêm danh mục thành công!');
    }

     public function edit($MaDM)
    {
        $danhmuc = DB::table('danh_mucs')->where('MaDM' , $MaDM)->first();;
        return view('admin.danhmuc.edit', [
            'danhmuc' => $danhmuc
        ]);
    }
    public function update(Request $request, $MaDM)
    {
        $validator = Validator::make($request->all(), [
            'TenDM' => 'required|string|max:255',
            'MoTa' => 'required|string',
            'NgayTao' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::table('danh_mucs')->where('MaDM', $MaDM)->update([
            'TenDM' => $request->TenDM,
            'MoTa' => $request->MoTa,
            'NgayTao' => $request->NgayTao,
            'MaTK' => Auth::id(),
            'updated_at' => now(),
        ]);

        return redirect('/danhmuc')->with('success', 'Cập nhật danh mục thành công!');
    }
    public function destroy($MaDM)
    {
        $affected = DB::table('danh_mucs')
            ->where('MaDM', $MaDM)
            ->delete();

        if ($affected) {
            return redirect('/danhmuc')->with('success', 'Xóa danh mục thành công!');
        }
        return redirect('/danhmuc')->with('error', 'Danh mục không tồn tại!');
    }
}