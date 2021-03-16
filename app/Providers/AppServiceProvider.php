<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Image;
use App\Models\ImageCategory;
use App\Models\Specialized;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();

        $data['images'] = Image::all();
        view()->share($data);
        $data['image_category'] = ImageCategory::all();
        view()->share($data);
    }
}
