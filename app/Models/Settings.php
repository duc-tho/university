<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property string $name
 * @property string $display_name
 * @property string $type
 * @property string $value
 * @property boolean $greneral
 * @property boolean $status
 * @property Faculty $faculty
 */
class Settings extends Model
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
    protected $fillable = ['faculty_id', 'name', 'display_name', 'type', 'value', 'greneral', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }
}
