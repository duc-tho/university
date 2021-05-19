<?php

use App\Http\Controllers\Admin\AuthenticateController;
use App\Http\Controllers\Client\HomeController;
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

#region authenticate route
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/logout', [AuthenticateController::class, 'logout'])->name('logout');
Route::post('/authenticate', [AuthenticateController::class, 'authenticate'])->name('authenticate');
#endregion

#region lfm route
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
#endregion

// Home
Route::get('/', [HomeController::class, 'redirect'])->name('trang-chu-chuyen-huong');

// Route Tuyển Sinh
Route::group(['prefix' => 'tuyen-sinh'], function () {
    Route::get('/', [HomeController::class, 'getAdmissions'])->name('tuyensinh');
    Route::post('/', [HomeController::class, 'postAdmissionsRegister'])->name('formregister');
});

Route::get('complete', [HomeController::class, 'getComplete']);
Route::get('complete_home', [HomeController::class, 'getCompleteHome']);