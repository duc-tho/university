@extends('client.layout.layout_kkt.index')

@section('title', 'Khoa Kinh Tế')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<!--====== SLIDER PART START ======-->

<section id="slider-part" class="slider-active">
    <div class="single-slider bg_cover pt-150" style="background-image: url(/dist/layout/layout_kkt/images/hihkhoa_files/nganh-quan-tri-kinh-doanh-chien-luoc-cho-ban-than-ban-thumbnail-36473.jpg)" data-overlay="4">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9">
                    <div class="slider-cont">
                        <h1 data-animation="bounceInLeft" data-delay="1s">QUẢN TRỊ KINH DOANH</h1>
                        <p data-animation="fadeInUp" data-delay="1.3s">Khối óc của sự logic và quyết đoán</p>
                        <ul>
                            {{-- <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="javascript:">Đọc Thêm</a></li>
                            <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="javascript:">Tư vấn</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- single slider -->

    <div class="single-slider bg_cover pt-150" style="background-image: url(/dist/layout/layout_kkt/images/hihkhoa_files/nganh-tai-chinh-ngan-hang-hoc-de-lam-gi-thumbnail-99181.png)" data-overlay="4">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9">
                    <div class="slider-cont">
                        <h1 data-animation="bounceInLeft" data-delay="1s">TÀI CHÍNH KẾ TOÁN</h1>
                        <p data-animation="fadeInUp" data-delay="1.3s">Donec vitae sapien ut libearo venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt Sed fringilla mauri amet nibh.</p>
                        <ul>
                            {{-- <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="javascript:">Đọc Thêm</a></li>
                            <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="javascript:">Tư Vấn</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- single slider -->

    <div class="single-slider bg_cover pt-150" style="background-image: url(/dist/layout/layout_kkt/images/hihkhoa_files/nganh-ke-toan-su-lua-chon-nghe-nghiep-trong-thoi-ky-hoi-nhap-thumbnail-91783.jpg)" data-overlay="4">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9">
                    <div class="slider-cont">
                        <h1 data-animation="bounceInLeft" data-delay="1s">NGÀNH KẾ TOÁN</h1>
                        <p data-animation="fadeInUp" data-delay="1.3s">Nơi hội tụ của những nghệ nhân trong nghê thuật thu nhận và xử lý tài sản </p>
                        <ul>
                            {{-- <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="javascript:">Đọc Thêm</a></li>
                            <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="javascript:">Tư Vấn</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- single slider -->
</section>

<!--====== SLIDER PART ENDS ======-->

<!--====== CATEGORY PART START ======-->

<section id="category-part">
    <div class="container">
        <div class="category pt-40 pb-80">
            <div class="row">
                <div class="col-lg-4">
                    <div class="category-text pt-40">
                        <h2>Ngành Đào Tạo Của Khoa Kinh Tế</h2>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                    <div class="row category-slied mt-40">
                        <div class="col-lg-4">
                            <a href="javascript:">
                                <span class="singel-category text-center color-1">
                                    <span class="icon">
                                        <img src="/dist/layout/layout_kkt/images/all-icon/ctg-1.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Tài Chính Ngân Hàng</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:">
                                <span class="singel-category text-center color-2">
                                    <span class="icon">
                                        <img src="/dist/layout/layout_kkt/images/all-icon/ctg-2.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Quản Trị Kinh Doanh</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:">
                                <span class="singel-category text-center color-3">
                                    <span class="icon">
                                        <img src="/dist/layout/layout_kkt/images/all-icon/ctg-3.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Kế Toán Doanh Nghiệp</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:">
                                <span class="singel-category text-center color-1">
                                    <span class="icon">
                                        <img src="/dist/layout/layout_kkt/images/all-icon/ctg-1.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Thư Ký Văn Phòng</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:">
                                <span class="singel-category text-center color-2">
                                    <span class="icon">
                                        <img src="/dist/layout/layout_kkt/images/all-icon/ctg-2.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Tin Học Ứng dụng</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:">
                                <span class="singel-category text-center color-3">
                                    <span class="icon">
                                        <img src="/dist/layout/layout_kkt/images/all-icon/ctg-3.png" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Quản Trị Mạng Máy Tính</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                    </div> <!-- category slied -->
                </div>
            </div> <!-- row -->
        </div> <!-- category -->
    </div> <!-- container -->
</section>

<!--====== CATEGORY PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about-part" class="pt-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>Thông Tin Khoa</h5>
                    <h2>Chào Mừng Đến với Khoa Kinh Tế </h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris</p>
                    <a href="javascript:" class="main-btn mt-55">Learn More</a>
                </div>
            </div> <!-- about cont -->
            <div class="col-lg-6 offset-lg-1">
                <div class="about-event mt-50">
                    <div class="event-title">
                        <h3>Sự Kiến Sắp Tới</h3>
                    </div> <!-- event title -->
                    <ul>
                        <li>
                            <div class="singel-event">
                                <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                <a href="{{ route('khoakinhte-chitiettintuc') }}">
                                    <h4>Campus clean workshop</h4>
                                </a>
                                <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            </div>
                        </li>
                        <li>
                            <div class="singel-event">
                                <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                <a href="{{ route('khoakinhte-chitiettintuc') }}">
                                    <h4>Tech Summit</h4>
                                </a>
                                <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            </div>
                        </li>
                        <li>
                            <div class="singel-event">
                                <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                <a href="{{ route('khoakinhte-chitiettintuc') }}">
                                    <h4>Enviroement conference</h4>
                                </a>
                                <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            </div>
                        </li>
                    </ul>
                </div> <!-- about event -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="about-bg">
        <img src="/dist/layout/layout_kkt/images/about/bg-1.png" alt="About">
    </div>
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== APPLY PART START ======-->

<section id="apply-aprt" class="pb-120">
    <div class="container">
        <div class="apply">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="apply-cont apply-color-1">
                        <h3>Đăng Ký Tư Vấn Tuyển Sinh</h3>
                        <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                        <a href="javascript:" class="main-btn">Đăng Ký</a>
                    </div> <!-- apply cont -->
                </div>
                <div class="col-lg-6">
                    <div class="apply-cont apply-color-2">
                        <h3>Đăng Ký Tín Chỉ , Học Phần</h3>
                        <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                        <a href="javascript:" class="main-btn">Đăng Ký</a>
                    </div> <!-- apply cont -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== APPLY PART ENDS ======-->

<!--====== COURSE PART START ======-->

<section id="course-part" class="pt-115 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Khóa Học</h5>
                    <h2>Khóa Học Ngắn Hạn </h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row course-slied mt-30">
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="thum">
                        <div class="image">
                            <img src="/dist/layout/layout_kkt/images/course/cu-1.jpg" alt="Course">
                        </div>
                        <div class="price">
                            <span>Free</span>
                        </div>
                    </div>
                    <div class="cont">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(20 Reviws)</span>
                        <a href="{{  route('khoakinhte-chitietkhoahoc') }}">
                            <h4>Learn basis javascirpt from start for beginner</h4>
                        </a>
                        <div class="course-teacher">
                            <div class="thum">
                                <a href="javascript:"><img src="/dist/layout/layout_kkt/images/course/teacher/t-1.jpg" alt="teacher"></a>
                            </div>
                            <div class="name">
                                <a href="javascript:">
                                    <h6>Mark anthem</h6>
                                </a>
                            </div>
                            <div class="admin">
                                <ul>
                                    <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                    <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- singel course -->
            </div>
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="thum">
                        <div class="image">
                            <img src="/dist/layout/layout_kkt/images/course/cu-2.jpg" alt="Course">
                        </div>
                        <div class="price">
                            <span>Free</span>
                        </div>
                    </div>
                    <div class="cont">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(20 Reviws)</span>
                        <a href="{{  route('khoakinhte-chitietkhoahoc') }}">
                            <h4>Learn basis javascirpt from start for beginner</h4>
                        </a>
                        <div class="course-teacher">
                            <div class="thum">
                                <a href="javascript:"><img src="/dist/layout/layout_kkt/images/course/teacher/t-2.jpg" alt="teacher"></a>
                            </div>
                            <div class="name">
                                <a href="javascript:">
                                    <h6>Mark anthem</h6>
                                </a>
                            </div>
                            <div class="admin">
                                <ul>
                                    <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                    <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- singel course -->
            </div>
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="thum">
                        <div class="image">
                            <img src="/dist/layout/layout_kkt/images/course/cu-3.jpg" alt="Course">
                        </div>
                        <div class="price">
                            <span>Free</span>
                        </div>
                    </div>
                    <div class="cont">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(20 Reviws)</span>
                        <a href="{{  route('khoakinhte-chitietkhoahoc') }}">
                            <h4>Learn basis javascirpt from start for beginner</h4>
                        </a>
                        <div class="course-teacher">
                            <div class="thum">
                                <a href="javascript:"><img src="/dist/layout/layout_kkt/images/course/teacher/t-3.jpg" alt="teacher"></a>
                            </div>
                            <div class="name">
                                <a href="javascript:">
                                    <h6>Mark anthem</h6>
                                </a>
                            </div>
                            <div class="admin">
                                <ul>
                                    <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                    <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- singel course -->
            </div>
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="thum">
                        <div class="image">
                            <img src="/dist/layout/layout_kkt/images/course/cu-4.jpg" alt="Course">
                        </div>
                        <div class="price">
                            <span>Free</span>
                        </div>
                    </div>
                    <div class="cont">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(20 Reviws)</span>
                        <a href="{{  route('khoakinhte-chitietkhoahoc') }}">
                            <h4>Learn basis javascirpt from start for beginner</h4>
                        </a>
                        <div class="course-teacher">
                            <div class="thum">
                                <a href="javascript:"><img src="/dist/layout/layout_kkt/images/course/teacher/t-4.jpg" alt="teacher"></a>
                            </div>
                            <div class="name">
                                <a href="javascript:">
                                    <h6>Mark anthem</h6>
                                </a>
                            </div>
                            <div class="admin">
                                <ul>
                                    <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                    <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- singel course -->
            </div>
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="thum">
                        <div class="image">
                            <img src="/dist/layout/layout_kkt/images/course/cu-5.jpg" alt="Course">
                        </div>
                        <div class="price">
                            <span>Free</span>
                        </div>
                    </div>
                    <div class="cont">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>(20 Reviws)</span>
                        <a href="{{  route('khoakinhte-chitietkhoahoc') }}">
                            <h4>Learn basis javascirpt from start for beginner</h4>
                        </a>
                        <div class="course-teacher">
                            <div class="thum">
                                <a href="javascript:"><img src="/dist/layout/layout_kkt/images/course/teacher/t-5.jpg" alt="teacher"></a>
                            </div>
                            <div class="name">
                                <a href="javascript:">
                                    <h6>Mark anthem</h6>
                                </a>
                            </div>
                            <div class="admin">
                                <ul>
                                    <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                    <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- singel course -->
            </div>
        </div> <!-- course slied -->
    </div> <!-- container -->
</section>

<!--====== COURSE PART ENDS ======-->

<!--====== VIDEO FEATURE PART START ======-->

<section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(/dist/layout/layout_kkt/images/bg-1.jpg)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-last order-lg-first">
                <div class="video text-lg-left text-center pt-50">
                    <a class="Video-popup" href="videos/Giới thiệu về Trường Đại Học Du Lịch Sài Gòn ( SAIGONTU ).mp4"><i class="fa fa-play"></i></a>
                </div> <!-- row -->
            </div>
            <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                <div class="feature pt-50">
                    <div class="feature-title">
                        <h3>Cựu Sinh Viên Thành Đạt</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="singel-feature">
                                <div class="icon">
                                    <img src="/dist/layout/layout_kkt/images/all-icon/f-1.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <h4>Global Certificate</h4>
                                    <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                </div>
                            </div> <!-- singel feature -->
                        </li>
                        <li>
                            <div class="singel-feature">
                                <div class="icon">
                                    <img src="/dist/layout/layout_kkt/images/all-icon/f-2.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <h4>Alumni Support</h4>
                                    <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                </div>
                            </div> <!-- singel feature -->
                        </li>
                        <li>
                            <div class="singel-feature">
                                <div class="icon">
                                    <img src="/dist/layout/layout_kkt/images/all-icon/f-3.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <h4>Books & Library</h4>
                                    <p>Gravida nibh vel velit auctor aliquetn auci elit cons solliazcitudirem sem quibibendum sem nibhutis.</p>
                                </div>
                            </div> <!-- singel feature -->
                        </li>
                    </ul>
                </div> <!-- feature -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="feature-bg"></div> <!-- feature bg -->
</section>

<!--====== VIDEO FEATURE PART ENDS ======-->

<!--====== TEACHERS PART START ======-->

<section id="teachers-part" class="pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>Thông Tin Giảng Viên</h5>
                    <h2>Giảng Viên Khoa</h2>
                </div> <!-- section title -->
                <div class="teachers-cont">
                    <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris</p>
                    <a href="{{ route('khoakinhte-danhsachgiaovien') }}" class="main-btn mt-55">Career with us</a>
                </div> <!-- teachers cont -->
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="teachers mt-20">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="singel-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="/dist/layout/layout_kkt/images/teachers/t-1.jpg" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                                        <h6>Mark alen</h6>
                                    </a>
                                    <span>Vice chencelor</span>
                                </div>
                            </div> <!-- singel teachers -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="/dist/layout/layout_kkt/images/teachers/t-2.jpg" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                                        <h6>David card</h6>
                                    </a>
                                    <span>Pro chencelor</span>
                                </div>
                            </div> <!-- singel teachers -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="/dist/layout/layout_kkt/images/teachers/t-3.jpg" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                                        <h6>Rebeka alig</h6>
                                    </a>
                                    <span>Pro chencelor</span>
                                </div>
                            </div> <!-- singel teachers -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="/dist/layout/layout_kkt/images/teachers/t-4.jpg" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                                        <h6>Hanna bein</h6>
                                    </a>
                                    <span>Aerobics head</span>
                                </div>
                            </div> <!-- singel teachers -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- teachers -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEACHERS PART ENDS ======-->

<!--====== PUBLICATION PART START ======-->



<!--====== PUBLICATION PART ENDS ======-->

<!--====== TEASTIMONIAL PART START ======-->

<section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8" style="background-image: url(/dist/layout/layout_kkt/images/bg-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-40">
                    <h5>Nhận Xét</h5>
                    <h2>Nhận Xét Của Sinh Viên</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row testimonial-slied mt-40">
            <div class="col-lg-6">
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img src="/dist/layout/layout_kkt/images/hihkhoa_files/back_top.png" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>Trường đào tạo rất tốt , i love "Du Lịch Sài gòn" :)) </p>
                        <h6>Trần Nga</h6>
                        <span>Thông Dịch viên</span>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            <div class="col-lg-6">
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img src="/dist/layout/layout_kkt/images/testimonial/t-2.jpg" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                        <h6>Rubina Helen</h6>
                        <span>Bsc, Engineering</span>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            <div class="col-lg-6">
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img src="/dist/layout/layout_kkt/images/testimonial/t-3.jpg" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                        <h6>Rubina Helen</h6>
                        <span>Bsc, Engineering</span>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
        </div> <!-- testimonial slied -->
    </div> <!-- container -->
</section>

<!--====== TEASTIMONIAL PART ENDS ======-->

<!--====== NEWS PART START ======-->

<section id="news-part" class="pt-115 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-50">
                    <h5>Thông Báo</h5>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="singel-news mt-30">
                    <div class="news-thum pb-25">
                        <img src="/dist/layout/layout_kkt/images/news/n-1.jpg" alt="News">
                    </div>
                    <div class="news-cont">
                        <ul>
                            <li><a href="javascript:"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                            <li><a href="javascript:"> <span>By</span> Adam linn</a></li>
                        </ul>
                        <a href="{{ route('khoakinhte-chitiettintuc') }}">
                            <h3>Tips to grade high cgpa in university life</h3>
                        </a>
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt .</p>
                    </div>
                </div> <!-- singel news -->
            </div>
            <div class="col-lg-6">
                <div class="singel-news news-list">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="news-thum mt-30">
                                <img src="/dist/layout/layout_kkt/images/news/ns-1.jpg" alt="News">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="news-cont mt-30">
                                <ul>
                                    <li><a href="javascript:"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                    <li><a href="javascript:"> <span>By</span> Adam linn</a></li>
                                </ul>
                                <a href="{{ route('khoakinhte-chitiettintuc') }}">
                                    <h3>Intellectual communication</h3>
                                </a>
                                <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons vel.</p>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- singel news -->
                <div class="singel-news news-list">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="news-thum mt-30">
                                <img src="/dist/layout/layout_kkt/images/news/ns-2.jpg" alt="News">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="news-cont mt-30">
                                <ul>
                                    <li><a href="javascript:"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                    <li><a href="javascript:"> <span>By</span> Adam linn</a></li>
                                </ul>
                                <a href="{{ route('khoakinhte-chitiettintuc') }}">
                                    <h3>Study makes you perfect</h3>
                                </a>
                                <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons vel.</p>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- singel news -->
                <div class="singel-news news-list">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="news-thum mt-30">
                                <img src="/dist/layout/layout_kkt/images/news/ns-3.jpg" alt="News">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="news-cont mt-30">
                                <ul>
                                    <li><a href="javascript:"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                    <li><a href="javascript:"> <span>By</span> Adam linn</a></li>
                                </ul>
                                <a href="{{ route('khoakinhte-chitiettintuc') }}">
                                    <h3>Technology edcution is now....</h3>
                                </a>
                                <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons vel.</p>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- singel news -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== NEWS PART ENDS ======-->

<!--====== PATNAR LOGO PART START ======-->

<div id="patnar-logo" class="pt-40 pb-80 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-50">
                    <h5>Đối Tác</h5>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row patnar-slied">
            <div class="col-lg-12">
                <div class="singel-patnar text-center mt-40">
                    <img src="/dist/layout/layout_kkt/images/patnar-logo/p-1.png" alt="Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="singel-patnar text-center mt-40">
                    <img src="/dist/layout/layout_kkt/images/patnar-logo/p-2.png" alt="Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="singel-patnar text-center mt-40">
                    <img src="/dist/layout/layout_kkt/images/patnar-logo/p-3.png" alt="Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="singel-patnar text-center mt-40">
                    <img src="/dist/layout/layout_kkt/images/patnar-logo/p-4.png" alt="Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="singel-patnar text-center mt-40">
                    <img src="/dist/layout/layout_kkt/images/patnar-logo/p-2.png" alt="Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="singel-patnar text-center mt-40">
                    <img src="/dist/layout/layout_kkt/images/patnar-logo/p-3.png" alt="Logo">
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>

<!--====== PATNAR LOGO PART ENDS ======-->
@endsection
