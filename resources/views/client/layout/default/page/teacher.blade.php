@extends('client.layout.default.index')

@section('title', 'Giảng Viên')

@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
@endsection

@section('main')

    <div class="page-title wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-address-card bg-pink"></i> Giảng Viên Các Khoa <small
                            class="hidden-xs-down hidden-sm-down">06/01/2021</small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home-about-detail', 'chi-tiet-gioi-thieu') }}">Trang
                                chủ</a></li>
                        <li class="breadcrumb-item active">Giảng Viên</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <hr class="invis">
                        <div class="blog-grid-system">
                            <div class="row">
                                <div class="col-lg-3">
                                    <br>
                                    <div class="card">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <img src="{{ asset('dist/layout/default/images/t1.jpg') }}"
                                                    class="w3-circle" alt="Avatar" style="width:100%">
                                            </div>
                                            <br>
                                            <p class="des-teacher">Minh Toàn Lộc</p>
                                            <p class="des2-teacher">Hiệu Trưởng</p>
                                            <div class="middle">
                                                <button id="myBtn" class="btn btn-primary">Xem Chi Tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <br>
                                    <div class="card">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <img src="{{ asset('dist/layout/default/images/t-1.jpg') }}"
                                                    class="w3-circle" alt="Avatar" style="width:100%">
                                            </div>
                                            <br>
                                            <p class="des-teacher">Đinh Văn Khương</p>
                                            <p class="des2-teacher">P.Hiệu Trưởng</p>
                                            <div class="middle">
                                                <button id="myBtn" class="btn btn-primary">Xem Chi Tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <br>
                                    <div class="card">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <img src="{{ asset('dist/layout/default/images/t2.jpg') }}"
                                                    class="w3-circle" alt="Avatar" style="width:100%">
                                            </div>
                                            <br>
                                            <p class="des-teacher">Lưu Quan Minh</p>
                                            <p class="des2-teacher">Thư Ký</p>
                                            <div class="middle">
                                                <button id="myBtn" class="btn btn-primary">Xem Chi Tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <br>
                                    <div class="card">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <img src="{{ asset('dist/layout/default/images/t-2.jpg') }}"
                                                    class="w3-circle" alt="Avatar" style="width:100%">
                                            </div>
                                            <br>
                                            <p class="des-teacher">Trần Dư Quốc</p>
                                            <p class="des2-teacher">Trưởng Khoa Ngoại Ngữ</p>
                                            <div class="middle">
                                                <button id="myBtn" class="btn btn-primary">Xem Chi Tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <br>
                                    <div class="card">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <img src="{{ asset('dist/layout/default/images/t3.jpg') }}"
                                                    class="w3-circle" alt="Avatar" style="width:100%">
                                            </div>
                                            <br>
                                            <p class="des-teacher">Nguyễn Vũ</p>
                                            <p class="des2-teacher">Trưởng Khoa Kinh Tế</p>
                                            <div class="middle">
                                                <button id="myBtn" class="btn btn-primary">Xem Chi Tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <br>
                                    <div class="card">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <img src="{{ asset('dist/layout/default/images/t-3.jpg') }}"
                                                    class="w3-circle" alt="Avatar" style="width:100%">
                                            </div>
                                            <br>
                                            <p class="des-teacher">Lưu Quan Độ</p>
                                            <p class="des2-teacher">Kế Toán</p>
                                            <div class="middle">
                                                <button id="myBtn" class="btn btn-primary">Xem Chi Tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <br>
                                    <div class="card">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <img src="{{ asset('dist/layout/default/images/t4.jpg') }}"
                                                    class="w3-circle" alt="Avatar" style="width:100%">
                                            </div>
                                            <br>
                                            <p class="des-teacher">Lưu Minh Tân</p>
                                            <p class="des2-teacher">Trợ Lý</p>
                                            <div class="middle">
                                                <button id="myBtn" class="btn btn-primary">Xem Chi Tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>



    <div id="myModal" class="modal">
        <div class="modal-content p-0">
            <div class="modal-header" style="background: #067186;">
                <h5 class="modal-title text-light">Lý lịch khoa học tóm tắt</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="h3" style="color: #067186;">THÔNG TIN</h3>
                    </div>
                    <div class="col-lg-3 my-3">
                        <img src="{{ asset('dist/layout/default/images/t1.jpg') }}" class="w-100 rounded" alt="">
                    </div>
                    <div class="col-lg-9 teacher-info my-3">
                        <h4>Minh Toàn Lộc – Giáo sư</h4>
                        <p>Ngày sinh: 2000</p>
                        <p>Nơi sinh: Quảng Nam</p>
                        <p>Chức vụ: Hiêu Trưởng</p>
                        <p>Email: lapdut@daihocdulich.com</p>
                        <p>Điện Thoại: (028)37 755 028</p>
                    </div>
                    <div class="col-lg-12 my-3">
                        <h3 class="h3" style="color: #067186;">QUÁ TRÌNH HỌC TẬP VÀ HOẠT ĐỘNG KHOA HỌC</h3>
                    </div>
                    <div class="col-lg-12 teacher-info">
                        <h3 class="text-primary">1. Quá trình học tập</h3>
                        <ul>
                            <li>
                                Năm 2006 - 2010: Tham gia học tập tại trường ĐH Tôn Đức Thắng – chuyên ngành Thiết kế đồ
                                họa.
                            </li>
                            <li>
                                Năm 2011 – 2013: Tham gia học tập tại trường ĐH MahaSarakham,Thái Lan – chuyên ngành
                                Visual Art.
                            </li>
                        </ul>
                        <h3 class="text-primary">2. Hoạt động chuyên môn</h3>
                        <ul>
                            <li>Năm 2013 – nay: Tham gia giảng dạy tại Đại học Tôn Đức Thắng</li>
                        </ul>
                        <h3 class="text-primary">3. Môn học giảng dạy, lĩnh vực nghiên cứu</h3>
                        <ul>
                            <li>Hình họa 1,2,3; Luật Xa Gần; Coreldraw; Poster Chính trị XH &amp; Quảng cáo; Catalogue
                                &amp; Brochure; …</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer">
            </div> --}}
        </div>
    </div>
@endsection
