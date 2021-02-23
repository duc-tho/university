@extends('client.layout.layout_tuyensinh.index')
@section('title', 'Thông Báo Tuyển Sinh')
@section('main')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('tuyensinh') }}">Trang Chủ</a></li>
                    <li>Thông Báo - Tuyển Sinh</li>
                </ol>
                <h2>Thông Báo - Tuyển Sinh</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <article class="entry">
                            {{-- <div class="entry-img">
                <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
              </div> --}}

                            <h2 class="entry-title">
                                <a href="{{ route('chitietthongbaotuyensinh') }}">Thông báo về kết quả xét tuyển học bạ THPT
                                    2020 - Đợt 1</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="blog-single.html">Minh Long</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">01/04/2020</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Thông báo về kết quả xét tuyển học bạ THPT 2020 - đợt 1
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('chitietthongbaotuyensinh') }}">Đọc Thêm</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    </div>

                    <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <article class="entry">

                            {{-- <div class="entry-img">
                <img src="assets/img/blog-2.jpg" alt="" class="img-fluid">
              </div> --}}

                            <h2 class="entry-title">
                                <a href="{{ route('chitietthongbaotuyensinh') }}"> Thông báo tuyển sinh hệ Cao Đẳng 2020</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="blog-single.html">Minh Long</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">01/04/2020</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Năm 2020, Hội đồng tuyển sinh Trường Cao Đẳng Văn hóa Nghệ Thuật và Du Lịch Sài Gòn
                                    (SAIGONACT) dành 3.000 chỉ tiêu tuyển sinh trên phạm vi toàn quốc các nghành học hệ Cao
                                    Đẳng.
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('chitietthongbaotuyensinh') }}">Đọc Thêm</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    </div>

                    <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <article class="entry">
                            {{-- <div class="entry-img">
                  <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
                </div> --}}

                            <h2 class="entry-title">
                                <a href="{{ route('chitietthongbaotuyensinh') }}">Thông báo về kết quả xét tuyển học bạ THPT
                                    2020 - Đợt 2</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="blog-single.html">Minh Long</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">09/06/2020</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Thông báo về kết quả xét tuyển học bạ THPT 2020 - đợt 2
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Đọc Thêm</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    </div>

                    <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <article class="entry">
                            {{-- <div class="entry-img">
                  <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
                </div> --}}

                            <h2 class="entry-title">
                                <a href="{{ route('chitietthongbaotuyensinh') }}">Thông báo về kết quả xét tuyển học bạ THPT
                                    2020 - Đợt 3</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="blog-single.html">Minh Long</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">09/06/2020</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Thông báo về kết quả xét tuyển học bạ THPT 2020 - đợt 3
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('chitietthongbaotuyensinh') }}">Đọc Thêm</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    </div>

                    <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <article class="entry">

                            {{-- <div class="entry-img">
                  <img src="assets/img/blog-2.jpg" alt="" class="img-fluid">
                </div> --}}

                            <h2 class="entry-title">
                                <a href="{{ route('chitietthongbaotuyensinh') }}"> Thông báo tuyển sinh hệ Cao Đẳng 2021</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="blog-single.html">Minh Long</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">01/04/2020</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Năm 2020, Hội đồng tuyển sinh Trường Cao Đẳng Văn hóa Nghệ Thuật và Du Lịch Sài Gòn
                                    (SAIGONACT) dành 3.000 chỉ tiêu tuyển sinh trên phạm vi toàn quốc các nghành học hệ Cao
                                    Đẳng.
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('chitietthongbaotuyensinh') }}">Đọc Thêm</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    </div>

                    <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <article class="entry">

                            {{-- <div class="entry-img">
                  <img src="assets/img/blog-2.jpg" alt="" class="img-fluid">
                </div> --}}

                            <h2 class="entry-title">
                                <a href="{{ route('chitietthongbaotuyensinh') }}"> Thông báo tuyển sinh hệ Cao Đẳng
                                    2021</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="blog-single.html">Minh Long</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">01/04/2020</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Năm 2020, Hội đồng tuyển sinh Trường Cao Đẳng Văn hóa Nghệ Thuật và Du Lịch Sài Gòn
                                    (SAIGONACT) dành 3.000 chỉ tiêu tuyển sinh trên phạm vi toàn quốc các nghành học hệ Cao
                                    Đẳng.
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('chitietthongbaotuyensinh') }}">Đọc Thêm</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    </div>

                </div>

                <div class="blog-pagination" data-aos="fade-up">
                    <ul class="justify-content-center">
                        <li ><i class="icofont-rounded-left"></i></li>
                        <li class="active"><a href="#">1</a></li>
                        <li ><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                    </ul>
                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
@stop
