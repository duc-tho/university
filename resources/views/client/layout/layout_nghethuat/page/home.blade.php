@extends('client.layout.layout_nghethuat.index')

@section('title', 'Khoa nghệ thật')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('head')
@include('client.layout.layout_nghethuat.components.head')
@endsection

@section('main')
@include('client.layout.layout_nghethuat.components.header')
<section class="hero-wrap">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end">
            <img class="one-third align-self-end order-md-last img-fluid" src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/hinh1.jpg') }}" alt="">
            <div class="one-forth d-flex align-items-center ftco-animate">
                <div class="text mt-5">
                    <span class="subheading">Chào mừng đến với</span>
                    <h1>Khoa</h1>
                    <h1>Nghệ Thuật</h1>
                    <p>Khoa Nghệ thuật được thành lập từ năm 2006, gồm có 06 chuyên ngành: Đạo diễn, Diễn viên kịch nói và điện ảnh, Thanh nhạc, Thiết kế Đồ họa, Thiết kế Thời trang và Quay phim.</p>
                    {{-- <p><a href="{{ route('khoanghethuat-gioithieu') }}" class="btn btn-primary py-3 px-4">Xem thêm</a></p> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about img ftco-section" id="about-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center" style="border: solid 3px black;">
                        <video width="100%" height="100%" controls>
                            <source src="dist/layout/layout_kkt/images/videoschool.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 pl-md-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4">Giới thiệu về trường</h2>
                        <p>Nhân bản - Cộng đồng - Quốc tế</p>
                        <div class="text-about">
                            <h4>SỨ MỆNH TẦM NHÌN</h4>
                            <p>Trường Đại học Du lịch Sài Gòn khi thành lập sẽ trở thành trường Đại học hàng đầu của Việt Nam trong lĩnh vực và nghiên cứu du lịch.</p>
                            <!-- <h4>Read On Any Devices</h4> -->
                            <p>Năm 2007 là trường nằm trong top 200 trường Đại học du lịch tốt nhất châu Á. Năm 2037 là trường nằm trong top 100 trường Đại học du lịch châu Á.</p>
                            <h4>Giá trị cốt lõi</h4>
                            <p>- Xây dựng các giá trị nhân bản của dân tộc.</p>
                            <p>- Ưu tiên lợi ích cộng đồng và định hướng quốc tế hóa.</p>
                            <p>- Tôn trọng sự khác biệt, tính phản biện trong sự đa dạng.</p>
                            <p class="button_news"><a href="{{ route('khoanghethuat-gioithieu') }}" class="btn btn-primary2 py-3 px-4">Xem thêm</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row d-md-flex align-items-center align-items-stretch">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 bg-light">
                    <div class="text">
                        <strong class="number" data-number="1100">0</strong>
                        <span>Sinh viên</span>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 bg-light">
                    <div class="text">
                        <strong class="number" data-number="1200">0</strong>
                        <span>Tốt nghiệp</span>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 bg-light">
                    <div class="text">
                        <strong class="number" data-number="340">0</strong>
                        <span>Giảng viên</span>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 bg-light">
                    <div class="text">
                        <strong class="number" data-number="12000">0</strong>
                        <span>Nhân viên</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt" id="chapter-section">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">ĐÀO TẠO</h2>
                <h4 class="mb-4">Cao Đẳng</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <nav id="navi">
                    <ul>
                        <li><a href="#page-1">Ngành diễn viên kịch nói và điện ảnh</a></li>
                        <li><a href="#page-2">Ngành thanh nhạc</a></li>
                        <li><a href="#page-3">Ngành quay phim</a></li>
                        <li><a href="#page-4">Ngành đồ họa</a></li>
                        <li><a href="#page-5">Ngành thiết kế thời trang</a></li>
                        <li><a href="#page-6">Ngành may thời trang</a></li>
                        <!-- <li><a href="#page-7">Epilogue</a></li>
                        <li><a href="#page-8">Epigraph</a></li> -->
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <div id="page-1" class="page bg-light one row">
                    <div class="col-md-4">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/link-dhdl-50981.png') }}" width="100%" height="100%">
                    </div>
                    <div class="col-md-8">
                        <h2 class="heading">Ngành diễn viên kịch nói và điện ảnh</h2>
                        <p class="detall">DIỄN VIÊN LÀ GÌ? Diễn viên điện ảnh là một nghề nghiệp, một nghệ sĩ trong lĩnh vực "nghệ thuật thứ bảy". Diễn viên điện ảnh là một diễn viên làm việc với các công cụ như máy quay, đèn, đạo cụ và cùng cộng tác với đạo diễn, hoá trang, quay phim, bạn diễn (diễn viên khác) để tạo nên một tác phẩm nghệ thuật, là một bộ phim. Đó có thể là một phim truyền hình hoặc là phim chiếu rạp.</p>
                        <a href="{{ route('chi_tiet_nghanh_nghethuat') }}" class="btn btn-primary py-3 px-4">Chi tiết</a>
                        <a href="{{ route('khoanghethuat-danhsachgiaovien') }}" class="btn btn-primary py-3 px-4">Giảng viên</a>
                    </div>
                </div>
                <div id="page-2" class="page bg-light two row">
                    <div class="col-md-4">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/link-dhdl-32794.jpg') }}" width="100%" height="100%">
                    </div>
                    <div class="col-md-8">
                        <h2 class="heading">Ngành thanh nhạc</h2>
                        <p class="detall">THANH NHẠC LÀ GÌ? Thanh nhạc là kiểu nhạc với yếu tố chủ chốt nhất là giọng hát của ca sĩ - thuộc phần trung âm (mid) của bài nhạc. Ở đây, giọng hát của ca sĩ được xem là nhạc cụ chính của bản nhạc.</p>
                        <a href="{{ route('chi_tiet_nghanh_nghethuat') }}" class="btn btn-primary py-3 px-4">Chi tiết</a>
                        <a href="{{ route('khoanghethuat-danhsachgiaovien') }}" class="btn btn-primary py-3 px-4">Giảng viên</a>
                    </div>
                </div>
                <div id="page-3" class="page bg-light three row">
                    <div class="col-md-4">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/link-dhdl-59448.jpg') }}" width="100%" height="100%">
                    </div>
                    <div class="col-md-8">
                        <h2 class="heading">Ngành quay phim</h2>
                        <p class="detall">QUAY PHIM LÀ GÌ? Quay phim là người trực tiếp điều khiển máy quay dưới sự chỉ đạo của các cinematographer, đạo diễn hình ảnh hoặc đạo diễn chính để quay các cảnh quay. Nhìn chung, cinematographer và đạo diễn hình ảnh không trực tiếp điều khiển máy quay, nhưng đôi khi ba vị trí này chỉ do một người đảm nhiệm.</p>
                        <a href="{{ route('chi_tiet_nghanh_nghethuat') }}" class="btn btn-primary py-3 px-4">Chi tiết</a>
                        <a href="{{ route('khoanghethuat-danhsachgiaovien') }}" class="btn btn-primary py-3 px-4">Giảng viên</a>
                    </div>
                </div>
                <div id="page-4" class="page bg-light four row">
                    <div class="col-md-4">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/gioithieu.jpg') }}" width="100%" height="100%">
                    </div>
                    <div class="col-md-8">
                        <h2 class="heading">Ngành đồ họa</h2>
                        <p class="detall">OVới sự phát triển nhanh chóng của truyền thông và quảng cáo tại Việt Nam, Thiết kế đồ họa đang trở thành một trong những ngành hấp dẫn giới trẻ, nhất là với những ai đam mê sáng tạo và thích làm việc trong môi trường năng động.</p>
                        <a href="{{ route('chi_tiet_nghanh_nghethuat') }}" class="btn btn-primary py-3 px-4">Chi tiết</a>
                        <a href="{{ route('khoanghethuat-danhsachgiaovien') }}" class="btn btn-primary py-3 px-4">Giảng viên</a>
                    </div>
                </div>
                <div id="page-5" class="page bg-light five row">
                    <div class="col-md-4">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/tu-tin-voi-black-white-thumbnail-56570.png') }}" width="100%" height="100%">
                    </div>
                    <div class="col-md-8">
                        <h2 class="heading">Ngành thiết kế thời trang</h2>
                        <p class="detall">THIẾT KẾ THỜI TRANG LÀ GÌ? Thiết kế Thời trang là ngành gắn liền với nền công nghiệp làm đẹp, gồm ba lĩnh vực chính: trang phục, phụ kiện, trang sức. Người làm công việc thiết kế thời trang cần phải sáng tạo, tìm tòi, nghiên cứu để cho ra đời những tác phẩm thời trang theo xu hướng thẩm mỹ của xã hội giúp làm đẹp cho con người, cho cuộc sống với cả hai hướng: hướng trình diễn nghệ thuật (trang phục biểu diễn) và hướng ứng dụng thực tế (trang phục thường
                            ngày).</p>
                        <a href="{{ route('chi_tiet_nghanh_nghethuat') }}" class="btn btn-primary py-3 px-4">Chi tiết</a>
                        <a href="{{ route('khoanghethuat-danhsachgiaovien') }}" class="btn btn-primary py-3 px-4">Giảng viên</a>
                    </div>
                </div>
                <div id="page-6" class="page bg-light six row">
                    <div class="col-md-4">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/tu-tin-voi-black-white-thumbnail-56570.png') }}" width="100%" height="100%">
                    </div>
                    <div class="col-md-8">
                        <h2 class="heading">Ngành may thời trang</h2>
                        <p class="detall">Thiết kế may mặc đóng vai trò vô cùng quan trọng đối với ngành công nghệ thời trang. Nhờ vào công nghệ thời trang, loài người có thể tạo ra được những sản phẩm trang phục, phụ kiện đính kèm vừa ý, dựa trên những chất liệu tốt nhất và những bản vẽ chuyên nghiệp nhất. Do đó, ngành thời trang, may mặc luôn thu hút các bạn trẻ theo học, đặc biệt là những bạn trẻ yêu thích mỹ thuật, thời trang với những phong cách mới, đầy sáng tạo để tạo ra những sản phẩm
                            thời trang nghệ thuật gắn liền với đời sống.</p>
                        <a href="{{ route('chi_tiet_nghanh_nghethuat') }}" class="btn btn-primary py-3 px-4">Chi tiết</a>
                        <a href="{{ route('khoanghethuat-danhsachgiaovien') }}" class="btn btn-primary py-3 px-4">Giảng viên</a>
                    </div>
                </div>
                <!-- <div id="page-7" class= "page bg-light seven">
                    <h2 class="heading">Epilogue</h2>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                </div>
                <div id="page-8" class= "page bg-light eight">
                    <h2 class="heading">Epigraph</h2>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                </div> -->
            </div>
        </div>
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h4 class="mb-4">Trung Cấp</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <nav id="navi">
                    <ul>
                        <li><a href="#pagee-1">Ngành may thời trang</a></li>
                        <li><a href="#pagee-2">Ngành thiết kế đồ họa</a></li>
                        <li><a href="#pagee-3">Ngành thanh nhạc</a></li>
                        <li><a href="#pagee-4">Ngành diễn viên kịch điện ảnh</a></li>
                        <!--<li><a href="#page-5">Ngành thiết kế thời trang</a></li>
                        <li><a href="#page-6">Ngành may thời trang</a></li>
                        <li><a href="#page-7">Epilogue</a></li>
                        <li><a href="#page-8">Epigraph</a></li> -->
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <div id="pagee-1" class="page bg-light one row">
                    <div class="col-md-4">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/tu-tin-voi-black-white-thumbnail-56570.png') }}" width="100%" height="100%">
                    </div>
                    <div class="col-md-8">
                        <h2 class="heading">Ngành may thời trang</h2>
                        <p class="detall">Sau khi tốt nghiệp trung cấp May thời trang học viên có khả năng : Quá trình đào tạo nghề thiêt kế thời trang của trường dạy cho học viên: Phương pháp vẽ - Phương pháp nghiên cứu là con đường dẫn bạn đến với tư tưởng sáng tác thời trang - thiết kế mẫu rập để cho ra đời được những sản phẩm theo tư tưởng sáng tác của chính mình - Qui trình may sản phẩm.</p>
                        <a href="{{ route('chi_tiet_nghanh_nghethuat') }}" class="btn btn-primary py-3 px-4">Chi tiết</a>
                        <a href="{{ route('khoanghethuat-danhsachgiaovien') }}" class="btn btn-primary py-3 px-4">Giảng viên</a>
                    </div>
                </div>
                <div id="pagee-2" class="page bg-light two row">
                    <div class="col-md-4">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/20180118145548-56466.jpg') }}" width="100%" height="100%">
                    </div>
                    <div class="col-md-8">
                        <h2 class="heading">Ngành thiết kế đồ họa</h2>
                        <p class="detall">Sau khi tốt nghiệp trung cấp thiết kế đồ họa học viên có khả năng: - Thiết kế chế tác mẫu sản phẩm, mẫu bao bì, logo; mẫu vàng bạc đá quí, mẫu trang phục thời trang ..…</p>
                        <a href="{{ route('chi_tiet_nghanh_nghethuat') }}" class="btn btn-primary py-3 px-4">Chi tiết</a>
                        <a href="{{ route('khoanghethuat-danhsachgiaovien') }}" class="btn btn-primary py-3 px-4">Giảng viên</a>
                    </div>
                </div>
                <div id="pagee-3" class="page bg-light three row">
                    <div class="col-md-4">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/20190920102332-47960.jpg') }}" width="100%" height="100%">
                    </div>
                    <div class="col-md-8">
                        <h2 class="heading">Ngành thanh nhạc</h2>
                        <p class="detall">Sau khi tốt nghiệp trung cấp thanh nhạc học viên có khả năng : - Kỹ năng xử lý hơi và lấy hơi đúng chổ, cải thiện chất giọng (quá trầm hoặc quá cao), cách lên tone, ổn định vị trí âm thanh và các kỹ thuật, kỹ năng chuyên môn cần có để trở thành một ca sĩ chuyên nghiệp.</p>
                        <a href="{{ route('chi_tiet_nghanh_nghethuat') }}" class="btn btn-primary py-3 px-4">Chi tiết</a>
                        <a href="{{ route('khoanghethuat-danhsachgiaovien') }}" class="btn btn-primary py-3 px-4">Giảng viên</a>
                    </div>
                </div>
                <div id="pagee-4" class="page bg-light four row">
                    <div class="col-md-4">
                        <img src="{{ asset('dist/layout/layout_nghethuat/images/dem-dien-bao-cao-thuc-tap-tot-nghiep-cua-sinh-vien-lop-k112dv1-thumbnail-34516.jpg') }}" width="100%" height="100%">
                    </div>
                    <div class="col-md-8">
                        <h2 class="heading">Ngành diễn viên kịch điện ảnh</h2>
                        <p class="detall">Bạn muốn trở thành diễn viên nổi tiếng và chuyên nghiệp được xuất hiện trên các bộ phim truyền hình, điện ảnh ăn khách, các vở diễn trên sân khấu cả nước hay trở thành những MC được nhiều người yêu thích? Bạn có đam mê được hoạt động trong lĩnh vực nghệ thuật về diễn xuất, muốn được trải nghiệm cuộc sống qua nhiều dạng vai khác nhau để mang lại tiếng cười cũng như khơi gợi niềm cảm xúc trong mỗi khán giả? Hãy đăng ký chuyên ngành Diễn viên Kịch – Điện
                            ảnh.</p>
                        <a href="{{ route('chi_tiet_nghanh_nghethuat') }}" class="btn btn-primary py-3 px-4">Chi tiết</a>
                        <a href="{{ route('khoanghethuat-danhsachgiaovien') }}" class="btn btn-primary py-3 px-4">Giảng viên</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-5 heading-section text-center ftco-animate">
                <h2 class="mb-4">TUYỂN SINH CAO ĐẲNG HỆ 9+</h2>
                <span class="subheading">Đảm bảo chuẩn đầu ra</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center d-flex ftco-animate">
                <div class="services-1 bg-light">
                    <span class="icon">
                        <i class="flaticon-user-experience"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">Học văn hóa song song đào tạo nghề</h3>
                        <p>Đại học 4 năm 8 học kỳ</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center d-flex ftco-animate">
                <div class="services-1 bg-light">
                    <span class="icon">
                        <i class="flaticon-network"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">Marketing Goals</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center d-flex ftco-animate">
                <div class="services-1 bg-light">
                    <span class="icon">
                        <i class="flaticon-innovation"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">Targetting Vission</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="ftco-section testimony-section ftco-no-pb" id="testimonial-section">
    <div class="img img-bg border" style="background-image: url({{ asset('dist/layout/layout_nghethuat/images/bg_4.jpg') }});"></div>
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
                <!-- <span class="subheading">Testimonial</span> -->
                <h2 class="mb-3">Thông Báo</h2>
                <a href="{{ route('khoanghethuat-thongbao') }}" class="btn btn-primary1 py-3 px-4">Xem thêm</a>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap p-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <a href="{{ route('khoanghethuat-chitietthongbao') }}" class="title_tb"><b>Thông báo Chương trình Công tác học sinh, sinh viên Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn Năm học 2019 - 2020</b></a>
                                <!-- <p class="mbb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                                <p><span class="fa fa-clock-o hour"></span> 18/05/2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <b><a href="{{ route('khoanghethuat-chitietthongbao') }}" class="title_tb">Thông báo Xét tuyển và Thi tuyển Hệ Cao đẳng năm 2017</a></b>
                                <!-- <p class="mbb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                                <p><span class="fa fa-clock-o hour"></span> 23/08/2017</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <b><a href="{{ route('khoanghethuat-chitietthongbao') }}" class="title_tb">Thông báo Xét tuyển và Thi tuyển Hệ Cao đẳng năm 2017</a></b>
                                <!-- <p class="mbb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                                <p><span class="fa fa-clock-o hour"></span> 23/10/2019</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text">
                                <b><a href="{{ route('khoanghethuat-chitietthongbao') }}" class="title_tb">Chủ tịch UBND TP.HCM công nhận Ban Quản lý Đề án thành lập Trường Đại học Du lịch Sài Gòn</a></b>
                                <!-- <p class="mbb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                                <p><span class="fa fa-clock-o hour"></span>23/08/2017</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                            <div class="text d-flex flex-column justify-content-between">
                                <b><a href="{{ route('khoanghethuat-chitietthongbao') }}" class="title_tb">Thông báo Xét tuyển và Thi tuyển Hệ Cao đẳng năm 2017</a></b>
                                <!-- <p class="mbb-4">Far far away, behind the word mou ntains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                                <p><span class="fa fa-clock-o hour"></span> 23/10/2019</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-project" id="projects-section">
    <div class="container">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Một số</span>
                <h2 class="mb-4">TIN TỨC - SỰ KIỆN</h2>
                <h4 class="mb-4">NỔI BẬT</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url({{ asset('dist/layout/layout_nghethuat/images/hinh1_files/khoa-nghe-thuat-om-tron-bo-giai-thuong-cua-act-gottalent-2019-thumbnail-33023.jpg') }});">
                    <div class="overlay"></div>
                    <div class="text p-4">
                        <a href="{{ route('khoanghethuat-chitiettintuc') }}">
                            <h6>
                                <p class="tittle-news">Khoa Nghệ thuật ôm trọn bộ giải thưởng của ACT GOTTALENT 2019</p>
                            </h6>
                        </a>
                        <p class="mbbb-4">Chúc mừng các hotboy, hotgirl của Khoa Nghệ thuật đã ôm trọn bộ giải của cuộc thi ACT GOTTALENT 2019 được diễn ra vào ngày 06/5/2019 do Phòng CTHS SV tổ chức.</p>
                        <span>08/05/2019</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url({{ asset('dist/layout/layout_nghethuat/images/hinh1_files/sinh-vien-chuyen-nganh-dien-vien-kich-noi-va-dien-anh-day-an-tuong-va-chuyen-nghiep-trong-bai-thi-cuoi-ky-mon-mua-va-hinh-the-thumbnail-99373.jpg') }});">
                    <div class="overlay"></div>
                    <div class="text p-4">
                        <a href="{{ route('khoanghethuat-chitiettintuc') }}">
                            <h6>
                                <p class="tittle-news">Sinh viên ngành Diễn viên kịch nói và điện ảnh đầy ấn tượng và chuyên nghiệp trong bài thi cuối kỳ môn Múa và Hình thể</p>
                            </h6>
                        </a>
                        <p class="mbbb-4">Sau một kỳ học và tập luyện, 02 lớp K112DV và K122DV ngành Diễn viên kịch nói và điện ảnh đã có một buổi thi cuối kỳ môn Múa và Hình thể. Đây là môn học dưới sự chỉ dẫn đầy tâm huyết của đạo diễn Trần Minh Cường, giảng viên khoa Nghệ thuật, các bạn đã trình bày ấn tượng với 08 tiết mục bộ Đêm hoa đăng; Lý đất giồng; Long phụng kiếm; Vượt bão; Hồn Việt; Hội xuân; Múa gậy và Làng phù đổng.</p>
                        <span>01/06/2018</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url({{ asset('dist/layout/layout_nghethuat/images/hinh1_files/tt-sk2.jpg') }});">
                    <div class="overlay"></div>
                    <div class="text p-4">
                        <a href="{{ route('khoanghethuat-chitiettintuc') }}">
                            <h6>
                                <p class="tittle-news">Ngành Thiết kế đồ họa và sự lựa chọn hoàn hảo</p>
                            </h6>
                        </a>
                        <p class="mbbb-4">Bạn yêu thích phim hoạt hình hay các cảnh phim hoành tráng trên màn ảnh, bạn đã từng mơ ước tạo nên những không gian sân khấu rực rỡ sắc màu cho những vở diễn, bạn yêu thích chuyên môn thiết kế Đồ họa, thiết kế quảng cáo trên Internet, truyền hình, phim ảnh, chế bản in ấn, đủ khả năng tổ chức, sắp xếp và điều hành các công việc tại các công ty thiết kế, doanh nghiệp sản xuất kinh doanh thuộc các thành phần kinh tế và những cơ quan đơn vị thuộc ngành văn
                            hóa thông tin, truyền thông, báo chí.</p>
                        <span>02/04/2018</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url({{ asset('dist/layout/layout_nghethuat/images/hinh1_files/tt-sk1.jpg') }});">
                    <div class="overlay"></div>
                    <div class="text p-4">
                        <a href="{{ route('khoanghethuat-chitiettintuc') }}">
                            <h6>
                                <p class="tittle-news">Học Đạo diễn sân khấu tại Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn</p>
                            </h6>
                        </a>
                        <p class="mbbb-4">Bạn muốn dàn dựng các tác phẩm sân khấu, chương trình biểu diễn tại các nhà hát, đoàn nghệ thuật, trên truyền hình cả nước, hay tổ chức các dự án thuộc lĩnh vực sân khấu? Bạn hãy đăng ký học chuyên ngành Đạo diễn sân khấu tại Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn trong năm 2018 nhé.</p>
                        <span>30/03/2018</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url({{ asset('dist/layout/layout_nghethuat/images/hinh1_files/suc-hut-tu-gian-hang-tuyen-sinh-truong-cao-dang-van-hoa-nghe-thuat-va-du-lich-sai-gon-tai-can-tho-thumbnail-64536.jpg') }});">
                    <div class="overlay"></div>
                    <div class="text p-4">
                        <a href="{{ route('khoanghethuat-chitiettintuc') }}">
                            <h6>
                                <p class="tittle-news">Sức hút từ gian hàng tuyển sinh trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn tại Cần Thơ</p>
                            </h6>
                        </a>
                        <p class="mbbb-4">Ngày 18/3/2018, Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn cùng nhiều trường đại học, cao đẳng và các đơn vị hoạt động trong lĩnh vực giáo dục đã tham gia Ngày hội tư vấn tuyển sinh – hướng nghiệp 2018 do báo Tuổi Trẻ, Bộ GD-ĐT, Tổng cục Giáo dục nghề nghiệp (Bộ LĐ-TB&XH), Trường ĐH Cần Thơ phối hợp tổ chức với sự đồng hành của Tập đoàn Vingroup.</p>
                        <span>23/10/2019</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url({{ asset('dist/layout/layout_nghethuat/images/hinh1_files/tt-sk3.jpg') }});">
                    <div class="overlay"></div>
                    <div class="text p-4">
                        <a href="{{ route('khoanghethuat-chitiettintuc') }}">
                            <h6>
                                <p class="tittle-news">Nghệ sỹ không còn là “Xướng ca vô loài”</p>
                            </h6>
                        </a>
                        <p class="mbbb-4">Không có sự ngọt ngào, hạnh phúc và vinh quang nào mà dễ dàng đạt được khi không có sự cố gắng nổ lực rèn luyện và học tập. Những ca sỹ, nghệ sỹ nổi tiếng cũng vậy, để có thể đứng trên sân khấu và có hàng triệu khán giả biết đến và ngưỡng mộ thì họ đã phải “đổ mồ hôi” dày công luyện tập chuyên môn, rèn luyện kỹ năng nghề nghiệp. Nghề ca sỹ, diễn viên hiện nay rất được xã hội trân quý, không còn được xem là “nghiệp cầm ca” hay “xướng ca vô loài” theo định
                            kiến xưa nữa.</p>
                        <span>21/03/2018</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url({{ asset('dist/layout/layout_nghethuat/images//hinh1_files/tt-sk4.jpg') }});">
                    <div class="overlay"></div>
                    <div class="text p-4">
                        <a href="{{ route('khoanghethuat-chitiettintuc') }}">
                            <h6>
                                <p class="tittle-news">Lễ bảo vệ đồ án tốt nghiệp của sinh viên Khoa Nghệ thuật</p>
                            </h6>
                        </a>
                        <p class="mbbb-4">Ngày 18 tháng 01 năm 2018, những sinh viên Khóa 8 và Khóa 9 Chuyên ngành Thiết kế thời trang của Khoa Nghệ thuật Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn đã bảo vệ thành công đồ án tốt nghiệp.</p>
                        <span>25/01/2018</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="project img ftco-animate d-flex justify-content-center align-items-end" style="background-image: url({{ asset('dist/layout/layout_nghethuat/images/hinh1_files/tt-sk5.jpg') }});">
                    <div class="overlay"></div>
                    <div class="text p-4">
                        <a href="{{ route('khoanghethuat-chitiettintuc') }}">
                            <h6>
                                <p class="tittle-news">Học Thanh nhạc tại trường Saigonact và cơ hội việc làm</p>
                            </h6>
                        </a>
                        <p class="mbbb-4">Âm nhạc vốn được xem là món ăn tinh thần không thể thiếu trong đời sống của con người. Với sự phát triển của công nghệ số, bộ môn nghệ thuật này ngày càng phát triển mạnh mẽ, đến gần với công chúng hơn. Đối với nhiều bạn trẻ, âm nhạc là con đường của ước mơ và hoạt động âm nhạc luôn có sức hút đối với khán thính giả bốn phương. Học Thanh nhạc tại Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn, sin viên hoàn toàn tự tin thể hiện mình với cơ hội
                            việc làm vững chắc.</p>
                        <span>26/02/2018</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <p class="button_news"><a href="{{ route('khoanghethuat-tintuc') }}" class="btn btn-primary2 py-3 px-4">Xem thêm</a></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="author-section">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{ asset('dist/layout/layout_nghethuat/images/hinh1_files/fee.png') }});">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 d-flex">
                <div class="py-md-5 w-100 bg-light px-md-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <span class="subheading">Bạn muốn biết thêm thông tin?</span>
                                <h2 class="mb-4">ĐĂNG KÝ TƯ VẤN</h2>
                                <div class="row no-gutters block-9">
                                    <div class="col-md-12 order-md-last d-flex">
                                        <form action="#" class="bg-light p-4 p-md-12 contact-form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Họ tên...">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email...">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Tiêu đề...">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Lời nhắn..."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Gửi" class="btn btn-primary py-3 px-5">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">LIÊN HỆ</h2>
                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
            </div>
        </div>
        <div class="row d-flex contact-info mb-5">
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Địa chỉ</h3>
                        <p class="contact_ad">Khoa Nghệ thuật Lầu 1</p>
                        <p class="contact_ad">Cơ sở 2: 53/1 Phan Văn Hớn, Đường Tân Thới Nhất 8, Khu phố 5, P.Tân Thới Nhất, Q.12-Tp.HCM.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Điện thoại</h3>
                        <p><a href="#">(028) 628 1462</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Email</h3>
                        <p><a href="#">khoanghethuat@
                                daihocdulich.edu.vn</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="align-self-stretch box text-center p-4 bg-light">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-globe"></span>
                    </div>
                    <div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href="#">http://khoanghethuat .daihocdulich.edu.vn</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-light p-4 p-md-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Họ tên...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tiêu đề...">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Lời nhắn..."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Gửi" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6894657581147!2d106.61180311433719!3d10.835059461072627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bccf94e353d%3A0xfa8ac0e6f1ed4de9!2zNzAgxJDGsOG7nW5nIFTDom4gVGjhu5tpIE5o4bqldCA4LCBUw6JuIFRo4bubaSBOaOG6pXQsIFF14bqtbiAxMiwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1609298887970!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style="border:0;"
                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <!-- <div id="map" class="map"></div> -->
                <!-- <div class="img" style="background-image: url({{ asset('dist/layout/layout_nghethuat/images/about.jpg') }});"></div> -->
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/dt-1.jpg') }}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/dt-2.jpg') }}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/dt-3.jpg') }}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/dt-4.png') }}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/dt-5.jpg') }}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/dt-6.jpg') }}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/dt-7.jpg') }}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <!-- <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="{{ asset('dist/layout/layout_nghethuat/images/hinh1_files/dt-8.png') }}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-md-12 col-lg ftco-animate">
                <a href="#" class="partner d-flex justify-content-center"><img src="dist/layout/layout_kkt/images/hinh1_files/dt-9.gif" class="img-fluid" alt="Colorlib Template"></a>
            </div> -->
        </div>
        <br><br>
    </div>
</section>

@include('client.layout.layout_nghethuat.components.loader')
@include('client.layout.layout_nghethuat.components.footer')
@include('client.layout.layout_nghethuat.components.script')
@endSection
