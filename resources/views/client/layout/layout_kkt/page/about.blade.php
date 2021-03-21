@extends('client.layout.layout_kkt.index')
@section('title', 'Giới thiệu khoa Kinh Tế')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
@endsection
@section('main')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(/dist/layout/layout_kkt/images/page-banner-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Giới Thiệu {{ $faculty->name }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{-- route('khoakinhte-khoahoc') --}}">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Giới Thiệu {{ $faculty->name }}</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<br><br>
    <div class="container">
        @foreach ($about as $item)
            <div class="gioithieu">{{$item->title}}</div>
            <br>
            <p class="loigioithieu">{!!$item->intro!!} </p>
                {{-- <div class="row">
                    <div class="col-sm-12">
                        <img src=" {{asset($item->image)}}" width="100%" alt="">
                    </div>
                </div> --}}
            <br><br>
        @endforeach
    </div>
@endsection
