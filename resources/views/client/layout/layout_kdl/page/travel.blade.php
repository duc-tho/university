@extends('client.layout.layout_kdl.index')
@section('title','Ngành QTDULvLH')
@section('main')
<section class="w3l-about-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Ngành Quản Trị Du Lịch Và Lữ Hành</h2>
            <p><a href="{{route('khoadulich')}}">Trang Chủ</a> &nbsp; / &nbsp; Đào Tạo &nbsp; / &nbsp; Nghành Quản Trị Du Lịch Và Lữ Hành</p>
        </div>
    </div>
</section>
<!-- content-with-photo4 block -->
<section class="w3l-content-with-photo-4">
    <div id="content-with-photo4-block" class="pt-5">
        <div class="container py-md-5">
            <div class="cwp4-two row">
                <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                    <img src="{{asset('dist/layout/layout_khoadulich/images/20181227184217-21754.jpg')}}" width="100%" height="auto" class="img-fluid" alt="" />
                    <hr>
                    <img src=" {{asset('dist/layout/layout_khoadulich/images/20180118150548-73629.jpg')}}" width="100%" height="auto" class="img-fluid" alt="" />
                </div>
                <div class="cwp4-text col-lg-6">
                    <h2 id="titleqtks">QUẢN TRỊ KHÁCH SẠN</h2>
                    <h5>Ngày đăng: 16/01/2018</h5>
                    <p id="des">Nói một cách dễ hiểu, Quản trị khách sạn là quản lý và tổ chức các hoạt động của khách sạn
                        sao cho hiệu quả và hợp lý nhất. Ngành này đặc biệt phù hợp với những bạn năng động,
                        nhạy bén trong công việc, có khả năng quan sát nắm bắt tâm lí khách hàng, xử lí tình
                        huống tốt trong những trường hợp khẩn cấp và đặc biệt phải có đam mê, nhiệt huyết trong
                        công việc.</p>
                    <p> Khi học ngành quản trị khách sạn sinh viên sẽ được cung cấp đầy đủ kiến thức về nhà hàng
                        khách sạn như quản lý hệ thống phòng, quản lý nhân viên, giao tiếp với khách hàng, chuẩn
                        bị sự kiện, giải quyết rủi ro, đặc biệt am hiểu về rượu và các loại thực phẩm phổ biến tại
                        khách sạn. Hơn nữa bạn có hiểu biết sâu rộng về nhiều văn hóa khác nhau của nhiều vùng
                        miền cũng như các quốc gia trên thế giới.</p>

                    <ul class="cont-4">
                        <li><span class="fa fa-check"></span> <span id="con">Trình độ đào tạo :</span> Đại học</li>
                        <li><span class="fa fa-check"></span> <span id="con">Loại hình đào tạo :</span> Chính quy</li>
                        <li><span class="fa fa-check"></span> <span id="con">Thời gian đào tạo :</span> 04 năm</li>
                        <li><span class="fa fa-check"></span> <span id="con">Đối tượng tuyển sinh :</span> Theo Quy chế tuyển sinh đại học, cao đẳng hệ chính qui hiện hành do Bộ Giáo dục và Đào tạo.</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- content-with-photo4 block -->

<section class="w3l-feature-2">
    <div class="grid top-bottom py-5">
        <div class="container py-md-5">
            <div class="heading text-center mx-auto">
                <h3 class="head">Tại sao bạn phải chọn Nghành Quản Trị Khách Sạn </h3>
                <p class="my-3 head">Năm 2016, ngành Quản trị Khách sạn là một trong số
                    các ngành có nhu cầu nhân lực cao nhất tại TP.HCM nói riêng và trong cả nước nói
                    chung.Cử nhân ngành Quản trị khách sạn sau khi tốt nghiệp có thể đảm nhiệm tốt các
                    công việc như: Quản lý hoặc chuyên viên các bộ phận lễ tân tiền sảnh, phòng, ẩm
                    thực, bếp, hội nghị yến tiệc, nhân sự, tài chính-kế toán, kinh doanh doanh- tiếp
                    thị, hành chính, nhân lực, marketing… tại các resort, khu nghỉ dưỡng, khu du lịch…; Cán
                    bộ điều hành, tiếp thị, nhân sự, tài chính tại các cơ quan nghiên cứu, kinh doanh du
                    lịch trong và ngoài nước; Giảng dạy nghiên cứu về nhà hàng khách sạn tại các trường đại học cao đẳng.</p>
            </div>

        </div>
    </div>
</section>

<section class="teams text-center py-5" id="team">
    <div class="container py-xl-5 py-lg-3">
        <div class="heading text-center mx-auto">
            <h3 class="head">Giảng Viên Của Khoa</h3>
            <p class="my-3 head">Chúng tôi luôn cố gắng và không ngừng phấn đấu, để có thể mang đến những kiến thức bổ ích
                cho sinh viên trong khoa, đồng thời chúng tôi luôn sẵn sàng mang đến cho các sinh viên những chuyến đi bổ ích
            </p>
        </div>
        <div class="row inner-sec-w3ls-w3pvt-aminfo pt-5 mt-3">
            <div class="col-lg-3 col-sm-6">
                <div class="team-grid text-center">
                    <div class="team-img">
                        <img class="img-fluid rounded" src=" {{asset('dist/layout/layout_khoadulich/images/t1.jpg')}}" alt="">


                    </div>
                    <div class="team-info">
                        <h4>Trent Boult</h4>
                        <ul class="d-flex justify-content-center py-3 social-icons">
                            <li class="effect-soc-team1">
                                <a href="javascript:">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="effect-soc-team2">
                                <a href="javascript:">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="effect-soc-team3">
                                <a href="javascript:">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 top-tem">
                <div class="team-grid text-center">
                    <div class="team-img">
                        <img class="img-fluid rounded" src="{{asset('dist/layout/layout_khoadulich/images/t2.jpg')}}" alt="">
                    </div>
                    <div class="team-info">
                        <h4>Ruth Grace</h4>
                        <ul class="d-flex justify-content-center py-3 social-icons">
                            <li class="effect-soc-team1">
                                <a href="javascript:">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="effect-soc-team2">
                                <a href="javascript:">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="effect-soc-team3">
                                <a href="javascript:">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6  mt-sm-0 mt-5">
                <div class="team-grid text-center">
                    <div class="team-img">
                        <img class="img-fluid rounded" src="{{asset('dist/layout/layout_khoadulich/images/t3.jpg')}}" alt="">
                    </div>
                    <div class="team-info">
                        <h4>Jonty Rhoods</h4>
                        <ul class="d-flex justify-content-center py-3 social-icons">
                            <li class="effect-soc-team1">
                                <a href="javascript:">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="effect-soc-team2">
                                <a href="javascript:">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="effect-soc-team3">
                                <a href="javascript:">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 top-tem">
                <div class="team-grid text-center">
                    <div class="team-img">
                        <img class="img-fluid rounded" src="{{asset('dist/layout/layout_khoadulich/images/t4.jpg')}}" alt="">
                    </div>
                    <div class="team-info">
                        <h4>Maria Clisters</h4>
                        <ul class="d-flex justify-content-center py-3 social-icons">
                            <li class="effect-soc-team1">
                                <a href="javascript:">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="effect-soc-team2">
                                <a href="javascript:">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="effect-soc-team3">
                                <a href="javascript:">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
