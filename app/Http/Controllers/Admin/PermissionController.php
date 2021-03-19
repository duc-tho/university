<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($khoa)
    {
        $modules = config('permission.module');
        $default_permission = config('permission.default_module_permission');

        return view('server.pages.permission.create', [
            'modules' => $modules,
            'default_permission' => $default_permission,
            'khoa' => $khoa
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $khoa)
    {
        $module = explode('-', $request->input('module'));

        $module_name = $module[0];
        $module_display_name = $module[1];

        $module_permissions = $request->input('module_permission');

        if (!$module_permissions) return redirect()->route('admin.permission.create', [$khoa['slug']]);

        $permission = Permission::where(['name' => $module_name])->first();

        if (!$permission) {
            $permission = Permission::create([
                'name' => $module_name,
                'display_name' => $module_display_name,
                'parent_id' => 0
            ]);

            foreach ($module_permissions as $perm) {
                $perm = explode('-', $perm);
                $perm_name = $perm[0];
                $perm_display_name = $perm[1];

                Permission::create([
                    'name' => $permission['name'] . '_' . $perm_name,
                    'display_name' =>  $perm_display_name . ' ' . strtolower($permission['display_name']),
                    'parent_id' => $permission['id']
                ]);
            }

            return 'tạo thành công';
        } else {
            $permission_childs = $permission->childrens;

            foreach ($module_permissions as $perm) {
                $perm = explode('-', $perm);
                $perm_name = $perm[0];
                $perm_display_name = $perm[1];

                if (!$permission_childs->contains('name', $permission['name'] . '_' . $perm_name)) {
                    Permission::create([
                        'name' => $permission['name'] . '_' . $perm_name,
                        'display_name' =>  $perm_display_name . ' ' . strtolower($permission['display_name']),
                        'parent_id' => $permission['id']
                    ]);
                }
            }

            return 'thêm thành công';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
