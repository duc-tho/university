@extends('client.layout.layout_kkt.index')
@section('title', 'kkt tin tức theo nhóm')
@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
        style="background-image: url(/dist/layout/layout_kkt/images/page-banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{$category['title']}} {{ $faculty->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('trang-chu', ['khoa-kinh-te']) }}">Trang
                                        Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$category['title']}}</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="portfolio row">
                        {{-- @foreach ($news as $key => $category) --}}
                        @foreach ($category['news'] as $item)
                        <div class="pitem item-w1 item-h1">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}" title="">
                                        <img src="{{ asset($item['image']) }}" alt="img" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <span class="bg-grey"><a href="{{ route('tin-tuc-danh-muc', [$faculty['slug'],$category['slug']]) }}" title="">{{$category['title']}}</a></span>
                                    <h4><a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}" title="">
                                        {{ $item['title'] }}</a></h4>
                                    <small><a href="javascript" title="">{{ $item['created_by'] }}</a></small>
                                    <small><a href="#" title="">{{ $item['event_time'] }}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                            
                        </div>
                        @endforeach
                        {{-- @endforeach --}}

                        

                        <!-- end col -->
                </div><!-- end portfolio -->
            </div><!-- end page-wrapper -->

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    {{ $category['news']->render('vendor.pagination.bootstrap-4') }}
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end col -->
    </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
