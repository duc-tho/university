@extends('client.layout.layout_kdl.index')
@section('title', 'Tin Tức')
@section('main')
    <section class="w3l-service-breadcrum">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <h2>Tin tức Khoa Du Lịch</h2>
                <p><a href="{{ route('trang-chu', ['khoa-du-lich']) }}">Trang Chủ</a> &nbsp; / &nbsp; Tin Tức</p>
                    </div>
                </div>
    </section>
    <section class=" w3l-features-8">
        <div class="features py-5" id="services">
            <div class="container py-md-3">
                @foreach ($news as $key => $category)
                <div class="fea-gd-vv text-center row">
                    @foreach ($category['news'] as $item)
                        <div class="float-top col-lg-4 col-md-6">
                            <a href="{{route('tin-tuc-chi-tiet', [$faculty['slug'], $item['slug'], $item['slug']])}}"><img
                                    src="{{ asset('dist/layout/layout_khoadulich/images/hoc-ngan-han-tai-saigonact-nhieu-lua-chon-cho-nguoi-hoc-thumbnail-36492.jpg') }}"
                                    class="img-responsive" alt=""></a>
                            <div class="float-lt feature-gd">
                                <h3><a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">{{$item['title']}}</a> </h3>
                                    <h6><a href="{{ route('tin-tuc', [$faculty['slug']]) }}"> <span id="sernew">{{ $category['title'] }} , </span></a>{{ ConvertDatabaseTimeToDMY($item['created_at']) }}</h6>
                                        <p> {{$item->description}} </p>
                            </div>
                            <br>
                        </div>
                        @endforeach
                </div>
                @endforeach
                <br>
            </div>
        </div>
    </section>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                {{ $category['news']->render('vendor.pagination.bootstrap-4') }}
  
            </div>
        </div>
    </div>
    <br>
@stop
