<?php

use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\Teacher_reController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Student_reController;
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

Route::group(['namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogedIn'], function () {
        Route::get('/', [LoginController::class, 'getLogin'])->name('admin');
        Route::post('/', [LoginController::class, 'postLogin']);
    });

    Route::get('logout', [HomeAdminController::class, 'getLogout'])->name('logout');

    Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogedOut'], function () {
        Route::get('/home', [HomeAdminController::class, 'getHome'])->name('AdminHome');

        Route::group(['prefix' => 'faculty'], function () {
            Route::get('/', [FacultyController::class, 'getFaculty'])->name('Faculty');

            Route::get('add',  [FacultyController::class, 'getAddFaculty'])->name('GetAddFaculty');

            Route::post('add',  [FacultyController::class, 'postAddFaculty'])->name('PostAddFaculty');

            Route::get('/edit/{id}',  [FacultyController::class, 'getEditFaculty'])
                ->name('GetEditFaculty')
                ->where(['id' => '[0-9]+']);

            Route::post('/edit/{id}', [FacultyController::class, 'postEditFaculty'])
                ->name('PostEditFaculty')
                ->where(['id' => '[0-9]+']);

            Route::get('/delete/{id}', [FacultyController::class, 'deleteFaculty'])
                ->name('DeleteFaculty')
                ->where(['id' => '[0-9]+']);
        });

        //Route add,edit,delete slide
        Route::group(['prefix' => 'slide'], function () {
            Route::get('/', [SlideController::class, 'getSlide'])->name('adminSlide');

            Route::get('add', [SlideController::class,'getAddSlide'])->name('GetAddSlide');

            Route::post('add', [SlideController::class,'postAddSlide'])->name('PostAddSlide');

            Route::get('/edit/{id}',[SlideController::class,'getEditSlide'])
                ->name('GetEditSlide')
                ->where(['id'=>'[0-9]+']);

            Route::post('/edit/{id}',[SlideController::class,'getEditSlide'])
                ->name('PostEditSlide')
                ->where(['id'=>'[0-9]+']);

            Route::get('/delete/{id}', [SlideController::class, 'deleteSlide'])
            ->name('DeleteSlide')
            ->where(['id' => '[0-9]+']);
        });

        //Route add,edit,delete teacher
        Route::group(['prefix' => 'teacher'], function () {
            Route::get('/', [Teacher_reController::class, 'getTeacher'])->name('Teacher');

            Route::get('add',  [Teacher_reController::class, 'getAddTeacher'])->name('GetAddTeacher');

            Route::post('add',  [Teacher_reController::class, 'postAddTeacher'])->name('PostAddTeacher');

            Route::get('/edit/{id}',  [Teacher_reController::class, 'getEditTeacher'])
                ->name('GetEditTeacher')
                ->where(['id' => '[0-9]+']);

            Route::post('/edit/{id}', [Teacher_reController::class, 'postEditTeacher'])
                ->name('PostEditTeacher')
                ->where(['id' => '[0-9]+']);

            Route::get('/delete/{id}', [Teacher_reController::class, 'deleteTeacher'])
                ->name('DeleteTeacher')
                ->where(['id' => '[0-9]+']);
        });

        //Route add,edi,delete student
        Route::group(['prefix' => 'student'], function () {
            Route::get('/', [Student_reController::class, 'getStudent'])->name('Student');

            Route::get('add',  [Student_reController::class, 'getAddStudent'])->name('GetAddStudent');

            Route::post('add',  [Student_reController::class, 'postAddStudent'])->name('PostAddStudent');

            Route::get('/edit/{id}',  [Student_reController::class, 'getEditStudent'])
                ->name('GetEditStudent')
                ->where(['id' => '[0-9]+']);

            Route::post('/edit/{id}', [Student_reController::class, 'postEditStudent'])
                ->name('PostEditStudent')
                ->where(['id' => '[0-9]+']);

            Route::get('/delete/{id}', [Student_reController::class, 'deleteStudent'])
                ->name('DeleteStudent')
                ->where(['id' => '[0-9]+']);
        });

        //Route add,edit,delete user
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', [UserController::class, 'getUser'])->name('User');

            Route::get('add',  [UserController::class, 'getAddUser'])->name('GetAddUser');

            Route::post('add',  [UserController::class, 'postAddUser'])->name('PostAddUser');

            Route::get('/edit/{id}',  [UserController::class, 'getEditUser'])
                ->name('GetEditUser')
                ->where(['id' => '[0-9]+']);

            Route::post('/edit/{id}', [UserController::class, 'postEditUser'])
                ->name('PostEditUser')
                ->where(['id' => '[0-9]+']);

            Route::get('/delete/{id}', [UserController::class, 'deleteUser'])
                ->name('DeleteUser')
                ->where(['id' => '[0-9]+']);
        });
    });

    Route::group(['prefix' => 'demo'], function () {
        Route::get('/demo-1', function () {
            return view('server.pages.demo.demo1');
        })->name('adminDemo1');

        Route::get('/demo-2', function () {
            return view('server.pages.demo.demo2');
        })->name('adminDemo2');
    });
});

// Route Tuyển Sinh
Route::group(['prefix' => 'tuyen-sinh'], function () {
    Route::get('/', [HomeController::class, 'getAdmissions'])->name('tuyensinh');
    Route::post('/', [HomeController::class, 'postAdmissionsRegister'])->name('formregister');
    Route::get('/thong-bao', [HomeController::class, 'getNotification'])->name('thongbaotuyensinh');
    Route::get('/chi-tiet-thong-bao', [HomeController::class, 'getNotificationDetail'])->name('chitietthongbaotuyensinh');
});
Route::get('complete', [HomeController::class, 'getComplete']);

// Giáo Viên
Route::get('/{khoa}/giao-vien', [TeacherController::class, 'index'])->name('giao-vien');
Route::get('/giao-vien/thong-tin-giao-vien', [TeacherController::class, 'detail'])->name('giao-vien-chi-tiet');

// Home
Route::get('/', [HomeController::class, 'redirect'])->name('trang-chu-chuyen-huong');
Route::get('/{khoa}', [HomeController::class, 'index'])->name('trang-chu');

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
// Route::get('/{khoa}/chi-tiet-khoa-hoc', [CourseController::class, 'detail'])->name('khoa-hoc-chi-tiet');

// Thông báo
Route::get('/{khoa}/thong-bao', [NotificationController::class, 'index'])->name('thong-bao');
Route::get('/{khoa}/thong-bao/chi-tiet-thong-bao', [NotificationController::class, 'detail'])->name('thong-bao-chi-tiet');

// hình ảnh
Route::get('/{khoa}/hinh-anh', [ImageController::class, 'index'])->name('hinh-anh'); // tạo chức năng lọc :D theo danh mục
Route::get('/{khoa}/hinh-anh/{name}', [ImageController::class, 'detail'])->name('hinh-anh-chi-tiet');

// video
Route::get('/{khoa}/video', [VideoController::class, 'index'])->name('video'); // tạo chức năng lọc :D theo danh mục
Route::get('/{khoa}/video/{name}', [VideoController::class, 'detail'])->name('video-chi-tiet');
