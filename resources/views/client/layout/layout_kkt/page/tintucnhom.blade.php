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
                <h2><i class="fa fa-user-md bg-grey"></i> Health <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active">Fashion</li>
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
                                    <a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/upload/menu_01.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Spa</a></span>
                                    <h4><a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">What is your favorite leather color</a></h4>
                                    <small><a href="javascript" title="">By: Jessica</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">21 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/upload/menu_02.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Beauty</a></span>
                                    <h4><a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">This year green glasses trend</a></h4>
                                    <small><a href="javascript" title="">By: Jenny</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">19 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/upload/menu_03.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Spa</a></span>
                                    <h4><a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">Put on a hat for a better look</a></h4>
                                    <small><a href="javascript" title="">By: Amanda</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">18 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/upload/menu_04.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Beauty</a></span>
                                    <h4><a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">We have been talking about one of the pioneers of male fashion</a></h4>
                                    <small><a href="javascript" title="">By: Jessica</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">16 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/upload/menu_22.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Spa</a></span>
                                    <h4><a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">Things to watch out for when choosing sunglasses</a></h4>
                                    <small><a href="javascript" title="">By: Jenny</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">14 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/upload/menu_23.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Spa</a></span>
                                    <h4><a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">A makeup made with honey and wax for your body</a></h4>
                                    <small><a href="javascript" title="">By: Amanda</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">13 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/upload/menu_24.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Spa</a></span>
                                    <h4><a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">Fabulous treatment methods of nature</a></h4>
                                    <small><a href="javascript" title="">By: Martines</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">12 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/upload/menu_25.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Beauty</a></span>
                                    <h4><a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">Shake your soap and candle-smelling body</a></h4>
                                    <small><a href="javascript" title="">By: Amanda</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">11 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->

                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">
                                        <img src="{{ asset('dist/layout/layout_kkt/upload/menu_26.jpg') }}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Spa</a></span>
                                    <h4><a href="{{ asset('khoakinhte-danhsachtintuc') }}" title="">Experience a unique experience in candlelight</a></h4>
                                    <small><a href="javascript" title="">By: Amanda</a></small>
                                    <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">11 July, 2017</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->
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
