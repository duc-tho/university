<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $link
 * @property string $fa_icon
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 */
class Socials extends Model
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
    protected $fillable = ['name', 'link', 'fa_icon', 'status', 'created_at', 'updated_at'];

}
