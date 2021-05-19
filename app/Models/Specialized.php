<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property string $intro
 * @property string $intro_summary
 * @property string $icons
 * @property string $level_educate
 * @property string $type_educate
 * @property string $type_time
 * @property string $object_educate
 * @property string $meta_keywords
 * @property string $meta_descriptions
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property Faculty $faculty
 */
class Specialized extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'specialized';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['faculty_id', 'name', 'slug', 'image', 'intro', 'intro_summary', 'icons', 'level_educate', 'type_educate', 'type_time', 'object_educate', 'meta_keywords', 'meta_descriptions', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }
}
