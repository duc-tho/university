@extends('client.layout.default.index')

@section('title', 'Giới thiệu '.$about_detail['title'])

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
@include('client.layout.default.components.header')
<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area">
                        <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="{{ route('trang-chu-chuyen-huong') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('gioi-thieu', [$faculty['slug']]) }}">Giới thiệu</a></li>
                            <li class=" breadcrumb-item active">{{ $about_detail['title'] }}</li>
                        </ol>

                        <h3 class="h4">{{ $about_detail['intro_title'] ?? $about_detail['title'] }}</h3>

                        <div class="blog-meta big-meta">
                            <small><a href="javascript:" title="">Đăng ngày {{ ConvertDatabaseTimeToDMY($about_detail['created_at']) }}</a></small>
                            <small><a href="#" title=""><i class="fa fa-eye"></i> {{ $about_detail['view_count'] }}</a></small>
                        </div>
                    </div>

                    {{-- <div class="single-post-media">
                        <img src="http://daihocdulich.edu.vn/admin3917/template/kindeditor/attached/image/20190904/20190904092424_92135.jpg" alt="" class="img-fluid">
                    </div><!-- end media --> --}}

                    <div class="blog-content">
                        {!! $about_detail['intro'] !!}
                    </div>
                </div>
            </div>

            @include('client.layout.default.components.sidebar')
            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
