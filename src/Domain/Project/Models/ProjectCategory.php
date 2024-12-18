<?php

namespace Domain\Project\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    protected $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class,'category_id');
    }
}
