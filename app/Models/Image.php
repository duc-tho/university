<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $image_category_id
 * @property string $title
 * @property string $description
 * @property int $display_order
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $updated_by
 * @property boolean $status
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
    protected $fillable = ['image_category_id', 'title', 'description', 'display_order', 'created_at', 'updated_at', 'created_by', 'updated_by', 'status', 'image'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function imageCategory()
    {
        return $this->belongsTo('App\Models\ImageCategory');
    }
}
