<?php

use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\AuthenticateController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\TeacherController as AdminTeacherController;
use App\Http\Controllers\Admin\HomeController as DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Student_reController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\News_Controller;
use App\Http\Controllers\Admin\SpecializedController;

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

#region authenticate route
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/logout', [AuthenticateController::class, 'logout'])->name('logout');
Route::post('/authenticate', [AuthenticateController::class, 'authenticate'])->name('authenticate');
#endregion

#region lfm route
// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
#endregion

#region admin route
Route::get('/admin', [DashboardController::class, 'redirect'])->name('admin.redirect');

Route::name('admin.')->prefix('admin/{khoa}')->middleware(['CheckLogedIn', 'RequireFaculty'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::name('faculty.')->prefix('faculty')->group(function () {
        //
        Route::get('/', [FacultyController::class, 'show'])
            ->middleware('can:faculty_list')
            ->name('show');
        //
        Route::get('add',  [FacultyController::class, 'create'])
            ->middleware('can:faculty_create')
            ->name('create');
        Route::post('add',  [FacultyController::class, 'store'])
            ->middleware('can:faculty_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [FacultyController::class, 'edit'])
            ->middleware('can:faculty_edit')
            ->name('edit')
            ->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [FacultyController::class, 'update'])
            ->middleware('can:faculty_edit')
            ->name('update')
            ->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [FacultyController::class, 'delete'])
            ->middleware('can:faculty_delete')
            ->name('delete')
            ->where(['id' => '[0-9]+']);
        //
    });



        //Route add,edit,delete category
        Route::name('category.')->prefix('category')->group(function () {
            //
            Route::get('/', [CategoryController::class, 'show'])->name('show');
            //
            Route::get('add',  [CategoryController::class, 'create'])->name('create');
            Route::post('add',  [CategoryController::class, 'store'])->name('store');
            //
            Route::get('/edit/{id}',  [CategoryController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
            Route::post('/edit/{id}', [CategoryController::class, 'update'])->name('update')->where(['id' => '[0-9]+']);
            //
            Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete')->where(['id' => '[0-9]+']);
            //
        });

        Route::name('news.')->prefix('news')->group(function () {
            //
            Route::get('/', [News_Controller::class, 'show'])->name('show');
            //
            Route::get('add',  [News_Controller::class, 'create'])->name('create');
            Route::post('add',  [News_Controller::class, 'store'])->name('store');
            //
            Route::get('/edit/{id}',  [News_Controller::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
            Route::post('/edit/{id}', [News_Controller::class, 'update'])->name('update')->where(['id' => '[0-9]+']);
            //
            Route::get('delete/{id}', [News_Controller::class, 'delete'])->name('delete')->where(['id' => '[0-9]+']);
            //
        });

    Route::name('teacher.')->prefix('teacher')->group(function () {
        //
        Route::get('/', [AdminTeacherController::class, 'show'])->name('show');
        //
        Route::get('/add',  [AdminTeacherController::class, 'create'])->name('create');
        Route::post('/add',  [AdminTeacherController::class, 'store'])->name('store');
        //
        Route::get('/edit/{id}',  [AdminTeacherController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [AdminTeacherController::class, 'update'])->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [AdminTeacherController::class, 'delete'])->name('delete')->where(['id' => '[0-9]+']);
        //

    });

    Route::name('slide.')->prefix('slide')->group(function () {
        //
        Route::get('/', [SlideController::class, 'show'])->name('show');
        //
        Route::get('add',  [SlideController::class, 'create'])->name('create');
        Route::post('add',  [SlideController::class, 'store'])->name('store');
        //
        Route::get('/edit/{id}',  [SlideController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [SlideController::class, 'update'])->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [SlideController::class, 'delete'])->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    Route::name('specialized.')->prefix('specialized')->group(function () {
        //
        Route::get('/', [SpecializedController::class, 'show'])->name('show');
        //
        Route::get('add',  [SpecializedController::class, 'create'])->name('create');
        Route::post('add',  [SpecializedController::class, 'store'])->name('store');
        //
        Route::get('/edit/{id}',  [SpecializedController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [SpecializedController::class, 'update'])->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [SpecializedController::class, 'delete'])->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    Route::name('user.')->prefix('user')->group(function () {
        //
        Route::get('/', [UserController::class, 'show'])->name('show');
        //
        Route::get('add',  [UserController::class, 'create'])->name('create');
        Route::post('add',  [UserController::class, 'store'])->name('store');
        //
        Route::get('/edit/{id}',  [UserController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [UserController::class, 'update'])->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    Route::name('role.')->prefix('role')->group(function () {
        //
        Route::get('/', [RoleController::class, 'show'])->name('show');
        //
        Route::get('add',  [RoleController::class, 'create'])->name('create');
        Route::post('add',  [RoleController::class, 'store'])->name('store');
        //
        Route::get('/edit/{id}',  [RoleController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [RoleController::class, 'update'])->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    Route::name('permission.')->prefix('permission')->group(function () {
        //
        Route::get('add',  [PermissionController::class, 'create'])->name('create');
        Route::post('add',  [PermissionController::class, 'store'])->name('store');
        //
    });
});
#endregion

#region client route

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
Route::get('/{khoa}/thong-bao/{category}/{name}', [NotificationController::class, 'detail'])->name('thong-bao-chi-tiet');

// hình ảnh
Route::get('/{khoa}/hinh-anh', [ImageController::class, 'index'])->name('hinh-anh'); // tạo chức năng lọc :D theo danh mục
Route::get('/{khoa}/hinh-anh/{name}', [ImageController::class, 'detail'])->name('hinh-anh-chi-tiet');

// video
Route::get('/{khoa}/video', [VideoController::class, 'index'])->name('video'); // tạo chức năng lọc :D theo danh mục
Route::get('/{khoa}/video/{name}', [VideoController::class, 'detail'])->name('video-chi-tiet');

#endregion
