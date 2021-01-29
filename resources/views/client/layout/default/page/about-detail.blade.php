@extends('client.layout.default.index')

@section('title', 'Chi tiết giới thieu')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
@include('client.layout.default.components.header')
<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area">
                        <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Giới thiệu</a></li>
                            <li class="breadcrumb-item active">Tổng quan</li>
                        </ol>

                        <h3 class="h4">Tổng quan về đại học du lịch</h3>

                        <div class="blog-meta big-meta">
                            <small><a href="{{ route('home-about-detail', 'chi-tiet-gioi-thieu') }}" title="">Đăng ngày 07/01/2021</a></small>
                            <small><a href="blog-author.html" title="">bởi Jessica</a></small>
                            <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                        </div>
                    </div>

                    <div class="single-post-media">
                        <img src="http://daihocdulich.edu.vn/admin3917/template/kindeditor/attached/image/20190904/20190904092424_92135.jpg" alt="" class="img-fluid">
                    </div><!-- end media -->

                    <div class="blog-content">
                        <div class="pp">
                            <p>Với mục tiêu đào tạo giáo dục có uy tín trong cả nước, là trung tâm đào tạo nhân tài và cung cấp nguồn nhân lực chất lượng cao, đáp ứng yêu cầu của sự nghiệp công nghiệp hóa hiện đại hóa và hội nhập kinh tế quốc tế của đất nước, Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn không ngừng đầu tư trang thiết bị, xây dựng cơ sở vật chất, có khuôn viên và quy mô ngày càng mở rộng và hiện đại phục vụ công tác giảng dạy và học tập của giảng viên và sinh viên. Năm 2017, trường đã được Thủ tướng chính phủ đồng ý chủ trương thành lập và công nhận BQL ĐA thành lập trường Đại học Du lịch Sài Gòn (SAIGONTU). Khi có quyết định thành lập chính thức, SAIGONTU sẽ là trường đại học về du lịch đầu tiên tại Việt Nam. Hiện nay, trường đang hoàn tất những khâu cuối cùng của việc thành lập trường Đại học Du lịch Sài Gòn.</p>
                            <p>
                                Đã có chủ trương giao đất của Ủy ban Nhân dân Thành phố Hồ Chí Minh tại Khu I - 2, Khu Đô thị Tây Bắc, Huyện Củ Chi, Tp.HCM; diện tích đất là 5,1 ha và diện tích xây dựng là 5.000 m2. Hiện nay, BQLĐATL Trường Đại học Du lịch Sài Gòn đã có giấy chứng nhận đầu tư số 41221000216 ngày 30 tháng 06 năm 2015 của Ủy ban Nhân dân Thành phố Hồ Chí Minh cho phép đầu tư 305 tỷ xây dựng trường tại Khu Đô thị Tây Bắc, Huyện Củ Chi, Tp.HCM. Khi xây dựng xong, cơ sở này có khả năng đào tạo hơn 20.000 sinh viên.
                            </p>
                                {{-- <strong></strong> --}}
                        </div>
                    </div>
                </div>
            </div>

            @include('client.layout.default.components.sidebar')
            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
