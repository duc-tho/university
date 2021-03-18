<?php

namespace App\Policies\Admin;

use App\Models\Faculty;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Http\Request;

class FacultyPolicy
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
     * @param  \App\Models\Faculty  $faculty
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.faculty.access.list'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.faculty.access.create'));
    }

    public function edit(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.faculty.access.edit'));
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Faculty  $faculty
     * @return mixed
     */
    public function update(User $user, Faculty $faculty)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Faculty  $faculty
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.faculty.access.delete'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Faculty  $faculty
     * @return mixed
     */
    public function restore(User $user, Faculty $faculty)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Faculty  $faculty
     * @return mixed
     */
    public function forceDelete(User $user, Faculty $faculty)
    {
        //
    }
}
