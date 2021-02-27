<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'faculty_id' => '2',
                'nickname' => 'Admin',
                'first_name' => 'admin',
                'last_name' => 'Admin',
                'phone' => '0327556254',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123'),
                'status' => '1',
            ]
            ];
            DB::table('users')->insert($data);
    }
}
