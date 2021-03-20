<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $item_per_page = 6;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [
            'isSystemAccount' => 0,
            ['id', '!=', Auth::user()['id']]
        ];

        if (!Auth::user()['isAdmin']) $query_condition['faculty_id'] = $khoa['id'];

        $users = User::where($query_condition)->paginate($item_per_page);

        $auth_users_role_level = Auth::user()->roles->max('level');

        foreach ($users as $key => $user) {
            if ($user->roles->max('level') == null) continue;

            if ($user->roles->max('level') < $auth_users_role_level) $users->forget($key);
            else {
                $user['faculty'] = $user->faculty;
                $user['roles'] = $user->roles;
            }
        }

        return view('server.pages.user.index', [
            'users' => $users,
            'khoa' => $khoa
        ]);
    }

    public function create(Request $request, $khoa)
    {
        $faculty_list = Faculty::all();
        $max_user_level = Auth::user()->roles->max('level');

        $roles = Roles::where([['level', '>',  $max_user_level]])->get();

        return view('server.pages.user.create', [
            'khoa' => $khoa,
            'faculty_list' => $faculty_list,
            'roles' => $roles
        ]);
    }

    public function store(AddUserRequest $request, $khoa)
    {
        // Tạo mới user
        $user = new User($request->input());


        // dừng lại nếu tạo user có khoa khác với khoa của user đang login trừ admin
        if ($user->roles->max('level') != null) abort_if(!Auth::user()['isAdmin'] && $user['faculty_id'] != Auth::user()['faculty_id'], 403);

        // Luu y: chuyen vao policy khu lam toi chuc nang nay
        // dừng lại nếu user muốn tạo có quyền cao hơn hoặc bằng mình
        if(count($user->roles) != 0) abort_if(Auth::user()->roles->max('level') >= $user->roles->max('level'), 403);

        // Mã hóa password
        $user->password = bcrypt($request->password);

        // chuyển status sang dạng 1, 0
        $request['status'] == "on" ? $user['status'] = 1 : $user['status'] = 0;


        // chuyển isAdmin sang dạng 1, 0
        $request['isAdmin'] == "on" ? $user['isAdmin'] = 1 : $user['isAdmin'] = 0;

        // upload ảnh đại diện
        if ($request->file('avatar') != null) $user['avatar'] = upload_file($request->file('avatar'), 'dist/upload/image/3/users');

        // lưu user
        $user->save();

        // gắn role cho user
        $user->roles()->attach($request['role']);

        // chuyển hướng về trang user list
        return redirect()->route('admin.user.show', [$khoa['slug']]);
    }

    public function edit(Request $request, $khoa, $id)
    {
        // Tìm users
        $user = User::find($id);

        // Ngưng nếu ko tìm thấy user
        abort_if(!$user, 404);

        // dừng lại nếu cập nhật user có khoa khác với khoa của user đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $user['faculty_id'] != Auth::user()['faculty_id'], 403);

        // Luu y: chuyen vao policy khu lam toi chuc nang nay
        // dừng lại nếu user muốn chỉnh sửa có quyền cao hơn hoặc bằng mình trừ chính mình
        if ($user->roles->max('level') != null) abort_if(Auth::user()->roles->max('level') >= $user->roles->max('level') && Auth::user()['id'] != $user['id'], 403);

        // lấy danh sách role của user
        $user['roles_list'] = $user->roles->pluck('id')->toArray();

        // Lấy tất cả các khoa
        $faculty_list = Faculty::all();

        // Lấy tất cả role level thấp hơn role của mình
        $max_user_level = Auth::user()->roles->max('level');

        if (!$max_user_level && Auth::user()['isSystemAccount']) $max_user_level = 0;

        $roles = Roles::where([['level', '>',  $max_user_level]])->get();

        // dd($roles);

        return view('server.pages.user.edit', [
            'khoa' => $khoa,
            'user' => $user->toArray(),
            'faculty_list' => $faculty_list,
            'roles' => $roles
        ]);
    }

    public function update(EditUserRequest $request, $khoa, $id)
    {
        // Tìm users
        $user = User::find($id);

        // dừng nếu user không tồn tại
        abort_if(!$user, 404);

        // dừng lại nếu xóa user có khoa khác với khoa của user đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $user['faculty_id'] != Auth::user()['faculty_id'], 403);

        // Luu y: chuyen vao policy khu lam toi chuc nang nay
        // dừng lại nếu user muốn chỉnh sửa có quyền cao hơn hoặc bằng mình trừ chính mình
        if ($user->roles->max('level') != null) abort_if(Auth::user()->roles->max('level') >= $user->roles->max('level') && Auth::user()['id'] != $user['id'], 403);

        // Mã hóa password
        if ($request->filled('password')) $request->merge(['password' => bcrypt($request['password'])]);
        else $request->offsetUnset('password');

        // chuyển status sang dạng 1, 0
        if ($request->filled('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);
        else $request->offsetUnset('status');

        // chuyển isAdmin sang dạng 1, 0
        if ($request->filled('isAdmin')) $request->merge(['isAdmin' => $request['isAdmin'] == "on" ? 1 : 0]);
        else $request->offsetUnset('isAdmin');

        // upload ảnh đại diện
        if ($request->file('avatar') != null) $request->merge(['avatar' => upload_file($request->file('avatar'), 'dist/upload/image/3/users')]);

        // Kiểm tra email đã tồn tại trong db hay chưa ngoại trừ user hiện tại!
        $request->validate([
            'email' => 'required|unique:users,email,' . $user->id
        ], [
            'email.unique' => 'Email đã tồn tại, vui lòng nhập một Email khác...',
            'email.required' => 'Chưa nhập email nè!',
        ]);

        if ($request->filled('role')) {
            // Gỡ toàn bộ role của user ra
            $user->roles()->detach();

            // Gắn lại roles cho user
            $user->roles()->attach($request['role']);
        }

        // Cập nhật lại thông tin user
        $user->update($request->input());

        // chuyển hướng về trang user list
        return redirect()->route('admin.user.show', [$khoa['slug']]);
    }

    public function delete($khoa, $id)
    {
        // Tìm users
        $user = User::find($id);

        // dừng nếu user không tồn tại
        abort_if(!$user, 404);

        // dừng lại nếu cập nhật user có khoa khác với khoa của user đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $user['faculty_id'] != Auth::user()['faculty_id'], 403);

        // Luu y: chuyen vao policy khu lam toi chuc nang nay
        // dừng lại nếu user muốn xóa có quyền cao hơn hoặc bằng mình trừ chính mình
        if ($user->roles->max('level') != null) abort_if(Auth::user()->roles->max('level') >= $user->roles->max('level') && Auth::user()['id'] != $user['id'], 403);

        // Gỡ toàn bộ role của user ra
        $user->roles()->detach();

        // xóa user
        User::destroy($id);

        // chuyển hướng về trang user list
        return redirect()->route('admin.user.show', [$khoa['slug']]);
    }
}
