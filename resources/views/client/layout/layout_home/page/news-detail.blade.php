@extends('client.layout.default.index')

@section('title', 'Chi tiết tin tức')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<meta property="og:url" content="https://www.your-domain.com/your-page.html" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Your Website Title" />
<meta property="og:description" content="Your description" />
<meta property="og:image" content="https://www.your-domain.com/path/image.jpg" />
@endsection

@section('main')
@include('client.layout.default.components.headernews')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="2JjGvYzS"></script>
<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area">


                        <span class="color-aqua"><a href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category['slug']]) }}" title="">{{ $category['title'] }}</a></span>

                        <h3>{{ $news['title'] }}</h3>

                        <div class="blog-meta big-meta">
                            <small><a href="javascript:">{{ ConvertDatabaseTimeToDMY($news['created_at']) }}</a></small>
                            <small><a href="javascript:">Tác giả: {{ $news['created_by'] }}</a></small>
                            <small><a href="javascript:"><i class="fa fa-eye"></i> {{ $news['view_count'] }}</a></small>
                        </div><!-- end meta -->

                        <div class="post-sharing">
                            <ul class="list-inline">
                                <div class="fb-share-button" data-href="{{ URL::current() }}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->

                    {{-- <div class="single-post-media">
                        <img src="{{ asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png') }}" alt="" class="img-fluid">
                </div><!-- end media --> --}}

                <div class="ck-content">
                    {!! $news['content'] !!}
                </div><!-- end content -->

                <div class="blog-title-area">
                    {{-- <div class="tag-cloud-single">
                        <span>Tags</span>
                        <small><a href="#" title="">lifestyle</a></small>
                        <small><a href="#" title="">colorful</a></small>
                        <small><a href="#" title="">trending</a></small>
                        <small><a href="#" title="">another tag</a></small>
                    </div><!-- end meta --> --}}

                    <div class="post-sharing">
                        <ul class="list-inline">
                            <div class="fb-share-button" data-href="{{ URL::current() }}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                        </ul>
                    </div><!-- end post-sharing -->
                </div><!-- end title -->

                <!-- end row -->

                <hr class="invis1">

                <div class="custombox clearfix">
                    <h4 class="small-title">Tin liên quan</h4>
                    <div class="row">
                        @if ($relate_news->isEmpty())
                        <div class="col-lg-6 mx-auto text-center">Hiện chưa có tin liên quan!</div>
                        @endif
                        @foreach ($relate_news as $item)
                        <div class="col-lg-6">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">
                                        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" class="img-fluid float-left">
                                        <div class="hovereffect">
                                            <span class=""></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">{{ $item['title'] }}</a></h4>
                                    <small><a href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category['slug']]) }}">{{ $category['title'] }}</a></small>
                                    <small><a href="javascript:">{{ ConvertDatabaseTimeToDMY($item['created_at']) }}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end col -->
                        @endforeach
                    </div><!-- end row -->
                </div><!-- end custom-box -->

                <hr class="invis1">

                <div class="custombox clearfix">
                    <div class="fb-comments" data-href="{{ URL::current() }}" data-width="750" data-numposts="5"></div>

                </div><!-- end custom-box -->

                <hr class="invis1">

                <!-- <div class="custombox clearfix">
                        <h4 class="small-title">Leave a Reply</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-wrapper">
                                    <input type="text" class="form-control" placeholder="Your name">
                                    <input type="text" class="form-control" placeholder="Email address">
                                    <input type="text" class="form-control" placeholder="Website">
                                    <textarea class="form-control" placeholder="Your comment"></textarea>
                                    <button type="submit" class="btn btn-primary">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </div> -->
            </div><!-- end page-wrapper -->
        </div><!-- end col -->

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            @include('client.layout.default.components.sidebar')
        </div><!-- end col -->
    </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
