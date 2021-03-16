@extends('client.layout.layout_kkt.index')

@section('title', 'Khóa học khoa Kinh Tế')

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
                        <h2>NGÀNH {{ $specialized->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                                <li class="breadcrumb-item">Đào Tạo</li>
                                <li class="breadcrumb-item active" aria-current="page">Ngành {{ $specialized->name }}</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== COURSES PART START ======-->

    <section id="courses-part" class="pt-120 pb-120 gray-bg">
        <div class="container">
            {{-- <div class="row">
            <div class="col-lg-12">
                <div class="courses-top-search">
                    <ul class="nav float-left" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="courses-grid-tab" data-toggle="tab" href="#courses-grid" role="tab" aria-controls="courses-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
                        </li>
                        <li class="nav-item">
                            <a id="courses-list-tab" data-toggle="tab" href="#courses-list" role="tab" aria-controls="courses-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                        </li>
                        <li class="nav-item">Showning 4 0f 24 Results</li>
                    </ul> <!-- nav -->

                    <div class="courses-search float-right">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div> <!-- courses search -->
                </div> <!-- courses top search -->
            </div>
        </div> <!-- row --> --}}
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    {{-- <div class="image">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/course/cu-1.jpg') }}" alt="Course">
                                </div>
                                <div class="price">
                                    <span>Free</span>
                                </div> --}}
                                </div>
                                <div class="cont">
                                    <a href="{{-- route('khoakinhte-chitietkhoahoc') --}}">
                                        <h4>Ngành {{ $specialized->name }}</h4>
                                        <p>Ngày Đăng : {{ $specialized->created_by }}</p>
                                    </a>
                                    <div>
                                        <p>
                                            {!! $specialized->intro !!}
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="singel-course mt-30">
                                <img src="{{ asset($specialized->image) }}" width="100%" height="auto" alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div>

        </div> <!-- tab content -->
        <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== COURSES PART ENDS ======-->
@endsection
