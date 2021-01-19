<?php

use App\Http\Controllers\Client\Home\AboutController;
use App\Http\Controllers\Client\Home\ContactController;
use App\Http\Controllers\Client\Home\HomeController;
use App\Http\Controllers\Client\Home\NewsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tin-tuc', [NewsController::class, 'index'])->name('home-news');
Route::get('/tin-tuc/{category}', [NewsController::class, 'category'])->name('home-category');
Route::get('/tin-tuc/{category}/{name}', [NewsController::class, 'detail'])->name('home-news-detail');
Route::get('/gioi-thieu', [AboutController::class, 'index'])->name('home-about');
Route::get('/gioi-thieu/{name}', [AboutController::class, 'detail'])->name('home-about-detail');
Route::get('/lien-he', [ContactController::class, 'index'])->name('home-contact');

//Route trỏ về khoa dulịch
Route::get('/khoa-du-lich', [HomeController::class, 'getKDL'])->name('khoadulich');
Route::get('/khoa-du-lich/gioi-thieu', [HomeController::class, 'getIntrodution'])->name('gioithieu');
Route::get('/khoa-du-lich/tin-tuc', [HomeController::class, 'getNews'])->name('tintuc');
Route::get('/khoa-du-lich/tin-tuc/chi-tiet-tin-tuc', [HomeController::class, 'getDetailNews'])->name('chitiettintuc');
Route::get('/khoa-du-lich/dao-tao/nghanh-quan-tri-khach-san', [HomeController::class, 'getQtks'])->name('quantrikhachsan');
Route::get('/khoa-du-lich/dao-tao/nghanh-quan-nha-hang-va-dich-vu-an-uong', [HomeController::class, 'getQtnh'])->name('quantrinhahang');
Route::get('/khoa-du-lich/dao-tao/nghanh-quan-tri-du-lich-va-lu-hanh', [HomeController::class, 'getQtdl'])->name('quantridulich');
Route::get('/khoa-du-lich/sinh-vien/thuc-tap', [HomeController::class, 'getIntership'])->name('thuctap');
Route::get('/khoa-du-lich/sinh-vien/viec-lam', [HomeController::class, 'getJob'])->name('vieclam');
Route::get('/khoa-du-lich/sinh-vien/cong-tac-doan', [HomeController::class, 'getGroup'])->name('congtacdoan');

// Route Tuyển Sinh
Route::get('/tuyen-sinh', [HomeController::class, 'getAdmissions'])->name('tuyensinh');

//Route::get('/khoa-du-lich/lien-he', [HomeController::class, 'getContact'])->name('lienhe');



Route::group(['namespace' => 'App\Http\Controllers\Client', 'prefix' => 'cntt'], function () {
    // Route::get('/tin-tuc',[HomeController::class, 'index'])->name('cnttNews');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('server.pages.home.index');
    })->name('adminHome');

    Route::group(['prefix' => 'demo'], function () {
        Route::get('/demo-1', function() {
            return view('server.pages.demo.demo1');
        })->name('adminDemo1');

        Route::get('/demo-2', function() {
            return view('server.pages.demo.demo2');
        })->name('adminDemo2');
    });
});
