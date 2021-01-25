@extends('client.layout.layout_ngoaingu.index')
@section('title', ' Tin Tức-Sự Kiện Khoa Ngoại Ngữ')
@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('khoangoaingu') }}">Trang chủ</a></li>
                    <li><a href="javascript">Tin tức</a></li>
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
                                    <a href="{{ route('chitietttkhoangoaingu') }}"><img
                                            src="{{ asset('http://khoangoaingu.daihocdulich.edu.vn/upload/news/2019/07/13/hoc-ngoai-ngu-o-saigonact-noi-nhu-nguoi-ban-dia-thumbnail-26188.jpg') }}"
                                            alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h2 class="entry-title h5">
                                    <a href="{{ route('chitietttkhoangoaingu') }}">Học ngoại ngữ ở SaigonACT nói như người
                                        bản địa</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                                href="{{ route('chitietttkhoangoaingu') }}">Truyền thông</a></li>
                                        <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                                href="{{ route('chitietttkhoangoaingu') }}"><time
                                                    datetime="2020-01-01">13/07/2019</time></a></li>

                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Tại sao tôi có thể nói như thế. Bởi vì học sinh, sinh viên đều được học với giảng
                                        viên là người bản địa.

                                    </p>

                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <article class="entry row">
                            <div class="col-md-3">
                                <div class="entry-img">
                                    <a href="{{ route('chitietttkhoangoaingu') }}"><img
                                            src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/10/31/cau-lac-bo-tieng-anh-dong-som-thumbnail-72795.jpg"
                                            alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h2 class="entry-title h5">
                                    <a href="{{ route('chitietttkhoangoaingu') }}">Câu lạc bộ tiếng Anh – Đông sớm</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                                href="{{ route('chitietttkhoangoaingu') }}">Truyền thông</a></li>
                                        <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                                href="{{ route('chitietttkhoangoaingu') }}"><time
                                                    datetime="2020-01-01">31/10/2018</time></a></li>

                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        “Christmas Holiday” là chủ đề sinh hoạt của CLB tiếng Anh vào ngày 13/ 10 vừa qua
                                        tại phòng sinh hoạt của khoa Ngoại ngữ SAIGONACT.

                                    </p>

                                </div>
                            </div>
                        </article><!-- End blog entry -->

                        <article class="entry row">
                            <div class="col-md-3">
                                <div class="entry-img">
                                    <a href="{{ route('chitietttkhoangoaingu') }}"><img
                                            src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/06/01/cau-lac-bo-ngoai-ngu-di-mot-ngay-dang-hoc-mot-sang-khon-thumbnail-71405.jpg"
                                            alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h2 class="entry-title h5">
                                    <a href="{{ route('chitietttkhoangoaingu') }}">Câu lạc bộ Ngoại Ngữ - Đi một ngày đàng
                                        học một sàng khôn</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                                href="{{ route('chitietttkhoangoaingu') }}">Truyền thông</a></li>
                                        <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                                href="{{ route('chitietttkhoangoaingu') }}"><time
                                                    datetime="2020-01-01">01/06/2018</time></a></li>

                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Sáng 28/ 5, Câu lạc bộ Ngoại Ngữ lại tiếp tục bùng nổ với nhiều bài học sâu sắc. Với
                                        chủ đề “Employed and Unemployed after graduation”...
                                    </p>

                                </div>
                            </div>
                        </article><!-- End blog entry -->

                        <article class="entry row">
                            <div class="col-md-3">
                                <div class="entry-img">
                                    <a href="{{ route('chitietttkhoangoaingu') }}"><img
                                            src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/05/17/6-ly-do-ban-nen-hoc-tieng-han-quoc-thumbnail-82267.jpg"
                                            alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h2 class="entry-title h5">
                                    <a href="{{ route('chitietttkhoangoaingu') }}">6 lý do bạn nên học tiếng Hàn Quốc</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                                href="{{ route('chitietttkhoangoaingu') }}">Truyền thông</a></li>
                                        <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                                href="{{ route('chitietttkhoangoaingu') }}"><time
                                                    datetime="2020-01-01">17/05/2018</time></a></li>

                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Hiện nay tiếng Anh đang là sự lựa chọn ngoại ngữ số 1 của hầu hết các bạn trẻ. Việc
                                        tiếng Anh có ứng dụng rộng rãi trong cuộc sống
                                    </p>
                                    <!-- <div class="read-more">
                        <a href="{{ route('chitietttkhoangoaingu') }}">Read More</a>
                      </div> -->
                                </div>
                            </div>
                        </article><!-- End blog entry -->

                        <article class="entry row">
                            <div class="col-md-3">
                                <div class="entry-img">
                                    <a href="{{ route('chitietttkhoangoaingu') }}"><img
                                            src="http://khoangoaingu.daihocdulich.edu.vn/upload/news/2018/05/17/cau-lac-bo-ngoai-ngu-tham-gia-va-trai-nghiem-thumbnail-10463.jpg"
                                            alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h2 class="entry-title h5">
                                    <a href="{{ route('chitietttkhoangoaingu') }}">Câu lạc bộ Ngoại ngữ - Tham gia và trải
                                        nghiệm</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                                href="{{ route('chitietttkhoangoaingu') }}">Truyền thông</a></li>
                                        <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                                href="{{ route('chitietttkhoangoaingu') }}"><time datetime="2020-01-01">
                                                    17/05/2018</time></a></li>

                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>Sáng 14/5, với sự hỗ trợ của giảng viên phụ trách, câu lạc bộ Khoa Ngoại Ngữ đã tiến
                                        hành tổ chức sinh hoạt cho khối ngành tiếng Anh.</p>
                                    <!-- <div class="read-more">
                        <a href="{{ route('chitietttkhoangoaingu') }}">Read More</a>
                      </div> -->
                                </div>
                            </div>
                        </article><!-- End blog entry -->


                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
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
