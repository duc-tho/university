<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class InitUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            'faculty_id' => '0',
            'nickname' => 'Super Admin',
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'admin@domain.ad',
            'phone' => '0123456789',
            'isAdmin' => true,
            'password' => bcrypt('123123123'),
            'status' => '1',
            'isSystemAccount' => true
        ];

        $user = new User($userData);
        $user->save();
    }
}
