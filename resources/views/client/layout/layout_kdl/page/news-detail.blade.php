@extends('client.layout.layout_kdl.index')
@section('title','Chi Tiết Tin Tức')
@section('main')
<section class="w3l-service-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Tin tức Khoa Du Lịch</h2>
            <p><a href="#">Trang Chủ</a> &nbsp; / &nbsp; Tin Tức</p>
        </div>
    </div>
</section>
<!-- End Header Area -->


<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">

                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{asset( $news_travel['image'] )}}" width="100%" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            <div class="post_tag">
                                <a href="javascript:">Thông tin,</a>
                                <a class="active" href="javascript:">Du lịch,</a>
                                <a href="javascript:">Việc làm,</a>
                                <a href="javascript:">Sự kiện</a>
                            </div>
                            <ul class="blog_meta list">
                                <li><a href="javascript:">Tác giả :{{ $news_travel['created_by'] }}<i class="fas fa-user-alt"></i></a></li>
                                <li><a href="javascript:">Ngày : {{ $news_travel['event_time'] }}<i class="far fa-calendar-alt"></i></a></li>
                                <li><a href="javascript:">Lượt xem : {{ $news_travel['view_count'] }} view<i class="fas fa-eye"></i></a></li>
                                <li><a href="javascript:">Bình luận :120 <i class="fas fa-comments"></i></a></li>
                            </ul>
                            <ul class="social-links">
                                <li><a href="javascript:"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:"><i class="fa fa-github"></i></a></li>
                                <li><a href="javascript:"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 blog_details">

                        <h2>{{ $news_travel['title'] }}</h2>
                        <br>
                        <p class="excert">
                            {!! $news_travel['content'] !!}
                        </p>
                    </div>

                    {{-- <div class="col-lg-12">
                        <div class="quotes">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand
                            why you should have to spend money on boot camp when you can get the MCSE study
                            materials yourself at a fraction of the camp price. However, who has the willpower to
                            actually sit through a self-imposed MCSE training.
                        </div>
                    </div> --}}
                    {{-- @endforeach --}}
                </div>

                <div class="comments-area">

                    <div class="comment-list">
                        <div class="fb-comments" data-href="http://localhost:81/web_TRAVEL/details_news.html" data-width="680" data-numposts="6"></div>
                    </div>

                </div>

            </div>
            @include('client.layout.layout_kdl.components.nvarbar')
        </div>
    </div>
</section>
@stop
