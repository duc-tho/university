@extends('client.layout.default.index')

@section('title', 'Liên hệ')

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
                <h2><i class="fa fa-phone bg-green"></i> Liên hệ <small class="hidden-xs-down hidden-sm-down">06/01/2021</small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Liên Hệ</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<div class="container" style="padding-bottom: 4rem;">
    <div class="row">
        <div class="card w-100">
            <div class="card-header py-4">
                <div class="col-lg-12">
                    <h2><strong>SAIGONTU - BQLĐATL Trường Đại học Du lịch Sài Gòn</strong></h2>
                    Cơ sở: <b>70 Đường Tân Thới Nhất 8 - Khu phố 5 - P.Tân Thới Nhất - Q.12 - Tp.HCM.</b>
                    <br>ĐT: <b>(028)38.831.793 - (028)38.831.796 </b>
                    <br>Email: <b>info@daihocdulich.edu.vn</b>
                    <br>Website <a href="#">https://daihocdulich.edu.vn</a>
                    <br>Hotline: <b>0914.411.012</b>
                </div>
            </div>
            <div class="card-body" style="height: 80vh;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7605346937735!2d106.60891711411696!3d10.829628961172398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bcecbda1797%3A0xad6d40a324baae76!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIFbEg24gaMOzYSBOZ2jhu4cgdGh14bqtdCB2w6AgRHUgbOG7i2NoIFPDoGkgR8Oybg!5e0!3m2!1svi!2s!4v1609376289562!5m2!1svi!2s" style="border: 0; width: 100%; height: 100%;" allowfullscreen></iframe>
            </div>
            <div class="card-footer text-muted py-4">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-wrapper">
                            <h3><i class="fa fa-paper-plane"></i> Liên hệ ngay</h3>
                            <div class="row">
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="Họ và tên">
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="Số Điện Thoại">
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Tiêu đề">
                            <textarea class="form-control" placeholder="Nội dung"></textarea>
                            <button type="submit" class="btn btn-primary float-right">Gửi <i class="fa fa-envelope-open-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
