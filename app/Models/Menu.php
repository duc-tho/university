<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property string $name
 * @property string $url
 * @property int $display_order
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Menu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menu';

    /**
     * @var array
     */
    protected $fillable = ['id', 'faculty_id', 'name', 'url', 'display_order', 'status', 'created_at', 'updated_at'];
}
