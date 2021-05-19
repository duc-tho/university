<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property integer $parent_id
 * @property string $title
 * @property string $slug
 * @property string $url
 * @property boolean $display_order
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property Faculty $faculty
 * @property Image[] $images
 */
class ImageCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'image_category';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['faculty_id', 'parent_id', 'title', 'slug', 'url', 'display_order', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function childrens()
    {
        return $this->hasMany(ImageCategory::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(ImageCategory::class, 'parent_id');
    }
}
