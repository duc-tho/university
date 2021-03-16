<section class="w3l-top-menu-1">
    <div class="top-hd">
        <div class="container">
            <header class="row top-menu-top">
                <div class="accounts col-lg-8 col-lg-6">
                    {{-- <li class="top_li"><span class="fa fa-phone"></span><a href="tel:+142 5897555"> (028) 628 614 62</a>
                    </li>
                    <li class="top_li1"><span class="fa fa-envelope-o"></span> <a
                            href="mailto:education-mail@support.com" class="mail"> khoadulich@daihocdulich.edu.vn</a>
                    </li> --}}
                </div>
                <div class="social-top col-lg-4 col-6">
                    <a href="{{ route('tuyensinh') }}" class="btn btn-secondary btn-theme4">Đăng Ký </a>
                </div>
            </header>
        </div>
    </div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
    <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2 " >
        <div class="container">
            <!-- <a class="navbar-brand" href="index.html"></a>	<img src="images/logo.png" alt="Logo" style="width:40%; height: auto;"></a> -->

            <a class="navbar-brand" href="/">
                <img src="{{$logo}}" style="width: 55%;" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto" id="navwidth">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('trang-chu', [$faculty['slug']])}}">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('gioi-thieu', [$faculty['slug']])}}">GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ route('tintuc') }}">Tin Tức</a> --}}
                        <a class="nav-link" href="{{route('tin-tuc', [$faculty['slug']])}}">TIN TỨC</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            ĐÀO TẠO
                        </a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="introdution.html"></a>
                            {{-- <a class="dropdown-item" href="{{ route('quantrikhachsan') }}">Ngành quản trị khách sạn</a> --}}
                            @foreach ($all_specialized as $item)
                                    <a class="dropdown-item" href="{{route('dao-tao-chi-tiet', [$faculty['slug'],$item->slug])}}">{{$item->name}}</a>
                            @endforeach
                            {{-- <a class="dropdown-item" href="{{route('dao-tao-chi-tiet', [$faculty['slug'],'nghanh-quan-tri-khach-san'])}}">Ngành quản trị khách sạn</a>
                            <a class="dropdown-item" href="{{route('dao-tao-chi-tiet', [$faculty['slug'],'nghanh-quan-tri-nha-hang-va-dich-vu-an-uong'])}}">Ngành quản trị nhà hàng và
                                dịch vụ ăn uống</a>
                            <a class="dropdown-item" href="{{route('dao-tao-chi-tiet', [$faculty['slug'],'nghanh-quan-tri-du-lich-valu-hanh'])}}">Ngành quản trị du lịch và lữ
                                hành</a> --}}
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('thong-bao', [$faculty['slug']])}}">THÔNG BÁO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('giao-vien', [$faculty['slug']])}}">GIÁO VIÊN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('lien-he', [$faculty['slug']])}}">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
