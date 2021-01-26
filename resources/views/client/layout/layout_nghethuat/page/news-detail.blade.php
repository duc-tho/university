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
                        <img src="{{ asset('dist/layout/layout_nghethuat/upload/menu_08.jpg') }}" alt="" class="img-fluid">
                    </div><!-- end media -->
                    <div class="blog-content">
                        <div class="pp">
                            <p></p>
                        </div><!-- end pp -->
                        <img src="{{ asset('dist/layout/layout_nghethuat/upload/menu_05.jpg') }}" alt="" class="img-fluid img-fullwidth">
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
                                            <img src="{{ asset('dist/layout/layout_nghethuat/upload/menu_06.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class=""></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="single.html" title="">We are guests of ABC Design Studio</a></h4>
                                        <small><a href="blog-category-01.html" title="">Trends</a></small>
                                        <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <div class="col-lg-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{ asset('dist/layout/layout_nghethuat/upload/menu_07.jpg') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class=""></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="single.html" title="">Nostalgia at work with family</a></h4>
                                        <small><a href="blog-category-01.html" title="">News</a></small>
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

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <h2 class="widget-title">Tìm kiếm</h2>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search on the site">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!-- end widget -->
                    <div class="widget">
                        <h2 class="widget-title">Thông báo</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="{{ asset('dist/layout/layout_nghethuat/upload/blog_square_01.jpg') }}" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                        <small>12 Jan, 2016</small>
                                    </div>
                                </a>
                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="{{ asset('dist/layout/layout_nghethuat/upload/blog_square_02.jpg') }}" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                        <small>11 Jan, 2016</small>
                                    </div>
                                </a>
                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="{{ asset('dist/layout/layout_nghethuat/upload/blog_square_03.jpg') }}" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                        <small>07 Jan, 2016</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->
                    <div class="widget">
                        <h2 class="widget-title">Quảng cáo</h2>
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="{{ asset('dist/layout/layout_nghethuat/upload/banner_03.jpg') }}" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->
                    <!-- <div class="widget">
                        <h2 class="widget-title">Instagram Feed</h2>
                        <div class="instagram-wrapper clearfix">
                            <a class="" hred="javascript:"><img src="{{ asset('dist/layout/layout_nghethuat/upload/insta_01.jpeg') }}" alt="" class="img-fluid"></a>
                            <a hred="javascript:"><img src="{{ asset('dist/layout/layout_nghethuat/upload/insta_02.jpeg') }}" alt="" class="img-fluid"></a>
                            <a hred="javascript:"><img src="{{ asset('dist/layout/layout_nghethuat/upload/insta_03.jpeg') }}" alt="" class="img-fluid"></a>
                            <a hred="javascript:"><img src="{{ asset('dist/layout/layout_nghethuat/upload/insta_04.jpeg') }}" alt="" class="img-fluid"></a>
                            <a hred="javascript:"><img src="{{ asset('dist/layout/layout_nghethuat/upload/insta_05.jpeg') }}" alt="" class="img-fluid"></a>
                            <a hred="javascript:"><img src="{{ asset('dist/layout/layout_nghethuat/upload/insta_06.jpeg') }}" alt="" class="img-fluid"></a>
                            <a hred="javascript:"><img src="{{ asset('dist/layout/layout_nghethuat/upload/insta_07.jpeg') }}" alt="" class="img-fluid"></a>
                            <a hred="javascript:"><img src="{{ asset('dist/layout/layout_nghethuat/upload/insta_08.jpeg') }}" alt="" class="img-fluid"></a>
                            <a hred="javascript:"><img src="{{ asset('dist/layout/layout_nghethuat/upload/insta_09.jpeg') }}" alt="" class="img-fluid"></a>
                        </div><!-- end Instagram wrapper
                    </div>end widget -->
                    <div class="widget">
                        <h2 class="widget-title">Liên quan</h2>
                        <div class="link-widget">
                            <ul>
                                <li><a href="news.html">Hoạt động sinh viên<span>(21)</span></a></li>
                                <li><a href="news.html">Tin chuyên ngành<span>(15)</span></a></li>
                                <li><a href="news.html">Bảng tin khoa<span>(31)</span></a></li>
                                <li><a href="news.html">Tạp chí khoa học<span>(22)</span></a></li>
                                <li><a href="news.html">Bảng vàng thành tích<span>(66)</span></a></li>
                                <!-- <li><a hred="javascript:">Entertaintment <span>(11)</span></a></li>
                                <li><a hred="javascript:">Food & Drink <span>(87)</span></a></li> -->
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
