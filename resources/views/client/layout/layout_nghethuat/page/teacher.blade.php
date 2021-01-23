@extends('client.layout.layout_nghethuat.index')

@section('title', 'Khoa Nghệ Thuật - Giáo viên')

@section('head')
@include('client.layout.layout_nghethuat.components.teacher.head')
@endsection

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('script')
@include('client.layout.layout_nghethuat.components.teacher.script')
@endsection

@section('main')
@include('client.layout.layout_nghethuat.components.teacher.header')
@include('client.layout.layout_nghethuat.components.teacher.loader')
<div id="fh5co-product">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Giảng Viên</h2>
                <p>Ngành ABC</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid">
                        <img class="img_teacher" src="{{ asset('dist/layout/layout_nghethuat/images/person_1.jpg') }}">
                    </div>
                    <div class="desc">
                        <h3><a href="teacher_single.html">Hauteville Concrete Rocking Chair</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid">
                        <img class="img_teacher" src="{{ asset('dist/layout/layout_nghethuat/images/person_2.jpg') }}">
                    </div>
                    <div class="desc">
                        <h3><a href="teacher_single.html">Pavilion Speaker</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid">
                        <img class="img_teacher" src="{{ asset('dist/layout/layout_nghethuat/images/person_3.jpg') }}">
                    </div>
                    <div class="desc">
                        <h3><a href="teacher_single.html">Ligomancer</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid">
                        <img class="img_teacher" src="{{ asset('dist/layout/layout_nghethuat/images/person_4.jpg') }}">
                    </div>
                    <div class="desc">
                        <h3><a href="teacher_single.html">Alato Cabinet</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid">
                        <img class="img_teacher" src="{{ asset('dist/layout/layout_nghethuat/images/person_1.jpg') }}">
                    </div>
                    <div class="desc">
                        <h3><a href="teacher_single.html">Earing Wireless</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid">
                        <img class="img_teacher" src="{{ asset('dist/layout/layout_nghethuat/images/person_2.jpg') }}">
                    </div>
                    <div class="desc">
                        <h3><a href="teacher_single.html">Sculptural Coffee Table</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('client.layout.layout_nghethuat.components.footer')
@endSection
