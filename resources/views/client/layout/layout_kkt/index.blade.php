@extends('client.master')

@section("head")
@include('client.layout.layout_kkt.components.head')
@endsection

@section('body')
<!--====== PRELOADER PART START ======-->
<div class="preloader">
    <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7"></div>
        <div class="layer layer-8"></div>
    </div>
</div>
<!--====== PRELOADER PART START ======-->
<div id="wrapper">
    @include('client.layout.layout_kkt.components.header')

    @include('client.layout.layout_kkt.components.search-box')

    @yield('main')

    @include('client.layout.layout_kkt.components.footer')

    <!--====== BACK TO TP PART START ======-->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!--====== BACK TO TP PART ENDS ======-->
</div>
@include('client.layout.layout_kkt.components.script')

@endsection
