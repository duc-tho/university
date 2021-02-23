<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Upload file function
         * @param mixed $file
         * @param string $save_path
         * @return string $public_path_of_upload_file
         */
        function upload_file($file, $save_path)
        {
            return $file->store($save_path, ['disk' => 'public_file']);
        }
    }
}
