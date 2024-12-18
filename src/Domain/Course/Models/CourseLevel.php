<?php

namespace Domain\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseLevel extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'name_en',
        'name_ar',
        'course_id'
    ];
    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class,'course_id');
    }
}
