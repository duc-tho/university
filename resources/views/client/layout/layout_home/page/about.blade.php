@extends('client.layout.default.index')

@section('title', 'Giới Thiệu')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
@include('client.layout.default.components.header')
<div class="page-title wb">
    <div class="container">
        <div class="row mx-auto" style="width: 70%">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-address-card bg-pink"></i> Giới thiệu</h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down d-flex justify-content-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('trang-chu', ['trang-chu']) }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Giới thiệu</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<div class="container" style="padding-bottom: 4rem;">
    <div class="row">
        <div class="col-9 mx-auto">
            {!! $intro_short !!}
        </div>
    </div>
    <div class="row justify-content-center" style="row-gap: 2rem;">
        <div class="col-lg-6">
            <video controls class="img-responsive" autoplay muted style="height: 284px; width: 100%;">
                <source src="{{ asset($intro_video) }}" type="video/mp4">
                {{-- Your browser does not support the video tag. --}}
            </video>
        </div>
        {{-- @foreach ($about as $item)
        <div class="col-md-6 col-lg-4">
            <a href="{{ $item['link'] }}">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" style="height: 228px;">
                    <div class="card-body py-0">
                        <h4 class="card-title text-center pt-3">{{ $item['title'] }}</h4>
                    </div>
                </div>
            </a>
        </div>
        @endforeach --}}
    </div>

    {{-- <div class="row my-5">
        <h2 class="mb-4 text-center w-100">Các đánh giá về trường</h2>
        <div id="owl-feelings" class="owl-carousel col-12">
            <div class="row">
                <div class="col-12 col-sm-3 col-lg-5" style="position: relative;">
                    <img src="http://placekitten.com/g/200/117" alt="">
                </div>
                <div class="col-12 col-sm-9 col-lg-7">
                    <p></p>

                    <h4>Author 1</h4>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
