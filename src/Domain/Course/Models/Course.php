<?php

namespace Domain\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'course_category_id',
        'photo',
        'price',
        'meta_title_en',
        'meta_title_ar',
        'meta_desc_en',
        'meta_desc_ar',
        'keywords',
        'slug'
    ];
    public function courseCategory():BelongsTo
    {
        return $this->belongsTo(CourseCategory::class,'course_category_id');
    }
    public function courseLevel(): HasMany
    {
        return $this->hasMany(Course::class,'course_id');
    }
}
