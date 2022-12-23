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

Route::post('/', [TrangChuController::class, 'search'])->name('search');


Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['role:admin']
    ]
    , function() {
    // Trang Admin
    Route::get('/', [AdminController::class, 'index'])
    ->name('admin.index');
    // Cán bộ
    Route::get('/danhsach_canbo', [AdminController::class, 'danhSachCanBo'])
    ->name('admin.danhsach_canbo');
    Route::get('/them_canbo', [AdminController::class, 'themCanbo'])
    ->name('admin.them_canbo');
    Route::post('/post_them_canbo', [AdminController::class, 'postThemCanBo'])
        ->name('admin.post_them_canbo');
    Route::get('/canbo/{ma_cb}/xoa', [AdminController::class, 'xoaCanbo'])->name('admin.xoa_canbo');
    Route::get('/chinhsua_canbo/{ma_cb}', [AdminController::class, 'chinhsuaCanbo'])
        ->name('admin.chinhsua_canbo');
    Route::post('/post_chinhsua_canbo/{ma_cb}', [AdminController::class, 'postChinhsuaCanBo'])
        ->name('admin.post_chinhsua_canbo');

    // Hồ sơ
    Route::get('/danhsach_hoso', [AdminController::class, 'danhsachHoso'])
    ->name('admin.danhsach_hoso');
    Route::get('/chitiet_hoso/{ma_hoso}', [AdminController::class, 'chitietHoso'])
        ->name('admin.chitiet_hoso');

    // Danh mục lỗi
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

// Cán bộ hồ sơ
Route::group([
    'prefix' => 'canbo_hoso',
    'middleware' => ['role:cb_hoso']
], function() {
    // Trang home
    Route::get('/', [CanboHosoController::class, 'index'])->name('cb_hoso.index');

    // Hồ sơ
    Route::get('/tao_hoso_vipham', [CanboHosoController::class, 'taoHosoVipham'])->name('cb_hoso.tao_hoso_vipham');
    Route::post('/post_tao_hoso', [CanboHosoController::class, 'postTaoHosoVipham'])->name('cb_hoso.post_tao_hoso');
    Route::get('/hoso_vipham', [CanboHosoController::class, 'danhsachHoso'])->name('cb_hoso.ho_so_vipham');
    Route::get('/chitiet_hoso/{ma_hoso}', [CanboHosoController::class, 'chitietHoso'])
        ->name('cb_hoso.chitiet_hoso');
    Route::get('/hoso_vipham/{ma_hoso}/chinhsua', [CanboHosoController::class, 'chinhsuaHosoVipham'])->name('cb_hoso.chinhsua_hoso_vipham');
    Route::post('/hoso_vipham/{ma_hoso}/post_chinhsua', [CanboHosoController::class, 'postChinhsuaHosoVipham'])->name('cb_hoso.post_chinhsua_hoso');
    Route::get('/hoso_vipham/{ma_hoso}/trangthai', [CanboHosoController::class, 'capnhatTrangthai'])->name('cb_hoso.capnhat_trangthai');
    Route::get('/hoso_vipham/{ma_hoso}/xoa', [CanboHosoController::class, 'xoaHoso'])->name('cb_hoso.xoa_hoso');

    // Người vi phạm
    Route::get('/nguoi_vipham', [CanboHosoController::class, 'danhsachNguoiViPham'])->name('cb_hoso.nguoi_vipham');
    Route::get('/thongtin_tangvat', [CanboHosoController::class, 'thongtinTangvat'])->name('cb_hoso.thongtin_tangvat');
    Route::get('/chinhsua_nguoivipham/{cmnd}', [CanboHosoController::class, 'chinhsuaNguoiVipham'])
        ->name('cb_hoso.chinhsua_nguoivipham');
    Route::post('/post_chinhsua_nguoivipham/{cmnd}', [CanboHosoController::class, 'postChinhsuaNguoiVipham'])
        ->name('cb_hoso.post_chinhsua_nguoivipham');

    // Cán bộ
    Route::get('/chinhsua_canbo/{ma_cb}', [CanboHosoController::class, 'chinhsuaCanbo'])
        ->name('cb_hoso.chinhsua_canbo');
    Route::post('/post_chinhsua_canbo/{ma_cb}', [CanboHosoController::class, 'postChinhsuaCanBo'])
        ->name('cb_hoso.post_chinhsua_canbo');

    // Tang vật
    Route::get('/chinhsua_tangvat/{ma_tangvat}', [CanboHosoController::class, 'chinhsuaTangvat'])
        ->name('cb_hoso.chinhsua_tangvat');
    Route::post('/post_chinhsua_tangvat/{ma_tangvat}', [CanboHosoController::class, 'postChinhsuaTangvat'])
        ->name('cb_hoso.post_chinhsua_tangvat');

});

// Cán bộ kho
Route::group([
        'prefix' => 'canbo_kho',
        'middleware' => ['role:cb_kho']
    ], function() {
    // Doashboard
    Route::get('/', [CanboKhoController::class, 'index'])->name('cb_kho.index');

    // Cán bộ
    Route::get('/chinhsua_canbo/{ma_cb}', [CanboKhoController::class, 'chinhsuaCanbo'])
        ->name('cb_kho.chinhsua_canbo');
    Route::post('/post_chinhsua_canbo/{ma_cb}', [CanboKhoController::class, 'postChinhsuaCanBo'])
        ->name('cb_kho.post_chinhsua_canbo');

    // Tang vật
    Route::get('/danhsach_tangvat', [CanboKhoController::class, 'danhsachTangvat'])->name('cb_kho.danhsach_tangvat');
    Route::get('/chinhsua_tangvat/{ma_tangvat}', [CanboKhoController::class, 'chinhsuaTangvat'])
        ->name('cb_kho.chinhsua_tangvat');
    Route::post('/post_chinhsua_tangvat/{ma_tangvat}', [CanboKhoController::class, 'postChinhsuaTangvat'])
        ->name('cb_kho.post_chinhsua_tangvat');

    Route::get('/nhan_tangvat', [CanboKhoController::class, 'nhanTangvat'])->name('cb_kho.nhan_tangvat');

    Route::get('/nhan_tangvat/{ma_tangvat}', [CanboKhoController::class, 'nhanTangvatAction'])->name('cb_kho.nhan_tangvat_action');
    Route::get('/tra_tangvat/{ma_tangvat}', [CanboKhoController::class, 'traTangvatAction'])->name('cb_kho.tra_tangvat');

    // Hồ sơ
    Route::get('/danhsach_hoso', [CanboKhoController::class, 'danhsachHoso'])->name('cb_kho.danhsach_hoso');
    Route::get('/chitiet_hoso/{ma_hoso}', [CanboKhoController::class, 'chitietHoso'])
        ->name('cb_kho.chitiet_hoso');
});
