<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $footer_link_category_id
 * @property string $title
 * @property string $link
 * @property boolean $status
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
    protected $fillable = ['footer_link_category_id', 'title', 'link', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function footerLinkCategory()
    {
        return $this->belongsTo('App\Models\FooterLinkCategory');
    }
}
