@extends('client.master')
  @section("head")
  @include('client.layout.layout_ngoaingu.components.head')
  @endsection

  @section('body')

    @include('client.layout.layout_ngoaingu.components.header')
    
    @yield('main')

    @include('client.layout.layout_ngoaingu.components.footer')

    @include('client.layout.layout_ngoaingu.components.script')

  @endsection

