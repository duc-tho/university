@extends('client.layout.layout_ngoaingu.index')
@section('title','SV Thực Tập Khoa Ngoại Ngữ')
@section('main')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('khoangoaingu')}}">Trang chủ</a></li>
          <li>Sinh viên</li>
          <li>Thực Tập</li>
        </ol>
        <h2>THỰC TẬP</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">
            
            <article class="entry">
              
              <div class="b5">
               <a href="{{route('chitietttkhoangoaingu')}}"> 
                 <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/07/03/hoc-tieng-han-o-act-se-co-rat-nhieu-co-hoi-di-du-lich-han-quoc-mien-phi-thumbnail-45916.png" alt="" class="img-fluid">
               </a>
              </div>

              <h2 class="entry-title b-1">
                <a href="{{route('chitietttkhoangoaingu')}}">HỌC TIẾNG HÀN Ở ACT SẼ CÓ RẤT NHIỀU CƠ HỘI ĐI DU LỊCH HÀN QUỐC MIỄN PHÍ</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Truyền thông</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">21/11/2019</time></a></li>
                  
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Ngày 28 tháng 6 vừa qua sinh viên ngành tiếng Hàn trường Saigonact tham gia VÒNG LOẠI CUỘC THI ĐỐ VUI HÀN QUỐC “QUIZ ON KOREA 2019” ...
                </p>
                <!-- <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div> -->
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="b5">
                <a href="#"><img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/05/27/o-dau-co-co-hoi-di-du-hoc-han-quoc-mien-phi-thumbnail-87128.png" alt="" class="img-fluid">
                </a>
              </div>

              <h2 class="entry-title b-1">
                <a href="blog-single.html">Ở đâu có cơ hội đi du học Hàn Quốc miễn phí</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Truyền thông</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">21/11/2019</time></a></li>
                  
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Hôm nay Khoa Ngoại Ngữ SaigonACT nhận được giấy chứng nhận học bổng Kova của tổ chức Koica- Cơ Quan Hợp Tác Quốc Tế Hàn Quốc có trụ sở tại Việt Nam...
                </p>
                <!-- <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div> -->
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="b5">
                <a href="#">
                <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/02/15/chu-truong-cua-ban-quan-ly-de-an-thanh-lap-truong-dai-hoc-du-lich-sai-gon-saigontu-trong-hoat-dong-cau-lac-bo-ngoai-ngu-thumbnail-25126.jpg" alt="" class="img-fluid">
              </a>
              </div>

              <h2 class="entry-title b-1">
                <a href="blog-single.html">Chủ trương của Ban Quản lý đề án thành lập trường Đại học Du lịch Sài Gòn (Saigontu) trong hoạt động Câu lạc bộ Ngoại ngữ</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Truyền thông</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">21/11/2019</time></a></li>
                  
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Trong xu thế hội nhập toàn cầu, ngoại ngữ luôn là một yếu tố quan trọng để mỗi cá nhân có thể khẳng định mình trong thời đại mới...
                </p>
                <!-- <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div> -->
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="b5">
                <a href="#"> 
                  <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2017/09/28/ke-hoach-tim-kiem-dia-chi-thuc-tap-va-viec-lam-cho-sinh-vien-chuan-bi-va-sap-tot-nghiep-thumbnail-26076.jpg" alt="" class="img-fluid">
                </a>
              </div>

              <h2 class="entry-title b-1">
                <a href="blog-single.html">KẾ HOẠCH TÌM KIẾM ĐỊA CHỈ THỰC TẬP VÀ VIỆC LÀM CHO SINH VIÊN CHUẨN BỊ, VÀ SẮP TỐT NGHIỆP</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Truyền thông</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">21/11/2019</time></a></li>
                 
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Nhằm tạo điều kiện cho sinh viên tìm kiếm địa chỉ thực tập và cơ hội việc làm ổn định, giúp sinh viên có định hướng trong nghề nghiệp, tiếp cận với môi truờng làm việc cũng như...
                <!-- <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div> -->
              </div>

            </article><!-- End blog entry -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li class="active"><a href="#">1</a></li>
                <li class="#"><a href="#">2</a></li>
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

              <h3 class="sidebar-title">Tin sinh viên</h3>
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

              

              <!-- <h3 class="sidebar-title">Liên Quan</h3>
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

              </div> -->
              <!-- End sidebar tags-->
            
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