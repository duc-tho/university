@extends('client.layout.layout_kdl.index')
@section('title', 'Ngành QTKS')
@section('main')
    <section class="w3l-about-breadcrum">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <h2>{{ $specialized->name }}</h2>
                <p><a href="#">Trang Chủ</a> &nbsp; / &nbsp; Đào Tạo &nbsp; / &nbsp; {{ $specialized->name }}</p>
            </div>
        </div>
    </section>
    <!-- content-with-photo4 block -->
    <section class="w3l-content-with-photo-4">
        <div id="content-with-photo4-block" class="pt-5">
            <div class="container py-md-5">
                <div class="cwp4-two row">
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                        <img src="{{ asset($specialized->image) }}"
                            width="100%" height="auto" class="img-fluid" alt="" />
                        <hr>
                    </div>
                    <div class="cwp4-text col-lg-6">
                                <h2 id="titleqtks">{{ $specialized->name }}</h2>
                                <p id="des"> {!! $specialized->intro !!}</p>
                                {{-- <ul class="cont-4">
                                <li><span class="fa fa-check"></span> <span id="con">Trình độ đào tạo :</span> Đại học</li>
                                <li><span class="fa fa-check"></span> <span id="con">Loại hình đào tạo :</span> Chính quy</li>
                                <li><span class="fa fa-check"></span> <span id="con">Thời gian đào tạo :</span> 04 năm</li>
                                <li><span class="fa fa-check"></span> <span id="con">Đối tượng tuyển sinh :</span> Theo Quy chế
                                    tuyển sinh đại học, cao đẳng hệ chính qui hiện hành do Bộ Giáo dục và Đào tạo.</li>
                            </ul> --}}
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- content-with-photo4 block -->

    {{-- <section class="w3l-feature-2">
        <div class="grid top-bottom py-5">
            <div class="container py-md-5">
                <div class="heading text-center mx-auto">
                    <h3 class="head">Tại sao bạn phải chọn Nghành Quản Trị Khách Sạn </h3>
                    <p class="my-3 head">Năm 2016, ngành Quản trị Khách sạn là một trong số
                        các ngành có nhu cầu nhân lực cao nhất tại TP.HCM nói riêng và trong cả nước nói
                        chung.Cử nhân ngành Quản trị khách sạn sau khi tốt nghiệp có thể đảm nhiệm tốt các
                        công việc như: Quản lý hoặc chuyên viên các bộ phận lễ tân tiền sảnh, phòng, ẩm
                        thực, bếp, hội nghị yến tiệc, nhân sự, tài chính-kế toán, kinh doanh doanh- tiếp
                        thị, hành chính, nhân lực, marketing… tại các resort, khu nghỉ dưỡng, khu du lịch…; Cán
                        bộ điều hành, tiếp thị, nhân sự, tài chính tại các cơ quan nghiên cứu, kinh doanh du
                        lịch trong và ngoài nước; Giảng dạy nghiên cứu về nhà hàng khách sạn tại các trường đại học cao
                        đẳng.</p>
                </div>
            </div>
        </div>
    </section> --}}

@stop
