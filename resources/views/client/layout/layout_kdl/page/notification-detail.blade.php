@extends('client.layout.layout_kdl.index')
@section('title','Chi Tiết Tin Tức')
@section('main')
<section class="w3l-service-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>{{$category['title']}} Khoa Du Lịch</h2>
            <p><a href="#">Trang Chủ</a> &nbsp; / &nbsp; {{$category['title']}} &nbsp; / &nbsp; {{$news['title']}}</p>
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
                            <img class="img-fluid" src="{{asset( $news['image'] )}}" width="100%" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            <div class="post_tag">
                                <a class="active" href="{{ route('thong-bao', [$faculty['slug']]) }}">{{ $category['title'] }}</a>
                            </div>
                            <ul class="blog_meta list">
                                <li><a href="javascript:">Tác giả : {{ $news['created_by'] }}<i class="fas fa-user-alt"></i></a></li>
                                <li><a href="javascript:">Ngày : {{ $news['event_time'] }}<i class="far fa-calendar-alt"></i></a></li>
                                <li><a href="javascript:">Lượt xem : {{ $news['view_count'] }} view<i class="fas fa-eye"></i></a></li>
                            </ul>
                            {{-- <ul class="social-links">
                                <li><a href="javascript:"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:"><i class="fa fa-github"></i></a></li>
                                <li><a href="javascript:"><i class="fa fa-behance"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 blog_details">

                        <h2>{{ $news['title'] }}</h2>
                        <br>
                        <p class="excert">
                            {!! $news['content'] !!}
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
            @include('client.layout.layout_kdl.components.nvarbar_notifications')
        </div>
    </div>
</section>
@stop
