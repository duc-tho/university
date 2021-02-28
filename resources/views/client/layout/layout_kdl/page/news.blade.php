@extends('client.layout.layout_kdl.index')
@section('title', 'Tin Tức')
@section('main')
    <section class="w3l-service-breadcrum">
        <div class="breadcrum-bg py-sm-5 py-4">
            <div class="container py-lg-3">
                <h2>Tin tức Khoa Du Lịch</h2>
                <p><a href="#"">Trang Chủ</a> &nbsp; / &nbsp; Tin Tức</p>
                    </div>
                </div>
    </section>
    <section class=" w3l-features-8">
        <div class="features py-5" id="services">
            <div class="container py-md-3">
                <div class="fea-gd-vv text-center row">
                    @foreach ($category[1]['news'] as $key => $item)

                    @if ($key >3 )
                        <div class="float-top col-lg-4 col-md-6">
                            <a href="#"><img
                                    src="{{ asset('dist/layout/layout_khoadulich/images/hoc-ngan-han-tai-saigonact-nhieu-lua-chon-cho-nguoi-hoc-thumbnail-36492.jpg') }}"
                                    class="img-responsive" alt=""></a>
                            <div class="float-lt feature-gd">
                                <h3><a href="#"">{{$item->title}}</a> </h3>
                                    <h6> <span id=" sernew">Tin tức,</span> tháng 6/24/2020</h6>
                                        <p> Bạn đã tốt nghiệp THPT hoặc đã học hết phổ thông nhưng đại học không
                                            phải là sự lựa chọn của bạn. </p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="javascript:" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:">2</a></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <br>
@stop
