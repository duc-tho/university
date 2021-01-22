@extends('client.master')

@section('head')
@include('client.layout.layout_nghethuat.components.head')
@endsection

@section('body')

@include('client.layout.layout_nghethuat.components.header')

@include('client.layout.layout_nghethuat.components.search-box')

@yield('main')

@include('client.layout.layout_nghethuat.components.footer')

@include('client.layout.layout_nghethuat.components.script')

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
</div>
@endsection
