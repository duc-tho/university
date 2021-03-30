@extends('client.layout.layout_kdl.index')
@section('title', 'Khoa Du Lịch')
@section('main')
@php
$slide_arr = [];
foreach ($slide as $key => $item) {
array_push($slide_arr, '"'.asset($item['link']).'"');
}

$slide_str = join(', ', $slide_arr);
$slide_str = str_replace('\\', '/', $slide_str);
@endphp
    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                @foreach ($slide as $item)
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2" style="background-image: url(../{{ $item->link }})">
                            <div class="banner-info">
                                <div class="container">
                                    {{-- <div class="banner-info-bg mx-auto text-center">
                                        <h5>KHOA DU LỊCH ĐỒNG HÀNH CÙNG SINH VIÊN</h5>
                                        <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4"
                                            href="{{ route('gioi-thieu', [$faculty['slug']]) }}">Tìm Hiểu</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                @endforeach
            </div>
        </div>

        </div>
    </section>


    <section class="w3l-feature-3" id="features">
        <div class="grid top-bottom mb-lg-5 pb-lg-5">
            <div class="container">
                <div id="owl-example1" class="owl-carousel">
                    @foreach ($all_specialized as $item)
                        <div class="item">
                            <div class="itemC">
                                <div class="three-grids-columns">
                                    <span class="{{ $item->icons }}" id="faicon" ></span>
                                    <h4>{{ $item->name }}</h4>
                                    <p class="text-compact">{!! $item->intro_summary !!}
                                    </p>
                                    <a href="{{ route('dao-tao-chi-tiet', [$faculty['slug'], $item->slug]) }}"
                                        class="btn btn-secondary btn-theme3 mt-4">Đọc thêm </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- features-4 block -->
    <section class="w3l-index1" id="about">
        <div class="calltoaction-20  py-5 editContent">
            <div class="container py-md-3">

                <div class="calltoaction-20-content row">
                    <div class="column center-align-self col-lg-6 pr-lg-5">
                        <h5 class="editContent">{{ $faculty['name'] }}</h5>
                        <p class="more-gap editContent">{!! $faculty['intro_summary'] !!}</p>
                        <a class="btn btn-secondary btn-theme2 mt-3" href="{{ route('gioi-thieu', [$faculty['slug']]) }}"> Đọc Thêm</a>
                    </div>
                    <div class="column ccont-left col-lg-6">
                        <img src="{{ asset($faculty['image'])}}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-4 block -->
    <section class="services-12" id="course">
        <div class="form-12-content">
            <div class="container">
                <div class="grid grid-column-2 ">

                    <div class="column1">
                        <div class="heading">
                            <h3 class="head text-white"></h3>
                            <h4>{{$slogan_main_travel}}</h4>
                            <p class="my-3 text-white">
                                {{$slogan_main_travel_2}}
                            </p>
                        </div>
                    </div>
                    <div class="column2">
                        <a class="btn btn-secondary btn-theme2 mt-3" href="{{ route('tuyensinh') }}"> Đăng Kí Tuyển
                            Sinh</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w3l-price-2" id="news">
        <div class="price-main py-5">
            <div class="container py-md-3">
                <div class="pricing-style-w3ls row py-md-5">
                    {{-- Tin Tức --}}
                    @foreach ($category_news as $key => $category)
                    <div class="pricing-chart col-lg-6">
                        <h3 class="">{{ $category['title'] }}</h3>
                        <div class="tatest-top mt-md-5 mt-4">
                            @foreach ($category['news'] as $key => $item)
                                <div class="price-box btn-layout bt6">
                                    <div class="grid grid-column-2">
                                        <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">
                                        <div class="column-6">
                                            <img src="{{ asset($item['image']) }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="column1">
                                            <div class="job-info">
                                                <h6 class="pricehead"><a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">{{ $item['title']  }} </a></h6>

                                                <p><a
                                                    href="{{ route('tin-tuc-danh-muc', [$faculty['slug'],$category['slug']]) }}">{{ $category['title'] }} </a>,
                                                    <span>{{ $item->event_time }}</span>
                                                </p>
                                                <p>{!! $item->description !!}
                                                </p>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-right mt-4">
                            <a class="btn btn-secondary btn-theme2" href="{{route('tin-tuc-danh-muc', [$faculty['slug'],$category['slug']])}}"> Xem tất cả</a>
                        </div>
                    </div>
                    @endforeach

                    {{-- //Thông Báo --}}
                    @foreach ($category_notification as $key => $category)
                    <div class="pricing-chart col-lg-6">
                        <h3 class="">{{ $category['title'] }}</h3>
                        <div class="tatest-top mt-md-5 mt-4">
                            @foreach ($category['news'] as $key => $item)
                                <div class="price-box btn-layout bt6">
                                    <div class="grid grid-column-12">
                                        <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">
                                        <div class="column-6">
                                            <div class="job-info">
                                                <h6 class="pricehead"><a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">{{ $item['title']  }} </a></h6>
                                                <p><a
                                                    href="{{ route('tin-tuc', [$faculty['slug']]) }}">{{ $category['title'] }}</a> ,
                                                <span>{{ $item->event_time }}</span>
                                            </p>
                                                <p>{!!$item->description !!}
                                                </p>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-right mt-4">
                            <a class="btn btn-secondary btn-theme2" href="{{route('tin-tuc', [$faculty['slug']])}}"> Xem tất cả</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="w3l-index2">
        <div class="main-w3 py-5" id="stats">
            <div class="container py-lg-3">
                <div class="row main-cont-wthree-fea">
                    @foreach ($intro_statistic as $item)
                        <div class="col-lg-3 col-sm-6">
                            <div class="grids-speci1">
                                <h3 class="title-spe">{{ $item->value }}</h3>
                                <p>{{ $item->name }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="w3l-customers-4" id="testimonials">
        <div id="customers4-block" class="py-5">
            <div class="container py-md-3">
                <div class="section-title align-center row">
                    <div class="item-top col-md-6 pr-md-5">
                        <div class="heading">
                            <h3 class="head text-white">
                                {{$slogan_intro_travel}}
                            </h3>
                            <p class="my-3 head text-white">
                                {{$slogan_intro_travel_2}}
                            </p>

                        </div>
                    </div>
                    <div class="item-top col-md-6 mt-md-0 mt-4">
                        <div class="item text-center">
                            @foreach ($student as $item)
                                <div class="imgTitle">
                                    <img src="{{ asset($item['image']) }}" class="img-responsive" alt="" >
                                </div>
                                <h6 class="mt-3">{{ $item->name }}</h6>
                                <p class="">{!! $item->intro !!}</p>
                                <p> {!! $item->evaluate !!}</p>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <br>
    <div class="student w3layouts-agileinfo">
        <div class="container">
            <h3 class="ctdn">Cộng Tác Doanh Nghiệp</h3>
            <br>
            <div id="owl-congtac" class="owl-carousel owl-theme" data-interval="50" data-delay="100" data-ride="carousel">
                @foreach ($collab_logo as $item)
                    <img src="{{ asset($item['image_url']) }}" style="max-width: 500px; width: 170px; max-height: 500px; height: auto" alt="{{ $item['title'] }}">
                @endforeach
            </div>
        </div>
    </div>
    <br>


@stop
