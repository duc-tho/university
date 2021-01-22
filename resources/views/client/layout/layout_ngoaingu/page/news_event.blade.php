@extends('client.layout.layout_ngoaingu.index')
@section('title',' Tin Tức-Sự Kiện Khoa Ngoại Ngữ')
@section('main')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('khoangoaingu')}}">Trang chủ</a></li>
          <li>Tin tức</li>
        </ol>
        <h2>Tin tức - Sự kiện</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry row">
              <div class="col-md-3">
                <div class="entry-img">
                  <a href="{{route('chitietttkhoangoaingu')}}"><img src="{{asset('http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/07/13/hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-thumbnail-26188.jpg')}}" alt="" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-9">
              <h2 class="entry-title h5">
                <a href="{{route('chitietttkhoangoaingu')}}">Học ngoại ngữ ở SaigonACT nói như người bản địa</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Truyền thông</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">13/07/2019</time></a></li>
                 
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Tại sao tôi có thể nói như thế. Bởi vì học sinh, sinh viên đều được học với giảng viên là người bản địa.
                 
                </p>
                
              </div>
            </div>

            </article><!-- End blog entry -->

            <article class="entry row">
            <div class="col-md-3">
              <div class="entry-img">
                <a href="news-detail.html"><img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/10/31/cau-lac-bo-tieng-anh-dong-som-thumbnail-72795.jpg" alt="" class="img-fluid"></a>
              </div>
            </div>
            <div class="col-md-9">
              <h2 class="entry-title h5">
                <a href="blog-single.html">Câu lạc bộ tiếng Anh – Đông sớm</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Truyền thông</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">31/10/2018</time></a></li>
                 
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  “Christmas Holiday” là chủ đề sinh hoạt của CLB tiếng Anh vào ngày 13/ 10 vừa qua tại phòng sinh hoạt của khoa Ngoại ngữ SAIGONACT.
                 
                </p>
               
              </div>
            </div>
            </article><!-- End blog entry -->

            <article class="entry row">
              <div class="col-md-3">
                <div class="entry-img">
                  <a href="news-detail.html"><img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/06/01/cau-lac-bo-ngoai-ngu-di-mot-ngay-dang-hoc-mot-sang-khon-thumbnail-71405.jpg" alt="" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-9">
                <h2 class="entry-title h5">
                  <a href="blog-single.html">Câu lạc bộ Ngoại Ngữ - Đi một ngày đàng học một sàng khôn</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Truyền thông</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">01/06/2018</time></a></li>
                    
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    Sáng 28/ 5, Câu lạc bộ Ngoại Ngữ lại tiếp tục bùng nổ với nhiều bài học sâu sắc. Với chủ đề “Employed and Unemployed after graduation”...
                  </p>
                  
                </div>
              </div>
            </article><!-- End blog entry -->

            <article class="entry row">
              <div class="col-md-3">
                <div class="entry-img">
                  <a href="news-detail.html"><img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/05/17/6-ly-do-ban-nen-hoc-tieng-han-quoc-thumbnail-82267.jpg" alt="" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-9">
                <h2 class="entry-title h5">
                  <a href="blog-single.html">6 lý do bạn nên học tiếng Hàn Quốc</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Truyền thông</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">17/05/2018</time></a></li>
                   
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    Hiện nay tiếng Anh đang là sự lựa chọn ngoại ngữ số 1 của hầu hết các bạn trẻ. Việc tiếng Anh có ứng dụng rộng rãi trong cuộc sống
                  </p>
                  <!-- <div class="read-more">
                    <a href="blog-single.html">Read More</a>
                  </div> -->
                </div>
              </div>
            </article><!-- End blog entry -->

            <article class="entry row">
              <div class="col-md-3">
                <div class="entry-img">
                  <a href="news-detail.html"><img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/05/17/cau-lac-bo-ngoai-ngu-tham-gia-va-trai-nghiem-thumbnail-10463.jpg" alt="" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-9">
                <h2 class="entry-title h5">
                  <a href="blog-single.html">Câu lạc bộ Ngoại ngữ - Tham gia và trải nghiệm</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Truyền thông</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"> 17/05/2018</time></a></li>
                   
                  </ul>
                </div>

                <div class="entry-content">
                  <p>Sáng 14/5, với sự hỗ trợ của giảng viên phụ trách, câu lạc bộ Khoa Ngoại Ngữ đã tiến hành tổ chức sinh hoạt cho khối ngành tiếng Anh.</p>
                  <!-- <div class="read-more">
                    <a href="blog-single.html">Read More</a>
                  </div> -->
                </div>
              </div>
            </article><!-- End blog entry -->


            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li class="active"><a  href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">
            <div class="sidebar">

              <h3 class="sidebar-title">Tìm kiếm</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Tin mới</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/05/08/phong-trung-bay-khoa-ngoai-ngu-diem-den-nam-chau-thumbnail-28993.png" alt="">
                  <h4><a href="news-detail.html">Phòng trưng bày khoa Ngoại ngữ - điểm đến năm châu</a></h4>
                  <time datetime="2021-01-01">13/07/2019</time>
                </div>

                <div class="post-item clearfix">
                  <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/12/04/phong-van-hoa-anh-my-ngoi-nha-chung-cua-sinh-vien-khoa-ngoai-ngu-thumbnail-86093.jpg" alt="">
                  <h4><a href="blog-single.html">Phòng Văn hóa Anh Mỹ- Ngôi nhà chung của sinh viên Khoa Ngoại ngữ</a></h4>
                  <time datetime="2021-01-01">04/12/2018</time>
                </div>

                <div class="post-item clearfix">
                  <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/10/31/cau-lac-bo-tieng-anh-dong-som-thumbnail-72795.jpg" alt="">
                  <h4><a href="blog-single.html">Câu lạc bộ tiếng Anh – Đông sớm</a></h4>
                  <time datetime="2021-01-01">31/10/2018</time>
                </div>

                <div class="post-item clearfix">
                  <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/06/01/cau-lac-bo-ngoai-ngu-di-mot-ngay-dang-hoc-mot-sang-khon-thumbnail-71405.jpg" alt="">
                  <h4><a href="blog-single.html">Câu lạc bộ Ngoại Ngữ - Đi một ngày đàng học một sàng khôn</a></h4>
                  <time datetime="2021-01-01">01/06/2018</time>
                </div>

                <div class="post-item clearfix">
                  <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/04/14/vi-sao-sinh-vien-nen-trang-bi-kien-thuc-ky-nang-mem-thumbnail-88715.jpg" alt="">
                  <h4><a href="blog-single.html">Vì sao sinh viên nên trang bị kiến thức kỹ năng mềm</a></h4>
                  <time datetime="2021-01-01">14/04/2018</time>
                </div>

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Danh mục</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>

              </div><!-- End sidebar categories-->

              

              <h3 class="sidebar-title">Liên Quan</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>

              </div><!-- End sidebar tags-->
            
            <h3 class="sidebar-title">Quảng cáo</h3>
            <div class="" >
                <div class="banner-spot">
                    <div class="banner-img">
                        <a href="#">
                            <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/link/link-noi-that-g4-25281.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="banner-spot">
                    <div class="banner-img">
                        <a href="#">
                            <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/link/link-noi-that-g4-36680.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@stop