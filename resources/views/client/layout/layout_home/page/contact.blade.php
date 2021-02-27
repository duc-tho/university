@extends('client.layout.default.index')

@section('title', 'Liên hệ')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
@include('client.layout.default.components.header')
<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-phone bg-green"></i> Liên hệ</h2>
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
                    <h2><strong>{{ $contact_title }}</strong></h2>
                    Cơ sở: <b>{{ $address }}</b>
                    <br>ĐT: <b>{{ $phone }}</b>
                    <br>Email: <b>{{ $email }}</b>
                    <br>Website <a href="{{ $website_link }}" class="text-info font-weight-bold">{{ $website_link }}</a>
                    <br>Hotline: <b>{{ $hotline }}</b>
                </div>
            </div>
            <div class="card-body" style="height: 80vh;">
                <iframe src="{{ $google_map_link }}" style="border: 0; width: 100%; height: 100%;" allowfullscreen></iframe>
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
