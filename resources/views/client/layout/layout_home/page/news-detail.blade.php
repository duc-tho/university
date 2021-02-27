@extends('client.layout.default.index')

@section('title', 'Chi tiết tin tức')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
@include('client.layout.default.components.headernews')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=440819316956327&autoLogAppEvents=1" nonce="VShJsKfQ"></script>
<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area">


                        <span class="color-aqua"><a href="blog-category-01.html" title="">Tin Tức</a></span>

                        <h3>Du lịch học đường thời kỳ hội nhập</h3>

                        <div class="blog-meta big-meta">
                            <small><a href="single.html" title="">21/07/2017</a></small>
                            <small><a href="blog-author.html" title="">Tác giả: Minh Lộc</a></small>
                            <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                        </div><!-- end meta -->

                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->

                    <div class="single-post-media">
                        <img src="{{ asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png') }}" alt="" class="img-fluid">
                    </div><!-- end media -->

                    <div class="blog-content">
                        <div class="pp">
                            <p>Để giúp trẻ vượt qua được những áp lực trong học tập, các bậc phụ huynh cần có kế hoạch cụ thể cho con được vui chơi giải trí một cách hợp lý. Nhưng để lựa chọn cho các em chơi gì, tham gia hoạt động nào lại là điều không hề đơn giản. Để việc thực hiện du lịch học đường có hiểu quả thì cần có sự phối hợp chặt chẽ giữa gia đình và nhà trường</p>
                            <p>Trả lời cho những băn khoăn đó của các bậc phụ huynh, một giải pháp có thể mang lại nhiều ích lợi cho trẻ đó là các chương trình “Du lịch học đường” dành cho các em từ Mẫu giáo, Tiểu học đến Trung học cơ sở, Trung học phổ thông cho đến Cao đẳng và Đại học…. Du lịch học đường là một lựa chọn tốt cho nhà trường cũng như các vị phụ huynh trong việc tìm ra giải pháp giúp các em có thời gian vui chơi, giảm căng thẳng và áp lực trong việc học tập. Đồng thời đây cũng là cơ hội cho các doanh nghiệp lữ hành đưa ra những sản phẩm mới đáp ứng nhu cầu ngày càng tăng của thị trường.</p>
                            <p>Khi tham gia vào các chương trình du lịch học đường các em được tham gia vào các hoạt động sản xuất nông nghiệp như xay lúa, giã gạo, tát nước, úp nơm bắt cá và nướng cá bằng rơm, ngoài ra các em còn được trãi nghiệm nhập vai làm các công việc của các cô chú….</p>
                        </div><!-- end pp -->


                       <!-- end pp -->
                    </div><!-- end content -->

                    <div class="blog-title-area">
                        <div class="tag-cloud-single">
                            <span>Tags</span>
                            <small><a href="#" title="">lifestyle</a></small>
                            <small><a href="#" title="">colorful</a></small>
                            <small><a href="#" title="">trending</a></small>
                            <small><a href="#" title="">another tag</a></small>
                        </div><!-- end meta -->

                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->

                <!-- end row -->

                    <hr class="invis1">



                    <div class="custombox clearfix">
                        <h4 class="small-title">Tin liên quan</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/nganh-tai-chinh-ngan-hang-hoc-de-lam-gi-thumbnail-99181 (1).png') }}" alt=""  class="img-fluid float-left" >
                                            <div class="hovereffect">
                                                <span class=""></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="single.html" title="">Hội Nhập Quốc Tế Cộng Đồng</a></h4>
                                        <small><a href="blog-category-01.html" title="">Tin Tức</a></small>
                                        <small><a href="blog-category-01.html" title="">21/07/2017</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <div class="col-lg-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/nganh-tai-chinh-ngan-hang-hoc-de-lam-gi-thumbnail-99181 (1).png') }}" alt=""  class="img-fluid float-left" >
                                            <div class="hovereffect">
                                                <span class=""></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="single.html" title="">Hội Nhập Quốc Tế Cộng Đồng</a></h4>
                                        <small><a href="blog-category-01.html" title="">Tin Tức</a></small>
                                        <small><a href="blog-category-01.html" title="">21/07/2017</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end custom-box -->

                    <hr class="invis1">

                    <div class="custombox clearfix">
                        <div class="fb-comments" data-href="http://127.0.0.1:8000/tin-tuc/danh-muc-tin-tuc/chi-tiet-tin-tuc" data-width="750" data-numposts="5"></div>

                    </div><!-- end custom-box -->

                    <hr class="invis1">

                    <!-- <div class="custombox clearfix">
                        <h4 class="small-title">Leave a Reply</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-wrapper">
                                    <input type="text" class="form-control" placeholder="Your name">
                                    <input type="text" class="form-control" placeholder="Email address">
                                    <input type="text" class="form-control" placeholder="Website">
                                    <textarea class="form-control" placeholder="Your comment"></textarea>
                                    <button type="submit" class="btn btn-primary">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div><!-- end page-wrapper -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                @include('client.layout.default.components.sidebar')
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
