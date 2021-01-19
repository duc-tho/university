@extends('client.layout.layout_1.index')

@section('title', 'Tin tức 1')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
@foreach ($mock as $item)
<h1>{{ $item }}</h1>
@endforeach
@endSection
