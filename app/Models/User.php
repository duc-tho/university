<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property string $nickname
 * @property string $first_name
 * @property string $last_name
 * @property string $avatar
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property string $birthday
 * @property string $remember_token
 * @property boolean $status
 * @property boolean $isAdmin
 * @property boolean $isSystemAccount
 * @property string $created_at
 * @property string $updated_at
 * @property RoleUser[] $roleUsers
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'users';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @var array
     */
    protected $fillable = ['faculty_id', 'nickname', 'first_name', 'last_name', 'avatar', 'email', 'phone', 'password', 'birthday', 'remember_token', 'status', 'isAdmin', 'isSystemAccount', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roleUsers()
    {
        return $this->hasMany('App\Models\RoleUser');
    }

    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'role_user', 'user_id', 'role_id');
    }

    public function checkPermissionAccess($permission)
    {
        // Lấy các vai trò của user đang đang nhập
        $roles = Auth::user()->roles;

        foreach ($roles as $role) {
            $permissions = $role->permissions;

            if ($permissions->contains('name', $permission)) return true;
        }

        return false;
    }
}
