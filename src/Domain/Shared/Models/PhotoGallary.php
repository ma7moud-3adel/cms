<?php

namespace Domain\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallary extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
//        'link',
        'image',
    ];
}
