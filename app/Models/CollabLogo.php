<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $image_url
 * @property string $url
 * @property boolean $display_order
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 */
class CollabLogo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'collab_logo';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['title', 'image_url', 'url', 'display_order', 'status', 'created_at', 'updated_at'];

}
