<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property integer $faculty_id
 * @property integer $parent_id
 * @property string $name
 * @property string $url
 * @property boolean $display_order
 * @property boolean $status
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
    protected $fillable = ['faculty_id', 'parent_id', 'name', 'url', 'display_order', 'status', 'created_at', 'updated_at'];

    public function childrens()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

}
