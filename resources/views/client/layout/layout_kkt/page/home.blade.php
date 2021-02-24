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
        <div class="single-slider bg_cover pt-150"
            style="background-image: url(/dist/layout/layout_kkt/images/hihkhoa_files/nganh-quan-tri-kinh-doanh-chien-luoc-cho-ban-than-ban-thumbnail-36473.jpg)"
            data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 ">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">QUẢN TRỊ KINH DOANH</h1>
                            <p>Quản trị kinh doanh là việc thực hiện các hành vi quản trị quá trình kinh doanh để duy trì,
                                phát triển công việc kinh doanh của doanh nghiệp</p>
                            <ul>
                                {{-- <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{  route('khoakinhte-chitietkhoahoc') }}">Đọc Thêm</a></li> --}}
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="">Đọc Thêm</a>
                                </li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2"
                                        href="javascript:">Tư vấn</a></li>
                            </ul>

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-150"
            style="background-image: url(/dist/layout/layout_kkt/images/hihkhoa_files/nganh-tai-chinh-ngan-hang-hoc-de-lam-gi-thumbnail-99181.png)"
            data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12  ">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">TÀI CHÍNH NGÂN HÀNG</h1>
                            <p>Quản trị kinh doanh là việc thực hiện các hành vi quản trị quá trình kinh doanh để duy trì,
                                phát triển công việc kinh doanh của doanh nghiệp</p>
                            {{-- <p data-animation="fadeInUp" data-delay="1.3s">Ngành Tài chính ngân hàng có thể
                             chia thành nhiều lĩnh vực chuyên ngành khác nhau như ngân hàng, tài chính doanh
                             nghiệp, tài chính thuế, tài chính bảo hiểm, tài chính công…</p> --}}
                            <ul>
                                {{-- <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{  route('khoakinhte-chitietkhoahoc') }}">Đọc Thêm</a></li> --}}
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="">Đọc Thêm</a>
                                </li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2"
                                        href="javascript:">Tư Vấn</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-150"
            style="background-image: url(/dist/layout/layout_kkt/images/hihkhoa_files/nganh-ke-toan-su-lua-chon-nghe-nghiep-trong-thoi-ky-hoi-nhap-thumbnail-91783.jpg)"
            data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">KẾ TOÁN</h1>
                            <p>Quản trị kinh doanh là việc thực hiện các hành vi quản trị quá trình kinh doanh để duy trì,
                                phát triển công việc kinh doanh của doanh nghiệp</p>
                            {{-- <p data-animation="fadeInUp" data-delay="1.3s">Nơi hội tụ của những nghệ nhân trong nghê thuật thu nhận và xử lý tài sản </p> --}}
                            <ul>
                                {{-- <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{  route('khoakinhte-chitietkhoahoc') }}">Đọc Thêm</a></li> --}}
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="">Đọc Thêm</a>
                                </li>

                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2"
                                        href="javascript:">Tư Vấn</a></li>
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
                        <p>Là một trong những khoa thu hút nhiều sinh viên theo học, với bề dày đào tạo từ
                            năm 2006. Những ngành được đào tạo tại Khoa được đánh giá là thu hút nguồn nhân
                            lực nhiều nhất hiện nay.</p>
                        <p>Chương trình đào tạo được xây dựng trên cơ sở quy định của Bộ giáo dục & Đào tạo theo
                            hệ tín chỉ, tham khảo ý kiến chuyên gia trong ngành và tham khảo chương trình đào
                            tạo tiên tiến từ các quốc gia. Chương trình đào tạo tập trung chuyên sâu vào các
                            kiến thức, kỹ năng chuyên ngành, phù hợp với nhu cầu xã hội, với thiết kế nhằm đảm
                            bảo lượng kiến thức toàn diện cho sinh viên</p>
                        {{-- <a href="{{ route('khoakinhte-gioithieu') }}" class="main-btn mt-55">Tìm hiểu</a></a> --}}
                        <a href="" class="main-btn mt-55">Tìm hiểu</a></a>

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
                                    {{-- <a href="{{ route('khoakinhte-chitiettintuc') }}"> --}}
                                    <a href="#">
                                        <h4>Hội Thảo Chuyên Nghành Về Quản Trị Kinh Doanh</h4>
                                    </a>
                                    <span><i class="fa fa-calendar"></i> 12/03/2021</span>

                                    <span><i class="fa fa-clock-o"></i> 80h30 - 11h00</span>
                                    <span><i class="fa fa-map-marker"></i> Đại Học Du Lịch Văn Hóa Nghệ Thuật Sài Gòn</span>
                                </div>
                            </li>
                            <li>
                                <div class="singel-event">
                                    {{-- <a href="{{ route('khoakinhte-chitiettintuc') }}"> --}}
                                    <a href="#">
                                        <h4>Hội Thảo Chuyên Nghành Về Tài Chính Ngân Hàng</h4>
                                    </a>
                                    <span><i class="fa fa-calendar"></i> 13/03/2021</span>

                                    <span><i class="fa fa-clock-o"></i> 80h30 - 11h00</span>
                                    <span><i class="fa fa-map-marker"></i> Đại Học Du Lịch Văn Hóa Nghệ Thuật Sài Gòn</span>
                                </div>
                            </li>
                            <li>
                                <div class="singel-event">
                                    {{-- <a href="{{ route('khoakinhte-chitiettintuc') }}"> --}}
                                    <a href="#">
                                        <h4>Hội Thảo Chuyên Nghành Về Kế Toán</h4>
                                    </a>
                                    <span><i class="fa fa-calendar"></i> 14/03/2021</span>
                                    <span><i class="fa fa-clock-o"></i> 80h30 - 11h00</span>
                                    <span><i class="fa fa-map-marker"></i> Đại Học Du Lịch Văn Hóa Nghệ Thuật Sài Gòn</span>
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
                            <p>Đội ngũ tư vấn tuyển sinh của nhà trường luôn sẵn sàng giúp đỡ sinh
                                viên 24/7 với sự tận tâm, nhiệt tình.</p>
                            <a href="{{ route('tuyensinh') }}" class="main-btn">Đăng Ký</a>
                        </div> <!-- apply cont -->
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-2">
                            <h3>Đăng Ký Tín Chỉ , Học Phần</h3>
                            <p>Sinh viên đăng kí tín chỉ, học phần thông qua website một cách nhanh gọn, tiện ích,
                            </p>
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
                        <h2>Khóa Học Bổ Ích</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="/dist/layout/layout_kkt/images/link-dhdl-42735.jpg" alt="Course">
                            </div>
                            {{-- <div class="price">
                            <span>Miễn P</span>
                        </div> --}}
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
                            {{-- <a href="{{ route('khoakinhte-chitietkhoahoc') }}"> --}}
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
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="/dist/layout/layout_kkt/images/link-dhdl-76744.png" alt="Course">
                            </div>
                            {{-- <div class="price">
                            <span>Free</span>
                        </div> --}}
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
                            {{-- <a href="{{  route('khoakinhte-chitietkhoahoc') }}"> --}}
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
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="/dist/layout/layout_kkt/images/link-dhdl-95151.jpg" alt="Course">
                            </div>
                            {{-- <div class="price">
                            <span>Free</span>
                        </div> --}}
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
                            {{-- <a href="{{  route('khoakinhte-chitietkhoahoc') }}"> --}}
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
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="/dist/layout/layout_kkt/images/link-dhdl-86243.jpg" alt="Course">
                            </div>
                            {{-- <div class="price">
                            <span>Free</span>
                        </div> --}}
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
                            {{-- <a href="{{  route('khoakinhte-chitietkhoahoc') }}"> --}}
                            <a href="#">
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
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="/dist/layout/layout_kkt/images/link-dhdl-92363.jpg" alt="Course">
                            </div>
                            {{-- <div class="price">
                            <span>Free</span>
                        </div> --}}
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
                            {{-- <a href="{{  route('khoakinhte-chitietkhoahoc') }}"> --}}
                            {{-- <a href="{{  route('khoakinhte-chitietkhoahoc') }}"> --}}

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
                    </div> <!-- singel course -->
                </div>
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>

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
                            <h3>Sinh Viên Khoa Kinh Tế</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="/dist/layout/layout_kkt/images/all-icon/f-1.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Học Bổng</h4>
                                        <p>Những sinh viên tiêu biểu của khoa sẽ được tuyên dương và khen thưởng học bổng .
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
                                        <h4>Phát Triển Bản Thân</h4>
                                        <p>Sinh viên khoa kinh tế sẽ được phát triển tất cả các yếu tố về mọi mặt của kinh
                                            tế, quản trị,...</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="/dist/layout/layout_kkt/images/all-icon/f-3.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Nguồn Tài Liệu </h4>
                                        <p>Khoa kinh tế luôn hỗ trọ sinh viên về các nguồn tài liệu bổ ích nhằm đáp ứng sự
                                            tò mò, tìm hiểu, ham học hỏi của sinh viên</p>
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
                        <p>Là đội ngũ gồm nhiều giảng viên, nhân viên có nhiều kinh nghiệm lâu năm
                            trong giảng dạy về các chuyên nghành kinh tế, quản trị kinh doanh, kế toán,...
                            Những sinh viên sẽ luôn được giảng viên hỗ trọ nhiệt tình, học hỏi những kiến
                            thức mới mẻ hơn. </p>
                        <p>Với tiêu chí đặt giáo dục lên hàng đầu, giảng viên của khoa luôn mong muốn mang đến cho sinh viên
                            những điều tuyệt nhất.</p>
                        {{-- <a href="{{ route('home-teacher') }}" class="main-btn mt-55">Danh sách đội ngũ giảng viên </a> --}}
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
                                        {{-- <a href="{{  route('khoakinhte-thongtingiaovien') }}"> --}}
                                        <a href="#">
                                            <h6>Minh Khoa</h6>
                                        </a>
                                        <span>Giảng Viên</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="/dist/layout/layout_kkt/images/teachers/t-2.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        {{-- <a href="{{  route('khoakinhte-thongtingiaovien') }}"> --}}
                                        <a href="#">
                                            <h6>Đinh Lộc</h6>
                                        </a>
                                        <span>Giảng Viên</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="/dist/layout/layout_kkt/images/teachers/t-3.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        {{-- <a href="{{  route('khoakinhte-thongtingiaovien') }}"> --}}
                                        <a href="#">
                                            <h6>Minh Mộc</h6>
                                        </a>
                                        <span>Trợ Lí Giảng Viên</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="/dist/layout/layout_kkt/images/teachers/t-4.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        {{-- <a href="{{  route('khoakinhte-thongtingiaovien') }}"> --}}
                                        <a href="#">
                                            <h6>Hà Lan</h6>
                                        </a>
                                        <span>Giảng Viên</span>
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

    <section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8"
        style="background-image: url(/dist/layout/layout_kkt/images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h2>Nhận Xét Từ Sinh Viên Của Khoa</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="/dist/layout/layout_kkt/images/testimonial/t-2.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Với sự nhiệt tình giảng dạy của nhân viên cũng như môi
                                trường đào tạo của trường tốt, nên em mới có thể thành công trong lĩnh vực
                                kế toán cũng như trong lĩnh vực kinh tế </p>
                            <h6>Trần Nga Linh</h6>
                            <span>Cựu Sinh Viên</span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="/dist/layout/layout_kkt/images/testimonial/t-3.jpg"" alt=" Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Giảng viên của khoa rất tâm huyết trong việc giảng dạy, đã giúp
                                đỡ em rất nhiều trong việc hiểu rõ hơn rất nhiều về nhiều mặt của Nghành kinh tế . </p>
                            <h6>Nguyễn Vi</h6>
                            <span>Sinh Viên Năm 2</span>
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
                            <p>Được học ở một môi trường nhiệt tình, chuyên về du lịch em cảm thấy rất vui và cũng rất tự
                                hào khi được học ở một trường như vậy </p>
                            <h6>Nguyễn Đinh Văn</h6>
                            <span>Sinh Viên Năm 2</span>
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
                <div class="col-lg-8">
                    <div class="singel-news mt-30">
                        <div class="news-thum pb-25">
                            <img src="/dist/layout/layout_kkt/images/an-tuong-vong-thi-chung-ket-cuoc-thi-tim-kiem-tai-nang-mc-2017-thumbnail-60511.png"
                                width="30%" alt="News">
                        </div>
                        <div class="news-cont">

                            {{-- <a href="{{ route('khoakinhte-chitiettintuc') }}"> --}}
                            <a href="#">
                                <h3>Sinh Viên Khoa Kinh Tế Thực Tập Sinh Tại Doanh Nghiệp</h3>
                            </a>
                            <ul>
                                <li><a href="javascript:"><i class="fa fa-calendar"></i> 12/05 2021 </a></li>
                                <li><a href="javascript:"> <span>Tác Giả :</span> Minh Thắng</a></li>
                            </ul>
                            {{-- <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt .</p> --}}
                        </div>
                    </div> <!-- singel news -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-news news-list">
                        <div class="row">
                            {{-- <div class="col-sm-4">
                            <div class="news-thum mt-30">
                                <img src="/dist/layout/layout_kkt/images/news/ns-1.jpg" alt="News">
                            </div>
                        </div> --}}
                            <div class="col-sm-12">
                                <div class="news-cont mt-30">

                                    {{-- <a href="{{ route('khoakinhte-chitiettintuc') }}"> --}}
                                    <a href="#">
                                        <h3>Sinh Viên Thực Tập Tại Doanh Nghiệp</h3>
                                    </a>
                                    <ul>
                                        <li><a href="javascript:"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="javascript:"> <span>Tác Giả :</span> Minh Thắng</a></li>
                                    </ul>
                                    <p>Thông báo sinh viên thực tập</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            {{-- <div class="col-sm-4">
                            <div class="news-thum mt-30">
                                <img src="/dist/layout/layout_kkt/images/news/ns-2.jpg" alt="News">
                            </div>
                        </div> --}}
                            <div class="col-sm-12">
                                <div class="news-cont mt-30">

                                    {{-- <a href="{{ route('khoakinhte-chitiettintuc') }}"> --}}
                                    <a href="#">
                                        <h3>Sinh Viên Thực Hiện Báo Cáo Về Doanh Nghiệp</h3>
                                    </a>
                                    <ul>
                                        <li><a href="javascript:"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="javascript:"> <span>Tác Giả :</span> Minh Thắng</a></li>
                                    </ul>
                                    <p>Báo cáo của sinh viên về doanh nghiệp</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="news-cont mt-30">

                                    {{-- <a href="{{ route('khoakinhte-chitiettintuc') }}"> --}}
                                    <a href="#">
                                        <h3> Thi Chứng Chỉ Tin Học Của Dinh Viên Khoa Kinh Tế</h3>
                                    </a>
                                    <ul>
                                        <li><a href="javascript:"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="javascript:"><span>Tác Giả :</span> Minh Thắng</a></li>
                                    </ul>
                                    <p>Sinh viên thi chứng chỉ tin học</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->

                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="news-cont mt-30">
                                    {{-- <a href="{{ route('khoakinhte-chitiettintuc') }}"> --}}
                                    <a href="#">
                                        <h3> Thi Chứng Chỉ Tin Học Của Dinh Viên Khoa Kinh Tế</h3>
                                    </a>
                                    <ul>
                                        <li><a href="javascript:"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="javascript:"><span>Tác Giả :</span> Minh Thắng</a></li>
                                    </ul>
                                    <p>Sinh viên thi chứng chỉ tin học</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div>
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
