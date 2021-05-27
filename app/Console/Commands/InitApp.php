<?php

namespace App\Console\Commands;

use App\Models\Permission;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InitApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generater Default Data For App';

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
        $this->info('Tạo Dữ Liệu Mặc Định Cho Hệ Thống!');
        $this->warn('<!> Chỉ chạy lệnh này lần đầu khi cài app');
        $this->warn('<!> Hãy chắc rằng bạn đã chạy migrate để khởi tạo Database!');



        if ($this->confirm('Bạn có muốn tiếp tục ?')) {

            // Kiểm tra xem có đủ điều kiện để chạy lênh không?
            $superAdminRole = Roles::where(['level' => 0, 'name' => 'SuperAdmin'])->first();

            $superAdminAccount = User::where(['isSystemAccount' => true, 'nickname' => 'Super Admin'])->first();

            if ($superAdminRole || $superAdminAccount) return $this->alert('Account OR Role SuperAdmin has detected, can\'t run this command!');



            // Tạo super admin
            Artisan::call("db:seed --class=InitUserSeeder");

            $this->info('Init Admin Account Success!');



            // Tạo role super admin và admin
            Artisan::call("db:seed --class=InitRoleSeeder");

            $this->info('Init SuperAdmin and Admin Role Success!');



            // Tạo HomeFaculty
            Artisan::call("db:seed --class=InitFacultySeeder");

            $this->info('Init Faculty Success!');



            // Tạo permission dựa vào module config
            Artisan::call("permission:generate");

            $this->info('Init Permission Success!');



            // Gán permission cho role
            $superAdminRole = Roles::where(['level' => 0, 'name' => 'SuperAdmin'])->first();

            $permissions = Permission::where([['parent_id', '!=', 0]])->get();

            $superAdminRole->permissions()->attach($permissions);

            $this->info('Attach Permission to SuperAdmin Role Success!');



            // Gán role cho super admin
            $superAdminAccount = User::where(['isSystemAccount' => 1, 'nickname' => 'Super Admin'])->first();

            $superAdminAccount->roles()->attach($superAdminRole);

            $this->info('Attach SuperAdmin Role to SuperAdmin Account Success!');



            return 0;
        }
    }
}
