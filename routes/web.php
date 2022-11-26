<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CanboHosoController;
use App\Http\Controllers\CanboKhoController;
use App\Http\Controllers\DangNhapController;
use App\Http\Controllers\TrangChuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [DangNhapController::class, 'index'])->name('admins.login.index');
Route::get('/logout', [DangNhapController::class, 'logout'])->name('admins.logout');
Route::post('/login', [DangNhapController::class, 'login'])->name('admins.login');
Route::get('/', [TrangChuController::class, 'index'])->name('home');


Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['role:admin']
    ]
    , function() {
    Route::get('/', [AdminController::class, 'index'])
    ->name('admin.index');
    Route::get('/danhsach_canbo', [AdminController::class, 'danhSachCanBo'])
    ->name('admin.danhsach_canbo');
    Route::get('/them_canbo', [AdminController::class, 'themCanbo'])
    ->name('admin.them_canbo');
    Route::post('/post_them_canbo', [AdminController::class, 'postThemCanBo'])
        ->name('admin.post_them_canbo');
    Route::get('/chinhsua_canbo/{ma_cb}', [AdminController::class, 'chinhsuaCanbo'])
        ->name('admin.chinhsua_canbo');
    Route::post('/post_chinhsua_canbo/{ma_cb}', [AdminController::class, 'postChinhsuaCanBo'])
        ->name('admin.post_chinhsua_canbo');
    Route::get('/danhsach_hoso', [AdminController::class, 'danhsachHoso'])
    ->name('admin.danhsach_hoso');
    Route::get('/danhmuc_loi', [AdminController::class, 'danhmucLoi'])
    ->name('admin.danhmuc_loi');
    Route::get('/them_loivipham', [AdminController::class, 'themLoivipham'])
        ->name('admin.them_loi');
    Route::post('/post_them_loi', [AdminController::class, 'postThemLoivipham'])
        ->name('admin.post_them_loi');
    Route::get('/chinhsua_loi/{ma_loi}', [AdminController::class, 'chinhsuaLoivipham'])
        ->name('admin.chinhsua_loi');
    Route::post('/post_chinhsua_loi/{ma_loi}', [AdminController::class, 'postChinhsuaLoivipham'])
        ->name('admin.post_chinhsua_loi');
});

Route::group(['prefix' => 'canbo_hoso'], function() {
    Route::get('/', [CanboHosoController::class, 'index'])->name('cb_hoso.index');
    Route::get('/tao_hoso_vipham', [CanboHosoController::class, 'taoHosoVipham'])->name('cb_hoso.tao_hoso_vipham');
    Route::post('/post_tao_hoso', [CanboHosoController::class, 'postTaoHosoVipham'])->name('cb_hoso.post_tao_hoso');

    Route::get('/hoso_vipham', [CanboHosoController::class, 'danhsachHoso'])->name('cb_hoso.ho_so_vipham');
    Route::get('/nguoi_vipham', [CanboHosoController::class, 'danhsachNguoiViPham'])->name('cb_hoso.nguoi_vipham');
    Route::get('/thongtin_tangvat', [CanboHosoController::class, 'thongtinTangvat'])->name('cb_hoso.thongtin_tangvat');
});

Route::group(['prefix' => 'canbo_kho'], function() {
    Route::get('/', [CanboKhoController::class, 'index'])->name('cb_kho.index');
    Route::get('/danhsach_tangvat', [CanboKhoController::class, 'danhsachTangvat'])->name('cb_kho.danhsach_tangvat');
    Route::get('/nhan_tangvat', [CanboKhoController::class, 'nhanTangvat'])->name('cb_kho.nhan_tangvat');
    Route::get('/danhsach_hoso', [CanboKhoController::class, 'danhsachHoso'])->name('cb_kho.danhsach_hoso');
});
