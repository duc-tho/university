<header class="header">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-toggleable-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="/">SAIGON_ACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="{{route('tin-tuc', ['trang-chu'])}}">Trang Chủ</a>
                    </li>
                    <li class="nav-item dropdown has-submenu">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thể Loại</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="{{route('tin-tuc-danh-muc',['trang-chu','tin-tuc-danh-muc'])}}"">Nghiên Cứu</span></a></li>
                            <li><a class=" dropdown-item" href="{{route('tin-tuc-danh-muc',['trang-chu','tin-tuc-danh-muc'])}}"">Tuyển Sinh</span></a></li>
                            <li><a class=" dropdown-item" href="{{route('tin-tuc-danh-muc',['trang-chu','tin-tuc-danh-muc'])}}"">Tin Tức và Hoạt Động</span></a></li>
                            <li><a class=" dropdown-item" href="{{route('tin-tuc-danh-muc',['trang-chu','tin-tuc-danh-muc'])}}"">Chương Trình Học</span></a></li>
                            <li><a class=" dropdown-item" href="{{route('tin-tuc-danh-muc',['trang-chu','tin-tuc-danh-muc'])}}"">Du Học Và Học Bổng</span></a></li>
                            <li><a class=" dropdown-item" href="{{route('tin-tuc-danh-muc',['trang-chu','tin-tuc-danh-muc'])}}"">Thông Báo</span></a></li>
                            <li><a class=" dropdown-item" href="{{route('tin-tuc-danh-muc',['trang-chu','tin-tuc-danh-muc'])}}"">Tin Tức</span></a></li>
                        </ul>
                    </li>
                    <li class=" nav-item dropdown has-submenu">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tuyển sinh</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                        <li><a class="dropdown-item" href="{{route('tin-tuc-danh-muc',['trang-chu','tin-tuc-danh-muc'])}}"">Cao đẳng <span class=" hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{-- route('khoadulich') --}}">Khoa Du Lịch</a></li>
                                                <li><a class="dropdown-item" href="{{-- route('khoakinhte') --}}">Khoa Kinh Tế</a></li>
                                                <li><a class="dropdown-item" href="{{-- route('khoangoaingu') --}}">Khoa Ngoại Ngữ</a></li>
                                                <li><a class="dropdown-item" href="{{-- route('khoanghethuat') --}}">Khoa Nghệ Thuật</a></li>

                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="{{route('tin-tuc-danh-muc',['trang-chu','tin-tuc-danh-muc'])}}"">Trung Cấp <span class=" hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{-- route('khoadulich') --}}">Khoa Du Lịch</a></li>
                                                <li><a class="dropdown-item" href="{{-- route('khoakinhte') --}}">Khoa Kinh Tế</a></li>
                                                <li><a class="dropdown-item" href="{{-- route('khoangoaingu') --}}">Khoa Ngoại Ngữ</a></li>
                                                <li><a class="dropdown-item" href="{{-- route('khoanghethuat') --}}">Khoa Nghệ Thuật</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-author.html">Trực tuyến <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('tuyensinh')}}">Đăng ký xét tuyển trực tuyến</a></li>
                                                <li><a class="dropdown-item" href="{{route('tuyensinh')}}">Tư vấn tuyển sinh trực tuyến</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
            </div>
        </nav>
    </div><!-- end container -->
</header><!-- end header -->
