@extends('client.layout.default.index')

@section('title', 'Danh sách tin tức')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
@include('client.layout.default.components.headernews')
<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-car bg-green"></i> Tin Tức <small class="hidden-xs-down hidden-sm-down"></small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('trang-chu', [$faculty['slug']]) }}">{{ $faculty['name'] }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('tin-tuc', [$faculty['slug']]) }}">Tin Tức</a></li>
                    <li class="breadcrumb-item active">{{ $category['title'] }}</li>
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
                            @foreach ($category['news'] as $item)

                            <div class="col-md-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">
                                            <img src="{{ asset($item['image']) }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}" title=""> {{ $item['title'] }}</a></h4>
                                        <p>{{ $item['description'] }}</p>
                                        <small><a href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category['slug']]) }}" title="">{{ $category['title'] }}</a></small>
                                        <small><a href="javascript:" title="">{{ ConvertDatabaseTimeToDMY($item['created_at']) }}</a> </small> <small><a href="javascript:" title="">Tác giả: {{ $item['created_by'] }}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                            @endforeach

                        </div><!-- end row -->
                        <div class="row">
                            {{ $category['news']->render('vendor.pagination.bootstrap-4') }}
                        </div>
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
