<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property string $name
 * @property string $meta_keywords
 * @property string $meta_descriptions
 * @property string $slug
 * @property string $intro_summary
 * @property string $intro
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $updated_by
 * @property boolean $status
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
    protected $fillable = ['faculty_id', 'name', 'meta_keywords', 'meta_descriptions', 'slug', 'intro_summary', 'intro', 'image', 'created_at', 'updated_at', 'created_by', 'updated_by', 'status','level_educate','type_educate','type_time','object_educate'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }
}
