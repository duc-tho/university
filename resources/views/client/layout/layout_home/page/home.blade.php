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
                <li><i class="fa fa-phone" aria-hidden="true"></i> {{ $phone }}</li>
                <li><i class="fa fa-envelope-o list-icon" aria-hidden="true"></i><a href="mailto:{{ $email }}">{{ $email }}</a></li>
            </ul>
        </div>

    </div>
</div>
<!--//banner-bottom-->
<!--/banner-section-->

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
                <a href="/"><img class="logo-background visible hidden-md" src="{{ asset($logo) }}" alt="img" height="50px"></a>
            </div>
            <!-- navbar-header -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">
                    @foreach ($menu_list as $menu)
                    {{-- <li data-scroll="top" class="active"><a href="javascript:">Trang chủ</a></li> --}}
                    <li><a href="{{ $menu->url }}" class="scroll">{{ $menu->name }}</a></li>
                    @endforeach
                </ul>

            </div>
            <div class="clearfix"> </div>
        </nav>
    </div>
</div>

<div class="splide" style="max-height: 570px; overflow: hidden;">
    <a class="hvr-rectangle-out w3_play_icon1" href="{{ route('tuyensinh') }}" style="position: absolute; bottom: 10%; left: 10%; z-index:998;"> Tuyển sinh ngay</a>
    <div class="splide__track">
        <ul class="splide__list">
            @foreach ($slide as $item)
            <li class="splide__slide">
                <img src="{{ $item->link }}" alt="" width="100%" height="auto">
            </li>
            @endforeach
    </div>
</div>

<!--/banner-section-->
<!--about -->
<div id="about" class="wthree-about w3ls-section">
    <div class="container">
        {{-- <div class="agileits-banner-grids text-center">
                <div class="banner-bottom-girds">
                    <div class="agileits-banner-grid bg-w3ls-active">
                        <span class="fa fa-university banner-icon" aria-hidden="true"></span>
                        <h4> Đại Học</h4>
                        <p>Chuyên đào tạo các nghành chuyên về <span style="font-weight: bold">DU LỊCH</span> </p>
                        <a class="hvr-rectangle-out w3_play_icon1" href="#" data-toggle="modal" data-target="#myModal"> Chi
                            tiết</a>
                    </div>
                    <div class="agileits-banner-grid">
                        <span class="fa fa-tags banner-icon" aria-hidden="true"></span>
                        <h4>Tuyển Sinh </h4>
                        <p>Đăng ký tuyển sinh <span style="font-weight: bold">Trực tuyến 24/7 Luôn hỗ trợ sinh viên </span>
                        </p>
                        <a class="hvr-rectangle-out w3_play_icon1" href="{{ route('tuyensinh') }}"> Tuyển Sinh</a>
    </div>
    <div class="clearfix"></div>
</div>
</div> --}}


<h2 class="w3ls-title">Giới thiệu</h2>
{{-- <h5>Roin vel enim nec ipsum finibus.Duis euismod massa utab.</h5> --}}
<br>
<div class="col-md-7  w3ls-about-left">
    {!! $intro_short !!}

</div>
<div class="col-md-5 w3ls-row">
    <div class="col-md-12 col-sm-12 w3ls-row alert">
        <video controls class="img-responsive" style="max-width: 100%;" autoplay muted>
            <source src="{{ asset($intro_video) }}" type="video/mp4">
            Trình duyệt cùa bạn không hỗ trợ xem loại video này!
        </video>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="clearfix"> </div>
{{-- <div class="stats-info agileits-w3layouts">
    @foreach ($intro_statistic as $item)
    <div class="col-sm-3 col-xs-6 stats-grid">
        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='{{ $item['value'] }}' data-delay='.5' data-increment="{{ ceil($item['value'] / 120) }}">{{ $item['value'] }}</div>
<div class="stats-img stat2">
    <p>{{ $item['name'] }}</p>
</div>
</div>
@endforeach
<div class="clearfix"></div>
</div> --}}
</div>
<div style="display: flex; justify-content: center; padding-top: 3em;"><a class="btn1" href="{{ route('gioi-thieu', [$faculty['slug']]) }}">
        Tìm hiểu thêm</a></div>
</div>
<!-- //about -->
<!--services-->
<div class="agileits-services w3ls-section" id="agileits-services">
    <div class="container">
        <h3 class="w3ls-title">Các khoa </h3>
        <div class="agileits-services-row">
            <div id="owl-faculty" class="owl-carousel">
                @foreach ($all_faculty as $item)
                <div class="agileits-services-grids">
                    <a href="{{ route('trang-chu', [$item['slug']]) }}" target="_blank">
                        {{-- <span class="glyphicon glyphicon-stats effect-1" aria-hidden="true"></span> --}}
                        <img class="boder-radius-img" src="{{ asset($item['image']) }}" width="40%" alt="" style="height: unset;">
                        <h4>{{ $item['name'] }}</h4>
                    </a>
                    {{-- <p class="khoa-p">{!! $item['intro_summary'] !!}</p> --}}
                </div>
                @endforeach
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
        <h3 class="w3ls-title">Đời sống sinh viên</h3>
        <div class="sap_tabs">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    @foreach ($image as $item)
                    <li class="resp-tab-item"><span>{{ $item->title }}</span></li>
                    @endforeach
                </ul>
                <div class="clearfix"></div>
                <div class="resp-tabs-container">
                    @foreach ($image as $image_category)
                    <div class="tab-1 resp-tab-content">
                        @foreach ($image_category['image_group'] as $image_group)
                        @foreach ($image_group['images'] as $image_item)
                        <div class="col-md-3 portfolio-grids">
                            <a href="{{ asset($image_item['image']) }}" data-lightbox="example-set" data-title="{{ $image_item['description'] }}">
                                <img src="{{ asset($image_item['image']) }}" class="img-responsive zoom-img" alt="" />
                                <div class="b-wrapper">
                                    <h5>{{ $image_item['title'] }}</h5>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                    @endforeach
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
@foreach ($news as $key => $category)
<div class="testimonials w3ls-section" id="team">
    <div class="container">
        <h3 class="w3ls-title">{{ $category['title'] }}</h3>
        <div class="w3_testimonials_grids w3_testimonials_grids">
            <d iv id="owl-news-{{ $key }}" class="owl-carousel">
                @foreach ($category['news'] as $item)
                <div class="item w3_agileits_testimonials_grid">
                    <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}"><img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="img-responsive" /></a>
                    <h4><a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">{{ $item['title'] }}</a>
                    </h4>
                    <div style="text-align: left; color: rgba(0, 0, 0, 0.459)">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        {{ date('d-m-Y', strtotime($item['created_at'])) }} &nbsp;<i class="fa fa-eye" aria-hidden="true"></i> {{ $item['view_count'] }}
                    </div>
                    <p>{!! $item['description'] !!}</p>
                </div>
                @endforeach
            </d>
        </div>
        <div style="display: flex; justify-content: center; padding-top: 3em;"><a class="btn1" href="{{ route('tin-tuc-danh-muc', [$faculty['slug'], $category['slug']]) }}"> Các {{ $category['title'] }} khác</a></div>
    </div>
</div>
@endforeach

<div class="contact-bottom w3ls-section">
    <div class="container">
        <h3 class="w3ls-title">Hợp Tác</h3>
        <div class="container">
            <div id="owl-collab" class="owl-carousel owl-theme" data-interval="50" data-delay="100" data-ride="carousel">
                @foreach ($collab_logo as $item)
                <img src="{{ asset($item['image_url']) }}" height="100%" style="padding: 50px;" alt="{{ $item['title'] }}">
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- <img src="" alt=""> --}}
<div class="wthree-testi w3ls-section" id="testimonials">
    <!-- container -->
    <div class="container">
        <h3 class="w3ls-title">Giảng Viên</h3>
        <div class="w3_wthree-testi_grids text-center">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        @foreach ($teacher as $item)
                        <li>
                            <div class="wthree-testi_grid">
                                <div class="testimonial-left">
                                    <img src="{{ $item['image'] }}" style="height: 200px;">
                                </div>
                                <p>{{ $item['position'] }}</p>
                                <h5>{{ $item['name'] }}</h5>
                                <p>{!! $item['intro'] !!}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </section>
            <div style="display: flex; justify-content: center; padding-top: 3em;"><a class="btn1" href="{{ route('giao-vien', [$faculty['slug']]) }}"> Cán Bộ Giảng Viên</a></div>
        </div>
    </div>
</div>
<!-- //testimonial -->
<!-- team -->

<!-- //team -->
<!-- contact -->
<div class="contact-bottom w3ls-section" id="contact">
    <div class="container">
        <h3 class="w3ls-title">
            <a href="{{ route('lien-he', [$faculty['slug']]) }}">Liên Hệ</a>
            <small style="text-align: right;">
                {{-- <a href="{{ route('lien-he', [$faculty['slug']]) }}">Xem thêm &gt;&gt;</a> --}}
            </small>
        </h3>
        {{-- <p>SAIGONTU - BQLĐATL Trường Đại học Du lịch Sài Gòn </p>
                    <p> Cơ sở: 70 Đường Tân Thới Nhất 8 - Khu phố 5 - P.Tân Thới Nhất - Q.12 - Tp.HCM. </p> --}}

    </div>


    {{-- <div class="w3layouts-list">
        <div class="col-md-4 li"><span class="fa fa-envelope-o list-icon" aria-hidden="true"></span>
            <a href="javascript:">{{ $email }}</a>
</div>
<div class="col-md-4 li"><span class="fa fa-phone" aria-hidden="true"></span>
    <a href="javascript:">{{ $phone }} - {{ $hotline }}</a>
</div>
<div class="col-md-4 li"><span class="fa fa-location-arrow" aria-hidden="true"></span><a href="mailto:info@daihocdulich.com">{{ $email }}</a></div>
<div class="clearfix"></div>
</div> --}}

<div class="col-md-6 col-sm-6  col-xs-6 agileits_w3layouts-map">
    <iframe src="{{ $google_map_link }}" style="border:0;" allowfullscreen></iframe>
</div>
<div class="col-md-6 col-sm-6 col-xs-6 contact-right-w3l">
    <form action="#" method="post">
        <input type="text" class="name" name="name" placeholder="Tên" required>
        <input type="text" class="name" name="name" placeholder="Họ" required>
        <input type="email" class="name" name="name" placeholder="Email" required>
        <input type="text" class="name" name="name" placeholder="Chủ đề" required>
        <textarea placeholder="Nội Dung" required=""></textarea>
        <input type="submit" value="Gửi">
    </form>
</div>
<div class="clearfix"></div>
</div>
</div>

<!-- subscribe -->
<!--div class="w3ls-section subscribe text-center">
        <div class="container">
            <h3 class="w3ls-title">Đăng ký tư vấn tuyển sinh!</h3>
            {{-- <p>Nhập Email để nhận tư vấn tuyển sinh.</p> --}}
            <div class="subscribe-grid">
                {{-- <input type="email" placeholder="Email" name="Subscribe" required=""> --}}
                <a href="{{ route('tuyensinh') }}">
                    <button class="btn1">Đăng ký</button>
                </a>
            </div>
        </div>
    </div-->
<div class="ndt__footer">
    <div class="container">
        <div class="row">
            @foreach ($footer_link as $footer_category)
            <div class="col-sm-4 col-md-3">
                <h4 class="ndt__footer__title">{{ $footer_category['title'] }}</h4>
                <ul class="ndt__footer__link">
                    @foreach ($footer_category['child'] as $footer_item)
                    <li> <a href="{{ checkURL($footer_item['link']) }}">{{ $footer_item['title'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- //subscribe -->
<!-- footer -->
<div class="agileits_w3layouts-footer">
    <div class="col-md-6 col-sm-8 agileinfo-copyright">
        <p>{{ $copyright }}</p>
    </div>
    <div class="col-md-6 col-sm-4 agileinfo-icons">
        <ul>
            @foreach ($socials_icon as $item)
            <li><a class="icon" href="{{ checkURL($item['link']) }}"><i class="fa fa-{{ $item['fa_icon'] }}"></i></a></li>
            @endforeach
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
<!-- footer -->
<!-- bootstrap-modal-pop-up -->
{{-- <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
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
</div> --}}
<!-- //bootstrap-modal-pop-up -->
<!--script for portfolio-->
<script src="{{ asset('dist/layout/layout_home/js/lightbox-plus-jquery.min.js') }}"> </script>
<script src="{{ asset('dist/layout/layout_home/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true // 100% fit in a container
            });
        });

</script>
<!--//script for portfolio-->


<script src="{{ asset('dist/layout/layout_home/js/owl.carousel.js') }}"></script>
<script>
    $(document).ready(function() {
            document.querySelectorAll('[id^=owl-news-]').forEach(item => {
                $(`#${item.id}`).owlCarousel({
                    autoPlay: true, //Set AutoPlay to 3 seconds
                    items: 3,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 3],
                    itemsTablet: [768, 2],
                    itemsMobile: [479, 1],
                    navigation: true,
                    // THIS IS THE NEW PART
                    afterAction: function(el) {
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

            $("#owl-collab").owlCarousel({
                autoPlay: 2000, //Set AutoPlay to 3 seconds
                items: 6,
                itemsDesktop: [768, 2],
                itemsDesktopSmall: [425, 2],
                itemsMobile: [425, 1],
                navigation: true,
                // THIS IS THE NEW PART
                afterAction: function(el) {
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

            $("#owl-faculty").owlCarousel({
                autoPlay: 2000, //Set AutoPlay to 3 seconds
                items: 4,
                itemsDesktop: [1199, 4],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [768, 2],
                itemsMobile: [479, 1],
                navigation: true,
                dots: 1
            });

        });

</script>

<!-- here starts scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };

            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });

</script>
<!-- flexSlider -->
<link rel="stylesheet" href="{{ asset('dist/layout/layout_home/css/flexslider.css') }}" type="text/css" media="screen" property="" />
<script defer src="{{ asset('dist/layout/layout_home/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
    $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
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
    jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });

</script>
<!-- /ends-smoth-scrolling -->
<!-- //here ends scrolling icon -->

<script type="text/javascript" src="{{ asset('dist/layout/layout_home/js/numscroller-1.0.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>

<script src="{{ asset('dist/layout/layout_home/js/SmoothScroll.min.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
            new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                autoplay: 1,
                pauseOnHover: 1,
                pauseOnFocus: 1,
                width: "100%",
            }).mount();
        });

        $(document).ready(function() {
            let navbar = $('.header-w3-agileits')[0];
            let banner = $('.w3_agilits_banner_bootm')[0];
            // let banerInfo = $('.baner-info')[0];
            let slide = $('.splide')[0];
            document.onscroll = () => {
                if (window.scrollY > banner.offsetHeight) {
                    navbar.classList.add('ndt__navbar--fixed');
                    // banerInfo.classList.add(`ndt__baner__info--fix`);
                    slide.style.marginTop = `${navbar.offsetHeight}px`;
                } else {
                    navbar.classList.remove('ndt__navbar--fixed');
                    // banerInfo.classList.remove(`ndt__baner__info--fix`);
                    slide.style.marginTop = 0;
                };
            }

            // scrool to top
            function scrollToTop() {
                window.scroll({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
            }


            $('[data-scroll="top"]').each((index, item) => {
                item.addEventListener('click', scrollToTop);
            })

        })

</script>
@endSection
