@extends('client.master')
  @section("head")
    @include('client.layout.layout_tuyensinh.components.head')
  @endsection

  @section('body')

    @include('client.layout.layout_tuyensinh.components.header')
    
    @yield('main')

    @include('client.layout.layout_tuyensinh.components.footer')

    @include('client.layout.layout_tuyensinh.components.script')

  @endsection

