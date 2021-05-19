<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property integer $parent_id
 * @property string $title
 * @property string $slug
 * @property string $meta_keywords
 * @property string $meta_descriptions
 * @property boolean $show_at_home
 * @property boolean $show_at_notification
 * @property boolean $show_at_news
 * @property boolean $display_order
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property Faculty $faculty
 * @property News[] $news
 */
class Category extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'category';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['faculty_id', 'parent_id', 'title', 'slug', 'meta_keywords', 'meta_descriptions', 'show_at_home', 'show_at_notification', 'show_at_news', 'display_order', 'status', 'created_at', 'updated_at'];

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
    public function news()
    {
        return $this->hasMany('App\Models\News');
    }
}
