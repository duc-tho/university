<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $image_url
 * @property string $link
 * @property int $display_order
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
    protected $fillable = ['title', 'image_url', 'link', 'display_order', 'created_at', 'updated_at','status'];

}
