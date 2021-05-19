<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $display_name
 * @property int $parent_id
 * @property PermissionRole[] $permissionRoles
 */
class Permission extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'permission';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'display_name', 'parent_id'];

    /**
     * Turn on/off created, updated
     *
     * @var boolean 
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permissionRoles()
    {
        return $this->hasMany('App\Models\PermissionRole');
    }

    /**
     * Get childrens item
     */
    public function childrens()
    {
        return $this->hasMany(Permission::class, 'parent_id');
    }
}
