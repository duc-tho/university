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
                    <h3 class="color-aqua"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Lifestyle</a></h3>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_05.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta big-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">The golden rules you need to know for a positive life</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Lifestyle</a></small>
                                <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">24 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Amanda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_06.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta big-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">I have a desert visit this summer</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Lifestyle</a></small>
                                <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">22 July, 2017</a></small>
                                <small><a href="blog-author.html" title="">by Martines</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3 class="color-pink"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Fashion</a></h3>
                </div><!-- end title -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_01.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">What is your favorite leather jacket color</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Fashion</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">21 July, 2017</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_02.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Is summer, have you bought a cane</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Fashion</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">11 July, 2017</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end col -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_03.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">This year's fashionable long beard</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Fashion</a>, <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Man</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">08 July, 2017</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_04.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">How to be more cool with clothing</a></h4>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Fashion</a>, <a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Style</a></small>
                                <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">04 July, 2017</a></small>
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
                        <h3 class="color-green"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Travel</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_square_01.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">5 Beautiful buildings you need to visit without dying</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Travel</a></small>
                            <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">21 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Boby</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_square_02.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Let's make an introduction to the glorious world of history</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Travel</a></small>
                            <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">20 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Samanta</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                                    <img src="{{ asset('dist/layout/layout_kkt/upload/blog_square_03.jpg') }}" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Did you see the most beautiful sea in the world?</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                            <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Travel</a></small>
                            <small><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">19 July, 2017</a></small>
                            <small><a href="blog-author.html" title="">by Jackie</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div><!-- end blog-list -->

                <hr class="invis">

                <div class="blog-list clearfix">
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
                </div><!-- end blog-list -->
            </div><!-- end col -->

            <div class="col-lg-3">
                <div class="section-title">
                    <h3 class="color-yellow"><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Vlogs</a></h3>
                </div><!-- end title -->

                <div class="blog-box">
                    <div class="post-media">
                        <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                            <img src="{{ asset('dist/layout/layout_kkt/upload/blog_10.jpg') }}" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Videos</a></small>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">21 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                            <img src="{{ asset('dist/layout/layout_kkt/upload/blog_11.jpg') }}" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">Nostalgia at work</a></h4>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Videos</a></small>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">20 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="{{ route('khoakinhte-chitiettintuc') }}" title="">
                            <img src="{{ asset('dist/layout/layout_kkt/upload/blog_12.jpg') }}" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{ route('khoakinhte-chitiettintuc') }}" title="">How to become a good vlogger</a></h4>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">Beauty</a></small>
                        <small><a href="{{ route('khoakinhte-danhsachtintuc') }}" title="">20 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="section-title">
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
                </div><!-- end blog-box -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1">
    </div><!-- end container -->
</section>
@endsection
