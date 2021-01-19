<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $about_category_id
 * @property string $content
 * @property string $title
 * @property string $description
 * @property string $meta_keywords
 * @property string $meta_descriptions
 * @property string $slug
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $updated_by
 * @property int $view_count
 * @property boolean $show_in_home
 * @property boolean $status
 * @property AboutCategory $aboutCategory
 */
class About extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'about';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['about_category_id', 'content', 'title', 'description', 'meta_keywords', 'meta_descriptions', 'slug', 'image', 'created_at', 'updated_at', 'created_by', 'updated_by', 'view_count', 'show_in_home', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aboutCategory()
    {
        return $this->belongsTo('App\Models\AboutCategory');
    }
}
