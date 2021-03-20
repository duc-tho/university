<?php


use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\AuthenticateController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\TeacherController as AdminTeacherController;
use App\Http\Controllers\Admin\HomeController as DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CollabController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\ImageController as AdminImageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\News_Controller;
use App\Http\Controllers\Admin\SpecializedController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\VideoController as AdminVideoController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;

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
        Route::get('/', [CategoryController::class, 'show'])
            ->middleware('can:category_list')
            ->name('show');
        //
        Route::get('add',  [CategoryController::class, 'create'])
            ->middleware('can:category_create')
            ->name('create');
        Route::post('add',  [CategoryController::class, 'store'])
            ->middleware('can:category_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [CategoryController::class, 'edit'])
            ->middleware('can:category_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [CategoryController::class, 'update'])
            ->middleware('can:category_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('delete/{id}', [CategoryController::class, 'delete'])
            ->middleware('can:category_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    // news
    Route::name('news.')->prefix('news')->group(function () {
        //
        Route::get('/', [News_Controller::class, 'show'])
            ->middleware('can:news_list')
            ->name('show');
        //
        Route::get('add',  [News_Controller::class, 'create'])
            ->middleware('can:news_create')
            ->name('create');
        Route::post('add',  [News_Controller::class, 'store'])
            ->middleware('can:news_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [News_Controller::class, 'edit'])
            ->middleware('can:news_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [News_Controller::class, 'update'])
            ->middleware('can:news_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('delete/{id}', [News_Controller::class, 'delete'])
            ->middleware('can:news_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    // teacher
    Route::name('teacher.')->prefix('teacher')->group(function () {
        //
        Route::get('/', [AdminTeacherController::class, 'show'])
            ->middleware('can:teacher_list')
            ->name('show');
        //
        Route::get('/add',  [AdminTeacherController::class, 'create'])
            ->middleware('can:teacher_create')
            ->name('create');
        Route::post('/add',  [AdminTeacherController::class, 'store'])
            ->middleware('can:teacher_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [AdminTeacherController::class, 'edit'])
            ->middleware('can:teacher_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [AdminTeacherController::class, 'update'])
            ->middleware('can:teacher_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [AdminTeacherController::class, 'delete'])
            ->middleware('can:teacher_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //

    });

    // slide
    Route::name('slide.')->prefix('slide')->group(function () {
        //
        Route::get('/', [SlideController::class, 'show'])
            ->middleware('can:slide_list')
            ->name('show');
        //
        Route::get('add',  [SlideController::class, 'create'])
            ->middleware('can:slide_create')
            ->name('create');
        Route::post('add',  [SlideController::class, 'store'])
            ->middleware('can:slide_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [SlideController::class, 'edit'])
            ->middleware('can:slide_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [SlideController::class, 'update'])
            ->middleware('can:slide_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [SlideController::class, 'delete'])
            ->middleware('can:slide_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    // specialized
    Route::name('specialized.')->prefix('specialized')->group(function () {
        //
        Route::get('/', [SpecializedController::class, 'show'])
            ->middleware('can:specialized_list')
            ->name('show');
        //
        Route::get('add',  [SpecializedController::class, 'create'])
            ->middleware('can:specialized_create')
            ->name('create');
        Route::post('add',  [SpecializedController::class, 'store'])
            ->middleware('can:specialized_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [SpecializedController::class, 'edit'])
            ->middleware('can:specialized_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [SpecializedController::class, 'update'])
            ->middleware('can:specialized_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [SpecializedController::class, 'delete'])
            ->middleware('can:specialized_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    // student
    Route::name('student.')->prefix('student')->group(function () {
        //
        Route::get('/', [AdminStudentController::class, 'show'])
            ->middleware('can:student_list')
            ->name('show');
        //
        Route::get('add',  [AdminStudentController::class, 'create'])
            ->middleware('can:student_create')
            ->name('create');
        Route::post('add',  [AdminStudentController::class, 'store'])
            ->middleware('can:student_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [AdminStudentController::class, 'edit'])
            ->middleware('can:student_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [AdminStudentController::class, 'update'])
            ->middleware('can:student_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [AdminStudentController::class, 'delete'])
            ->middleware('can:student_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    Route::name('about.')->prefix('about')->group(function () {
        //
        Route::get('/', [AdminAboutController::class, 'show'])->name('show');
        //
        Route::get('add',  [AdminAboutController::class, 'create'])->name('create');
        Route::post('add',  [AdminAboutController::class, 'store'])->name('store');
        //
        Route::get('/edit/{id}',  [AdminAboutController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [AdminAboutController::class, 'update'])->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [AdminAboutController::class, 'delete'])->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    Route::name('user.')->prefix('user')->group(function () {
        //
        Route::get('/', [UserController::class, 'show'])
            ->middleware('can:user_list')
            ->name('show');
        //
        Route::get('add',  [UserController::class, 'create'])
            ->middleware('can:user_create')
            ->name('create');
        Route::post('add',  [UserController::class, 'store'])
            ->middleware('can:user_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [UserController::class, 'edit'])
            ->middleware('can:user_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [UserController::class, 'update'])
            ->middleware('can:user_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [UserController::class, 'delete'])
            ->middleware('can:user_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    // role
    Route::name('role.')->prefix('role')->group(function () {
        //
        Route::get('/', [RoleController::class, 'show'])
            ->middleware('can:role_list')
            ->name('show');
        //
        Route::get('add',  [RoleController::class, 'create'])
            ->middleware('can:role_create')
            ->name('create');
        Route::post('add',  [RoleController::class, 'store'])
            ->middleware('can:role_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [RoleController::class, 'edit'])
            ->middleware('can:role_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [RoleController::class, 'update'])
            ->middleware('can:role_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [RoleController::class, 'delete'])
            ->middleware('can:role_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    // permission
    Route::name('permission.')->prefix('permission')->group(function () {
        //
        Route::get('add',  [PermissionController::class, 'create'])
            ->middleware('can:permission_create')
            ->name('create');
        Route::post('add',  [PermissionController::class, 'store'])
            ->middleware('can:permission_create')
            ->name('store');
        //
    });

    // setting
    Route::name('setting.')->prefix('setting')->group(function () {
        //
        Route::get('/',  [SettingController::class, 'show'])
            ->middleware('can:setting_list')
            ->name('show');
        Route::post('/',  [SettingController::class, 'update'])
            ->middleware('can:setting_edit')
            ->name('update');
        //
    });

    // about
    Route::name('about.')->prefix('about')->group(function () {
        //
        Route::get('/', [AdminAboutController::class, 'show'])
            ->middleware('can:about_list')
            ->name('show');
        //
        Route::get('add',  [AdminAboutController::class, 'create'])
            ->middleware('can:about_create')
            ->name('create');
        Route::post('add',  [AdminAboutController::class, 'store'])
            ->middleware('can:about_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [AdminAboutController::class, 'edit'])->name('edit')
            ->middleware('can:about_edit')
            ->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [AdminAboutController::class, 'update'])->name('update')
            ->middleware('can:about_edit')
            ->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [AdminAboutController::class, 'delete'])->name('delete')
            ->middleware('can:about_delete')
            ->where(['id' => '[0-9]+']);
        //
    });

    // collab
    Route::name('collab.')->prefix('collab')->group(function () {
        //
        Route::get('/', [CollabController::class, 'show'])
            ->middleware('can:collab_list')
            ->name('show');
        //
        Route::get('add',  [CollabController::class, 'create'])
            ->middleware('can:collab_create')
            ->name('create');
        Route::post('add',  [CollabController::class, 'store'])
            ->middleware('can:collab_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [CollabController::class, 'edit'])
            ->middleware('can:collab_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [CollabController::class, 'update'])
            ->middleware('can:collab_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [CollabController::class, 'delete'])
            ->middleware('can:collab_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    // contact
    Route::name('contact.')->prefix('contact')->group(function () {
        //
        Route::get('/',  [AdminContactController::class, 'show'])
            ->middleware('can:contact_list')
            ->name('show');
        Route::post('/',  [AdminContactController::class, 'update'])
            ->middleware('can:contact_edit')
            ->name('update');
        //
    });

    // image
    Route::name('image.')->prefix('image')->group(function () {
        //
        Route::get('/', [AdminImageController::class, 'show'])
            ->middleware('can:image_list')
            ->name('show');
        //
        Route::get('add',  [AdminImageController::class, 'create'])
            ->middleware('can:image_create')
            ->name('create');
        Route::post('add',  [AdminImageController::class, 'store'])
            ->middleware('can:image_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [AdminImageController::class, 'edit'])
            ->middleware('can:image_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [AdminImageController::class, 'update'])
            ->middleware('can:image_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [AdminImageController::class, 'delete'])
            ->middleware('can:image_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    // statistic
    Route::name('statistic.')->prefix('statistic')->group(function () {
        //
        Route::get('/', [StatisticController::class, 'show'])
            ->middleware('can:statistic_list')
            ->name('show');
        //
        Route::get('add',  [StatisticController::class, 'create'])
            ->middleware('can:statistic_create')
            ->name('create');
        Route::post('add',  [StatisticController::class, 'store'])
            ->middleware('can:statistic_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [StatisticController::class, 'edit'])
            ->middleware('can:statistic_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [StatisticController::class, 'update'])
            ->middleware('can:statistic_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [StatisticController::class, 'delete'])
            ->middleware('can:statistic_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    // video
    Route::name('video.')->prefix('video')->group(function () {
        //
        Route::get('/', [AdminVideoController::class, 'show'])
            ->middleware('can:video_list')
            ->name('show');
        //
        Route::get('add',  [AdminVideoController::class, 'create'])
            ->middleware('can:video_create')
            ->name('create');
        Route::post('add',  [AdminVideoController::class, 'store'])
            ->middleware('can:video_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [AdminVideoController::class, 'edit'])
            ->middleware('can:video_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [AdminVideoController::class, 'update'])
            ->middleware('can:video_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [AdminVideoController::class, 'delete'])
            ->middleware('can:video_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
        //
    });

    // menu
    Route::name('menu.')->prefix('menu')->group(function () {
        //
        Route::get('/', [MenuController::class, 'show'])
            ->middleware('can:menu_list')
            ->name('show');
        //
        Route::get('add',  [MenuController::class, 'create'])
            ->middleware('can:menu_create')
            ->name('create');
        Route::post('add',  [MenuController::class, 'store'])
            ->middleware('can:menu_create')
            ->name('store');
        //
        Route::get('/edit/{id}',  [MenuController::class, 'edit'])
            ->middleware('can:menu_edit')
            ->name('edit')->where(['id' => '[0-9]+']);
        Route::post('/edit/{id}', [MenuController::class, 'update'])
            ->middleware('can:menu_edit')
            ->name('update')->where(['id' => '[0-9]+']);
        //
        Route::get('/delete/{id}', [MenuController::class, 'delete'])
            ->middleware('can:menu_delete')
            ->name('delete')->where(['id' => '[0-9]+']);
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
