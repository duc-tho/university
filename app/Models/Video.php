<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $video_category_id
 * @property string $title
 * @property string $link_youtube
 * @property string $description
 * @property int $display_order
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $updated_by
 * @property boolean $status
 * @property VideoCategory $videoCategory
 */
class Video extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'video';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['video_category_id', 'title', 'link_youtube', 'description', 'display_order', 'created_at', 'updated_at', 'created_by', 'updated_by', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function videoCategory()
    {
        return $this->belongsTo('App\Models\VideoCategory');
    }
}
