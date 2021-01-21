@extends('client.layout.layout_kdl.index')
@section('title','Trang Chủ Khoa Du Lịch')
@section('main')
<section class="w3l-main-slider" id="home">
  <div class="companies20-content">
    <div class="owl-one owl-carousel owl-theme" >
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Khoa Du Lịch Đồng Hành Cùng Sinh Viên</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html">Tìm Hiểu</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Explore The World Of Our Graduates</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html">Đọc Thêm</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Exceptional People, Exceptional Care</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html">Đọc Thêm</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Explore The World Of Our Graduates</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html">Đọc Thêm</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>

  </div>
</section>


<section class="w3l-feature-3" id="features">
  <div class="grid top-bottom mb-lg-5 pb-lg-5">
    <div class="container">

      <div class="middle-section grid-column text-center">
        <div class="three-grids-columns">
          <span class="fa fa-laptop" id="faicon"></span>
          <h4>NGHÀNH QUẢN TRỊ KHÁCH SẠN</h4>
          <p>Quản trị khách sạn là quản lý và tổ chức các hoạt động của khách sạn sao cho hiệu quả và hợp lý nhất. 
          </p>
          <a href="services.html" class="btn btn-secondary btn-theme3 mt-4">Đọc thêm </a>
        </div>
        <div class="three-grids-columns">
          <span class="fa fa-users" id="faicon"></span>
          <h4>NGÀNH QUẢN TRỊ NHÀ HÀNG VÀ DỊCH VỤ ĂN UỐNG</h4>
          <p>Quản trị dịch vụ du lịch và lữ hành là một trong những ngành học dẫn đầu về nhu cầu nhân lực, có mức lương cao. 
          </p>
          <a href="services.html" class="btn btn-secondary btn-theme3 mt-4">Đọc thêm </a>
        </div>
        <div class="three-grids-columns">
          <span class="fa fa-book" id="faicon"></span>
          <h4>NGHÀNH QUẢN TRỊ DU LỊCH VÀ LỮ HÀNH</h4>
          <p>Quản trị du lịch và lữ hành là  ngành du lịch thật sự trở thành ngành kinh tế mũi nhọn, đã và đang góp phần thúc đẩy sự chuyển dịch cơ cấu kinh tế.
          </p>
          <a href="services.html" class="btn btn-secondary btn-theme3 mt-4">Đọc thêm</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- features-4 block -->
<section class="w3l-index1" id="about">
  <div class="calltoaction-20  py-5 editContent">
    <div class="container py-md-3">

      <div class="calltoaction-20-content row">
        <div class="column center-align-self col-lg-6 pr-lg-5">
          <h5 class="editContent">Chào bạn đến với Khoa Du Lịch</h5>
          <p class="more-gap editContent">Khoa du lịch là nơi đông bảo sinh viên ở các trường đại học tham gia
            và học hỏi rất nhiều, sinh viên tham gia học khoa du lịch ngày càng đông đảo</p>
          <p class="more-gap editContent">Khoa du lịch của trường đã và đang lại đại diện nghành có tỉ lệ sinh viên
            tham gia trường rất cao và đỗ tốt nghiệp rất lớn.
          </p>
          <a class="btn btn-secondary btn-theme2 mt-3" href="about.html"> Đọc Thêm</a>
        </div>
        <div class="column ccont-left col-lg-6">
          <img src="{{asset('dist/layout/layout_khoadulich/images/20181227183820-68860.png')}}" class="img-responsive" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- features-4 block -->
<section class="services-12" id="course">
  <div class="form-12-content">
    <div class="container">
      <div class="grid grid-column-2 ">

        <div class="column1">
          <div class="heading">
            <h3 class="head text-white">Đăng ký và Ứng tuyển vào Khoa Du Lịch</h3>
            <h4>Mọi sinh viên đều có thể tham gia Khoa Du Lịch</h4>
            <p class="my-3 text-white">Năm 2016, Khoa Du Lịch đã đạt tỉ lệ sinh viên tham gia học ở khoa lớn nhất
              trường
              tỉ lệ sinh viên muốn tham gia rất cao, và tỉ lệ đáp ứng vô cùng lớn.
            </p>
          </div>
        </div>
        <div class="column2">
          <a class="btn btn-secondary btn-theme2 mt-3" href="contact.html"> Ứng Tuyển</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--  form-12 -->
<section class="w3l-form-12">
  <div class="form-12-content py-5" id="services">
    <div class="container py-md-3">
      <div class="grid grid-column-2 py-md-5">

        <div class="column1">
          <h4 class="tagline">Tìm kiếm </h4>
          <p>Những địa điểm du lịch lí tưởng của khoa trong năm 2021</p>
          <form action="/" method="Get">
            <div class="">
              <input type="text" name="name" class="form-input" placeholder="Tên Địa Điểm">
            </div>
            <div class="">
              <select id="sel1">
                <option>Miền Bắc</option>
                <option>Miền Trung</option>
                <option>Miền Nam</option>
                <option>Biển</option>
                <option>Núi</option>
              </select>
            </div>


            <button type="submit" class="btn btn-secondary btn-theme2">Tìm Kiếm</button>
          </form>
        </div>
        <div class="column2">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-6">
              <a href="services.html">
                <div class="courses-item">
                  <span class="fa fa-male"></span>
                  <p>Số Lượng</p>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
              <a href="services.html">
                <div class="courses-item">
                  <span class="fa fa-suitcase"></span>
                  <p>Hành Lí</p>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
              <a href="services.html">
                <div class="courses-item">
                  <span class="fa fa-code"></span>
                  <p>Web hỗ trọ</p>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
              <a href="services.html">
                <div class="courses-item">
                  <span class="	fa fa-book"></span>
                  <p>Khóa Học</p>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6 col-6 mt-4">
              <a href="services.html">
                <div class="courses-item mt-2">
                  <span class="	fa fa-image"></span>
                  <p>Hình Ảnh</p>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6 col-6 mt-4">
              <a href="services.html">
                <div class="courses-item mt-2">
                  <span class="fa fa-gg"></span>
                  <p>Liên Kết</p>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6 col-6 mt-4">
              <a href="services.html">
                <div class="courses-item mt-2">
                  <span class="fa fa-paper-plane-o"></span>
                  <p>CheckIn</p>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6 col-6 mt-4">
              <a href="services.html">
                <div class="courses-item mt-2">
                  <span class="		fa fa-object-group"></span>
                  <p>Nhóm</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <section class="w3l-index2">
  <div class="main-w3 py-5" id="stats">
    <div class="container py-lg-3">
      <div class="row main-cont-wthree-fea">
        <div class="col-lg-3 col-sm-6">
          <div class="grids-speci1">
            <h3 class="title-spe">60</h3>
            <p>ĐỊA ĐIỂM SINH VIÊN <br>THAM GIA</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
          <div class="grids-speci1">
            <h3 class="title-spe">18</h3>
            <p> ĐỊA ĐIỂM DU LỊCH <br>NỔI TIẾNG</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6  mt-lg-0 mt-4">
          <div class="grids-speci1">
            <h3 class="title-spe">34</h3>
            <p>CÁC KHÓA <br>DU LỊCH</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
          <div class="grids-speci1">
            <h3 class="title-spe">20</h3>
            <p>HỌC BỔNG <br>TOÀN PHẦN</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="w3l-customers-4" id="testimonials">
  <div id="customers4-block" class="py-5">
    <div class="container py-md-3">
      <div class="section-title align-center row">
        <div class="item-top col-md-6 pr-md-5">
          <div class="heading">
            <h3 class="head text-white">Nơi lí tưởng cho sinh viên học về mảng Du Lịch</h3>
            <p class="my-3 head text-white">Được đông đảo sinh viên tham gia nhiệt tình hăng hái, khoa du lịch đã và
              đang phát triển ngày càng
              mạnh mẽ, và tiềm năng càng phát triển khi là khoa chủ đạo là nghành chủ đạo của trường
            </p>
            <p class="my-3 head text-white"> Được sự quan tâm của các bạn trẻ, khoa du lịch cũng như trường luôn tiếp
              đón các ý kiến
              bình luận để góp ý để Khoa Du Lịch ngày càng phát triển và hoàn thiện hơn
            </p>
          </div>
        </div>
        <div class="item-top col-md-6 mt-md-0 mt-4">
          <div class="item text-center">
            <div class="imgTitle">
              <img src="{{asset('dist/layout/layout_khoadulich/images/c3.jpg')}}" class="img-responsive" alt="" />
            </div>
            <h6 class="mt-3">Nguyễn Lưu Vân Anh</h6>
            <p class="">Cựu Sinh Viên Của Trường</p>
            <p> Khoa du lịch đã cho tôi những trải nghiệm về 4 năm sinh viên thật tuyệt vời, được tận hưởng niềm vui
              cũng như những kiến thức về du lịch đã cho tôi sự tự tịn hơn rất nhiều</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<section class="w3l-price-2" id="news">
  <div class="price-main py-5">
    <div class="container py-md-3">
      <div class="pricing-style-w3ls row py-md-5">
        <div class="pricing-chart col-lg-6">
          <h3 class="">Tin tức</h3>
          <div class="tatest-top mt-md-5 mt-4">
            <div class="price-box btn-layout bt6">
              <div class="grid grid-column-2">
                <div class="column-6">
                  <img src="{{asset('dist/layout/layout_khoadulich/images/20170828170500-78971.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="column1">

                  <div class="job-info">
                    <h6 class="pricehead"><a href="#">Khoa Du Lịch được tuyên dương </a></h6>
                    <h5>Tháng 6/24/2021</h5>
                    <p>Tự hào khi khoa du lịch được tuyên dương trước trường ...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-box btn-layout bt6">
              <div class="grid grid-column-2">
                <div class="column-6">
                  <img src="{{asset('dist/layout/layout_khoadulich/images/20180118145548-56466.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="column1">

                  <div class="job-info">
                    <h6 class="pricehead"><a href="#">Khoa Du Lịch được tuyên dương </a></h6>
                    <h5>Tháng 6/24/2021</h5>
                    <p>Tự hào khi khoa du lịch được tuyên dương trước trường ...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-box btn-layout bt6">
              <div class="grid grid-column-2">
                <div class="column-6">
                  <img src="{{asset('dist/layout/layout_khoadulich/images/5.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="column1">

                  <div class="job-info">
                    <h6 class="pricehead"><a href="#">Khoa Du Lịch được tuyên dương </a></h6>
                    <h5>Tháng 6/24/2021</h5>
                    <p>Tự hào khi khoa du lịch được tuyên dương trước trường ...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-right mt-4">
            <a class="btn btn-secondary btn-theme2" href="#"> Xem tất cả</a>
          </div>
        </div>
        <div class="pricing-chart col-lg-6">
          <h3 class="">Thông Báo</h3>
          <div class="tatest-top mt-md-5 mt-4">
            <div class="price-box btn-layout bt6">
              <div class="grid grid-column-2">
                <div class="column-6">
                  <img src="{{asset('dist/layout/layout_khoadulich/images/20190920102331-31696.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="column1">

                  <div class="job-info">
                    <h6 class="pricehead"><a href="#">Khoa Du Lịch được tuyên dương </a></h6>
                    <h5>Tháng 6/24/2021</h5>
                    <p>Tự hào khi khoa du lịch được tuyên dương trước trường ...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-box btn-layout bt6">
              <div class="grid grid-column-2">
                <div class="column-6">
                  <img src="{{asset('dist/layout/layout_khoadulich/images/link-dhdl-45338.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="column1">

                  <div class="job-info">
                    <h6 class="pricehead"><a href="#">Khoa Du Lịch được tuyên dương </a></h6>
                    <h5>Tháng 6/24/2021</h5>
                    <p>Tự hào khi khoa du lịch được tuyên dương trước trường ...</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-box btn-layout bt6">
              <div class="grid grid-column-2">
                <div class="column-6">
                  <img src="{{asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="column1">

                  <div class="job-info">
                    <h6 class="pricehead"><a href="#">Khoa Du Lịch được tuyên dương </a></h6>
                    <h5>Tháng 6/24/2021</h5>
                    <p>Tự hào khi khoa du lịch được tuyên dương trước trường ...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-right mt-4" >
            <a class="btn btn-secondary btn-theme2" href="#"> Xem tất cả</a>
          </div>
        </div>
 
        <div class="w3l-faq-page col-lg-6 pl-3 pl-lg-5 mt-lg-0 mt-5">
          <br>
          <h3 class="">Sự kiện Của Khoa</h3>
          <div class="events-top mt-md-5 mt-4">
            <div class="events-top-left">
              <div class="icon-top">
                <h3>20</h3>
                <p>Tháng3</p>
                <span>2021</span>
              </div>
            </div>
            <div class="events-top-right">
              <h6 class="pricehead"><a href="#">
                  SỰ KIỆN TỔ CHỨC THAM QUAN CHIẾN TÍCH SƠN MỸ</a></h6>
              <p class="mb-2 mt-3">Sinh viên sẽ được đi tham quan khu chiến tích sơn mỹ để mở rộng kiến thức...</p>
              <li>05:00 - 21:00 </li>
              <li class="melb">Việt Nam, Quảng Ngãi</li>
            </div>
          </div>
          <div class="events-top mt-4">
            <div class="events-top-left">
              <div class="icon-top">
                <h3>29</h3>
                <p>Tháng 4</p>
                <span>2021</span>
              </div>
            </div>
            <div class="events-top-right">
              <h6 class="pricehead"><a href="#">
                  CỐ ĐÔ HUẾ</a></h6>
              <p class="mb-2 mt-3">Sự kiện đặc biệt, nhà trường tổ chứ đi cố đô Huế cho sinh viên ....</p>
              <li>05:00 - 22:00 </li>
              <li class="melb">Việt Nam, Huế</li>
            </div>
          </div>
          <div class="text-right mt-4">
            <a class="btn btn-secondary btn-theme2" href="#"> Xem Tất Cả</a>
          </div>
        </div>
        <div class="w3l-faq-page col-lg-6 pl-3 pl-lg-5 mt-lg-0 mt-5">
          <br>
          <h3 class="">Việc Làm Sinh Viên</h3>
          <div class="events-top mt-md-5 mt-4">
            <div class="events-top-left">
              <div class="icon-top">
                <h3>20</h3>
                <p>Tháng3</p>
                <span>2021</span>
              </div>
            </div>
            <div class="events-top-right">
              <h6 class="pricehead"><a href="#">
                  SỰ KIỆN TỔ CHỨC THAM QUAN CHIẾN TÍCH SƠN MỸ</a></h6>
              <p class="mb-2 mt-3">Sinh viên sẽ được đi tham quan khu chiến tích sơn mỹ để mở rộng kiến thức...</p>
              <li>05:00 - 21:00 </li>
              <li class="melb">Việt Nam, Quảng Ngãi</li>
            </div>
          </div>
          <div class="events-top mt-4">
            <div class="events-top-left">
              <div class="icon-top">
                <h3>29</h3>
                <p>Tháng 4</p>
                <span>2021</span>
              </div>
            </div>
            <div class="events-top-right">
              <h6 class="pricehead"><a href="#">
                  CỐ ĐÔ HUẾ</a></h6>
              <p class="mb-2 mt-3">Sự kiện đặc biệt, nhà trường tổ chứ đi cố đô Huế cho sinh viên ....</p>
              <li>05:00 - 22:00 </li>
              <li class="melb">Việt Nam, Huế</li>
            </div>
          </div>
          <div class="text-right mt-4">
            <a class="btn btn-secondary btn-theme2" href="#">Xem Tất Cả</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<div class="student w3layouts-agileinfo">
  <div class="container">
    <h3 class="ctdn">Cộng Tác Doanh Nghiệp</h3>
    <br>
    <div id="owl-congtac" class="owl-carousel owl-theme" data-interval="50" data-delay="100" data-ride="carousel">
      <img src="{{asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-21823.gif')}}" width="100%" height="auto" class="img-responsive" alt="">
      <img src="{{asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-24394.jpg')}}" width="100%" height="auto" class="img-responsive" alt="">
      <img src="{{asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-36507.jpg')}}" width="100%" height="auto" class="img-responsive" alt="">
      <img src="{{asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-66470.jpg')}}" width="100%" height="auto" class="img-responsive" alt="">
      <img src="{{asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-39456.jpg')}}" width="100%" height="auto" class="img-responsive" alt="">
      <img src="{{asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-64210.jpg')}}" width="100%" height="auto" class="img-responsive" alt="">

    </div>
  </div>
</div>
<br>
@stop