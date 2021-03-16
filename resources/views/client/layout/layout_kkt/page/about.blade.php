@extends('client.layout.layout_kkt.index')
@section('title', 'Giới thiệu khoa Kinh Tế')
@section('meta')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
@endsection
@section('main')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(/dist/layout/layout_kkt/images/page-banner-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Giới Thiệu {{ $faculty->name }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{-- route('khoakinhte-khoahoc') --}}">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Giới Thiệu {{ $faculty->name }}</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<br><br>
    <div class="container">
        @foreach ($about as $item)
        <div class="gioithieu">{{$item->title}}</div>
        <p class="loigioithieu">{{$item->intro}} </p>
        {{-- <div class="row anh">
            <img src="{{ asset($item->image) }}"
                class="col-lg-4 col-md-4 col-sm-4 ">
            <img src="{{ asset($item->image) }}"
            class="col-lg-4 col-md-4 col-sm-4 ">
            <img src="{{ asset($item->image) }}"
            class="col-lg-4 col-md-4 col-sm-4 ">
        </div> --}}
        <br><br>
        @endforeach
        {{-- <p class="gioithieu">Mục Tiêu</p>
        <br>
        <p class="loigioithieu">Khoa Kinh tế đào tạo cử nhân các ngành Kế toán, Tài chính - Ngân hàng, quản
            trị kinh doanh, Thư ký văn phòng có phẩm chất, kiến thức và kỹ năng nghề nghiệp có thể đảm nhận
            công việc trong các doanh nghiệp, các cơ quan hành chính sự nghiệp, ngân hàng, các tổ chức tài
            chính với nhiệm vụ là chuyên viên kế toán, kiểm toán, tài chính, ngân hàng, thuế và bảo hiểm hoặc
            tham gia công tác nghiên cứu, giảng dạy tại các viện nghiên cứu, các trường đại học, cao đẳng
            hay trung cấp chuyên nghiệp. Phương châm đào tạo của Khoa là lấy lý thuyết chuyên sâu kết hợp
            với kỹ năng thực hành nghề nghiệp dựa trên các phần mềm kế toán, mô phỏng các nghiệp vụ tài chính
            kế toán, doanh nghiệp ảo, thị trường chứng khoán ảo …Khuyến khích khả năng tự nghiên cứu và ứng
            dụng của sinh viên thông qua hoạt động của các câu lạc bộ nghiên cứu sinh viên; kỹ năng sống
            thông qua các hoạt động đoàn thể, xã hội phong phú của Khoa và Nhà trường.</p>
        <br><br>

        <br><br>
        <p class="gioithieu">Nhiệm Vụ</p>
        <br>
        <p class="loigioithieu">- Tổ chức quá trình đào tạo, giảng dạy, học tập và các hoạt động giáo dục khác theo chương
            trình, kế hoạch của nhà trường đối với các môn thuộc khoa quản lý.</p>
        <p class="loigioithieu">
            - Tổ chức biên soạn chương trình đào tạo, đề cương chi tiết học phần, giáo trình, tài liệu
            giảng dạy đối với các môn học do khoa phụ trách phù hợp nhu cầu, mục tiêu đào tạo của
            xã hội và đảm bảo chính sách chất lượng của trường.
        <p>
        <p class="loigioithieu">
            - Liên hệ mời giảng viên theo qui định của nhà trường.
        <p>
        <p class="loigioithieu">
            - Quản lý giảng viên, nhân viên thuộc khoa và học sinh, sinh viên chuyên ngành khoa đào tạo.
        <p>
        <p class="loigioithieu">
            - Tổ chức kiểm tra hết môn, triển khai công tác thi học kỳ và thi tốt nghiệp theo kế hoạch được
            Hiệu trưởng duyệt. Quản lý & lưu trữ các đề thi, đề kiểm tra hết môn.
        <p>
        <p class="loigioithieu">
            - Đề xuất phân công giáo viên của khoa làm công tác chủ nhiệm; phối hợp công tác quản
            lý sinh viên trong khoa; tư vấn và giúp đỡ học sinh đi thực tập, tham gia các hoạt động ngoại khoá.
        <p>
        <p class="loigioithieu">
            - Điều hành mọi hoạt động giảng dạy của giảng viên, học tập của sinh viên, học sinh thuộc khoa;
            quản lý công tác bảo trì, bảo dưỡng thiết bị phòng thực hành, phương tiện giảng dạy thuộc khoa
            quản lý. Đề xuất xây dựng kế hoạch bổ sung, bảo trì thiết bị dạy học, thực hành, thực tập. Kiểm
            tra các khâu trong suốt quá trình đào tạo.
        <p> --}}
    </div>
@endsection
