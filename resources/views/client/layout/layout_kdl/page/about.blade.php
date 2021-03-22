@extends('client.layout.layout_kdl.index')
@section('title','Giới Thiệu')
@section('main')
<section class="w3l-about-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Giới Thiệu {{$faculty->name}}</h2>
            <p><a href="#">Trang Chủ</a> &nbsp; / &nbsp; Giới thiệu</p>
        </div>
    </div>
</section>
<!-- content-with-photo4 block -->
<!-- content-with-photo4 block -->
<section class="w3l-content-with-photo-4">
    <div id="content-with-photo4-block" class="pt-5">
        <div class="container py-md-5">
            <div class="cwp4-two row">
                @foreach($about as $item)
                <div class="cwp4-text col-lg-6">
                    <h3>{{ $item->title}}</h3>
                    <p>{!! $item->intro!!}</p>
                </div>
                {{-- <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                    <img src="{{asset($item->image)}}" class="img-fluid" alt="" />
                </div> --}}
                @endforeach
            </div>
        </div>
    </div>
</section>


 @stop
