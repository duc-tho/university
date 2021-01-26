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
<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-shopping-bag bg-red"></i>THÔNG BÁO HS - SV</h2>
            </div><!-- end col -->
            <!-- <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active">Food</li>
                </ol>
            </div> -->
            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-list clearfix">
                        <div class="blog-box row">
                            <div class="blog-meta big-meta col-md-8">
                                <h6><a href="{{ route('khoanghethuat-chitietthongbao') }}" title="">Thông báo về việc triển khai đào tạo khóa 14 năm học 2019 - 2020</a></h6>
                                <!-- <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>05/08/2019</small>
                                <!-- <small>by Matilda</small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="blog-meta big-meta col-md-8">
                                <h6><a href="{{ route('khoanghethuat-chitietthongbao') }}" title="">Thông báo Chương trình Công tác học sinh, sinh viên Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn Năm học 2019 - 2020</a></h6>
                                <!-- <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>05/08/2019</small>
                                <!-- <small>by Matilda</small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="blog-meta big-meta col-md-8">
                                <h6><a href="{{ route('khoanghethuat-chitietthongbao') }}" title="">Thông báo Xét tuyển và Thi tuyển Hệ Cao đẳng năm 2017</a></h6>
                                <!-- <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>23/08/2017</small>
                                <!-- <small>by Matilda</small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="blog-meta big-meta col-md-8">
                                <h6><a href="{{ route('khoanghethuat-chitietthongbao') }}" title="">Chủ tịch UBND TP.HCM công nhận Ban Quản lý Đề án thành lập Trường Đại học Du lịch Sài Gòn</a></h6>
                                <!-- <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>23/08/2017</small>
                                <!-- <small>by Matilda</small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="blog-meta big-meta col-md-8">
                                <h6><a href="{{ route('khoanghethuat-chitietthongbao') }}" title="">Thông báo về việc triển khai đào tạo khóa 14 năm học 2019 - 2020</a></h6>
                                <!-- <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>05/08/2019</small>
                                <!-- <small>by Matilda</small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="blog-meta big-meta col-md-8">
                                <h6><a href="{{ route('khoanghethuat-chitietthongbao') }}" title="">Thông báo Chương trình Công tác học sinh, sinh viên Trường Cao đẳng Văn hóa Nghệ thuật và Du lịch Sài Gòn Năm học 2019 - 2020</a></h6>
                                <!-- <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>05/08/2019</small>
                                <!-- <small>by Matilda</small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="blog-meta big-meta col-md-8">
                                <h6><a href="{{ route('khoanghethuat-chitietthongbao') }}" title="">Thông báo Xét tuyển và Thi tuyển Hệ Cao đẳng năm 2017</a></h6>
                                <!-- <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>23/08/2017</small>
                                <!-- <small>by Matilda</small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        <div class="blog-box row">
                            <div class="blog-meta big-meta col-md-8">
                                <h6><a href="{{ route('khoanghethuat-chitietthongbao') }}" title="">Chủ tịch UBND TP.HCM công nhận Ban Quản lý Đề án thành lập Trường Đại học Du lịch Sài Gòn</a></h6>
                                <!-- <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">Food</a></small> -->
                                <small>23/08/2017</small>
                                <!-- <small>by Matilda</small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->
                <hr class="invis">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->

            @include('client.layout.layout_nghethuat.components.news.sibarmess')
            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@include('client.layout.layout_nghethuat.components.news.footer')
@endsection
