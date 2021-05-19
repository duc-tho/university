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
 * @property string $description
 * @property string $meta_keywords
 * @property string $meta_descriptions
 * @property string $event_time
 * @property int $view_count
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
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
    protected $fillable = ['category_id', 'title', 'slug', 'image', 'content', 'location', 'description', 'meta_keywords', 'meta_descriptions', 'event_time', 'view_count', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
