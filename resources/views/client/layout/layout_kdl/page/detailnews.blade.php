@extends('client.layout.layout_kdl.index')
@section('title','Chi Tiết Tin Tức')
@section('main')
<section class="w3l-service-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
      <div class="container py-lg-3">
        <h2>Tin tức Khoa Du Lịch</h2>
        <p><a href="index.html">Trang Chủ</a> &nbsp; / &nbsp; Tin Tức</p>
      </div>
    </div>
  </section>
<!-- End Header Area -->


<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{asset('dist/layout/layout_khoadulich/images/hoc-ngan-han-tai-saigonact-nhieu-lua-chon-cho-nguoi-hoc-thumbnail-36492.jpg')}}" width="100%" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            <div class="post_tag">
                                <a href="#">Thông tin,</a>
                                <a class="active" href="#">Du lịch,</a>
                                <a href="#">Việc làm,</a>
                                <a href="#">Sự kiện</a>
                            </div>
                            <ul class="blog_meta list">
                                <li><a href="#">Tác giả : Ngọc Lập<i class="fas fa-user-alt"></i></a></li>
                                <li><a href="#">Ngày : 05/01/2020<i class="far fa-calendar-alt"></i></a></li>
                                <li><a href="#">Lượt xem : 1.2 view <i class="fas fa-eye"></i></a></li>
                                <li><a href="#">Bình luận :120 <i class="fas fa-comments"></i></a></li>
                            </ul>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-lg-9 col-md-9 blog_details">
                        <h2>Học ngắn hạn tại SAIGONACT: Nhiều lựa chọn cho người học</h2>
                        <br>
                        <p class="excert">
                            Bạn đã tốt nghiệp THPT hoặc đã học hết phổ thông nhưng đại học không phải là sự lựa chọn của bạn. Bạn muốn chọn một nghề nào đó để học nhưng lại không muốn mất quá nhiều thời gian trong một số trường nghề mà ra trường lại chưa chắc làm được việc?
                        </p>
                        <p>
                            Vì vậy, bạn muốn học một nghề nào đó phù hợp với ngành mà mình yêu thích để có thể vừa đi làm để tự lập, hoặc cũng có thể tích luỹ kiến thức, kỹ năng cho công việc hiện tại của bạn. Tại SAOGONACT, bên cạnh đào tạo 24 ngành cao đẳng chính quy, năm học 2020 – 2021, nhà trường chú trọng đẩy mạnh đào tạo các khoá học nghiệp vụ ngắn hạn thuộc các nhóm ngành: Du lịch, Nghệ thuật, Mỹ thuật công nghiệp, Ngoại ngữ.
                        </p>
                        <p>
                            Trung tâm đào tạo ngắn hạn SAIGONACT luôn lắng nghe và quan tâm đến các nhu cầu của chính các bạn học viên, vì thế luôn mang lại cho các bạn dịch vụ đào tạo tốt nhất. Với mục tiêu đào tạo là “học để làm được việc” cùng với đội ngũ giảng viên chuyên nghiệp – nhiệt tình – chu đáo – tận tâm với nghề chắc chắn sẽ mang đến cho học viên những kiến thức thật sự hữu ích.
                        </p>
                        <p>Trung tâm đào tạo ngắn hạn SAIGONACT luôn cam kết cho bạn chất lượng đầu ra, giúp bạn hoàn toàn làm chủ với kiến thức được học, tự tin với công việc đã chọn. Vậy bạn đang yêu thích ngành nghề gì? Chúng ta cùng tham khảo hệ thống các ngành nghề được đào tạo tại Trung tâm đào tạo ngắn hạn SAIGONACT để lựa chọn cho mình bạn nhé!</p>
                        <p></p>
                    </div>
                    <div class="col-lg-12">
                        <div class="quotes">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand
                            why you should have to spend money on boot camp when you can get the MCSE study
                            materials yourself at a fraction of the camp price. However, who has the willpower to
                            actually sit through a self-imposed MCSE training.
                        </div>
                        
                    </div>
                </div>
               
                <div class="comments-area">
                   
                    <div class="comment-list">
                        <div class="fb-comments" data-href="http://localhost:81/web_TRAVEL/details_news.html" data-width="680" data-numposts="6"></div>
                    </div>

                </div>
               
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tìm Kiếm"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tìm Kiếm'">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i
                                        class="fas fa-search"></i></button>
                            </span>
                        </div><!-- /input-group -->
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">TIN TỨC LIÊN QUAN</h3>
                        <div class="testimonial-info">
                            <p id="ttlq"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học</p>
                            <h5 class="mes-h5" >Thông Báo, <span>29/12/2020</span></h5> 
                            <br>
                        </div>
                    
                        <div class="testimonial-info">
                            <p id="ttlq"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học, Đăng ký các môn thi lại </p>
                            <h5 class="mes-h5">Thông Báo, <span>29/12/2020</span></h5> 
                            <br>
                        </div>
                        <div class="testimonial-info">
                            <p id="ttlq"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học, Đăng ký các môn thi lại </p>
                            <h5 class="mes-h5">Thông Báo, <span>29/12/2020</span></h5> 
                            <br>
                        </div>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Thông Báo</h3>
                        <div class="testimonial-info">
                            <p id="ttlq"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học</p>
                            <h5 class="mes-h5">Thông Báo, <span>29/12/2020</span></h5> 
                            <br>
                        </div>
                    
                        <div class="testimonial-info">
                            <p id="ttlq"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học, Đăng ký các môn thi lại </p>
                            <h5 class="mes-h5">Thông Báo, <span>29/12/2020</span></h5> 
                            <br>
                        </div>
                        <div class="testimonial-info">
                            <p id="ttlq"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học, Đăng ký các môn thi lại </p>
                            <h5 class="mes-h5">Thông Báo, <span>29/12/2020</span></h5> 
                            <br>
                        </div>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget ads_widget">
                        <a href="#"><img class="img-fluid" src="imagesadd.jpg" alt=""></a>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Bảng Tin Khoa</h4>
                        <div class="testimonial-info">
                            <p id="ttlq"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học</p>
                            <h5 class="mes-h5">Thông Báo, <span>29/12/2020</span></h5> 
                            <br>
                        </div>
                        <div class="testimonial-info">
                            <p id="ttlq"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học</p>
                            <h5 class="mes-h5">Thông Báo, <span>29/12/2020</span></h5> 
                            <br>
                        </div>
                        <div class="testimonial-info">
                            <p id="ttlq"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học</p>
                            <h5 class="mes-h5">Thông Báo, <span>29/12/2020</span></h5> 
                            <br>
                        </div>
                        <div class="br"></div>
                    </aside>
                    <aside class="single-sidebar-widget newsletter_widget">
                        <h4 class="widget_title">Đóng góp ý kiến</h4>
                        <p>
                            Bạn hay đóng góp ý kiến ? Hãy viết thông tin cá nhân và ý kiến của bạn vào để chúng tôi hồi đáp
                        </p>
                        <div class="form-group d-flex flex-row">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                    placeholder="ENhập email" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Nhập email'">
                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                    placeholder="Thông tin góp ý" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Thông tin góp ý'">
                            </div>
                            <a href="#" class="bbtns">Góp ý</a>
                        </div>
                        <!-- <p class="text-bottom">Thông tin</p> -->
                        <div class="br"></div>
                    </aside>
                    <aside class="single-sidebar-widget tag_cloud_widget">
                        <h4 class="widget_title">Liên kết khác</h4>
                        <ul class="list">
                            <li><a href="#">Sinh viên</a></li>
                            <li><a href="#">Đại học</a></li>
                            <li><a href="#">Cao đẳng</a></li>
                            <li><a href="#">Trung Cấp</a></li>
                            <li><a href="#">Khoa du lịch</a></li>
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Tin tức - Sự kiện</a></li>
                            <li><a href="#">Liên Hệ</a></li>
                            <li><a href="#">Thực Tập</a></li>
                            <li><a href="#">Đoàn</a></li>
                            <li><a href="#">Đào tạo</a></li>
                            <li><a href="#">Thông tin</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
@stop