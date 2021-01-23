@extends('client.layout.layout_kdl.index')
@section('title','Tin Tức')
@section('main')
<section class="w3l-service-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
      <div class="container py-lg-3">
        <h2>Tin tức Khoa Du Lịch</h2>
        <p><a href="index.html">Trang Chủ</a> &nbsp; / &nbsp; Tin Tức</p>
      </div>
    </div>
  </section>
  <section class="w3l-features-8">
    <!-- /features -->
    <div class="features py-5" id="services">
      <div class="container py-md-3">
        <div class="fea-gd-vv text-center row">
          <div class="float-top col-lg-4 col-md-6">
            <a href="{{route('chitiettintuc')}}"><img src="{{asset('dist/layout/layout_khoadulich/images/hoc-ngan-han-tai-saigonact-nhieu-lua-chon-cho-nguoi-hoc-thumbnail-36492.jpg')}}" class="img-responsive" alt=""></a>
            
            <div class="float-lt feature-gd">
              <h3><a href="{{route('chitiettintuc')}}"">Học ngắn hạn tại SAIGONACT: Nhiều lựa chọn cho người học</a> </h3>
              <h6> <span id="sernew">Tin tức,</span> tháng 6/24/2020</h6>
              <p> Bạn đã tốt nghiệp THPT hoặc đã học hết phổ thông nhưng đại học không phải là sự lựa chọn của bạn. </p>
            </div>
          </div>
          <div class="float-top col-lg-4 col-md-6 mt-md-0 mt-5">
            <a href="#"><img src="{{asset('dist/layout/layout_khoadulich/images/gioi-thieu-khoa-hoc-ngan-han-nghiep-vu-le-tan-thumbnail-61683.jpg')}}" class="img-responsive" alt=""></a>
            <div class="float-lt feature-gd">
              <h3><a href="#">Chiêu sinh khoá học Nghiệp vụ Batender</a> </h3>
              <h6> <span id="sernew" >Tin tức,</span> tháng 6/24/2020</h6>

              <p>Khoá học Nghiệp vụ Batender là một trong những khoá đào tạo ngắn hạn , trường Cao đẳng Văn hoá Nghệ thuật và Du lịch Sài Gòn (SAIGONACT). </p>

            </div>
          </div>
          <div class="float-top col-lg-4 col-md-6 mt-lg-0 mt-5">
            <a href="#"><img src="{{asset('dist/layout/layout_khoadulich/images/chieu-sinh-khoa-hoc-nghiep-vu-batender-thumbnail-24046.jpg')}}" class="img-responsive" alt=""></a>
            
            <div class="float-lt feature-gd">
              <h3><a href="#"> Nghiệp Vụ Lễ Tân, Nghiệp Vụ Phục Vụ  Khách Sạn</a> </h3>
              <h6> <span id="sernew">Tin tức,</span> tháng 6/24/2020</h6>
              <p> ⭐⭐⭐ LỚP NGHIỆP VỤ LỄ TÂN KHÁCH SẠN VÀ LỚP NGHIỆP VỤ PHỤC VỤ BÀN NHÀ HÀNG KHÁCH SẠN⭐⭐⭐ </p>
            </div>
          </div>
          <div class="float-top col-lg-4 col-md-6 mt-5">
            <a href="#"><img src="{{asset('dist/layout/layout_khoadulich/images/20180118150548-73629.jpg')}}" class="img-responsive" alt=""></a>
            
            <div class="float-lt feature-gd">
              <h3><a href="#">Giới thiệu khoá học ngắn hạn Nghiệp vụ phục vụ bàn nhà hàng khách sạnc</a> </h3>
            
              <p> SAIGONACT chiêu sinh khoá học Nghiệp vụ phục vụ bàn nhà hàng khách sạn</p>
            </div>
          </div>
          <div class="float-top col-lg-4 col-md-6 mt-5">
            <a href="#"><img src="{{asset('dist/layout/layout_khoadulich/images/20180118150548-73629.jpg')}}" class="img-responsive" alt=""></a>
            
            <div class="float-lt feature-gd">
              <h3><a href="#">SAIGONACT chiêu sinh các lớp học ngắn hạn Du lịch</a> </h3>
              {{-- <h3><a href="#">Analysis of Principal</a> </h3> --}}
              <p> Năm học 2020 - 2021, Trường Cao đẳng Văn hoá Nghệ thuật và Du lịch Sài Gòn (SAIGONACT)  </p>
            </div>
          </div>
          <div class="float-top col-lg-4 col-md-6 mt-5">
            <a href="#"><img src="{{asset('dist/layout/layout_khoadulich/images/20180118150548-73629.jpg')}}" class="img-responsive" alt=""></a>
            
            <div class="float-lt feature-gd">
              <h3><a href="#">Kết nối để thành công để trao yêu thương</a> </h3>
              {{-- <h3><a href="#">Analysis of Principal</a> </h3> --}}
              <p> Bất kỳ ai trong chúng ta sẽ có những lúc rơi vào những khoảnh khắc những giai đoạn gặp phải những vướng mắc mà chúng ta khó lòng tự giải quyết được</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //features -->
  </section>
  <br>
  <div class="container" >
    <div class="row">
      <div class="col-xs-12">
        <nav aria-label="Page navigation" >
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      
    </div>
  </div>
  
<br>
@stop