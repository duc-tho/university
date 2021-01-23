@extends('client.layout.layout_kkt.index')

@section('title', 'Khoa Kinh Tế - Thông Tin Giáo Viên')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(/dist/layout/layout_kkt/images/page-banner-3.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Teachers</h2>
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

<section id="teachers-singel" class="pt-70 pb-120 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8">
                <div class="teachers-left mt-50">
                    <div class="hero">
                        <img src="{{ asset('dist/layout/layout_kkt/images/teachers/t-1.jpg') }}" alt="Teachers">
                    </div>
                    <div class="name">
                        <h6>Hoàng Hoa Văn</h6>
                        <span>Giảng Viên</span>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="javascript:"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-linkedin-square"></i></a></li>
                        </ul>
                    </div>
                    <div class="description">
                        <p>Tôi luôn tận tâm cố gắng để truyền đạt mọi kiến thức cho sinh viên để sinh viên có thể hiểu được hết sự cống hiến của các giảng viên chúng tôi</p>
                    </div>
                </div> <!-- teachers left -->
            </div>
            <div class="col-lg-8">
                <div class="teachers-right mt-50">
                    <ul class="nav nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Thông Tin</a>
                        </li>
                        
                    </ul> <!-- nav -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <div class="dashboard-cont">
                                <div class="singel-dashboard pt-40">
                                    <h5>Họ tên : Hoàng Hoa Văn</h5>
                                    <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                                </div> <!-- singel dashboard -->
                                <div class="singel-dashboard pt-40">
                                    <h5>Acchivments</h5>
                                    <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                                </div> <!-- singel dashboard -->
                                <div class="singel-dashboard pt-40">
                                    <h5>My Objective</h5>
                                    <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                                </div> <!-- singel dashboard -->
                            </div> <!-- dashboard cont -->
                        </div>
                        
                    </div> <!-- tab content -->
                </div> <!-- teachers right -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== EVENTS PART ENDS ======-->
@endsection
