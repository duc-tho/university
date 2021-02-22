<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $meta_keywords
 * @property string $meta_descriptions
 * @property string $slug
 * @property string $intro_summary
 * @property string $intro
 * @property string $layout_name
 * @property string $layout_page
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property string $created_by
 * @property string $updated_by
 * @property boolean $status
 * @property AboutCategory[] $aboutCategories
 * @property Box[] $boxes
 * @property Category[] $categories
 * @property Contact[] $contacts
 * @property ImageCategory[] $imageCategories
 * @property Setting[] $settings
 * @property Slide[] $slides
 * @property Specialized[] $specializeds
 * @property Statistic[] $statistics
 * @property StudentRepresentative[] $studentRepresentatives
 * @property TeacherRepresentative[] $teacherRepresentatives
 * @property VideoCategory[] $videoCategories
 */
class Faculty extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "faculty";
    protected $primaryKey = "id";
    protected $guarded =[];

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'meta_keywords', 'meta_descriptions', 'slug', 'intro_summary', 'intro', 'layout_name', 'layout_page', 'image', 'created_at', 'updated_at', 'created_by', 'updated_by', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aboutCategories()
    {
        return $this->hasMany('App\Models\AboutCategory');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boxes()
    {
        return $this->hasMany('App\Models\Box');
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
    public function studentRepresentatives()
    {
        return $this->hasMany('App\Models\StudentRepresentative');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teacherRepresentatives()
    {
        return $this->hasMany('App\Models\TeacherRepresentative');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videoCategories()
    {
        return $this->hasMany('App\Models\VideoCategory');
    }
}
