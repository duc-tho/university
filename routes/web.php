<?php

use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Client\Home\AboutController;
use App\Http\Controllers\Client\Home\ContactController;
use App\Http\Controllers\Client\Home\HomeController;
use App\Http\Controllers\Client\Home\NewsController;
use App\Http\Controllers\Client\Home\TeacherController;
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
Route::get('/giang-vien', [TeacherController::class, 'getTeacher'])->name('home-teacher');
Route::get('/lien-he', [ContactController::class, 'index'])->name('home-contact');

// Route Tuyển Sinh
Route::group(['prefix' => 'tuyen-sinh'], function () {
    Route::get('/', [HomeController::class, 'getAdmissions'])->name('tuyensinh');
    Route::post('/', [HomeController::class, 'postAdmissionsRegister'])->name('formregister');
    Route::get('/thong-bao', [HomeController::class, 'getNotification'])->name('thongbaotuyensinh');
    Route::get('/chi-tiet-thong-bao', [HomeController::class, 'getNotificationDetail'])->name('chitietthongbaotuyensinh');
});
Route::get('complete', [HomeController::class, 'getComplete']);




//Start Route trỏ về khoa dulịch
Route::get('/khoa-du-lich', [HomeController::class, 'getKDL'])->name('khoadulich');
Route::get('/khoa-du-lich/gioi-thieu', [HomeController::class, 'getIntrodution'])->name('gioithieu');
Route::get('/khoa-du-lich/tin-tuc', [HomeController::class, 'getNews'])->name('tintuc');
Route::get('/khoa-du-lich/tin-tuc/chi-tiet-tin-tuc', [HomeController::class, 'getDetailNews'])->name('chitiettintuc');
Route::get('/khoa-du-lich/dao-tao/nghanh-quan-tri-khach-san', [HomeController::class, 'getQtks'])->name('quantrikhachsan');
Route::get('/khoa-du-lich/dao-tao/nghanh-quan-nha-hang-va-dich-vu-an-uong', [HomeController::class, 'getQtnh'])->name('quantrinhahang');
Route::get('/khoa-du-lich/dao-tao/nghanh-quan-tri-du-lich-va-lu-hanh', [HomeController::class, 'getQtdl'])->name('quantridulich');
Route::get('/khoa-du-lich/sinh-vien/thuc-tap', [HomeController::class, 'getIntership'])->name('thuctap');
Route::get('/khoa-du-lich/sinh-vien/thong-bao', [HomeController::class, 'getMess'])->name('thongbao');
Route::get('/khoa-du-lich/sinh-vien/cong-tac-doan', [HomeController::class, 'getGroup'])->name('congtacdoan');
Route::get('/khoa-du-lich/lien-he', [HomeController::class, 'getContact'])->name('lienhe');
// End Route Khoa Du Lich

// StartRoute trỏ về ngoai ngu
Route::get('/khoa-ngoai-ngu', [HomeController::class, 'getLanguages'])->name('khoangoaingu');
Route::get('/khoa-ngoai-ngu/gioi-thieu/tong-quan-su-menh-tam-nhin', [HomeController::class, 'getLanguagesIntrodution'])->name('gioithieukhoangoaingu');
Route::get('/khoa-ngoai-ngu/dao-tao/anh-ngu', [HomeController::class, 'getEducate'])->name('daotaoanhngu');
Route::get('/khoa-ngoai-ngu/tin-tuc-su-kien', [HomeController::class, 'getNewLanguages'])->name('tintucngoaingu');
Route::get('/khoa-ngoai-ngu/tin-tuc/chi-tiet-tin-tuc', [HomeController::class, 'getDetailNewsLanguages'])->name('chitietttkhoangoaingu');
Route::get('/khoa-ngoai-ngu/lien-he', [HomeController::class, 'getContactLanguages'])->name('lienhekhoangoaingu');
Route::get('/khoa-ngoai-ngu/sinh-vien', [HomeController::class, 'getIntershipLanguages'])->name('thuctapkhoangoaingu');
// End Route Khoa Ngoai Ngu

Route::get('/khoa-du-lich/lien-he', [HomeController::class, 'getContact'])->name('lienhe');

//Route trỏ về khoa kinh tế
Route::get('/khoa-kinh-te', function () {
    return view('client.layout.layout_kkt.page.home');
})->name('khoakinhte');
Route::get('/khoa-kinh-te/gioi-thieu', function () {
    return view('client.layout.layout_kkt.page.gioithieu');
})->name('khoakinhte-gioithieu');
Route::get('/khoa-kinh-te/lien-he', function () {
    return view('client.layout.layout_kkt.page.lienlac');
})->name('khoakinhte-lienhe');
Route::get('/khoa-kinh-te/tin-tuc', function () {
    return view('client.layout.layout_kkt.page.tintuc');
})->name('khoakinhte-tintuc');
Route::get('/khoa-kinh-te/tin-tuc/chi-tiet-tin-tuc', function () {
    return view('client.layout.layout_kkt.page.tintucdon');
})->name('khoakinhte-chitiettintuc');
Route::get('/khoa-kinh-te/tin-tuc/danh-sach-tin-tuc', function () {
    return view('client.layout.layout_kkt.page.tintucnhom');
})->name('khoakinhte-danhsachtintuc');
Route::get('/khoa-kinh-te/thong-tin-giao-vien', function () {
    return view('client.layout.layout_kkt.page.thongtingiaovien');
})->name('khoakinhte-thongtingiaovien');
Route::get('/khoa-kinh-te/giao-vien', function () {
    return view('client.layout.layout_kkt.page.thongtinnhieugiaovien');
})->name('khoakinhte-danhsachgiaovien');
Route::get('/khoa-kinh-te/khoa-hoc', function () {
    return view('client.layout.layout_kkt.page.khoahoc');
})->name('khoakinhte-khoahoc');
Route::get('/khoa-kinh-te/chi-tiet-khoa-hoc', function () {
    return view('client.layout.layout_kkt.page.khoahocdon');
})->name('khoakinhte-chitietkhoahoc');

//Route trỏ về khoa nghệ thuật
Route::get('/khoa-nghe-thuat', function () {
    return view('client.layout.layout_nghethuat.page.home');
})->name('khoanghethuat');
Route::get('/khoa-nghe-thuat/gioi-thieu-nghanh', function () {
    return view('client.layout.layout_nghethuat.page.branch');
})->name('chi_tiet_nghanh_nghethuat');
Route::get('/khoa-nghe-thuat/gioi-thieu', function () {
    return view('client.layout.layout_nghethuat.page.intro');
})->name('khoanghethuat-gioithieu');
Route::get('/khoa-nghe-thuat/gioi-thieu/chi-tiet-gioi-thieu', function () {
    return view('client.layout.layout_nghethuat.page.intro-detail');
})->name('khoanghethuat-chitietgioithieu');
Route::get('/khoa-nghe-thuat/lien-he', function () {
    return view('client.layout.layout_nghethuat.page.contact');
})->name('khoanghethuat-lienhe');
Route::get('/khoa-nghe-thuat/tin-tuc', function () {
    return view('client.layout.layout_nghethuat.page.news');
})->name('khoanghethuat-tintuc');
Route::get('/khoa-nghe-thuat/tin-tuc/chi-tiet-tin-tuc', function () {
    return view('client.layout.layout_nghethuat.page.news-detail');
})->name('khoanghethuat-chitiettintuc');
Route::get('/khoa-nghe-thuat/thong-tin-giao-vien', function () {
    return view('client.layout.layout_nghethuat.page.teacher-detail');
})->name('khoanghethuat-thongtingiaovien');
Route::get('/khoa-nghe-thuat/giao-vien', function () {
    return view('client.layout.layout_nghethuat.page.teacher');
})->name('khoanghethuat-danhsachgiaovien');
Route::get('/khoa-nghe-thuat/thong-bao', function () {
    return view('client.layout.layout_nghethuat.page.notification');
})->name('khoanghethuat-thongbao');
Route::get('/khoa-nghe-thuat/chi-tiet-thong-bao', function () {
    return view('client.layout.layout_nghethuat.page.notification-detail');
})->name('khoanghethuat-chitietthongbao');



// Route::group(['namespace' => 'App\Http\Controllers\Client\Home', 'prefix' => 'tuyen-sinh'], function () {
//     Route::get('/',[AdmissionsController::class, 'postRegister'])->name('formregister');

// });

// Route::get('/tuyen-sinh', function() {
//     return view('client.layout.layout_tuyensinh.page.home');
// })->name('formregister');


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('server.pages.home.index');
    })->name('adminHome');

    Route::group(['prefix' => 'demo'], function () {
        Route::get('/demo-1', function () {
            return view('server.pages.demo.demo1');
        })->name('adminDemo1');
        Route::get('/demo-2', function () {
            return view('server.pages.demo.demo2');
        })->name('adminDemo2');
    });

    Route::group(['prefix' => 'slide'], function () {
        Route::get('/', [SlideController::class, 'index'])->name('adminSlide');
    });
});
