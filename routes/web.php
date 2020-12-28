<?php

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
