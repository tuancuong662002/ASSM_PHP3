<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
     function index(){
        $DMs = DB::table('danh_mucs')->get();
        $TOP_FAV =  DB::table('tintuc')->orderBy('LuotXem' , 'desc')->limit(5)->get();
        $TT_NEW =   DB::table('tintuc')->orderBy('NgayDang' , 'desc')->limit(2)->get();
        $TT_NEWS =  DB::table('tintuc')->orderBy('NgayDang' , 'desc')->get();
        $TOP_FAVS = DB::table('tintuc')->orderBy('LuotXem' , 'desc')->get();
        $ALL = DB::table('tintuc')->get();
          return view('clients.home' ,[
              'DMs' => $DMs,
               'TOP_FAV' => $TOP_FAV,
                'TT_NEW' => $TT_NEW,
                'TT_NEWS' => $TT_NEWS,
                'TOP_FAVS' => $TOP_FAVS,
                'ALL' => $ALL,
          ]);
     }
     function category($MaDM){
        $DMs = DB::table('danh_mucs')->get();
        $TOP_FAV =  DB::table('tintuc')->where('MaDM' , $MaDM)->orderBy('LuotXem' , 'desc')->get();
        $TT_NEW =  DB::table('tintuc')->where('MaDM' , $MaDM)->orderBy('NgayDang' , 'desc')->get();
        $TOP10_OLD =  DB::table('tintuc')->where('MaDM' , $MaDM)->orderBy('NgayDang' , 'asc')->get();
    return view('clients.category' , [
        'DMs' => $DMs,
        'TOP10_FAV' => $TOP_FAV,
        'TT_NEW' => $TT_NEW,
        'TOP10_OLD' => $TOP10_OLD,
    ]);
     }
      function detail($MaTin){
        $DMs = DB::table('danh_mucs')->get();
        $tt = DB::table('tintuc')->where('MaTin' , $MaTin)->first();
        $tinTucCungDanhMuc = DB::table('tintuc')
    ->where('MaDM', $tt->MaDM)
    ->where('MaTin', '!=', $MaTin) 
    ->orderBy('NgayDang', 'desc')->limit(15)
    ->get();
       $comments = DB::table('binhluan')
    ->join('users', 'binhluan.MaTK', '=', 'users.id')
    ->where('binhluan.MaTin', $MaTin)
    ->select('binhluan.NoiDung', 'binhluan.created_at', 'users.name', 'users.avatar')
    ->orderBy('binhluan.created_at', 'desc')
    ->get();
        $tt->LuotXem += 1;
        DB::table('tintuc')->where('MaTin' , $MaTin)->update([
            'LuotXem' => $tt->LuotXem
        ]);
        return view('clients.detail' , [
            'DMs' => $DMs,
            'tt' => $tt,
            'comments' => $comments,
            'tinTucCungDanhMuc' => $tinTucCungDanhMuc 
        ]);
      }
      public function store_comment(Request $request)
       {
            $request->validate([
        'comment' => 'required|string|max:1000|min:5',
        'MaTin' => 'required|exists:tintuc,MaTin',
          ]);

         DB::table('binhluan')->insert([
         'MaTK' => Auth::id(),
         'NoiDung' => $request->comment,
          'MaTin' => $request->MaTin,
          'created_at' => now(),
         'updated_at' => now(),
]);

   return redirect()->route('news.detail', ['MaTin' => $request->MaTin ])->with('success', 'Bình luận thành công!');
       }

       function search(Request $request){
        {
             $DMs = DB::table('danh_mucs')->get();
             $keyword = $request->input('keyword');
            if (empty($keyword)) 
                return redirect()->back()->with('error', 'Vui lòng nhập từ khóa tìm kiếm.');
             $results = DB::table('tintuc')
                ->where('TieuDe', 'LIKE', '%' . $keyword . '%')
                ->orWhere('XemTruoc', 'LIKE', '%' . $keyword . '%')
                ->orWhere('NoiDung', 'LIKE', '%' . $keyword . '%')
                ->get();

            return view('clients.ketqua' , [
                'DMs' => $DMs,
                'results' => $results,
            ]);
      }
       }
}