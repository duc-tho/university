<?php

use App\Http\Controllers\Client\CourseController;
use App\Http\Controllers\Client\EducateController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ImageController;
use App\Http\Controllers\Client\NewsController;
use App\Http\Controllers\Client\TeacherController;
use App\Http\Controllers\Client\NotificationController;
use App\Http\Controllers\Client\StudentController;
use App\Http\Controllers\Client\VideoController;

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

Route::prefix('/')->group(function() {

    // Giáo Viên
    Route::get('/{khoa}/giao-vien', [TeacherController::class, 'index'])->name('giao-vien');
    Route::get('/giao-vien/thong-tin-giao-vien', [TeacherController::class, 'detail'])->name('giao-vien-chi-tiet');

    // Home
    Route::get('/{khoa}', [HomeController::class, 'index'])->name('trang-chu');


    Route::post('/{khoa}', [HomeController::class, 'postComplete']);

    // Tin Tức
    Route::get('/{khoa}/tin-tuc', [NewsController::class, 'index'])->name('tin-tuc');
    Route::get('/{khoa}/tin-tuc/{category}', [NewsController::class, 'list'])->name('tin-tuc-danh-muc');
    Route::get('/{khoa}/tin-tuc/{category}/{name}', [NewsController::class, 'detail'])->name('tin-tuc-chi-tiet');

    // Giới Thiệu
    Route::get('/{khoa}/gioi-thieu', [AboutController::class, 'index'])->name('gioi-thieu');
    Route::get('/{khoa}/gioi-thieu/{name}', [AboutController::class, 'detail'])->name('gioi-thieu-chi-tiet');

    // Liên hệ
    Route::get('/{khoa}/lien-he', [ContactController::class, 'index'])->name('lien-he');

    // Đào Tạo
    Route::get('/{khoa}/dao-tao/{nganh}', [EducateController::class, 'detail'])->name('dao-tao-chi-tiet');

    // Sinh Viên
    Route::get('/{khoa}/sinh-vien', [StudentController::class, 'list'])->name('sinh-vien-danh-muc');
    Route::get('/{khoa}/sinh-vien/thong-bao/asd', [StudentController::class, 'detail'])->name('sinh-vien-chi-tiet');

    // Khóa Học
    Route::get('/{khoa}/khoa-hoc', [CourseController::class, 'index'])->name('khoa-hoc');

    // hình ảnh
    Route::get('/{khoa}/hinh-anh', [ImageController::class, 'index'])->name('hinh-anh'); // tạo chức năng lọc :D theo danh mục
    Route::get('/{khoa}/hinh-anh/{name}', [ImageController::class, 'detail'])->name('hinh-anh-chi-tiet');

});
