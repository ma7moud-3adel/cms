<?php

namespace Domain\Project\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'category_id',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id');
    }

    public function projectGallery()
    {
        return $this->hasMany(ProjectGallery::class, 'project_id');
    }
}
