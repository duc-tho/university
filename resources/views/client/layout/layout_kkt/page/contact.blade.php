@extends('client.layout.layout_kkt.index')

@section('title', 'Liên hệ khoa Kinh Tế')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(/dist/layout/layout_kkt/images/page-banner-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Liên Hệ {{$faculty->name}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('trang-chu',['khoa-kinh-te'])}}">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liên Hệ</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-from mt-30">
                    <div class="section-title">
                        <h5>Gửi Yêu Cầu</h5>
                        <h2>Thông Tin Liên Lạc</h2>
                    </div> <!-- section title -->
                    <div class="main-form pt-45">
                        <form id="contact-form" action="#" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="name" type="text" placeholder="Họ Và Tên" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="email" type="email" placeholder="Địa Chỉ Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="subject" type="text" placeholder="Tiêu Đề" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="phone" type="text" placeholder="Điện Thoại Liên Lạc" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <textarea name="messege" placeholder="Yêu Cầu" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="singel-form">
                                        <button type="submit" class="main-btn">Gửi</button>
                                    </div> <!-- singel form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- main form -->
                </div> <!--  contact from -->
            </div>
            <div class="col-lg-5">
                <div class="contact-address mt-30">
                    <ul>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>{{ $address }}</p>
                                
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>{{ $phone }}</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>{{$email}}</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        
                    </ul>
                </div> <!-- contact address -->
                <div class="map mt-30">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6894657581147!2d106.61180311433719!3d10.835059461072627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bccf94e353d%3A0xfa8ac0e6f1ed4de9!2zNzAgxJDGsOG7nW5nIFTDom4gVGjhu5tpIE5o4bqldCA4LCBUw6JuIFRo4bubaSBOaOG6pXQsIFF14bqtbiAxMiwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1609298887970!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style="border:0;"
                        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            </div> <!-- map -->
        </div>
    </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->
@endsection
