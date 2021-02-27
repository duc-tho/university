@extends('client.layout.layout_kkt.index')

@section('title', 'kkt tin tức theo nhóm')

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
                <h2><i class="fa fa-user-md bg-grey"></i> Tin Tức <small class="hidden-xs-down hidden-sm-down"> </small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Tin Tức - Sự Kiện</a></li>
                    <li class="breadcrumb-item active">Tin Tức</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="portfolio row">
                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></span>
                                    <h4><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                            Du lịch học đường thời kỳ hội nhập</a></h4>
                                    <small><a href="javascript" title="">Tác Giả : Minh Lộc</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">07/21/2018</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/images/them-mot-hoi-thao-khoa-hoc-ve-du-lich-duoc-to-chuc-tai-saigonact-thumbnail-92618.png') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></span>
                                    <h4><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Hội thảo KH về Du lịch tại Trường ĐH Du lịch Sài Gòn</a></h4>
                                    <small><a href="javascript" title="">Tác Giả : Minh Lộc</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">07/19/2018</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/images/nganh-tai-chinh-ngan-hang-hoc-de-lam-gi-thumbnail-99181 (1).png') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></span>
                                    <h4><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                            Mô hình Đại học không vì lợi nhuận đầu tiên tại Việt Nam</a></h4>
                                    <small><a href="javascript" title="">Tác Giả: Minh Lộc</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">07/07/2019</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->
                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></span>
                                    <h4><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                            Du lịch học đường thời kỳ hội nhập</a></h4>
                                    <small><a href="javascript" title="">Tác Giả : Minh Lộc</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">07/21/2018</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/images/them-mot-hoi-thao-khoa-hoc-ve-du-lich-duoc-to-chuc-tai-saigonact-thumbnail-92618.png') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></span>
                                    <h4><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Hội thảo KH về Du lịch tại Trường ĐH Du lịch Sài Gòn</a></h4>
                                    <small><a href="javascript" title="">Tác Giả : Minh Lộc</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">07/19/2018</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/images/nganh-tai-chinh-ngan-hang-hoc-de-lam-gi-thumbnail-99181 (1).png') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></span>
                                    <h4><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                            Mô hình Đại học không vì lợi nhuận đầu tiên tại Việt Nam</a></h4>
                                    <small><a href="javascript" title="">Tác Giả: Minh Lộc</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">07/07/2019</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div>
                        < <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></span>
                                    <h4><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                            Du lịch học đường thời kỳ hội nhập</a></h4>
                                    <small><a href="javascript" title="">Tác Giả : Minh Lộc</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">07/21/2018</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                    </div><!-- end col -->

                    <div class="pitem item-w1 item-h1">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/them-mot-hoi-thao-khoa-hoc-ve-du-lich-duoc-to-chuc-tai-saigonact-thumbnail-92618.png') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></span>
                                <h4><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Hội thảo KH về Du lịch tại Trường ĐH Du lịch Sài Gòn</a></h4>
                                <small><a href="javascript" title="">Tác Giả : Minh Lộc</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">07/19/2018</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end col -->

                    <div class="pitem item-w1 item-h1">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/nganh-tai-chinh-ngan-hang-hoc-de-lam-gi-thumbnail-99181 (1).png') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Tin Tức</a></span>
                                <h4><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">
                                        Mô hình Đại học không vì lợi nhuận đầu tiên tại Việt Nam</a></h4>
                                <small><a href="javascript" title="">Tác Giả: Minh Lộc</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">07/07/2019</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div>
                    < <!-- end col -->

                        <!-- end col -->
                </div><!-- end portfolio -->
            </div><!-- end page-wrapper -->

            <hr class="invis">

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
    </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
