@extends('client.layout.layout_ngoaingu.index')
@section('title','Trang Chủ Khoa Ngoại Ngữ')
@section('main')
<div id="page">
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" >
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown text-light">WELCOME TO <span>KHOA NGOẠI NGỮ</span></h2>
                <p class="animate__animated animate__fadeInUp">Best choice to learn at SaiGon University.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Tìm hiểu thêm</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 --> 
         <div class="carousel-item" >
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">WELCOME TO <span>KHOA NGOẠI NGỮ</span></h2>
                <p class="animate__animated animate__fadeInUp">Best choice to learn at SaiGon University.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Tìm hiểu thêm</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">WELCOME TO <span>KHOA NGOẠI NGỮ</span></h2>
                <p class="animate__animated animate__fadeInUp">Best choice to learn at SaiGon University.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Tìm hiểu thêm</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-3">
            <div class="icon-box">
              <i class="icofont-computer"></i>
              <h3><a href="">Anh Ngữ</a></h3>
              <p>Học Anh ngữ mở rộng con dường tìm kiếm cờ hội làm việc trong các môi trường nước ngoài chuyên nghiệp</p>
            </div>
          </div>
          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-image"></i>
              <h3><a href="">Nhật Ngữ</a></h3>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tar</p>
            </div>
          </div>
          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-tasks-alt"></i>
              <h3><a href="">Trung Ngữ</a></h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-3 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="icofont-tasks-alt"></i>
              <h3><a href="">Hàn Ngữ</a></h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2017/08/21/muc-tieu-thumbnail-62678.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Mục tiêu của Khoa</h3>
            <p class="font-italic">
              Đào tạo Cử nhân tiếng Anh và Đông Phương học có đủ kiến thức, kỹ năng nghề nghiệp, phẩm chất chính trị, 
              đạo đức, tác phong nghề nghiệp và sức khoẻ tốt để có thể làm việc hiệu quả trong các lĩnh vực chuyên môn có sử dụng tiếng Anh, 
              đáp ứng được yêu cầu xã hội và của nền kinh tế hội nhập quốc tế.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- <style type="text/css">@media (max-width: 768px) {
      #news_new_item_5, #news_new_item_6, #news_new_item_7 {
         display: none;
     }
   }</style> -->
    <!-- news -->
    <section class="section news">
      <div class="container">
        <h2>Tin tức</h2>
        <div class="row">
            
            <div class="col-md-8 col-sm-6 col-xs-12">
              <div class="grid grid--2">
                <article id="post-37885" class="post-37885 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc-chung cart cart--wide"> 
                  <a class="cart__image" href="http://khoangoaingu.daihocdulich.edu.vn/-hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-150/">
                     <img width="373" height="206" src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/07/13/hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-thumbnail-26188.jpg" sizes="(max-width: 373px) 100vw, 373px"> 
                    <i class="post-icon fa fa-align-justify"></i> 
                  </a>
                  <header class="entry-header cart__content">
                    <h3 class="cart__title entry-title">
                      <a href="http://khoangoaingu.daihocdulich.edu.vn/-hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-150/" title="Học ngoại ngữ ở SaigonACT nói như người bản địa">Học ngoại ngữ ở SaigonACT nói như người bản địa</a>
                    </h3> 
                    <span class="posted-on">
                      <time class="entry-date published" datetime="2021-01-15T13:41:37+07:00">2 ngày trước</time>
                      <time class="updated" datetime="2021-01-15T13:42:26+07:00">15/01/2021</time>
                    </span>
                    <span class="byline"> bởi <span class="author vcard">
                      <a class="url fn n" href="https://daihoc.fpt.edu.vn/author/yennth/">Nguyễn Thị Hồng Yến</a></span>
                    </span>
                  </header>
                </article>
                <article id="post-37885" class="post-37885 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc-chung cart cart--wide"> 
                  <a class="cart__image" href="http://khoangoaingu.daihocdulich.edu.vn/-hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-150/">
                     <img width="373" height="206" src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/07/13/hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-thumbnail-26188.jpg" sizes="(max-width: 373px) 100vw, 373px"> 
                    <i class="post-icon fa fa-align-justify"></i> 
                  </a>
                  <header class="entry-header cart__content">
                    <h3 class="cart__title entry-title">
                      <a href="http://khoangoaingu.daihocdulich.edu.vn/-hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-150/" title="Học ngoại ngữ ở SaigonACT nói như người bản địa">Học ngoại ngữ ở SaigonACT nói như người bản địa</a>
                    </h3> 
                    <span class="posted-on">
                      <time class="entry-date published" datetime="2021-01-15T13:41:37+07:00">2 ngày trước</time>
                      <time class="updated" datetime="2021-01-15T13:42:26+07:00">15/01/2021</time>
                    </span>
                    <span class="byline"> bởi <span class="author vcard">
                      <a class="url fn n" href="https://daihoc.fpt.edu.vn/author/yennth/">Nguyễn Thị Hồng Yến</a></span>
                    </span>
                  </header>
                </article>
                <article id="post-37885" class="post-37885 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc-chung cart cart--wide"> 
                  <a class="cart__image" href="http://khoangoaingu.daihocdulich.edu.vn/-hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-150/">
                     <img width="373" height="206" src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/07/13/hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-thumbnail-26188.jpg" sizes="(max-width: 373px) 100vw, 373px"> 
                    <i class="post-icon fa fa-align-justify"></i> 
                  </a>
                  <header class="entry-header cart__content">
                    <h3 class="cart__title entry-title">
                      <a href="http://khoangoaingu.daihocdulich.edu.vn/-hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-150/" title="Học ngoại ngữ ở SaigonACT nói như người bản địa">Học ngoại ngữ ở SaigonACT nói như người bản địa</a>
                    </h3> 
                    <span class="posted-on">
                      <time class="entry-date published" datetime="2021-01-15T13:41:37+07:00">2 ngày trước</time>
                      <time class="updated" datetime="2021-01-15T13:42:26+07:00">15/01/2021</time>
                    </span>
                    <span class="byline"> bởi <span class="author vcard">
                      <a class="url fn n" href="https://daihoc.fpt.edu.vn/author/yennth/">Nguyễn Thị Hồng Yến</a></span>
                    </span>
                  </header>
                </article>
                <article id="post-37885" class="post-37885 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc-chung cart cart--wide"> 
                  <a class="cart__image" href="http://khoangoaingu.daihocdulich.edu.vn/-hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-150/">
                     <img width="373" height="206" src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/07/13/hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-thumbnail-26188.jpg" sizes="(max-width: 373px) 100vw, 373px"> 
                    <i class="post-icon fa fa-align-justify"></i> 
                  </a>
                  <header class="entry-header cart__content">
                    <h3 class="cart__title entry-title">
                      <a href="http://khoangoaingu.daihocdulich.edu.vn/-hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-150/" title="Học ngoại ngữ ở SaigonACT nói như người bản địa">Học ngoại ngữ ở SaigonACT nói như người bản địa</a>
                    </h3> 
                    <span class="posted-on">
                      <time class="entry-date published" datetime="2021-01-15T13:41:37+07:00">2 ngày trước</time>
                      <time class="updated" datetime="2021-01-15T13:42:26+07:00">15/01/2021</time>
                    </span>
                    <span class="byline"> bởi <span class="author vcard">
                      <a class="url fn n" href="https://daihoc.fpt.edu.vn/author/yennth/">Nguyễn Thị Hồng Yến</a></span>
                    </span>
                  </header>
                </article>
              </div>
            </div>
            <div id="news_new_right" class="col-md-4 col-sm-6 col-xs-12"> 
              <a href="https://daihoc.fpt.edu.vn/tet-nay-cung-dai-hoc-fpt-lan-toa-yeu-thuong-den-tre-em-tp-can-tho/">
                <div class="news_new_right_content" id="news_new_item_0">
                  <div class="news_new_right_title"> Tết này, cùng Đại học FPT lan toả yêu thương đến trẻ em TP. Cần Thơ
                    <img src="https://daihoc.fpt.edu.vn/templates/fpt-university/images/new_arrow.png">
                  </div>
                  <div class="news_new_right_post_time">14/01/2021</div>
                </div> 
              </a> 
              <a href="https://daihoc.fpt.edu.vn/thay-co-mach-nuoc-thi-sinh-tham-gia-fpt-edu-hackathon-2021/">
                <div class="news_new_right_content" id="news_new_item_1">
                  <div class="news_new_right_title"> Thầy cô mách nước thí sinh tham gia FPT Edu Hackathon 2021
                    <img src="https://daihoc.fpt.edu.vn/templates/fpt-university/images/new_arrow.png"></div>
                    <div class="news_new_right_post_time">13/01/2021</div>
                  </div> 
                </a> 
                <a href="https://daihoc.fpt.edu.vn/cuu-quan-quan-fpt-edu-hackathon-truong-f-chia-se-bi-quyet-dua-duong-dai/">
                  <div class="news_new_right_content" id="news_new_item_2">
                    <div class="news_new_right_title"> Cựu Quán quân FPT Edu Hackathon trường F chia sẻ bí quyết “đua đường dài”
                      <img src="https://daihoc.fpt.edu.vn/templates/fpt-university/images/new_arrow.png">
                    </div>
                      <div class="news_new_right_post_time">12/01/2021</div>
                  </div> 
                </a> 
                <a href="https://daihoc.fpt.edu.vn/chia-se-khoanh-khac-dau-xuan-voi-cuoc-thi-online-vi-tet-trong-ban-la/">
                  <div class="news_new_right_content" id="news_new_item_3">
                    <div class="news_new_right_title"> Chia sẻ khoảnh khắc đầu xuân với cuộc thi online “Vị Tết trong bạn là …?”
                      <img src="https://daihoc.fpt.edu.vn/templates/fpt-university/images/new_arrow.png">
                    </div>
                    
                    <div class="news_new_right_post_time">12/01/2021</div>
                  </div> 
                </a> 
                <a href="https://daihoc.fpt.edu.vn/ban-se-hack-duoc-nhung-gi-khi-tham-gia-fpt-edu-hackathon-2021/">
                  <div class="news_new_right_content" id="news_new_item_4">
                    <div class="news_new_right_title"> Bạn sẽ “hack” được những gì khi tham gia FPT EDU HACKATHON 2021?
                      <img src="https://daihoc.fpt.edu.vn/templates/fpt-university/images/new_arrow.png">
                    </div>
                    <div class="news_new_right_post_time">10/01/2021</div>
                  </div> 
                </a> 
                <a href="https://daihoc.fpt.edu.vn/dai-hoc-fpt-ha-noi-to-chuc-le-bao-ve-de-tai-nghien-cuu-khoa-hoc-cap-truong/">
                  <div class="news_new_right_content" id="news_new_item_5">
                    <div class="news_new_right_title"> Đại học FPT Hà Nội tổ chức Lễ bảo vệ đề tài Nghiên cứu khoa học cấp trường
                      <img src="https://daihoc.fpt.edu.vn/templates/fpt-university/images/new_arrow.png"></div>
                      <div class="news_new_right_post_time">10/01/2021</div>
                    </div> 
                  </a> 
                  <a href="https://daihoc.fpt.edu.vn/khoi-dong-nam-moi-voi-cuoc-thi-lap-trinh-thuat-toan-%f0%9d%9f%b4-%f0%9d%97%9b%f0%9d%97%a2%f0%9d%97%a8%f0%9d%97%a5%f0%9d%97%a6-%f0%9d%97%96%f0%9d%97%a2%f0%9d%97%97%f0%9d%97%98-%f0%9d%97%96/">
                    <div class="news_new_right_content" id="news_new_item_6">
                      <div class="news_new_right_title"> Khởi động năm mới với cuộc thi lập trình thuật toán “𝟴 𝗛𝗢𝗨𝗥𝗦 – 𝗖𝗢𝗗𝗘 𝗖𝗛𝗔𝗦𝗘𝗥𝗦”
                        <img src="https://daihoc.fpt.edu.vn/templates/fpt-university/images/new_arrow.png"></div>
                        <div class="news_new_right_post_time">08/01/2021</div>
                      </div> 
                  </a>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="padding-top: 15px;"> 
              <a class="button button--outline button--orange" href="https://daihoc.fpt.edu.vn/tin-tuc/">XEM THÊM TIN TỨC</a>
            </div>
        </div>
      </div>
    </section>
    <!-- <style type="text/css">@media (min-width: 768px) {
      .entry-title {
        text-align: left !important; 
         margin-left: 10px !important;
         line-height: 25px;
     }
 
     .entry-date {
       text-align: left !important;
         margin-left: 10px !important;
     }
 
     .event-mobile-only {
       display: none;
     }
 
     .event-desktop-only {
       display: block;
     }
   }
   

   @media (max-width: 768px) {
      #index_event .entry-title {
        text-align: left !important;
         margin-left: 50px !important;
         line-height: 25px;
     }
 
     #index_event .entry-date {
       text-align: left !important;
         margin-left: 50px !important;
     }
 
     #index_event .grid {
       margin-top: 20px;
     }
 
     .event-mobile-only {
       display: block;
     }
 
     .event-desktop-only {
       display: none;
     }
   }</style> -->

    <!-- award -->
    <div id="fh5co-award" class="fh5co-award-1">
      <!--Begin of SVTB  -->
      <div class="container">
        <h3 class="award-title">Sinh viên tiêu biểu</h3>
        <div id="owl-tieubieu" class="owl-carousel owl-theme">
          <div class="item text-center">
            <!-- <img src="images/hang.jpg" alt=""  width="100%" height="auto" class="img-responsive "> -->
            <figure style="width: 200px; height: 200px; border-radius: 50%; overflow: hidden; position: relative; margin: 0 auto 1.5em;">
              <img src="{{asset('dist/layout/layout_khoangoaingu/img/hang.jpg')}}" alt="user" style="width: 100%; border-radius: unset; -webkit-border-radius: unset; position: absolute; top: 50%; transform: translateY(-50%);">
            </figure>
            <div class="h3 award-content">Trần Thị Thanh Hằng</div>
            <div class="award-content">Khóa 186-Khoa Công nghệ thông tin</div>
          </div>
          <div class="item text-center">
            <!-- <img src="images/hang2.jpg" alt=""  width="100%" height="auto" class="img-responsive "> -->
            <figure style="width: 200px; height: 200px; border-radius: 50%; overflow: hidden; position: relative; margin: 0 auto 1.5em;">
              <img src="{{asset('dist/layout/layout_khoangoaingu/img/hang2.jpg')}}" alt="user" style="width: 100%; border-radius: unset; -webkit-border-radius: unset; position: absolute; top: 50%; transform: translateY(-50%);">
            </figure>
            <div class="h3 award-content">Trần Thị Thanh Nga</div>
            <div class="award-content">Khóa 186-Khoa Ngoại ngữ</div>
          </div>
          <div class="item text-center">
            <!-- <img src="images/bao.jpg" alt=""  width="100%" height="auto" class="img-responsive "> -->
            <figure style="width: 200px; height: 200px; border-radius: 50%; overflow: hidden; position: relative; margin: 0 auto 1.5em;">
              <img src="{{asset('dist/layout/layout_khoangoaingu/img/bao.jpg')}}" alt="user" style="width: 100%; border-radius: unset; -webkit-border-radius: unset; position: absolute; top: 50%; transform: translateY(-50%);">
            </figure>
            <div class="h3 award-content">Võ Duy Bảo</div>
            <div class="award-content">Khóa 186 - Khoa Công nghệ thông tin</div>
          </div>
        </div>
      </div>
      <!--End of SVTB  -->
    </div>

    <!-- Tin tuc chuyen nganh box -->
    <div id="fh5co-project " style="padding:0px;">
      <div class="ct-1">
        <div class="container">
          <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="max-width: none;">
              <h2>Tin chuyên ngành ngoại ngữ</h2>
              <p>Tin tức - sự kiện chuyên ngành khoa ngoại ngữ</p>
            </div>
            
          </div>
        </div>
        <div class="container proj-bottom" >
          <div class="row">
            <div class="col-md-4 col-sm-6 fh5co-project fadeIn animate-box animated-fast" data-animate-effect="fadeIn">
              <a href="#"><img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/07/18/tieng-trung-quoc-nganh-hoc-chua-bao-gio-het-hot-thumbnail-44420.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                <h3>Tiếng Trung Quốc - Ngành học chưa bao giờ hết hot</h3>
                <span>Xem chi tiết</span>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-project fadeIn animate-box animated-fast" data-animate-effect="fadeIn">
              <a href="#"><img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/05/30/tai-sao-nen-hoc-tieng-trung-thumbnail-67983.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                <h3>Tại sao nên học tiếng Trung</h3>
                <span>Xem chi tiết</span>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-project fadeIn animate-box animated-fast" data-animate-effect="fadeIn">
              <a href="#">
                <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/05/17/ky-nang-noi-tieng-anh-thumbnail-47615.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                <h3>Kỹ năng nói tiếng Anh</h3>
                <span>Xem chi tiết</span>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-project fadeIn animate-box animated-fast" data-animate-effect="fadeIn">
              <a href="#"><img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/08/02/van-hoa-nhat-ban-thumbnail-52187.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                <h3>Văn hóa Nhật Bản</h3>
                <span>Xem chi tiết</span>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-project fadeIn animate-box animated-fast" data-animate-effect="fadeIn">
              <a href="#"><img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/05/17/phuong-phap-hoc-ngoai-ngu-nhanh-va-hieu-qua-thumbnail-88759.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                <h3>Phương pháp học ngoại ngữ hiệu quả</h3>
                <span>Xem chi tiết</span>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-project fadeIn animate-box animated-fast" data-animate-effect="fadeIn">
              <a href="#"><img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2017/09/14/cu-nhan-nganh-tieng-nhat-khong-so-that-nghiep-thumbnail-23520.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                <h3>Cử nhân ngành tiếng Nhật - Không sợ thất nghiệp</h3>
                <span>Xem chi tiế<th></th></span>
              </a>
            </div>
            <div class="col-md-12 text-right button-more">
              <a class="text-right" href="http://khoangoaingu.daihocdulich.edu.vn/tin-chuyen-nganh-47/">Xem thêm
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                <i class="icofont-rounded-double-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
       
      </div>
    </div>
    <!-- end box -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Services</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <div id="fh5co-started" style="background-image:url(http://khoangoaingu.daihocdulich.edu.vn/upload/link/link-noi-that-g4-14028.png)">
      <div class="overlay"></div>
      <div class="container">
        <div class="row animate-box">
          <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>Đăng ký tư vấn tuyển sinh</h2>
            <p>Bạn có thắc mắc và muốn tìm hiểu về nhà trường và khoa hãy nhấn đăng ký để nhận tư vấn ngay</p>
          </div>
        </div>
        <div class="row animate-box">
          <div class="col-md-8 col-md-offset-2 text-center">
            <p><a href="#" class="btn btn-default btn-lg">Đăng ký tuyển sinh</a></p>
          </div>
        </div>
      </div>
    </div>
    <div style="clear: both;"></div>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">
        <div class="section-title">
          <h2>Doanh nghiệp cộng tác</h2>
        </div>
        <div id="owl-hop-tac" class="owl-carousel clients-carousel">
          <img src="{{asset('http://daihocdulich.edu.vn/upload/link/Link-sai-gon-c-99472.png')}}" alt="">
          <img src="{{asset('http://daihocdulich.edu.vn/upload/link/Link-sai-gon-c-39456.jpg')}}" alt="">
          <img src="{{asset('http://daihocdulich.edu.vn/upload/link/Link-sai-gon-c-64210.jpg')}}" alt="">
          <img src="{{asset('http://daihocdulich.edu.vn/upload/link/Link-sai-gon-c-66470.jpg')}}" alt="">
          <img src="{{asset('http://daihocdulich.edu.vn/upload/link/Link-sai-gon-c-21823.gif')}}" alt="">
          <img src="{{asset('http://daihocdulich.edu.vn/upload/link/Link-sai-gon-c-80240.jpg')}}" alt="">
          <img src="{{asset('http://daihocdulich.edu.vn/upload/link/Link-sai-gon-c-72022.jpg')}}" alt="">
          <img src="{{asset('http://daihocdulich.edu.vn/upload/link/Link-sai-gon-c-36507.jpg')}}" alt="">
        </div>
      </div>
    </section><!-- End Clients Section -->
  </main><!-- End #main -->
  @stop