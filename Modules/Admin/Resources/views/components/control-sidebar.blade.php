<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <a href="{{ route('admin.user.edit', [\App\Models\Faculty::find(Auth::user()['faculty_id'])['slug'] ?? 'trang-chu', Auth::user()['id']]) }}" class="dropdown-item text-info">
            <i class="fas fa-user"></i>
            Sửa thông tin
        </a>
        <a href="{{asset('logout')}}" class="dropdown-item text-danger">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </a>
    </div>
</aside>
