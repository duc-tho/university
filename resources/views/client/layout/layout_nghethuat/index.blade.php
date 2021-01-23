@extends('client.master')

@section('body')
<div data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    {{-- @include('client.layout.layout_nghethuat.components.header') --}}

    @yield('main')
    {{-- @include('client.layout.layout_nghethuat.components.footer') --}}
    {{-- @include('client.layout.layout_nghethuat.components.script') --}}
    @yield('script')
</div>
@endsection
