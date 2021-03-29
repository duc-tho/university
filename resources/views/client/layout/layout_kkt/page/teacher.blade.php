@extends('client.layout.layout_kkt.index')

@section('title', 'Khoa Kinh Tế - Danh Sách Giáo Viên')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
style="background-image: url(/dist/layout/layout_kkt/images/page-banner-2.jpg)">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-banner-cont">
                <h2> Giảng Viên {{ $faculty->name }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('trang-chu', ['khoa-kinh-te']) }}">Trang
                                Chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Giảng Viên</li>
                    </ol>
                </nav>
            </div> <!-- page banner cont -->
        </div>
    </div> <!-- row -->
</div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== TEACHERS PART START ======-->

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <hr class="invis">
                    <div class="blog-grid-system">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="p-giangvien-khoa"> Giảng Viên {{ $faculty->name }}</p>
                            </div>
                            @foreach ($teacher as $item)
                            <div class="col-lg-3">
                                <br>
                                <div class="card">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <img src="{{ asset($item->image) }}" class="w3-circle" alt="Avatar" style="width:100%">
                                        </div>
                                        <br>
                                        <p class="des-teacher">{{$item->name}}</p>
                                        <p class="des2-teacher">{{$item->position}}</p>
                                        <div class="middle">
                                            <button data-model-id="{{ $item->id }}" class="btn btn-primary">Xem Chi Tiết</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@foreach ($teacher as $item)
<div id="teacher-modal" data-model-id="{{ $item->id }}" class="modal">
    <div class="modal-content p-0">
        <div class="modal-header" style="background: #067186;">
            <h5 class="modal-title text-light">Lý lịch khoa học tóm tắt - {{$item->position}} {{$item->name}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                {!!$item->intro!!}
                {{-- <div class="col-lg-12">
                    <h3 class="h3" style="color: #067186;">THÔNG TIN</h3>
                </div>
                <div class="col-lg-3 my-3">
                    <img src="{{ asset($item->image) }}" class="w-100 rounded" alt="">
                </div>
                <div class="col-lg-9 teacher-info my-3">
                    <h4>{{ $item->name }} – {{ $item->position }}</h4>
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
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endforeach
<!--====== TEACHERS PART ENDS ======-->
<script>
    $(document).ready(function() {
        // Get all modal
        let allModal = document.querySelectorAll("div[data-model-id]");

        // Get all button that opens the modal
        let allBtn = document.querySelectorAll("button[data-model-id]");

        if(allModal && allBtn) {
            allModal.forEach(modal => {
            let closeModalBtn = modal.querySelector('.close');

            closeModalBtn.onclick = function() {
                modal.style.display = "none";
            }

            let modalBtn = Array.from(allBtn).filter(i => i.attributes['data-model-id'].value == modal.attributes['data-model-id'].value)[0];

            modalBtn.onclick = function() {
                modal.style.display = "block";
            }
        });
        }
    });
</script>
@endsection
