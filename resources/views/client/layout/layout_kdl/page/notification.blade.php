@extends('client.layout.layout_kdl.index')
@section('title', 'Thông Báo')
@section('main')
    <section class="w3l-service-breadcrum">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <h2>Thông Báo Khoa Du Lịch</h2>
                <p><a href="#">Trang Chủ</a> &nbsp; / &nbsp; Sinh Viên &nbsp; / &nbsp; Thông Báo</p>
            </div>
        </div>
    </section>
    <!-- End Header Area -->


    <!--================Blog Area =================-->
    <br>
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_left_sidebar">
                        @foreach ($news as $key => $category)
                            <article class="row blog_item">
                                @foreach ($category['news'] as $item)
                                    <div class="col-md-12">
                                        <div class="blog_post">
                                            <div class="blog_details">
                                                <a href="{{route('thong-bao-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']])}}">
                                                    <h2>{{ $item->title }}</h2>
                                                    <br>
                                                </a>
                                                <p>
                                                    <span><a href="javascript:"> <i class="fas fa-user-alt"></i> Tác giả :
                                                            {{ $item->created_by }} |
                                                        </a></span>
                                                    <span><a href="javascript:"> <i class="far fa-calendar-alt"></i> Ngày :
                                                            {{ $item->event_time }}| </a></span>
                                                    <span><a href="javascript:"> <i class="fas fa-eye"></i> Lượt xem :
                                                            {{ $item->view_count }} view
                                                        </a></span>

                                                </p>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </article>

                        @endforeach

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
                {{-- @include('client.layout.layout_kdl.components.nvarbar') --}}
            </div>
        </div>
    </section>
@stop
