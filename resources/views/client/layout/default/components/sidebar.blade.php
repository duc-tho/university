<div class="sidebar">
    <div class="widget">
        <h2 class="widget-title">Tìm kiếm</h2>
        <form class="form-inline search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Bạn đang muốn tìm gì?">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- end widget -->

    <div class="widget">
        <h2 class="widget-title">Giới thiệu</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                <a href="{{ route('gioi-thieu-chi-tiet', ['trang-chu', 'chi-tiet-tin-tuc']) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 justify-content-between">
                        <img src="{{ asset('dist/layout/default/upload/blog_square_01.jpg') }}" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">Cơ sở vật chất</small>
                    </div>
                </a>

                <a href="{{ route('gioi-thieu-chi-tiet', ['trang-chu', 'chi-tiet-tin-tuc']) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 justify-content-between">
                        <img src="{{ asset('dist/layout/default/upload/blog_square_02.jpg') }}" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">Sứ mệnh tầm nhìn</small>
                    </div>
                </a>

                <a href="{{ route('gioi-thieu-chi-tiet', ['trang-chu', 'chi-tiet-tin-tuc']) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 justify-content-between">
                        <img src="{{ asset('dist/layout/default/upload/blog_square_03.jpg') }}" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">Sơ đồ tổ chức</small>
                    </div>
                </a>

                <a href="{{ route('gioi-thieu-chi-tiet', ['trang-chu', 'chi-tiet-tin-tuc']) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 justify-content-between">
                        <img src="{{ asset('dist/layout/default/upload/blog_square_03.jpg') }}" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">Đội ngũ giảng viên</small>
                    </div>
                </a>

                <a href="{{ route('gioi-thieu-chi-tiet', ['trang-chu', 'chi-tiet-tin-tuc']) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 justify-content-between">
                        <img src="{{ asset('dist/layout/default/upload/blog_square_03.jpg') }}" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">Lãnh đạo</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="widget">
        <h2 class="widget-title">Chủ đề</h2>
        <div class="link-widget">
            <ul>
                <li><a href="javascript:">Cơ sở vật chất <span>(21)</span></a></li>
                <li><a href="javascript:">Hoạt động <span>(15)</span></a></li>
                <li><a href="javascript:">Thực tập <span>(31)</span></a></li>
                <li><a href="javascript:">Khai giảng các năm <span>(22)</span></a></li>
                <li><a href="javascript:">Gới thiệu <span>(66)</span></a></li>
                <li><a href="javascript:">Tuyển sinh <span>(11)</span></a></li>
            </ul>
        </div><!-- end link-widget -->
    </div><!-- end widget -->

    <!-- end sidebar -->

</div>
