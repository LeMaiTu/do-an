<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'index']);
Route::get('/', [TrangChuController::class, 'index']);


Route::group(['prefix' => 'admin'], function() {
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
    Route::get('/', []);
});


Route::group(['prefix' => 'canbo_kho'], function() {
    Route::get('/', []);
});




