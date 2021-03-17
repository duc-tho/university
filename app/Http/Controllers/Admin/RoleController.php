<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Role\CreateRole;
use App\Http\Requests\Admin\Role\UpdateRole;
use App\Models\Permission;
use App\Models\Roles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $item_per_page = 16;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $roles = Roles::paginate($item_per_page);

        return view('server.pages.role.index', [
            'khoa' => $khoa,
            'roles' => $roles
        ]);
    }

    public function create(Request $request, $khoa)
    {
        $permissions = Permission::where(['parent_id' => 0])->get();

        return view('server.pages.role.create', [
            'permissions' => $permissions,
            'khoa' => $khoa
        ]);
    }

    public function store(CreateRole $request, $khoa)
    {
        $roles = new Roles($request->input());

        $roles->save();

        $roles->permissions()->attach($request->input('permission'));

        return redirect()->route('admin.role.show', [$khoa['slug']]);
    }

    public function edit(Request $request, $khoa, $id)
    {
        // Tìm role
        $role = Roles::find($id);

        // Ngưng nếu ko tìm thấy role
        abort_if(!$role, 404);

        // lấy danh sách role của role
        $role['permission_list'] = $role->permissions->pluck('id')->toArray();

        // Lấy tất cả role
        $permissions = Permission::where(['parent_id' => 0])->get();

        return view('server.pages.role.edit', [
            'khoa' => $khoa,
            'role' => $role->toArray(),
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

        if ($request->has('permission')) {
            // Gỡ toàn bộ role của role ra
            $role->permissions()->detach();

            // Gắn lại roles cho role
            $role->permissions()->attach($request['permission']);
        }

        // Cập nhật lại thông tin role
        $role->update($request->input());

        // chuyển hướng về trang role list
        return redirect()->route('admin.role.edit', [$khoa['slug'], $id]);
    }

    public function delete(Request $request, $khoa, $id)
    {
        // Tìm role
        $role = Roles::find($id);

        // dừng nếu role không tồn tại
        abort_if(!$role, 404);

        // Gỡ toàn bộ role của role ra
        $role->permissions()->detach();

        // xóa role
        Roles::destroy($id);

        // chuyển hướng về trang role list
        return redirect()->route('admin.role.show', [$khoa['slug']]);
    }
}
