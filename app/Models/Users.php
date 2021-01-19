<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property string $nickname
 * @property string $first_name
 * @property string $last_name
 * @property string $birthday
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property RoleUser[] $roleUsers
 */
class Users extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['faculty_id', 'nickname', 'first_name', 'last_name', 'birthday', 'phone', 'email', 'password', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roleUsers()
    {
        return $this->hasMany('App\Models\RoleUser');
    }
}
