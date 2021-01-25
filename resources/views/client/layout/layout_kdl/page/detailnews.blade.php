@extends('client.layout.layout_kdl.index')
@section('title','Chi Tiết Tin Tức')
@section('main')
<section class="w3l-service-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Tin tức Khoa Du Lịch</h2>
            <p><a href="{{route('khoadulich')}}">Trang Chủ</a> &nbsp; / &nbsp; Tin Tức</p>
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
                                <a href="javascript:">Thông tin,</a>
                                <a class="active" href="javascript:">Du lịch,</a>
                                <a href="javascript:">Việc làm,</a>
                                <a href="javascript:">Sự kiện</a>
                            </div>
                            <ul class="blog_meta list">
                                <li><a href="javascript:">Tác giả : Ngọc Lập<i class="fas fa-user-alt"></i></a></li>
                                <li><a href="javascript:">Ngày : 05/01/2020<i class="far fa-calendar-alt"></i></a></li>
                                <li><a href="javascript:">Lượt xem : 1.2 view <i class="fas fa-eye"></i></a></li>
                                <li><a href="javascript:">Bình luận :120 <i class="fas fa-comments"></i></a></li>
                            </ul>
                            <ul class="social-links">
                                <li><a href="javascript:"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:"><i class="fa fa-github"></i></a></li>
                                <li><a href="javascript:"><i class="fa fa-behance"></i></a></li>
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
            @include('client.layout.layout_kdl.components.nvarbar')
        </div>
    </div>
</section>
@stop
