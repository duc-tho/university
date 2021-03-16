<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\Roles;
use App\Models\User;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $item_per_page = 6;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $users = User::paginate($item_per_page);

        foreach ($users as $user) {
            $user['faculty'] = $user->faculty;
            $user['roles'] = $user->roles;
        }

        return view('server.pages.user.index', [
            'users' => $users,
            'khoa' => $khoa
        ]);
    }

    public function create(Request $request, $khoa)
    {
        $faculty_list = Faculty::all();
        $roles = Roles::all();

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

        // Mã hóa password
        $user->password = bcrypt($request->password);

        // chuyển status sang dạng 1, 0
        $request['status'] == "on" ? $user['status'] = 1 : $user['status'] = 0;

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

        // lấy danh sách role của user
        $user['roles_list'] = $user->roles->pluck('id')->toArray();

        // Lấy tất cả các khoa
        $faculty_list = Faculty::all();

        // Lấy tất cả role
        $roles = Roles::all();

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

        // Mã hóa password
        if ($request->has('password')) $request->merge(['password' => bcrypt($request->password)]);

        // chuyển status sang dạng 1, 0
        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        // upload ảnh đại diện
        if ($request->file('avatar') != null) $request->merge(['avatar' => upload_file($request->file('avatar'), 'dist/upload/image/3/users')]);

        // Kiểm tra email đã tồn tại trong db hay chưa ngoại trừ user hiện tại!
        $request->validate(['email' => 'required|email|unique:users,email,' . $user->id]);

        if ($request->has('role')) {
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

        // Gỡ toàn bộ role của user ra
        $user->roles()->detach();

        // xóa user
        User::destroy($id);

        // chuyển hướng về trang user list
        return redirect()->route('admin.user.show', [$khoa['slug']]);
    }
}
