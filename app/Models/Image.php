<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $image_category_id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property boolean $display_order
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property ImageCategory $imageCategory
 */
class Image extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'image';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['image_category_id', 'title', 'description', 'image', 'display_order', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function imageCategory()
    {
        return $this->belongsTo('App\Models\ImageCategory');
    }
}
