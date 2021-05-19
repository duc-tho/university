@extends('admin::layouts.master')
@section('title', $title ?? 'App')

@section('head-import')
@include('admin::components.head-import')
@endsection

@section('js-import')
@include('admin::components.js-import')
@endsection

@section('main')
@include('admin::components.navbar')

@include('admin::components.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @include('admin::components.page-header')
    <div class="container-fluid">
        @yield('page-content')
    </div>
</div>
<!-- /.content-wrapper -->

@include('admin::components.page-footer')

@include('admin::components.control-sidebar')
@endsection
