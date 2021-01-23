@extends('client.layout.layout_nghethuat.index')

@section('title', 'Khoa Nghệ Thuật - Chi tiết giới thiệu')

@section('head')
@include('client.layout.layout_nghethuat.components.news.head')
@endsection

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('script')
@include('client.layout.layout_nghethuat.components.news.script')
@endsection

@section('main')
@include('client.layout.layout_nghethuat.components.news.header')
<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area">
                        <!-- <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active">The golden rules you need to know for a positive life</li>
                        </ol> -->
                        <span class="color-aqua"><a href="blog-category-01.html" title="">Giới thiệu</a></span>
                        <h3>Tổng quan sứ mệnh và tầm nhìn</h3>
                        <div class="blog-meta big-meta">
                            <small><a href="single.html" title="">22/08/2017</a></small>
                            <!-- <small><a href="blog-author.html" title="">by Jessica</a></small> -->
                            <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                        </div><!-- end meta -->
                    </div><!-- end title -->
                    <div class="blog-content">
                        <p><b>Khoa Nghệ thuật được thành lập từ năm 2006, gồm có 06 chuyên ngành: Đạo diễn, Diễn viên kịch nói và điện ảnh, Thanh nhạc, Thiết kế Đồ họa, Thiết kế Thời trang và Quay phim</b></p>
                        <p>Dưới sự quan tâm sâu sát của BGH Nhà trường, gần 10 năm qua Khoa đã hội tụ được một đội ngũ giảng viên dày dạn kinh nghiệm, được đào tạo chính quy trong và ngoài nước, có học hàm học vị cao, đó là các Giáo sư, Tiến sĩ, Thạc sĩ, NSND, NSƯT, và những chuyên gia đầu ngành giàu lòng nhiệt huyết đã đào tạo cho xã hội hàng trăm ca sĩ, diễn viên, đạo diễn và các Nhà Thiết kế Thời trang, Đồ họa có chất lượng cao. Nó như một dòng nước mát chảy dài trên mảnh đất ươm mầm
                            những tài năng Nghệ thuật cho đất nước trong hiện tại cũng như tương lai – BQLĐATL Trường Đại học Du lịch Sài Gòn.</p>
                        <p>Khoa Nghệ thuật bậc Đại học gồm có 4 ngành: Diễn viên kịch-điện ảnh, Thanh nhạc, Đạo diễn điện ảnh truyền hình, Mỹ thuật ứng dụng, Quay phim. Cao đẳng gồm 6 ngành: Thanh nhạc, Diễn viên kịch nói và điện ảnh, Quay phim, Đạo diễn sân khấu, Thiết kế đồ họa, Thiết kế thời trang; bậc Trung cấp chuyên nghiệp gồm 4 ngành: Thanh nhạc, Diễn viên, Thiết kế đồ họa, Thiết kế thời trang.</p>
                        <b>Cơ sở 1:</b> Tại số 53/1 Phan Văn Hớn, Đường Tân Thới Nhất 8, Khu phố 5, Phường Tân Thới Nhất, Quận 12, TP.HCM. Diện tích đất là 0,255 ha và diện tích xây dựng là 10.000 m2.
                        <br><b>Cơ sở 2:</b> Trụ sở chính của trường tọa lạc tại 160/72 Phan Huy Ích, Phường 12, Quận Gò Vấp, Tp.HCM với Diện tích đất là 0,655 ha và diện tích xây dựng là 27.000 m2, được xây dựng thành một cao ốc 06 tầng và khu ký túc xá khang trang đi vào hoạt động từ tháng 11/2008.
                        <br><b>Cơ sở 3:</b> Đây là địa điểm dự kiến sẽ xây dựng cơ sở của BQLĐATL Trường Đại học Du lịch Sài Gòn. Tọa lạc tại Khu I-2 Khu đô thị Tây Bắc, Củ Chi, Tp.HCM.
                        <br><b>Sứ mệnh:</b><br>
                        Cung cấp nguồn nhân lực có chất lượng tốt trong lĩnh vực đào tạo. Đổi mới và cung cấp cho sinh viên chương trình giáo dục chất lượng cao, môi trường học tập hiệu quả.
                        Chương trình đào tạo hướng tới sự phát triển tư duy trí tuệ toàn diện, biểu hiện sáng tạo thông qua một chương trình giảng dạy có cấu trúc cân bằng giữa lý thuyết và thực tiễn, kết hợp hài hòa giữa nghệ thuật và công nghệ, giữa sáng tạo và logic.
                        <br><b>Tầm nhìn:</b><br>
                        Xây dựng Khoa Nghệ thuật trở thành trung tâm đào tạo nguồn nhân lực chất lượng cao về giáo dục nghệ thuật trong nước và khu vực, hướng tới hội nhập quốc tế về đào tạo nguồn nhân lực chất lượng cao trên các lĩnh vực văn hoá, nghệ thuật; là cơ sở bồi dưỡng, nghiên cứu khoa học và ứng dụng nghệ thuật có uy tín. Tạo dựng môi trường văn hóa chất lượng đậm chất nhân văn - hiện đại.
                    </div><!-- end content -->
                    <div class="blog-title-area">
                        <div class="tag-cloud-single">
                            <span>Thẻ</span>
                            <small><a href="chitiet_introduce.html" title="">Ban chủ nhiệm</a></small>
                            <small><a href="chitiet_introduce.html" title="">Cơ cấu tổ chức</a></small>
                            <small><a href="chitiet_introduce.html" title="">Mục tiêu</a></small>
                            <small><a href="chitiet_introduce.html" title="">Định hướng phát triển</a></small>
                        </div><!-- end meta -->
                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Chia sẻ Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Chia sẻ Twitter</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->
                    <hr class="invis1">
                </div><!-- end page-wrapper -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <h2 class="widget-title">Tìm kiếm</h2>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!-- end widget -->
                    <div class="widget">
                        <h2 class="widget-title">Thông báo</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="chitiet_notice.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <h5 class="mb-1">Thông báo Chương trình Công tác học sinh, sinh viên Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn Năm học 2019 - 2020</h5>
                                        <small>18/05/2019</small>
                                    </div>
                                </a>
                                <a href="chitiet_notice.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <h5 class="mb-1">Thông báo Xét tuyển và Thi tuyển Hệ Cao đẳng năm 2017</h5>
                                        <small>23/08/2017</small>
                                    </div>
                                </a>
                                <a href="chitiet_notice.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <h5 class="mb-1">Chủ tịch UBND TP.HCM công nhận Ban Quản lý Đề án thành lập Trường Đại học Du lịch Sài Gòn</h5>
                                        <small>23/08/2017</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->
                    <div class="widget">
                        <h2 class="widget-title">Giới thiệu</h2>
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <!-- <img src="upload/banner_03.jpg" alt="" class="img-fluid"> -->
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/BY2vU5bFsJU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->
                    <div class="widget">
                        <h2 class="widget-title">Liên quan</h2>
                        <div class="link-widget">
                            <ul>
                                <li><a href="news.html">Hoạt động sinh viên<span>(21)</span></a></li>
                                <li><a href="news.html">Tin chuyên ngành<span>(15)</span></a></li>
                                <li><a href="news.html">Bảng tin khoa<span>(31)</span></a></li>
                                <li><a href="news.html">Tạp chí khoa học<span>(22)</span></a></li>
                                <li><a href="news.html">Bảng vàng thành tích<span>(66)</span></a></li>
                                <!-- <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                <li><a href="#">Food & Drink <span>(87)</span></a></li> -->
                            </ul>
                        </div><!-- end link-widget -->
                    </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@include('client.layout.layout_nghethuat.components.news.footer')
@endsection
