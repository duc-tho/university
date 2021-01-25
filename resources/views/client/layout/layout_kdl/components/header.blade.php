<section class="w3l-top-menu-1">
  <div class="top-hd">
    <div class="container">
      <header class="row top-menu-top">
        <div class="accounts col-md-6 col-6">
          <li class="top_li"><span class="fa fa-phone"></span><a href="tel:+142 5897555"> (028) 628 614 62</a> </li>
          <li class="top_li1"><span class="fa fa-envelope-o"></span> <a href="mailto:education-mail@support.com"
              class="mail"> khoadulich@daihocdulich.edu.vn</a> </li>
        </div>
        <div class="social-top col-md-3 col-6">
          <a href="{{route('tuyensinh')}}" class="btn btn-secondary btn-theme4">Đăng Ký </a>
        </div>
        <div class="social-top col-md-3 col-6">
          <a href="contact.html" class="btn btn-secondary btn-theme4">Đăng nhập Hệ Thống SV</a>
        </div>
      </header>
    </div>
  </div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html"></a>	<img src="images/logo.png" alt="Logo" style="width:40%; height: auto;"></a> -->

      <a class="navbar-brand" href="/">
        <img src="{{asset('dist/layout/layout_khoadulich/images/logo.png')}}" style="width: 40%;" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto" id="navwidth">
          <li class="nav-item">
            <a class="nav-link" href="{{route('khoadulich')}}">Trang Chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('gioithieu')}}">Giới Thiệu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('tintuc')}}">Tin Tức</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Đào Tạo
            </a>
            <div class="dropdown-menu">
              {{-- <a class="dropdown-item" href="introdution.html">Giới Thiệu</a> --}}
              <a class="dropdown-item" href="{{route('quantrikhachsan')}}">Ngành quản trị khách sạn</a>
              <a class="dropdown-item" href="{{route('quantrinhahang')}}">Ngành quản trị nhà hàng và dịch vụ ăn uống</a>
              <a class="dropdown-item" href="{{route('quantridulich')}}">Ngành quản trị du lịch và lữ hành</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Sinh Viên
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{route('thuctap')}}">Thực tập</a>
              <a class="dropdown-item" href="{{route('thongbao')}}">Thông Báo</a>
              {{-- <a class="dropdown-item" href="{{route('thongbao')}}">Bảng Tin Khoa</a> --}}
              <a class="dropdown-item" href="#">Đăng Nhập hệ thống sinh viên</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('lienhe')}}">Liên Hệ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>