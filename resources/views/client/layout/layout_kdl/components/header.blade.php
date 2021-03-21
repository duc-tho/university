<section class="w3l-top-menu-1">
    <div class="top-hd">
        <div class="container">
            <header class="row top-menu-top">
                <div class="accounts col-lg-8 col-lg-6">
                    {{-- <li class="top_li"><span class="fa fa-phone"></span><a href="tel:+142 5897555"> (028) 628 614 62</a>
                    </li>
                    <li class="top_li1"><span class="fa fa-envelope-o"></span> <a
                            href="mailto:education-mail@support.com" class="mail"> khoadulich@daihocdulich.edu.vn</a>
                    </li> --}}
                </div>
                <div class="social-top col-lg-4 col-6">
                    <a href="{{ route('tuyensinh') }}" class="btn btn-secondary btn-theme4">Đăng Ký </a>
                </div>
            </header>
        </div>
    </div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
    <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2 ">
        <div class="container">
            <!-- <a class="navbar-brand" href="index.html"></a>	<img src="images/logo.png" alt="Logo" style="width:40%; height: auto;"></a> -->

            <a class="navbar-brand" href="/">
                <img src="{{ asset($logo) }}" style="width: 55%;" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto" id="navwidth">
                    @foreach ($menu_parents as $menu_parent)
                    <li class="nav-item {{ count($menu_parent->childrens) > 0 ? 'dropdown' : '' }}">
                        <a class="nav-link {{ count($menu_parent->childrens) > 0 ? 'dropdown-toggle' : '' }}" href="{{ $menu_parent['url'] }}" data-toggle="dropdown" aria-expanded="false">{{ $menu_parent['name'] }}</a>
                        @if (count($menu_parent->childrens) > 0)
                        <div class="dropdown-menu">
                            @foreach ($menu_parent->childrens as $children)
                            <a class="dropdown-item" href="{{ $children['url'] }}">{{ $children['name'] }}</a>
                            @endforeach
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</section>
