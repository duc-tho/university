<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Roles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $item_per_page = 6;
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

    public function store(Request $request, $khoa)
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

    public function update(Request $request, $khoa)
    {
        //
    }

    public function delete(Request $request, $khoa)
    {
        //
    }
}
