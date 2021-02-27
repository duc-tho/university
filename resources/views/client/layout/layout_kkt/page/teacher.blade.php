@extends('client.layout.layout_kkt.index')

@section('title', 'Khoa Kinh Tế - Danh Sách Giáo Viên')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(/dist/layout/layout_kkt/images/page-banner-3.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Giảng Viên</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Giảng Viên</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== TEACHERS PART START ======-->

<section id="teachers-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{asset('dist/layout/layout_kkt/images/teachers/t-1.jpg') }}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                            <h6>Hoàng Hoa Văn</h6>
                        </a>
                        <span>Giảng Viên</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{ asset('dist/layout/layout_kkt/images/teachers/t-2.jpg') }}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                            <h6>Lê Khôi</h6>
                        </a>
                        <span>Giảng Viên</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{ asset('dist/layout/layout_kkt/images/teachers/t-3.jpg') }}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                            <h6>Hoàng Hoa Văn</h6>
                        </a>
                        <span>Giảng Viên</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{ asset('dist/layout/layout_kkt/images/teachers/t-4.jpg') }}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                            <h6>Hoàng Hoa Văn</h6>
                        </a>
                        <span>Giảng Viên</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{ asset('dist/layout/layout_kkt/images/teachers/t-5.jpg') }}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                            <h6>Hoàng Hoa Văn</h6>
                        </a>
                        <span>Giảng Viên</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{ asset('dist/layout/layout_kkt/images/teachers/t-6.jpg') }}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                            <h6>Hoàng Hoa Văn</h6>
                        </a>
                        <span>Giảng Viên</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{ asset('dist/layout/layout_kkt/images/teachers/t-7.jpg') }}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                            <h6>Hoàng Hoa Văn</h6>
                        </a>
                        <span>Giảng Viên</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="{{ asset('dist/layout/layout_kkt/images/teachers/t-8.jpg') }}" alt="Teachers">
                    </div>
                    <div class="cont">
                        <a href="{{  route('khoakinhte-thongtingiaovien') }}">
                            <h6>Hoàng Hoa Văn</h6>
                        </a>
                        <span>Giảng Viên</span>
                    </div>
                </div> <!-- singel teachers -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <nav class="courses-pagination mt-50">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a href="javascript:" aria-label="Previous">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="active" href="javascript:">1</a></li>
                        <li class="page-item"><a href="javascript:">2</a></li>
                        <li class="page-item"><a href="javascript:">3</a></li>
                        <li class="page-item">
                            <a href="javascript:" aria-label="Next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav> <!-- courses pagination -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEACHERS PART ENDS ======-->
@endsection
