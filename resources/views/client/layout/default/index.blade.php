@extends('client.master')

@section('head')
@include('client.layout.default.components.head')
@endsection

@section('body')
<!-- LOADER -->
<div id="preloader">
    <img class="preloader" src="{{ asset('dist/layout/default/images/loader.gif') }}" alt="">
</div><!-- end loader -->
<!-- END LOADER -->

<div id="wrapper">
    @include('client.layout.default.components.header-top-bar')

    @yield('main')

    @include('client.layout.default.components.nav-footer')

    @include('client.layout.default.components.footer')

    <div class="dmtop">Scroll to Top</div>
</div><!-- end wrapper -->

@include('client.layout.default.components.script')
@endsection
