<?php

namespace App\Policies\Admin;

use App\Models\FooterLink;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FooterLinkPolicy
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
     * @param  \App\Models\FooterLink  $footerLink
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.footer_link.access.list'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.footer_link.access.create'));
    }

    public function edit(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.footer_link.access.edit'));
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FooterLink  $footerLink
     * @return mixed
     */
    public function update(User $user, FooterLink $footerLink)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FooterLink  $footerLink
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.footer_link.access.delete'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FooterLink  $footerLink
     * @return mixed
     */
    public function restore(User $user, FooterLink $footerLink)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FooterLink  $footerLink
     * @return mixed
     */
    public function forceDelete(User $user, FooterLink $footerLink)
    {
        //
    }
}
