@extends('index-master')
@section('title', $title ?? 'App')

@section('head-import')
@include('server.components.head-import')
@endsection

@section('js-import')
@include('server.components.js-import')
@endsection

@section('main')
@include('server.components.navbar')

@include('server.components.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @include('server.components.page-header')
    <div class="container-fluid">
        @yield('page-content')
    </div>
</div>
<!-- /.content-wrapper -->

@include('server.components.page-footer')

@include('server.components.control-sidebar')
@endsection
