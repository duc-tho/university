@extends('client.layout.layout_nghethuat.index')

@section('title', 'Khoa Nghệ Thuật - Tin tức')

@section('head')
@include('client.layout.layout_nghethuat.components.news.head')
@endsection

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('script')
@include('client.layout.layout_nghethuat.components.news.script')
@endsection

@section('main')
@include('client.layout.layout_nghethuat.components.news.header')
<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <!-- <img src="{{ asset('dist/layout/layout_nghethuat/upload/banner_02.jpg') }}" alt="" class="img-fluid"> -->
                                    <h1>TIN TỨC - SỰ KIỆN</h1>
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <hr class="invis">
                    <div class="blog-grid-system">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="detail_news.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/khoa-nghe-thuat-om-tron-bo-giai-thuong-cua-act-gottalent-2019-thumbnail-33023.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4 class="tittle_news"><a href="detail_news.html" title="">Khoa Nghệ thuật ôm trọn bộ giải thưởng của ACT GOTTALENT 2019</a></h4>
                                        <p class="detaill_news">Chúc mừng các hotboy, hotgirl của Khoa Nghệ thuật đã ôm trọn bộ giải của cuộc thi ACT GOTTALENT 2019 được diễn ra vào ngày 06/5/2019 do Phòng CTHS SV tổ chức.</p>
                                        <!-- <small><a href="blog-category-01.html" title="">Travel</a></small> -->
                                        <small><a href="single.html" title="">08/05/2019</a></small>
                                        <!-- <small><a href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="detail_news.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/nam-luat-su-bo-nghe-theo-nghiep-thiet-ke-thumbnail-47294.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4 class="tittle_news"><a href="detail_news.html" title="">Nam luật sư bỏ nghề, theo “nghiệp” thiết kế</a></h4>
                                        <p class="detaill_news">Nhà thiết kế (NTK) Việt Hùng đã không ngần ngại gác lại công việc luật sư của mình để theo đuổi niềm đam mê thời trang.</p>
                                        <!-- <small><a href="blog-category-01.html" title="">Travel</a></small> -->
                                        <small><a href="single.html" title="">28/08/2018</a></small>
                                        <!-- <small><a href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="detail_news.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/sinh-vien-chuyen-nganh-dien-vien-kich-noi-va-dien-anh-day-an-tuong-va-chuyen-nghiep-trong-bai-thi-cuoi-ky-mon-mua-va-hinh-the-thumbnail-99373.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4 class="tittle_news"><a href="detail_news.html" title="">Sinh viên ngành Diễn viên kịch nói và điện ảnh đầy ấn tượng và chuyên nghiệp trong bài thi cuối kỳ môn Múa và Hình thể</a></h4>
                                        <p class="detaill_news">Sau một kỳ học và tập luyện, 02 lớp K112DV và K122DV ngành Diễn viên kịch nói và điện ảnh đã có một buổi thi cuối kỳ môn Múa và Hình thể. Đây là môn học dưới sự chỉ dẫn đầy tâm huyết của đạo diễn Trần Minh Cường, giảng viên khoa Nghệ thuật, các bạn đã trình bày ấn tượng với 08 tiết mục bộ Đêm hoa đăng; Lý đất giồng; Long phụng kiếm; Vượt bão; Hồn Việt; Hội xuân; Múa gậy và Làng phù đổng.</p>
                                        <!-- <small><a href="blog-category-01.html" title="">Travel</a></small> -->
                                        <small><a href="single.html" title="">01/06/2018</a></small>
                                        <!-- <small><a href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="detail_news.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/tt-sk2.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4 class="tittle_news"><a href="detail_news.html" title="">Ngành Thiết kế đồ họa và sự lựa chọn hoàn hảo</a></h4>
                                        <p class="detaill_news">Bạn yêu thích phim hoạt hình hay các cảnh phim hoành tráng trên màn ảnh, bạn đã từng mơ ước tạo nên những không gian sân khấu rực rỡ sắc màu cho những vở diễn, bạn yêu thích chuyên môn thiết kế Đồ họa, thiết kế quảng cáo trên Internet, truyền hình, phim ảnh, chế bản in ấn, đủ khả năng tổ chức, sắp xếp và điều hành các công việc tại các công ty thiết kế, doanh nghiệp sản xuất kinh doanh thuộc các thành phần kinh tế và những cơ quan
                                            đơn vị thuộc ngành văn hóa thông tin, truyền thông, báo chí.</p>
                                        <!-- <small><a href="blog-category-01.html" title="">Travel</a></small> -->
                                        <small><a href="single.html" title="">02/04/2018</a></small>
                                        <!-- <small><a href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="detail_news.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/tt-sk1.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4 class="tittle_news"><a href="detail_news.html" title="">Học Đạo diễn sân khấu tại Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn</a></h4>
                                        <p class="detaill_news">Bạn muốn dàn dựng các tác phẩm sân khấu, chương trình biểu diễn tại các nhà hát, đoàn nghệ thuật, trên truyền hình cả nước, hay tổ chức các dự án thuộc lĩnh vực sân khấu? Bạn hãy đăng ký học chuyên ngành Đạo diễn sân khấu tại Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn trong năm 2018 nhé.</p>
                                        <!-- <small><a href="blog-category-01.html" title="">Travel</a></small> -->
                                        <small><a href="single.html" title="">30/03/2018</a></small>
                                        <!-- <small><a href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="detail_news.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/suc-hut-tu-gian-hang-tuyen-sinh-truong-cao-dang-van-hoa-nghe-thuat-va-du-lich-sai-gon-tai-can-tho-thumbnail-64536.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4 class="tittle_news"><a href="detail_news.html" title="">Sức hút từ gian hàng tuyển sinh trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn tại Cần Thơ</a></h4>
                                        <p class="detaill_news">Ngày 18/3/2018, Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn cùng nhiều trường đại học, cao đẳng và các đơn vị hoạt động trong lĩnh vực giáo dục đã tham gia Ngày hội tư vấn tuyển sinh – hướng nghiệp 2018 do báo Tuổi Trẻ, Bộ GD-ĐT, Tổng cục Giáo dục nghề nghiệp (Bộ LĐ-TB&XH), Trường ĐH Cần Thơ phối hợp tổ chức với sự đồng hành của Tập đoàn Vingroup.</p>
                                        <!-- <small><a href="blog-category-01.html" title="">Travel</a></small> -->
                                        <small><a href="single.html" title="">21/03/2018</a></small>
                                        <!-- <small><a href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="detail_news.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/tt-sk3.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4 class="tittle_news"><a href="detail_news.html" title="">Nghệ sỹ không còn là “Xướng ca vô loài”</a></h4>
                                        <p class="detaill_news">Không có sự ngọt ngào, hạnh phúc và vinh quang nào mà dễ dàng đạt được khi không có sự cố gắng nổ lực rèn luyện và học tập. Những ca sỹ, nghệ sỹ nổi tiếng cũng vậy, để có thể đứng trên sân khấu và có hàng triệu khán giả biết đến và ngưỡng mộ thì họ đã phải “đổ mồ hôi” dày công luyện tập chuyên môn, rèn luyện kỹ năng nghề nghiệp. Nghề ca sỹ, diễn viên hiện nay rất được xã hội trân quý, không còn được xem là “nghiệp cầm ca” hay “xướng
                                            ca vô loài” theo định kiến xưa nữa.</p>
                                        <!-- <small><a href="blog-category-01.html" title="">Travel</a></small> -->
                                        <small><a href="single.html" title="">21/03/2018</a></small>
                                        <!-- <small><a href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="detail_news.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/tt-sk4.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4 class="tittle_news"><a href="detail_news.html" title="">Lễ bảo vệ đồ án tốt nghiệp của sinh viên Khoa Nghệ thuật</a></h4>
                                        <p class="detaill_news">Ngày 18 tháng 01 năm 2018, những sinh viên Khóa 8 và Khóa 9 Chuyên ngành Thiết kế thời trang của Khoa Nghệ thuật Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn đã bảo vệ thành công đồ án tốt nghiệp.</p>
                                        <!-- <small><a href="blog-category-01.html" title="">Travel</a></small> -->
                                        <small><a href="single.html" title="">25/01/2018</a></small>
                                        <!-- <small><a href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="detail_news.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/tt-sk5.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4 class="tittle_news"><a href="detail_news.html" title="">Học Thanh nhạc tại trường Saigonact và cơ hội việc làm</a></h4>
                                        <p class="detaill_news">Âm nhạc vốn được xem là món ăn tinh thần không thể thiếu trong đời sống của con người. Với sự phát triển của công nghệ số, bộ môn nghệ thuật này ngày càng phát triển mạnh mẽ, đến gần với công chúng hơn. Đối với nhiều bạn trẻ, âm nhạc là con đường của ước mơ và hoạt động âm nhạc luôn có sức hút đối với khán thính giả bốn phương. Học Thanh nhạc tại Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn, sin viên hoàn toàn tự tin thể
                                            hiện mình với cơ hội việc làm vững chắc.</p>
                                        <!-- <small><a href="blog-category-01.html" title="">Travel</a></small> -->
                                        <small><a href="single.html" title="">26/02/2018</a></small>
                                        <!-- <small><a href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="detail_news.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/tt-sk6.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4 class="tittle_news"><a href="detail_news.html" title="">Món quà ý nghĩa họp mặt đầu năm 2018 tại Saigonact</a></h4>
                                        <p class="detaill_news">Hòa chung không khí rộn ràng và những ngày đầu xuân vào sáng ngày 21/02/2018 (tức ngày mùng 6 tết nguyên đán), Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn đã long trọng tổ chức buổi họp mặt Tân xuân trong không khí ấm áp và vui tươi. Tới dự buổi tân niên, có các thầy cô Ban Cố vấn, Ban Giám hiệu cùng lãnh đạo các Phòng ban, Khoa, Trung tâm và các cán bộ, giảng viên đang công tác tại Trường.</p>
                                        <!-- <small><a href="blog-category-01.html" title="">Travel</a></small> -->
                                        <small><a href="single.html" title="">22/02/2018</a></small>
                                        <!-- <small><a href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end blog-grid-system -->
                </div><!-- end page-wrapper -->
                <hr class="invis3">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->
            @include('client.layout.layout_nghethuat.components.news.sibarnews')
            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@include('client.layout.layout_nghethuat.components.news.footer')
@endSection
