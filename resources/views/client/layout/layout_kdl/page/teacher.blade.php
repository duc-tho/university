@extends('client.layout.layout_kdl.index')
@section('title', 'Ngành QTKS')
@section('main')
    <section class="w3l-about-breadcrum">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <h2>{{ $specialized->name }}</h2>
                <p><a href="#">Trang Chủ</a> &nbsp; / &nbsp; Đào Tạo &nbsp; / &nbsp; {{ $specialized->name }}</p>
            </div>
        </div>
    </section>
    <!-- content-with-photo4 block -->
    <section class="w3l-content-with-photo-4">
        <div id="content-with-photo4-block" class="pt-5">
            <div class="container py-md-5">
                <div class="cwp4-two row">
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                        <img src="{{ asset($specialized->image) }}"
                            width="100%" height="auto" class="img-fluid" alt="" />
                        <hr>
                        <img src=" {{ asset($specialized->image2) }}"
                            width="100%" height="auto" class="img-fluid" alt="" />
                    </div>
                    <div class="cwp4-text col-lg-6">
                                <h2 id="titleqtks">{{ $specialized->name }}</h2>
                                <p id="des"> {!! $specialized->intro !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="teams text-center py-5" id="team">
        <div class="container py-xl-5 py-lg-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Giảng Viên Của Khoa</h3>
                <p class="my-3 head">
                    {{$slogan_teacher_educate}}
                </p>
            </div>
            <div class="row inner-sec-w3ls-w3pvt-aminfo pt-5 mt-3">
                @foreach ($teacher as $item)
                @if ($item->faculty_id==3)
                <div class="col-lg-3 col-sm-6">
                    <div class="team-grid text-center">
                        <div class="team-img">
                            <a href="">
                                <img class="img-fluid rounded"
                                src=" {{ asset($item->image) }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
    </section>
@stop
