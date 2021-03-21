@extends('client.layout.layout_kkt.index')

@section('title', 'Khoa Kinh Tế - Chi tiết Khóa học')

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
                    <h2>TÀI CHÍNH NGÂN HÀNG</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Đào Tạo</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tài Chính Ngân Hàng</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<section id="corses-singel" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="corses-singel-left mt-30">
                    <div class="title">
                        <h3>Tài Chính Ngân Hàng</h3>
                    </div> <!-- title -->
                    <div class="course-terms">
                        <ul>
                            <li>
                                <div class="name">
                                    <span>Trình Độ Đào Tạo :</span>
                                    <h6>Cao Đẳng</h6>
                                </div>
                            </li>
                            <li>
                                <div class="name">
                                    <span>Loại Hình Đào Tạo :</span>
                                    <h6>Chính Quy </h6>
                                </div>
                            </li>
                            <li>
                                <div class="name">
                                    <span>Thời Gian Đào Tạo :</span>
                                    <h6>2 năm </h6>
                                </div>
                            </li>
                            <li>
                                <div class="name">
                                    <span>Đối Tượng Tuyển Sinh :</span>
                                    <h6>Theo Quy chế tuyển sinh đại học, cao đẳng hệ chính qui hiện hành
                                         do Bộ Giáo dục và Đào tạo. </h6>
                                </div>
                            </li>
                        </ul>
                    </div> 
                    <br>
               
                    <div class="corses-singel-image ">
                         <img src="{{ asset('dist/layout/layout_kkt/images/nganh-ke-toan-su-lua-chon-nghe-nghiep-trong-thoi-ky-hoi-nhap-thumbnail-91783.jpg') }}" alt="Courses">
                    </div> <!-- corses singel image -->
                   
                  
                    <div class="corses-tab mt-30">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Giới Thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a id="curriculam-tab" data-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam" aria-selected="false">Mục Tiêu Đào Tạo</a>
                            </li>
                            <li class="nav-item">
                                <a id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false">Cơ Hội Việc Làm</a>
                            </li>
                            <li class="nav-item">
                                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Tại Sao Chọn TC-Ngân Hàng ?</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="overview-description">
                                    <div class="singel-description pt-40">
                                        <p class="p-introdution">Ngành Tài Chính Ngân Hàng :</p>
                                        <br>
                                        <p>Khái niệm Tài chính ngân hàng là gì? Đây là ngành học khá rộng, liên quan đến tất
                                             cả các dịch vụ giao dịch tài chính, lưu thông và vận hành tiền tệ. Cụ thể hơn,
                                              Tài chính ngân hàng là kinh doanh về lĩnh vực tiền tệ thông qua ngân hàng và các 
                                              công cụ tài chính được ngân hàng phát hành nhằm bảo lãnh, thanh toán, chi trả trong nội
                                               địa và quốc tế. Sau khi tốt nghiệp, sinh viên có rất nhiều cơ hội việc làm hấp dẫn tại
                                                các ngân hàng, tập đoàn tài chính, công ty chứng khoán, quỹ tín dụng... Ngành Tài chính
                                                 ngân hàng có thể chia thành nhiều lĩnh vực chuyên ngành khác nhau như ngân hàng, tài
                                                  chính doanh nghiệp, tài chính thuế, tài chính bảo hiểm, tài chính công…</p>
                                    
                                    </div>
                                </div>
                                   
                            </div>
                            <div class="tab-pane fade" id="curriculam" role="tabpanel" aria-labelledby="curriculam-tab">
                                <div class="curriculam-cont">
                                    <div class="title">
                                        <p class="p-introdution">Mục Tiêu Đào Tạo : </p>
                                        <br>
                                        <p>Đào tạo cử nhân Tài chính Ngân hàng có phẩm chất chính trị, nắm vững những kiến thức cơ bản 
                                            về kinh tế xã hội, quản trị kinh doanh và tài chính ngân hàng; có năng lực nghiên cứu, 
                                            hoạch định chính sách và giải quyết các vấn đề chuyên môn trong lĩnh vực tài chính ngân hàng.</p>
                                    </div>
                               
                                </div> <!-- curriculam cont -->
                            </div>
                            <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                <div class="instructor-cont">
                                    <div class="instructor-description pt-25">
                                        <p class="p-introdution">Cơ hội việc làm cho sinh viên : </p>
                                        <br>
                                        <p>Sau khi tốt nghiệp ngành này, sinh viên có thể đảm nhiệm các công việc như :</p>
                                        <p> - Chuyên viên tại các các doanh nghiệp kinh doanh, công ty kiểm toán, quỹ đầu tư, 
                                            công ty kinh doanh bất động sản, công ty tài chính, công ty bảo hiểm, chứng khoán…</p>
                                        <p> - Chuyên viên tại các ngân hàng thương mại (cán bộ tín dụng, nhân viên kế toán, 
                                            kế toán viên phòng thanh toán quốc tế, nhân viên kinh doanh ngoại tệ), công ty 
                                            chứng khoán (nhà môi giới và kinh doanh chứng khoán), tổ chức tín dụng phi ngân hàng,
                                             cơ quan quản lý nhà nước về tài chính ngân hàng và các loại hình doanh nghiệp khác 
                                             hoặc đảm đương công việc của trợ lý, tư vấn, tham vấn cho lãnh đạo doanh nghiệp, các
                                              tổ chức tài chính. Giảng viên ngành Tài chính ngân hàng tại các trường đại học, cao 
                                              đẳng, trung cấp.</p>
                                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus fuga ratione molestiae unde provident quibusdam sunt, doloremque. Error omnis mollitia, ex dolor sequi. Et, quibusdam excepturi. Animi assumenda, consequuntur dolorum odio sit inventore aliquid, optio fugiat alias. Veritatis minima, dicta quam repudiandae repellat non sit, distinctio, impedit, expedita tempora numquam?</p> --}}
                                    </div>
                                </div> <!-- instructor cont -->
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="reviews-cont">
                                    <div class="title">
                                        <h6></h6>
                                        <p>Tài chính ngân hàng  là ngành học khá rộng, liên quan đến tất cả các dịch vụ giao dịch 
                                            tài chính, lưu thông và vận hành tiền tệ. Ngành Tài chính ngân hàng có thể chia thành 
                                            nhiều lĩnh vực chuyên ngành khác nhau như  Tín dụng ngân hàng, Quản trị ngân hàng thương mại,
                                             Tài chính ngân hàng, Quản trị đầu tư tài chính, Thẩm định giá, Thuế, Tài chính - Bảo hiểm, 
                                             Phân tích tài chính doanh nghiệp,...  Vậy, học ngành Tài chính ngân hàng ra trường làm gì? 
                                             Tốt nghiệp ngành Tài chính ngân hàng sẽ làm việc ở đâu?</p>
                                        <p>Một số công việc liên quan mà sinh viên ra trường có thể làm như:</p>
                                        <p> -Chuyên viên tín dụng ngân hàng;</p>
                                        <p> -Chuyên viên kế toán, kiểm toán nội bộ ngân hàng thương mại;</p>
                                        <p> -Kế toán viên phòng thanh toán quốc tế,</p>
                                        <p> -Nhân viên kinh doanh ngoại tệ</p>
                                        <p> ...</p>
                                        <p></p>
                                    </div>
                                   
                                </div> <!-- reviews cont -->
                            </div>
                        </div> <!-- tab content -->
                    </div>
                </div> <!-- corses singel left -->
            </div>
        </div> <!-- row -->
        {{-- <div class="row">
            <div class="col-lg-8">
                <div class="releted-courses pt-95">
                    <div class="title">
                        <h3>Releted Courses</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
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
                                    <a href="{{  route('khoakinhte-chitietkhoahoc') }}">
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
                        <div class="col-md-6">
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
                                    <a href="{{  route('khoakinhte-chitietkhoahoc') }}">
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
                    </div> <!-- row -->
                </div> <!-- releted courses -->
            </div>
        </div> <!-- row --> --}}
    </div> <!-- container -->
</section>

<!--====== COURSES SINGEl PART ENDS ======-->
@endsection
