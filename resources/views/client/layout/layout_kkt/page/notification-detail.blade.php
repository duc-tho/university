@extends('client.layout.layout_kkt.index')

@section('title', 'Chi Tiết Tin Tức')

@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
@endsection

@section('main')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=440819316956327&autoLogAppEvents=1"
        nonce="0sYEBTIt"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0"
        nonce="2JjGvYzS"></script>
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area">
                            <ol class="breadcrumb hidden-xs-down">
                                <li class="breadcrumb-item"><a href="{{ route('trang-chu', ['khoa-kinh-te']) }}">Trang
                                        Chủ</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('thong-bao', [$faculty['slug'], $category['slug']]) }}">{{ $category['title'] }}</a>
                                </li>
                            </ol>
                            <span class="color-aqua"><a
                                    href="{{ route('thong-bao', [$faculty['slug'], $category['slug']]) }}"
                                    title="#">{{ $category['title'] }}</a></span>
                            <h3>{{ $news['title'] }}</h3>
                            <div class="blog-meta big-meta">
                                <small><a href="single.html" title="">{{ $news['created_at'] }}</a></small>
                                <small><a href="blog-author.html" title="">Tác giả : {{ $news['updated_by'] }}</a></small>
                                <small><a href="#" title=""><i class="fa fa-eye"></i>
                                        {{ $news['view_count'] }}</a></small>
                            </div><!-- end meta -->
                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <div class="fb-share-button" data-href="{{ URL::current() }}"
                                        data-layout="button_count" data-size="large"><a target="_blank"
                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
                                            class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="single-post-media">
                            <img src="{{ asset($news['image']) }}" alt="" class="img-fluid">
                        </div> --}}
                        <div class="blog-content">
                            <div class="pp">
                                <p>{{ $news['content'] }}</p>
                            </div><!-- end pp -->
                        </div><!-- end content -->

                        <div class="blog-title-area">
                            <div class="tag-cloud-single">
                                <span>Tags</span>
                                @foreach ($all_category as $item)
                                    <small><a href="{{ route('tin-tuc', [$faculty['slug'], $item['slug']]) }}"
                                            title="">{{ $item['title'] }}</a></small>
                                @endforeach
                            </div>


                        </div><!-- end title -->

                        <hr class="invis1">



                        <hr class="invis1">
                        <div class="fb-comments" data-href="http://127.0.0.1:8000/khoa-kinh-te/tin-tuc/chi-tiet-tin-tuc"
                            data-width="100%" data-numposts="5"></div>

                    </div><!-- end page-wrapper -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <h2 class="widget-title">Tìm kiếm</h2>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm ....">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Thông Báo Liên Quan</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @if ($relate_news->isEmpty())
                                        <div class="col-lg-6 mx-auto text-center">Hiện chưa có tin liên quan!</div>
                                    @endif
                                    @foreach ($relate_news as $item)
                                        <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}"
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                {{-- <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left"> --}}
                                                <h5 class="mb-1">
                                                    {{ $item['title'] }}</h5>
                                                <small>{{ $item['created_at'] }}</small>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

@endsection
