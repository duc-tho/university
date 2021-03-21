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
                                        <p>Ngày Đăng : {{ ConvertDatabaseTimeToDMY($specialized['created_at']) }}</p>
                                    </a>
                                    <p>
                                        {!! $specialized->intro !!}
                                    </p>
                                </div>
                            </div> <!-- singel course -->
                        </div>
                        {{-- <div class="col-lg-12 col-md-12">
                            <div class="singel-course mt-30">
                                <img src="{{ asset($specialized->image) }}" width="100%" height="auto" alt="">
                            </div>
                        </div> --}}
                    </div>
                </div> <!-- row -->
            </div>

        </div> <!-- tab content -->
        <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== COURSES PART ENDS ======-->
@endsection
