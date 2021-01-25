@extends('client.layout.layout_kdl.index')
@section('title','Thông Báo')
@section('main')
<section class="w3l-service-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Thông Báo Khoa Du Lịch</h2>
            <p><a href="{{route('khoadulich')}}">Trang Chủ</a> &nbsp; / &nbsp; Sinh Viên &nbsp; / &nbsp; Thông Báo</p>
        </div>
    </div>
</section>
<!-- End Header Area -->


<!--================Blog Area =================-->
<br>
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    <article class="row blog_item">
                        <div class="col-md-12">
                            <div class="blog_post">
                                {{-- <img src=" {{asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg')}}" width="100%" alt=""> --}}
                                <div class="blog_details">
                                    <a href="{{ route('chitiettintuc') }}">
                                        <h2>Tuyển dụng hướng dẫn viên du lịch mới ra trường</h2>
                                        <br>
                                    </a>
                                    <p>Nhằm mở mang kiến thức cũng như tầm nhìn cho sinh viên trường đã tổ chức 1 chuyến
                                        đi tham quan cho sinh viên khoa du lịch, thực hiện mong muốn được học hỏi thêm kinh
                                        nghiệm từ chuyến đi thực tế này.</p>
                                    <p>
                                        <span><a href="javascript:"><i class="fas fa-user-alt"></i>Tác giả : Ngọc Lập | </a></span>
                                        <span><a href="javascript:"><i class="far fa-calendar-alt"></i> Ngày : 05/01/2020 | </a></span>
                                        <span><a href="javascript:"><i class="fas fa-eye"></i> Lượt xem : 1.2 view | </a></span>
                                        <span><a href="javascript:"><i class="fas fa-comments"></i> Bình luận :120 </a></span>
                                    </p>
                                    <a href="{{ route('chitiettintuc') }}" class="white_bg_btn">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-12">
                            <div class="blog_post">
                                {{-- <img src=" {{asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg')}}" width="100%" alt=""> --}}
                                <div class="blog_details">
                                    <a href="{{ route('chitiettintuc') }}">
                                        <h2>Sự kiện sinh viên đi tham quan dã ngoại</h2>
                                        <br>
                                    </a>
                                    <p>Nhằm mở mang kiến thức cũng như tầm nhìn cho sinh viên trường đã tổ chức 1 chuyến
                                        đi tham quan cho sinh viên khoa du lịch, thực hiện mong muốn được học hỏi thêm kinh
                                        nghiệm từ chuyến đi thực tế này.</p>
                                    <p>
                                        <span><a href="javascript:"><i class="fas fa-user-alt"></i>Tác giả : Ngọc Lập | </a></span>
                                        <span><a href="javascript:"><i class="far fa-calendar-alt"></i> Ngày : 05/01/2020 | </a></span>
                                        <span><a href="javascript:"><i class="fas fa-eye"></i> Lượt xem : 1.2 view | </a></span>
                                        <span><a href="javascript:"><i class="fas fa-comments"></i> Bình luận :120 </a></span>
                                    </p>
                                    <a href="{{ route('chitiettintuc') }}" class="white_bg_btn">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-12">
                            <div class="blog_post">
                                {{-- <img src=" {{asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg')}}" width="100%" alt=""> --}}
                                <div class="blog_details">
                                    <a href="{{ route('chitiettintuc') }}">
                                        <h2>Sự kiện sinh viên đi tham quan dã ngoại</h2>
                                        <br>
                                    </a>
                                    <p>Nhằm mở mang kiến thức cũng như tầm nhìn cho sinh viên trường đã tổ chức 1 chuyến
                                        đi tham quan cho sinh viên khoa du lịch, thực hiện mong muốn được học hỏi thêm kinh
                                        nghiệm từ chuyến đi thực tế này.</p>
                                    <p>
                                        <span><a href="javascript:"><i class="fas fa-user-alt"></i>Tác giả : Ngọc Lập | </a></span>
                                        <span><a href="javascript:"><i class="far fa-calendar-alt"></i> Ngày : 05/01/2020 | </a></span>
                                        <span><a href="javascript:"><i class="fas fa-eye"></i> Lượt xem : 1.2 view | </a></span>
                                        <span><a href="javascript:"><i class="fas fa-comments"></i> Bình luận :120 </a></span>
                                    </p>
                                    <a href="{{ route('chitiettintuc') }}" class="white_bg_btn">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-12">
                            <div class="blog_post">
                                {{-- <img src=" {{asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg')}}" width="100%" alt=""> --}}
                                <div class="blog_details">
                                    <a href="{{ route('chitiettintuc') }}">
                                        <h2>Sự kiện sinh viên đi tham quan dã ngoại</h2>
                                        <br>
                                    </a>
                                    <p>Nhằm mở mang kiến thức cũng như tầm nhìn cho sinh viên trường đã tổ chức 1 chuyến
                                        đi tham quan cho sinh viên khoa du lịch, thực hiện mong muốn được học hỏi thêm kinh
                                        nghiệm từ chuyến đi thực tế này.</p>
                                    <p>
                                        <span><a href="javascript:"><i class="fas fa-user-alt"></i>Tác giả : Ngọc Lập | </a></span>
                                        <span><a href="javascript:"><i class="far fa-calendar-alt"></i> Ngày : 05/01/2020 | </a></span>
                                        <span><a href="javascript:"><i class="fas fa-eye"></i> Lượt xem : 1.2 view | </a></span>
                                        <span><a href="javascript:"><i class="fas fa-comments"></i> Bình luận :120 </a></span>
                                    </p>
                                    <a href="{{ route('chitiettintuc') }}" class="white_bg_btn">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-12">
                            <div class="blog_post">
                                {{-- <img src=" {{asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg')}}" width="100%" alt=""> --}}
                                <div class="blog_details">
                                    <a href="{{ route('chitiettintuc') }}">
                                        <h2>Sự kiện sinh viên đi tham quan dã ngoại</h2>
                                        <br>
                                    </a>
                                    <p>Nhằm mở mang kiến thức cũng như tầm nhìn cho sinh viên trường đã tổ chức 1 chuyến
                                        đi tham quan cho sinh viên khoa du lịch, thực hiện mong muốn được học hỏi thêm kinh
                                        nghiệm từ chuyến đi thực tế này.</p>
                                    <p>
                                        <span><a href="javascript:"><i class="fas fa-user-alt"></i>Tác giả : Ngọc Lập | </a></span>
                                        <span><a href="javascript:"><i class="far fa-calendar-alt"></i> Ngày : 05/01/2020 | </a></span>
                                        <span><a href="javascript:"><i class="fas fa-eye"></i> Lượt xem : 1.2 view | </a></span>
                                        <span><a href="javascript:"><i class="fas fa-comments"></i> Bình luận :120 </a></span>
                                    </p>
                                    <a href="{{ route('chitiettintuc') }}" class="white_bg_btn">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <nav class="blog-pagination justify-content-center d-flex" id="navcenter">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="javascript:" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <span class="fas fa-angle-double-left"></span>
                                    </span>
                                </a>
                            </li>
                            <li class="page-item"><a href="javascript:" class="page-link">01</a></li>
                            <li class="page-item active"><a href="javascript:" class="page-link">02</a></li>
                            <li class="page-item"><a href="javascript:" class="page-link">03</a></li>
                            <li class="page-item"><a href="javascript:" class="page-link">04</a></li>
                            <li class="page-item"><a href="javascript:" class="page-link">...</a></li>
                            <li class="page-item"><a href="javascript:" class="page-link">09</a></li>
                            <li class="page-item">
                                <a href="javascript:" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="fas fa-angle-double-right"></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            @include('client.layout.layout_kdl.components.nvarbar')
        </div>
    </div>
</section>
@stop
