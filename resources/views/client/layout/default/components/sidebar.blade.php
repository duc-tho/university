<div class="sidebar">
    <div class="widget col">
        <h2 class="widget-title">Tìm kiếm</h2>
        <form class="form-inline search-form">
            <div class="form-group mb-0">
                <input type="text" class="form-control" placeholder="Bạn đang muốn tìm gì?">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- end widget -->

    <div class="widget col">
        <h2 class="widget-title">Giới thiệu</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                @foreach ($about as $item)
                <a href="{{ route('gioi-thieu-chi-tiet', ['trang-chu', $item['slug']]) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 justify-content-between">
                        <img src="{{ asset($item['image']) }}" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">{{ $item['title'] }}</h5>
                        <small>{{ convertDatabaseTimeToDMY($item['created_at']) }}</small>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- <div class="widget">
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
    </div><!-- end widget --> --}}

    <!-- end sidebar -->

</div>
