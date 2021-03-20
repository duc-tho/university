<?php

namespace App\Policies\Admin;

use App\Models\FooterLinkCategory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FooterLinkCategoryPolicy
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
     * @param  \App\Models\FooterLinkCategory  $footerLinkCategory
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.footer_link_category.access.list'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.footer_link_category.access.create'));
    }

    public function edit(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.footer_link_category.access.edit'));
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FooterLinkCategory  $footerLinkCategory
     * @return mixed
     */
    public function update(User $user, FooterLinkCategory $footerLinkCategory)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FooterLinkCategory  $footerLinkCategory
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->checkPermissionAccess(config('permission.module.footer_link_category.access.delete'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FooterLinkCategory  $footerLinkCategory
     * @return mixed
     */
    public function restore(User $user, FooterLinkCategory $footerLinkCategory)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FooterLinkCategory  $footerLinkCategory
     * @return mixed
     */
    public function forceDelete(User $user, FooterLinkCategory $footerLinkCategory)
    {
        //
    }
}
