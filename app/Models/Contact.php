<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property string $email
 * @property string $phone
 * @property string $address_info
 * @property string $map_embed
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $updated_by
 * @property boolean $status
 * @property Faculty $faculty
 */
class Contact extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['faculty_id', 'email', 'phone', 'address_info', 'map_embed', 'created_at', 'updated_at', 'created_by', 'updated_by', 'status','contact_title','website','hotline'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }
}
