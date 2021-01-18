@extends('client.layout.default.index')

@section('title', 'Giới Thiệu')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-address-card bg-pink"></i> Giới thiệu <small class="hidden-xs-down hidden-sm-down">06/01/2021</small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Giới thiệu</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<div class="container" style="padding-bottom: 4rem;">
    <div class="row">
        <div class="col-9 mx-auto">
            <p class="text-center h5 py-5">Trường Cao đẳng Văn hoá Nghệ thuật và Du lịch Sài Gòn (SAIGONACT) được thành lập năm 2006 và được Thủ tướng đồng ý chủ trương thành lập trường Đại học Du lịch Sài Gòn (SAIGONTU) năm 2017. Năm 2020, trường quyết tâm hoàn tất mọi điều kiện để trường Đại học Du lịch Sài Gòn có quyết định chính thức và đi vào hoạt động.</p>
        </div>
    </div>
    <div class="row justify-content-center" style="row-gap: 2rem;">
        <div class="col-lg-6">
            <video controls class="img-responsive" autoplay muted style="height: 284px; width: 100%;">
                <source src="{{ asset('dist/layout/layout_home/video/Intro_SaiGonACT.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://daihocdulich.edu.vn/upload/news/2019/03/28/qui-dat-va-co-so-vat-chat-truong-cao-dang-van-hoa-nghe-thuat-va-du-lich-sai-gon-saigonact-thumbnail-55190.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center pt-3">Tổng quan</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://daihocdulich.edu.vn/upload/news/2019/03/28/qui-dat-va-co-so-vat-chat-truong-cao-dang-van-hoa-nghe-thuat-va-du-lich-sai-gon-saigonact-thumbnail-55190.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center pt-3">Cơ sở vật chất</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://daihocdulich.edu.vn/upload/news/2019/03/28/qui-dat-va-co-so-vat-chat-truong-cao-dang-van-hoa-nghe-thuat-va-du-lich-sai-gon-saigonact-thumbnail-55190.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center pt-3">Sứ mệnh tầm nhìn</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://daihocdulich.edu.vn/upload/news/2019/03/28/qui-dat-va-co-so-vat-chat-truong-cao-dang-van-hoa-nghe-thuat-va-du-lich-sai-gon-saigonact-thumbnail-55190.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center pt-3">Sơ đồ tổ chức</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://daihocdulich.edu.vn/upload/news/2019/03/28/qui-dat-va-co-so-vat-chat-truong-cao-dang-van-hoa-nghe-thuat-va-du-lich-sai-gon-saigonact-thumbnail-55190.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center pt-3">Đội ngũ giảng viên</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <a href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="http://daihocdulich.edu.vn/upload/news/2019/03/28/qui-dat-va-co-so-vat-chat-truong-cao-dang-van-hoa-nghe-thuat-va-du-lich-sai-gon-saigonact-thumbnail-55190.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center pt-3">Lãnh đạo</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row my-5">
        <h2 class="mb-4 text-center w-100">Các đánh giá về trường</h2>
        <div id="owl-feelings" class="owl-carousel col-12">
            <div class="row">
                <div class="col-12 col-sm-3 col-lg-5" style="position: relative;">
                    <img src="http://placekitten.com/g/200/117" alt="">
                </div>
                <div class="col-12 col-sm-9 col-lg-7">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore laudantium corrupti libero, totam qui cumque repudiandae enim! Consequatur laudantium sapiente, saepe soluta molestias eos minima optio ut?</p>

                    <h4>Author 1</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
