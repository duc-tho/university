@extends('client.layout.layout_kkt.index')

@section('title', 'kkt chi tiết tin tức')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=440819316956327&autoLogAppEvents=1" nonce="0sYEBTIt"></script>
<div class="search-box">
    <div class="serach-form">
        <div class="closebtn">
            <span></span>
            <span></span>
        </div>
        <form action="#">
            <input type="text" placeholder="Search by keyword">
            <button><i class="fa fa-search"></i></button>
        </form>
    </div> <!-- serach form -->
</div>
<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area">
                        <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Tin Tức</a></li>
                            {{-- <li class="breadcrumb-item active">The golden rules you need to know for a positive life</li> --}}
                        </ol>

                        <span class="color-aqua"><a href="blog-category-01.html" title="">Tin Tức</a></span>

                        <h3>Du lịch học đường thời kỳ hội nhập</h3>

                        <div class="blog-meta big-meta">
                            <small><a href="single.html" title="">20/02/2017</a></small>
                            <small><a href="blog-author.html" title="">Tác giả : Minh Long</a></small>
                            <small><a href="#" title=""><i class="fa fa-eye"></i> 344</a></small>
                        </div><!-- end meta -->

                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Chia Sẻ Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Chia Sẻ Twitter</span></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->

                    <div class="single-post-media">
                        <img src="{{asset('dist/layout/layout_kkt/images/du-lich-hoc-duong-thoi-ky-hoi-nhap-thumbnail-96548.png')}}" alt="" class="img-fluid">
                    </div><!-- end media -->

                    <div class="blog-content">
                        <div class="pp">
                            <p>Để giúp trẻ vượt qua được những áp lực trong học tập, các bậc phụ huynh cần có kế 
                                hoạch cụ thể cho con được vui chơi giải trí một cách hợp lý. Nhưng để lựa chọn 
                                cho các em chơi gì, tham gia hoạt động nào lại là điều không hề đơn giản. Để việc
                                 thực hiện du lịch học đường có hiểu quả thì cần có sự phối hợp chặt chẽ giữa gia
                                  đình và nhà trường</p>
                        </div><!-- end pp -->


                        <div class="pp">
                           <p>Trả lời cho những băn khoăn đó của các bậc phụ huynh, một giải pháp có thể mang lại
                                nhiều ích lợi cho trẻ đó là các chương trình “Du lịch học đường” dành cho các em
                                 từ Mẫu giáo, Tiểu học đến Trung học cơ sở, Trung học phổ thông cho đến Cao đẳng 
                                 và Đại học…. Du lịch học đường là một lựa chọn tốt cho nhà trường cũng như các vị 
                                 phụ huynh trong việc tìm ra giải pháp giúp các em có thời gian vui chơi, giảm căng 
                                 thẳng và áp lực trong việc học tập. Đồng thời đây cũng là cơ hội cho các doanh nghiệp
                                  lữ hành đưa ra những sản phẩm mới đáp ứng nhu cầu ngày càng tăng của thị trường.</p>
                            <img src="{{asset('dist/layout/layout_kkt/images/20190724142043_67606.jpg')}}"  alt="">
                                  <p>Khi tham gia vào các chương trình du lịch học đường các em được tham gia vào các
                                 hoạt động sản xuất nông nghiệp như xay lúa, giã gạo, tát nước, úp nơm bắt cá 
                                 và nướng cá bằng rơm, ngoài ra các em còn được trãi nghiệm nhập vai làm các 
                                 công việc của các cô chú….</p>
                            <p>Ở nước ta, việc tổ chức các chương trình du lịch tham quan có mục đích học tập
                                 đã được tổ chức từ nhiều năm nay. Có hai cách tổ chức, một là các trường tự 
                                 tổ chức, hai là thuê các công ty du lịch. Khi các cơ sở giáo dục, đào tạo tự 
                                 tổ chức thường phát sinh nhiều khó khăn và rủi ro do số lượng học sinh, sinh
                                  viên lớn và không chuyên nghiệp nên các đơn vị không lường trước cũng như không
                                   kiểm soát được tour dẫn đến chất lượng của các chuyến đi không tốt, hiệu quả 
                                   học tập không cao, thiếu an toàn.</p>
                        </div><!-- end pp -->
                    </div><!-- end content -->

                    <div class="blog-title-area">
                        <div class="tag-cloud-single">
                            <span>Tags</span>
                            <small><a href="#" title="">Tin Tức</a></small>
                            <small><a href="#" title="">Thông Báo</a></small>
                            <small><a href="#" title="">Sự Kiện</a></small>
                            <small><a href="#" title="">Việc Làm</a></small>
                        </div><!-- end meta -->

                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->

                    <hr class="invis1">

                    <div class="custombox authorbox clearfix">
                        <div class="fb-comments" data-href="http://127.0.0.1:5500/tintucdon.html" data-width="100%" data-numposts="5"></div>
                    </div><!-- end author-box -->

                    <hr class="invis1">
                    <div class="fb-comments" data-href="http://127.0.0.1:8000/khoa-kinh-te/tin-tuc/chi-tiet-tin-tuc" data-width="" data-numposts="5"></div>
                
                </div><!-- end page-wrapper -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <h2 class="widget-title">Tìm kiếm</h2>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm ....">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Tin Tức Liên Quan</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">
                                            Ngành Tài chính ngân hàng – Học để làm gì?</h5>
                                        <small>12/12/2018</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/blog_square_02.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">10 lời khuyên bổ ích cho sinh viên mới tốt nghiệp</h5>
                                        <small>12/04/2018</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="upload/blog_square_03.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">
                                            Ban Chủ Nhiệm khoa Kinh tế làm việc với Ban cán sự các khóa năm học 2017 – 2018</h5>
                                        <small>07/01/2019</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Thông Báo </h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">
                                           Mô hình Đại học không vì lợi nhuận đầu tiên tại Việt Nam</h5>
                                        <small>12/12/2018</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/blog_square_02.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Thêm một Hội thảo khoa học về Du lịch được tổ chức tại BQLĐATL Trường Đại học Du lịch Sài Gòn</h5>
                                        <small>12/04/2018</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="upload/blog_square_03.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">
                                            Ban Chủ Nhiệm khoa Kinh tế làm việc với Ban cán sự các khóa năm học 2017 – 2018</h5>
                                        <small>07/01/2019</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div>
                    
                    <div class="widget">
                        <h2 class="widget-title">Sự Kiện </h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">
                                           Mô hình Đại học không vì lợi nhuận đầu tiên tại Việt Nam</h5>
                                        <small>12/12/2018</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="upload/blog_square_02.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Thêm một Hội thảo khoa học về Du lịch được tổ chức tại BQLĐATL Trường Đại học Du lịch Sài Gòn</h5>
                                        <small>12/04/2018</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="upload/blog_square_03.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">
                                            Ban Chủ Nhiệm khoa Kinh tế làm việc với Ban cán sự các khóa năm học 2017 – 2018</h5>
                                        <small>07/01/2019</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div>

                    {{-- <div class="widget">
                        <h2 class="widget-title">Popular Categories</h2>
                        <div class="link-widget">
                            <ul>
                                <li><a href="#">Fahsion <span>(21)</span></a></li>
                                <li><a href="#">Lifestyle <span>(15)</span></a></li>
                                <li><a href="#">Art & Design <span>(31)</span></a></li>
                                <li><a href="#">Health Beauty <span>(22)</span></a></li>
                                <li><a href="#">Clothing <span>(66)</span></a></li>
                                <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                <li><a href="#">Food & Drink <span>(87)</span></a></li>
                            </ul>
                        </div><!-- end link-widget -->
                    </div><!-- end widget --> --}}

                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@endsection
