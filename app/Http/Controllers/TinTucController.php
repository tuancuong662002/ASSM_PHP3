<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class TinTucController extends Controller
{
    //
    function index(){
         $tts = DB::table('tintuc')->orderBy('NgayDang', 'desc')->get();
        return view('admin.tintuc.index' , [
            'tts' => $tts
        ]);
    }
     public function edit($MaTin)
    {
       $TenDMs = DB::table('danh_mucs')->pluck('TenDM', 'MaDM');;
        $tt = DB::table('tintuc')->where('MaTin' , $MaTin)->first();;
        return view('admin.tintuc.edit', [
            'tt' => $tt , 
            'TenDMs' => $TenDMs,
        ]);
    }
   public function update(Request $request, $id)
{
    // Lấy tin tức hiện tại
    $tt = DB::table('tintuc')->where('MaTin', $id)->first();

    // Xử lý ảnh mới nếu có
    if ($request->hasFile('HinhAnh')) {
        $file = $request->file('HinhAnh');
        $tenHinhAnhMoi = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $tenHinhAnhMoi);
    } else {
        $tenHinhAnhMoi = $tt->HinhAnh;
    }

    // Cập nhật dữ liệu
    DB::table('tintuc')->where('MaTin', $id)->update([
        'TieuDe'   => $request->input('TieuDe'),
        'NgayDang' => $request->input('NgayDang'),
        'MaDM'     => $request->input('MaDM'),
        'XemTruoc' => $request->input('XemTruoc'),
        'NoiDung'  => $request->input('NoiDung'),
        'HinhAnh'  => $tenHinhAnhMoi,
    ]);

    return redirect()->back()->with('success', 'Cập nhật tin tức thành công!');
}

    public function  create(){
         $TenDMs = DB::table('danh_mucs')->pluck('TenDM', 'MaDM');;
         return view('admin.tintuc.add' , [
             'TenDMs' => $TenDMs ,
         ]) ; 
    }
    public function store(Request $request)
{
    // Validate dữ liệu
    $request->validate([
        'TieuDe' => 'required|string|max:255',
        'HinhAnh' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        'NgayDang' => 'required|date',
        'MaDM' => 'required',
        'NoiDung' => 'required|string',
        'XemTruoc' => 'required|string|max:500', // thêm dòng này
    ]);

    // Xử lý ảnh nếu có
    $imageName = null;
    if ($request->hasFile('HinhAnh')) {
        $file = $request->file('HinhAnh');
        $imageName = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $imageName);
    }

    $MaTK = Auth::user()->id;

    // Lưu dữ liệu vào database
    DB::table('tintuc')->insert([
        'TieuDe'    => $request->TieuDe,
        'HinhAnh'   => $imageName,
        'LuotXem'   => 0,
        'NgayDang'  => $request->NgayDang,
        'MaDM'      => $request->MaDM,
        'MaTK'      => $MaTK,
        'XemTruoc'  => $request->XemTruoc, // thêm dòng này
        'NoiDung'   => $request->NoiDung,
    ]);

    return redirect('/tintuc')->with('success', 'Thêm tin tức thành công!');
}

    function destroy($MaTin){
        DB::table('tintuc')->where('MaTin' , $MaTin)->delete();
        return redirect()->back()->with('success', 'Xóa tin tức thành công!');
    } 

    // API lấy chi tiết tin tức
    public function getChiTietTinTuc($MaTin)
    {
        
        
        // Lấy tin tức theo mã tin
        $tt = DB::table('tintuc')->where('MaTin', $MaTin)->first();

        if (!$tt) {
            return response()->json(['message' => 'Tin tức không tồn tại!'], 404);
        }

        
        return response()->json($tt);
    }
    public function getTinTucByDanhMuc($id)
{
    // Lấy danh sách tin tức theo mã danh mục
    $tintucs = DB::table('tintuc')->where('MaDM', $id)->get();

    // Nếu không có tin tức nào thì trả về thông báo
    if ($tintucs->isEmpty()) {
        return response()->json(['message' => 'Không có tin tức nào trong danh mục này!'], 404);
    }

    // Trả về danh sách tin tức
    return response()->json($tintucs);
}

   
}