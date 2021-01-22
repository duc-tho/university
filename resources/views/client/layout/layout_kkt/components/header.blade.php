<!--====== HEADER PART START ======-->

<header id="header-part">

    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact text-lg-left text-center">
                        <ul>
                            <li><img src="{{ asset('dist/layout/layout_kkt/images/all-icon/map.png') }}" alt="icon"><span>70 Tân Thới Nhất , Khu Phố 5 , P.Tân Thới Nhất , Quận 12 </span></li>
                            <li><img src="{{ asset('dist/layout/layout_kkt/images/all-icon/email.png') }}" alt="icon"><span>info@daihocdulich.edu.vn</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-opening-time text-lg-right text-center">
                        <p>Giờ hoạt động : Thứ 2 đến Thứ 6 : 8h đến 17h</p>
                        <p>Thứ 7 : 8h đến 12h</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->

    <div class="header-logo-support pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="{{ asset('dist/layout/layout_kkt/images/hihkhoa_files/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="support-button float-right d-none d-md-block">
                        <div class="support float-left">
                            <div class="icon">
                                <img src="{{ asset('dist/layout/layout_kkt/images/all-icon/support.png') }}" alt="icon">
                            </div>
                            <div class="cont">
                                <p>Đường dây hỗ trợ</p>
                                <span>(028)38.831.793 - (028)38.831.796 </span>
                            </div>
                        </div>
                        <br>
                        <div class="support float-left">
                            <div class="icon">
                                <img src="{{ asset('dist/layout/layout_kkt/images/all-icon/support.png') }}" alt="icon">
                            </div>
                            <div class="cont">
                                <p>Đường dây nóng</p>
                                <span>0914.411.012 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header logo support -->

    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                    <nav class="navbar navbar-inverse navbar-toggleable-md navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="javascript:">Trang Chủ</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('home') }}">Đại Học Du Lịch</a></li>
                                        <li><a href="{{ route('khoakinhte') }}">Khoa Kinh tế</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('khoakinhte-gioithieu') }}">Giới Thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:">Đào Tạo</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('khoakinhte-chitietkhoahoc') }}">Tài Chính Ngân Hàng</a></li>
                                        <li><a href="{{ route('khoakinhte-chitietkhoahoc') }}">Quản Trị Kinh Doanh</a></li>
                                        <li><a href="{{ route('khoakinhte-chitietkhoahoc') }}">Kế Toán</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('khoakinhte-tintuc') }}">Tin Tức - Sự Kiện</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="tintucnhom.html">Events</a></li>
                                        <li><a href="tintucdon.html">Event Singel</a></li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('khoakinhte-danhsachgiaovien') }}">Giảng Viên</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="teachers.html">teachers</a></li>
                                        <li><a href="teachers-singel.html">teacher Singel</a></li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('khoakinhte-lienhe') }}">Liên Lạc</a>
                                </li>
                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                    <div class="right-icon text-right">
                        <ul>
                            <li><a href="javascript:" id="search"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div> <!-- right icon -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

</header>

<!--====== HEADER PART ENDS ======-->
