<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class InitRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SuperAdminRoleData = [
            'level' => 0,
            'name' => 'SuperAdmin',
            'display_name' => 'Siêu quản trị hệ thống'
        ];

        $AdminRoleData = [
            'level' => 1,
            'name' => 'Admin',
            'display_name' => 'Quản trị hệ thống'
        ];

        $SuperAdminRole = new Roles($SuperAdminRoleData);
        $SuperAdminRole->save();

        $AdminRole = new Roles($AdminRoleData);
        $AdminRole->save();
    }
}
