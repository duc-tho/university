<div class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="logo">
                    <a href="/"><img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/logo.png') }}" alt=""></a>
                </div><!-- end logo -->
            </div>
            <div class="col-md-6">
                <div class="banner1">
                    <a href="index.html"><img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/banner1.png') }}" alt=""></a>
                </div><!-- end logo -->
            </div>
        </div><!-- end row -->
    </div><!-- end header-logo -->
</div><!-- end header -->

<header class="header">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-toggleable-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="{{ route('khoanghethuat') }}">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item dropdown has-submenu">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ĐÀO TẠO</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li class="dropdown-item">Cao đẳng<span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('chi_tiet_nghanh_nghethuat') }}">Ngành diễn viên kịch nói và điện ảnh</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chi_tiet_nghanh_nghethuat') }}">Ngành thanh nhạc</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chi_tiet_nghanh_nghethuat') }}">Ngành quay phim</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chi_tiet_nghanh_nghethuat') }}">Ngành đồ họa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chi_tiet_nghanh_nghethuat') }}">Ngành thiết kế thời trang</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chi_tiet_nghanh_nghethuat') }}">Ngành may thời trang</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item">Trung cấp<span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('chi_tiet_nghanh_nghethuat') }}">Ngành may thời trang</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chi_tiet_nghanh_nghethuat') }}">Ngành thiết kế đồ họa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chi_tiet_nghanh_nghethuat') }}">Ngành thanh nhạc</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chi_tiet_nghanh_nghethuat') }}">Ngành diễn viên kịch điện ảnh</a></li>
                                </ul>
                            </li>
                            <!-- <li><a class="dropdown-item" href="blog-author.html">Blog Author</a></li>
                            <li><a class="dropdown-item" href="page-contact.html">Contact Page</a></li>
                            <li><a class="dropdown-item" href="page.html">Default Page</a></li>
                            <li><a class="dropdown-item" href="page-fullwidth.html">Fullwidth Page</a></li>
                            <li><a class="dropdown-item" href="page-404.html">Not Found Page</a></li>
                            <li><a class="dropdown-item" href="page-sitemap.html">Sitemap & Archives</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="{{ route('khoanghethuat-tintuc') }}">TIN TỨC - SỰ KIỆN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="{{ route('home-teacher') }}">GIẢNG VIÊN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="{{ route('khoanghethuat-tintuc') }}">THÔNG BÁO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-pink-hover" href="{{ route('khoanghethuat-lienhe') }}">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- end container -->
</header><!-- end header -->
