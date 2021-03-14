<section class="w3l-footer-29-main">
    <div class="footer-29">
        <div class="container">
            <div class="d-grid grid-col-4 footer-top-29">
                <div class="footer-list-29 footer-1">
                    <h6 class="footer-title-29">Liên Hệ</h6>
                    <ul>
                        <li>
                            <p><span class="fa fa-map-marker"></span>
                            {{$footer_address_travel}}
                            </p>
                        </li>
                        <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span>{{$footer_phone_travel}}</a></li>
                        <li><a href="mailto:corporate-mail@support.com" class="mail"><span
                                    class="fa fa-envelope-open-o"></span>
                                    {{$footer_email_travel}}</a></li>
                        <li><a href="mailto:corporate-mail@support.com" class="mail"><span
                                    class="fa fa-envelope-open-o"></span>
                                    {{$footer_website_travel}}</a></li>
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
                            <a href="#facebook" ><span class="fa fa-{{$item->fa_icon}}"></span></a>
                        @endforeach
                    </div>
                </div>
                <div class="footer-list-29 footer-2">
                    <ul>
                        <h6 class="footer-title-29">Đường Dẫn</h6>
                        <li><a href="#">Tin Tức</a></li>
                        <li><a href="#">Giới Thiệu</a></li>
                        <li><a href="#">Thông Báo</a></li>
                        <li><a href="#">Thông Tin Khoa  </a></li>
                        {{-- <li><a href="####">Khác</a></li> --}}
                    </ul>
                </div>
                <div class="footer-list-29 footer-3">

                    <h6 class="footer-title-29">Gửi yêu cầu </h6>
                    <form action="#" class="subscribe" method="post">
                        <input type="email" name="email" placeholder="Email" required="">

                        <button><span class="fa fa-envelope-o"></span></button>

                    </form>
                    <p>Chúng tôi luôn lắng nghe ý kiến của bạn</p>
                    <p>Luông lắng nghe đóng góp để cùng phát triển</p>

                </div>
                <div class="footer-list-29 footer-4">
                    <ul>
                        <h6 class="footer-title-29">Liên Kết Khác</h6>
                        @foreach ($footer_faculty as $item)
                            <li><a href="#">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="d-grid grid-col-2 bottom-copies">
                <p class="copy-footer-29">Bản quyền © 2017
                    <a href="https://w3layouts.com"> BAN QUẢN LÝ ĐỀ ÁN THÀNH LẬP TRƯỜNG ĐẠI HỌC DU LỊCH SÀI GÒN</a>
                </p>
                <!-- <ul class="list-btm-29">
            <li><a href="#link">Privacy policy</a></li>
            <li><a href="#link">Terms of service</a></li>
                    </ul> -->
            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction() " id="movetop" title="Go to top">
        <span class="fa fa-angle-up "></span>
    </button>
