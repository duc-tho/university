@extends('client.layout.layout_kkt.index')

@section('title', 'Giới thiệu khoa Kinh Tế')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<div class="gioithieu">Giới Thiệu</div>
<div class="container">
    <div class=" loigioithieu">
        Đại học Du Lịch Sài Gòn (saigonACT) là đại học tư.
        Với đặc điểm sẽ là Trường Đại học đầu tiên của Việt Nam hoạt động theo định hướng không vì lợi nhuận;
        khi chính thức được thành lập, Trường Đại học Du lịch Sài Gòn sẽ trở thành một
        Trường Đại học đào tạo đa ngành, cung cấp nguồn nhân lực chất lượng cao trong các lĩnh vực:
        Kinh tế, Du lịch, Ngoại ngữ, Nghệ thuật, Báo chí, Công nghệ Thông tin, Sức khỏe Thẩm mỹ;
        trong đó ngành mũi nhọn sẽ là ngành Du lịch
    </div>
    <div class="row anh">
        <img src="{{ asset('dist/layout/layout_kkt/images/insta_01.jpeg') }}" class="col-lg-4 col-md-4 col-sm-4 ">
        <img src="{{ asset('dist/layout/layout_kkt/images/insta_01.jpeg') }}" class="col-lg-4 col-md-4 col-sm-4 ">
        <img src="{{ asset('dist/layout/layout_kkt/images/insta_01.jpeg') }}" class="col-lg-4 col-md-4 col-sm-4">
    </div>
    <div class="row soluongnhansu">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <img src="{{ asset('dist/layout/layout_kkt/images/hihkhoa_files/nontotnghiep.png') }}">
            <p class="sl">23.367</p>
            <p>Sinh Viên / Hoc Sinh</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <img src="{{ asset('dist/layout/layout_kkt/images/hihkhoa_files/nguoi.jpg') }}">
            <p class="sl">23.367</p>
            <p>Sinh Viên / Hoc Sinh</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <img src="{{ asset('dist/layout/layout_kkt/images/hihkhoa_files/nha.jpg') }}">
            <p class="sl">23.367</p>
            <p>Sinh Viên / Hoc Sinh</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <img src="{{ asset('dist/layout/layout_kkt/images/hihkhoa_files/nghiencuu.png') }}">
            <p class="sl">23.367</p>
            <p>Sinh Viên / Hoc Sinh</p>
        </div>
    </div>
</div>
@endsection
