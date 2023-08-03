<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomeUserController;
use App\Http\Controllers\FrontendController\BaiVietLienQuan;
use App\Http\Controllers\BackendController\HomeAdminController;
use App\Http\Controllers\BackendController\ProductController;
use Illuminate\Support\Facades\Auth;

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

// Layout Admin Trang Chu
// Login Admin


Route::get('/admin', [HomeAdminController::class, 'trangchu'])->name('admin.home');

// Phần CRUD ADMIN
Route::get('/add', [ProductController::class, 'adddt'])->name('product.add');
Route::post('/add', [ProductController::class, 'addProduct'])->name('product.add.submit');
Route::get('/edit/{id}', [ProductController::class, 'editProduct'])->name('product.edit');
Route::post('/edit/{id}', [ProductController::class, 'updateProduct'])->name('product.update');
Route::delete('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('product.delete');
// Phần CRUD ADMIN

// Admin Quản lý bảng
Route::get('/showqa', [ProductController::class, 'quanao'])->name('quanao.show');
Route::get('/showak', [ProductController::class, 'aokhoac'])->name('aokhoac.show');
Route::get('/showg', [ProductController::class, 'giay'])->name('giay.show');
Route::get('/showpk', [ProductController::class, 'phukien'])->name('phukien.show');
// Admin Quản lý bảng

// Layout User Trang Chu
Route::get('/', [HomeUserController::class, 'home'])->name('home');
Route::get('/home', [HomeUserController::class, 'home'])->name('home');
// Layout User Trang Chu

// Layout Sản Phẩm
Route::get('/quanao', [HomeUserController::class, 'spquanao'])->name('home.quanao');
Route::get('/aokhoac', [HomeUserController::class, 'spaokhoac'])->name('home.aokhoac');
Route::get('/giay', [HomeUserController::class, 'spgiay'])->name('home.giay');
Route::get('/phukien', [HomeUserController::class, 'spphukien'])->name('home.phukien');
Route::get('/chitietsp/{id}', [HomeUserController::class, 'chitietsp'])->name('home.chitietsp');
// Layout Sản Phẩm

// Layout Giới Thiệu, Liên Hệ
Route::get('/gioithieu', [HomeUserController::class, 'gioithieu'])->name('home.gioithieu');
Route::get('/gioithieu', [BaiVietLienQuan::class, 'baivietlienquan'])->name('home.gioithieu');
Route::get('/lienhe', [HomeUserController::class, 'lienhe'])->name('home.lienhe');
// Layout Giới Thiệu, Liên Hệ

Auth::routes();
Route::group(['middleware' => 'admin'], function () {
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
}); 