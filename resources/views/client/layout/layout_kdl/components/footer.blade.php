<section class="w3l-footer-29-main">
    <div class="footer-29">
        <div class="container">
            <div class="d-grid grid-col-4 footer-top-29">
                <div class="footer-list-29 footer-1">
                    <h6 class="footer-title-29">Liên Hệ</h6>
                    <ul>
                        <li>
                            <p><span class="fa fa-map-marker"></span>
                                {{ $address }}
                            </p>
                        </li>
                        <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span>
                                {{ $phone }}
                            </a></li>
                        <li><a href="mailto:corporate-mail@support.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                                {{ $email }}
                            </a></li>
                        <li><a href="mailto:corporate-mail@support.com" class="mail"><span class="fa fa-laptop"></span>
                                {{ $website_link }}
                            </a></li>
                    </ul>
                    <div class="main-social-footer-29">
                        {{-- @foreach (socials_icon as $item)

                        @endforeach
                        <a href="#facebook" ><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" ><span class="fa fa-twitter"></span></a>
                        <a href="#instagram" ><span class="fa fa-instagram"></span></a>
                        <a href="#google-plus"><span class="fa fa-google-plus"></span></a>
                        <a href="#linkedin" ><span class="fa fa-linkedin"></span></a> --}}
                        @foreach ($socials_icon as $item)
                        <a href="{{ checkURL($item['link']) }}"><span class="fa fa-{{ $item->fa_icon }}"></span></a>
                        @endforeach
                    </div>
                </div>
                <div class="footer-list-29 footer-2">
                    <ul>
                        <h6 class="footer-title-29">Đường Dẫn</h6>
                        <li><a href="{{route('tin-tuc', [$faculty['slug']])}}">Tin Tức</a></li>
                        <li><a href="{{route('gioi-thieu', [$faculty['slug']])}}">Giới Thiệu</a></li>
                        <li><a href="{{route('tin-tuc', [$faculty['slug']])}}">Thông Báo</a></li>
                        <li><a href="{{route('giao-vien', [$faculty['slug']])}}">Giáo Viên</a></li>
                        {{-- <li><a href="####">Khác</a></li> --}}
                    </ul>
                </div>
                <div class="footer-list-29 footer-3">

                    <h6 class="footer-title-29">Nghành Đào Tạo </h6>
                    {{-- <form action="#" class="subscribe" method="post">
                        <input type="email" name="email" placeholder="Email" required="">
                        <p></p>
                        <button><span class="fa fa-envelope-o"></span></button>

                    </form>
                    <p>Chúng tôi luôn lắng nghe ý kiến của bạn</p>
                    <p>Luông lắng nghe đóng góp để cùng phát triển</p> --}}
                    <ul>
                        @foreach ($all_specialized as $item)
                        <li><a href="{{route('dao-tao-chi-tiet', [$faculty['slug'],$item->slug])}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="footer-list-29 footer-4">
                    <ul>
                        <h6 class="footer-title-29">Liên Kết Khác</h6>
                        @foreach ($footer_faculty as $item)
                        <li><a href="{{ checkURL($item['link']) }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="d-grid grid-col-2 bottom-copies">
                <p class="copy-footer-29">{{ $license }}
                    {{ $license_content }}
                </p>
            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction() " id="movetop" title="Go to top">
        <span class="fa fa-angle-up "></span>
    </button>
