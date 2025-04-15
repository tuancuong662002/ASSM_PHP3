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
         $tts = DB::table('tintuc')->get();
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
    $tt = DB::table('tintuc')->where('MaTin', $id)->first();
   
    if ($request->hasFile('HinhAnh')) {
        $file = $request->file('HinhAnh');
        $tenHinhAnhMoi = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $tenHinhAnhMoi);
    } else {
        $tenHinhAnhMoi = $tt->HinhAnh;
    }
     $TenDM =   $request->input('TenDM') ; 
    $MaDM = DB::table('danh_mucs')->where('TenDM',$TenDM  )->pluck('MaDM') ; 
    DB::table('tintuc')->where('MaTin', $id)->update([
        'TieuDe'   => $request->input('TieuDe'),
        // 'LuotXem'  => $request->input('LuotXem'),
        'NgayDang' => $request->input('NgayDang'),
        'MaDM'     => $request->input('MaDM'),
        'NoiDung'  => $request->input('NoiDung'),
        'HinhAnh'  => $tenHinhAnhMoi
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
        'HinhAnh' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        'NgayDang' => 'required|date',
        'MaDM' => 'required|integer',
        'NoiDung' => 'required|string',
    ]);

    // Xử lý ảnh nếu có
    $imageName = null;
    if ($request->hasFile('HinhAnh')) {
        $file = $request->file('HinhAnh');
        $imageName = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $imageName);
    }
    $MaTK =  Auth::user()->id ; 
    // Lưu dữ liệu vào database
    DB::table('tintuc')->insert([
        'TieuDe' => $request->TieuDe,
        'HinhAnh' => $imageName,
        'LuotXem' =>   0,
        'NgayDang' => $request->NgayDang,
        'MaDM' => $request->MaDM,
        'MaTK' => $MaTK , 
        'NoiDung' => $request->NoiDung,
    ]);

    return redirect('/tintuc')->with('success', 'Thêm tin tức thành công!');
}
    function destroy($MaTin){
        DB::table('tintuc')->where('MaTin' , $MaTin)->delete();
        return redirect()->back()->with('success', 'Xóa tin tức thành công!');
    }
}