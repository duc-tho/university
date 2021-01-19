<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $feedback_category_id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $content
 * @property string $phone
 * @property string $created_at
 * @property boolean $Status
 * @property FeedbackCategory $feedbackCategory
 */
class Feedback extends Model
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
    protected $fillable = ['feedback_category_id', 'name', 'email', 'subject', 'content', 'phone', 'created_at', 'Status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function feedbackCategory()
    {
        return $this->belongsTo('App\Models\FeedbackCategory');
    }
}
