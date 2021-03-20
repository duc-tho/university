<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index', [$khoa['slug']])}}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Quản trị Website</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->nickname}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.index', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Trang Chủ
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
                @can('setting_list', SettingsPolicy::class)
                @if(Auth::user()['isAdmin'])
                <li class="nav-item">
                    <a href="{{route('admin.setting.show', [$khoa['slug'], 'general' => "true"])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Cài đặt chung
                        </p>
                    </a>
                </li>
                @endif
                @endcan
                @if (Auth::user()['isAdmin'])
                <li class="nav-item {{ request()->is('admin/demo*') ? 'menu-open' : '' }}">
                    <a href="javascript:" class="nav-link {{ request()->is('admin/demo*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Khoa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach (app('request')['faculty_list'] as $item)
                        <li class="nav-item">
                            <a href="{{ route('admin.index', [$item['slug']]) }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="fas fa-arrow-circle-right nav-icon"></i>
                                <p>{{ $item['name'] }}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endif
                <li class="nav-item {{ request()->is('admin/demo*') ? 'menu-open' : '' }}">
                    <a href="javascript:" class="nav-link {{ request()->is('admin/demo*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Nội Dung
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('news_list', NewsPolicy::class)
                        <li class="nav-item">
                            <a href="{{ route('admin.news.show', [$khoa['slug']]) }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="far fa-file-alt nav-icon"></i>
                                <p>Tin Tức - Thông Báo</p>
                            </a>
                        </li>
                        @endcan
                        @can('image_list', ImagePolicy::class)
                        <li class="nav-item">
                            <a href="{{route('admin.image.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="nav-icon far fa-file-alt"></i>
                                <p>
                                    Hình Ảnh
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('video_list', VideoPolicy::class)
                        <li class="nav-item">
                            <a href="{{route('admin.video.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="nav-icon far fa-file-alt"></i>
                                <p>
                                    Video
                                </p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('admin/demo*') ? 'menu-open' : '' }}">
                    <a href="javascript:" class="nav-link {{ request()->is('admin/demo*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Cài đặt & thiết lập
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('setting_list', SettingsPolicy::class)
                        <li class="nav-item">
                            <a href="{{route('admin.setting.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Cài đặt
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('faculty_list', FacultyPolicy::class)
                        <li class="nav-item">
                            <a href="{{ route('admin.faculty.show', [$khoa['slug']]) }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thông Tin Khoa</p>
                            </a>
                        </li>
                        @endcan
                        @can('specialized_list', SpecializedPolicy::class)
                        <li class="nav-item">
                            <a href="{{ route('admin.specialized.show', [$khoa['slug']]) }}" class="nav-link {{ request()->is('admin/demo/demo-2*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Các Ngành Đào Tạo</p>
                            </a>
                        </li>
                        @endcan
                        @can('category_list', CategoryPolicy::class)
                        <li class="nav-item">
                            <a href="{{ route('admin.menu.show', [$khoa['slug']]) }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu</p>
                            </a>
                        </li>
                        @endcan
                        @can('category_list', CategoryPolicy::class)
                        <li class="nav-item">
                            <a href="{{ route('admin.category.show', [$khoa['slug']]) }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Chuyên Mục</p>
                            </a>
                        </li>
                        @endcan
                        @can('slide_list', SlidePolicy::class)
                        <li class="nav-item">
                            <a href="{{ route('admin.slide.show', [$khoa['slug']]) }}" class="nav-link {{ request()->is('admin/demo/demo-2*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slide</p>
                            </a>
                        </li>
                        @endcan
                        @can('teacher_list', TeacherPolicy::class)
                        <li class="nav-item">
                            <a href="{{ route('admin.teacher.show', [$khoa['slug']]) }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Giáo Viên</p>
                            </a>
                        </li>
                        @endcan
                        @can('student_list', TeacherPolicy::class)
                        <li class="nav-item">
                            <a href="{{ route('admin.student.show', [$khoa['slug']]) }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sinh viên</p>
                            </a>
                        </li>
                        @endcan
                        @can('statistic_list', StatisticsPolicy::class)
                        <li class="nav-item">
                            <a href="{{route('admin.statistic.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Số Liệu
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('about_list', AboutPolicy::class)
                        <li class="nav-item">
                            <a href="{{route('admin.about.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Giới Thiệu
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('contact_list', ContactPolicy::class)
                        <li class="nav-item">
                            <a href="{{route('admin.contact.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Liên hệ
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('collab_list', CollabPolicy::class)
                        <li class="nav-item">
                            <a href="{{route('admin.collab.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>
                                    Logo Hợp Tác
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('contact_list', Contact::class)
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.show', [$khoa['slug']]) }}" class="nav-link {{ request()->is('admin/demo/demo-2*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thông Tin Liên Hệ</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                <li class="nav-item {{ request()->is('admin/demo*') ? 'menu-open' : '' }}">
                    <a href="javascript:" class="nav-link {{ request()->is('admin/demo*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Quyền & Người dùng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('user_list', UserPolicy::class)
                        <li class="nav-item">
                            <a href="{{route('admin.user.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Quản Trị Người Dùng
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('role_list', RolePolicy::class)
                        <li class="nav-item">
                            <a href="{{route('admin.role.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Quản Trị Vai Trò
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('permission_create', PermissionPolicy::class)
                        <li class="nav-item">
                            <a href="{{route('admin.permission.create', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Tạo Quyền
                                </p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
