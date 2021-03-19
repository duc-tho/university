
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

            <h3 class="widget_title">Tin Tức Liên Quan</h3>
            @foreach ($relate_news as $item)
            <div class="testimonial-info">
                <a href="{{ route('tin-tuc-chi-tiet', [$faculty['slug'], $category['slug'], $item['slug']]) }}">
                    <p id="tb">{{ $item['title']  }}</p>
                </a>
                <h5 class="mes-h5">{{ $category['title'] }}, <span>{{ $item['event_time'] }}</span></h5>
                <br>
            </div>
            @endforeach
            <div class="br"></div>

        </aside>

        <aside class="single_sidebar_widget ads_widget">
            <a href="#"><img class="img-fluid" src="imagesadd.jpg" alt=""></a>
            <div class="br"></div>
        </aside>
        {{-- <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Bảng Tin Khoa</h4>
            <div class="testimonial-info">
                <a href="#">
                    <p id="tb"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học</p>
                </a>
                <h5 class="mes-h5">Thông Báo, <span>29/12/2020</span></h5>
                <br>
            </div>
            <div class="testimonial-info">
                <a href="#">
                <p id="tb"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học</p>
                </a>
                <h5 class="mes-h5">Thông Báo, <span>29/12/2020</span></h5>
                <br>
            </div>
            <div class="testimonial-info">
                <a href="#">
                    <div id="tb"> Học kỳ dự thính 1/2020-2021 - Thông báo đăng ký học trả nợ môn học</p>
                </a>
                    <h5 class="mes-h5">Thông Báo, <span>29/12/2020</span></h5>
                    <br>
                </div>
            </div>
            <div class="br"></div>
        </aside> --}}
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
                @foreach ($footer_link as $footer_category)
                @foreach ($footer_category['child'] as $footer_item)
                <li><a href="{{ checkURL($footer_item['link']) }}">{{ $footer_item['title'] }}</a></li>
                @endforeach
                @endforeach
            </ul>
        </aside>
    </div>
</div>
