<?php

namespace App\Providers;

use App\Policies\Admin\FacultyPolicy;
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
        Gate::define('slide_list', '');
        Gate::define('slide_create', '');
        Gate::define('slide_edit', '');
        Gate::define('slide_delete', '');

        // student
        Gate::define('student_list', '');
        Gate::define('student_create', '');
        Gate::define('student_edit', '');
        Gate::define('student_delete', '');

        // teacher
        Gate::define('teacher_list', '');
        Gate::define('teacher_create', '');
        Gate::define('teacher_edit', '');
        Gate::define('teacher_delete', '');

        // user
        Gate::define('user_list', '');
        Gate::define('user_create', '');
        Gate::define('user_edit', '');
        Gate::define('user_delete', '');
    }
}
