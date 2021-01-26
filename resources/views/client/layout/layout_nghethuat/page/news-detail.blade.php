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

            @include('client.layout.layout_nghethuat.components.news.sibarnews')
            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@include('client.layout.layout_nghethuat.components.news.footer')
@endSection
