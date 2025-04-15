<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\TinTucController;
use App\Http\Controllers\HomeController;
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('admin.index.dashboard');
})->middleware(['auth', 'verified', 'checkRole:admin'])->name('dashboard');

Route::prefix('danhmuc')->middleware(['auth', 'verified', 'checkRole:admin'])->group(function () {
    Route::get('/', [DanhMucController::class, 'index'])->name('danhmuc');
    Route::get('/store', [DanhMucController::class, 'store'])->name('danhmuc.create'); 
    Route::post('/store', [DanhMucController::class, 'store_'])->name('danhmuc.create_'); 
    Route::get('/edit/{MaDM}', [DanhMucController::class, 'edit'])->name('danhmuc.edit');
    Route::post('/edit/{MaDM}', [DanhMucController::class, 'update'])->name('danhmuc.update');
    Route::delete('/delete/{MaDM}', [DanhMucController::class, 'destroy'])->name('danhmuc.delete');
});

Route::prefix('tintuc')->middleware(['auth', 'verified', 'checkRole:admin'])->group(function () {
    Route::get('/', [TinTucController::class, 'index'])->name('tintuc');
    Route::get('/create', [TinTucController::class, 'create'])->name('tintuc.create');
    Route::post('/create', [TinTucController::class, 'store'])->name('tintuc.store');
    Route::get('/edit/{MaTin}', [TinTucController::class, 'edit'])->name('tintuc.edit');
    Route::post('/edit/{MaTin}', [TinTucController::class, 'update'])->name('tintuc.update');
    Route::delete('/delete/{MaTin}', [TinTucController::class, 'destroy'])->name('tintuc.delete');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::redirect('/home', '/');
Route::get('/category/{MaDM}',  [HomeController::class, 'category'])->name('category');
Route::get('/newsDetail/{MaTin}',  [HomeController::class, 'detail'])->name('news.detail');

Route::post('/comment', [HomeController::class, 'store_comment'])->middleware('auth' , 'verified')->name('comment');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';