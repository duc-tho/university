<!--====== FOOTER PART START ======-->

<footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-about mt-40">
                        <div class="logo">
                            <a href="/"><img src="{{ asset($logo) }}" alt="Logo" width="50%"></a>
                        </div>
                        <p>{{ $title_name_uni_footer }}</p>
                        <ul class="mt-20">
                            @foreach ($socials_icon as $item)
                                <li><a href="{{$item->link}}"><i class="fa fa-{{ $item->fa_icon }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="footer-link mt-40">
                        <div class="footer-title pb-25">
                            <h6>{{$menu_item}}</h6>
                        </div>
                        <ul>
                            @foreach ($menu_list as $menu)
                            @if ($menu->parent_id==0)
                            <li><a href="{{$menu->url}}"><i class="fa fa-angle-right"></i>{{$menu->name}}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="footer-link mt-40">
                        <div class="footer-title pb-25">
                            <h6>{{$link_faculty}}</h6>
                        </div>
                        <ul>
                            @foreach ($all_faculty as $item)
                            <li><a href="{{ route('trang-chu', [$item['slug']]) }}"><i class="fa fa-angle-right">
                                </i>{{ $item['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-address mt-40">
                        <div class="footer-title pb-25">
                            <h6>{{$about_contact}}</h6>
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
</footer>

<!--====== FOOTER PART ENDS ======-->
