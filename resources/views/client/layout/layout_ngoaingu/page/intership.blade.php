@extends('client.layout.layout_ngoaingu.index')
@section('title','SV Thực Tập Khoa Ngoại Ngữ')
@section('main')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('khoangoaingu')}}">Trang chủ</a></li>
          <li><a href="javascript:">Sinh viên</a></li>
          <li><a href="javascript:">Thực Tập</a></li>
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

          @include('client.layout.layout_ngoaingu.components.navabar')
          <!-- End blog sidebar -->
        </div>
      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@stop