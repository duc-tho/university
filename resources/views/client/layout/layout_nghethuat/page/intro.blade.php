@extends('client.layout.layout_nghethuat.index')

@section('title', 'Khoa Nghệ Thuật - Giới thiệu')

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
<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-shopping-bag bg-red"></i>GIỚI THIỆU</h2>
            </div><!-- end col -->
            <!-- <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active">Food</li>
                </ol>
            </div> -->
            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-list clearfix">
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="music_industry.html" title="">
                                        <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/sumenhtamnhin.png') }}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->
                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="chitiet_introduce.html" title="">Tổng quan sứ mệnh và tầm nhìn</a></h4>
                                <p>Khoa Nghệ thuật được thành lập từ năm 2006, gồm có 06 chuyên ngành: Đạo diễn, Diễn viên kịch nói và điện ảnh, Thanh nhạc, Thiết kế Đồ họa, Thiết kế Thời trang và Quay phim.</p>
                                <!-- <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>11 July, 2017</small>
                                <!-- <small><a href="blog-author.html" title="">by Matilda</a></small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="chitiet_introduce.html" title="">
                                        <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/banchunhiem.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->
                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="chitiet_introduce.html" title="">Ban chủ nhiệm</a></h4>
                                <p>Ban chủ nhiệm khoa Nghệ thuật</p>
                                <!-- <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>11 July, 2017</small>
                                <!-- <small><a href="blog-author.html" title="">by Matilda</a></small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="chitiet_introduce.html" title="">
                                        <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/cocautochuc1.png') }}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->
                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="chitiet_introduce.html" title="">Cơ cấu tổ chức</a></h4>
                                <p>Cơ cấu tổ chức</p>
                                <!-- <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>11 July, 2017</small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <!-- <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="{{ asset('dist/layout/layout_nghethuat/upload/banner_02.jpg') }}" alt="" class="img-fluid">
                                    </div><!-- end banner-img
                                </div><!-- end banner
                            </div><!-- end col
                        </div><!-- end row  -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="chitiet_introduce.html" title="">
                                        <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/muctieu.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->
                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="chitiet_introduce.html" title="">Mục Tiêu</a></h4>
                                <p>Xây dựng chương trình đào tạo nghệ thuật bắt kịp trình độ giáo dục đại học trong nước và khu vực.</p>
                                <!-- <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>11 July, 2017</small>
                                <!-- <small><a href="blog-author.html" title="">by Matilda</a></small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="chitiet_introduce.html" title="">
                                        <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/dinhhuongphattrien.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->
                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="chitiet_introduce.html" title="">Định hướng phát triển</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <!-- <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>11 July, 2017</small>
                                <!-- <small><a href="blog-author.html" title="">by Matilda</a></small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="chitiet_introduce.html" title="">
                                        <img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/thanhtichchungnhan.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->
                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="chitiet_introduce.html" title="">Thành tích và chứng nhận</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <!-- <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>11 July, 2017</small>
                                <!-- <small><a href="blog-author.html" title="">by Matilda</a></small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->
                <hr class="invis">
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <h2 class="widget-title">Tìm kiếm</h2>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!-- end widget -->
                    <div class="widget">
                        <h2 class="widget-title">Thông báo</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="chitiet_notice.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <h5 class="mb-1">Thông báo Chương trình Công tác học sinh, sinh viên Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn Năm học 2019 - 2020</h5>
                                        <small>18/05/2019</small>
                                    </div>
                                </a>
                                <a href="chitiet_notice.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <h5 class="mb-1">Thông báo Xét tuyển và Thi tuyển Hệ Cao đẳng năm 2017</h5>
                                        <small>23/08/2017</small>
                                    </div>
                                </a>
                                <a href="chitiet_notice.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <h5 class="mb-1">Chủ tịch UBND TP.HCM công nhận Ban Quản lý Đề án thành lập Trường Đại học Du lịch Sài Gòn</h5>
                                        <small>23/08/2017</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->
                    <div class="widget">
                        <h2 class="widget-title">Giới thiệu</h2>
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <!-- <img src="{{ asset('dist/layout/layout_nghethuat/upload/banner_03.jpg') }}" alt="" class="img-fluid"> -->
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/BY2vU5bFsJU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->
                    <div class="widget">
                        <h2 class="widget-title">Liên quan</h2>
                        <div class="link-widget">
                            <ul>
                                <li><a href="news.html">Hoạt động sinh viên<span>(21)</span></a></li>
                                <li><a href="news.html">Tin chuyên ngành<span>(15)</span></a></li>
                                <li><a href="news.html">Bảng tin khoa<span>(31)</span></a></li>
                                <li><a href="news.html">Tạp chí khoa học<span>(22)</span></a></li>
                                <li><a href="news.html">Bảng vàng thành tích<span>(66)</span></a></li>
                                <!-- <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                <li><a href="#">Food & Drink <span>(87)</span></a></li> -->
                            </ul>
                        </div><!-- end link-widget -->
                    </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@include('client.layout.layout_nghethuat.components.news.footer')
@endSection
