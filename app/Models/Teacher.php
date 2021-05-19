<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property string $name
 * @property string $intro
 * @property string $image
 * @property string $position
 * @property string $evaluate
 * @property boolean $representative
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property Faculty $faculty
 */
class Teacher extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'teacher';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['faculty_id', 'name', 'intro', 'image', 'position', 'evaluate', 'representative', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }
}
