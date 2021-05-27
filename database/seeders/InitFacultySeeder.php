<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class InitFacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homeFacultyData = [
            'name' => 'Trang Chủ',
            'slug' => 'trang-chu',
            'layout' => 'layout_home',
            'status' => 1
        ];

        $homeFaculty = new Faculty($homeFacultyData);
        $homeFaculty->save();
    }
}
