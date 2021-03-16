@extends('client.layout.layout_kkt.index')

@section('title', $faculty['name'])

@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
@endsection

@section('main')
    <!--====== SLIDER PART START ======-->
    <section id="slider-part" class="slider-active">
        @foreach ($slide as $item)
            <div class="single-slider bg_cover pt-150" style="background-image: url(../{{ $item->link }})"
                data-overlay="4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 ">
                            <div class="slider-cont">
                                <h1 data-animation="bounceInLeft" data-delay="1s">QUẢN TRỊ KINH DOANH</h1>
                                <ul>
                                    <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="">Đọc Thêm</a>
                                    </li>
                                    <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2"
                                            href="javascript:">Tư vấn</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

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
                            @foreach ($all_specialized as $key => $item)
                                <div class="col-lg-4">
                                    <a href="{{ route('dao-tao-chi-tiet', [$faculty['slug'], $item->slug]) }}">
                                        <span class="singel-category text-center color-{{ $key + 1 }}">
                                            <span class="icon">
                                                <img src="{{ asset($item->icons) }}" alt="Icon">
                                            </span>
                                            <span class="cont">
                                                <span>{{ $item->name }}</span>
                                            </span>
                                        </span> <!-- singel category -->
                                    </a>
                                </div>
                            @endforeach
                        </div>
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
                        <h2>{{ $faculty['name'] }}</h2>
                        <h5>{!! $faculty['intro_summary'] !!}</h5>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <a href="{{ route('gioi-thieu', [$faculty['slug']]) }}" class="main-btn mt-55">Tìm hiểu</a></a>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        @foreach ($category_news as $key => $category)
                            <div class="event-title">
                                <h3>{{$category->title}}</h3>
                            </div>
                            <ul>
                                <li>
                                    @foreach ($category['news'] as $key => $item)
                                        <div class="singel-event">
                                            <a
                                                href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">
                                                <h4>{{ $item->title }} </h4>
                                            </a>
                                            <strong> <a
                                                    href="{{ route('tin-tuc', [$faculty['slug']]) }}">{{ $category->title }},<b>
                                                        {{ $item->event_time }}</b></a></strong>
                                            {{-- <span><i class="fa fa-map-marker"></i> Đại Học Du Lịch Văn Hóa Nghệ Thuật Sài Gòn</span> --}}
                                        </div>
                                    @endforeach
                                </li>
                            </ul>
                        @endforeach
                        <a href="{{ route('tin-tuc', [$faculty['slug']]) }}" class="main-btn">Xem Thêm</a>
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
                    <div class="col-lg-12">
                        <div class="apply-cont apply-color-1">
                            <h3>{{ $title_admissions }}</h3>
                            <p>{{ $content_admissions }}</p>
                            <a href="{{ route('tuyensinh') }}" class="main-btn">Đăng Ký</a>
                        </div> <!-- apply cont -->
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="apply-cont apply-color-2">
                            <h3>Đăng Ký Tín Chỉ , Học Phần</h3>
                            <p>Sinh viên đăng kí tín chỉ, học phần thông qua website một cách nhanh gọn, tiện ích,
                            </p>
                            <a href="javascript:" class="main-btn">Đăng Ký</a>
                        </div> <!-- apply cont -->
                    </div> --}}
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== APPLY PART ENDS ======-->

    <!--====== COURSE PART START ======-->

    {{-- <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Khóa Học</h5>
                        <h2>Khóa Học Bổ Ích</h2>
                    </div>
                </div>
            </div>
            <div class="row course-slied mt-30">
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="/dist/layout/layout_kkt/images/link-dhdl-42735.jpg" alt="Course">
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
                            <span>(120 Đánh Giá)</span>
                            <a href="">
                                <h4>Cẩm Nang Về Tốc Độ Tăng Trưởng Kinh Tế</h4>
                            </a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="javascript:"><img src="/dist/layout/layout_kkt/images/course/teacher/t-1.jpg"
                                            alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="javascript:">
                                        <h6>Trần Võ Quang</h6>
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
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="/dist/layout/layout_kkt/images/link-dhdl-76744.png" alt="Course">
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
                            <span>(120 Đánh Giá)</span>
                            <a href="">
                                <h4>Thị Trường Kinh Tế Sau Những Biến Động</h4>
                            </a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="javascript:"><img src="/dist/layout/layout_kkt/images/course/teacher/t-2.jpg"
                                            alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="javascript:">
                                        <h6>Ngô Văn Luyến</h6>
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
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="/dist/layout/layout_kkt/images/link-dhdl-95151.jpg" alt="Course">
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
                            <span>(120 Đánh Giá)</span>
                            <a href="">
                                <h4>Các Tổ Chức Vận Hành Quản Trị Kinh Doanh</h4>
                            </a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="javascript:"><img src="/dist/layout/layout_kkt/images/course/teacher/t-3.jpg"
                                            alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="javascript:">
                                        <h6>Nguyễn Nhậm </h6>
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
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="/dist/layout/layout_kkt/images/link-dhdl-86243.jpg" alt="Course">
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
                            <span>(120 Đánh Giá)</span>
                            <a href="">
                                <h4>Quản Lí Hiệu Quả Về Kế Toán</h4>
                            </a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="javascript:"><img src="/dist/layout/layout_kkt/images/course/teacher/t-4.jpg"
                                            alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="javascript:">
                                        <h6>Lê Linh Vương</h6>
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
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="/dist/layout/layout_kkt/images/link-dhdl-92363.jpg" alt="Course">
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
                            <span>(120 Đánh Giá)</span>
                            <a href="">
                                <h4>Kỹ Năng Chuyên Nghành Về Kinh Tế</h4>
                            </a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="javascript:"><img src="/dist/layout/layout_kkt/images/course/teacher/t-5.jpg"
                                            alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="javascript:">
                                        <h6>Nguyễn Ngô Thảo</h6>
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
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--====== COURSE PART ENDS ======-->

    <!--====== VIDEO FEATURE PART START ======-->

    <section id="video-feature" class="bg_cover pt-60 pb-110"
        style="background-image: url(/dist/layout/layout_kkt/images/bg-1.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                        <a class="Video-popup"
                            href="videos/Giới thiệu về Trường Đại Học Du Lịch Sài Gòn ( SAIGONTU ).mp4"><i
                                class="fa fa-play"></i></a>
                    </div> <!-- row -->
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>{{ $title_faculty_description }}</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="/dist/layout/layout_kkt/images/all-icon/f-1.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>{{ $title_scholarship }}</h4>
                                        <p>{{ $title_scholarship_content }}
                                        </p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="/dist/layout/layout_kkt/images/all-icon/f-2.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>{{ $title_develop }}</h4>
                                        <p>{{ $title_develop_content }}</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="/dist/layout/layout_kkt/images/all-icon/f-3.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>{{ $title_resources }}</h4>
                                        <p>{{ $title_resources_content }}</p>
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
    <section id="news-part" class="pt-115 pb-110">
        <div class="container">
            @foreach ($category_notification as $key => $category)
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>{{$category->title}}</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($category['news'] as $key => $item)
                    <div class="col-lg-12">
                        <div class="singel-news news-list">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="news-cont mt-30">
                                        <a
                                            href="{{ route('thong-bao-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">
                                            <h3>{{ $item->title }}</h3>
                                        </a>
                                        <ul>
                                            <li><a
                                                    href="{{ route('thong-bao', [$faculty['slug']]) }}">{{ $category->title }},<b>
                                                        {{ $item->event_time }}</b></a>
                                            </li>
                                            {{-- <li><a href="javascription:">{{ $item->event_time }} </a></li> --}}
                                        </ul>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endforeach
            <br>
            <br>
            <a href="{{ route('thong-bao', [$faculty['slug']]) }}" class="main-btn">Xem Thêm</a>
        </div>
    </section>

    <!--====== TEACHERS PART ENDS ======-->

    <!--====== PUBLICATION PART START ======-->

    <!--====== PUBLICATION PART ENDS ======-->

    <!--====== TEASTIMONIAL PART START ======-->

    <section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8"
        style="background-image: url(/dist/layout/layout_kkt/images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h2>{{ $title_evaluate_student }}</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                @foreach ($student as $item)
                    <div class="col-lg-6">
                        <div class="singel-testimonial">
                            <div class="testimonial-thum">
                                <img src="{{ $item->image }}" alt="Testimonial">
                                <div class="quote">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                            </div>
                            <div class="testimonial-cont">
                                <p>{{ $item->evaluate }}</p>
                                <h6>{{ $item->name }}</h6>
                                <span>{{ $item->intro }}</span>
                            </div>
                        </div> <!-- singel testimonial -->
                    </div>
                @endforeach
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section>

    <!--====== TEASTIMONIAL PART ENDS ======-->

    <!--====== NEWS PART START ======-->

    <section id="teachers-part" class="pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>{{ $title_infor_teacher }}</h5>
                        <h2>{{ $title_teacher_faculty }}</h2>
                    </div> <!-- section title -->
                    <div class="teachers-cont">
                        <p>{{ $content_teacher_faculty }}</p>
                        <a href="{{-- route('home-teacher') --}}" class="main-btn mt-55">Danh sách đội ngũ giảng viên </a>
                    </div> <!-- teachers cont -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                            @foreach ($teacher as $item)
                                <div class="col-sm-6">
                                    <div class="singel-teachers mt-30 text-center">
                                        <div class="image">
                                            <img src="{{ $item->image }}" alt="Teachers">
                                        </div>
                                        <div class="cont">
                                            <a href="{{-- route('khoakinhte-thongtingiaovien') --}}">
                                                <h6>{{ $item->name }}</h6>
                                            </a>
                                            <span>{{ $item->evaluate }}</span>
                                        </div>
                                    </div> <!-- singel teachers -->
                                </div>
                            @endforeach
                        </div> <!-- row -->
                    </div> <!-- teachers -->
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
                    </div>
                </div>
            </div>
            <div class="row patnar-slied">
                @foreach ($collab_logo as $item)
                    <div class="col-lg-12">
                        <div class="singel-patnar text-center mt-40">
                            <img src="{{ asset($item['image_url']) }}" alt="Logo">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--====== PATNAR LOGO PART ENDS ======-->
@endsection
