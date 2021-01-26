@extends('client.layout.layout_nghethuat.index')

@section('title', 'Khoa Nghệ Thuật - Tin tức')

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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area">
                        <!-- <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active">The golden rules you need to know for a positive life</li>
                        </ol> -->
                        <span class="color-aqua"><a href="blog-category-01.html" title="">Ngành - Cao đẳng</a></span>
                        <h3>Nghành Diễn Viên Kịch Nói Và Điện Ảnh</h3>
                        <div class="blog-meta big-meta">
                            <small><a href="javascript:" title="">21/07/2021</a></small>
                            {{-- <small><a href="blog-author.html" title="">by Jessica</a></small> --}}
                            <small><a href="javascript:" title=""><i class="fa fa-eye"></i> 2344</a></small>
                        </div><!-- end meta -->
                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="javascript:" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                <li><a href="javascript:" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a href="javascript:" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->
                    <div class="single-post-media">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/gioithieu.jpg') }}" alt="" class="img-fluid">
                    </div><!-- end media -->
                    <div class="blog-content">
                        <div class="pp">
                            <p><b>THANH NHẠC LÀ GÌ? Thanh nhạc là kiểu nhạc với yếu tố chủ chốt nhất là giọng hát của ca sĩ - thuộc phần trung âm (mid) của bài nhạc. Ở đây, giọng hát của ca sĩ được xem là nhạc cụ chính của bản nhạc.</b></p>
                            <h3><strong>MỤC TIÊU ĐÀO TẠO</strong></h3>
                            <p>Chương trình đào tạo ngành Thanh nhạc trình độ cao đẳng nhằm trang bị cho sinh viên những kiến thức cơ bản về âm nhạc, về kỹ thuật biểu diễn. Sau khi tốt nghiệp trở thành ca sỹ chuyên nghiệp, hoạt động trong các đơn vị nghệ thuật và có khả năng học tiếp lên ở trình độ cao hơn.
                                <br>Có lập trường tư tưởng vững vàng, có đạo đức và nếp sống lành mạnh, say mê nghề nghiệp, nắm vững đường lối chủ trương, chính sách của Đảng và pháp luật của Nhà nước, đặc biệt trên lĩnh vực văn hóa nghệ thuật.
                                <br>Nắm vững những kiến thức cơ bản về khoa học xã hội và nhân văn, hệ thống kiến thức về lĩnh vực âm nhạc nói chung và biểu diễn thanh nhạc nói riêng.
                                <br>Có kỹ thuật ca hát và năng lực thực hành nghề nghiệp tương xứng với trình độ đào tạo.</p>
                        </div><!-- end pp -->
                        <!-- <img src="upload/menu_05.jpg" alt="" class="img-fluid img-fullwidth"> -->
                        <div class="pp">
                            <h3><strong>CƠ HỘI NGHỀ NGHIỆP</strong></h3>
                            <p> -      Nghệ sĩ biểu diễn: Bạn có thể là tay chơi nhạc cụ như guitar, piano,
                                violin, saxophone, sáo, cello, trumpet, hoặc cũng có thể trở thành ca sĩ… biểu diễn ở các quán cà phê, phòng trà, quán bar, pub, nhà hàng, khách sạn. Nếu tập luyện chuyên sâu về chuyên môn, chịu khó quảng bá hình ảnh của bạn, bạn có thể có thêm danh tiếng và làm việc với nhiều nghệ sĩ lớn và biểu diễn ở những sân khấu chuyên nghiệp, đài truyền hình…
                                <br>-      Nghệ sĩ thu âm – kĩ thuật viên thu âm: với kiến thức về âm nhạc đã học, bạn có thể học thêm về kĩ thuật âm thanh rồi mở một phòng thu nho nhỏ, thu âm tại địa phương, hoặc có thể xin vào làm việc tại các công ty sản xuất âm nhạc lớn nhỏ tùy vào năng lực của bạn
                                <br>-      Ca sĩ, nhạc sĩ phòng thu: bạn có thể nhận các công việc
                                như thu giọng hát cho những quảng cáo TV, thu âm các bài hát của các công ty sự kiện, bài hát chủ để của nhiều công ty khác, hát bè cho các sản phẩm âm nhạc của ca sĩ nghệ sĩ khác
                                <br>-      Nhạc sĩ hòa âm phối khí: Công việc này cũng cần tính chuyên môn cao và nhiều kinh nghiệm. Bạn có thể thực hiện các dự án âm nhạc cho cá nhân, công ty, ca sĩ, nhạc sĩ… thu nhập của bạn sẽ tăng dần theo chất lượng, uy tín và kinh nghiệm của bạn
                            </p>
                        </div><!-- end pp -->
                    </div><!-- end content -->
                    <!-- end title -->
                    <hr class="invis1">
                </div><!-- end page-wrapper -->
            </div><!-- end col -->


            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@include('client.layout.layout_nghethuat.components.news.footer')
@endSection

