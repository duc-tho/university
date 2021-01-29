@extends('client.layout.default.index')

@section('title', 'Tin tức')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
@include('client.layout.default.components.headernews')
<section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">
            <div class="left-side">
                <div class="masonry-box post-media">
                    <img src="http://daihocdulich.edu.vn/upload/news/2020/09/11/tu-nguyen-va-dia-danh-thumbnail-55623.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-aqua"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Nghiên cứu</a></span>
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">"Từ nguyên" và "Địa danh"</a></h4>
                                <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Đăng ngày 21/12/2020 </a></small>
                                <small><a href="blog-author.html" title="">bởi Mei Misaki</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

                <div class="masonry-box small-box post-media">
                    <img src="http://daihocdulich.edu.vn/upload/news/2020/11/22/chuong-trinh-cao-dang-9-danh-cho-hoc-sinh-sau-thcs-thumbnail-81546.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Tuyển sinh</a></span>
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Lộ trình đào tạo 9 + tại Trường Saigonact</a></h4>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

                <div class="masonry-box small-box post-media">
                    <img src="http://daihocdulich.edu.vn/upload/news/2020/10/21/chuong-trinh-hoc-9-loi-the-cua-gioi-tre-thoi-40-thumbnail-15001.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Tuyển sinh</a></span>
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Chương trình học 9 +: Lợi thế của giới trẻ thời 4.0</a></h4>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

            </div><!-- end left-side -->

            <div class="center-side">
                <div class="masonry-box post-media">
                    <img src="http://daihocdulich.edu.vn/upload/news/2020/11/11/lo-trinh-dao-tao-9-tai-truong-act-thumbnail-57260.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Tuyển sinh</a></span>
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">CHƯƠNG TRÌNH CAO ĐẲNG 9+ DÀNH CHO HỌC SINH SAU THCS</a></h4>
                                <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Đăng ngày 21/12/2020</a></small>
                                <small><a href="blog-author.html" title="">bởi Amanda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

                <div class="masonry-box small-box post-media">
                    <img src="http://daihocdulich.edu.vn/upload/news/2020/11/22/chuong-trinh-cao-dang-9-danh-cho-hoc-sinh-sau-thcs-thumbnail-81546.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Tuyển sinh</a></span>
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Lộ trình đào tạo 9 + tại Trường Saigonact</a></h4>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

                <div class="masonry-box small-box post-media">
                    <img src="http://daihocdulich.edu.vn/upload/news/2020/10/21/chuong-trinh-hoc-9-loi-the-cua-gioi-tre-thoi-40-thumbnail-15001.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Tuyển sinh</a></span>
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Chương trình học 9 +: Lợi thế của giới trẻ thời 4.0</a></h4>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end left-side -->

            <div class="right-side hidden-md-down">
                <div class="masonry-box post-media">
                    <img src="http://daihocdulich.edu.vn/upload/news/2020/10/04/lanh-dao-nha-truong-thumbnail-53550.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-aqua"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Giới thiệu</a></span>
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Saigonact – địa chỉ uy tín với hệ thống cơ sở vật chất hiện đại</a></h4>
                                <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Đăng ngày 21/12/2020</a></small>
                                <small><a href="blog-author.html" title="">bởi Jessica</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

                <div class="masonry-box small-box post-media">
                    <img src="http://daihocdulich.edu.vn/upload/news/2020/11/22/chuong-trinh-cao-dang-9-danh-cho-hoc-sinh-sau-thcs-thumbnail-81546.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Tuyển sinh</a></span>
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Lộ trình đào tạo 9 + tại Trường Saigonact</a></h4>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

                <div class="masonry-box small-box post-media">
                    <img src="http://daihocdulich.edu.vn/upload/news/2020/10/21/chuong-trinh-hoc-9-loi-the-cua-gioi-tre-thoi-40-thumbnail-15001.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Tuyển sinh</a></span>
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Chương trình học 9 +: Lợi thế của giới trẻ thời 4.0</a></h4>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end right-side -->


        </div><!-- end masonry -->
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3 class="color-aqua"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Tin tức & hoạt động</a></h3>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2020/12/16/mot-so-hinh-anh-ve-goc-giang-sinh-am-cung-cua-truong-thumbnail-68258.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta big-meta">
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Một số hình ảnh về góc Giáng Sinh ấm cúng của trường</a></h4>
                                <p></p>
                                <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Hoạt động</a></small>
                                <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Đăng ngày 16/12/2020</a></small>
                                <small><a href="blog-author.html" title="">by Amanda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2020/12/10/chuong-trinh-dao-tao-ngan-han-thumbnail-85717.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta big-meta">
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">CHƯƠNG TRÌNH ĐÀO TẠO NGẮN HẠN</a></h4>
                                <p>Bên cạnh đào tạo hệ CAO ĐẲNG chính quy, Trường SAIGONACT còn có những chương trình đào tạo ngắn hạn để bổ sung kiến thức chuyên ngành, giúp người học nâng cao năng lực chuyên môn và kỹ năng mềm. </p>
                                <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Tin tức</a></small>
                                <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Đăng ngày 16/12/2020</a></small>
                                <small><a href="blog-author.html" title="">by Martines</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3 class="color-pink"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Chương trình học</a></h3>
                </div><!-- end title -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2020/12/21/xet-hoc-ba-chia-khoa-mo-ra-canh-cua-hoc-tap--thumbnail-11234.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">XÉT HỌC BẠ: CHÌA KHOÁ MỞ RA CÁNH CỬA HỌC TẬP !</a></h4>
                                <p>Dù bạn khao khát được cháy bỏng với tâm hồn nghệ thuật hay bạn ước mơ Lãnh Đạo- Tất cả đều được thỏa sức tại Trường CAO ĐẲNG VĂN HÓA NGHỆ THUẬT VÀ DU LỊCH SÀI GÒN. </p>
                                <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Chương trình học</a></small>
                                <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">21/12/2020</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2019/07/25/cao-dang-he-dao-tao-9-con-duong-nhanh-nhat-de-vao-doi-lap-than-lap-nghiep-thumbnail-32139.png" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Cao đẳng hệ đào tạo 9+, con đường nhanh nhất để vào đời lập thân lập nghiệp</a></h4>
                                <p></p>
                                <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Chương trình học</a></small>
                                <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">21/12/2020</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end col -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2019/07/25/tot-nghiep-thcs-vao-thang-cao-dang-chinh-quy-voi-cao-dang-he-9-thumbnail-31613.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Tốt nghiệp THCS vào thẳng cao đẳng chính quy với cao đẳng hệ 9+</a></h4>
                                <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Chương trình học </a></small>
                                <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">21/12/2020</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2019/04/12/tuyen-sinh-2019-cao-dang-van-hoa-nghe-thuat-va-du-lich-sai-gon-rong-cua-cho-thi-sinh-thumbnail-97584.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Tuyển sinh 2019: Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn rộng cửa cho thí sinh</a></h4>
                                <p>Tuyển sinh năm 2019, ngoài hình thức thi tuyển thì hình thức xét tuyển học bạ được Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn (SaigonACT, mã trường CDD0226) lựa chọn được xem như một cơ hội mới mở rộng cánh cửa vào trường với các thí sinh và học sinh. </p>
                                <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Chương trình học </a></small>
                                <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">21/12/2020</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1">

        <!-- #region Baner -->
        {{-- <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="banner-spot clearfix">
                    <div class="banner-img">
                        <img src="{{ asset('dist/layout/default/upload/banner_01.jpg') }}" alt="" class="img-fluid">
                    </div><!-- end banner-img -->
                </div><!-- end banner -->
            </div><!-- end col -->
        </div><!-- end row --> --}}
        <!-- #endregion Baner -->

        <hr class="invis1">

        <div class="row">
            <div class="col-lg-9">
                <div class="blog-list clearfix">
                    <div class="section-title">
                        <h3 class="color-green"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Du học & học bổng</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2020/01/13/thong-bao-ve-cac-chinh-sach-hoc-bong-2020-2021-thumbnail-95407.png" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">THÔNG BÁO VỀ CÁC CHÍNH SÁCH HỌC BỔNG 2020 - 2021</a></h4>
                            <p>Nhằm hỗ trợ thúc đẩy và xây dựng nền tảng tri thức, kỹ năng và nhân cách cho các em sinh viên, đóng góp tích cực vào sự phát triển của nền giáo dục Việt Nam. </p>
                            <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Học bổng</a></small>
                            <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Đăng ngày 21/12/2020</a></small>
                            <small><a href="blog-author.html" title="">by Boby</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2019/04/12/tuyen-sinh-2019-che-do-hoc-bong-uu-viet-cua-saigonact-thumbnail-97109.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Tuyển sinh 2019: Chế độ học bổng ưu việt của SaigonACT</a></h4>
                            <p>Là một trường cao đẳng có bề dày hơn 13 năm thành lập, trong quá trình hoạt động và phát triển, SaigonACT không chỉ chú trọng đến chất lượng đào tạo, đến việc làm cho sinh viên sau khi tốt nghiệp mà ngay trong quá trình đào tạo, Nhà trường cũng rất quan tâm đến việc bảo đảm các chế độ, chính sách đối với người học, đặc biệt là chính sách học bổng cho thí sinh ngay từ khi đăng kí xét tuyển vào trường và cho sinh viên trong quá trình học tập tại trường.
                            </p>
                            <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Học bổng</a></small>
                            <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Đăng ngày 21/12/2020</a></small>
                            <small><a href="blog-author.html" title="">by Samanta</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2019/04/06/thong-bao-ve-cac-chinh-sach-hoc-bong-nam-hoc-2019-2020-thumbnail-28417.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Thông báo về các chính sách học bổng năm học 2019 - 2020</a></h4>
                            <p>Nhằm hỗ trợ thúc đẩy và xây dựng nền tảng tri thức, kỹ năng và nhân cách cho các em sinh viên, đóng góp tích cực vào sự phát triển của nền giáo dục Việt Nam.</p>
                            <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Học bổng</a></small>
                            <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Đăng ngày 21/12/2020</a></small>
                            <small><a href="blog-author.html" title="">by Jackie</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div><!-- end blog-list -->

                <hr class="invis">

                <div class="blog-list clearfix">
                    <div class="section-title">
                        <h3 class="color-red"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Hướng nghiệp - Việc làm</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2020/07/24/chon-hoc-nganh-du-lich-khach-san-nen-hay-khong-thumbnail-21792.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">CHỌN HỌC NGÀNH DU LỊCH - KHÁCH SẠN, NÊN HAY KHÔNG?</a></h4>
                            <p>Theo xu hướng phát triển tự nhiên của xã hội và nền kinh tế, khu vực dịch vụ nói chung và nhóm ngành du lịch - khách sạn nói riêng sẽ tiếp tục đà tăng tỉ trọng để trở thành ngành kinh tế mũi nhọn của nhiều quốc gia trên thế giới. Tại Việt Nam, “ngành công nghiệp không khói” này đã và đang đón hàng triệu lượt khách du lịch mỗi năm, mang lại nguồn thu lớn cho các địa phương và nguồn ngoại tệ dồi dào cho ngân sách nước nhà. Sự phát triển của ngành du lịch
                                –
                                khách sạn mở ra nhiều cơ hội việc làm cho nhân lực địa phương nói riêng và nhân lực trẻ Việt Nam nói chung, do tính chất đặc thù của ngành dịch vụ này đòi hỏi sự tương tác cao giữa người với người. Mỗi mùa tuyển sinh, từ khóa về ngành lại thu hút lượng tìm kiếm khủng từ đông đảo học sinh và phu huynh. Học ngành du lịch – khách sạn trở thành một xu hướng, khiến nhiều trường phải mở thêm các khoa đào tạo mới dành riêng cho ngành này. Vậy cơ hội phát
                                triển
                                nghề nghiệp trong ngành Du lịch – Khách sạn ra sao? Bài viết dưới đây sẽ hi vọng sẽ giúp bạn giải quyết phần nào những thắc mắc này. </p>
                            <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Hướng nghiệp</a></small>
                            <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Đăng ngày 21/12/2020</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2020/07/24/nhung-ky-nang-mem-can-thiet-cho-sinh-vien-thumbnail-47640.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">NHỮNG KỸ NĂNG MỀM CẦN THIẾT CHO SINH VIÊN</a></h4>
                            <p>Bên cạnh việc nỗ lực học tập để có được tấm bằng xếp loại tốt thì sinh viên cũng cần trang bị rất nhiều kỹ năng mềm để tăng cơ hội tìm kiếm việc làm và mở rộng mối quan hệ. </p>
                            <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Hướng nghiệp</a></small>
                            <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Đăng ngày 21/12/2020</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                                    <img src="http://daihocdulich.edu.vn/upload/news/2019/09/17/ban-co-hop-voi-nganh-du-lich-nha-hang-khach-san-thumbnail-41936.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Bạn có hợp với ngành du lịch - nhà hàng khách sạn?</a></h4>
                            <p></p>
                            <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Hướng nghiệp</a></small>
                            <small><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Đăng ngày 21/12/2020</a></small>
                            <small><a href="blog-author.html" title="">by Matilda</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div><!-- end blog-list -->
            </div><!-- end col -->

            <div class="col-lg-3">
                <div class="section-title">
                    <h3 class="color-yellow"><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Hình ảnh</a></h3>
                </div><!-- end title -->

                <div class="blog-box">
                    <div class="post-media">
                        <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                            <img src="http://daihocdulich.edu.vn/upload/album/64/img/20190920102329-33980.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Tour Xuyên Việt 2019 của các bạn sinh viên khóa 12</a></h4>
                        <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Hoạt động</a></small>
                        <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">21/12/2020</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                            <img src="http://daihocdulich.edu.vn/upload/album/63/img/20181227184509-37602.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Phòng thực hành Khoa Kinh tế</a></h4>
                        <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Cơ sở vật chất</a></small>
                        <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">21/12/2020</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                            <img src="http://daihocdulich.edu.vn/upload/album/59/img/20181227183631-48113.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Thực tập thực tế tại doanh nghiệp</a></h4>
                        <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Thực tập</a></small>
                        <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">21/12/2020</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">
                            <img src="http://daihocdulich.edu.vn/upload/album/57/img/20180119135544-78282.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="{{route('home-news-detail', ['danh-muc-tin-tuc', 'chi-tiet-tin-tuc'])}}" title="">Lễ Tốt nghiệp ngày 06-01-2018</a></h4>
                        <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">Tốt nghiệp</a></small>
                        <small><a href="{{route('home-category','danh-muc-tin-tuc')}}" title="">21/12/2020</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1">

        {{-- <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="banner-spot clearfix">
                    <div class="banner-img">
                        <img src="{{ asset('dist/layout/default/upload/banner_02.jpg') }}" alt="" class="img-fluid">
                    </div><!-- end banner-img -->
                </div><!-- end banner -->
            </div><!-- end col -->
        </div><!-- end row --> --}}
    </div><!-- end container -->
</section>
@endsection
