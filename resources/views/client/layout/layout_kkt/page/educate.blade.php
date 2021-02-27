@extends('client.layout.layout_kkt.index')

@section('title', 'Khóa học khoa Kinh Tế')

@section('meta')
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
@endsection

@section('main')
<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(/dist/layout/layout_kkt/images/page-banner-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Danh sách khóa học</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{-- route('khoakinhte-khoahoc') --}}">Khoa Kinh Tế</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách khóa học</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== COURSES PART START ======-->

<section id="courses-part" class="pt-120 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="courses-top-search">
                    <ul class="nav float-left" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="courses-grid-tab" data-toggle="tab" href="#courses-grid" role="tab" aria-controls="courses-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
                        </li>
                        <li class="nav-item">
                            <a id="courses-list-tab" data-toggle="tab" href="#courses-list" role="tab" aria-controls="courses-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                        </li>
                        <li class="nav-item">Showning 4 0f 24 Results</li>
                    </ul> <!-- nav -->

                    <div class="courses-search float-right">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div> <!-- courses search -->
                </div> <!-- courses top search -->
            </div>
        </div> <!-- row -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-course mt-30">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/course/cu-1.jpg') }}" alt="Course">
                                </div>
                                <div class="price">
                                    <span>Free</span>
                                </div>
                            </div>
                            <div class="cont">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>(20 Reviws)</span>
                                <a href="{{--  route('khoakinhte-chitietkhoahoc') --}}">
                                    <h4>Learn basis javascirpt from start for beginner</h4>
                                </a>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="javascript:"><img src="{{ asset('dist/layout/layout_kkt/images/course/teacher/t-1.jpg') }}" alt="teacher"></a>
                                    </div>
                                    <div class="name">
                                        <a href="javascript:">
                                            <h6>Mark anthem</h6>
                                        </a>
                                    </div>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- singel course -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-course mt-30">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/course/cu-2.jpg') }}" alt="Course">
                                </div>
                                <div class="price">
                                    <span>Free</span>
                                </div>
                            </div>
                            <div class="cont">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>(20 Reviws)</span>
                                <a href="{{--  route('khoakinhte-chitietkhoahoc') --}}">
                                    <h4>Learn basis javascirpt from start for beginner</h4>
                                </a>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="javascript:"><img src="{{ asset('dist/layout/layout_kkt/images/course/teacher/t-2.jpg') }}" alt="teacher"></a>
                                    </div>
                                    <div class="name">
                                        <a href="javascript:">
                                            <h6>Mark anthem</h6>
                                        </a>
                                    </div>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- singel course -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-course mt-30">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/course/cu-3.jpg') }}" alt="Course">
                                </div>
                                <div class="price">
                                    <span>Free</span>
                                </div>
                            </div>
                            <div class="cont">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>(20 Reviws)</span>
                                <a href="{{--  route('khoakinhte-chitietkhoahoc') --}}">
                                    <h4>Learn basis javascirpt from start for beginner</h4>
                                </a>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="javascript:"><img src="{{ asset('dist/layout/layout_kkt/images/course/teacher/t-3.jpg') }}" alt="teacher"></a>
                                    </div>
                                    <div class="name">
                                        <a href="javascript:">
                                            <h6>Mark anthem</h6>
                                        </a>
                                    </div>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- singel course -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-course mt-30">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/course/cu-4.jpg') }}" alt="Course">
                                </div>
                                <div class="price">
                                    <span>Free</span>
                                </div>
                            </div>
                            <div class="cont">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>(20 Reviws)</span>
                                <a href="{{--  route('khoakinhte-chitietkhoahoc') --}}">
                                    <h4>Learn basis javascirpt from start for beginner</h4>
                                </a>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="javascript:"><img src="{{ asset('dist/layout/layout_kkt/images/course/teacher/t-4.jpg') }}" alt="teacher"></a>
                                    </div>
                                    <div class="name">
                                        <a href="javascript:">
                                            <h6>Mark anthem</h6>
                                        </a>
                                    </div>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- singel course -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-course mt-30">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/course/cu-5.jpg') }}" alt="Course">
                                </div>
                                <div class="price">
                                    <span>Free</span>
                                </div>
                            </div>
                            <div class="cont">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>(20 Reviws)</span>
                                <a href="{{--  route('khoakinhte-chitietkhoahoc') --}}">
                                    <h4>Learn basis javascirpt from start for beginner</h4>
                                </a>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="javascript:"><img src="{{ asset('dist/layout/layout_kkt/images/course/teacher/t-5.jpg') }}" alt="teacher"></a>
                                    </div>
                                    <div class="name">
                                        <a href="javascript:">
                                            <h6>Mark anthem</h6>
                                        </a>
                                    </div>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- singel course -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-course mt-30">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/course/cu-1.jpg') }}" alt="Course">
                                </div>
                                <div class="price">
                                    <span>Free</span>
                                </div>
                            </div>
                            <div class="cont">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>(20 Reviws)</span>
                                <a href="{{--  route('khoakinhte-chitietkhoahoc') --}}">
                                    <h4>Learn basis javascirpt from start for beginner</h4>
                                </a>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="javascript:"><img src="{{ asset('dist/layout/layout_kkt/images/course/teacher/t-1.jpg') }}" alt="teacher"></a>
                                    </div>
                                    <div class="name">
                                        <a href="javascript:">
                                            <h6>Mark anthem</h6>
                                        </a>
                                    </div>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- singel course -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-course mt-30">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('dist/layout/layout_kkt/images/course/cu-1.jpg') }}" alt="Course">
                                </div>
                                <div class="price">
                                    <span>Free</span>
                                </div>
                            </div>
                            <div class="cont">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>(20 Reviws)</span>
                                <a href="{{--  route('khoakinhte-chitietkhoahoc') --}}">
                                    <h4>Learn basis javascirpt from start for beginner</h4>
                                </a>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="javascript:"><img src="{{ asset('dist/layout/layout_kkt/images/course/teacher/t-1.jpg') }}" alt="teacher"></a>
                                    </div>
                                    <div class="name">
                                        <a href="javascript:">
                                            <h6>Mark anthem</h6>
                                        </a>
                                    </div>
                                    <div class="admin">
                                        <ul>
                                            <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                            <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- singel course -->
                    </div>
                </div> <!-- row -->
            </div>
            <div class="tab-pane fade" id="courses-list" role="tabpanel" aria-labelledby="courses-list-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="singel-course mt-30">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/course/cu-1.jpg') }}" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviws)</span>
                                        <a href="javascript:">
                                            <h4>Learn basis javascirpt from start for beginner</h4>
                                        </a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="javascript:"><img src="{{ asset('dist/layout/layout_kkt/images/course/teacher/t-1.jpg') }}" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="javascript:">
                                                    <h6>Mark anthem</h6>
                                                </a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--  row  -->
                        </div> <!-- singel course -->
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-course mt-30">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/favicon.png') }}" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviws)</span>
                                        <a href="javascript:">
                                            <h4>Learn basis javascirpt from start for beginner</h4>
                                        </a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="javascript:"><img src="{{ asset('dist/layout/layout_kkt/images/favicon.png') }}" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="javascript:">
                                                    <h6>Mark anthem</h6>
                                                </a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--  row  -->
                        </div> <!-- singel course -->
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-course mt-30">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/page-banner-2.jpg') }}" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviws)</span>
                                        <a href="javascript:">
                                            <h4>Learn basis javascirpt from start for beginner</h4>
                                        </a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="javascript:"><img src="{{ asset('dist/layout/layout_kkt/images/page-banner-2.jpg') }}" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="javascript:">
                                                    <h6>Mark anthem</h6>
                                                </a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--  row  -->
                        </div> <!-- singel course -->
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-course mt-30">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="{{ asset('dist/layout/layout_kkt/images/logo-2.png') }}" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Free</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Reviws)</span>
                                        <a href="javascript:">
                                            <h4>Learn basis javascirpt from start for beginner</h4>
                                        </a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="javascript:"><img src="{{ asset('dist/layout/layout_kkt/images/page-banner-1.jpg') }}" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="javascript:">
                                                    <h6>Mark anthem</h6>
                                                </a>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="javascript:"><i class="fa fa-user"></i><span>31</span></a></li>
                                                    <li><a href="javascript:"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--  row  -->
                        </div> <!-- singel course -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- tab content -->
        <div class="row">
            <div class="col-lg-12">
                <nav class="courses-pagination mt-50">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a href="javascript:" aria-label="Previous">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="active" href="javascript:">1</a></li>
                        <li class="page-item"><a href="javascript:">2</a></li>
                        <li class="page-item"><a href="javascript:">3</a></li>
                        <li class="page-item">
                            <a href="javascript:" aria-label="Next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav> <!-- courses pagination -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COURSES PART ENDS ======-->
@endsection
