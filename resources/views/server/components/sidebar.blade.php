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
                <li class="nav-item {{ request()->is('admin/demo*') ? 'menu-open' : '' }}">
                    <a href="javascript:" class="nav-link {{ request()->is('admin/demo*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dữ Liệu Quản Lí
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('faculty_list', FacultyPolicy::class)
                        <li class="nav-item">
                            <a href="{{ route('admin.faculty.show', [$khoa['slug']]) }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Khoa</p>
                            </a>
                        </li>
                        @endcan
                        <li class="nav-item">
                            <a href="{{ route('admin.teacher.show', [$khoa['slug']]) }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Giáo Viên</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.student.show', [$khoa['slug']]) }}" class="nav-link {{ request()->is('admin/demo/demo-2*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sinh Viên Tiêu Biểu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category.show', [$khoa['slug']]) }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Mục</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.news.show', [$khoa['slug']]) }}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tin Tức - Thông Báo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.slide.show', [$khoa['slug']]) }}" class="nav-link {{ request()->is('admin/demo/demo-2*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slide</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.specialized.show', [$khoa['slug']]) }}" class="nav-link {{ request()->is('admin/demo/demo-2*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Các Ngành Đào Tạo</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.user.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Quản Trị Người Dùng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.role.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Quản Trị Vai Trò
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.permission.create', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Tạo Quyền
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.setting.show', [$khoa['slug']])}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Cài đặt thông tin khoa
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
