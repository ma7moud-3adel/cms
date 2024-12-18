<?php

namespace Domain\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseCategory extends Model
{
    protected $fillable=[
        'name_en',
        'name_ar',
        'id'
    ];

    public function course():HasMany
    {
        return $this->HasMany(CourseCategory::class,'course_category_id');
    }
}
