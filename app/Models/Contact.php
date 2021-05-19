<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $faculty_id
 * @property string $title
 * @property string $email
 * @property string $phone
 * @property string $hotline
 * @property string $address_info
 * @property string $website
 * @property string $map_embed
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
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
    protected $fillable = ['faculty_id', 'title', 'email', 'phone', 'hotline', 'address_info', 'website', 'map_embed', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }
}
