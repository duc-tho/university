<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Admin\Http\Requests\Admin\Role\CreateRole;
use Modules\Admin\Http\Requests\Admin\Role\UpdateRole;
use App\Models\Permission;
use App\Models\Roles;
use App\Models\RoleUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $item_per_page = 16;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $roles_query_conditions = [];

        if (!Auth::user()->roles->contains('level', 0)) $roles_query_conditions = [['level', '>', 0]];

        $roles = Roles::where($roles_query_conditions)->paginate($item_per_page);

        return view('server.pages.role.index', [
            'khoa' => $khoa,
            'roles' => $roles
        ]);
    }

    public function create(Request $request, $khoa)
    {
        $permissions = Permission::where(['parent_id' => 0])->get();

        $roles = Roles::where([['level', '>', 0]])->get();

        return view('server.pages.role.create', [
            'permissions' => $permissions,
            'khoa' => $khoa,
            'roles' => $roles
        ]);
    }

    public function store(CreateRole $request, $khoa)
    {
        $role = new Roles($request->input());

        $role['level'] = $role['level'] + 1;

        $role->save();

        $role->permissions()->attach($request->input('permission'));

        return redirect()->route('admin.role.show', [$khoa['slug']]);
    }

    public function edit(Request $request, $khoa, $id)
    {
        // Tìm role
        $role = Roles::find($id);

        // Ngưng nếu ko tìm thấy role
        abort_if(!$role, 404);

        // lấy danh sách quyền của role
        $role['permission_list'] = $role->permissions->pluck('id')->toArray();

        // Lấy tất cả quyền
        $permissions = Permission::where(['parent_id' => 0])->get();

        // lấy tất cả role
        $roles = Roles::where([['level', '>', 0], ['id', '!=', $role['id']]])->get();

        return view('server.pages.role.edit', [
            'khoa' => $khoa,
            'role' => $role->toArray(),
            'roles_list' => $roles,
            'permissions' => $permissions
        ]);
    }

    public function update(UpdateRole $request, $khoa, $id)
    {
        // Tìm role
        $role = Roles::find($id);

        // dừng nếu role không tồn tại
        abort_if(!$role, 404);

        // Kiểm tra name đã tồn tại trong db hay chưa ngoại trừ name của role hiện tại!
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id,
            'display_name' => 'required|unique:roles,display_name,' . $role->id
        ], [
            'name.unique' => 'Tên vai trò đã tồn tại!',
            'name.required' => 'Chưa nhập tên vai trò nè!',
            //
            'display_name.unique' => 'Tên hiển thị của vai trò đã tồn tại!',
            'display_name.required' => 'Chưa nhập tên hiển thị của vai trò nè!',
        ]);;

        if ($request->filled('permission')) {
            // Gỡ toàn bộ role của role ra
            $role->permissions()->detach();

            // Gắn lại roles cho role
            $role->permissions()->attach($request['permission']);
        }

        if ($request->filled('level')) $request->merge(['level' => $request['level'] + 1]);
        else $request->offsetUnset('level');

        // Cập nhật lại thông tin role
        $role->update($request->input());

        // chuyển hướng về trang role list
        return redirect()->route('admin.role.show', [$khoa['slug'], $id]);
    }

    public function delete(Request $request, $khoa, $id)
    {
        // Tìm role
        $role = Roles::find($id);

        // dừng nếu role không tồn tại
        abort_if(!$role, 404);

        // Gỡ toàn bộ role của role ra
        $role->permissions()->detach();

        // xóa vai trò ở các user đang giữ vai trò này
        $role_users = RoleUser::where('role_id', $role['id'])->get();

        foreach ($role_users as $role_user) {
            RoleUser::destroy($role_user['id']);
        }

        // xóa role
        Roles::destroy($id);

        // chuyển hướng về trang role list
        return redirect()->route('admin.role.show', [$khoa['slug']]);
    }
}
