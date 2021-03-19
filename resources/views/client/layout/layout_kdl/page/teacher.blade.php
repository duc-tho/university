@extends('client.layout.layout_kdl.index')
@section('title', 'Ngành QTKS')
@section('main')
    <section class="w3l-service-breadcrum">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <h2>Giảng Viên {{ $faculty['name'] }}</h2>
                <p><a href="#">Trang Chủ</a> &nbsp; / &nbsp; Giảng Viên</p>
            </div>
        </div>
    </section>
    <!-- content-with-photo4 block -->
    {{-- <section class="w3l-content-with-photo-4">
        <div id="content-with-photo4-block" class="pt-5">
            <div class="container py-md-5">
                <div class="cwp4-two row">
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                        <img src="{{ asset($specialized->image) }}"
                            width="100%" height="auto" class="img-fluid" alt="" />
                        <hr>
                        <img src=" {{ asset($specialized->image2) }}"
                            width="100%" height="auto" class="img-fluid" alt="" />
                    </div>
                    <div class="cwp4-text col-lg-6">
                                <h2 id="titleqtks">{{ $specialized->name }}</h2>
                                <p id="des"> {!! $specialized->intro !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="teams-1">
    <section class="teams text-center py-5" id="team">
        <div class="container py-xl-5 py-lg-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Giảng Viên {{ $faculty->name }}</h3>
            </div>
            <div class="row inner-sec-w3ls-w3pvt-aminfo pt-5 mt-3">
                @foreach ($teacher as $item)
                <div class="col-lg-3 col-sm-6">
                    <div class="team-grid text-center">
                        <div class="team-img">
                            <img class="img-fluid rounded" src="{{ asset($item->image) }}"
                                alt="">
                        </div>
                        <div class="team-info">
                            <div>
                                <button data-model-id="{{ $item->id }}" class="btn btn-primary">Xem Chi Tiết</button>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
    </section>
@foreach ($teacher as $item)
<div id="teacher-modal" data-model-id="{{ $item->id }}" class="modal">
    <div class="modal-content p-0">
        <div class="modal-header" style="background: #067186;">
            <h5 class="modal-title text-light">Lý lịch khoa học tóm tắt</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-light">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="h3" style="color: #067186;">THÔNG TIN</h3>
                </div>
                <div class="col-lg-3 my-3">
                    <img src="{{ asset($item->image) }}" class="w-100 rounded" alt="">
                </div>
                <div class="col-lg-9 teacher-info my-3">
                    <h4>{{ $item->name }} – {{ $item->evaluate }}</h4>
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
    </div>
</div>
@endforeach
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
@stop
