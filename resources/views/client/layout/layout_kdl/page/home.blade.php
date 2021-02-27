@extends('client.layout.layout_kdl.index')
@section('title', 'Khoa Du Lịch')
@section('main')
    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mx-auto text-center">
                                        <h5>{{ $slogan_main_travel }}</h5>
                                        <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" {{-- href="{{ route('gioithieu') }}">Tìm Hiểu</a> --}}
                                            href="#">Tìm Hiểu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mx-auto text-center">
                                        <h5>{{ $slogan_main_travel }}</h5>
                                        <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Tìm Hiểu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mx-auto text-center">
                                        <h5>{{ $slogan_main_travel }}</h5>
                                        <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Tìm Hiểu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mx-auto text-center">
                                        <h5>{{ $slogan_main_travel }}</h5>
                                        <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Tìm Hiểu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>

        </div>
    </section>


    <section class="w3l-feature-3" id="features">
        <div class="grid top-bottom mb-lg-5 pb-lg-5">
            <div class="container">

                <div class="middle-section grid-column text-center">
                    @foreach ($specialized as $item)
                        <div class="three-grids-columns">
                            @foreach ($socials_icon as $icon)
                                @if ($icon->id == 6)
                                    <span class="{{ $icon->fa_icon }}" id="faicon"></span>
                                @endif
                            @endforeach
                            <h4>{{ $item->name }}</h4>
                            <p>{{ $item->intro }}
                            </p>
                            {{-- <a href="{{ route('quantrikhachsan') }}" class="btn btn-secondary btn-theme3 mt-4">Đọc thêm </a> --}}
                            <a href="#" class="btn btn-secondary btn-theme3 mt-4">Đọc thêm </a>
                        </div>
                    @endforeach

                    {{-- <div class="three-grids-columns">
                        <span class="fa fa-users" id="faicon"></span>
                        <h4>NGÀNH QUẢN TRỊ NHÀ HÀNG VÀ DỊCH VỤ ĂN UỐNG</h4>
                        <p>Quản trị dịch vụ du lịch và lữ hành là một trong những ngành học dẫn đầu về nhu cầu nhân lực, có
                            mức lương cao.
                        </p>
                        <a href="#" class="btn btn-secondary btn-theme3 mt-4">Đọc thêm </a>
                    </div>
                    <div class="three-grids-columns">
                        <span class="fa fa-book" id="faicon"></span>
                        <h4>NGHÀNH QUẢN TRỊ DU LỊCH VÀ LỮ HÀNH</h4>
                        <p>Quản trị du lịch và lữ hành là ngành du lịch thật sự trở thành ngành kinh tế mũi nhọn, đã và đang
                            góp phần thúc đẩy sự chuyển dịch cơ cấu kinh tế.
                        </p>
                        <a href="#" class="btn btn-secondary btn-theme3 mt-4">Đọc thêm </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- features-4 block -->
    <section class="w3l-index1" id="about">
        <div class="calltoaction-20  py-5 editContent">
            <div class="container py-md-3">

                <div class="calltoaction-20-content row">
                    <div class="column center-align-self col-lg-6 pr-lg-5">
                        @foreach ($images as $item)
                            @if ($item->image_category_id == 2)
                                <h5 class="editContent">{{ $item->title }}</h5>
                                <p class="more-gap editContent">{{ $item->description }}</p>
                            @endif
                        @endforeach
                        {{-- <a class="btn btn-secondary btn-theme2 mt-3" href="{{ route('gioithieu') }}"> Đọc Thêm</a> --}}
                        <a class="btn btn-secondary btn-theme2 mt-3" href="#"> Đọc Thêm</a>
                    </div>
                    <div class="column ccont-left col-lg-6">
                        @foreach ($image_category as $item)
                            @if ($item->faculty_id == 3)
                                <img src="{{ asset($item['link']) }}" class="img-responsive" alt="">
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-4 block -->
    <section class="services-12" id="course">
        <div class="form-12-content">
            <div class="container">
                <div class="grid grid-column-2 ">

                    <div class="column1">
                        <div class="heading">
                            <h3 class="head text-white">{{ $slogan_intro_travel }}</h3>
                            <h4>{{ $slogan_intro_travel2 }}</h4>
                            <p class="my-3 text-white">{{ $slogan_intro_travel3 }}
                            </p>
                        </div>
                    </div>
                    <div class="column2">
                        {{-- <a class="btn btn-secondary btn-theme2 mt-3" href="{{ route('tuyensinh') }}"> Ứng Tuyển</a> --}}
                        <a class="btn btn-secondary btn-theme2 mt-3" href="#"> Ứng Tuyển</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  form-12 -->
    <section class="w3l-form-12">
        <div class="form-12-content py-5" id="services">
            <div class="container py-md-3">
                <div class="grid grid-column-12 py-md-5">

                    <div class="column1">
                        <h4 class="tagline">Tìm kiếm </h4>
                        <p>Những địa điểm du lịch lí tưởng của khoa trong năm 2021</p>
                        <form action="/" method="Get">
                            <div class="">
                                <input type="text" name="name" class="form-input" placeholder="Tên Địa Điểm">
                            </div>
                            <div class="">
                                <select id="sel1">
                                    <option>Miền Bắc</option>
                                    <option>Miền Trung</option>
                                    <option>Miền Nam</option>
                                    <option>Biển</option>
                                    <option>Núi</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-secondary btn-theme2">Tìm Kiếm</button>
                        </form>
                    </div>
                    {{-- <div class="column2">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-6">
                                <a href="javascript:">
                                    <div class="courses-item">
                                        <span class="fa fa-male"></span>
                                        <p>Số Lượng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6">
                                <a href="javascript:">
                                    <div class="courses-item">
                                        <span class="fa fa-suitcase"></span>
                                        <p>Hành Lí</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
                                <a href="javascript:">
                                    <div class="courses-item">
                                        <span class="fa fa-code"></span>
                                        <p>Web hỗ trọ</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
                                <a href="javascript:">
                                    <div class="courses-item">
                                        <span class="	fa fa-book"></span>
                                        <p>Khóa Học</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-4">
                                <a href="javascript:">
                                    <div class="courses-item mt-2">
                                        <span class="fa fa-image"></span>
                                        <p>Hình Ảnh</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-4">
                                <a href="javascript:">
                                    <div class="courses-item mt-2">
                                        <span class="fa fa-gg"></span>
                                        <p>Liên Kết</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-4">
                                <a href="javascript:">
                                    <div class="courses-item mt-2">
                                        <span class="fa fa-paper-plane-o"></span>
                                        <p>CheckIn</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-4">
                                <a href="javascript:">
                                    <div class="courses-item mt-2">
                                        <span class="fa fa-object-group"></span>
                                        <p>Nhóm</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="w3l-index2">
        <div class="main-w3 py-5" id="stats">
            <div class="container py-lg-3">
                <div class="row main-cont-wthree-fea">
                    @foreach ($intro_statistic as $item)
                        @if ($item->faculty_id == 3)
                            <div class="col-lg-3 col-sm-6">
                                <div class="grids-speci1">
                                    <h3 class="title-spe">{{ $item->value }}</h3>
                                    <p>{{ $item->name }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach


                </div>
            </div>
        </div>
    </section>


    <section class="w3l-customers-4" id="testimonials">
        <div id="customers4-block" class="py-5">
            <div class="container py-md-3">
                <div class="section-title align-center row">
                    <div class="item-top col-md-6 pr-md-5">
                        <div class="heading">
                            <h3 class="head text-white">{{ $slogan_intro_travel4 }}</h3>
                            <p class="my-3 head text-white">
                                {{ $slogan_intro_travel5 }}
                            </p>

                        </div>
                    </div>
                    <div class="item-top col-md-6 mt-md-0 mt-4">
                        <div class="item text-center">
                            @foreach ($student as $item)
                                @if ($item->faculty_id == 3)
                                    <div class="imgTitle">
                                        <img src="{{ asset($item['image']) }}" class="img-responsive" alt="" />
                                    </div>
                                    <h6 class="mt-3">{{ $item->name }}</h6>
                                    <p class="">{{ $item->intro }}</p>
                                    <p> {{ $item->evaluate }}</p>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="w3l-price-2" id="news">
        <div class="price-main py-5">
            <div class="container py-md-3">
                <div class="pricing-style-w3ls row py-md-5">
                    <div class="pricing-chart col-lg-6">
                        <h3 class="">Tin tức</h3>
                        <div class="tatest-top mt-md-5 mt-4">
                            @foreach ($news as $item)
                                @if ($item->category_id == 5)
                                    <div class="price-box btn-layout bt6">
                                        <div class="grid grid-column-2">
                                            <div class="column-6">
                                                <img src="{{ asset($item['image']) }}"
                                                    alt="" class="img-fluid">
                                            </div>
                                            <div class="column1">
                                                <div class="job-info">
                                                    <h6 class="pricehead"><a href="#">{{$item->title}} </a></h6>
                                                    <h5>{{$item->event_time}}</h5>
                                                    <p>{{$item->description
                                                    }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach


                        </div>
                        <div class="text-right mt-4">
                            {{-- <a class="btn btn-secondary btn-theme2" href="{{ route('tintuc') }}"> Xem tất cả</a> --}}
                            <a class="btn btn-secondary btn-theme2" href="#"> Xem tất cả</a>

                        </div>
                    </div>
                    <div class="pricing-chart col-lg-6">
                        <h3 class="">Thông Báo</h3>
                        <div class="tatest-top mt-md-5 mt-4">
                            <div class="price-box btn-layout bt6">
                                {{-- <div class="grid grid-column-2"> --}}
                                {{-- <div class="column-6">
                                        <img src="{{ asset('dist/layout/layout_khoadulich/images/20190920102331-31696.jpg') }}"
                                            alt="" class="img-fluid">
                                    </div> --}}
                                <div class="column1">
                                    <div class="job-info">
                                        <h6 class="pricehead">
                                            <a href="#">Khoa Du Lịch được tuyên dương </a>
                                        </h6>
                                        <h5>Tháng 6/24/2021</h5>
                                        <p>Tự hào khi khoa du lịch được tuyên dương trước trường ...</p>
                                    </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <div class="price-box btn-layout bt6">
                                {{-- <div class="grid grid-column-2"> --}}
                                {{-- <div class="column-6">
                                        <img src="{{ asset('dist/layout/layout_khoadulich/images/link-dhdl-45338.jpg') }}"
                                            alt="" class="img-fluid">
                                    </div> --}}
                                <div class="column1">

                                    <div class="job-info">
                                        <h6 class="pricehead">
                                            <a href="#">Khoa Du Lịch được tuyên dương </a>
                                        </h6>
                                        <h5>Tháng 6/24/2021</h5>
                                        <p>Tự hào khi khoa du lịch được tuyên dương trước trường ...</p>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                            <div class="price-box btn-layout bt6">
                                {{-- <div class="grid grid-column-2"> --}}
                                {{-- <div class="column-6">
                                        <img src="{{ asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg') }}"
                                            alt="" class="img-fluid">
                                    </div> --}}
                                <div class="column1">

                                    <div class="job-info">
                                        <h6 class="pricehead">
                                            <a href="#">Khoa Du Lịch được tuyên dương </a>
                                        </h6>
                                        <h5>Tháng 6/24/2021</h5>
                                        <p>Tự hào khi khoa du lịch được tuyên dương trước trường ...</p>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                            <div class="price-box btn-layout bt6">
                                {{-- <div class="grid grid-column-2"> --}}
                                {{-- <div class="column-6">
                                        <img src="{{ asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg') }}"
                                            alt="" class="img-fluid">
                                    </div> --}}
                                <div class="column1">

                                    <div class="job-info">
                                        <h6 class="pricehead">
                                            <a href="#">Khoa Du Lịch được tuyên dương </a>
                                        </h6>
                                        <h5>Tháng 6/24/2021</h5>
                                        <p>Tự hào khi khoa du lịch được tuyên dương trước trường ...</p>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="text-right mt-4">
                            {{-- <a class="btn btn-secondary btn-theme2" href="{{ route('thongbao') }}"> Xem tất cả</a> --}}
                            <a class="btn btn-secondary btn-theme2" href="#"> Xem tất cả</a>
                        </div>
                    </div>

                    <div class="w3l-faq-page col-lg-6 pl-3 pl-lg-5 mt-lg-0 mt-5">
                        <br>
                        <h3 class="">Sự kiện Của Khoa</h3>
                        <div class="events-top mt-md-5 mt-4">
                            <div class="events-top-left">
                                <div class="icon-top">
                                    <h3>20</h3>
                                    <p>Tháng3</p>
                                    <span>2021</span>
                                </div>
                            </div>
                            <div class="events-top-right">
                                <h6 class="pricehead">
                                    <a href="#">
                                        SỰ KIỆN TỔ CHỨC THAM QUAN CHIẾN TÍCH SƠN MỸ
                                    </a>
                                </h6>
                                <p class="mb-2 mt-3">Sinh viên sẽ được đi tham quan khu chiến tích sơn mỹ để mở rộng kiến
                                    thức...</p>
                                <li>05:00 - 21:00 </li>
                                <li class="melb">Việt Nam, Quảng Ngãi</li>
                            </div>
                        </div>
                        <div class="events-top mt-4">
                            <div class="events-top-left">
                                <div class="icon-top">
                                    <h3>29</h3>
                                    <p>Tháng 4</p>
                                    <span>2021</span>
                                </div>
                            </div>
                            <div class="events-top-right">
                                <h6 class="pricehead"><a href="#">
                                        SỰ KIỆN TỔ CHỨC THAM QUAN CHIẾN TÍCH SƠN MỸ
                                    </a></h6>
                                <p class="mb-2 mt-3">Sự kiện đặc biệt, nhà trường tổ chứ đi cố đô Huế cho sinh viên ....</p>
                                <li>05:00 - 22:00 </li>
                                <li class="melb">Việt Nam, Huế</li>
                            </div>
                        </div>
                        <div class="text-right mt-4">
                            <a class="btn btn-secondary btn-theme2" href="#"> Xem Tất Cả</a>
                        </div>
                    </div>
                    <div class="w3l-faq-page col-lg-6 pl-3 pl-lg-5 mt-lg-0 mt-5">
                        <br>
                        <h3 class="">Việc Làm Sinh Viên</h3>
                        <div class="events-top mt-md-5 mt-4">
                            <div class="events-top-left">
                                <div class="icon-top">
                                    <h3>20</h3>
                                    <p>Tháng3</p>
                                    <span>2021</span>
                                </div>
                            </div>
                            <div class="events-top-right">
                                <h6 class="pricehead"><a href="#">
                                        SỰ KIỆN TỔ CHỨC THAM QUAN CHIẾN TÍCH SƠN MỸ
                                    </a>
                                </h6>
                                <p class="mb-2 mt-3">Sinh viên sẽ được đi tham quan khu chiến tích sơn mỹ để mở rộng kiến
                                    thức...</p>
                                <li>05:00 - 21:00 </li>
                                <li class="melb">Việt Nam, Quảng Ngãi</li>
                            </div>
                        </div>
                        <div class="events-top mt-4">
                            <div class="events-top-left">
                                <div class="icon-top">
                                    <h3>29</h3>
                                    <p>Tháng 4</p>
                                    <span>2021</span>
                                </div>
                            </div>
                            <div class="events-top-right">
                                <h6 class="pricehead"><a href="#">
                                        SỰ KIỆN TỔ CHỨC THAM QUAN CHIẾN TÍCH SƠN MỸ
                                    </a></h6>
                                <p class="mb-2 mt-3">Sự kiện đặc biệt, nhà trường tổ chứ đi cố đô Huế cho sinh viên ....</p>
                                <li>05:00 - 22:00 </li>
                                <li class="melb">Việt Nam, Huế</li>
                            </div>
                        </div>
                        <div class="text-right mt-4">
                            <a class="btn btn-secondary btn-theme2" href="#"> Xem Tất Cả</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <div class="student w3layouts-agileinfo">
        <div class="container">
            <h3 class="ctdn">Cộng Tác Doanh Nghiệp</h3>
            <br>
            <div id="owl-congtac" class="owl-carousel owl-theme" data-interval="50" data-delay="100" data-ride="carousel">
                <img src="{{ asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-21823.gif') }}" width="100%"
                    height="auto" class="img-responsive" alt="">
                <img src="{{ asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-24394.jpg') }}" width="100%"
                    height="auto" class="img-responsive" alt="">
                <img src="{{ asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-36507.jpg') }}" width="100%"
                    height="auto" class="img-responsive" alt="">
                <img src="{{ asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-66470.jpg') }}" width="100%"
                    height="auto" class="img-responsive" alt="">
                <img src="{{ asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-39456.jpg') }}" width="100%"
                    height="auto" class="img-responsive" alt="">
                <img src="{{ asset('dist/layout/layout_khoadulich/images/Link-sai-gon-c-64210.jpg') }}" width="100%"
                    height="auto" class="img-responsive" alt="">

            </div>
        </div>
    </div>
    <br>
@stop
