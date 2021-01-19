<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $category_id
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property string $content
 * @property string $location
 * @property string $event_time
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $updated_by
 * @property string $meta_keywords
 * @property string $meta_descriptions
 * @property int $view_count
 * @property boolean $status
 * @property Category $category
 */
class News extends Model
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
    protected $fillable = ['category_id', 'title', 'slug', 'image', 'content', 'location', 'event_time', 'description', 'created_at', 'updated_at', 'created_by', 'updated_by', 'meta_keywords', 'meta_descriptions', 'view_count', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
