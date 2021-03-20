<?php

namespace App\Providers;

use App\Policies\Admin\AboutPolicy;
use App\Policies\Admin\CategoryPolicy;
use App\Policies\Admin\CollabPolicy;
use App\Policies\Admin\ContactPolicy;
use App\Policies\Admin\FacultyPolicy;
use App\Policies\Admin\ImagePolicy;
use App\Policies\Admin\NewsPolicy;
use App\Policies\Admin\PermissionPolicy;
use App\Policies\Admin\RolePolicy;
use App\Policies\Admin\SlidePolicy;
use App\Policies\Admin\SpecializedPolicy;
use App\Policies\Admin\StatisticsPolicy;
use App\Policies\Admin\StudentPolicy;
use App\Policies\Admin\TeacherPolicy;
use App\Policies\Admin\UserPolicy;
use App\Policies\Admin\VideoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // faculty
        Gate::define('faculty_list', [FacultyPolicy::class, 'view']);
        Gate::define('faculty_create', [FacultyPolicy::class, 'create']);
        Gate::define('faculty_edit', [FacultyPolicy::class, 'edit']);
        Gate::define('faculty_delete', [FacultyPolicy::class, 'delete']);

        // slide
        Gate::define('slide_list', [SlidePolicy::class, 'view']);
        Gate::define('slide_create', [SlidePolicy::class, 'create']);
        Gate::define('slide_edit', [SlidePolicy::class, 'edit']);
        Gate::define('slide_delete', [SlidePolicy::class, 'delete']);

        // student
        Gate::define('student_list', [StudentPolicy::class, 'view']);
        Gate::define('student_create', [StudentPolicy::class, 'create']);
        Gate::define('student_edit', [StudentPolicy::class, 'edit']);
        Gate::define('student_delete', [StudentPolicy::class, 'delete']);

        // teacher
        Gate::define('teacher_list', [TeacherPolicy::class, 'view']);
        Gate::define('teacher_create', [TeacherPolicy::class, 'create']);
        Gate::define('teacher_edit', [TeacherPolicy::class, 'edit']);
        Gate::define('teacher_delete', [TeacherPolicy::class, 'delete']);

        // user
        Gate::define('user_list', [UserPolicy::class, 'view']);
        Gate::define('user_create', [UserPolicy::class, 'create']);
        Gate::define('user_edit', [UserPolicy::class, 'edit']);
        Gate::define('user_delete', [UserPolicy::class, 'delete']);

        // menu
        // Gate::define('menu_list', [FacultyPolicy::class, 'view']);
        // Gate::define('menu_create', [FacultyPolicy::class, 'create']);
        // Gate::define('menu_edit', [FacultyPolicy::class, 'edit']);
        // Gate::define('menu_delete', [FacultyPolicy::class, 'delete']);

        // news
        Gate::define('news_list', [NewsPolicy::class, 'view']);
        Gate::define('news_create', [NewsPolicy::class, 'create']);
        Gate::define('news_edit', [NewsPolicy::class, 'edit']);
        Gate::define('news_delete', [NewsPolicy::class, 'delete']);

        // about
        Gate::define('about_list', [AboutPolicy::class, 'view']);
        Gate::define('about_create', [AboutPolicy::class, 'create']);
        Gate::define('about_edit', [AboutPolicy::class, 'edit']);
        Gate::define('about_delete', [AboutPolicy::class, 'delete']);

        // category
        Gate::define('category_list', [CategoryPolicy::class, 'view']);
        Gate::define('category_create', [CategoryPolicy::class, 'create']);
        Gate::define('category_edit', [CategoryPolicy::class, 'edit']);
        Gate::define('category_delete', [CategoryPolicy::class, 'delete']);

        // collab
        Gate::define('collab_list', [CollabPolicy::class, 'view']);
        Gate::define('collab_create', [CollabPolicy::class, 'create']);
        Gate::define('collab_edit', [CollabPolicy::class, 'edit']);
        Gate::define('collab_delete', [CollabPolicy::class, 'delete']);

        // contact
        Gate::define('contact_list', [ContactPolicy::class, 'view']);
        Gate::define('contact_edit', [ContactPolicy::class, 'edit']);

        // image
        Gate::define('image_list', [ImagePolicy::class, 'view']);
        Gate::define('image_create', [ImagePolicy::class, 'create']);
        Gate::define('image_edit', [ImagePolicy::class, 'edit']);
        Gate::define('image_delete', [ImagePolicy::class, 'delete']);

        // permission
        Gate::define('permission_create', [PermissionPolicy::class, 'create']);

        // role
        Gate::define('role_list', [RolePolicy::class, 'view']);
        Gate::define('role_create', [RolePolicy::class, 'create']);
        Gate::define('role_edit', [RolePolicy::class, 'edit']);
        Gate::define('role_delete', [RolePolicy::class, 'delete']);

        // setting
        Gate::define('setting_list', [FacultyPolicy::class, 'view']);
        Gate::define('setting_edit', [FacultyPolicy::class, 'edit']);

        // specialized
        Gate::define('specialized_list', [SpecializedPolicy::class, 'view']);
        Gate::define('specialized_create', [SpecializedPolicy::class, 'create']);
        Gate::define('specialized_edit', [SpecializedPolicy::class, 'edit']);
        Gate::define('specialized_delete', [SpecializedPolicy::class, 'delete']);

        // statistic
        Gate::define('statistic_list', [StatisticsPolicy::class, 'view']);
        Gate::define('statistic_create', [StatisticsPolicy::class, 'create']);
        Gate::define('statistic_edit', [StatisticsPolicy::class, 'edit']);
        Gate::define('statistic_delete', [StatisticsPolicy::class, 'delete']);

        // video
        Gate::define('video_list', [VideoPolicy::class, 'view']);
        Gate::define('video_create', [VideoPolicy::class, 'create']);
        Gate::define('video_edit', [VideoPolicy::class, 'edit']);
        Gate::define('video_delete', [VideoPolicy::class, 'delete']);
    }
}
