@extends('client.layout.layout_kdl.index')
@section('title','Thực Tập')
@section('main')
<section class="w3l-service-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Thực Tập Khoa Du Lịch</h2>
            <p><a href="{{route('khoadulich')}}">Trang Chủ</a> &nbsp; / &nbsp; Sinh Viên &nbsp; / &nbsp; Thực Tập</p>
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
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="javascript:">Thông tin,</a>
                                    <a class="active" href="javascript:" id="cate">Du lịch,</a>
                                    <a href="javascript:">Việc làm,</a>
                                    <a href="javascript:">Sự kiện</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="javascript:">Tác giả : Ngọc Lập<i class="fas fa-user-alt"></i></a></li>
                                    <li><a href="javascript:">Ngày : 05/01/2020<i class="far fa-calendar-alt"></i></a></li>
                                    <li><a href="javascript:">Lượt xem : 1.2 view <i class="fas fa-eye"></i></a></li>
                                    <li><a href="javascript:">Bình luận :120 <i class="fas fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src=" {{asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg')}}" width="100%" alt="">

                                <div class="blog_details">
                                    <a href="{{route('chitiettintuc')}}">
                                        <h2>Sự kiện sinh viên đi tham quan dã ngoại</h2>
                                    </a>
                                    <p>Nhằm mở mang kiến thức cũng như tầm nhìn cho sinh viên trường đã tổ chức 1 chuyến
                                        đi tham quan cho sinh viên khoa du lịch, thực hiện mong muốn được học hỏi thêm kinh
                                        nghiệm từ chuyến đi thực tế này.</p>
                                    <a href="single-blog.html" class="white_bg_btn">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="javascript:">Thông tin,</a>
                                    <a class="active" href="javascript:" id="cate">Du lịch,</a>
                                    <a href="javascript:">Việc làm,</a>
                                    <a href="javascript:">Sự kiện</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="javascript:">Tác giả : Ngọc Lập<i class="fas fa-user-alt"></i></a></li>
                                    <li><a href="javascript:">Ngày : 05/01/2020<i class="far fa-calendar-alt"></i></a></li>
                                    <li><a href="javascript:">Lượt xem : 1.2 view <i class="fas fa-eye"></i></a></li>
                                    <li><a href="javascript:">Bình luận :120 <i class="fas fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="{{asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg')}}" width="100%" alt="">

                                <div class="blog_details">
                                    <a href="{{route('chitiettintuc')}}">
                                        <h2>Sự kiện sinh viên đi tham quan dã ngoại</h2>
                                    </a>
                                    <p>Nhằm mở mang kiến thức cũng như tầm nhìn cho sinh viên trường đã tổ chức 1 chuyến
                                        đi tham quan cho sinh viên khoa du lịch, thực hiện mong muốn được học hỏi thêm kinh
                                        nghiệm từ chuyến đi thực tế này.</p>
                                    <a href="single-blog.html" class="white_bg_btn">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="javascript:">Thông tin,</a>
                                        <a class="active" href="javascript:" id="cate">Du lịch,</a>
                                        <a href="javascript:">Việc làm,</a>
                                        <a href="javascript:">Sự kiện</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="javascript:">Tác giả : Ngọc Lập<i class="fas fa-user-alt"></i></a></li>
                                        <li><a href="javascript:">Ngày : 05/01/2020<i class="far fa-calendar-alt"></i></a></li>
                                        <li><a href="javascript:">Lượt xem : 1.2 view <i class="fas fa-eye"></i></a></li>
                                        <li><a href="javascript:">Bình luận :120 <i class="fas fa-comments"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="{{asset('dist/layout/layout_khoadulich/images/20170828165923-45184.jpg')}}" width="100%" alt="">

                                <div class="blog_details">
                                    <a href="{{route('chitiettintuc')}}">
                                        <h2>Sự kiện sinh viên đi tham quan dã ngoại</h2>
                                    </a>
                                    <p>Nhằm mở mang kiến thức cũng như tầm nhìn cho sinh viên trường đã tổ chức 1 chuyến
                                        đi tham quan cho sinh viên khoa du lịch, thực hiện mong muốn được học hỏi thêm kinh
                                        nghiệm từ chuyến đi thực tế này.</p>
                                    <a href="single-blog.html" class="white_bg_btn">Xem thêm</a>
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
