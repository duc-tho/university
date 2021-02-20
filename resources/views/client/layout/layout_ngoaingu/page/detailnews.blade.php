@extends('client.layout.layout_ngoaingu.index')
@section('title', ' Chi Tiết Tin Tức Khoa Ngoại Ngữ')
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

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="http://khoangoaingu.daihocdulich.edu.vn/admin3917/template/kindeditor/attached/image/20190713/20190713021810_54850.png"
                                    alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html">Học ngoại ngữ ở SaigonACT nói như người bản địa</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="blog-single.html">Truyền thông</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">Ngày đăng:
                                                13/07/2019</time></a></li>
                                    <!-- <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li> -->
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Tại sao tôi có thể nói như thế. Bởi vì học sinh, sinh viên đều được học với giảng viên
                                    là người bản địa.
                                </p>

                                <p>
                                    Ngày 1/7/2019 vừa qua trường Saigonact đã ký kết hợp với 2 chuyên gia nước ngoài về làm
                                    việc. 1 là PGS.TS Choi Dok Jin trưởng khoa ngành Đông Phương Học. 2 là Ths. Louie De
                                    Prado trưởng khoa Quốc Tế.
                                </p>

                                <blockquote>
                                    <i class="icofont-quote-left quote-left"></i>
                                    <p>
                                        2 người sẽ tham gia giảng dạy ngoại ngữ cho 2 trường Saigonact và thpt Bạch Đằng.

                                        Đây là một bước tiến mới của Trường trong việc nâng cao chất lượng giáo duc đào tạo.
                                        bên cạnh đó sinh viên sẽ được nâng cao khả năng ngoại ngữ thông qua các buổi học với
                                        người bản địa là 2 chuyên gia nước ngoài, các em sẽ được phát âm ngoại ngữ chuẩn, tự
                                        tin giao tiếp với người nước ngoài.
                                    </p>
                                    <i class="las la-quote-right quote-right"></i>
                                    <i class="icofont-quote-right quote-right"></i>
                                </blockquote>
                                <p>
                                    Đăc biệt là học sinh THPT Bạch Đằng, khi các em mới học đã được tiếp xúc ngay với ngoại
                                    ngữ từ đó nền tảng ngoại ngữ các em sẽ vững hơn và các em khoogn còn phải tốn tiền ra
                                    trung tâm học nữa vì trong trường cũng đã có giáo viên bản địa rồi.

                                    Còn sinh viên Saigonact sẽ có nhiều cơ hội du học miễn phí và có khả năng tìm việc đúng
                                    mong muốn sẽ cao hơn.

                                    Đến với hệ thống trường Saigonact các bạn yên tâm học ngoại ngữ và tự tin nói như người
                                    bản địa
                                </p>
                                <img src="http://khoangoaingu.daihocdulich.edu.vn/admin3917/template/kindeditor/attached/image/20190713/20190713021834_73383.png" class="img-fluid" alt="">

                                <div class="entry-footer clearfix">
                                    <div class="float-left">
                                        <i class="icofont-folder"></i>
                                        <ul class="cats">
                                            <li><a href="javascript:">Tin tức</a></li>
                                        </ul>
                                    </div>

                                    <div class="float-right share">
                                        <a href="javascript:" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                                        <a href="javascript:" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                                        <a href="javascript:" title="Share on Instagram"><i
                                                class="icofont-instagram"></i></a>
                                    </div>

                                </div>

                        </article><!-- End blog entry -->
                        <!-- End blog author bio -->
                        <div class="fb-comments" data-href="http://127.0.0.1:5500/news-detail.html" data-width="500"
                            data-numposts="10"></div>

                        <!-- End blog comments -->

                    </div><!-- End blog entries list -->
                    <div class="col-lg-4 entries">
                        <div class="row">
                            define_syslog_variables
                            <div>func_get_arg("")</div>
                        </div>
                    </div>

                    @include('client.layout.layout_ngoaingu.components.navabar')
                </div>
            </div>
        </section><!-- End Blog Section -->
    </main><!-- End #main -->
@stop
