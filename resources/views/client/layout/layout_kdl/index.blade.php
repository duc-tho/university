@extends('client.master')
  @section("head")
  @include('client.layout.layout_kdl.components.head')
  @endsection

  @section('body')

    @include('client.layout.layout_kdl.components.header')
    
    @yield('main')

    @include('client.layout.layout_kdl.components.footer')

    @include('client.layout.layout_kdl.components.script')

  @endsection

