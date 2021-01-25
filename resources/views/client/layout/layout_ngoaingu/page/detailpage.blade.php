@extends('client.layout.layout_ngoaingu.index')
@section('title', ' Chi Tiết Sinh Viên Khoa Ngoại Ngữ')
@section('main')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('khoangoaingu') }}">Trang chủ</a></li>
                    <li><a href="{{ route('tintucngoaingu') }}">Tin tức</a></li>
                    <li><a href="javascript:">Chi tiết tin tức</a></li>
                </ol>
                <h2>Học ngoại ngữ ở SaigonACT nói như người bản địa</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper ">
                            <div id="blog-detail" class=" blog-detai">
                                <div class="blog-title">
                                    <p>HỌC TIẾNG HÀN Ở ACT SẼ CÓ RẤT NHIỀU CƠ HỘI ĐI DU LỊCH HÀN QUỐC MIỄN PHÍ</p>
                                    <h4><strong>Sinh viên</strong></h4>
                                </div>
                                <div class="blog-time">
                                    <p>Ngày đăng: 30/12/2020</p>
                                </div>
                            </div>
                            <br>

                            <div class="pp">


                                <p> &emsp; Ngày 28 tháng 6 vừa qua sinh viên ngành tiếng Hàn trường Saigonact tham gia VÒNG
                                    LOẠI CUỘC THI ĐỐ VUI HÀN QUỐC “QUIZ ON KOREA 2019”
                                    Cuộc thi Đối vui Hàn Quốc "Quiz on Korea" 2019 do Tổng Lãnh sự quán Hàn Quốc tại TP.HCM,
                                    Đài truyền hình KBS, Bộ Ngoại giao Hàn Quốc và Khoa Hàn Quốc học, trường ĐH KHXH&NV tổ
                                    chức
                                </p>
                                <div class="blog-header">
                                    <b><img src="http://khoangoaingu.daihocdulich.edu.vn/admin3917/template/kindeditor/attached/image/20190703/20190703010647_71040.jpg"
                                            class="img-fluid" alt=""></b>
                                </div><!-- end pp -->
                                <p>
                                    Được khởi động vào năm 2012, Quiz on Korea là một cuộc thi mang tầm quốc tế được tổ chức
                                    bởi Bộ Ngoại giao Hàn Quốc và Đài truyền hình KBS nhằm nâng cao mức độ phủ sóng của văn
                                    hóa Hàn Quốc. Trải qua 7 năm tổ chức, cuộc thi đã thu hút đông đảo thí sinh đến từ hơn
                                    20 quốc gia trên khắp thế giới.
                                </p>
                                <p>2 sinh viên ngành tiếng Hàn góp mặt trong cuộc thi và đã đi đến được vòng thứ 8.</p>
                                <div class="blog-header">
                                    <b><img src="http://khoangoaingu.daihocdulich.edu.vn/admin3917/template/kindeditor/attached/image/20190703/20190703010708_56486.jpg"
                                            class="img-fluid" alt=""></b>
                                </div><!-- end pp -->
                                <p>Đây là sân chơi bổ ích giúp các em có nhiều kiến thức về đất nước Hàn Quốc hơn và được
                                    trau dồi nhiều vốn từ vựng
                                    Học tiếng Hàn tại Saigonact vừa được chơi vừa được học vừa giỏi. Bạn đã sẵn sàng là
                                    thành viên trong ngôi nhà chung tiếng Hàn của ACT chưa?</p>
                                <h4>TT - Khoa Ngoại ngữ</h4>
                            </div><!-- end pp -->
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    @include('client.layout.layout_ngoaingu.components.navabar')
                </div>
            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
@stop
