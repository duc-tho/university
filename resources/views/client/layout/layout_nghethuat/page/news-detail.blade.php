@extends('client.layout.layout_nghethuat.index')

@section('title', 'Khoa Nghệ Thuật - Chi tiết tin tức')

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
                    <div class="blog-title-area">
                        <span class="color-aqua"><a href="blog-category-01.html" title="">Tin tức - Sự kiện</a></span>
                        <h3>Khoa Nghệ Thuật Ôm Trọn Toàn Bộ Giải Thưởng của ACT GOTTALENT 2019</h3>
                        <div class="blog-meta big-meta">
                            <small><a href="single.html" title="">08/05/2019</a></small>
                            <small><a href="blog-author.html" title="">Tác giả : Ngạo Phạm</a></small>
                            <small><a hred="javascript:" title=""><i class="fa fa-eye"></i> 2344</a></small>
                        </div><!-- end meta -->
                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a hred="javascript:" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                <li><a hred="javascript:" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a hred="javascript:" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->
                    <div class="single-post-media">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/khoa-nghe-thuat-om-tron-bo-giai-thuong-cua-act-gottalent-2019-thumbnail-33023.jpg') }}" alt="" class="img-fluid">
                    </div><!-- end media -->
                    <div class="blog-content">
                        <div class="pp">
                            <p>Chúc mừng các hotboy, hotgirl của Khoa Nghệ thuật đã ôm trọn bộ giải của cuộc thi ACT GOTTALENT 2019 được diễn ra vào ngày 06/5/2019 do Phòng CTHS SV tổ chức.</p>
                            <p>Giải III được trao cho nhóm nhảy Nulo dance. Nhóm đã chọn phong cách nhảy từ thập niên 90 là sự kết hợp của các sinh viên Khoa Nghệ thuật, Khoa Du lịch là tiết mục được đánh giá cao. Tuy chưa được giải cao nhất nhưng nó thể hiện sự đoàn kết, gắn bó của sinh viên các Khoa, thể hiện sự đam mê nghệ thuật của sinh viên toàn trường.</p>
                            <p>Giải II được trao cho bạn Tăng Phải Toàn lớp K132TN  với bộ thiết kế thời trang THE QUEEN. Bộ thiết kế thời trang lấy cảm hứng từ vẻ đẹp của các Nữ thần trong thần thoại Hy Lạp. Bộ thiết kế thời trang với chất liệu bọc Nilon đã khiến cho người xem ngỡ ngàng. Với thông điệp muốn mọi người hạn chế sử dụng túi nilon trong sinh hoạt và phân loại rác đúng cách.</p>
                            <p>Quán quân trong đêm chung kết là cặp hotboy của K132TN1 sinh viên Võ Văn Lý và  Trương Xuân Tài. Với ca khúc Làm cha của Quách Beem đã làm cho hội trưởng trở nên lắng động. Giọng hát trầm ấm của 2 sinh viên thể hiện góp phần đẩy cao cảm xúc cho người xem.</p>
                        </div><!-- end pp -->
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/dinhhuongphattrien.jpg') }}" alt="" class="img-fluid img-fullwidth">
                        <!-- end pp -->
                    </div><!-- end content -->
                    <!-- end title -->

                    <hr class="invis1">

                    <hr class="invis1">
                    <!-- end author-box -->
                    <hr class="invis1">
                    <div class="custombox clearfix">
                        <h4 class="small-title">Có thể bạn quan tâm</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/gioithieu.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class=""></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="single.html" title="">Nhận Giải về Lĩnh Vực Nghệ Thuật</a></h4>
                                        <small><a href="blog-category-01.html" title="">Tin Tức</a></small>
                                        <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <div class="col-lg-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{ route('khoanghethuat-chitiettintuc') }}" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/images/tt-sk1.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class=""></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="{{ route('khoanghethuat-chitiettintuc') }}" title="">Kịch Diễn Tuổi Trẻ</a></h4>
                                        <small><a href="blog-category-01.html" title="">Tin Tức</a></small>
                                        <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end custom-box -->
                    <hr class="invis1">
                    <div class="fb-comments" data-href="http://127.0.0.1:5500/detail_news.html" data-width="100%" data-numposts="6"></div>
                </div><!-- end page-wrapper -->
            </div><!-- end col -->

            @include('client.layout.layout_nghethuat.components.news.sibarnews')
            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@include('client.layout.layout_nghethuat.components.news.footer')
@endSection
