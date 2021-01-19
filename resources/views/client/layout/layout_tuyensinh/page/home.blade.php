@extends('client.layout.layout_tuyensinh.index')
@section('title','Tuyển Sinh')
@section('main')
<main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Tại sao chọn Đại Học Du Lịch Sài Gòn ?</h3>
              <p>
                Đại học du lịch Sài Gòn đứng đầu tuyển sinh về nghành du lịch là nơi các bạn trẻ gửi gắm tương lai rất
                nhiều, qua nhiều
                thế hệ trẻ khác nhau, Đai Học Du Lịch Sài Gòn tự hào khi là ngồi trường được nhiều phụ huynh sinh viên
                tin tưởng
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Đọc Thêm <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0" id="box">
                    <i class="bx bx-receipt" id="kho"></i>
                    <h4 ">Giảng dạy trên các dự án thực tế</h4>
                    <!-- <p>Học đi đôi với hành </p> -->
                  </div>
                </div>
                <div class=" col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                      <div class="icon-box mt-4 mt-xl-0" id="box2">
                        <i class="bx bx-cube-alt" id="kho"></i>
                        <h4>Môi trường học tập
                          thân thiện, hiện đại</h4>
                        <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> -->
                      </div>
                  </div>
                  <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box mt-4 mt-xl-0" id="box3">
                      <i class="	fab fa-codepen" id="kho"></i>
                      <h4>Chú trọng rèn luyện kỹ năng
                        sống thiết yếu của thế kỷ 21 cho sinh viên</h4>
                      <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> -->
                    </div>
                  </div>
                  <div class="col-xl-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box mt-4 mt-xl-0" id="box4">
                      <i class="fas fa-user-friends" id="kho"></i>
                      <h4>
                        Đội ngũ giảng viên hơn 100 Tiến sĩ, Thạc sĩ </h4>
                      <!-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
            data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
              data-autoplay="true"></a>
          </div>

          <div
            class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h4 data-aos="fade-up" id="ptts">Phương thức tuyển sinh</h4>
            <h3 data-aos="fade-up">PHƯƠNG THỨC TUYỂN SINH 2021</h3>
            <p data-aos="fade-up" id="ptts">
              Năm 2021, Trường Cao Đẳng Văn Hóa Nghệ Thuật Và Du Lịch Sài Gòn dự kiến tuyển sinh 4.210 chỉ tiêu cho 68
              ngành đào
              tạo đại học chính quy. Nhà trường áp dụng 5 phương thức tuyển sinh bao gồm cả xét tuyển và thi
              tuyển. Thí sinh có thể chọn một hoặc nhiều phương thức xét tuyển. </p>

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="fa fa-graduation-cap"></i></div>
              <h4 class="title"><a href="">Phương thức 1</a></h4>
              <p class="description">Xét tuyển theo điểm trung bình 3 học kỳ >= 5 ( HK1, HK2 lớp
                11 và HK1 lớp 12)</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="	fas fa-layer-group"></i></div>
              <h4 class="title"><a href="">Phương thức 2</a></h4>
              <p class="description">Xét tuyển theo tổng điểm các môn thi tốt nghiệp từ cao đến
                thấp cho đến khi đủ chỉ tiêu</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Điều kiện trúng tuyển</a></h4>
              <p class="description">Tôt nghiêp THPT (Nếu đăng kí môn năng khiếu thì xét theo 2
                phương thức, điều kiện trúng tuyển và thi môn năng khiếu)</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 id="nndt">NHÓM NGHÀNH ĐÀO TẠO</h2>
          <p id="nndt">Nhóm nghành đào tạo: Du Lịch, Ngoại Ngữ, CNTT, Kinh Tế, Kỹ Thuật (Xét Tuyển), Nghệ Thuật và Mỹ
            Thuật Công Nghiệp (Thi Tuyển Môn Năng Khiếu)
          </p>
          <p id="nndt">Hệ Cao Đẳng (Hệ 2 năm) - Xét/Thi Tuyển</p>
          <p id="nndt">Hệ Trung Cấp - Xét Tuyển</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 khoa-hover" data-aos="fade-up" data-aos-delay="70">
            <img src="{{asset('dist/layout/layout_tuyensinh/img/dulich.jpg')}}" alt="Avatar" class="image">
            
            <a href=""> 
              <div class="middle">
                <div class="text" id="textdl">Du Lịch</div>
                <p class="textp"> Quản Trị Lữ Hânh | Quản Trị Nhà Hàng Và Dịch Vụ | Hướng Dẫn Viên Du Lịch </p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 khoa-hover" data-aos="fade-up" data-aos-delay="100">
            <img src=" {{asset('dist/layout/layout_tuyensinh/img/ngoaingu.png')}}" alt="Avatar" class="image">
          
            <div class="middle">
              <div class="text" id="textdl">Ngoại Ngữ</div>
              <p class="textp"> Tiếng Nhật | Tiếng Anh | Tiếng Hàn | Tiếng Trung </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 khoa-hover" data-aos="fade-up" data-aos-delay="100">
            <img src=" {{asset('dist/layout/layout_tuyensinh/img/values-3.jpg')}}" alt="Avatar" class="image">
          
            <div class="middle">
              <div class="text" id="textdl">Công Nghệ Thông Tin</div>
              <p class="textp">Quản Trị Mạng | Tin Học Ứng Dụng | Kỹ Thuật Sữa Chữa | Lắp Ráp Máy Tính</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 khoa-hover" data-aos="fade-up" data-aos-delay="100">
            <br>
            <img src="{{asset('dist/layout/layout_tuyensinh/img/20170828165923-45184.jpg')}}" alt="Avatar" class="image">
           
            <div class="middle">
              <br>
              <div class="text" id="textdl">Kinh Tế</div>
              <p class="textp"> Tài Chinh Ngân Hàng | Marketing | Quản Trị Kinh Doanh | Quản Trị Nhân Sự | Kế Toán
                | Thư Ký </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 khoa-hover" data-aos="fade-up" data-aos-delay="100">
            <br>
            <img src="{{asset('dist/layout/layout_tuyensinh/img/values-4.jpg')}}" alt="Avatar" class="image">
            
            <di0v class="middle">
              <div class="text" id="textdl">Kỹ Thuật</div>
              <p class="textp"> Kỹ Thuật Máy Lạnh Và Điều Hòa | Điện Công Nghiệp </p>
            </di0v>
          </div>

          <div class="col-lg-4 col-md-6 khoa-hover" data-aos="fade-up" data-aos-delay="100">
            <br>
            <img src="{{asset('dist/layout/layout_tuyensinh/img/20180118145548-56466.jpg')}}" alt="Avatar" class="image">
            
            <div class="middle">
              <div class="text" id="textdl">Nghệ Thuật Và Mỹ Thuật Công Nghiệp</div>
              <p class="textp"> Thanh Nhạc | Diễn Viễn Kịch Điện Ảnh | Đạo Diễn | Quay Phim | Thiết kế đồ họa </p>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="70">
            <div class="icon-box">
              <div class="icon" ><i class="fas fa-subway" ></i></div>
              <h4 class="title"><a href="" >Du Lịch</a></h4>
              <p class="description" id="mar">Quản Trị Lữ Hânh | Quản Trị Nhà Hàng Và Dịch Vụ| Hướng Dẫn Viên Du Lịch </p>
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-landmark"></i></div>
              <h4 class="title"><a href="">Ngoại Ngữ</a></h4>
              <p class="description" id="mar">Tiếng Nhật | Tiếng Anh | Tiếng Hàn | Tiếng Trung</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-laptop"></i></div>
              <h4 class="title"><a href="">Công Nghệ Thông Tin</a></h4>
              <p class="description" id="mar">Quản Trị Mạng | Tin Học Ứng Dụng | Kỹ Thuật Sữa Chữa | Lắp Ráp Máy Tính</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-chart-pie"></i></div>
              <h4 class="title"><a href="">Kinh Tế</a></h4>
              <p class="description" id="mar">Tài Chinh Ngân Hàng | Marketing | Quản Trị Kinh Doanh | Quản Trị Nhân Sự | Kế Toán
                | Thư Ký</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="icofont-settings"></i></div>
              <h4 class="title"><a href="">Kỹ Thuật</a></h4>
              <p class="description" id="mar">Kỹ Thuật Máy Lạnh Và Điều Hòa | Điện Công Nghiệp</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-paint-brush"></i></div>
              <h4 class="title"><a href="">Nghệ Thuật Và Mỹ Thuật Công Nghiệp</a></h4>
              <p class="description" id="mar">Thanh Nhạc | Diễn Viễn Kịch Điện Ảnh | Đạo Diễn | Quay Phim | Thiết kế đồ họa |
              </p>
            </div>
          </div> -->
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card" style="background-image: url({{asset('dist/layout/layout_tuyensinh/img/values-1.jpg')}});">
              <div class="card-body">
                <h5 class="card-title"><a href="">Danh Sách Sinh Viên Trúng Tuyển</a></h5>
                <p class="card-text">Danh sách trúng tuyển năm 2020 của Trường Cao Đẳng Văn Hóa Nghệ Thuật Và Du Lịch
                  Sài Gòn</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Đọc Thêm</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="background-image: url({{asset('dist/layout/layout_tuyensinh/img/values-2.jpg')}});">
              <div class="card-body">
                <h5 class="card-title"><a href="">Kế Hoạch Tuyển Sinh Của Trường Năm 2021</a></h5>
                <p class="card-text">Danh sách các nghành đào tạo, phương thức tuyển sinh, kế hoạch năm học 2021</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Đọc Thêm</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card" style="background-image: url({{asset('dist/layout/layout_tuyensinh/img/values-3.jpg')}});">
              <div class="card-body">
                <h5 class="card-title"><a href="">Thông Tin Tuyển Sinh Cao Đẳng Hệ 2 Năm, Trung Cấp Chuyên Nghiệp Năm
                    2021</a></h5>
                <p class="card-text">Nhóm ngành đào tạo: du lịch, ngoại ngữ, công nghệ thông tin, kỹ thuật (xét
                  tuyển)...</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Đọc Thêm</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card" style="background-image: url({{asset('dist/layout/layout_tuyensinh/img/values-4.jpg')}});">
              <div class="card-body">
                <h5 class="card-title"><a href="">Chế Độ Học Bổng Khi Tham Gia Tuyển Sinh Của Nhà Trường Năm 2021</a>
                </h5>
                <p class="card-text">Học bổng giành cho sinh viên với nhiều ưu đãi hấp dẫn về học phí.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i>Đọc Thêm</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Values Section -->

    <!-- ======= Testimonials Section ======= -->

    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">
        <p class="cnsv">Cảm nhận của học viên</p>
        <div class="owl-carousel testimonials-carousel">
          <div class="testimonial-item">
            <img src="{{('dist/layout/layout_tuyensinh/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
            <h3>Huỳnh Khương Duy</h3>
            <h4>Cựu Sinh Viên</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Nhà trường đã tổ chức đợt tuyển sinh ở Cần Thơ rất tuyệt vời, sự nhiệt tình trong công tác tuyển sinh đã
              làm tôi thấy rất ngôi
              trường là một nơi thật tuyệt.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{('dist/layout/layout_tuyensinh/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
            <h3>Nguyễn Mộc Lan</h3>
            <h4>Sinh Viên Năm 4</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Nhà trường đã tổ chức đợt tuyển sinh ở Cần Thơ rất tuyệt vời, sự nhiệt tình trong công tác tuyển sinh đã
              làm tôi thấy rất ngôi
              trường là một nơi thật tuyệt.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{('dist/layout/layout_tuyensinh/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
            <h3>Lê Minh Hậu</h3>
            <h4>Sinh Viên Năm 3</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Nhà trường đã tổ chức đợt tuyển sinh ở Cần Thơ rất tuyệt vời, sự nhiệt tình trong công tác tuyển sinh đã
              làm tôi thấy rất ngôi
              trường là một nơi thật tuyệt.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{('dist/layout/layout_tuyensinh/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
            <h3>Nguyễn Khiết</h3>
            <h4>Cựu Sinh Viên </h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Nhà trường đã tổ chức đợt tuyển sinh ở Cần Thơ rất tuyệt vời, sự nhiệt tình trong công tác tuyển sinh đã
              làm tôi thấy rất ngôi
              trường là một nơi thật tuyệt.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="{{('dist/layout/layout_tuyensinh/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
            <h3>Nguyễn Thảo Nhi</h3>
            <h4>Sinh Viên Năm 4</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Nhà trường đã tổ chức đợt tuyển sinh ở Cần Thơ rất tuyệt vời, sự nhiệt tình trong công tác tuyển sinh đã
              làm tôi thấy rất ngôi
              trường là một nơi thật tuyệt.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-up">Portfolio</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>  -->
    <!-- End Portfolio Section-->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up" id="ptts">Hỗ Trợ Tuyển Sinh</h2>
          <p data-aos="fade-up" id="suppo">Chúng tôi luôn sẵn sàng giúp đỡ các sinh viên có mong muốn đăng kí
            tuyển sinh, đội ngũ luôn có mặt
            giải quyết các thắc mắc cho sinh viên vào các khung giờ hành chính trực tuyến 24/7 hoặc thông qua thông tin
            cá nhân của từng thành viên trong nhóm.
          </p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('dist/layout/layout_tuyensinh/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('dist/layout/layout_tuyensinh/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('dist/layout/layout_tuyensinh/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('dist/layout/layout_tuyensinh/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Chế Độ Học Bổng</h2>
          <p data-aos="fade-up">Nhiều ưu đãi học bổng giành cho các tân sinh viên khi đăng ký tuyển sinh</p>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-6" data-aos="fade-up">
            <div class="box featured">
              <h3>Đối Tượng</h3>
              <h4>100<sup>%</sup><span id="hb">học phí khóa học</span></h4>
              <ul>
                <li>Tốt nghiệp THPT trừ 24 điểm trở lên (Tổ hợp 3 môn xét tuyển).</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Đăng Kí</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="box featured">
              <h3>Đối Tượng</h3>
              <h4>50<sup>%</sup><span id="hb">học phí khóa học</span></h4>
              <ul>
                <li>Tốt nghiệp THPT từ 22 đến dưới 24 diểm (Tổ hợp 3 môn xét tuyển).</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Đăng Kí</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <br>
            <div class="box featured">
              <h3>Đối Tượng</h3>
              <h4>02<sup></sup> <span id="hb">học kỳ học bổng tương đương học
                  phí</span></h4>
              <ul>
                <li>TOEIC đạt 500 điểm hoặc IELTS dạt 5.0 trở lên.</li>
                <li>Đạt giải trong các cuộc thi Văn, Thể, Mỹ cấp Tỉnh trở lên.</li>
                <li>Có hoàn cảnh khó khăn và điểm trung bình từ 8.5 trở lên.</li>

              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Đăng Kí</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <br>
            <div class="box featured">
              <!-- <span class="advanced">Advanced</span> -->
              <h3>Đối Tượng</h3>
              <h4>01<sup></sup> <span id="hb">học kỳ học bổng tương đương học
                  phí</span></h4>
              <ul>
                <li>TOEIC đạt 350 điểm hoặc IELTS đạt 3.5 trở lên hoặc nhập học trước ngày 01/08/2021</li>
                <li>Dành cho tân sinh viên lọt vào Top 5 cuộc thi người mẫu SVVN 2021, Người mẫu SVVN 2021 qua ảnh, Top
                  3 cuộc thi
                  Người mẫu ảnh do Trường tổ chức.
                </li>

              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Đăng Kí</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <br>
            <div class="box featured">
              <!-- <span class="advanced">Advanced</span> -->
              <h3>Đối Tượng</h3>
              <h4>1/2<sup></sup> <span id="hb">học kỳ học bổng tương đương học
                  phí</span></h4>
              <ul>
                <li>Tân sinh viên có anh, chị, em (ruột) đang theo học tại Saigonact hoặc có hỗ khẩu thường trú trên địa
                  bàn lân cận trường hoặc
                  nhập học trước ngày 05/09/2021.
                </li>
                <li></li>
                <li></li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Đăng Kí</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up" id="fadetit" >Giải Đáp Thắc Mắc</h2>
          <p data-aos="fade-up" id="fade">Những thắc mắc của sinh viên, phụ huynh khi tham gia đăng kí xét tuyển, cũng
            như những
            câu hỏi liên quan đến kì
            tuyển sinh của nhà trường </p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">
                Nhà trường tuyển sinh gồm bao nhiêu đợt, chỉ tiêu mỗi đợt như thế
                nào ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Nhà trường sẽ tổ chứ tuyển sinh gồm 3 đợt, mỗi đợt sẽ có những chỉ tiêu riêng và sẽ có thông báo sau
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help" id="bx"></i> <a data-toggle="collapse" href="#faq-list-2"
                class="collapsed">Hồ sơ tuyển sinh cần những giấy tờ nào quan trọng nhất ? <i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                  donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
                  ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help" id="bx"></i> <a data-toggle="collapse" href="#faq-list-3"
                class="collapsed">Học phí, học bổng giành cho các đối tượng đặc biệt ?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum
                  integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt.
                  Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi
                  quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help" id="bx"></i> <a data-toggle="collapse" href="#faq-list-4"
                class="collapsed">Hỗ trợ từ phía nhà trường đối với các trường hợp đặc biệt (mồ côi,
                con thương binh) ? <i class="bx bx-chevron-down icon-show"></i><i
                  class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc
                  vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus
                  gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help" id="bx"></i> <a data-toggle="collapse" href="#faq-list-5"
                class="collapsed">Làm cách nào để biết thông báo trúng tuyển từ phía nhà trường ?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Nhà trường sẽ luôn cập nhập thông tin khi có kết quả cho 
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" id="sectitle">
          <h2 data-aos="fade-up">Đăng Ký Nhận Tư Vấn</h2>
          <p data-aos="fade-up">Hồ sơ đăng ký nộp xét tuyển bao gồm :</p>

          <p data-aos="fade-up"></a>Xét phương thức 1 : Bảng điểm học bạ 3 học kỳ -- Xét phương thức 2 : Bảng điểm thi
            tốt nghiệp THPT</p>
          <p data-aos="fade-up">Phiếu đăng ký xét tuyển <a href="#">(Mẫu của trường)</a>,Bảng sao Học Bạ có công chứng,
            03 thẻ ảnh 3x4, Giấy chứng nhận đối tượng ưu tiên (nếu có)</p>

        </div>


        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Họ Tên"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email"
                    data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="number" name="name" class="form-control" id="name" placeholder="Số Điện Thoại"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="text" id="text" placeholder="Địa Chỉ" data-rule="text"
                    data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 form-group">
                  <select required name="status" class="form-control">
                    <option value="#">Chọn nghành đăng kí học</option>
                    <option value="#">Du Lịch</option>
                    <option value="#">Ngoại Ngữ</option>
                    <option value="#">Công Nghệ Thông Tin</option>
                    <option value="#">Kinh Tế</option>
                    <option value="#">Kỹ Thuật</option>
                    <option value="#">Nghệ Thuật Và Mỹ Thuật</option>
                  </select>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="mb-3">
                <div class="loading">Đang tải....</div>
                <div class="error-message">Lỗi khi đăng ký</div>
                <div class="sent-message">Bạn đã đăng ký thành công. Cảm ơn!</div>
              </div>
              <div class="text-center"><button type="submit">Đăng Ký</button></div>
            </form>
          </div>

        </div>


        <div class="row justify-content-center">

          <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map" id="ress"></i>
              <h3>Địa Chỉ :</h3>
              <p>70 Đường Tân Thới Nhất 8 - Khu phố 5 - P.Tân Thới Nhất - Q.12-TP.HCM</p>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope" id="ress"></i>
              <h3>Email :</h3>
              <p>info@daihocdulich.edu.vn</p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call" id="ress"></i>
              <h3>Điện Thoại :</h3>
              <p>(028)38.831.793 | (028)38.831.796</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
    <!-- //comment fb -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="fb-comments" data-href="http://127.0.0.1:5500/index.html" data-width="1100" data-numposts="10">
          </div>
        </div>
      </div>
    </div>
  </main><!-- End #main -->
  @stop