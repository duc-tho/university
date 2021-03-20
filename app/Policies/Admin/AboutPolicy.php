<?php

namespace App\Policies\Admin;

use App\Models\AboutCategory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AboutPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutCategory  $aboutCategory
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.about.access.list'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.about.access.create'));
    }

    public function edit(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.about.access.edit'));
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutCategory  $aboutCategory
     * @return mixed
     */
    public function update(User $user, AboutCategory $aboutCategory)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutCategory  $aboutCategory
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.about.access.delete'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutCategory  $aboutCategory
     * @return mixed
     */
    public function restore(User $user, AboutCategory $aboutCategory)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutCategory  $aboutCategory
     * @return mixed
     */
    public function forceDelete(User $user, AboutCategory $aboutCategory)
    {
        //
    }
}
