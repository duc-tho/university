<?php

namespace App\Console\Commands;

use App\Models\Permission;
use Illuminate\Console\Command;

class GeneratePermisstionFromConfig extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate/Update Permission From Config Module File!';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $modules = config('permission.module');
        $module_permissions = config('permission.default_module_permission');
        $module_list = [];

        foreach ($modules as $module_name => $module) {
            $permission = Permission::where(['name' => $module_name])->first();

            // Lưu lại các quyền có trong db
            array_push($module_list, $module_name);

            if (!$permission) { // nếu quyền này chưa có trong db
                $permission = Permission::create([
                    'name' => $module_name,
                    'display_name' => $module['display_name'],
                    'parent_id' => 0
                ]);

                foreach ($module_permissions as $perm) {
                    $perm_name = $perm['name'];
                    $perm_display_name = $perm['display_name'];

                    // Tạo các hành động xem, thêm,xóa,... của quyền này
                    Permission::create([
                        'name' => $permission['name'] . '_' . $perm_name,
                        'display_name' =>  $perm_display_name . ' ' . mb_strtolower($permission['display_name']),
                        'parent_id' => $permission['id']
                    ]);
                }
            } else { // nếu quyền này dã có trong db
                $permission_actions = $permission->childrens; // Lấy các hành động xem, thêm,xóa,... của quyền này

                foreach ($module_permissions as $perm) {
                    $perm_name = $perm['name'];
                    $perm_display_name = $perm['display_name'];

                    // Nếu hành động chưa có trong db thì tạo
                    if (!$permission_actions->contains('name', $permission['name'] . '_' . $perm_name)) {
                        Permission::create([
                            'name' => $permission['name'] . '_' . $perm_name,
                            'display_name' =>  $perm_display_name . ' ' . mb_strtolower($permission['display_name']),
                            'parent_id' => $permission['id']
                        ]);
                    }
                }
            }
        }

        $needDeletePermission = Permission::where('parent_id', 0)->whereNotIn('name', $module_list)->get();

        foreach ($needDeletePermission as $permission) {
            $permission_actions = $permission->childrens; // Lấy các hành động xem, thêm,xóa,... của quyền này

            // xóa các action của permission này
            foreach ($permission_actions as $action) {
                Permission::destroy($action->id);
            }

            // xóa permission này
            Permission::destroy($permission->id);
        }

        $this->info('Tạo/Cập nhật quyền thành công!');
    }
}
