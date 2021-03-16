<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'admin',
                'display_name' => 'Quản trị hệ thống'
            ],
            [
                'name' => 'kami',
                'display_name' => 'Quản trị tối cao'
            ],
            [
                'name' => 'dean',
                'display_name' => 'Trưởng khoa'
            ],
            [
                'name' => 'content',
                'display_name' => 'Chỉnh sửa nội dung'
            ],
        ]);
    }
}
