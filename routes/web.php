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
