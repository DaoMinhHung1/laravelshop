<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomeUserController;
use App\Http\Controllers\FrontendController\BaiVietLienQuan;
use App\Http\Controllers\BackendController\HomeAdminController;
use App\Http\Controllers\BackendController\ProductController;
use App\Http\Controllers\BackendController\EmployeeController;
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
Route::get('/thongke', [HomeAdminController::class, 'thongke'])->name('admin.thongke');

// Phần CRUD ADMIN
// Quản lý Sản Phẩm
Route::get('/addpd', [ProductController::class, 'adddt'])->name('product.add');
Route::post('/addpd', [ProductController::class, 'addProduct'])->name('product.add.submit');
Route::get('/editpd/{id}', [ProductController::class, 'editProduct'])->name('product.edit');
Route::post('/editpd/{id}', [ProductController::class, 'updateProduct'])->name('product.update');
Route::delete('/deletepd/{id}', [ProductController::class, 'deleteProduct'])->name('product.delete');
// Quản lý Sản Phẩm

// Quản lý Nhân Viên
Route::get('/nhanvien', [EmployeeController::class, 'nhanvien'])->name('nhanvien.show');
Route::get('/addnhanvien', [EmployeeController::class, 'add'])->name('nhanvien.add');
Route::post('/addnhanvien', [EmployeeController::class, 'themnhanvien'])->name('nhanvien.adddd');
Route::get('/editnv/{id}', [EmployeeController::class, 'chinhsuanhanvien'])->name('nhanvien.edit');
Route::post('/editnv/{id}', [EmployeeController::class, 'updatenhanvien'])->name('nhanvien.update');
Route::delete('/deletenv/{id}', [EmployeeController::class, 'deletenhanvien'])->name('nhanvien.delete');
// Quản lý Nhân Viên
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
Route::get('/sanpham/{category}', [HomeUserController::class, 'sanpham'])->name('home.quanao');
Route::get('/chitietsp/{id}', [HomeUserController::class, 'chitietsp'])->name('home.chitietsp');
// Layout Sản Phẩm

// Layout Giới Thiệu, Liên Hệ, Giỏ Hàng
Route::get('/gioithieu', [HomeUserController::class, 'gioithieu'])->name('home.gioithieu');
Route::get('/gioithieu', [BaiVietLienQuan::class, 'baivietlienquan'])->name('home.gioithieu');

Route::get('/lienhe', [HomeUserController::class, 'lienhe'])->name('home.lienhe');
Route::post('/lienhe', [HomeUserController::class, 'guilienhe'])->name('home.guilienhe');

Route::get('/giohang/{id}', [HomeUserController::class, 'giohang'])->name('home.themsanpham');
Route::get('/xemgiohang', [HomeUserController::class, 'xemgiohang'])->name('home.xemgiohang');
Route::delete('/giohang/{productId}', [HomeUserController::class, 'xoasanpham'])->name('home.xoagiohang');

Route::get('/thanhtoan', [HomeUserController::class, 'thanhtoan'])->name('home.thanhtoan');
Route::post('/thanhtoan', [HomeUserController::class, 'tinhtienbill'])->name('home.tinhtienbill');
Route::get('/thanhtoanthanhcong', [HomeUserController::class, 'thanhtoanthanhcong'])->name('home.thanhtoanthanhcong');
Route::post('/xacnhandonhang/{id}', [HomeUserController::class, 'xacnhandonhang'])->name('home.xacnhandonhang');
// Layout Giới Thiệu, Liên Hệ

Auth::routes();
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
});
