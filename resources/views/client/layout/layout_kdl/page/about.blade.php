@extends('client.layout.layout_kdl.index')
@section('title','Giới Thiệu')
@section('main')
<section class="w3l-about-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Giới Thiệu</h2>
            <p><a href="#">Trang Chủ</a> &nbsp; / &nbsp; Giới thiệu</p>
        </div>
    </div>
</section>
<!-- content-with-photo4 block -->
<section class="w3l-content-with-photo-4">
    <div id="content-with-photo4-block" class="pt-5">
        <div class="container py-md-5">
            <div class="cwp4-two row">
                @foreach ( $about as $item )
                <div class="cwp4-text col-lg-6">
                    
                </div>
                <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                    <img src="{{asset($item->image)}}" class="img-fluid" alt="" />
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- content-with-photo4 block -->
<section class="w3l-features-1">
    <!-- /features -->
    <div class="features py-4">
        <div class="container pb-5">

            <div class="fea-gd-vv row ">
                <div class="float-lt feature-gd col-lg-4 col-sm-6">


                </div>
                <div class="float-mid feature-gd col-lg-4 col-sm-6 mt-sm-0 mt-4">


                </div>
                <div class="float-rt feature-gd col-lg-4 col-sm-6 mt-lg-0 mt-4">


                </div>

            </div>
        </div>
    </div>
    <!-- //features -->
</section>
{{-- <section class="w3l-feature-2">
    <div class="grid top-bottom py-5">
        <div class="container py-md-5">
            <div class="heading text-center mx-auto">
                <h3 class="head">Tại sao bạn phải chọn khoa Du Lịch Đại Học Du Lịch Sài Gòn</h3>
                <p class="my-3 head">Khoa Du lịch – BQLĐATL Trường Đại học Du lịch Sài Gòn cũng tạo thêm cơ hội để khai thác hiệu quả hơn các nguồn lực hiện có của BQLĐATL Trường Đại học Du lịch Sài Gòn, góp phần thực hiện tốt chức năng nhiệm vụ của một đại học trọng điểm đa ngành ở miền Nam.</p>

            </div>
            <div class="middle-section row mt-5 pt-3">
                <div class="three-grids-columns col-lg-3 col-sm-6 text-center">
                    <div class="icon"> <span class="fa fa-graduation-cap" aria-hidden="true"></span></div>
                    <h4>Tốt nghiệp</h4>
                    <p>Trường đạt tỉ lệ 90% sinh viên đầu vào và đầu ra</p>
                </div>
                <div class="three-grids-columns col-lg-3 col-sm-6 mt-sm-0 mt-5 text-center">
                    <div class="icon"> <span class="fa fa-user" aria-hidden="true"></span></div>
                    <h4>Kỹ năng thực hành</h4>
                    <p>Sinh viên ra trường đều được trang bị kỹ năng ở mọi mặt</p>
                </div>
                <div class="three-grids-columns col-lg-3 col-sm-6 mt-lg-0 mt-5 text-center">
                    <div class="icon"> <span class="fa fa-book" aria-hidden="true"></span></div>
                    <h4>Tài liệu</h4>
                    <p>Được cung cấp những tài liệu bổ ích, những kiến thức quan trọng </p>
                </div>
                <div class="three-grids-columns col-lg-3 col-sm-6 mt-lg-0 mt-5 text-center">
                    <div class="icon"> <span class="fa fa-bed" aria-hidden="true"></span></div>
                    <h4>Du lịch</h4>
                    <p>Là nơi lí tưởng cho những chuyến đi vui vẻ hạnh phúc</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="teams-1">
    <section class="teams text-center py-5" id="team">
        <div class="container py-xl-5 py-lg-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Giảng Viên Của Khoa</h3>
                <p class="my-3 head">Chúng tôi luôn cố gắng và không ngừng phấn đấu, để có thể mang đến những kiến thức bổ ích
                    cho sinh viên trong khoa, đồng thời chúng tôi luôn sẵn sàng mang đến cho các sinh viên những chuyến đi bổ ích
                </p>

            </div>
            <div class="row inner-sec-w3ls-w3pvt-aminfo pt-5 mt-3">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-grid text-center">
                        <div class="team-img">
                            <img class="img-fluid rounded" src="{{asset('dist/layout/layout_khoadulich/images/t1.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Trent Boult</h4>
                            <ul class="d-flex justify-content-center py-3 social-icons">
                                <li class="effect-soc-team1">
                                    <a href="javascript:">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="effect-soc-team2">
                                    <a href="javascript:">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li class="effect-soc-team3">
                                    <a href="javascript:">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 top-tem">
                    <div class="team-grid text-center">
                        <div class="team-img">
                            <img class="img-fluid rounded" src="{{asset('dist/layout/layout_khoadulich/images/t2.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Ruth Grace</h4>
                            <ul class="d-flex justify-content-center py-3 social-icons">
                                <li class="effect-soc-team1">
                                    <a href="javascript:">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="effect-soc-team2">
                                    <a href="javascript:">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li class="effect-soc-team3">
                                    <a href="javascript:">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6  mt-sm-0 mt-5">
                    <div class="team-grid text-center">
                        <div class="team-img">
                            <img class="img-fluid rounded" src="{{asset('dist/layout/layout_khoadulich/images/t3.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Jonty Rhoods</h4>
                            <ul class="d-flex justify-content-center py-3 social-icons">
                                <li class="effect-soc-team1">
                                    <a href="javascript:">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="effect-soc-team2">
                                    <a href="javascript:">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li class="effect-soc-team3">
                                    <a href="javascript:">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 top-tem">
                    <div class="team-grid text-center">
                        <div class="team-img">
                            <img class="img-fluid rounded" src="{{asset('dist/layout/layout_khoadulich/images/t4.jpg')}}" alt="">
                        </div>
                        <div class="team-info">
                            <h4>Maria Clisters</h4>
                            <ul class="d-flex justify-content-center py-3 social-icons">
                                <li class="effect-soc-team1">
                                    <a href="javascript:">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="effect-soc-team2">
                                    <a href="javascript:">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li class="effect-soc-team3">
                                    <a href="javascript:">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a href="#">
                        <button class="button"><span>Giảng Viên</span></button>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
    @stop
