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
Route::post('/login', [DangNhapController::class, 'login'])->name('admins.login');
Route::get('/', [TrangChuController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin', 'role:admin']], function() {
    Route::get('/', [AdminController::class, 'index'])
    ->name('admin.index');
    Route::get('/danhsach_canbo', [AdminController::class, 'danhSachCanBo'])
    ->name('admin.danhsach_canbo');
    Route::get('/them_canbo', [AdminController::class, 'themCanbo'])
    ->name('admin.them_canbo');
    Route::get('/danhsach_hoso', [AdminController::class, 'danhsachHoso'])
    ->name('admin.danhsach_hoso');
    Route::get('/danhmuc_loi', [AdminController::class, 'danhmucLoi'])
    ->name('admin.danhmuc_loi');
});

Route::group(['prefix' => 'canbo_hoso'], function() {
    Route::get('/', [CanboHosoController::class, 'index'])->name('cb_hoso.index');
});

Route::group(['prefix' => 'canbo_kho'], function() {
    Route::get('/', [CanboKhoController::class, 'index'])->name('cb_kho.index');
});




