<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomeUserController;
use App\Http\Controllers\BackendController\HomeAdminController;
use App\Http\Controllers\BackendController\DienThoaiController;
use App\Http\Controllers\BackendController\LapTopController;
use App\Http\Controllers\BackendController\CategoriesController;
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

// Layout User
Route::get('/', [HomeUserController::class, 'home'])->name('home');
Route::get('/home', [HomeUserController::class, 'home'])->name('home');
Route::get('/dienthoai', [HomeUserController::class, 'spdienthoai'])->name('home.dienthoai');
Route::get('/laptop', [HomeUserController::class, 'splaptop'])->name('home.laptop');
Route::get('/chitietsp/{id}', [HomeUserController::class, 'chitietsp'])->name('home.chitietsp');

// Layout Admin
Route::get('/admin', [HomeAdminController::class, 'trangchu'])->name('admin.home');

// Admin Điện thoại
Route::get('/showdt', [DienThoaiController::class, 'dienthoai'])->name('dienthoai.show');
Route::get('/adddt', [DienThoaiController::class, 'adddt'])->name('dienthoai.add');
Route::get('/adddt', [CategoriesController::class, 'categories'])->name('adddt');
Route::post('/adddt', [DienThoaiController::class, 'adddienthoai'])->name('dienthoai.addlen');
Route::get('/editdt/{id}', [DienThoaiController::class, 'editdienthoai'])->name('dienthoai.edit');
Route::post('editdt/{id}', [DienThoaiController::class, 'updatedienthoai'])->name('dienthoai.update');
Route::delete('/deletedt/{id}', [DienThoaiController::class, 'deletedienthoai'])->name('dienthoai.delete');
// Admin Điện thoại

//Admin Laptop
Route::get('/showlaptop', [LapTopController::class, 'laptop'])->name('laptop.show');
// Admin Laptop
