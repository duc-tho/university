<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey = "id";
    protected $guarded = [];
    protected $fillable = ['faculty_id', 'nickname', 'first_name', 'last_name', 'birthday', 'phone', 'email', 'password', 'status', 'created_at', 'updated_at', 'remember_token', 'avatar'];

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
        // $roles = Auth::user()->roles;

        // foreach ($roles as $role) {
        //     $permissions = $role->permissions;

        //     if ($permissions->contains('name', $permission)) return true;
        // }

        return true;
    }
}
