<?php

namespace Domain\Project\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    protected $fillable = [
        'project_id',
        'images'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
