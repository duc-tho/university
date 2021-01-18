@extends('client.master')

@section('head')
<script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); }
</script>
<!-- //for-mobile-apps -->
<link href="{{ asset('dist/layout/layout_home/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="{{ asset('dist/layout/layout_home/css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('dist/layout/layout_home/css/zoomslider.css') }}" />

<link rel="stylesheet" href="{{ asset('dist/layout/layout_home/css/lightbox.css') }}">
<!-- carousel slider -->
<link href="{{ asset('dist/layout/layout_home/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all">
<!-- //carousel slider -->
<link href="{{ asset('dist/layout/layout_home/css/font-awesome.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('dist/layout/layout_home/js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('dist/layout/layout_home/js/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('dist/layout/layout_home/js/bootstrap.js') }}"></script>
<!--/web-fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100;1,300;1,400;1,600;1,700&family=Nunito:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
<!--//web-fonts-->
@endsection

@section('body')
@yield('main')
@endsection
