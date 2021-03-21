@extends('client.layout.layout_kkt.index')

@section('title', 'Tin Tức - Thông Báo Khoa Kinh Tế')

@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
@endsection

@section('main')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
        style="background-image: url(/dist/layout/layout_kkt/images/page-banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Tin Tức - Thông Báo {{ $faculty->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('trang-chu', ['khoa-kinh-te']) }}">Trang
                                        Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tin Tức - Thông Báo</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== COURSES PART START ======-->

    <section id="courses-part" class="pt-120 pb-120 gray-bg padding-top">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    @foreach ($news as $key => $category)
                        <div class="row">
                            @foreach ($category['news'] as $item)
                            
                                <div class="col-lg-4 col-md-6">
                                  
                                    <div class="singel-course mt-30">
                                        <div class="thum">
                                            <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">
                                            <div class="image">
                                                <img src="{{ asset($item['image']) }}" alt="Course">
                                            </div>
                                            </a>
                                        </div>
                                        <div class="cont">
                                            {{-- <span>(20 Reviws)</span> --}}
                                            <a
                                                href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">
                                                <h4>{{ $item['title'] }}</h4>
                                            </a>
                                            <p> {!! $item->description !!}</p>
                                            <br>
                                            <div class="course-teacher">
                                                <div class="name">
                                                    <a href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category['slug']]) }}"><span>{{ $category['title'] }}
                                                            , </span></a>
                                                    <b>  {{ ConvertDatabaseTimeToDMY($item['created_at']) }}</b>
                                                </div>
                                                {{-- <div class="admin">
                                        <ul>
                                            <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> <!-- row -->
                    @endforeach
                </div>
            </div> <!-- tab content -->
            <br>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    @foreach ($news_notification as $key => $category)
                    <div class="row">
                        @foreach ($category['news'] as $item)
                        <div class="col-lg-12 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="cont">
                                    <a href="{{route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']])}}">
                                        <h5>{{$item['title']}}</h5>
                                    </a>
                                    <p> {!!$item->description!!}</p>
                                    <div class="course-teacher">
                                        <div class="name">
                                            <a href="{{route('tin-tuc-danh-muc', [$faculty['slug'],$category['slug']])}}"> <span >{{ $category['title']}} ,</span></a>
                                            <b>  {{ ConvertDatabaseTimeToDMY($item['created_at']) }}</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="container">
                <div class="row text-center">
                    <div class="col-sm-12 ">
                        {{ $category['news']->render('vendor.pagination.bootstrap-4') }}
                    </div>
                </div>
            </div> --}}
        </div> <!-- container -->
    </section>

    <!--====== COURSES PART ENDS ======-->
@endsection
