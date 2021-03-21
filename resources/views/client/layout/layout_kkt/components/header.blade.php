<!--====== HEADER PART START ======-->

<header id="header-part">

    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="header-contact text-lg-left text-center">
                        <ul>
                            <li><img src="{{ asset('dist/layout/layout_kkt/images/all-icon/map.png') }}"
                                    alt="icon"><span>{{ $address }}</span></li>
                            <li><img src="{{ asset('dist/layout/layout_kkt/images/all-icon/email.png') }}"
                                    alt="icon"><span>{{ $email }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header-opening-time text-lg-right text-center">

                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->

    <div class="header-logo-support pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset($logo) }}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="support-button float-right d-none d-md-block">
                        <div class="support float-left">
                            <div class="icon">
                                <img src="{{ asset('dist/layout/layout_kkt/images/all-icon/support.png') }}"
                                    alt="icon">
                            </div>
                            <div class="cont">
                                <p>{{ $title_support_line }}</p>
                                <span>{{ $number_support_line }} </span>
                            </div>
                        </div>
                        <br>
                        <div class="support float-left">
                            <div class="icon">
                                <img src="{{ asset('dist/layout/layout_kkt/images/all-icon/support.png') }}"
                                    alt="icon">
                            </div>
                            <div class="cont">
                                <p>{{ $title_hot_line }}</p>
                                <span>{{ $number_hot_line }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header logo support -->

    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                    <nav class="navbar navbar-inverse navbar-toggleable-md navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                @foreach ($menu_list as $menu)
                                @if ($menu->parent_id==0)
                                    <li class="nav-item">
                                        <a href="{{$menu->url}}">{{$menu->name}}</a>
                                        <ul class="sub-menu">
                                        @foreach ($menu_list as $menu2)
                                            @if ($menu->id == $menu2->parent_id)
                                                    <li><a href="{{$menu2->url}}">{{$menu2->name}}</a></li>
                                            @endif
                                        @endforeach
                                        </ul>
                                    </li>
                                @endif
                                @endforeach

                                @foreach($all_category as $category)
                                    <li class="nav-item">
                                        <a href="{{ route('tin-tuc', [$faculty['slug']]) }}">{{$category->title}}</a>
                                    </li>
                                @endforeach


                                {{-- <li class="nav-item">
                                    <a href="javascript:">Trang Chủ</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('trang-chu', ['khoa-kinh-te']) }}">Khoa Kinh tế</a></li>
                                        <li><a href="{{ route('trang-chu', ['trang-chu']) }}">Đại Học Du Lịch</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gioi-thieu', [$faculty['slug']]) }}">Giới Thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:">Đào Tạo</a>
                                    <ul class="sub-menu">
                                        @foreach ($all_specialized as $item)
                                            <li><a
                                                    href="{{ route('dao-tao-chi-tiet', [$faculty['slug'], $item->slug]) }}">{{ $item->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('tin-tuc', [$faculty['slug']]) }}">Tin Tức</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('thong-bao', [$faculty['slug']]) }}">Thông Báo</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('giao-vien', [$faculty['slug']]) }}">Giảng Viên</a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('lien-he', [$faculty['slug']]) }}">Liên Lạc</a>
                                </li> --}}
                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
</header>

<!--====== HEADER PART ENDS ======-->
