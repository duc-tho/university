<section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i><a href="mailto:contact@example.com">daihocdulich@dhdl.edu.vn</a>
            <i class="icofont-phone"></i> 0282000200
            <i class="icofont-livejournal"></i><span>Giờ làm việc: T2-T6: 7h30-4h30 - </span>
            <span> T7:7h30-12h</span>
        </div>
        <div class="social-links">
            <a href="javascript:" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="javascript:" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="javascript:" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="javascript:" class="skype"><i class="icofont-skype"></i></a>
            <a href="javascript:" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-6 logo mr-auto">
                <a href="/">
                    <img class="text-light" alt="logo"
                        src="http://khoangoaingu.daihocdulich.edu.vn/upload/file/logo.png"
                        style="width:250px; height: auto;">
                </a>
            </div>


            <div class="col-lg-7 col-md-7 col-sm-6">
                <nav class="nav-menu d-none d-lg-block" style="padding-left: 150px;position: fixed;">
                    <ul>
                        <li class="active"><a href="{{ route('khoangoaingu') }}">Trang chủ</a></li>

                        <li class="drop-down"><a> Giới thiệu</a>
                            <ul>
                                <li><a href="{{ route('gioithieukhoangoaingu') }}">Tổng quan sứ mênh tầm nhìn</a></li>
                                <li><a href="{{ route('gioithieukhoangoaingu') }}">Mục tiêu</a></li>
                                <li><a href="{{ route('gioithieukhoangoaingu') }}">Cơ cấu tổ chức</a></li>
                                <li><a href="{{ route('gioithieukhoangoaingu') }}">Ban chủ nhiệm</a></li>
                                <li class="drop-down"><a href="javascript:">Đội ngũ giảng viên</a>
                                    {{-- <ul>
                  <li><a href="javascript:">Deep Drop Down 1</a></li>
                  <li><a href="javascript:">Deep Drop Down 2</a></li>
                  <li><a href="javascript:">Deep Drop Down 3</a></li>
                  <li><a href="javascript:">Deep Drop Down 4</a></li>
                  <li><a href="javascript:">Deep Drop Down 5</a></li>
                </ul> --}}
                                </li>
                            </ul>
                        </li>

                        <li class="drop-down"><a> Đào tạo</a>
                            <ul>
                                <li><a href="{{ route('daotaoanhngu') }}">Anh ngữ</a></li>
                                <li><a href="{{ route('daotaoanhngu') }}">Hàn ngữ</a></li>
                                <li><a href="{{ route('daotaoanhngu') }}">Trung ngữ</a></li>
                                <li><a href="{{ route('daotaoanhngu') }}">Nhật ngữ</a></li>
                                <!-- <li class="drop-down"><a href="javascript:">Drop Down 2</a>
                <ul>
                  <li><a href="javascript:">Deep Drop Down 1</a></li>
                  <li><a href="javascript:">Deep Drop Down 2</a></li>
                  <li><a href="javascript:">Deep Drop Down 3</a></li>
                  <li><a href="javascript:">Deep Drop Down 4</a></li>
                  <li><a href="javascript:">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
                            </ul>
                        </li>
                        <li class="drop-down"><a> Sinh viên</a>
                            <ul>
                                <li><a href="{{ route('thuctapkhoangoaingu') }}">Thực tập</a></li>
                                <li><a href="javascript:">Câu lạc bộ</a></li>
                                <li><a href="javascript:">Công tác đoàn</a></li>
                                <li><a href="javascript:">Cựu sinh viên</a></li>
                                <li><a href="javascript:">Học bổng</a></li>
                                <li><a href="javascript:">Học tập</a></li>
                                <li><a href="javascript:">Câu lạc bộ</a></li>
                                <li><a href="javascript:">Việc làm thêm</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('tintucngoaingu') }}">Tin tức - Sự kiện</a></li>
                        {{-- <li class="drop-down"><a href="javascript:">Bảng viên</a>
            <ul>
              <li><a href="about.html">Giảng viên</a></li>
              <li><a href="team.html">Sinh viên</a></li>
            </ul>
          </li> --}}
                        <li><a href="{{ route('lienhekhoangoaingu') }}">Liên hệ</a></li>
                    </ul>
                </nav><!-- .nav-menu -->

            </div>
        </div>


    </div>
</header><!-- End Header -->
