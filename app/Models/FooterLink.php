<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $footer_link_category_id
 * @property string $title
 * @property string $url
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property FooterLinkCategory $footerLinkCategory
 */
class FooterLink extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'footer_link';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['footer_link_category_id', 'title', 'url', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function footerLinkCategory()
    {
        return $this->belongsTo('App\Models\FooterLinkCategory');
    }
}
