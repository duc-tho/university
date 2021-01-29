@extends('client.layout.layout_home.index')

@section('title', 'Trang chủ')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<div id="scrollzipPoint"></div>
<!--/banner-bottom-->
<div class="w3_agilits_banner_bootm">
    <div class="w3_agilits_inner_bottom">
        <div class="wthree_agile_login">
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i> (028)38.831.793</li>
                <li><i class="fa fa-envelope-o list-icon" aria-hidden="true"></i><a href="mailto:info@daihocdulich.com">info@daihocdulich.com</a></li>
            </ul>
        </div>

    </div>
</div>
<!--//banner-bottom-->
<!--/banner-section-->
<div id="demo-1" class="zs-enabled overlay-dots " data-zs-src='["http://daihocdulich.edu.vn/upload/album/59/img/20181227183634-83285.jpg","http://daihocdulich.edu.vn/upload/album/62/img/20181227184217-21754.jpg","http://daihocdulich.edu.vn/upload/album/62/img/20181227184343-36479.jpg"]' data-zs-overlay="dots" data-zs-interval="8000">
    <div class="demo-inner-content">
        <!--/header-w3l-->
        <div class="header-w3-agileits" id="home">
            <div class="inner-header-agile">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <h1><a href="index.html"><span>Đ</span>ại <span>H</span>ọc</span> <span>D</span>u <span>L</span>ịch</a></h1> -->
                        <a href="/"><img class="logo-background" src="http://daihocdulich.edu.vn/default/template/imgs/logo-02.png" alt="" height="50px"></a>
                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li data-scroll="top" class="active"><a href="javascript:">Trang chủ</a></li>
                            <li><a href="#about" class="scroll">Giới Thiệu</a></li>
                            <li><a href="#agileits-services" class="scroll">Khoa</a></li>
                            <li><a href="#portfolio" class="scroll">Khám phá</a></li>
                            <li><a href="#team" class="scroll">Tin tức</a></li>
                            <li><a href="#testimonials" class="scroll">Giảng Viên</a></li>
                            <li><a href="#contact" class="scroll">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </nav>
            </div>
        </div>
        <div class="baner-info">
            <h4>Ban quản lý đề án</h4>
            <h3><span>T</span>rường đại học <span>D</span>u lịch sài gòn</h3>
            <p>Nhân Bản - Cộng Đồng - Quốc Tế</p>
            <a class="hvr-rectangle-out w3_play_icon1" href="{{route('home-about')}}"> Xem thêm</a>
        </div>
        <!--/banner-ingo-->
    </div>
</div>
<!--/banner-section-->
<!--about -->
<div id="about" class="wthree-about w3ls-section">
    <div class="container">
        <div class="agileits-banner-grids text-center">
            <div class="banner-bottom-girds">
                <div class="agileits-banner-grid bg-w3ls-active">
                    <span class="fa fa-university banner-icon" aria-hidden="true"></span>
                    <h4> Đại Học</h4>
                    <p>Chuyên đào tạo các nghành chuyên về <span style="font-weight: bold">DU LỊCH</span> </p>
                    <a class="hvr-rectangle-out w3_play_icon1" href="#" data-toggle="modal" data-target="#myModal"> Chi tiết</a>
                </div>
                <div class="agileits-banner-grid">
                    <span class="fa fa-tags banner-icon" aria-hidden="true"></span>
                    <h4>Tuyển Sinh </h4>
                    <p>Đăng ký tuyển sinh <span style="font-weight: bold">Trực tuyến 24/7 Luôn hỗ trợ sinh viên </span></p>
                    <a class="hvr-rectangle-out w3_play_icon1" href="{{route('tuyensinh')}}"> Tuyển Sinh</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        
        <h2 class="w3ls-title">Giới thiệu</h2>
        {{-- <h5>Roin vel enim nec ipsum finibus.Duis euismod massa utab.</h5> --}}
        <br>
        <div class="col-md-7  w3ls-about-left">
            <p class="p-gioithieu">Với đặc điểm sẽ là Trường Đại học đầu tiên của Việt Nam hoạt động theo định hướng không vì lợi nhuận; khi chính thức
                được thành lập, Trường Đại học Du lịch Sài Gòn sẽ trở thành một Trường Đại học đào tạo đa ngành,
                cung cấp nguồn nhân lực chất lượng cao trong các lĩnh vực: Kinh tế, Du lịch, Ngoại ngữ, Nghệ
                thuật, Báo chí, Công nghệ Thông tin, Sức khỏe Thẩm mỹ; trong đó ngành mũi nhọn sẽ là ngành Du
                lịch. </p>
            <p class="p-gioithieu">Năm học 2019 -2020, BQLĐATL Trường Đại học Du lịch Sài Gòn vẫn tuyển sinh các ngành bậc Cao đẳng với các nhóm ngành </p>

        </div>
        <div class="col-md-5 w3ls-row">
            <div class="col-md-6 col-sm-6 wthree-about-left">
                <img src="http://daihocdulich.edu.vn/upload/news/2020/12/10/trung-tam-ngoai-ngu-tin-hoc-cua-truong-saigonact-thumbnail-54925.jpg" class="img-responsive" alt="" />
            </div>
            <div class="col-md-6 col-sm-6 w3ls-row alert wthree-about-right">
                <video controls class="img-responsive" style="max-width: 120%;" autoplay muted>
                    <source src="{{ asset('dist/layout/layout_home/video/Intro_SaiGonACT.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
        <div class="stats-info agileits-w3layouts">
            <div class="col-sm-3 col-xs-6 stats-grid">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='4' data-delay='.5' data-increment="1">4</div>
                <div class="stats-img stat2">
                    <p>Khoa</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 stats-grid">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1700' data-delay='.5' data-increment="7">735</div>
                <div class="stats-img stat2">
                    <p>Sinh viên</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 stats-grid stat1">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='15' data-delay='.5' data-increment="1">15</div>
                <div class="stats-img stat2">
                    <p>Giải Thưởng</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 stats-grid stat1">
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='8' data-delay='.5' data-increment="1">8</div>
                <div class="stats-img stat2">
                    <p>Đối Tác</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div style="display: flex; justify-content: center; padding-top: 3em;"><a class="btn1" href="{{route('home-about')}}"> Tìm hiểu thêm</a></div>
</div>
<!-- //about -->
<!--services-->
<div class="agileits-services w3ls-section" id="agileits-services">
    <div class="container">
        <h3 class="w3ls-title">Khoa </h3>
        <div class="agileits-services-row">
            <div class="col-md-3 col-sm-6 agileits-services-grids">
                <a href="{{route('khoakinhte')}}" target="_blank">
                    {{-- <span class="glyphicon glyphicon-stats effect-1" aria-hidden="true"></span> --}}
                    <img class="boder-radius-img" src="{{asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg') }}" width="40%" alt="">
                    <h4>Kinh tế</h4>
                </a>
                <p class="khoa-p">Là một trong những khoa thu hút nhiều sinh viên theo học, với bề dày đào tạo từ năm 2006.
                    Những ngành được đào tạo tại Khoa được đánh giá là thu hút nguồn nhân lực nhiều nhất hiện
                    nay.</p>
            </div>
            <div class="col-md-3 col-sm-6 agileits-services-grids">
                <a href="{{route('khoadulich')}}">
                    <img class="boder-radius-img" src="{{asset('dist/layout/layout_khoadulich/images/20180118145548-56466.jpg') }}" alt="">
                    <h4>Du lịch</h4>
                </a>
                <p class="khoa-p">Khoa Du lịch – BQLĐATL Trường Đại học Du lịch Sài Gòn ra đời mở ra cơ hội tốt hơn cho người
                    học có điều kiện học tập ở trình độ cao thuộc các chuyên ngành du lịch, góp phần nâng
                    cao chất lượng nguồn nhân lực du lịch,</p>
            </div>
            <div class="col-md-3 col-sm-6 agileits-services-grids">
                <a href="{{route('khoangoaingu')}}">
                    <img class="boder-radius-img" src="{{asset('dist/layout/layout_khoadulich/images/4.jpg') }}" width="40%" alt="">
                    <h4>Ngoại ngữ</h4>
                </a>
                <p class="khoa-p">Khoa Ngoại Ngữ – BQLĐATL Trường Đại học Du lịch Sài Gòn là tiền thân của Trường Cao đẳng
                    Văn hóa Nghệ thuật và Du lịch Sài Gòn được thành lập cùng với sự thành lập của trường 17
                    tháng 10 năm 2006.</p>
            </div>
            <div class="col-md-3 col-sm-6 agileits-services-grids">
                <a href="{{ route('khoanghethuat') }}">
                    <img class="boder-radius-img" src="{{asset('dist/layout/layout_khoadulich/images/20181227183820-68860.png') }}" width="40%" alt="">
                    <h4>Nghệ Thuật</h4>
                </a>
                <p class="khoa-p"> Khoa Nghệ thuật được thành lập từ năm 2006, gồm có 06 chuyên ngành: Đạo diễn, Diễn viên kịch nói và điện ảnh, Thanh nhạc, Thiết kế Đồ họa, Thiết kế Thời trang và Quay phim.

                </p>
            </div>
            <div class="clearfix"> </div>
        </div>
        {{-- <div style="display: flex; justify-content: center; padding-top: 3em;"><a class="btn1" href="#"> Xem thêm về các khoa</a></div> --}}
    </div>
</div>
<!--//agileits-services-->
<!--portfolio-->
<div id="portfolio" class="portfolio w3ls-section">
    <div class="container">
        <h3 class="w3ls-title">Khám phá</h3>
        <div class="sap_tabs">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item"><span>Tất cả</span></li>
                    <li class="resp-tab-item"><span>Hoạt Động</span></li>
                    <li class="resp-tab-item"><span>Cơ sở vật chất</span></li>
                </ul>
                <div class="clearfix"> </div>
                <div class="tab-1 resp-tab-content">
                    <div class="col-md-3 portfolio-grids">
                        <a href="http://daihocdulich.edu.vn/upload/album/64/img/20190920102334-77233.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                            <img src="http://daihocdulich.edu.vn/upload/album/64/img/20190920102334-77233.jpg" class="img-responsive zoom-img" alt="" />
                            <div class="b-wrapper">
                                <h5>Hình Ảnh</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 portfolio-grids">
                        <a href="http://daihocdulich.edu.vn/upload/album/64/img/20190920102333-29119.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                            <img src="http://daihocdulich.edu.vn/upload/album/64/img/20190920102333-29119.jpg" class="img-responsive zoom-img" alt="" />
                            <div class="b-wrapper">
                                <h5>Hình Ảnh</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 portfolio-grids">
                        <a href="http://daihocdulich.edu.vn/upload/album/64/img/20190920102332-47960.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                            <img src="http://daihocdulich.edu.vn/upload/album/64/img/20190920102332-47960.jpg" class="img-responsive zoom-img" alt="" />
                            <div class="b-wrapper">
                                <h5>Hình Ảnh</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 portfolio-grids">
                        <a href="http://daihocdulich.edu.vn/upload/album/64/img/20190920102330-71848.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                            <img src="{{asset('dist/layout/layout_khoadulich/images/20181227183820-68860.png')}}" class="img-responsive zoom-img" alt="" />
                            <div class="b-wrapper">
                                <h5>Hình Ảnh</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 portfolio-grids">
                        <a href="http://daihocdulich.edu.vn/upload/album/63/img/20181227184509-37602.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                            <img src="http://daihocdulich.edu.vn/upload/album/63/img/20181227184509-37602.jpg" class="img-responsive zoom-img" alt="" />
                            <div class="b-wrapper">
                                <h5>Hình Ảnh</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 portfolio-grids">
                        <a href="http://daihocdulich.edu.vn/upload/album/62/img/20181227184217-21754.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                            <img src="http://daihocdulich.edu.vn/upload/album/62/img/20181227184217-21754.jpg" class="img-responsive zoom-img" alt="" />
                            <div class="b-wrapper">
                                <h5>Hình Ảnh</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 portfolio-grids">
                        <a href="http://daihocdulich.edu.vn/upload/album/61/img/20181227184013-99658.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                            <img src="http://daihocdulich.edu.vn/upload/album/61/img/20181227184013-99658.jpg" class="img-responsive zoom-img" alt="" />
                            <div class="b-wrapper">
                                <h5>Hình Ảnh</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 portfolio-grids">
                        <a href="http://daihocdulich.edu.vn/upload/album/61/img/20181227184013-99658.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                            <img src="{{asset('dist/layout/layout_khoadulich/images/20180118145548-56466.jpg')}}" class="img-responsive zoom-img" alt="" />
                            <div class="b-wrapper">
                                <h5>Hình Ảnh</h5>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-3 portfolio-grids">
                            <a href="http://daihocdulich.edu.vn/upload/album/64/img/20190920102334-77233.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <img src="http://daihocdulich.edu.vn/upload/album/64/img/20190920102334-77233.jpg" class="img-responsive zoom-img" alt="" />
                                <div class="b-wrapper">
                                    <h5>Tour Xuyên Việt 2019</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portfolio-grids">
                            <a href="http://daihocdulich.edu.vn/upload/album/64/img/20190920102333-29119.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <img src="http://daihocdulich.edu.vn/upload/album/64/img/20190920102333-29119.jpg" class="img-responsive zoom-img" alt="" />
                                <div class="b-wrapper">
                                    <h5>Hình Ảnh</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portfolio-grids">
                            <a href="http://daihocdulich.edu.vn/upload/album/64/img/20190920102332-47960.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <img src="http://daihocdulich.edu.vn/upload/album/64/img/20190920102332-47960.jpg" class="img-responsive zoom-img" alt="" />
                                <div class="b-wrapper">
                                    <h5>Hình Ảnh</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portfolio-grids">
                            <a href="http://daihocdulich.edu.vn/upload/album/64/img/20190920102330-71848.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <img src="http://daihocdulich.edu.vn/upload/album/64/img/20190920102330-71848.jpg" class="img-responsive zoom-img" alt="" />
                                <div class="b-wrapper">
                                    <h5>Hình Ảnh</h5>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-3 portfolio-grids">
                            <a href="http://daihocdulich.edu.vn/upload/album/63/img/20181227184509-37602.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <img src="http://daihocdulich.edu.vn/upload/album/63/img/20181227184509-37602.jpg" class="img-responsive zoom-img" alt="" />
                                <div class="b-wrapper">
                                    <h5>Hình Ảnh</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portfolio-grids">
                            <a href="http://daihocdulich.edu.vn/upload/album/62/img/20181227184217-21754.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <img src="http://daihocdulich.edu.vn/upload/album/62/img/20181227184217-21754.jpg" class="img-responsive zoom-img" alt="" />
                                <div class="b-wrapper">
                                    <h5>Hình Ảnh</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portfolio-grids">
                            <a href="http://daihocdulich.edu.vn/upload/album/61/img/20181227184013-99658.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <img src="http://daihocdulich.edu.vn/upload/album/61/img/20181227184013-99658.jpg" class="img-responsive zoom-img" alt="" />
                                <div class="b-wrapper">
                                    <h5>Hình Ảnh</h5>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div style="display: flex; justify-content: center; padding-top: 3em;"><a class="btn1" href="#"> Các hình ảnh khác</a></div> --}}
    </div>
</div>
<!--//portfolio-->
<!--//main-header-->
<script type="text/javascript" src="{{ asset('dist/layout/layout_home/js/jquery.zoomslider.min.js') }}"></script>
<!-- testimonial -->
<div class="testimonials w3ls-section" id="team">
    <div class="container">
        <h3 class="w3ls-title">Tin Tức</h3>
        <div class="w3_testimonials_grids w3_testimonials_grids">
            <div id="owl-demo" class="owl-carousel">
                <div class="item w3_agileits_testimonials_grid">
                    <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}"><img src="http://daihocdulich.edu.vn/upload/news/2020/12/16/mot-so-hinh-anh-ve-goc-giang-sinh-am-cung-cua-truong-thumbnail-68258.jpg" alt=" " class="img-responsive" /></a>
                    <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}">Một số hình ảnh về góc Giáng Sinh ấm cúng của trường</a></h4>
                    <div style="text-align: left; color: rgba(0, 0, 0, 0.459)">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> 29/12/2020 &nbsp;<i class="fa fa-eye" aria-hidden="true"></i> 39
                    </div>
                    <p>Hình ảnh về giáng sinh 2020</p>
                </div>
                <div class="item w3_agileits_testimonials_grid">
                    <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}"><img src="http://daihocdulich.edu.vn/upload/news/2020/12/21/xet-hoc-ba-chia-khoa-mo-ra-canh-cua-hoc-tap--thumbnail-11234.jpg" alt="" class="img-responsive" /></a>
                    <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}">XÉT HỌC BẠ: CHÌA KHOÁ MỞ RA CÁNH CỬA HỌC TẬP !</a></h4>
                    <div style="text-align: left; color: rgba(0, 0, 0, 0.459)">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> 29/12/2020 &nbsp;<i class="fa fa-eye" aria-hidden="true"></i> 39
                    </div>
                    <p>Dù bạn khao khát được cháy bỏng với tâm hồn nghệ thuật hay bạn ước mơ Lãnh Đạo- Tất cả đều được thỏa sức tại Trường CAO ĐẲNG VĂN HÓA NGHỆ THUẬT VÀ DU LỊCH SÀI GÒN. </p>
                </div>
                <div class="item w3_agileits_testimonials_grid">
                    <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}"><img src="http://daihocdulich.edu.vn/upload/news/2020/12/14/dang-ki-nhanh-tay-chop-ngay-co-hoi--thumbnail-49874.jpg" alt=" " class="img-responsive" /></a>
                    <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}">Đăng kí nhanh tay ! Chớp ngay cơ hội !</a></h4>
                    <div style="text-align: left; color: rgba(0, 0, 0, 0.459)">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> 29/12/2020 &nbsp;<i class="fa fa-eye" aria-hidden="true"></i> 39
                    </div>
                    <p>Chọn trường là chọn con đường tương lai của bản thân. Vì thế hãy chọn bước chuẩn bị tốt nhất cho chính bạn </p>
                </div>
                <div class="item w3_agileits_testimonials_grid">
                    <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}"><img src="http://daihocdulich.edu.vn/upload/news/2020/12/10/chuong-trinh-dao-tao-ngan-han-thumbnail-85717.jpg" alt=" " class="img-responsive" /></a>
                    <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}">CHƯƠNG TRÌNH ĐÀO TẠO NGẮN HẠN</a></h4>
                    <div style="text-align: left; color: rgba(0, 0, 0, 0.459)">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> 29/12/2020 &nbsp;<i class="fa fa-eye" aria-hidden="true"></i> 39
                    </div>
                    <p>Bên cạnh đào tạo hệ CAO ĐẲNG chính quy, Trường SAIGONACT còn có những chương trình đào tạo ngắn hạn để bổ sung kiến thức chuyên ngành, giúp người học nâng cao năng lực chuyên môn và kỹ năng mềm. </p>
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center; padding-top: 3em;"><a class="btn1" href="{{ route('home-news') }}"> Các tin tức khác</a></div>
    </div>
</div>
<img src="" alt="">
<div class="wthree-testi w3ls-section" id="testimonials">
    <!-- container -->
    <div class="container">
        <h3 class="w3ls-title">Giảng Viên</h3>
        <div class="w3_wthree-testi_grids text-center">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="wthree-testi_grid">
                                <div class="testimonial-left">
                                    <img src="{{ asset('dist/layout/layout_home/images/t1.jpg') }}">
                                </div>
                                <p>Chúng tôi luôn cố gắng hướng đến nền giáo dục mới mẻ để giúp cho sinh viên có thể tiếp nhận được những kiến thức mới mẻ nhất.</p>
                                <h5>Lê Minh Long</h5>
                            </div>
                        </li>
                        <li>
                            <div class="wthree-testi_grid">
                                <div class="testimonial-left">
                                    <img src="{{ asset('dist/layout/layout_home/images/t2.jpg') }}">
                                </div>
                                <p>Giáo dục cần phải cải cách liên tục, vì thế cách giảng dạy chúng tôi luôn luôn đổi mới qua từng kì khác nhau.</p>
                                <h5>Phạm Minh Hồng</h5>
                            </div>
                        </li>
                        <li>
                            <div class="wthree-testi_grid">
                                <div class="testimonial-left">
                                    <img src="{{ asset('dist/layout/layout_home/images/t3.jpg') }}">
                                </div>
                                <p>Sinh viên sẽ luôn được hỗ trọ từ phía chúng tối, chúng tôi sẽ luôn có mặt giúp đỡ các tân sinh viên</p>
                                <h5>Trương Hoàng</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <div style="display: flex; justify-content: center; padding-top: 3em;"><a class="btn1" href="{{route('home-teacher')}}"> Cán Bộ Giảng Viên</a></div>
        </div>
    </div>
</div>
<!-- //testimonial -->
<!-- team -->

<!-- //team -->
<!-- contact -->
<div class="contact-bottom w3ls-section" id="contact">
    <div class="container">
        <h3 class="w3ls-title">Liên Hệ</h3>
        {{-- <p>SAIGONTU - BQLĐATL Trường Đại học Du lịch Sài Gòn </p>
                    <p> Cơ sở: 70 Đường Tân Thới Nhất 8 - Khu phố 5 - P.Tân Thới Nhất - Q.12 - Tp.HCM. </p> --}}

    </div>


    <div class="w3layouts-list">
        <div class="col-md-4 li"><span class="fa fa-envelope-o list-icon" aria-hidden="true"></span>
            <a href="javascript:">info@daihocdulich.edu.vn</a>
        </div>
        <div class="col-md-4 li"><span class="fa fa-phone" aria-hidden="true"></span>
            <a href="javascript:">(028)38.831.793 - (028)38.831.796</a>
        </div>
        <div class="col-md-4 li"><span class="fa fa-location-arrow" aria-hidden="true"></span><a href="mailto:info@daihocdulich.com">info@daihocdulich.com</a></div>
        <div class="clearfix"></div>
    </div>

    <div class="col-md-6 col-sm-6  col-xs-6 agileits_w3layouts-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7605346937735!2d106.60891711411696!3d10.829628961172398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bcecbda1797%3A0xad6d40a324baae76!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIFbEg24gaMOzYSBOZ2jhu4cgdGh14bqtdCB2w6AgRHUgbOG7i2NoIFPDoGkgR8Oybg!5e0!3m2!1svi!2s!4v1609376289562!5m2!1svi!2s" style="border:0;" allowfullscreen></iframe>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 contact-right-w3l">
        <form action="#" method="post">
            <input type="text" class="name" name="name" placeholder="Tên" required="">
            <input type="text" class="name" name="name" placeholder="Họ" required="">
            <input type="email" class="name" name="name" placeholder="Email" required="">
            <input type="text" class="name" name="name" placeholder="Chủ đề" required="">
            <textarea placeholder="Nội Dung" required=""></textarea>
            <input type="submit" value="Gửi">
        </form>
    </div>
    <div class="clearfix"></div>
</div>
</div>
<!-- //contact -->
<div class="contact-bottom w3ls-section" id="contact">
    <div class="container">
        <h3 class="w3ls-title">Hợp Tác</h3>
        <div class="container">
            <div id="owl-collab" class="owl-carousel owl-theme" data-interval="50" data-delay="100" data-ride="carousel">
                <img src="{{ asset('dist/layout/layout_home/images/files/Link-sai-gon-c-66470.jpg') }}" height="100%" style="padding: 50px;" alt="">
                <img src="{{ asset('dist/layout/layout_home/images/files/Link-sai-gon-c-21823.gif') }}" height="100%" style="padding: 50px;" alt="">
                <img src="{{ asset('dist/layout/layout_home/images/files/Link-sai-gon-c-24394.jpg') }}" height="100%" style="padding: 50px;" alt="">
                <img src="{{ asset('dist/layout/layout_home/images/files/Link-sai-gon-c-36507.jpg') }}" height="100%" style="padding: 50px;" alt="">
                <img src="{{ asset('dist/layout/layout_home/images/files/Link-sai-gon-c-39456.jpg') }}" height="100%" style="padding: 50px;" alt="">
                <img src="{{ asset('dist/layout/layout_home/images/files/Link-sai-gon-c-64210.jpg') }}" height="100%" style="padding: 50px;" alt="">
                <img src="{{ asset('dist/layout/layout_home/images/files/Link-sai-gon-c-66470.jpg') }}" height="100%" style="padding: 50px;" alt="">
            </div>
        </div>
    </div>
</div>

<!-- <div class="container">
		<div id="owl-collab" class="owl-carousel owl-theme" data-interval="50" data-delay="100" data-ride="carousel">
			<img src="dist/layout/layout_home/images/files/Link-sai-gon-c-66470.jpg" height="100%" style="padding: 50px;" alt="">
			<img src="dist/layout/layout_home/images/files/Link-sai-gon-c-21823.gif" height="100%" style="padding: 50px;" alt="">
			<img src="dist/layout/layout_home/images/files/Link-sai-gon-c-24394.jpg" height="100%" style="padding: 50px;" alt="">
			<img src="dist/layout/layout_home/images/files/Link-sai-gon-c-36507.jpg" height="100%" style="padding: 50px;" alt="">
			<img src="dist/layout/layout_home/images/files/Link-sai-gon-c-39456.jpg" height="100%" style="padding: 50px;" alt="">
			<img src="dist/layout/layout_home/images/files/Link-sai-gon-c-64210.jpg" height="100%" style="padding: 50px;" alt="">
			<img src="dist/layout/layout_home/images/files/Link-sai-gon-c-66470.jpg" height="100%" style="padding: 50px;" alt="">
		</div> -->
</div>

<!-- subscribe -->
<div class="w3ls-section subscribe text-center">
    <div class="container">
        <h3 class="w3ls-title">Đăng ký tư vấn tuyển sinh!</h3>
        <p>Nhập Email để nhận tư vấn tuyển sinh.</p>
        <div class="subscribe-grid">

                {{-- <input type="email" placeholder="Email" name="Subscribe" required=""> --}}
                <a href="{{route('tuyensinh')}}">
                    <button class="btn1">Đăng ký</button>
                </a>


        </div>
    </div>
</div>
<div class="ndt__footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <h4 class="ndt__footer__title">Đảng - Đoàn Thể</h4>
                <ul class="ndt__footer__link">
                    <li> <a href="#">Chi bộ Đảng</a> </li>
                    <li> <a href="#"></a> </li>
                    <li> <a href="#">Đoàn Thanh niên</a> </li>
                    <li> <a href="#">Hội Sinh viên</a> </li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3">
                <h4 class="ndt__footer__title">Phòng</h4>
                <ul class="ndt__footer__link">
                    <li> <a href="javascript:">Văn phòng hiệu trưởng</a> </li>
                    <li> <a href="javascript:">Phòng Tổ chức hành chính</a> </li>
                    <li> <a href="javascript:">Phòng Quản trị</a> </li>
                    <li> <a href="javascript:">Phòng Thanh tra</a> </li>
                    <li> <a href="javascript:">Phòng Công tác HS - SV</a> </li>
                    <li> <a href="javascript:">Phòng Khảo thí</a> </li>
                    <li> <a href="javascript:">Phòng Kế toán</a> </li>
                    <li> <a href="javascript:">Phòng Đào tạo</a> </li>
                    <li> <a href="javascript:">Phòng Công nghệ thông tin</a> </li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3">
                <h4 class="ndt__footer__title">Phòng</h4>
                <ul class="ndt__footer__link">
                    <li> <a href="javascript:">Văn phòng hiệu trưởng</a> </li>
                    <li> <a href="javascript:">Phòng Tổ chức hành chính</a> </li>
                    <li> <a href="javascript:">Phòng Quản trị</a> </li>
                    <li> <a href="javascript:">Phòng Thanh tra</a> </li>
                    <li> <a href="javascript:">Phòng Công tác HS - SV</a> </li>
                    <li> <a href="javascript:">Phòng Khảo thí</a> </li>
                    <li> <a href="javascript:">Phòng Kế toán</a> </li>
                    <li> <a href="javascript:">Phòng Đào tạo</a> </li>
                    <li> <a href="javascript:">Phòng Công nghệ thông tin</a> </li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3"></div>
        </div>
    </div>
</div>
<!-- //subscribe -->
<!-- footer -->
<div class="agileits_w3layouts-footer">
    <div class="col-md-6 col-sm-8 agileinfo-copyright">
        <p>© 2021 Bản quền thuộc về Trường Đại Học Du Lịch Sài Gòn </p>
    </div>
    <div class="col-md-6 col-sm-4 agileinfo-icons">
        <ul>
            <li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="icon gp" href="#"><i class="fa fa-youtube"></i></a></li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
<!-- footer -->
<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Tech Edu
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('dist/layout/layout_home/images/6.jpg') }}" alt=" " class="img-responsive" />
                <p>Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam,
                    nisi ut aliquid ex ea commodi consequatur? Quis autem
                    vel eum iure reprehenderit qui in ea voluptate velit
                    esse quam nihil molestiae consequatur, vel illum qui
                    dolorem eum fugiat quo voluptas nulla pariatur.
                    <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                        esse quam nihil molestiae consequatur.</i>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- //bootstrap-modal-pop-up -->
<!--script for portfolio-->
<script src="{{ asset('dist/layout/layout_home/js/lightbox-plus-jquery.min.js') }}"> </script>
<script src="{{ asset('dist/layout/layout_home/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
</script>
<!--//script for portfolio-->


<script src="{{ asset('dist/layout/layout_home/js/owl.carousel.js') }}"></script>
<script>
    $(document).ready(function () {
			$("#owl-demo").owlCarousel({
				autoPlay: true, //Set AutoPlay to 3 seconds
				items: 3,
				itemsDesktop: [768, 2],
				itemsDesktopSmall: [425, 2],
				itemsMobile: [425, 1],
				navigation: true,
				// THIS IS THE NEW PART
				afterAction: function (el) {
					//remove class active
					this
						.$owlItems
						.removeClass('active')
					//add class active
					this
						.$owlItems //owl internal $ object containing items
						.eq(this.currentItem + 1)
						.addClass('active')
				}
				// END NEW PART
			});

			$("#owl-collab").owlCarousel({
				autoPlay: 2000, //Set AutoPlay to 3 seconds
				items: 6,
				itemsDesktop: [768, 2],
				itemsDesktopSmall: [425, 2],
				itemsMobile: [425, 1],
				navigation: true,
				// THIS IS THE NEW PART
				afterAction: function (el) {
					//remove class active
					this
						.$owlItems
						.removeClass('active')
					//add class active
					this
						.$owlItems //owl internal $ object containing items
						.eq(this.currentItem + 1)
						.addClass('active')
				}
				// END NEW PART

			});

		});
</script>

<!-- here starts scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};

			$().UItoTop({ easingType: 'easeOutQuart' });
		});
</script>
<!-- flexSlider -->
<link rel="stylesheet" href="{{ asset('dist/layout/layout_home/css/flexslider.css') }}" type="text/css" media="screen" property="" />
<script defer src="{{ asset('dist/layout/layout_home/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
    $(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
</script>
<!-- //flexSlider -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('dist/layout/layout_home/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/layout/layout_home/js/easing.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
</script>
<!-- /ends-smoth-scrolling -->
<!-- //here ends scrolling icon -->

<script type="text/javascript" src="{{ asset('dist/layout/layout_home/js/numscroller-1.0.js') }}"></script>

<script src="{{ asset('dist/layout/layout_home/js/SmoothScroll.min.js') }}"></script>
<script>
    $(document).ready(function () {
			let navbar = $('.header-w3-agileits')[0];
			let banner = $('.w3_agilits_banner_bootm')[0];
			let banerInfo = $('.baner-info')[0];
			document.onscroll = () => {
				if (window.scrollY > banner.offsetHeight) {
					navbar.classList.add('ndt__navbar--fixed');
					banerInfo.classList.add(`ndt__baner__info--fix`);
				} else {
					navbar.classList.remove('ndt__navbar--fixed');
					banerInfo.classList.remove(`ndt__baner__info--fix`);
				};
			}

			// scrool to top
			function scrollToTop() {
				window.scroll({top: 0, left: 0, behavior: 'smooth'});
			}


			$('[data-scroll="top"]').each((index, item) => {
				item.addEventListener('click', scrollToTop);
			})

		})

</script>
@endSection
