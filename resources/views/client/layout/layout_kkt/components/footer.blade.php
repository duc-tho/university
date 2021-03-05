<!--====== FOOTER PART START ======-->

<footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-about mt-40">
                        <div class="logo">
                            <a href="#"><img src="{{ asset($logo) }}" alt="Logo" width="50%"></a>
                        </div>
                        <p>{{ $title_name_uni_footer }}</p>
                        <ul class="mt-20">
                            @foreach ($socials_icon as $item)
                                <li><a href="#"><i class="fa fa-{{ $item->fa_icon }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="footer-link mt-40">
                        <div class="footer-title pb-25">
                            <h6>Thông Tin</h6>
                        </div>
                        <ul>
                            <li><a href="index-2.html"><i class="fa fa-angle-right"></i>Trang Chủ</a></li>
                            <li><a href="about.html"><i class="fa fa-angle-right"></i>Giới Thiệu Về Trường</a></li>
                            <li><a href="courses.html"><i class="fa fa-angle-right"></i>Các Khóa Học</a></li>
                            <li><a href="blog.html"><i class="fa fa-angle-right"></i>Thông Báo</a></li>
                            <li><a href="events.html"><i class="fa fa-angle-right"></i>Sự Kiện</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address mt-40">
                        <div class="footer-title pb-25">
                            <h6>Liên Lạc</h6>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>{{ $address }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>{{ $number_support_line }} </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>{{ $email }}</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- footer address -->
                </div>

                <div class="col-sm-12">
                    <br>
                <br>
                    <p class="footer_license">{{ $title_license_footer }}</p>
                    <p class="footer_license">{{ $title_license_content_footer }}</p>
                </div>
            </div> <!-- row -->
        </div>
        <!-- container -->
    </div> <!-- footer top -->

    <!--<div class="footer-copyright pt-10 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright text-md-left text-center pt-15">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="copyright text-md-right text-center pt-15">

                    </div>
                </div>
            </div> <!-- row -->
    <!--</div> <!-- container -->
    <!--</div> footer copyright -->
</footer>

<!--====== FOOTER PART ENDS ======-->
