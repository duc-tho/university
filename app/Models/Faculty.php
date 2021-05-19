<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $meta_keywords
 * @property string $meta_descriptions
 * @property string $intro_summary
 * @property string $intro
 * @property string $layout
 * @property string $image
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property About[] $abouts
 * @property Category[] $categories
 * @property Contact[] $contacts
 * @property ImageCategory[] $imageCategories
 * @property Setting[] $settings
 * @property Slide[] $slides
 * @property Specialized[] $specializeds
 * @property Statistic[] $statistics
 * @property Student[] $students
 * @property Teacher[] $teachers
 */
class Faculty extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'faculty';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'meta_keywords', 'meta_descriptions', 'intro_summary', 'intro', 'layout', 'image', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function abouts()
    {
        return $this->hasMany('App\Models\About');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Models\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function imageCategories()
    {
        return $this->hasMany('App\Models\ImageCategory');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function settings()
    {
        return $this->hasMany('App\Models\Setting');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function slides()
    {
        return $this->hasMany('App\Models\Slide');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function specializeds()
    {
        return $this->hasMany('App\Models\Specialized');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function statistics()
    {
        return $this->hasMany('App\Models\Statistic');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teachers()
    {
        return $this->hasMany('App\Models\Teacher');
    }
}
