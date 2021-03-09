@extends('client.layout.default.index')

@section('title', 'Tin tức')

@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
@endsection

@section('main')
    @include('client.layout.default.components.header')

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div
                        class="ndt__section--title d-flex justify-content-between section-title">
                        <h3 class="color-aqua">
                            <a href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category[0]['slug']]) }}"
                                title="{{ $category[0]['title'] }}">{{ $category[0]['title'] }}</a>
                        </h3>
                        <a class="font-weight-bold"
                            href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category[0]['slug']]) }}">Xem
                            thêm</a>
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @foreach ($category[0]['news'] as $key => $item)
                                @if ($key < 2)
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category[0]['slug'], $item['slug']]) }}"
                                                title="">
                                                <img src="{{ asset($item['image']) }}"
                                                    alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta big-meta">
                                            <h4>
                                                <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category[0]['slug'], $item['slug']]) }}"
                                                    title="{{ $item['title'] }}">
                                                    {{ $item['title'] }}
                                                </a>
                                            </h4>
                                            <p>{{ $item['description'] }}</p>
                                            <small>
                                                <a href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category[0]['slug']]) }}"
                                                    title="{{ $category[0]['title'] }}">
                                                    {{ $category[0]['title'] }}
                                                </a>
                                            </small>
                                            <small>
                                                <a href="javascript:">Đăng ngày
                                                    {{ ConvertDatabaseTimeToDMY($item['created_at']) }}
                                                </a>
                                            </small>
                                            <small>
                                                <a href="javascript:">bởi
                                                    {{ $item['created_by'] ?? '?' }}
                                                </a>
                                            </small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">
                                @endif
                            @endforeach
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div
                        class="ndt__section--title d-flex justify-content-between section-title">
                        <h3 class="color-pink">
                            <a
                                href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category[1]['slug']]) }}"
                                title="{{ $category[1]['title'] }}">
                                {{ $category[1]['title'] }}
                            </a>
                        </h3>
                        <a class="font-weight-bold"
                            href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category[1]['slug']]) }}">Xem
                            thêm</a>
                    </div><!-- end title -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            @foreach ($category[1]['news'] as $key => $item)
                                @if ($key < 2)
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category[1]['slug'], $item['slug']]) }}"
                                                title="{{ $item['title'] }}">
                                                <img src="{{ asset($item['image']) }}"
                                                    alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category[1]['slug'], $item['slug']]) }}"
                                                    title="{{ $item['title'] }}">{{ $item['title'] }}</a>
                                            </h4>
                                            <p>{{ $item['description'] }}</p>
                                            <small><a
                                                    href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category[1]['slug']]) }}"
                                                    title="">{{ $category[1]['title'] }}</a></small>
                                            <small><a
                                                    href="javascript:"
                                                    title="">{{ $item['created_by'] ?? '?' }}</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">
                                @endif
                            @endforeach
                        </div><!-- end col -->

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            @foreach ($category[1]['news'] as $key => $item)
                                @if ($key > 1 && $key < 4)
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category[1]['slug'], $item['slug']]) }}"
                                                title="{{ $item['title'] }}">
                                                <img src="{{ asset($item['image']) }}"
                                                    alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category[1]['slug'], $item['slug']]) }}"
                                                    title="{{ $item['title'] }}">{{ $item['title'] }}</a>
                                            </h4>
                                            <p>{{ $item['description'] }}</p>
                                            <small><a
                                                    href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category[1]['slug']]) }}"
                                                    title="">{{ $category[1]['title'] }}</a></small>
                                            <small><a
                                                    href="javascript:"
                                                    title="">{{ $item['created_by'] ?? '?' }}</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">
                                @endif
                            @endforeach
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            <!-- #region Baner -->
            {{-- <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="{{ asset('dist/layout/default/upload/banner_01.jpg') }}"
                                alt="" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end col -->
            </div><!-- end row --> --}}
            <!-- #endregion Baner -->

            {{-- <hr class="invis1"> --}}

            <div class="row">
                <div class="col-lg-9">
                    @foreach ($category as $key => $item)
                        @if ($key > 1)
                            <div class="blog-list clearfix">
                                <div
                                    class="ndt__section--title section-title d-flex justify-content-between">
                                    <h3 class="color-green"><a
                                            href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $item['slug']]) }}"
                                            title="{{ $item['title'] }}">{{ $item['title'] }}</a>
                                    </h3>
                                    <a class="font-weight-bold"
                                        href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $item['slug']]) }}">Xem
                                        thêm</a>
                                </div><!-- end title -->

                                @foreach ($item['news'] as $key => $news_item)
                                    <div class="blog-box row">
                                        <div class="col-md-4">
                                            <div class="post-media">
                                                <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $item['slug'], $news_item['slug']]) }}"
                                                    title="{{ $news_item['title'] }}">
                                                    <img src="{{ asset($news_item['image']) }}"
                                                        alt="{{ $news_item['title'] }}"
                                                        class="img-fluid">
                                                    <div class="hovereffect">
                                                    </div>
                                                </a>
                                            </div><!-- end media -->
                                        </div><!-- end col -->

                                        <div
                                            class="blog-meta big-meta col-md-8">
                                            <h4>
                                                <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $item['slug'], $news_item['slug']]) }}"
                                                    title="">
                                                    {{ $news_item['title'] }}
                                                </a>
                                            </h4>
                                            <p>
                                                {{ $news_item['description'] }}
                                            </p>
                                            <small>
                                                <a
                                                    href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $item['slug']]) }}"
                                                    title="">
                                                    {{ $item['title'] }}
                                                </a>
                                            </small>
                                            <small><a
                                                    href="javascript:"
                                                    title="">Đăng ngày
                                                    {{ ConvertDatabaseTimeToDMY($news_item['created_at']) }}</a></small>
                                            <small><a href="javascript:"
                                                    title="">bởi
                                                    {{ $news_item['created_by'] ?? '?' }}</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis" />
                                @endforeach
                            </div><!-- end blog-list -->

                            <hr class="invis">
                        @endif
                    @endforeach
                </div><!-- end col -->

                <div class="col-lg-3">
                    <div
                        class="ndt__section--title d-flex justify-content-between section-title">
                        <h3 class="color-yellow"><a
                                href="{{ route('hinh-anh', [$faculty['slug']]) }}"
                                title="">Hình ảnh</a></h3>
                        <a class="font-weight-bold"
                            href="{{ route('hinh-anh', [$faculty['slug']]) }}">Xem
                            thêm</a>
                    </div><!-- end title -->

                    @foreach ($image_category as $item)
                        @foreach ($item['image_group'] as $image_group)
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('hinh-anh-chi-tiet', [$faculty['slug'], $image_group['slug']]) }}"
                                        title="">
                                        <img src="{{ asset($image_group['image_preview']) }}"
                                            alt="
                                                                                        {{ $image_group['title'] }}"
                                            class="img-fluid">
                                        <div class="hovereffect">
                                            <span class="videohover"></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta mb-3">
                                    <h4 class="pt-1 pb-0">
                                        <a href="{{ route('hinh-anh-chi-tiet', [$faculty['slug'], $image_group['slug']]) }}"
                                            title="">{{ $image_group['title'] }}</a>
                                    </h4>
                                    <small>
                                        <a
                                            href="{{ route('hinh-anh', [$faculty['slug'], 'danh-muc' => $item['slug']]) }}">
                                            {{ $item['title'] }}
                                        </a>
                                    </small>
                                    <small>
                                        <a href="javascript:">
                                            {{ ConvertDatabaseTimeToDMY($image_group['created_at']) }}
                                        </a>
                                    </small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        @endforeach
                    @endforeach

                    <hr class="invis">

                    {{-- <div
                        class="ndt__section--title d-flex justify-content-between section-title">
                        <h3 class="color-pink"><a
                                href="{{ route('video', [$faculty['slug']]) }}"
                                title="">Video</a></h3>
                        <a class="font-weight-bold"
                            href="{{ route('video', [$faculty['slug']]) }}">Xem
                            thêm</a>
                    </div><!-- end title -->

                    @foreach ($image_category as $item)
                        @foreach ($item['image_group'] as $image_group)
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="{{ route('hinh-anh-chi-tiet', [$faculty['slug'], $image_group['slug']]) }}"
                                        title="">
                                        <img src="{{ asset($image_group['image_preview']) }}"
                                            alt="
                                                                                        {{ $image_group['title'] }}"
                                            class="img-fluid">
                                        <div class="hovereffect">
                                            <span class="videohover"></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta mb-3">
                                    <h4 class="pt-1 pb-0">
                                        <a href="{{ route('hinh-anh-chi-tiet', [$faculty['slug'], $image_group['slug']]) }}"
                                            title="">{{ $image_group['title'] }}</a>
                                    </h4>
                                    <small>
                                        <a
                                            href="{{ route('hinh-anh', [$faculty['slug'], 'danh-muc' => $item['slug']]) }}">
                                            {{ $item['title'] }}
                                        </a>
                                    </small>
                                    <small>
                                        <a href="javascript:">
                                            {{ ConvertDatabaseTimeToDMY($image_group['created_at']) }}
                                        </a>
                                    </small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        @endforeach
                    @endforeach

                    <hr class="invis"> --}}
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            {{-- <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="{{ asset('dist/layout/default/upload/banner_02.jpg') }}"
                                alt="" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end col -->
            </div><!-- end row --> --}}
        </div><!-- end container -->
    </section>
@endsection
