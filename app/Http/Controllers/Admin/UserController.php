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
        if ($request->hasFile('avatar')) $user['avatar'] = upload_file($request->file('avatar'), 'dist/upload/image/3/users');

        // lưu user
        $user->save();

        // gắn role cho user
        $user->roles()->attach($request['role']);

        // chuyển hướng về trang user list
        return redirect()->route('admin.user.show', [$khoa['slug']]);
    }

    public function edit($id)
    {
        $data['user'] = User::find($id);
        $data['list_faculty'] = Faculty::all();
        return view('server.pages.user.edit_user', $data);
    }

    public function update(EditUserRequest $request, $id)
    {
        $user = new User();
        $arr['nickname'] = $request->nickname;
        $arr['faculty_id'] = $request->faculty_id;
        $arr['first_name'] = $request->first_name;
        $arr['last_name'] = $request->last_name;
        $arr['birthday'] = $request->birthday;
        $arr['phone'] = $request->phone;
        $arr['status'] = $request->status;
        $arr['email'] = $request->email;
        $arr['password'] = bcrypt($request->password);
        $user::where('id', $id)->update($arr);
        return redirect('admin/user');
    }

    public function delete($id)
    {
        User::destroy($id);
        return back();
    }
}
