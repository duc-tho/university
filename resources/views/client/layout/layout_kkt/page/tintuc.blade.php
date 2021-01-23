@extends('client.layout.layout_kkt.index')

@section('title', 'kkt tin tức')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3 class="color-aqua"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></h3>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta big-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Du lịch học đường thời kỳ hội nhập </a></h4>
                                <p>Để giúp trẻ vượt qua được những áp lực trong học tập, các bậc phụ huynh cần có kế hoạch cụ thể cho con được vui chơi giải trí một cách hợp lý. Nhưng để lựa chọn cho các em chơi gì, tham gia hoạt động nào lại là điều không hề đơn giản. Để việc thực hiện du lịch học đường có hiểu quả thì cần có sự phối hợp chặt chẽ giữa gia đình và nhà trường</p>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></small>
                                <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">24-07-2019</a></small>
                                <small><a href="blog-author.html" title="">Minh Long</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/nganh-tai-chinh-ngan-hang-hoc-de-lam-gi-thumbnail-99181 (1).png') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta big-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Ngành Tài chính ngân hàng – Học để làm gì?</a></h4>
                                <p>Vì sao mà ngành Tài chính ngân hàng qua các năm vẫn luôn là ngành hot của các trường? Học sinh đã nhìn thấy sự hấp dẫn gì từ nó? Ra trường làm gì? Ở đâu? Và vô số câu hỏi được các em học sinh gửi về hộp mail của Trung tâm tuyển sinh Saigonact đều xoay quan vấn đề “Ngành Tài chính ngân hàng – Học để làm gì?”</p>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></small>
                                <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">29-05-2020</a></small>
                                <small><a href="blog-author.html" title="">Minh Long</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3 class="color-pink"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Sự Kiện</a></h3>
                </div><!-- end title -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/them-mot-hoi-thao-khoa-hoc-ve-du-lich-duoc-to-chuc-tai-saigonact-thumbnail-92618.png') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Thêm một Hội thảo khoa học về Du lịch được tổ chức tại BQLĐATL Trường Đại học Du lịch Sài Gòn</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Sự Kiện</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">22-08-017</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/ban-chu-nhiem-khoa-kinh-te-lam-viec-voi-ban-can-su-cac-khoa-nam-hoc-2017-2018-thumbnail-72416.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Ban Chủ Nhiệm khoa Kinh tế làm việc với Ban cán sự các khóa năm học 2017 – 2018</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Sự Kiện</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">11-01-2019</a></small>
                            </div><!-- end meta -->
                        </div>
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/them-mot-hoi-thao-khoa-hoc-ve-du-lich-duoc-to-chuc-tai-saigonact-thumbnail-92618.png') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Thêm một Hội thảo khoa học về Du lịch được tổ chức tại BQLĐATL Trường Đại học Du lịch Sài Gòn</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Sự Kiện</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">22-08-017</a></small>
                            </div><!-- end meta -->
                        </div>
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/them-mot-hoi-thao-khoa-hoc-ve-du-lich-duoc-to-chuc-tai-saigonact-thumbnail-92618.png') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Thêm một Hội thảo khoa học về Du lịch được tổ chức tại BQLĐATL Trường Đại học Du lịch Sài Gòn</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Sự Kiện</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">22-08-017</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end col -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/mo-hinh-dai-hoc-khong-vi-loi-nhuan-dau-tien-tai-viet-nam-thumbnail-25725.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Mô hình Đại học không vì lợi nhuận đầu tiên tại Việt Nam</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Sự Kiện</a>, <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Man</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">22-08-2019</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/chao-don-nam-hoc-moi-thumbnail-79075.png') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Chào đón năm học mới</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Sự Kiện</a>, <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Style</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">04-07-2018</a></small>
                            </div><!-- end meta -->
                        </div>
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/mo-hinh-dai-hoc-khong-vi-loi-nhuan-dau-tien-tai-viet-nam-thumbnail-25725.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Mô hình Đại học không vì lợi nhuận đầu tiên tại Việt Nam</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Sự Kiện</a>, <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Man</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">22-08-2019</a></small>
                            </div><!-- end meta -->
                        </div>
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/mo-hinh-dai-hoc-khong-vi-loi-nhuan-dau-tien-tai-viet-nam-thumbnail-25725.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Mô hình Đại học không vì lợi nhuận đầu tiên tại Việt Nam</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Sự Kiện</a>, <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Man</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">22-08-2019</a></small>
                            </div><!-- end meta -->
                        </div>
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/mo-hinh-dai-hoc-khong-vi-loi-nhuan-dau-tien-tai-viet-nam-thumbnail-25725.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Mô hình Đại học không vì lợi nhuận đầu tiên tại Việt Nam</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Sự Kiện</a>, <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Man</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">22-08-2019</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1">

        <hr class="invis1">

        <div class="row">
            <div class="col-lg-9">
                <div class="blog-list clearfix">
                    <div class="section-title">
                        <h3 class="color-green"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Thực Tập</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/10-loi-khuyen-bo-ich-cho-sinh-vien-moi-tot-nghiep-thumbnail-41780 (1).jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">10 lời khuyên bổ ích cho sinh viên mới tốt nghiệp</a></h4>
                            <p>Với sinh viên, việc tìm kiếm một công việc sau khi tốt nghiệp không dễ dàng. Và để có một công việc phù hợp ngành học với mức thu nhập tương xứng thì lại càng khó hơn. Vì vậy, hãy cùng tham khảo những lời khuyên dành cho sinh viên mới tốt nghiệp khi tiếp cận với công việc và cơ hội mới các bạn nhé.</p>
                            <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Thực Tập</a></small>
                            <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">13-04-2018</a></small>
                            <small><a href="blog-author.html" title="">by Boby</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/10-loi-khuyen-bo-ich-cho-sinh-vien-moi-tot-nghiep-thumbnail-41780 (1).jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">10 lời khuyên bổ ích cho sinh viên mới tốt nghiệp</a></h4>
                            <p>Với sinh viên, việc tìm kiếm một công việc sau khi tốt nghiệp không dễ dàng. Và để có một công việc phù hợp ngành học với mức thu nhập tương xứng thì lại càng khó hơn. Vì vậy, hãy cùng tham khảo những lời khuyên dành cho sinh viên mới tốt nghiệp khi tiếp cận với công việc và cơ hội mới các bạn nhé.</p>
                            <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Thực Tập</a></small>
                            <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">13-04-2018</a></small>
                            <small><a href="blog-author.html" title="">by Boby</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/10-loi-khuyen-bo-ich-cho-sinh-vien-moi-tot-nghiep-thumbnail-41780 (1).jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">10 lời khuyên bổ ích cho sinh viên mới tốt nghiệp</a></h4>
                            <p>Với sinh viên, việc tìm kiếm một công việc sau khi tốt nghiệp không dễ dàng. Và để có một công việc phù hợp ngành học với mức thu nhập tương xứng thì lại càng khó hơn. Vì vậy, hãy cùng tham khảo những lời khuyên dành cho sinh viên mới tốt nghiệp khi tiếp cận với công việc và cơ hội mới các bạn nhé.</p>
                            <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Thực Tập</a></small>
                            <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">13-04-2018</a></small>
                            <small><a href="blog-author.html" title="">by Boby</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div><!-- end blog-list -->

                <hr class="invis">

                {{-- <div class="blog-list clearfix">
                    <div class="section-title">
                        <h3 class="color-red"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Food</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_square_05.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Banana-chip chocolate cake recipe</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Food</a></small>
                            <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">11 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_square_06.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">10 practical ways to choose organic vegetables</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Food</a></small>
                            <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">10 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_square_07.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">We are making homemade ravioli</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Food</a></small>
                            <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">09 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div><!-- end blog-list --> --}}
            </div><!-- end col -->

            <div class="col-lg-3">
                <div class="section-title">
                    <h3 class="color-yellow"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Thông Báo</a></h3>
                </div><!-- end title -->

                <div class="blog-box">
                    <!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Thông báo về việc triển khai đào tạo khóa 14 năm học 2019 - 2020</a></h4>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Thông Báo</a></small>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">05-08-2019</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Thông báo Chương trình Công tác học sinh, sinh viên Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn Năm học 2019 - 2020</a></h4>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Thông Báo</a></small>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">05-08-2019</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Thông báo Xét tuyển và Thi tuyển Hệ Cao đẳng năm 2017</a></h4>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Thông Báo</a></small>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">05-08-2019</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                {{-- <div class="section-title">
                    <h3 class="color-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Health</a></h3>
                </div><!-- end title -->

                <div class="blog-box">
                    <div class="post-media">
                        <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                            <img src="{{ asset('dist/layout/layout_kkt/upload/blog_07.jpg') }}" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Opened the doors of the Istanbul spa center</a></h4>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Spa</a></small>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">21 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                            <img src="{{ asset('dist/layout/layout_kkt/upload/blog_08.jpg') }}" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">2017 trends in health tourism</a></h4>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Health</a></small>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">20 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                            <img src="{{ asset('dist/layout/layout_kkt/upload/blog_09.jpg') }}" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Experience the effects of miraculous stones</a></h4>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Beauty</a></small>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">20 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box --> --}}
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1">
    </div><!-- end container -->
</section>
@endsection
