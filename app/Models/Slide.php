<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property string $name
 * @property int $display_order
 * @property string $link
 * @property string $browser_target
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $updated_by
 * @property boolean $status
 * @property Faculty $faculty
 */
class Slide extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'slide';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['faculty_id', 'name', 'display_order', 'link', 'browser_target', 'description', 'created_at', 'updated_at', 'created_by', 'updated_by', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }
}
