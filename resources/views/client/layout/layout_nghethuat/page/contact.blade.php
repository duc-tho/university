@extends('client.layout.layout_nghethuat.index')

@section('title', 'Liên hệ')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('head')
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('dist/layout/layout_nghethuat/css/csscontact/style.css') }}">
@endsection

@section('main')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <a href="index.html" class="responsive"><img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/logo.png') }}"></a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">LIÊN HỆ CHÚNG TÔI</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters mb-5">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Liên hệ</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">Lời nhắn của bạn đã gửi!</div>
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">HỌ TÊN</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập họ tên...">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">EMAIL</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email...">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">TIÊU ĐỀ</label>
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Nhập tiêu đề...">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">LỜI NHẮN</label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Nhập lời nhắn..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Gửi" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6894657581147!2d106.61180311433719!3d10.835059461072627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bccf94e353d%3A0xfa8ac0e6f1ed4de9!2zNzAgxJDGsOG7nW5nIFTDom4gVGjhu5tpIE5o4bqldCA4LCBUw6JuIFRo4bubaSBOaOG6pXQsIFF14bqtbiAxMiwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1609298887970!5m2!1svi!2s" width="100%" height="100%" frameborder="0" allowfullscreen=""
                                    aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="dbox w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="text">
                                <p class="tittle">Địa chỉ </p>
                                <p>53/1 Phan Văn Hớn, Đường Tân Thới Nhất 8, Khu phố 5, P.Tân Thới Nhất, Q.12, Tp.HCM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dbox w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="text">
                                <p class="tittle">Điện thoại</p>
                                <p>(028)628 1462</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dbox w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-paper-plane"></span>
                            </div>
                            <div class="text">
                                <p class="tittle">Email</p>
                                <p>khoanghethuat@daihocdulich.edu.vn</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dbox w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-globe"></span>
                            </div>
                            <div class="text">
                                <p class="tittle">Website</p>
                                <p> http://khoanghethuat.daihocdulich.edu.vn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('dist/layout/layout_nghethuat/js/jscontact/jquery.min.js') }}"></script>
<script src="{{ asset('dist/layout/layout_nghethuat/js/jscontact/popper.js') }}"></script>
<script src="{{ asset('dist/layout/layout_nghethuat/js/jscontact/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/layout/layout_nghethuat/js/jscontact/jquery.validate.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('dist/layout/layout_nghethuat/js/jscontact/google-map.js') }}"></script>
<script src="{{ asset('dist/layout/layout_nghethuat/js/jscontact/main.js') }}"></script>
@endsection
