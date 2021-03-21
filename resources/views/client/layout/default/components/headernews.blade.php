<header class="header">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-toggleable-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                <ul class="navbar-nav">
                    @foreach ($menu_parents as $menu_parent)
                    <li class="nav-item {{ count($menu_parent->childrens) > 0 ? 'dropdown has-submenu' : '' }}">
                        <a class="nav-link color-pink-hover {{ count($menu_parent->childrens) > 0 ? 'dropdown-toggle' : '' }}" href="{{ $menu_parent['url'] }}">{{ $menu_parent['name'] }}</a>

                        @if (count($menu_parent->childrens) > 0)
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            @foreach ($menu_parent->childrens as $children)
                            <a class="dropdown-item" href="{{ $menu_parent['url'] }}">
                                {{ $children['name'] }}
                            </a>
                            @endforeach
                        </ul>
                        @endif

                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div><!-- end container -->
</header><!-- end header -->
