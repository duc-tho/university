@extends('client.layout.default.index')

@section('title', 'Danh sách tin tức')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-car bg-green"></i> Tin Tức <small class="hidden-xs-down hidden-sm-down"></small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Tin Tức</a></li>
                    <li class="breadcrumb-item active">Danh Mục Tin Tức</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <!-- end row -->

                    <hr class="invis">

                    <div class="blog-grid-system">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">z
                                        <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title=""> Du lịch học đường thời kỳ hội nhập</a></h4>
                                        <p>Bạn đã tốt nghiệp THPT hoặc đã học hết phổ thông nhưng đại học không phải là sự lựa chọn của bạn. Bạn</p>
                                        <small><a href="blog-category-01.html" title="">Tin Tức</a></small>
                                        <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">24/12/2017</a></small>
                                        <small><a href="blog-author.html" title="">Tác giả: Minh Lộc</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/them-mot-hoi-thao-khoa-hoc-ve-du-lich-duoc-to-chuc-tai-saigonact-thumbnail-92618.png') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title=""> Du lịch học đường thời kỳ hội nhập</a></h4>
                                        <p>Bạn đã tốt nghiệp THPT hoặc đã học hết phổ thông nhưng đại học không phải là sự lựa chọn của bạn. Bạn</p>
                                        <small><a href="blog-category-01.html" title="">Tin Tức</a></small>
                                        <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">24/12/2017</a></small>
                                        <small><a href="blog-author.html" title="">Tác giả: Minh Lộc</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title=""> Du lịch học đường thời kỳ hội nhập</a></h4>
                                        <p>Bạn đã tốt nghiệp THPT hoặc đã học hết phổ thông nhưng đại học không phải là sự lựa chọn của bạn. Bạn</p>
                                        <small><a href="blog-category-01.html" title="">Tin Tức</a></small>
                                        <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">24/12/2017</a></small>
                                        <small><a href="blog-author.html" title="">Tác giả: Minh Lộc</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title=""> Du lịch học đường thời kỳ hội nhập</a></h4>
                                        <p>Bạn đã tốt nghiệp THPT hoặc đã học hết phổ thông nhưng đại học không phải là sự lựa chọn của bạn. Bạn</p>
                                        <small><a href="blog-category-01.html" title="">Tin Tức</a></small>
                                        <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">24/12/2017</a></small>
                                        <small><a href="blog-author.html" title="">Tác giả: Minh Lộc</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title=""> Du lịch học đường thời kỳ hội nhập</a></h4>
                                        <p>Bạn đã tốt nghiệp THPT hoặc đã học hết phổ thông nhưng đại học không phải là sự lựa chọn của bạn. Bạn</p>
                                        <small><a href="blog-category-01.html" title="">Tin Tức</a></small>
                                        <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">24/12/2017</a></small>
                                        <small><a href="blog-author.html" title="">Tác giả: Minh Lộc</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png') }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title=""> Du lịch học đường thời kỳ hội nhập</a></h4>
                                        <p>Bạn đã tốt nghiệp THPT hoặc đã học hết phổ thông nhưng đại học không phải là sự lựa chọn của bạn. Bạn</p>
                                        <small><a href="blog-category-01.html" title="">Tin Tức</a></small>
                                        <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">24/12/2017</a></small>
                                        <small><a href="blog-author.html" title="">Tác giả: Minh Lộc</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <!-- end col -->

                         <!-- end col -->

                            <!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end blog-grid-system -->
                </div><!-- end page-wrapper -->


               <!-- end row -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                @include('client.layout.default.components.sidebar')
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
